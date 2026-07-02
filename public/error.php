<?php
session_start();
require_once '../service/url.php';
require_once '../service/service.php';
http_response_code(404);
$pageTitle  = '404 — Page Not Found';
$pageDesc   = '';
$activePage = '';
include view('public/error-page');
