<?php
include 'config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>
<div class="row d-flex justify-content-center mt-3">
  <div class="col-md-8 col-lg-6">
    <div class="card shadow-0 border" style="background-color: #f0f2f5;">
<?php
$select=mysqli_query($con,"select * from tblcoment");

foreach($select as $data){
  $result;
  if($data['Con_rat']==1){
   $result="Intersting Movie";
  }
  elseif($data['con_rat']==2){
    $result="Good";
  }
  elseif($data['Con_rat']==2){
    $result="Fair";
  }
  elseif($data['Con_rat']==2){
    $result="Bad";
  }
  elseif($data['Con_rat']==2){
    $result="Very Bad Impression";
  }
 
?>
      <div class="card-body p-4">
      <div class="card mb-4">

          <div class="card-body">
            <p><?php echo $data['Con_Coment']?></p>

            <div class="d-flex justify-content-between">
              <div class="d-flex flex-row align-items-center">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp" alt="avatar" width="25"
                  height="25" />
                <p class="small mb-0 ms-2"><?php echo $_SESSION['un']?></p>
              </div>
              <div class="d-flex flex-row align-items-center">
                <p class="small text-muted mb-0"><?php echo $result?></p>
                <i class="far fa-thumbs-up mx-2 fa-xs text-black" style="margin-top: -0.16rem;"></i>
                <p class="small text-muted mb-0"><?php echo $data['Con_rat']?></p>
              </div>
            </div>
          </div>
        </div>

       
        <a href="index.php" class="btn btn-info">Back</a>
      </div>
    </div>
  </div>
</div>
<?php
}
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>