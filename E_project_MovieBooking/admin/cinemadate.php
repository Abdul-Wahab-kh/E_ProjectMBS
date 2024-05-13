<?php
include 'header.php';
include '../config.php';
if(isset($_GET['D'])){
     $cd=$_GET['D'];
     $del = mysqli_query($con,"delete from tblcinemadate where CD_Id = '$cd'");
}
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<!-- partial -->
<div class="main-panel">
          <div class="content-wrapper">
            <div class="container bg-dark rounded-3 mb-3 p-3">
          <h1>Cinema Date</h1>
            <form action="" method="post">
            <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-lg">Date</label>
           <div class="col-sm-10">
           <input type="date" class="form-control" name="txtcd">
           </div>
          </div>
         
          <div class="text-center">
          <input type="submit" name="btnadddate" id="" class="btn btn-warning fs-5 btn-lg mb-3" value="Add Cinema Date">
          </div>
            </form>
            </div>
     
          
          <!-- content-wrapper ends -->


          <?php
          if(isset($_POST['btnadddate'])){
    
            $d=$_POST['txtcd'];
            $insert=mysqli_query($con,"insert into tblcinemadate values('null','$d')");
          }
          ?>
          <div class="conatiner bg-dark rounded-3">
               <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Date</th>
                <th>Action</th>
                
                
            </tr>
        </thead>
        <tbody>
            <?php
            $select = mysqli_query($con,"select * from tblcinemadate");
            foreach($select as $data){
                echo "  <tr>
                <td>$data[CD_Id]</td>
                <td>$data[CD_Date]</td>
                
                <td> <a href='cinemadate.php?D=$data[CD_Id]' class='text-danger p-3'><i class='fa-solid fa-trash'></i></a>
                  
                </td>

            </tr>
            </div>";
            }
            ?>
   
        </tbody>
     </table>
     </div>
<?php
include 'footer.php';
?>