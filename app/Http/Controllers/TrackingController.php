<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class TrackingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        if (Auth::guard('web')->check()){
            return view('user.tracking')->with('error_msg','');
        }
        else return view('admin.users');
    }
    /**
     * Display the specified resource.
     *
     * @param  string  $num
     * @return \Illuminate\Http\Response
     */
    public function info(Request $num)
    {
        $values = json_decode(Http::post('http://waybill.osulta.kz/service/read-track',[
            'num' => $num->input('num')
        ])->body());
        if (property_exists($values, 'message')){
            $error_msg = $values->message;
            return view('user.tracking')->with('error_msg', $error_msg);
        }
        return view('user.info')->with('values', $values)->with('error_msg', '');
    }
    public function tracking(Request $track_num)
    {
        $values = json_decode(Http::post('http://waybill.osulta.kz/service/read-track',[
            'track_num' => $track_num->input('track_num')
        ])->body());
        $error_msg = '';
        if (isset($values['message'])){
            $error_msg = $values->message;
            $values = new \stdClass();
            $values->value2[0] = new \stdClass();
            $values->value2[0]->track_num = $track_num->input('track_num');
        }
        return view('user.info')->with('values', $values)->with('error_msg', $error_msg);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
