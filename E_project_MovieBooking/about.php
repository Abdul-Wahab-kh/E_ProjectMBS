




<?php

include 'header.php';
?>
<style>
	/*
Template Name: Planet
File: Layout CSS
Author: TemplatesOnWeb
Author URI: https://www.templateonweb.com/
Licence: <a href="https://www.templateonweb.com/license">Website Template Licence</a>
*/
/*********************about****************/
.about_pgm{
background-color: rgba(0, 0, 0, 0.8);
padding-top:50px;
padding-bottom:50px; 
 }
#about_pg {
background-image: url(img/joker.jpg);
background-position: center;
}
#team .carousel-indicators{
bottom:-50px; 
 }
.team_1i1i1 ul li a{
background:#090a0a; 
 }
.team_1i1i1{
padding:30px 15px 0px 15px;
background:#000000c2;
height:60%;
 }

/*********************about_end****************/


@media screen and (max-width : 767px){
.about_pg1 p{
width:100%!important;
text-align:left; 
 }
.about_pg1{
text-align:center; 
 }
.team_1i1  img{
min-height:460px; 
 }
.team_1i1  p{
font-size:14px; 
 }
.team_1i1 {
margin-bottom:15px;
text-align:center;
 }
.team_1i1 p{
text-align:left;
 }
 }


@media (min-width:576px) and (max-width:767px) {
#team .trend_1l{
text-align:center; 
 }

 }
@media (min-width:768px) and (max-width:991px) {
.team_1i1i img{
min-height:460px; 
 }
#team p{
font-size:14px;
 }
#team ul li a{
width:35px;
height:35px;
font-size:14px;
 }
#team ul li a i{
line-height:35px;
 }
 }

@media (min-width:992px) and (max-width:1200px) {
.team_1i1i img{
min-height:460px; 
 }
#team ul li a{
width:35px;
height:35px;
font-size:14px;
 }
#team ul li a i{
line-height:35px;
 }
#team p{
font-size:16px;
 }
 }
@media (min-width:1201px) and (max-width:1255px) {

 }



	</style>
<section id="center" class="center_o pt-2 pb-2">
 <div class="container-xl">
  <div class="row center_o1">
   <div class="col-md-5">
     <div class="center_o1l">
	  <h2 class="mb-0">About Us</h2>
	 </div>
   </div>
   <div class="col-md-7">
     <div class="center_o1r text-end">
	  <h6 class="mb-0 col_red"><a href="index.php">Home</a> <span class="me-2 ms-2 text-light"><i class="fa fa-caret-right align-middle"></i></span> About Us</h6>
	 </div>
   </div>
  </div>
 </div>
</section>

<section id="about_pg">
 <div class="about_pgm">
  <div class="container-xl">
  <div class="row about_pg1">
    <div class="col-md-12">
	  <h2><span class="col_red">MOVIE BOOKING</span><br>
Providing Movie Production Services</h2>
      <p class="mt-3 w-50">Providing you with the most actionable Movie Production Services. Planis creates and distribute Video Content.</p>
	  <p class="w-50">Planet Lorem Ipsum is simply dummy text of the printing. Lorem Ipsum is simply Video Content  dummy industry. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
	  <p class="w-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Aliquam ut elit venenatis, congue dolor ut, mattis leo</p>
	  <!-- <h6 class="mb-0"><a class="button" href="#">Learn More</a></h6> -->
	</div>
  </div>
 </div>
 </div>
</section>

<section id="team" class="pt-4 pb-5">
 <div class="container-xl">
  <div class="row trend_1">
  <div class="col-md-12">
   <div class="trend_1l">
    <h4 class="mb-0"><i class="fa fa-youtube-play align-middle col_red me-1"></i> Meet <span class="col_red">The Company</span></h4>
   </div>
  </div>
 </div>
  <div class="row team_1 mt-4">
    <div id="carouselExampleCaptions1" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="1" aria-label="Slide 2" class="" aria-current="true"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="team_1i row">
	   <div class="col-md-4">
	    <div class="team_1i1 clearfix position-relative">
		 <div class="team_1i1i clearfix">
		   <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/c.nam3.webp" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		 </div>
		
		</div>
	   </div>
	   <div class="col-md-4">
	    <div class="team_1i1 clearfix position-relative">
		 <div class="team_1i1i clearfix">
		   <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/company.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		 </div>
		
		</div>
	   </div>
	   <div class="col-md-4">
	    <div class="team_1i1 clearfix position-relative">
		 <div class="team_1i1i clearfix">
		   <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/meet.webp" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		 </div>
		 		</div>
	   </div>
	  </div>
	  
    </div>
    <div class="carousel-item">
      <div class="team_1i row">
	   <div class="col-md-4">
	    <div class="team_1i1 clearfix position-relative">
		 <div class="team_1i1i clearfix">
		   <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/c.c" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		 </div>
		 
		</div>
	   </div>
	   <div class="col-md-4">
	    <div class="team_1i1 clearfix position-relative">
		 <div class="team_1i1i clearfix">
		   <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/earth.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		 </div>
		 
		</div>
	   </div>
	   <div class="col-md-4">
	    <div class="team_1i1 clearfix position-relative">
		 <div class="team_1i1i clearfix">
		   <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/emp.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		 </div>
		 
		</div>
	   </div>
	  </div>
    </div>
    
  </div>

</div>
  </div>
 </div>
</section>

<section id="stream" class="pb-5 pt-4">
<div class="container">
 <div class="row trend_1">
  <div class="col-md-6 col-6">
   <div class="trend_1l">
    <h4 class="mb-0"><i class="fa fa-youtube-play align-middle col_red me-1"></i> Movie   <span class="col_red">Streaming Services</span></h4>
   </div>
  </div>
  <div class="col-md-6 col-6">
   <div class="trend_1r text-end">
     <h6 class="mb-0"><a class="button" href="#"> View All</a></h6>
   </div>
  </div>
 </div>
 <div class="row trend_2 mt-4">
   <div id="carouselExampleCaptions4" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item carousel-item-next carousel-item-start">
      <div class="trend_2i row">
	    <div class="col">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="img/bbbbbb" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">Semper</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">2 Views</p>
		   </div>
		  </div>
		    
		</div>
		<div class="col">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="img/ccccc.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">Semper</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">2 Views</p>
		   </div>
		  </div>
		    
		</div>
		<div class="col">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="img/jjjjjjjjj.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">Semper</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">2 Views</p>
		   </div>
		  </div>
		    
		</div>
		<div class="col">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="img/bhai" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">Semper</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">2 Views</p>
		   </div>
		  </div>
		    
		</div>
		<div class="col">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="img/wa" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">Semper</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">2 Views</p>
		   </div>
		  </div>
		    
		</div>
	  </div>
    </div>
    <div class="carousel-item active carousel-item-start">
      <div class="trend_2i row">
	    <div class="col">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="img/aaaa.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">Semper</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">2 Views</p>
		   </div>
		  </div>
		    
		</div>
		<div class="col">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="img/ccccc.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">Semper</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">2 Views</p>
		   </div>
		  </div>
		    
		</div>
		<div class="col">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="img/ss" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">Semper</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">2 Views</p>
		   </div>
		  </div>
		    
		</div>
		<div class="col">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="img/pha" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">Semper</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">2 Views</p>
		   </div>
		  </div>
		    
		</div>
		<div class="col">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="img/wa" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">Semper</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">2 Views</p>
		   </div>
		  </div>
		    
		</div>
	  </div>
    </div>
    
  </div>

</div>
 </div>
</div>
</section>


<?php
include 'footer.php';
?>







