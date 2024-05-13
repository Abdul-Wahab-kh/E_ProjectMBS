


<?php

include 'header.php';
if(!isset($_SESSION['un'])){
    echo "<script>window.location.assign('login.php')</script>";
}
if(!isset($_GET['B'])){
    echo "<script>window.location.assign('index.php')</script>"; 
}

?>

<link rel="stylesheet" href="tickets.css">





<?php



$id=$_GET['B'];

            $ip=$_SERVER['REMOTE_ADDR'];
            $select = mysqli_query($con,"select * from tblmovie where M_Id='$id'");
            $fetch=mysqli_fetch_assoc($select);
            $_SESSION['movieimage']=$fetch['M_Images'];
            $_SESSION['moviename']=$fetch['M_Name'];
            
            
            $_SESSION['movietime']=$fetch['Movie_Timing'];
            $date=date('d-M-l');
            $date1=date('d-M-l',strtotime('+1 days'));
            $date2=date('d-M-l',strtotime('+2 days'));
            $date3=date('d-M-l',strtotime('+3 days'));
            $date4=date('d-M-l',strtotime('+4 days'));
            $date5=date('d-M-l',strtotime('+5 days'));
            $date6=date('d-M-l',strtotime('+6 days'));
            $date6=date('d-M-l',strtotime('+7 days'));
           
            ?>



			<div class="container mt-3">
				<div class="row">
                    <div class="col-6">
                        <h3 class="text-warning" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">There is a discount for children under 12 years old.</h3>
                    <img src="<?php echo 'admin/pics/'.$_SESSION['movieimage'];?>" alt="" width="100%" height="70%">
                    </div>
                    <div class="col-6">
                    <div class="bg-danger p-3 rounded-4">
                    <h1 class="text-light">Book Your Ticket</h1>
                    </div>
					<div class="booking-form p-3">
                        

                        <h1 ><?php echo $_SESSION['moviename'];?></h1>
            
            <h4>Cinema Name:</h4>
            <?php
            $select_Cinema=mysqli_query($con,"select * from tblcinema join tblmovie on tblcinema.C_Id=tblmovie.Cinema where M_Id='$id'");
             $fetch_cinema=mysqli_fetch_assoc($select_Cinema);
             $_SESSION['cname']=$fetch_cinema['C_Name'];
             $SESSION['movietime']=$fetch_cinema['Movie_Timing'];
          
                echo "<p>$_SESSION[cname]</p>";
            
            echo "<h4>Movie Timing:</h4>";
           
           
                echo "<p>$_SESSION[movietime]</p>";
            
                ?>
						<form method="post">
							
							<div class="form-group">


								
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
                                    <p>Select your Seat</p>
										
											
                                       
        <select class='form-control rounded-3' name='txtp'>
        <option selected class='bg-dark'>Select your Seat</option>
        <?php
        $select_seat=mysqli_query($con,"select * from tblseats where M_Name='$id'");
        foreach($select_seat as $data_seat){
            echo "
            
            <option value='$data_seat[First_Class]'>First Class: $data_seat[First_Class]</option>
            <option value='$data_seat[Busniess]'>Busniess: $data_seat[Busniess] </option>
            <option value='$data_seat[Economy]'>Economics: $data_seat[Economy]</option>
            ";
        }
        ?>
    
      


										</select>
										
									</div>
								</div>
								<div class="row">
                                    <div class="col-6">
									<div class="form-group">
                                    <p>Select Number of Seats</p>
										<input type="number" name="txtnc" id="$data" class="form-control" min="1" max="20" >
									</div>
                                    
                                    </div>
                                    <div class="col-6">
									<div class="form-group">
                                    <p>Age</p>
										<input type="number" name="txtag" id="$data" class="form-control" min="1" max="100" >
									</div>
                                    
                                    </div>
                                    </div>
								
								
<?php 
echo "
<div class='form-group'>
                                <p>Select date you want to watch show</p>
        <select name='txtdt' id='' class='form-control'>
            <option selected>Select Date</option>
            <option>$date</option>
            <option>$date1</option>
            <option>$date2</option>
            <option>$date3</option>
            <option>$date4</option>
            <option>$date5</option>
            <option>$date6</option>
        </select>
        </div>
        ";
        ?>

                             <div class="form-group">
                                    <p>Card Number</p>
										<input type="text" name="txtcn" id="" class="form-control" placeholder="5555-5555-5555-5555" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}" autocomplete="off" required>
									</div>
							</div>
							
                                
								<input type="submit" name="btnticketbook" class="form control btn btn-danger">
							
						</form>
					</div>
				</div>
			</div>
	

    </div>

   
<?php
          if(isset($_POST['btnticketbook'])){
           
           $p=$_POST['txtp'];
           $nc=$_POST['txtnc'];
           $cn=$_POST['txtcn'];
           $ag=$_POST['txtag'];
           $dt = $_POST['txtdt'];
           $mn=$_SESSION['moviename'];
           $mi=$_SESSION['movieimage'];
           
         
          
           $insert = mysqli_query($con,"insert into tblticket values('null','$_SESSION[un]','$_SESSION[email]','$mn','$p','$dt','$nc','$mi','$cn','$ag',default,'$ip',default)");
           echo "<script>window.location.assign('viewticket.php')</script>";
         }
        
?>






	<script src="js/jquery.min.js"></script>
	<script>
		$('.form-control').each(function () {
			floatedLabel($(this));
		});

		$('.form-control').on('input', function () {
			floatedLabel($(this));
		});

		function floatedLabel(input) {
			var $field = input.closest('.form-group');
			if (input.val()) {
				$field.addClass('input-not-empty');
			} else {
				$field.removeClass('input-not-empty');
			}
		}
	</script>









<?php

include 'footer.php';
?>