<?php
include 'header.php';
include '../config.php';
if(isset($_GET['B'])){
  $id=$_GET['B'];
  $del = mysqli_query($con,"delete from tblmovie where M_Id='$id'");
  if($del){
    echo "<script>alert('Delete Record Successfully!!')</script>";
  }
  else{
    echo "<script>alert('Record Not Deleted')</script>";
  }
}
?>
<link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

<!-- partial -->
<div class="main-panel">
          <div class="content-wrapper">
            <h1>View MOVIES</h1>
            <table class="table table-responsive table-striped table-dark table-hover" id="myTable">
                <thead>
                    <tr>
                        <th>Movie Id</th>
                        <th>Movie Name</th>
                        <th>Movie Date</th>
                        <th>Movie Description</th>
                        <th>Cinema Name</th>
                        <th>Industry</th>
                        <th>Genre</th>
                        <th>Language</th>
                        <th>Cinema Date</th>
                        <th>Movie Trailer</th>
                        <th>Images</th>
                        <th>Action</th>
                    </tr>
                    
                </thead>
                <tbody>
                <?php
                
              
                $select = mysqli_query($con,"select * from tblmovie join tblcinema on tblmovie.Cinema = tblcinema.C_Id join tblindustry on tblmovie.Industry = tblindustry.IN_Id join tblgenres on tblmovie.Genre = tblgenres.G_Id join tbllanguage on tblmovie.Language = tbllanguage.L_Id join tblcinemadate on tblmovie.Cinema_Date = tblcinemadate.CD_Id");
                  foreach($select as $data){
                    echo "<tr> 
                    <td>$data[M_Id]</td>
                    <td>$data[M_Name]</td>
                    <td>$data[M_Date]</td>
                    <td>$data[M_Description]</td>
                    
                    <td>$data[C_Name]</td>
                    
                    <td>$data[IN_Name]</td>
                    <td>$data[G_Name]</td>
                    <td>$data[L_Name]</td>
                    <td>$data[CD_Date]</td>
                    <td>$data[Movie_Trailer]</td>
                    <td>$data[M_Images]</td>
                  
                    
                  
                   
                    
                    
                    
                    
                   
                  
                    <td> <a href='viewmovie.php?B=$data[M_Id]' class='text-danger p-3'><i class='fa-solid fa-trash'></i></a>
                     <a href='update.php?MU=$data[M_Id]' class='text-success '><i class='fa-regular fa-pen-to-square'></i></a>
                </td>
                   
                    </tr>";
                  
                  }
                    
                    ?>
                </tbody>
            </table>
          </div>
          <!-- content-wrapper ends -->
          <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

          <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script>
  	
let table = new DataTable('#myTable');
</script>

<?php
include 'footer.php';
?>
  $select_cinema=mysqli_query($con,"select * from tblmovie join tblcinema on tblmovie.Cinema = tblcinema.C_Id");
                    foreach($select_cinema as $data_cinema){
                      echo "<td>$data_cinema[C_Location]</td>";
                    }
                    $select_indu=mysqli_query($con,"select * from tblmovie join tblIndustry on tblmovie.industry = tblIndustry.IN_Id");
                    foreach($select_indu as $data_indu){
                      echo " <td>$data_indu[IN_Name]</td>";
                    }
                    $select_gen=mysqli_query($con,"select * from tblmovie join tblgenres on tblmovie.Genre = tblgenres.G_Id");
                    foreach($select_gen as $data_gen){
                      echo " <td>$data_gen[G_Name]</td>";
                    }
                    $select_lan=mysqli_query($con,"select * from tblmovie join tbllanguage on tblmovie.Language = tbllanguage.L_Id");
                    foreach($select_lan as $data_lan){
                      echo " <td>$data_lan[L_Name]</td>";
                    }
                    $select_cindat=mysqli_query($con,"select * from tblmovie join tblcinemadate on tblmovie.Cinema_Date = tblcinemadate.CD_Id");
                    foreach($select_cindat as $data_cindat){
                      echo " <td>$data_cindat[CD_Date]</td>";
                    }
                    echo "<td><img src='pics/$data[M_Images]' width='20px' height='20px'></td>";
                  