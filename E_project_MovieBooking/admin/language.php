<?php
include 'header.php';
include '../config.php';
if(isset($_GET['C'])){
     $lid=$_GET['C'];
     $del = mysqli_query($con,"delete from tbllanguage where L_Id = '$lid'");
}
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<!-- partial -->
<div class="main-panel">
          <div class="content-wrapper">
            <div class="container bg-dark rounded-3 mb-3 p-3">
          <h1>Languages</h1>
            <form action="" method="post">
            <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-lg">Language Name</label>
           <div class="col-sm-10">
           <select class="form-select" aria-label="Default select example" name="txtln" id="colFormLabelSm">
            <option value="" selected>Select</option>
            <option value="Urdu">Urdu</option>
            <option value="English">English</option>
            <option value="Hindhi">Hindhi</option>
            <option value="Chinese">Chinese</option>
            <option value="Bangali">Bangali</option>
            <option value="French">French</option>
            <option value="Japanaes">Japanese</option>
            <option value="Arabic">Arabic</option>
            <option value="korean">Korean</option>
            <option value="Turkish">Turkish</option>
         
           </select>
           </div>
          </div>
         
          <div class="text-center">
          <input type="submit" name="btnaddlanguage" id="" class="btn btn-warning fs-5 btn-lg mb-3" value="Add Language">
          </div>
            </form>
            </div>
     
          
          <!-- content-wrapper ends -->


          <?php
          if(isset($_POST['btnaddlanguage'])){
    
            $ln=$_POST['txtln'];
            $insert=mysqli_query($con,"insert into tbllanguage values('null','$ln')");
          }
          ?>
          <div class="conatiner bg-dark rounded-3">
               <table class="table">
        <thead>
            <tr>
                <th> Id</th>
                <th>Language Name</th>
                <th>Action</th>
                
                
            </tr>
        </thead>
        <tbody>
            <?php
            $select = mysqli_query($con,"select * from tbllanguage");
            foreach($select as $data){
                echo "  <tr>
                <td>$data[L_Id]</td>
                <td>$data[L_Name]</td>
                
                <td> <a href='language.php?C=$data[L_Id]' class='text-danger p-3'><i class='fa-solid fa-trash'></i></a>
                  
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