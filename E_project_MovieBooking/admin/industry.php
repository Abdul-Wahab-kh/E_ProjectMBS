<?php
include 'header.php';
include '../config.php';
if(isset($_GET['B'])){
  $inid=$_GET['B'];
  $del =  mysqli_query($con,"delete from tblindustry where IN_Id='$inid'");
}
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<!-- partial -->
<div class="main-panel">
          <div class="content-wrapper">
          <div class="container bg-dark rounded-3 mb-3 p-3">
          <h1>Industry</h1>
            <form action="" method="post">
            <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-lg">Industry Name</label>
           <div class="col-sm-10">
           <select class="form-select" aria-label="Default select example" name="txtin" id="colFormLabelSm">
            <option value="" selected>Select Industry</option>
            <option value="HollyWood">HollyWood</option>
            <option value="LollyWood">LollyWood</option>
            <option value="Bollywood">Bollywood</option>
            <option value="Chines">Chines</option>
            <option value="Kariwood">Kariwood</option>
            <option value="Pollywood">Pollywood</option>
           </select>
           </div>
          </div>
         
          <div class="text-center">
          <input type="submit" name="btnaddindustry" id="" class="btn btn-warning fs-5 btn-lg" value="Add Industry">
          </div>
            </form>
          </div>
     
          
          <!-- content-wrapper ends -->


          <?php
          if(isset($_POST['btnaddindustry'])){
    
            $in=$_POST['txtin'];
            $insert=mysqli_query($con,"insert into tblindustry values('null','$in')");
          }
          ?>
          <div class="container bg-dark rounded-3 mb-3 p-3">
               <table class="table">
        <thead>
            <tr>
                <th> Id</th>
                <th>INDUSTRY Name</th>
                <th>Action</th>
                
                
            </tr>
        </thead>
        <tbody>
            <?php
            $select = mysqli_query($con,"select * from tblindustry");
            foreach($select as $data){
                echo "  <tr>
                <td>$data[IN_Id]</td>
                <td>$data[IN_Name]</td>
                
                <td> <a href='industry.php?B=$data[IN_Id]' class='text-danger p-3'><i class='fa-solid fa-trash'></i></a>
                   <a href='update.php?IU=$data[IN_Id]' class='text-success '><i class='fa-regular fa-pen-to-square'></i></a>
                </td>

            </tr>
            </div>";
            }
            ?>
    <?php
 if(isset($_POST['btndel'])){
    
         
          mysqli_query($con,"delete from tblindustry where IN_Id=''");
     
         
     
   
 }
     ?>
        </tbody>
     </table>
     </div>
<?php
include 'footer.php';
?>