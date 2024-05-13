<?php
include 'header.php';
include '../config.php';
?>

<div class="main-panel">
          <div class="content-wrapper">
          <div class="container bg-dark rounded-3 mb-3 p-3">
            <h1>Seat Price</h1>
            <form action="" method="post">
            <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-lg">Movie Name</label>
           <div class="col-sm-10">
            <select name="txtmn" id="" class="form-control">
                <?php
                 $select = mysqli_query($con,"select * from tblmovie");
                 foreach($select as $data){
                    echo "<option value='$data[M_Id]'>$data[M_Name]</option>";
                 }
                ?>
            </select>
           </div>
          </div>

          <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-lg">Movie Price</label>
           <div class="col-sm-3">
            <input type="text" class="form-control form-control-lg mb-3 bg-light text-dark" id="colFormLabelSm" placeholder="Bussiness Price" name="txtbp">
           </div>

           <div class="col-sm-3">
            <input type="text" class="form-control form-control-lg mb-3 bg-light text-dark" id="colFormLabelSm" placeholder="Economy Price" name="txtep">
           </div>

           <div class="col-sm-3">
            <input type="text" class="form-control form-control-lg mb-3 bg-light text-dark" id="colFormLabelSm" placeholder="First Class Price" name="txtfcp">
           </div>
          </div>
          <div class="text-center">
          <input type="submit" name="btnaddprice" id="" class="btn btn-warning fs-5 btn-lg" value="Add Seat Price">
          </div>
            </form>
</div>
<?php
 if(isset($_POST['btnaddprice'])){
    $mn= $_POST['txtmn'];
     $bp=$_POST['txtbp'];
    $ep= $_POST['txtep'];
    $fcp= $_POST['txtfcp'];


     $insert=mysqli_query($con,"insert into tblseats values('null','$mn','$bp','$ep','$fcp')");

 }
?>

<?php
include 'footer.php';
?>