<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Calculator by OGrant</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href=<?=base_url('assets/css/main.css');?>>
  

  <!--start bootstrap -->
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href=<?=site_url();?>>Online Calculator</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href=<?=site_url();?>>Home</a></li>
      <li><a href=<?=site_url('add');?>>Addition</a></li>
      <li><a href=<?=site_url('subtract');?>>Subtraction</a></li>
      <li><a href=<?=site_url('multiply');?>>Multiplication</a></li>
      <li><a href=<?=site_url('divide');?>>Division</a></li>
      <li><a href=<?=site_url('percent');?>>Percentage</a></li>
    </ul>
  </div>
</nav>


<div class="container">


