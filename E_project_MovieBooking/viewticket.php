
<?php
include 'header.php';
if(!isset($_SESSION['un'])){
    echo "<script>window.location.assign('login.php')</script>";
}

include 'phpqrcode/qrlib.php';
?>

<div class="container w-75">
    <?php
   
    $ip=$_SERVER['REMOTE_ADDR'];
    $select = mysqli_query($con,"select * from tblticket");
   
    foreach($select as $data){
     if($data['Age']<=12){
        $new=$data['M_Price']-($data['M_Price'] * 0.20 );
        $result=$new*$data['Numb_T']."<p class='ps-4'>20% OFF</p>";
     }
     else{
        $result= $data['M_Price']*$data['Numb_T'];
     }

    

?>




<div class="row mt-4 text-dark" style="background-color:cadetblue; border-radius:20px">
    
    <div class="col-4 w-25 align-content-center justify-content-center">
        <img src="admin/pics/<?php echo $data['M_Images'];?>" alt="" class="w-100 h-100 img-responsive p-2">
    </div>
    <div class="col-4 w-50 ps-5" style="border-left-style: dashed;">
        <h1 class="text-center text-warning" style="border:4px solid goldenrod; border-left:none; border-right:none; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:25px"><?php echo $data['T_Date'];?></h1>
        <h1 class="text-center font-weight-bold font-italic" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size:50px; color:indianred;"><?php echo $data['M_Name'];?></h1>
        <?php
          
        ?>
        <h3 class="text-center" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size:40px; color:maroon;"><?php echo $_SESSION['cname'];?></h3>
        <h3 style="font-family:sans-serif; font-size:40px; color:teal;"><?php echo $_SESSION['movietime'];?></h3>
        <h5 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size:30px; color:darkred;"><span class="text-dark">Price:</span><?php echo $data['M_Price']."x".$data['Numb_T'];?></h5>
        <h5 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size:30px; color:darkred;"><span class="text-dark">Total Price:</span><?php echo $result?></h5>
    </div>
    
    <div class="col-4 w-25 border-left" style="border-left-style: dashed; text-align:center; justify-content:center">
        <p class="text-muted text-dark fw-bolder"><?php echo $data['Name']?></p>
        <h5 class="pt-3"  style="font-family:sans-serif; font-size:20px; color:sienna;"><?php echo $_SESSION['cname'];?></h5>
        <?php
   
   $name= $data['T_Id'].'|'.$data['M_Name'].'|'. $data['Created_At'];
   $filepath= 'phpqrcode/qrcode_' . $data['T_Id'] . '.png';
   
  QRcode::png($name,$filepath);
  echo "
  <img src='$filepath' alt='QR code'>";
   ?>

        <p  style="font-family:sans-serif; font-size:20px; color:teal;">#<?php echo $data['T_Id']?></p>
    </div>
 </div>
 <?php

 
    }?>



</div>
<?php
include 'footer.php';
?>