<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();



include_once('site-route.php');
include_once('member-route.php');
include_once('admin-route.php');
