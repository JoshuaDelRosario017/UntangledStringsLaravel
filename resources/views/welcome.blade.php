<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Untangled Strings</title>

	<!-- font awesome cdn -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Swiper css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.min.css" integrity="sha512-T3xwtELy3dqQUajk2sl4V6x/VnT+WbXgAKIu/Go7L6oDDWf4A5dJbG49vKn0am3dTNh/KHAbU2+4Ih2vVioxSg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- custom styling -->
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<!-- Header -->
	<header id="header" class="shadow bg-light">
		<nav class="container navbar">
			<a href="./index.html" class="nav-brand text-dark">Untangled Strings</a>
			
			<!-- toggle button -->
			<button class="toggle-button">
				<span><i class="fas fa-bars"></i></span>
			</button>

			<!-- collapse on toggle button click -->
			<div class="collapse">
				<ul class="navbar-nav">
					<a href="./index.html" class="nav-link">Home</a>
					<a href="#" class="nav-link">Blog</a>
					<a href="#" class="nav-link">Categories</a>
					<a href="./index.html" class="nav-link">About</a>
				</ul>
			</div>

			<!-- collapse on toggle button click -->
			<div class="collapse">
				<ul class="navbar-nav">
					<div class="search-box">
						<a href="#" class="nav-link"><i class="fas fa-search"></i></a>
					</div>
						<a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
						<a href="#" class="nav-link"><i class="fab fa-twitter"></i></a>
						<a href="#" class="nav-link"><i class="fab fa-instagram"></i></a>
						<a href="#" class="nav-link">Sign in</a>
					
					
				</ul>
			</div>
		</nav>
	</header>
	<!-- Header End -->

	<!-- Main Site -->
	
	<main id="site-main">
		<h2 class="recent">Featured Blogs</h2>
		<!-- Blog post section -->
		<section id="posts">
			<div class="container">
				<div class="grid">
					<!-- Article -->
					<div class="grid-item">
						<article class="article">
							<div class="card">
								<div class="overflow-img">
									<a href="#">
										<img src="assets/img/img1.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div class="card-body text-center px-1">
									<a href="#" class="text-title display-1 text-dark">
										Untangled Strings	
									</a>
									<p class="secondary-title text-secondary display-3">
										<span><i class="far fa-clock text-primary">Sunday, 08-15-22</i></span>
										<span><i class="far fa-comments text-primary">22</i></span>
									</p>
								</div>
							</div>
						</article>
					</div>
					<!-- .Article -->
					<!-- Article -->
					<div class="grid-item">
						<article class="article">
							<div class="card">
								<div class="overflow-img">
									<a href="#">
										<img src="assets/img/img2.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div class="card-body text-center px-1">
									<a href="#" class="text-title display-1 text-dark">
										Peace	
									</a>
									<p class="secondary-title text-secondary display-3">
										<span><i class="far fa-clock text-primary">Sunday, 08-15-22</i></span>
										<span><i class="far fa-comments text-primary">22</i></span>
									</p>
								</div>
							</div>
						</article>
					</div>
					<!-- .Article -->
					<!-- Article -->
					<div class="grid-item">
						<article class="article">
							<div class="card">
								<div class="overflow-img">
									<a href="#">
										<img src="assets/img/img3.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div class="card-body text-center px-1">
									<a href="#" class="text-title display-1 text-dark">
										Prosperity	
									</a>
									<p class="secondary-title text-secondary display-3">
										<span><i class="far fa-clock text-primary">Sunday, 08-15-22</i></span>
										<span><i class="far fa-comments text-primary">22</i></span>
									</p>
								</div>
							</div>
						</article>
					</div>
					<!-- .Article -->
				</div>
				<div class="text-center">
					<button class="btn btn-primary secondary-title text-light">See More Blogs...</button>
				</div>
			</div>
		</section>
		<!-- .Blog post section -->
	</main>
	<!-- .Main site -->

	<!-- Footer -->
	<footer id="footer">
		<div class="container">
			<div class="row mb-3">
				<div class="col-3">
					<h2 class="footer-title secondary-title">About Untangled Strings</h2>
					<div class="secondary-title text-secondary">
						<p class="mt-2">
							Untangled Sring is a Personal Blogging Website. You can see here a bunch of literature of the <a href="article.html">Author</a>.
							It can be in a form of Poem, Short story, Riddles and Any other literature. Enjoy Reading!. 
						</p>
						<address>
							<i class="fas fa-map-marker-alt text-primary">
								Philippines.
							</i>
						</address>
						<div class="email">
							<i class="fas fa-envelope text-primary">
								email@gmail.com
							</i>
						</div>
					</div>
				</div>
				<div class="col-3">
					<h2 class="footer-title secondary-title">More on Untangled Strings</h2>
				
					<div class="feature-post">
						<div class="flex-item">
							<article class="article">
								<div class="d-flex">
									<a href="#">
										<img src="assets/img/img1.jpg" class="object-fit img px-1" alt="">
										<div class="px-1">
											<a href="#" class="text-title display-2 text-dark">
												Untangled Strings
											</a>
											<p class="secondary-title text-secondary display-3">
												<span><i class="far fa-clock text-primary"></i> 8-15-22</span>
											</p>
										</div>
									</a>
								</div>
							</article>
						</div>
						<div class="flex-item">
							<article class="article">
								<div class="d-flex">
									<a href="#">
										<img src="assets/img/img2.jpg" class="object-fit img px-1" alt="">
										<div class="px-1">
											<a href="#" class="text-title display-2 text-dark">
												Peace in Mind
											</a>
											<p class="secondary-title text-secondary display-3">
												<span><i class="far fa-clock text-primary"></i> 8-15-22</span>
											</p>
										</div>
									</a>
								</div>
							</article>
						</div>
						<div class="flex-item">
							<article class="article">
								<div class="d-flex">
									<a href="#">
										<img src="assets/img/img3.jpg" class="object-fit img px-1" alt="">
										<div class="px-1">
											<a href="#" class="text-title display-2 text-dark">
												Prosperity
											</a>
											<p class="secondary-title text-secondary display-3">
												<span><i class="far fa-clock text-primary"></i> 8-15-22</span>
											</p>
										</div>
									</a>
								</div>
							</article>
						</div>
					</div>
					<a href="#">
						<p class="text-title text-center text-primary">See more...</p>
					</a>
				</div>
				<div class="col-3">
					<h2 class="footer-title secondary-title">Tags</h2>

					<div class="tags">
						<div class="d-flex flex-wrap">
							<a href="#" class="nav-link btn bg-light">Poems</a>
							<a href="#" class="nav-link btn bg-light">Short Story</a>
							<a href="#" class="nav-link btn bg-light">Bio</a>
							<a href="#" class="nav-link btn bg-light">Literature</a>
							<a href="#" class="nav-link btn bg-light">Quotations</a>
						</div>
					</div>

					<h2 class="footer-title secondary-title mt-2">Hit us up!</h2>

					<div class="tags social">
						<div class="d-flex flex-wrap">
							<a href="https://facebook.com/UntangledStringsOfficial" class="nav-link btn bg-light"><i class="fab fa-facebook-f"></i></a>
							<a href="#" class="nav-link btn bg-light"><i class="fas fa-envelope"></i></a>
						</div>
					</div>
				</div>
			</div>

			<!-- Copyrights -->
			<div class="copyrights">
				<p class="text-center text-secondary display-2">
					© 2022 <a href="./index.html" class="text-primary">Untangled Stings</a> - Blog. All Rights Reserved.
				</p>
			</div>
		</div>
	</footer>
	<!-- .Footer -->
	

	<!-- Masonry javascript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js" integrity="sha512-JRlcvSZAXT8+5SQQAvklXGJuxXTouyq8oIMaYERZQasB8SBDHZaUbeASsJWpk0UUrf89DP3/aefPPrlMR1h1yQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- Swiper javascript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.min.js" integrity="sha512-V1mUBtsuFY9SNr+ptlCQAlPkhsH0RGLcazvOCFt415od2Bf9/YkdjXxZCdhrP/TVYsPeAWuHa+KYLbjNbeEnWg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- custom javascript -->
	<script src="assets/js/main.js"></script>
</body>
</html>