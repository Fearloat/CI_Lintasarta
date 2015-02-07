<?php $this->load->view('includes/header_user'); ?>	
<?php $this->load->view('includes/navbar_user'); ?>

<style>
    table,th,td
td
{
border: 0px solid ;
text-align: center;
}
table
{
width:100%;
text-align: center;
}
th
{
height:10px;
}
</style>


<div class="container">
    <div class="row-fluid">
        <div class="span8"> 
           <h4>TEST</h4>
        </div>
    </div>
        <table class="table table-bordered" >      
        <tbody>   
        <tr><td><?php if (isset($list)) echo $list; ?></td></tr>
        </tbody>
        </table>
</div>



<?php $this->load->view('includes/footer_user'); ?>	