<?php
session_start();
define('BASE_URL', '/SOSPatinhas/');

require_once 'app/core/Route.php';
require_once 'app/routes/web.php';

Route::dispatch();
include('app/componentes/errorModal.php');