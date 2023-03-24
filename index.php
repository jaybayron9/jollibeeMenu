<?php
session_start();

require('core/functions.php');

require(core('connection'));
require(core('menu'));

require(view('partial/header'));
require(view('partial/navbar'));
require( checkUrl($get) );
require(view('partial/footer'));