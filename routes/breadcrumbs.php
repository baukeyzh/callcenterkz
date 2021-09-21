<?php
// routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Главная', route('admin.home'));
});
Breadcrumbs::for('users', function ($trail) {
    $trail->parent('home');
    $trail->push('Пользователи', route('admin.users'));
});
Breadcrumbs::for('user_create', function ($trail) {
    $trail->parent('users');
    $trail->push('Добавить пользователя', route('admin.user.create'));
});
Breadcrumbs::for('user_edit', function ($trail) {
    $trail->parent('users');
    $trail->push('Изменить пользователя', route('admin.users'));
});
