<?php
include 'header.php';
include '../config.php';
?>
<?php
if(isset($_GET['A'])){
  $id=$_GET['A'];
  $delete = mysqli_query($con, "delete from tblsignup where Id=$id");
}
?>
<?php
        $select = mysqli_query($con,"select * from tblsignup");
        $fetch=mysqli_fetch_assoc($select);
       
           $count=mysqli_num_rows($select);
           $date=date('d-M-l');
        
        
       echo"
        <!-- partial -->
       
        <div class='main-panel'>
          <div class='content-wrapper'>
            <div class='row'>
              <div class='col-12 grid-margin stretch-card'>
              
              </div>
            </div>
            <div class='row'>
              <div class='col-xl-6 col-sm-6 grid-margin stretch-card'>
                <div class='card'>
                  <div class='card-body'>
                    <div class='row'>
                      <div class='col-9'>
                        <div class='d-flex align-items-center align-self-start'>
                          <h3 class='mb-0'>$count</h3>
                         
                        </div>
                      </div>
                      <div class='col-3'>
                        <div class='icon icon-box-success '>
                        
                        
                          <a class='mdi mdi-arrow-top-right icon-item' onclick='btnlog()'></a>
                         </a>
                          
                          </div>
                      </div>
                    </div>";
                    ?>
                    <?php
                    echo "
                    <h6 class='text-muted font-weight-normal'>Total Numbers of Users</h6>
                 
                    </div>
                </div>
              </div>
              <div class='col-xl-6 col-sm-6 grid-margin stretch-card'>
                <div class='card'>
                  <div class='card-body'>
                    <div class='row'>
                      <div class='col-9'>
                        <div class='d-flex align-items-center align-self-start'>";
                        ?>
                        <?php
                    
                    
                        
                        $slect=mysqli_query($con,"select * from tblsignup where Date='$date'");
                        
                        $fet=mysqli_fetch_assoc($slect);
           
                        $counttody=mysqli_num_rows($slect);
                          echo "<h3 class='mb-0'>$counttody</h3>";
                          ?>
                          
                       <?php   
                   
                    echo "
                       
                        </div>
                      </div>
                      <div class='col-3'>
                        <div class='icon icon-box-success'>
                        <a href='today.php'>
                          <span class='mdi mdi-arrow-top-right icon-item'></span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <h6 class='text-muted font-weight-normal'>Today Users</h6>
                  </div>
                </div>
              </div>
              
            </div>";
         
?>

<table class="table">
    <thead>
    <tr>
        <th>Id</th>
        <th>User Name</th>
        <th>Email</th>
        <th>Profile Image</th>
        <th>Action</th>
        
    </tr>
    </thead>
    <tbody>

    
<?php
    $select = mysqli_query($con,"select * from tblsignup where Date='$date'");
    foreach($select as $data){
    echo "<tr>
    <td>$data[Id]</td>
    <td>$data[User_Name]</td>
    <td>$data[Email]</td>
    <td><img src='../pics/$data[Images]' class=' rounded-circle' width='20px' height='20px'></td>
    
    <td><a href='users.php?A=$data[Id]' class='btn btn-danger'>Delete</a></td>
    
</tr>";
    }
?>
</tbody>
</table>
<?php
include 'footer.php';
?>