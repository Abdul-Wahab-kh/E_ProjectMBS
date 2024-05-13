<?php
include 'header.php';
include '../config.php';
if(isset($_GET['B'])){
     $gid=$_GET['B'];
     $del = mysqli_query($con,"delete from tblgenres where G_Id = '$gid'");
}
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<!-- partial -->
<div class="main-panel">
          <div class="content-wrapper">
            <div class="container bg-dark rounded-3 mb-3 p-3">
          <h1>Genres</h1>
            <form action="" method="post">
            <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-lg">Industry Name</label>
           <div class="col-sm-10">
           <select class="form-select" aria-label="Default select example" name="txtgn" id="colFormLabelSm">
            <option value="" selected>Select</option>
            <option value="Action/Adventure">Action/Adventure</option>
            <option value="Animals">Ainmals</option>
            <option value="Biography">Biography</option>
            <option value="Entertainment">Entertainment</option>
            <option value="Drama">Drama</option>
            <option value="Education">Education</option>
            <option value="Family">Family</option>
            <option value="Politics">Politics</option>
            <option value="Comedy">Comedy</option>
            <option value="Animation">Animation</option>
            <option value="Horror">Horror</option>
            <option value="War">War</option>
            <option value="Fantasy">Fantasy</option>
           </select>
           </div>
          </div>
         
          <div class="text-center">
          <input type="submit" name="btnaddgenre" id="" class="btn btn-warning fs-5 btn-lg mb-3" value="Add Genre">
          </div>
            </form>
            </div>
     
          
          <!-- content-wrapper ends -->


          <?php
          if(isset($_POST['btnaddgenre'])){
    
            $gn=$_POST['txtgn'];
            $insert=mysqli_query($con,"insert into tblgenres values('null','$gn')");
          }
          ?>
          <div class="conatiner bg-dark rounded-3">
               <table class="table">
        <thead>
            <tr>
                <th> Id</th>
                <th>Genres Name</th>
                <th>Action</th>
                
                
            </tr>
        </thead>
        <tbody>
            <?php
            $select = mysqli_query($con,"select * from tblgenres");
            foreach($select as $data){
                echo "  <tr>
                <td>$data[G_Id]</td>
                <td>$data[G_Name]</td>
                
                <td> <a href='genre.php?B=$data[G_Id]' class='text-danger p-3'><i class='fa-solid fa-trash'></i></a>
                   <a href='update.php?GU=$data[G_Id]' class='text-success'><i class='fa-regular fa-pen-to-square'></i></a>
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