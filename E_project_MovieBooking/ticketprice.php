<?php
include 'config.php';
include 'header.php';
?>

<div class="container mt-5">
<table class="table table-bordered table-striped table-dark text-center">
    <thead>
    <tr>
        
        <th>Movie Name</th>
        <th>First Class Price</th>
        <th>Busniess Price</th>
        <th>Economy Price</th>
        
    </tr>
    </thead>
    <tbody>

    
<?php
    $select = mysqli_query($con,"select * from tblseats  join tblmovie on tblseats.M_Name=tblmovie.M_Id");
    foreach($select as $data){
    echo "<tr>
 
    <td>$data[M_Name]</td>
    <td>$data[First_Class]</td>
    <td>$data[Busniess]</td>
    
    <td>$data[Economy]</td>
    
</tr>";
    }
?>
</tbody>
</table>
</div>

<?php
include 'footer.php'
?>