<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// HARUS DITAMBAHKAN UNTUK CUSTOM 404 PAGE
$ci = new CI_Controller();
$ci =& get_instance();
$ci->load->helper('url');
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>404 HTML Template by Colorlib</title>

<link href="https://fonts.googleapis.com/css?family=Muli:400" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Passion+One" rel="stylesheet">

<link type="text/css" rel="stylesheet" href="http://colorlib.com/etc/404/colorlib-error-404-11/css/font-awesome.min.css" />

<link type="text/css" rel="stylesheet" href="http://colorlib.com/etc/404/colorlib-error-404-11/css/style.css" />

</head>
<body>
<div id="notfound">
<div class="notfound-bg"></div>
<div class="notfound">
<div class="notfound-404">
<h1>404</h1>
</div>
<h2>Oops! Page Not Found</h2>
<h4>Contact WebDev Indo as Developer </h4>
<div class="notfound-social">
<a href="http://instagram.com/webdev.indo"><i class="fa fa-twitter"></i></a>
</div>
<a href="<?= base_url('/'); ?>">Back To Homepage</a>
</div>
</div>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js" data-cf-settings="2234e0f20ed4bcff76e2c2e7-|49" defer=""></script></body>
</html>
