<!DOCTYPE html>

<html lang="en">
<head>
        
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
	<title>Admin Site!</title>
     
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" type="text/css" media="screen" > 
        <style>
        body {
        padding-top: 5px;
        padding-bottom: 60px;
        }
        </style>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-responsive.min.css');?>"  type="text/css" media="screen" >
	<link rel="stylesheet" href="<?php echo base_url('assets/css/animate.min.css');?>"  type="text/css" media="screen" >
</head>
<body>

<div class="navbar navbar-inverse">
  <div class="navbar-inner"><i class="icon-signin"></i>
      <ul class="nav pull-left">
          
            <li><a href='<?php echo site_url('site/admin_area')?>'>Home</a></li>
            <!--/drop downnya perusahaan -->   
            <li class ="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Perusahaan <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href='<?php echo site_url('manage/add')?>'>Add Perusahaan</a></li>
                    <li class="divider"></li>
                    <li><a href='<?php echo site_url('manage')?>'>List Perusahaan</a></li>
                </ul>
            </li>   
             <!--/drop downnya anggota --> 
            <li class ="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Anggota <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href='<?php echo site_url('manage_anggota/add')?>'>Add Anggota</a></li>
                    <li class="divider"></li>
                    <li><a href='<?php echo site_url('manage_anggota')?>'>List Anggota</a></li>
                </ul>
            </li>
            <li ><a href='<?php echo site_url('site/regis')?>'>Registrasi</a></li>
            <li ><a href='<?php echo site_url('site/booking')?>'>Booking</a></li>
            
            
    
      </ul>

      <ul class="nav pull-right">
    
        <li><a href='<?php echo site_url('login/logout', 'Logout');?>'>Logout</a></li>
 
      </ul>
  </div>
</div>      
      
    
    
    