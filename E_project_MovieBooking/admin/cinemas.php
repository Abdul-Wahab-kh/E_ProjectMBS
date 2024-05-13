<?php
include 'header.php';
include '../config.php';
if(isset($_GET['A'])){
  $cid=$_GET['A'];
  $del = mysqli_query($con, "delete from tblcinema where C_Id='$cid'");
}
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<!-- partial -->
<div class="main-panel">
          <div class="content-wrapper">
          <div class="container bg-dark rounded-3 mb-3 p-3">
            <h1>Cinemas</h1>
            <form action="" method="post">
            <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-lg">Cinema Name</label>
           <div class="col-sm-10">
            <input type="text" class="form-control form-control-lg bg-light text-dark" id="colFormLabelSm" placeholder="Cinema Name" name="txtcn">
           </div>
          </div>

          <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-lg">Cinema Location</label>
           <div class="col-sm-10">
            <input type="text" class="form-control form-control-lg mb-3 bg-light text-dark" id="colFormLabelSm" placeholder="Cinema Location" name="txtcl">
           </div>
          </div>
          <div class="text-center">
          <input type="submit" name="btnaddcinema" id="" class="btn btn-warning fs-5 btn-lg" value="Add Cinema">
          </div>
            </form>
</div>
          <!-- content-wrapper ends -->
          
     <?php
      if(isset($_POST['btnaddcinema'])){
        $cn = $_POST['txtcn'];
        $cl = $_POST['txtcl'];
         
        $insert = mysqli_query($con,"insert into tblcinema values('null','$cn','$cl')");
      }
     ?>
     <div class="container bg-dark rounded-3 mb-3 p-3">
     <table class="table">
        <thead>
            <tr>
                <th>Cinema Id</th>
                <th>Cinema Name</th>
                <th>Cinema Location</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            $select = mysqli_query($con,"select * from tblcinema");
            foreach($select as $data){
                echo "  <tr>
                <td>$data[C_Id]</td>
                <td>$data[C_Name]</td>
                <td>$data[C_Location]</td>
                <td><a href='delete.php?A=$data[C_Id]' class='text-danger p-3'><i class='fa-solid fa-trash'></i></a>
                   <a href='update.php?U=$data[C_Id]' class='text-success'><i class='fa-regular fa-pen-to-square'></i></a>
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