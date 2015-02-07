<?php $this->load->view('includes/header_user'); ?>
<?php $this->load->view('includes/navbar_user'); ?>    
<style>
    .conte
    {
    color : #b6b6b6;
    width: 550px;
    background: #f0f0f0 url(../img/login_bg.jpg) repeat-x  ;
    border: 1px solid white;
    margin:  100px auto 0;
    padding: 1em;
    -moz-border-radius:3px;
    }
    
    .countt
    {
      margin-top:  10px; 
      margin-left: 164px;
      margin-right: 164px
    }
    
</style>

<div class="conte">
    <h2>Booking Area</h2>
   <?php echo form_open(); ?>


<div class ="countt">
<label>Date: </label>
<input type="text"  name="tanggal" id="tanggal" size="30" />
<hr>
<label>Anggota: </label>
<select multiple="multiple">
  <option>Test1</option>
  <option>Test2</option>
  <option>Test3</option>
  <option>Test4</option>
  <option>Test5</option>
</select> 
<label>Gunakan Shift/Ctrl Untuk Multiple select</label>
<hr>
<button type="submit" name="submit" class="btn btn-info btn-block span2">Submit</button>

 
</div>
</div> 



<?php $this->load->view('includes/footer_user'); ?>  
