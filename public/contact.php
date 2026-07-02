<?php
session_start();
require_once '../service/url.php';
require_once '../service/service.php';

$pageTitle  = 'Contact Us — SYNCXELL LLC';
$pageDesc   = 'Get in touch with SYNCXELL LLC for federal IT, cybersecurity, cloud, and NIST/FISMA/CMMC compliance engagements.';
$activePage = 'contact';

include view('public/contact-page');
