
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
           <h4>Daftar Perusahaan</h4>
        </div>
    </div>
        <table class="table table-bordered" >    
        <th colspan="2" style="text-align:center">
        <?php if (isset($nav)) echo $nav; ?>
        </th>    
        <tbody>   
        <tr><td><?php if (isset($list)) echo $list; ?></td></tr>
        </tbody>
        </table>
</div>

    
    