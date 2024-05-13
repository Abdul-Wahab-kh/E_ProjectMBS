<?php
include 'header.php';
include '../config.php';

?>
<?php
if(isset($_GET['U'])){
  $id=$_GET['U'];


$select = mysqli_query($con ,"select * from tblcinema where C_Id = '$id'");
foreach($select as $data){
  $cn=$data['C_Name'];
  $cl=$data['C_Location'];


echo "
<div class='main-panel'>
          <div class='content-wrapper'>
            <h1>Update</h1>
            <form action='' method='post'>
            <div class='form-group row'>
            <label for='colFormLabelSm' class='col-sm-2 col-form-label col-form-label-lg'>Cinema Name</label>
           <div class='col-sm-10'>
            <input type='text' class='form-control form-control-lg' id='colFormLabelSm' placeholder='Cinema Name' name='txtcn' value='$cn'>
           </div>
          </div>

          <div class='form-group row'>
            <label for='colFormLabelSm' class='col-sm-2 col-form-label col-form-label-lg'>Cinema Location</label>
           <div class='col-sm-10'>
            <input type='text' class='form-control form-control-lg mb-3' id='colFormLabelSm' placeholder='Cinema Location' name='txtcl' value='$cl'>
           </div>
          </div>
          <div class='text-center'>
          <input type='submit' name='btnupdatecinema' id='' class='btn btn-danger btn-lg' value='Update'>
          </div>
            </form>

     
          </div>";
}
           if(isset($_POST['btnupdatecinema'])){
            $n=$_POST['txtcn'];
            $l=$_POST['txtcl'];
            $update=mysqli_query($con,"update tblcinema set C_Name='$n' , C_Location ='$l' where C_Id='$id'");
            echo "<script>window.location.assign('cinemas.php')</script>";
          };
}
elseif(isset($_GET['IU'])){
  $inid=$_GET['IU'];


  $select = mysqli_query($con ,"select * from tblindustry where IN_Id = '$inid'");
  foreach($select as $data){
    $in=$data['IN_Name'];
    
  
  
  echo "
  <div class='main-panel'>
  <div class='content-wrapper'>
  <div class='container bg-dark rounded-3 mb-3 p-3'>
  <h1>Industry</h1>
    <form action='' method='post'>
    <div class='form-group row'>
    <label for='colFormLabelSm' class='col-sm-2 col-form-label col-form-label-lg'>Industry Name</label>
   <div class='col-sm-10'>
   <select class='form-select' aria-label='Default select example' name='txtin' id='colFormLabelSm'>
    <option value='' selected>$in</option>
    <option value='HollyWood'>HollyWood</option>
    <option value='LollyWood'>LollyWood</option>
    <option value='Bollywood'>Bollywood</option>
    <option value='Chines'>Chines</option>
    <option value='Kariwood'>Kariwood</option>
    <option value='Pollywood'>Pollywood</option>
   </select>
   </div>
  </div>
 
  <div class='text-center'>
  <input type='submit' name='btnupdateindustry' id='' class='btn btn-danger btn-lg' value='Update'>
  </div>
    </form>
   </div>
  ";
  } 
             if(isset($_POST['btnupdateindustry'])){
              $iin=$_POST['txtin'];
              
              $update=mysqli_query($con,"update tblindustry set IN_Name='$iin' where IN_Id='$inid'");
              echo "<script>window.location.assign('industry.php')</script>";
            };
}
elseif(isset($_GET['GU'])){
  $gid=$_GET['GU'];


  $select = mysqli_query($con ,"select * from tblgenres where G_Id = '$gid'");
  foreach($select as $data){
    $gn=$data['G_Name'];
    
  
  
  echo "
  <div class='main-panel'>
          <div class='content-wrapper'>
            <div class='container bg-dark rounded-3 mb-3 p-3'>
          <h1>Genre</h1>
            <form action='' method='post'>
            <div class='form-group row'>
            <label for='colFormLabelSm' class='col-sm-2 col-form-label col-form-label-lg'>Industry Name</label>
           <div class='col-sm-10'>
           <select class='form-select' aria-label='Default select example' name='txtgn' id='colFormLabelSm'>
            <option value='' selected>$gn</option>
            <option value='Action/Adventure'>Action/Adventure</option>
            <option value='Animals'>Ainmals</option>
            <option value='Biography'>Biography</option>
            <option value='Entertainment'>Entertainment</option>
            <option value='Drama'>Drama</option>
            <option value='Education'>Education</option>
            <option value='Family'>Family</option>
            <option value='Politics'>Politics</option>
            <option value='Comedy'>Comedy</option>
            <option value='Animation'>Animation</option>
            <option value='Horror'>Horror</option>
            <option value='War'>War</option>
            <option value='Fantasy'>Fantasy</option>
           </select>
           </div>
          </div>
         
          <div class='text-center'>
          <input type='submit' name='btnupdatedgenre' id='' class='btn btn-danger btn-lg mb-3' value='Update'>
          </div>
            </form>
         </div>
         </div>
       
  ";
  }       
             if(isset($_POST['btnupdatedgenre'])){
              $ggn=$_POST['txtgn'];
              
              $update=mysqli_query($con,"update tblgenres set G_Name='$ggn' where G_Id='$gid'");
              echo "<script>window.location.assign('genre.php')</script>";
            };
}


elseif(isset($_GET['MU'])){
  $mid=$_GET['MU'];


  $select = mysqli_query($con ,"select * from tblmovie where M_Id = '$mid'");
  foreach($select as $data){
    $mvn=$data['M_Name'];
    $mvdt=$data['M_Date'];
    $mvd=$data['M_Description'];
    $mvtl=$data['Movie_Trailer'];

    
    $mvi=$data['M_Images']; 
   

    
  
  
  echo "
  <div class='main-panel'>
          <div class='content-wrapper'>
          <h1 class='text-danger'>Update Movies</h1>
          <form action='' method='post' enctype='multipart/form-data'>
          <div class='form-group row'>
            <label for='colFormLabelSm' class='col-sm-2 col-form-label col-form-label-lg'>Movie Name</label>
           <div class='col-sm-10'>
            <input type='text' class='form-control form-control-lg text-light' id='colFormLabelSm' placeholder='Movie Name' name='txtmn' value='$mvn'>
           </div>
          </div>
          <div class='form-group row'>
            <label for='colFormLabelSm' class='col-sm-2 col-form-label col-form-label-lg'>Movie Date</label>
           <div class='col-sm-10'>
            <input type='date' class='form-control form-control-lg text-light' id='colFormLabelSm' placeholder='Cinema Name' name='txtdt' value='$mvdt'>
           </div>
          </div>
          <div class='form-group row'>
            <label for='colFormLabelSm' class='col-sm-2 col-form-label col-form-label-lg'>Movie Description</label>
           <div class='col-sm-10'>
           <textarea name='txtmd' id=' cols='30' rows='10' class='form-control text-light mb-3' placeholder='Enter Movie Description'>$mvd</textarea>
           </div>
          </div>
          <div class='form-group row'>
          <label for='colFormLabelSm' class='col-sm-2 col-form-label col-form-label-lg'>Cinema Location</label>
           <div class='col-sm-10'>
          <select name='txtmc'  class='form-control text-light'>";?>
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
          <?php 
          echo "
        </select>
           </div>
          </div>


          <div class='form-group row'>
          <label for='colFormLabelSm' class='col-sm-2 col-form-label col-form-label-lg'>Language</label>
           <div class='col-sm-10'>
          <select name='txtml'  class='form-control text-light'>";?>
           <?php
       $select =mysqli_query($con,"select * from tbllanguage");
       
          
          
          foreach($select as $data){
              echo "<option value='$data[L_Id]'>$data[L_Name]</option>";
          }
          ?>
          <?php
          echo "
        </select>
           </div>
          </div>



          <div class='form-group row'>
          <label for='colFormLabelSm' class='col-sm-2 col-form-label col-form-label-lg'>Cinema Date</label>
           <div class='col-sm-10'>
          <select name='txtmcd'  class='form-control text-light'>";?>
           <?php
       $select =mysqli_query($con,"select * from tblcinemadate");
       
          
          
          foreach($select as $data){
              echo "<option value='$data[CD_Id]'>$data[CD_Date]</option>";
          }
          ?>
          <?php
          echo "
        </select>
           </div>
          </div>
            

          <div class='form-group row'>
            <label for='colFormLabelSm' class='col-sm-2 col-form-label col-form-label-lg'>Movie Trailer</label>
           <div class='col-sm-10'>
            <input type='text' class='form-control form-control-lg text-light' id='colFormLabelSm' placeholder='Movie Trailer' name='txtmt' value='$mvtl'>
           </div>
          </div>


          <div class='form-group row'>
            <label for='colFormLabelSm' class='col-sm-2 col-form-label col-form-label-lg'>Movie Images</label>
           <div class='col-sm-10'>
            <input type='file' class='form-control form-control-lg text-light' id='colFormLabelSm' name='txtf' required>
           </div>
          </div>
            <input type='submit' value='Update Movie' class='btn btn-danger' name='btnupdatemovie'>
          </form>
          </div>
          <!-- content-wrapper ends -->";
          ?>
 <?php
  if(isset($_POST['btnupdatemovie'])){
    $mn=$_POST['txtmn'];
    $dt=$_POST['txtdt'];
    $md=$_POST['txtmd'];
    $mc=$_POST['txtmc'];
    $mi=$_POST['txtmi'];
    $mg=$_POST['txtmg'];
    $ml=$_POST['txtml'];
    $mcd=$_POST['txtmcd'];
    $mt=$_POST['txtmt'];

    $f=$_FILES['txtf']['name'];
    $tmp=$_FILES['txtf']['tmp_name'];
    move_uploaded_file($tmp,"pics/".$f);

    $update=mysqli_query($con,"update tblmovie set M_Name='$mn' , M_Date='$dt' , M_Description='$md', Cinema='$mc' , Industry='$mi' , Genre='$mg' , Language='$ml',Cinema_Date='$mcd' , Movie_Trailer='$mt' , M_Images='$f' where M_Id='$mid' ");
    if($update){
        echo "<script>alert('Data Updated Successfully!!')</script>";
        echo "<script>window.location.assign('viewmovie.php')</script>";
    }
    else{
        echo "<script>alert('Data Not Updated')</script>";
    }
  }
 
  }       
            
}

?>
<?php
include 'footer.php';
?>
