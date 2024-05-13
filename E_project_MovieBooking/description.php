<?php
include 'header.php';
include 'phpqrcode/qrlib.php';
?>
<link rel="stylesheet" href="description.css">
<body>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<?php
   
    $ip=$_SERVER['REMOTE_ADDR'];
    $select = mysqli_query($con,"select * from tblticket");
   
    foreach($select as $data){
      
        $result= $data['M_Price']*$data['Numb_T'];
    

?>
<div class="body">
<div class="ticket created-by-anniedotexe mt-3">
  <div class="left">
    <div class="image">
        
      <p class="admit-one">
        <span>ADMIT ONE</span>
        <span>ADMIT ONE</span>
        <span>ADMIT ONE</span>
      </p>
      <img src="pics/<?php echo $data['M_Images']?>" alt="" width="50%" height="50%">
      <div class="ticket-number">
      <p>
          <?php echo $data['T_Id'];?>
        </p>
      </div>
    </div>
    <div class="ticket-info">
      <p class="date">
      <p class="date">
    <?php echo $data['T_Date'];?>
    </p>
      </p>
      <div class="show-name">
        <h1><?php echo $_SESSION['moviename'];?></h1>
        <h2>Warrior Nun Cast & Crew</h2>
        <h2>Halo Bearers</h2>
      </div>
      <div class="time">
        <p><?php echo $_SESSION['movietime'];?></p>
        <p><?php echo $data['M_Price'].'x'.$data['Numb_T'];?></p>
        <p><?php echo $result;?></p>
    </div>
      <div class="tagline">
        <p>IN THIS LIFE OR THE NEXT</p>
      </div>
      <p class="location"><span>THE CAT'S CRADLE</span>
        <span class="separator"><i class="fa-solid fa-cross"></i></span><span>ANDALUCÍA, SPAIN</span>
      </p>
    </div>
  </div>
  <div class="right">
    <p class="admit-one">
      <span>ADMIT ONE</span>
      <span>ADMIT ONE</span>
      <span>ADMIT ONE</span>
    </p>
    <div class="right-info-container">
    <div class="show-name">
        <h1>Name: <?php echo $_SESSION['un'];?></h1>
    </div>
      <div class="time">
        <p>28.06.2023</p>
        <p>07:16 AM <span>TO</span> TBD</p>
      </div>
      <div class="barcode">
        <?php
   
                $name=$_SESSION['moviename'].'|'.$result .'|'. $data['Created_At'];
                
                QRcode::png($name,'qrcode.png');
                ?>

        <img src="qrcode.png" alt="QR code">
    </div>
      <p class="ticket-number">
        #20200702
      </p>
    </div>
  </div>
</div>

</div>
<?php }?>
</body>

<?php
include 'footer.php'
?>