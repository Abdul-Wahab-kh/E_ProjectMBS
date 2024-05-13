<?php
include 'header.php';
?>
<style>
  *{
    font-family: Arial, Helvetica, sans-serif;
  }
</style>
<?php
if(isset($_GET['I'])){
    $id=$_GET['I'];
    $select = mysqli_query($con,"select * from tblmovie join tblindustry on tblmovie.Industry=tblindustry.IN_Id where M_Id='$id'");
    foreach($select as $data){

  ?>
																								  
<div class="container">
    <div class="row">
        <div class="col-6">
         <img src="admin/pics/<?php echo $data['M_Images']?>" alt="" class="w-100 img-responsive">
        </div>
        <div class="col-6">
           <h1><?php echo $data['M_Name']?></h1>
           <p><?php echo $data['M_Description'];?></p>
        
           <p><?php echo $data['IN_Name'];?></p>
           <form method="post">
      <textarea name="txtcoment" id="" cols="30" rows="10" class="form-control"></textarea><br>
        <p class="text-warning display-5">Rating..</p>
        <?php 
       if(!isset($_SESSION['un'])){
        echo "Rating   <input type='number' min=1 max=5 disabled' class='form-control'>";

       }
       else{
        echo "Rating   <input type='number' min='1' max='5' name='txtr' class='form-control'>";
       }

        ?>
        <div class="d-flex justify-content-sm-between">
          <div class="">
        <input type="submit" value="Reviews" name="btnreview" class="mt-3 btn btn-danger">

        </div>
        <div class="">
        <a href="viewcoment.php" class="">View Coment</a>
        </div>
        </div>
        </div>
    </div>
    </form>
    <?php
    if(isset($_POST['btnreview'])){
    $name=$data['M_Name'];
    $com=$_POST['txtcoment'];
    $rat=$_POST['txtr'];
    if(!isset($_SESSION['un'])){
        echo "<script>window.location.assign('login.php')</script>";
    }
    else{
    $insert=mysqli_query($con,"insert into tblcoment values('null','$name','$com','$rat')");
    }
  }
}
}
?>
</div>
		


<?php
include 'footer.php';
?>