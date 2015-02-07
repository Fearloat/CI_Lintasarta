<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/navbar'); ?>




 
<?php if (isset($row->id)) : ?><h2>Edit</h2>
<?php else : ?><h2>Add Perusahaan</h2>
<?php endif; ?>
<div id="test_aja">
<div class="well">
    
<?php if(validation_errors()):?>
<div class='alert alert-danger '>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <?php echo validation_errors(); ?></div>
<?php endif;?>
 
<?php echo form_open(); ?>

<div class="field"><label>Nama: </label><div>
    <?php echo form_input('nama_perusahaan', (isset($row->nama_perusahaan)) ? $row->nama_perusahaan : '' ); ?>
      
    </div></div>

<div class="field"><label>Alamat: </label><div>
    <?php echo form_input('alamat', (isset($row->alamat)) ? $row->alamat : '' ); ?> 
    
    </div></div>

<div class="field"><label>Jenis Sewa: </label><div><div>
<?php     
       $options = array(
       'rak'  => 'Rak',
       'area/sekat'    => 'Area/Sekat',
       'server'   => 'Server' 
                );
echo form_dropdown('jenis_sewa', $options, 'server');?>

        </div></div>
    
<div class="field"><label>Nomor Jaringan: </label><div>
    <?php echo form_input('nojar', (isset($row->nojar)) ? $row->nojar : '' ); ?>
    
    </div></div>
    
<div class="field"><label>Lokasi Data Center: </label><div><div>
<?php     
$lantai = array(
                  '1'  => '1',
                  '2'    => '2',
                  '3'   => '3',                 
                );
echo form_dropdown('lokasidc', $lantai, '1');?>
</div></div>
    
<?php echo form_submit('submit', 'Submit'); ?>
<?php echo form_close(); ?>
</DIV>
</div>
</div>
</div>
<?php $this->load->view('includes/footer'); ?>
