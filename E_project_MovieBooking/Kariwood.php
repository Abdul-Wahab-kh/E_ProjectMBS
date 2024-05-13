<?php
include 'header.php';
?>
<div class="container">
	<h1 class='mt-2' style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; color:Brown">Kariwood</h1>
	
 <div class='row trend_2 mt-4'>
            <div id='carouselExampleCaptions1' class='carousel slide' data-bs-ride='carousel'>
                <div class='carousel-indicators'>
                    <button type='button' data-bs-target='#carouselExampleCaptions1' data-bs-slide-to='0'
                        class='active' aria-label='Slide 1'></button>
                    <button type='button' data-bs-target='#carouselExampleCaptions1' data-bs-slide-to='1'
                        class='' aria-label='Slide 2'></button>
						<button type='button' data-bs-target='#carouselExampleCaptions1' data-bs-slide-to='2'
                        class='' aria-label='Slide 3'></button>
                </div>
                <div class='carousel-inner'>
<?php
				if(isset($_GET['A'])){
						$id=$_GET['A'];
						$select = mysqli_query($con, "select * from tblmovie where Industry='$id'");
						$coun=mysqli_num_rows($select);
						if($coun==0){
							echo "<h2 class='text-danger' style='font-family:Arial; font-size:30px'>Kariwood wood Movies Coming Soon</h2>";
						 }
						$counter = 0;
	                    
						foreach($select as $data){
							if ($counter % 4 == 0) {
								echo "<div class='carousel-item" . ($counter == 0 ? " active" : "") . "'>
										<div class='trend_2i row'>";
							}
						echo "<div class='col-md-3 col-6'>
						<div class='trend_2im clearfix position-relative'>
							<div class='trend_2im1 clearfix'>
								<div class='grid'>
									<figure class='effect-jazz mb-0'>
										<a href='#'><img src='admin/pics/$data[M_Images]' class='w-100' alt='img25'></a>
									</figure>
								</div>
							</div>
							<div class='trend_2im2 clearfix text-center position-absolute w-100 top-0'>
								<span class='fs-1'><a class='col_red' href='' data-toggle='modal' data-target='#exampleModal_$data[M_Id]' dataid='$data[M_Id]'><i
											class='fa fa-youtube-play'></i></a></span>


							</div>
						</div>
						<div class='trend_2ilast bg_grey p-3 clearfix'>
							<h5><a class='col_red' href='#'>$data[M_Name]</a></h5>
							<p class='mb-2'>echo $data[M_Description];</p>
							<span class='col_red'>
								<i class='fa fa-star'></i>
								<i class='fa fa-star'></i>
								<i class='fa fa-star'></i>
								<i class='fa fa-star'></i>
								<i class='fa fa-star'></i>
							</span>
							<p class='mb-0'>1 Views</p>
							<a href='info.php?I=$data[M_Id]' class='btn btn-danger mt-3'>More Info</a>
							
							<a href='ticket.php?B=$data[M_Id]' class='btn btn-danger mt-3'>Buy Ticket</a>
						
						
							</div>  
					</div>";

				
			?>
			<!-- Modal -->

											<div class='modal fade' id='exampleModal_<?php echo $data['M_Id']?>' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
																							  <div class='modal-dialog'>
																							  <div class='modal-header'>
																									
																									<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
																									  <span aria-hidden='true'>&times;</span>
																									</button>
																								  </div>
																								<div class='modal-content' controls style="background: transparent;">
																								<iframe width='480' height='360' src='<?php echo $data['Movie_Trailer'];?>' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' allowfullscreen></iframe>
																								  
																																																		   
																								</div>
																							  </div>
																						  </div>



<?php
$counter++;

if ($counter % 4 == 0) {
echo "</div></div>";
}

}

if ($counter % 4 != 0) {
echo "
</div></div>";
}
																						  
																						}
																					
																							
																			?>	
																																							
		</div>
	</div>
</div>
</div>
<?php
include 'footer.php';
?>