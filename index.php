<?php
session_start();

require('core/functions.php');

require(core('connection'));
require(core('auth'));
require(core('menu'));
require(core('route/routes'));

require(view('partial/header'));
require(view('components/orders'));
require(view('partial/navbar'));
if ( Auth::isAuth() ) {
    require( checkUrl($get) );
} else {
    require(view('auth/login'));
}
require(view('partial/footer'));