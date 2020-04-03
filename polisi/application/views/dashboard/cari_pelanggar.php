<div class="templatemo-content-container">
          <div class="templatemo-flex-row flex-content-row">



            <div class="templatemo-content-widget white-bg col-2">
              <i class="fa fa-times"></i>

              <center>
              <table>
              <tr>
              <form style="width: 500px; margin: 50px auto;" action="tambah.php" method="GET">
            <label for="exampleInputEmail1">ID Pengendara
            <input class="form-control" type="text" name="id_pengendara" required="">


            <input  class="btn btn-warning" type="submit" name="submit" >



            </div>

        </div>
      </div>
    </form>
    </div>
	<nav class="main-nav-outer" id="test">
		<!--main-nav-start-->
		<div class="container">
      <div class="small-logo-mobile"><a href="#header"><img src="img/small-logo.png" alt=""></a></div>
			<ul class="main-nav">
				<li><a href="#header">Home</a></li>
				<li><a href="#service">Input Pelanggaran Baru</a></li>
				<!-- <li class="small-logo"><a href="#header"><img src="img/small-logo.png" alt=""></a></li> -->
				<li><a href="#team">Data Tilang</a></li>
				<li><a href="<?php echo base_url('admin/') ?>">Data Tabel</a></li>
			</ul>
			<a class="res-nav_click" href="#"><i class="fa fa-bars"></i></a>
		</div>
	</nav>
	<!--main-nav-end-->



	<section class="main-section" id="service">
		<!--main-section-start-->
		<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>
		              	<input type="text" class="form-control" name="username" placeholder="username" required="">
		          	</div>
	        	</div>
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>
		              	<input type="password" class="form-control" name="password" placeholder="Password" required="">
		          	</div>
	        	</div>

				<div class="form-group">
					<input type="submit" class="templatemo-blue-button width-100" value="Login">
				</div>
		<div class="container">
			<h2>Pelanggar</h2>
			<div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
					<div class="form">

						<div id="sendmessage">Berhasil!</div>
						<div id="errormessage"></div>
						<form action="" method="post" role="form" class="contactForm">
							<div class="form-group">
								<input type="text" name="name" class="form-control input-text" id="name" placeholder="Nama Pelanggar" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="radio button" class="form-control input-text" name="email" id="email" placeholder="Jenis Sim" data-rule="email" data-msg="Please enter a valid email" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control input-text" name="subject" id="Alamat" placeholder="Alamat" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<textarea class="form-control input-text text-area" name="message" rows="5" data-rule="required" data-msg=" Profesi" placeholder="Tempat Pelanggaran"></textarea>
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="date" name="name" class="form-control input-text" id="name" placeholder="Tanggal Tilang " data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="email" class="form-control input-text" name="email" id="email" placeholder="Plat Kendaraan" data-rule="email" data-msg="Please enter a valid email" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control input-text" name="subject" id="Alamat" placeholder="Pasal Pelanggaran" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="file" class="form-control input-text" name="subject" id="Alamat" placeholder="Barang yang disita" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
								<div class="validation"></div>
							</div>

							<div class="text-center"><button type="submit" class="input-btn">input</button></div>
						</form>
		</div>
	</section>
	<!--main-section-end-->

	<!--c-logo-part-end-->
	<section class="main-section team" id="team">
		<!--main-section team-start-->
		<div class="container">
			<h2>Data Tilang</h2>
			<div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
					<div class="form">
						<form action="" method="post" role="form" class="contactForm">
							<div class="form-group">
								<input type="text" name="name" class="form-control input-text" id="name" placeholder="Chika Restu Aldita" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="radio button" class="form-control input-text" name="email" id="email" placeholder="SIM A" data-rule="email" data-msg="Please enter a valid email" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control input-text" name="subject" id="Alamat" placeholder="JL. Soekarno Hatta, Bandung" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<textarea class="form-control input-text text-area" name="message" rows="5" data-rule="required" data-msg=" Profesi" placeholder="Jl. Baleendah"></textarea>
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="text" name="name" class="form-control input-text" id="name" placeholder="10/02/2020 " data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="email" class="form-control input-text" name="email" id="email" placeholder="D 22ACC" data-rule="email" data-msg="Please enter a valid email" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control input-text" name="subject" id="Alamat" placeholder="Pasal 287 : Tidak memakai helm" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control input-text" name="subject" id="Alamat" placeholder="STNK" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
								<div class="validation"></div>
							</div>
						</form>
		</div>
	</section>
	<!--main-section team-end-->


	<!--business-talking-end-->
	<div class="container">
		<section class="main-section contact" id="contact">

			<div class="row">
				<div class="col-lg-6 col-sm-7 wow fadeInLeft">
					<div class="contact-info-box address clearfix">
						<h3><i class=" icon-map-marker"></i>Alamat:</h3>
						<span> Jl. Buah Batu No.193, Gumuruh,Bandung Tengah,Kota Bandung,Jawa Barat</span>
					</div>
					<div class="contact-info-box phone clearfix">
						<h3><i class="fa fa-phone"></i>Phone:</h3>
						<span>022730058</span>
					</div>

					<div class="contact-info-box hours clearfix">
						<h3><i class="fa fa-clock-o"></i>Hours:</h3>
						<span><strong>Monday - Thursday:</strong> 10am - 6pm<br><strong>Friday:</strong> People work on Fridays now?<br><strong>Saturday - Sunday:</strong> Best not to ask.</span>
					</div>
					<ul class="social-link">
						<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
						<li class="gplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li class="dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
					</ul>
				</div>
				<h3>Saran dan Masukkan Untuk Kami</h3>
				<div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
					<div class="form">

						<div id="sendmessage">Your message has been sent. Thank you!</div>
						<div id="errormessage"></div>
						<form action="" method="post" role="form" class="contactForm">
							<div class="form-group">
								<input type="text" name="name" class="form-control input-text" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="email" class="form-control input-text" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control input-text" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<textarea class="form-control input-text text-area" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
								<div class="validation"></div>
							</div>

							<div class="text-center"><button type="submit" class="input-btn">Send Message</button></div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</div>


	<script type="text/javascript">
		$(document).ready(function(e) {

			$('#test').scrollToFixed();
			$('.res-nav_click').click(function() {
				$('.main-nav').slideToggle();
				return false

			});

      $('.Portfolio-box').magnificPopup({
        delegate: 'a',
        type: 'image'
      });

		});
	</script>

	<script>
		wow = new WOW({
			animateClass: 'animated',
			offset: 100
		});
		wow.init();
	</script>


	<script type="text/javascript">
		$(window).load(function() {

			$('.main-nav li a, .servicelink').bind('click', function(event) {
				var $anchor = $(this);

				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top - 102
				}, 1500, 'easeInOutExpo');
				/*
				if you don't want to use the easing effects:
				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top
				}, 1000);
				*/
				if ($(window).width() < 768) {
					$('.main-nav').hide();
				}
				event.preventDefault();
			});
		})
	</script>

	<script type="text/javascript">
		$(window).load(function() {


			var $container = $('.portfolioContainer'),
				$body = $('body'),
				colW = 375,
				columns = null;


			$container.isotope({
				// disable window resizing
				resizable: true,
				masonry: {
					columnWidth: colW
				}
			});

			$(window).smartresize(function() {
				// check if columns has changed
				var currentColumns = Math.floor(($body.width() - 30) / colW);
				if (currentColumns !== columns) {
					// set new column count
					columns = currentColumns;
					// apply width to container manually, then trigger relayout
					$container.width(columns * colW)
						.isotope('reLayout');
				}

			}).smartresize(); // trigger resize to set container width
			$('.portfolioFilter a').click(function() {
				$('.portfolioFilter .current').removeClass('current');
				$(this).addClass('current');

				var selector = $(this).attr('data-filter');
				$container.isotope({

					filter: selector,
				});
				return false;
			});

		});
	</script>

</body>

</html>
