<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/navbar'); ?>
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

  <h3>Daftar anggota</h3>
  

        <table class="table table-bordered" >    
        <th colspan="2">
        <?php if (isset($nav)) echo $nav; ?>
        </th>
        <tbody>
        <td><?php if (isset($list)) echo $list; ?></td>
        </tbody>
        </table>
</div>
</div>
    
<?php $this->load->view('includes/footer'); ?>