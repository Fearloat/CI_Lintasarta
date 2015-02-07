<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/navbar'); ?>



<?php if (isset($row->id)) : ?><h2>Edit</h2>
<?php else : ?><h2>Add Anggota</h2>
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

<div class="field"><label>Nama: </label><div>
    <?php echo form_input('nama', (isset($row->nama)) ? $row->nama : '' ); ?>
    
    </div></div>

<div class="field"><label>Jabatan: </label><div>
    <?php echo form_input('jabatan', (isset($row->jabatan)) ? $row->jabatan : '' ); ?> 
    
    </div></div>

<div class="field"><label>Pekerjaan: </label><div>
<?php echo form_input('pekerjaan', (isset($row->pekerjaan)) ? $row->pekerjaan : '' ); ?>

        </div></div>
    
<div class="field"><label>Hubungan: </label><div>
    <?php echo form_input('hub', (isset($row->hub)) ? $row->hub : '' ); ?>
    
    </div></div>
    
    <div class="field"><label>Periode: </label><div>
<?php echo form_input('periode', (isset($row->periode)) ? $row->periode : '' ); ?>

    </div></div>
<?php echo form_submit('submit', 'Submit'); ?>
<?php echo form_close(); ?>

</div>
</div>
<div id="top-shadow"></div>

<?php $this->load->view('includes/footer'); ?>
