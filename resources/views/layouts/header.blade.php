<button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar"
        data-class="c-sidebar-show">
    <i class="c-icon c-icon-lg cil-menu"></i>
</button>
<a class="c-header-brand d-lg-none c-header-brand-sm-up-center" href="#">
    <img src="{{ asset('/images/admin/logo.png') }}" width="118" alt="Brand Logo">
</a>
<button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar"
        data-class="c-sidebar-lg-show" responsive="true">
    <i class="c-icon c-icon-lg cil-menu"></i>
</button>
<ul class="c-header-nav mfs-auto">
</ul>
<ul class="c-header-nav">
    <li class="c-header-nav-item dropdown">
        <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button"
           aria-haspopup="true" aria-expanded="false">
            <div class="c-avatar">
                <i class="c-icon c-icon-lg cil-user"></i>
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-right pt-0">
            <div class="dropdown-header bg-light py-2"><strong>Аккаунт</strong></div>
            <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="c-icon mfe-2 cil-account-logout"></i>Выход
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="GET" class="d-none">
                @csrf
            </form>
        </div>
    </li>
</ul>
<div class="c-subheader justify-content-between px-3">
    {{ Breadcrumbs::render($data['page']) }}
</div>
