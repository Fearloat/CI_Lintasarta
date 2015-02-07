<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/navbar'); ?>
<script>
function doconfirm()
{
    job=confirm("Are you sure to delete permanently?");
    if(job!=true)
    {
        return false;
    }
}
</script>
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
           <h4>Daftar Anggota</h4>
        </div>
    </div>
        <table class="table table-bordered" >    
        <th colspan="2">
        <?php if (isset($nav)) echo $nav; ?>
        </th>
        <tbody>
        <td><?php if (isset($list)) echo $list; ?></td>
        </tbody>
        </table>
</div>
<?php $this->load->view('includes/footer'); ?>

