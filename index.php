<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'app/core/Route.php';
require_once 'app/routes/web.php';

Route::dispatch();