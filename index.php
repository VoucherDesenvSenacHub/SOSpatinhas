<?php
session_start();

require_once 'app/core/Route.php';
require_once 'app/routes/web.php';

Route::dispatch();