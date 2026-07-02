<?php
session_start();
require_once '../service/url.php';
require_once '../service/service.php';
$pageTitle  = 'About Us — SYNCXELL LLC';
$pageDesc   = 'SYNCXELL LLC delivers full-spectrum IT solutions for US Federal Government, Banking, and Legal sectors — cloud, cybersecurity, NIST/FISMA/CMMC compliance.';
$activePage = 'about';
include view('public/about-page');
