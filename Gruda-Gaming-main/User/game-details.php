<?php
	include 'restrict.php';
	include 'header.php';
	?>

<div class="container game-details">
  <h1 class="my-4">Game Details</h1>

  <div class="card">
    <img src="" class="card-img-top" alt="Game Poster" id="game-image">
    <div class="card-body">
      <h5 class="card-title" id="game-title">Game Title</h5>
      <p class="card-text"><strong>Release Date:</strong> <span id="release-date">January 1, 2023</span></p>
      <p class="card-text"><strong>About:</strong> <span id="game-description">Description of the game goes here.</span></p>
      <p class="card-text"><strong>Genres:</strong> <span id="Genres">List of major characters goes here.</span></p>
      <p class="card-text"><strong>Platform:</strong> <span id="platform">Platform(s) on which the game is available.</span></p>
    </div>
  </div>
</div>

<!-- Include Bootstrap JavaScript (optional, only if you need features like dropdowns, modals, etc.) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  // Function to parse query parameters from the URL
  function getQueryParameter(parameterName) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(parameterName);
  }

  //  RAWG API key
  const apiKey = 'fc11aa78d0bb490996b18d17ec68ca7e';

  // Function to fetch game details and update the details page
  function fetchGameDetails(gameId) {
    fetch(`https://api.rawg.io/api/games/${gameId}?key=${apiKey}`)
      .then(response => response.json())
      .then(data => {
console.log(data);
        const gameImage = document.getElementById('game-image');
        const gameTitle = document.getElementById('game-title');
        const releaseDate = document.getElementById('release-date');
        const gameDescription = document.getElementById('game-description');
        const Genres = document.getElementById('Genres');
        const platform = document.getElementById('platform');

        gameImage.src = data.background_image;
        gameTitle.textContent = data.name;
        releaseDate.textContent = data.released;
        gameDescription.textContent = data.description.replace( /(<([^>]+)>)/ig, '') || 'Description not available.';
        
        platform.textContent = data.platforms[0].name || 'Platform information not available.';
	 result=" ";
	data.platforms.forEach(platformInfo => {
  	const platformName = platformInfo.platform.name;
	const str2 = ", ";
	result = result.concat(result,str2, platformName);
	
	});
	platform.textContent = result || 'Platform information not available.';
	g=" ";
	data.genres.forEach(genre => {
	const str2 = " ";
  	g=g.concat(g,str2, genre.name);
	});
	Genres.textContent = g || 'Major genres not available.';



      })
      .catch(error => {
        console.error('Error:', error);
      });
  }

  // Get the game ID from the URL
  const gameId = getQueryParameter('id');
  if (gameId) {
    fetchGameDetails(gameId);
  } else {
    console.error('Game ID not provided in the URL.');
  }
</script>


	<!--================ Start Newsletter Area ================-->
	<section class="newsletter_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="newsletter_inner">
						<h1>Subscribe Our Newsletter</h1>
						<p>We won’t send any kind of spam</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<aside class="newsletter_widget">
						<div id="mc_embed_signup">
							<form target="_blank"
								action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
								method="get" class="subscribe_form relative">
								<div class="input-group d-flex flex-row">
									<input name="EMAIL" placeholder="Enter email address"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'"
										required="" type="email">
									<button class="btn primary_btn">Subscribe</button>
								</div>
							</form>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Newsletter Area ================-->

	<!--================Footer Area =================-->
	<footer class="footer_area section_gap_top">
		<div class="container">
			<div class="row footer_inner">
				<div class="col-lg-3 col-sm-6">
					<aside class="f_widget ab_widget">
						<div class="f_title">
							<h4>About Farfly</h4>
						</div>
						<ul>
							<li><a href="#"></a>For Business</a></li><a href="#">
								<li><a href="#"></a>Premium Plans
							</a></li>
							<li><a href="#"></a>Reviews</a></li>
							<li><a href="#"></a>How it Works</a></li>
							<li><a href="#"></a>Farfly Blog</a></li>
						</ul>
					</aside>
				</div>
				<div class="col-lg-3 col-sm-6">
					<aside class="f_widget ab_widget">
						<div class="f_title">
							<h4>Company</h4>
						</div>
						<ul>
							<li><a href="#"></a>Product Tour</a></li><a href="#">
								<li><a href="#"></a>Pricing
							</a></li>
							<li><a href="#"></a>Founding Members</a></li>
							<li><a href="#"></a>Case Studies</a></li>
							<li><a href="#"></a>Product Updates</a></li>
						</ul>
					</aside>
				</div>
				<div class="col-lg-3 col-sm-6">
					<aside class="f_widget ab_widget">
						<div class="f_title">
							<h4>Support</h4>
						</div>
						<ul>
							<li><a href="#"></a>Documentation</a></li><a href="#">
								<li><a href="#"></a>Data Securiry
							</a></li>
							<li><a href="#"></a>Site Performance</a></li>
							<li><a href="#"></a>Action Plan</a></li>
							<li><a href="#"></a>Resources</a></li>
						</ul>
					</aside>
				</div>
				<div class="col-lg-3 col-sm-6">
					<aside class="f_widget ab_widget">
						<div class="f_title">
							<h4>Legal</h4>
						</div>
						<ul>
							<li><a href="#"></a>Terms and conditions</a></li><a href="#">
								<li><a href="#"></a>Privacy Policy
							</a></li>
							<li><a href="#"></a>Cookie Information</a></li>
							<li><a href="#"></a>Opt - Out</a></li>
						</ul>
					</aside>
				</div>
			</div>
			<div class="row single-footer-widget">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="copy_right_text">
						<p>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;
							<script>document.write(new Date().getFullYear());</script> All rights reserved | This
					         made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
								href="https://github.com/Richu-Antony/Gruda-Gaming" target="_blank">Richu Antony</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="social_widget">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--================End Footer Area =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="vendors/isotope/isotope-min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
	<script src="vendors/counter-up/jquery.counterup.min.js"></script>
	<script src="js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
</body>

</html>