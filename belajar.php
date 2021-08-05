<!DOCTYPE html>
<html>
<head>
	<title>Belajar PHP</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();	?>assets/vendor/Bootstrap v4.1.1/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();	?>assets/vendor/jQuery 3.3.1/jquery.min.js">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();	?>assets/vendor/Bootstrap v4.1.1/js/bootstrap.bundle.js.map" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style>
	body {
	  font-family: Verdana, sans-serif;
	  margin: 0;
	}

	* {
	  box-sizing: border-box;
	}

	.row > .column {
	  padding: 0 8px;
	}

	.row:after {
	  content: "";
	  display: table;
	  clear: both;
	}

	.column {
	  float: left;
	  width: 33%;
	  
	}

	/* The Modal (background) */ /*ini masalahnya*/
	.modal {
	  display: none;
	  position: fixed;
	  padding-top: 100px;
	  left: 0;
	  top: 0;
	  width: 100%;
	  height: 100%;
	  overflow: auto;
	  background-color: black;
	}

	/* Modal Content */
	.modal-content {
	  position: relative;
	  background-color: #fefefe;
	  margin: auto;
	  padding: 0;
	  width: 100%;
	  max-width: 1200px;
	}

	/* The Close Button */
	.close {
	  color: white;
	  position: absolute;
	  top: 10px;
	  right: 25px;
	  font-size: 40px;
	  font-weight: bold;
	}

	.close:hover,
	.close:focus {
	  color: #999;
	  text-decoration: none;
	  cursor: pointer;
	}

	.mySlides {
	  display: none;
	}

	.cursor {
	  cursor: pointer;
	}

	/* Next & previous buttons */
	.prev,
	.next {
	  cursor: pointer;
	  position: absolute;
	  top: 50%;
	  width: auto;
	  padding: 16px;
	  margin-top: -50px;
	  color: white;
	  font-weight: bold;
	  font-size: 40px;
	  transition: 0.6s ease;
	  border-radius: 0 3px 3px 0;
	  user-select: none;
	  -webkit-user-select: none;
	}

	/* Position the "next button" to the right */
	.next {
	  right: 0;
	  border-radius: 3px 0 0 3px;
	}

	/* On hover, add a black background color with a little bit see-through */
	.prev:hover,
	.next:hover {
	  background-color: rgba(0, 0, 0, 0.8);
	}
	.modal-content, #caption {  
	  -webkit-animation-name: zoom;
	  -webkit-animation-duration: 0.6s;
	  animation-name: zoom;
	  animation-duration: 0.6s;
	}

	@-webkit-keyframes zoom {
	  from {-webkit-transform:scale(0)} 
	  to {-webkit-transform:scale(1)}
	}

	@keyframes zoom {
	  from {transform:scale(0)} 
	  to {transform:scale(1)}
	}

	/* Number text (1/3 etc) */
	.numbertext {
	  color: #f2f2f2;
	  font-size: 12px;
	  padding: 8px 12px;
	  position: absolute;
	  top: 0;
	}

	img {
	  margin-bottom: -4px;
	}

	.caption-container {
	  text-align: center;
	  background-color: black;
	  padding: 2px 16px;
	  color: white;
	}

	.demo {
	  opacity: 0.6;
	}

	.active,
	.demo:hover {
	  opacity: 1;
	}

	img.hover-shadow {
	  transition: 0.3s;
	}

	.hover-shadow:hover {
	  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}
	</style>
</head>

<body>
	 
	<!-- Grid dan Carousel -->
	<br>
	<div class="container">
  	<div class="row">
    	<div class="col invisible">
      </div>
    <div class="col-10">
		  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
			  <ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  	</ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img style="height: auto; width: auto;" class="d-block w-100" src="<?php echo base_url(); ?>assets/images/Picture1.jpg" width="250" height="200" alt="First slide">
			      	<div class="carousel-caption d-none d-md-block" style="color:yellow;">
					    	<h5>CONTOH</h5>
					    	<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
					  	</div>
			    </div>
			  	<div class="carousel-item">
			      <img style="height: auto; width: auto;" class="d-block w-100" src="<?php echo base_url(); ?>assets/images/Picture2.jpg" width="250" height="200" alt="Second slide">
			      	<div class="carousel-caption d-none d-md-block" style="color:yellow;">
					    	<h5>CONTOH</h5>
					    	<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
					  	</div>
			    </div>
			  	<div class="carousel-item">
			      <img style="height: auto; width: auto;" class="d-block w-100" src="<?php echo base_url(); ?>assets/images/Picture3.png" width="250" height="200" alt="Third slide">
			      	<div class="carousel-caption d-none d-md-block" style="color:yellow;">
					    	<h5>CONTOH</h5>
					    	<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
					  	</div>
			   	</div>
				</div>

			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			  <span class="carousel-control-next-icon" aria-hidden="true"></span>
			  <span class="sr-only">Next</span>
			</a>
			</div>

	<br>

	<!-- ini bagian Judul donasi -->
	<h5>Judul Content donasi</h5>
	<h5>Rp..... terkumpul dari Rp.....</h5>

	<!-- ini tulisan content -->
	<div style =" text-align:justify;">
	<p>Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</p></div>

	<!-- ini 3 foto gallery -->
	<div class="row">
	  <div class="column">
	    <img src="<?php echo base_url(); ?>assets/images/nature.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
	  </div>
	  <div class="column">
	    <img src="<?php echo base_url(); ?>assets/images/snow.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
	  </div>
	  <div class="column">
	    <img src="<?php echo base_url(); ?>assets/images/mountains.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
	  </div>
	</div>

	<div id="myModal" class="modal">
  	<span class="close cursor" onclick="closeModal()">&times;</span>
  	<div class="modal-content">
	    <div class="mySlides">
	      <div class="numbertext">1 / 3</div>
	      <img src="<?php echo base_url(); ?>assets/images/nature.jpg" style="width:100%">
	    </div>

	    <div class="mySlides">
	      <div class="numbertext">2 / 3</div>
	      <img src="<?php echo base_url(); ?>assets/images/snow.jpg" style="width:100%">
	    </div>

	    <div class="mySlides">
	      <div class="numbertext">3 / 3</div>
	      <img src="<?php echo base_url(); ?>assets/images/mountains.jpg" style="width:100%">
	    </div>
		    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		    <a class="next" onclick="plusSlides(1)">&#10095;</a>
	    <div class="caption-container">
	      <p id="caption"></p>
	    </div>
  	</div>
	</div>

	<br>

	<!-- ini Hyperlink nama Dedikasi -->
	<h5>Lihat nama dedikasi yang telah terdaftar,<a href="" style="text-decoration:underline;" target="_blank">di sini</a></h5>

	<!-- ini Hyperlink Pedaftaran dan Informasi -->
	<h5>PENDAFTARAN & INFORMASI LEBIH LANJUT klik <a href=""style="text-decoration:underline;" target="_blank">di sini</a></h5>

	<br>
			
	<!-- ini bagian dropdown -->
	<div class="container">
  	<div class="row">
    	<div class="col invisible">
      </div>
    	<div class="col-12">
    		<div class="container">
  				<div class="row">
    				<div class="col invisible">
     				</div>
    				<div class="col-2,5">
							<button class="btn btn-info dropdown-toggle btn-lg" type="button" id="dropdownMenuButton"  data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    					Konfirmasi Dana
  						</button>
  					</div>
    				<div class="col invisible">
    				</div>
  	</div>
  </div>	

	<div class="collapse" id="collapseExample">
  	<div class="card card-body">
  		<form class="needs-validation" novalidate>
				<div class="form-group">
    			<label for="nama">Nama</label>
    				<input type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Contoh: Siti" required>
    				<div class="invalid-feedback">
       			Mohon diisi dengan Nama Konfirmasi Dana
      			</div>
  			</div>
 				<div class="form-group">
    			<label for="exampleInputEmail1">Email</label>
    				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contoh: Semut@gmail.com"required>
    				<div class="invalid-feedback">
        		Mohon diisi dengan Email sesuai contoh
     				</div>
  			</div>
  			<div class="form-group">
    			<label for="alamat">Alamat</label>
    				<input type="text" class="form-control" id="alamat" placeholder="Contoh: Jalan.Semut no 5"required>
    				<div class="invalid-feedback">
       			Mohon diisi dengan Alamat
     				</div>
  			</div>
  			<div class="form-group">
				  <label for="telephone">Telephone</label>
				    <input type="text" class="form-control" id="telephone" placeholder="Contoh: 08218394****"required>
				    <div class="invalid-feedback">
        		Mohon diisi dengan No Telephone
      			</div>
  			</div>
  			<div class="form-group">
				  <label for="dedikasi">Nama Dedikasi</label>
				  	<input type="text" class="form-control" id="dedikasi" placeholder="Contoh: Budi"required>
				    <div class="invalid-feedback">
        		Mohon diisi dengan Nama Konfirmasi Dana
     				</div>
 				</div>
				<div class="form-group">
				  <label for="transfer">Tanggal Transfer</label>
				  	<input type="text" class="form-control" id="transfer" placeholder="Contoh: 8 juli 2021"required>
				    <div class="invalid-feedback">
        		Mohon diisi dengan Nama Konfirmasi Dana
     			 	</div>
  			</div>
  			<div class="container">
  				<div class="row">
    				<div class="col invisible"></div>
    				<div class="col-2,5">
				  		<button class="btn btn-primary" type="submit">Submit</button>
				  		<button  class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
							Submit
							</button>
								</div>
								<div class="col invisible">
    						</div>
    					</div>
    				</div>
				</div>
			</div>	
    			</div>
    			<div class="col invisible">
    			</div>
    				</form>
  			</div>
  		</div>
  		

<!-- ini pop up -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  		<div class="modal-dialog modal-lg" role="document">
	    		<div class="modal-content">
	      		<div class="modal-header">
	     
	      		</div>
	      		<div class="modal-body">
	      			<img style="height: 100%; width: 100%;" class="d-block w-100" src="<?php echo base_url(); ?>assets/images/Picture1.jpg" alt="Terima Kasih">
	      			<br>
	      			<p style="line-height:120%;">Turut Bermudita atas dana Budi!<br>
	      			Semoga kebajikan ini dapat membawa Anda menuju kebahagiaan sejati.</p>
	      		</div>
	      		<div class="modal-footer">
	      	
	        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	     			</div>
	   			 </div>
	  		</div>
			</div>

    </div>
    <div class="col invisible">
    </div>
  </div>
</div>
</div>
	
	<br>
	<br>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
       
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

</script>

		<!-- Modal Script -->
		<script>
		function openModal() {
		  document.getElementById("myModal").style.display = "block";
		}

		function closeModal() {
		  document.getElementById("myModal").style.display = "none";
		}

		function plusSlides(n) {
		  showSlides(slideIndex += n);
		}

		function currentSlide(n) {
		  showSlides(slideIndex = n);
		}

		function showSlides(n) {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("demo");
		  var captionText = document.getElementById("caption");
		  if (n > slides.length) {slideIndex = 1}
		  if (n < 1) {slideIndex = slides.length}
		  for (i = 0; i < slides.length; i++) {
		      slides[i].style.display = "none";
		  }
		  for (i = 0; i < dots.length; i++) {
		      dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";
		  dots[slideIndex-1].className += " active";
		  captionText.innerHTML = dots[slideIndex-1].alt;
		}
		</script>

		<!-- Javascript -->
		<script src="<?php echo base_url ("assets/vendor/jQuery 3.3.1/jquery.min.js") ?>"></script>
		<!-- Jquery -->
		<script src="<?php echo base_url ("assets/vendor/Bootstrap v4.1.1/js/bootstrap.bundle.min.js") ?>"></script>

</body>
</html>
