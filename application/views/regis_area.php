<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/navbar'); ?>


<?php if (isset($row->id)) : ?><h2>Registrasi</h2>
<?php else : ?><h2>Registrasi</h2>
<?php endif; ?>
<div id="test_aja">
    <div class="well">
        
   <?php if(validation_errors()):?>
    <div class='alert alert-danger '>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <?php echo validation_errors(); ?></div>
<?php endif;?>

        <?php echo form_open(); ?>

        <div class="field"><label>Nama Perusahaan: </label><div>
    <?php echo form_dropdown('id_perusahaan',$select_options,'');?>
    
    </div></div>
        
        <div class="field"><label>User Name: </label><div>
    <?php echo form_input('userid', (isset($row->userid)) ? $row->userid : '' ); ?>

    </div></div>
        
        <div class="field"><label>Password: </label><div>
    <?php echo form_password('password', (isset($row->password)) ? $row->password : '' ); ?>
                
     <button type="submit" name="submit" onClick="return doconfirm();" class="btn btn-info btn-block">Submit</button>
    <?php echo form_close(); ?>
    </div></div></div></div>

<div id="top-shadow"></div>

<?php $this->load->view('includes/footer'); ?>
        
        