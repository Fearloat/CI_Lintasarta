<?php $this->load->view('includes/header_user'); ?>
<?php $this->load->view('includes/navbar_user'); ?>



<div class="alert alert-info">
    <a class="close" data-dismiss="alert" href="#">&times;</a>
  <p class="text-info">
    Welcome
    <?php
    echo $userid;?>
    <br>
    <?php
   echo date ("Y/m/d") . "<br>" ;
?>
</p>  

</div>
<?php $this->load->view('includes/footer_user'); ?>  
