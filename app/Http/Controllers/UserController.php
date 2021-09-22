<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
    $this->middleware('auth:admin');
    }
    public function index()
    {

        if (Auth::guard('web')->check()){
            return redirect()->route('home');
        }
        View::share('admin_page', 'users');
        $users = User::paginate(5);
        return view('admin.users.index',['users'=> $users]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        View::share('admin_page', 'user_create');
        return  view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:255|unique:users',
            'name' => 'required'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        if (!($request->password == $request->password_repeat)){
            return redirect('admin/user/create')->with('error','Пароли не совпадают');
        }
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect('admin/users')->with('success','Пользователь успешно добавлен!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        View::share('admin_page', 'user_edit');
        return view('admin.users.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if ($user->email != $request->email){
            $this->validate($request, [
                'email' => 'required|email|max:255|unique:users',
            ]);
        }
        $this->validate($request, [
            'name' => 'required'
        ]);
        if ($request->password != $request->password_repeat){
            return redirect('admin/user/edit/'.$id.'')->with('error','Пароли не совпадают');
        }
        if (strlen($request->password) != 0){
            $user->password = bcrypt($request->password);
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect('admin/users')->with('success','Пользователь успешно изменен!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('admin/users')->with('success','Пользователь успешно удален!');
    }
}
