<?php
include 'header.php';
include '../config.php';
?>

<!-- partial -->
<div class="main-panel">
          <div class="content-wrapper">
          <h1 class="text-danger">Add Movies</h1>
          <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-lg">Movie Name</label>
           <div class="col-sm-10">
            <input type="text" class="form-control form-control-lg text-light" id="colFormLabelSm" placeholder="Movie Name" name="txtmn">
           </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-lg">Movie Date</label>
           <div class="col-sm-10">
            <input type="date" class="form-control form-control-lg text-light" id="colFormLabelSm" placeholder="Cinema Name" name="txtdt">
           </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-lg">Movie Description</label>
           <div class="col-sm-10">
           <textarea name="txtmd" id="" cols="30" rows="10" class="form-control text-light mb-3" placeholder="Enter Movie Description"></textarea>
           </div>
          </div>
          <div class='form-group row'>
          <label for='colFormLabelSm' class='col-sm-2 col-form-label col-form-label-lg'>Cinema Location</label>
           <div class='col-sm-10'>
          <select name='txtmc'  class='form-control text-light'>
           <?php
       $select =mysqli_query($con,"select * from tblcinema");
       
          
          
          foreach($select as $data){
              echo "<option value='$data[C_Id]'>$data[C_Location]</option>";
          }
          ?>
        </select>
           </div>
          </div>
       

          <div class='form-group row'>
          <label for='colFormLabelSm' class='col-sm-2 col-form-label col-form-label-lg'>Industry</label>
           <div class='col-sm-10'>
          <select name='txtmi'  class='form-control text-light'>
           <?php
       $select =mysqli_query($con,"select * from tblindustry");
       
          
          
          foreach($select as $data){
              echo "<option value='$data[IN_Id]'>$data[IN_Name]</option>";
          }
          ?>
        </select>
           </div>
          </div>

 

          <div class='form-group row'>
          <label for='colFormLabelSm' class='col-sm-2 col-form-label col-form-label-lg'>Genre</label>
           <div class='col-sm-10'>
          <select name='txtmg'  class='form-control text-light'>
           <?php
       $select =mysqli_query($con,"select * from tblgenres");
       
          
          
          foreach($select as $data){
              echo "<option value='$data[G_Id]'>$data[G_Name]</option>";
          }
          ?>
        </select>
           </div>
          </div>


          <div class='form-group row'>
          <label for='colFormLabelSm' class='col-sm-2 col-form-label col-form-label-lg'>Language</label>
           <div class='col-sm-10'>
          <select name='txtml'  class='form-control text-light'>
           <?php
       $select =mysqli_query($con,"select * from tbllanguage");
       
          
          
          foreach($select as $data){
              echo "<option value='$data[L_Id]'>$data[L_Name]</option>";
          }
          ?>
        </select>
           </div>
          </div>



          <div class='form-group row'>
          <label for='colFormLabelSm' class='col-sm-2 col-form-label col-form-label-lg'>Cinema Date</label>
           <div class='col-sm-10'>
          <select name='txtmcd'  class='form-control text-light'>
           <?php
       $select =mysqli_query($con,"select * from tblcinemadate");
       
          
          
          foreach($select as $data){
              echo "<option value='$data[CD_Id]'>$data[CD_Date]</option>";
          }
          ?>
        </select>
           </div>
          </div>
            

          <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-lg">Movie Trailer</label>
           <div class="col-sm-10">
            <input type="text" class="form-control form-control-lg text-light" id="colFormLabelSm" placeholder="Movie Trailer" name="txtmt">
           </div>
          </div>
     



         

          <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-lg">Movie Image</label>
           <div class="col-sm-10">
            <input type="file" class="form-control form-control-lg text-light" id="colFormLabelSm"name="txtf">
           </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-lg">Movie Timing</label>
           <div class="col-sm-10">
          <select name="txtmst" id="" class="form-control text-light">
            <option value="9:00 AM to 12:10 PM">9:00 AM to 12:10 PM</option>
            <option value="12:20 PM to 2:10 PM">12:20 PM to 2:10 PM</option>
            <option value="2:40 AM to 5:30 PM">2:40 AM to 5:30 PM</option>
            <option value="5:40 PM to 8:10 PM">5:40 PM to 8:10 PM</option>
            <option value="8:20 PM to 9:40 PM">8:20 PM to 9:40 PM</option>

          </select>
           </div>
          </div>
            <input type="submit" value="Add Movie" class="btn btn-danger" name="btnaddmovie">
          </form>
          </div>
          <!-- content-wrapper ends -->
 <?php
  if(isset($_POST['btnaddmovie'])){
    $mn=$_POST['txtmn'];
    $dt=$_POST['txtdt'];
    $md=$_POST['txtmd'];
    $mc=$_POST['txtmc'];
    $mi=$_POST['txtmi'];
    $mg=$_POST['txtmg'];
    $ml=$_POST['txtml'];
    $mcd=$_POST['txtmcd'];
    $mt=$_POST['txtmt'];
    $mst=$_POST['txtmst'];

    $f=$_FILES['txtf']['name'];
    $tmp=$_FILES['txtf']['tmp_name'];
    move_uploaded_file($tmp,"pics/".$f);

    $insert=mysqli_query($con,"insert into tblmovie values('null','$mn','$dt','$md','$mc','$mi','$mg','$ml','$mcd','$mst','$mt','$f')");
    if($insert){
        echo "<script>alert('Data Submitted Successfully!!')</script>";
    }
    else{
        echo "<script>alert('Data Not Submitted')</script>";
    }
  }
 ?>


<?php
include 'footer.php';
?>