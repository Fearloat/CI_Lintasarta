<?php $this->load->view('includes/header'); ?>
<div class="content" style="">
<div id="coba_form">
    
<h1 class="warna" style="cursor:default;"><span class="i">Log</span>in!</h1>
  
    <?php if (isset($error) && $error): ?>
<center><div class="alert alert-error">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        User ID atau Password Salah 
    </div></center><br>
    <?php endif; ?>

    <?php 
	echo form_open('login/validate_credentials');
        
	?>
    
        <input type="text" id="username" class="span4" name="userid" placeholder="User Name">
        <input type="password" id="password" class="span4" name="password" placeholder="Password">
        <label class="checkbox">
            <input type="checkbox">
            <span><a4>Remember Me</a4></span> 
        </label>
        <button type="submit" name="submit" class="btn btn-info btn-block">Login</button>


</div>

</div>
<script>
(function($) {
  
  $('.content').fadeIn(1000);

})(jQuery);
</script>
<!-- end login_form-->	
<?php $this->load->view('includes/footer'); ?>
