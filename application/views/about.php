<!DOCTYPE html>


<html lang="en">
   
<head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    </head>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate-custom.css');?>" type="text/csss" media="screen" >
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" type="text/css" media="screen" > 
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-responsive.css');?>" type="text/css" media="screen" >
  
    <style>
    body {
    font-family: 'proxima-nova',Proxima Nova,'Helvetica Neue',Helvetica,sans-serif;
    margin: 0;
    -webkit-text-size-adjust: 100%;
    -webkit-font-smoothing: antialiased;
    font-family: proxima-nova,'Proxima Nova','Helvetica Neue',Helvetica,sans-serif;
    color: #333;
    line-height: 1.5;
    font-size: 100%;
    font-size: 16px;
    }
    
 
    
    .footer {
    text-align: center;
    padding: 30px 0;
    margin-top: 250px;
    border-top: 1px solid #e5e5e5;
    background-color: #000000;
    }
    
    .navbar .nav {
    
    float: left;
    margin-top: 0px;
   
    }
    
    .row-fluid {
        margin-top: 150px;  
  
    }
    .thumbnail {
        background-color: #000000;
    }
    
    .h1 {
        color : #747c81;
    }
    .form-inline
    {
        margin-top: 16px;   
        
    }
    
    .it{
        
        margin-top: 16px;
    }
    
   
  
    </style> 
    
    <body>
        
         <div class="container">
             <div class="navbar navbar-inverse navbar-fixed-top-center">
             <div class="navbar-inner">
               
             
                    <ul class="nav">
                        <li class="it"><a href="<?php echo site_url('home')?>">Home</a></li>
                        <li class="it"><a href="">About</a></li>
                        
                        
                    </ul>
                <ul class="nav pull-right">
                    <form class="form-inline" <?php echo form_open('home/validate_credentials');?>
                        
                            
                        <input type="text" name="userid"  class="span2" placeholder="User ID">
                        <input type="password" name="password"   class="span2" placeholder="Password">
                        <label class="checkbox">
                        <input type="checkbox"> Remember me
                        </label>
                        <button type="submit" class="btn"> Sign-In</a> </button>
                        
                           <a href="#myModal" class="btn" role="button" data-toggle="modal">Sign-Up</a>
                        <?php if (isset($error) && $error): ?>
                        <center><div class="alert alert-error">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        User ID atau Password Salah 
                        </div></center><br>
                        <?php endif; ?>

                        </form>
                        
                        </ul>  
               </div>
            </div>
              <h2>Tampilan About User</h2>
      <p>Dokumen kosong dengan library Bootstrap-carousel</p>
   <!-- Carousel
        ================================================== -->
        <div id="myCarousel" class="carousel slide">
          <div class="carousel-inner">
            <div class="item active" style="height:350px;">
               <center> <?php echo img(array('src'=>'/assets/img/1.jpg', 'alt'=> '')); ?></center>
              <div class="container">
                <div class="carousel-caption">
                  <h1>Welcome!</h1>
                  <p class="small">Welcome to Lintasarta, specialists in data communications, Internet and value added services. Our website has been designed to make it easy for you to gain an insight into our business and to access information about our world-class products and services. Enjoy your visit.</p>
                  
                </div>
              </div>
            </div>
            <div class="item" style="height:350px;">
                <center> <?php echo img(array('src'=>'/assets/img/2.jpg', 'alt'=> '')); ?></center>
              <div class="container">
                <div class="carousel-caption">
                  <h1>Welcome!</h1>
                  <p class="small">Welcome to Lintasarta, specialists in data communications, Internet and value added services. Our website has been designed to make it easy for you to gain an insight into our business and to access information about our world-class products and services. Enjoy your visit.</p>
                  
                </div>
              </div>
            </div>
            <div class="item" style="height:350px;">
              <center><?php echo img(array('src'=>'/assets/img/3.jpg', 'alt'=> '')); ?></center>
              <div class="container">
                <div class="carousel-caption">
                 <h1>Welcome!</h1>
                  <p class="small">Welcome to Lintasarta, specialists in data communications, Internet and value added services. Our website has been designed to make it easy for you to gain an insight into our business and to access information about our world-class products and services. Enjoy your visit.</p>
                     
                </div>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div><!-- /.carousel -->
        <!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Sign Up!</h3>
  </div>
  <div class="modal-body">
      <legend>Hubungi kami di!</legend>
      <address>
  <strong>Twitter, Inc.</strong><br>
  795 Folsom Ave, Suite 600<br>
  San Francisco, CA 94107<br>
  <abbr title="Phone">P:</abbr> (123) 456-7890
</address>
 
<address>
  <strong>Full Name</strong><br>
  <a href="mailto:#">first.last@example.com</a>
</address>
    
  </div>
</div>
        <hr>
        <div class="row-fluid">
            <div class="span4">
            <h1>Marketing</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
             <a class="btn" href="#" >View Details</a>
            </div>
        
       
        
       
            <div class="span4">
            <h1>Marketing</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <a class="btn" href="#" >View Details</a>
            </div>
        
        
        
        
            <div class="span4">
            <h1>Marketing</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <a class="btn" href="#" >View Details</a>
            </div>
             
        </div> 
         </div>
        <hr>
        
       
        <div class="footer">
            <div class="container">
                
            </div>
        </div>
        <script src="<?php echo base_url ('assets/js/bootstrap-modal.js');?>" type="text/javascript" charset="utf-8"></script> 
<script src="<?php echo base_url ('assets/js/bootstrap-modalmanager.js');?>" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo base_url ('assets/js/jquery-1.8.2.min.js');?>" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo base_url ('assets/js/bootstrap.min.js');?>" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo base_url ('assets/js/bootstrap-carousel.js');?>" type="text/javascript" charset="utf-8"></script>
    </body>
</html>