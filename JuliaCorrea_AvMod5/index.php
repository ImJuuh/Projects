

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>SweetSlice</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

		<?php
		$visitado = isset($_COOKIE['visitado']) ? $_COOKIE['visitado'] : false;
	
		if (!$visitado) {
			setcookie('visitado', '1', time() + 3600 * 24 * 30); // Válido por 30 dias
			echo '<script>alert("Bem-vindo de volta! Este é o seu primeira visita.");</script>';
		}
		?>

	</head>
	<body>
		<!-- Barra NAVE ESPACIAL -->
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
			<a href="index.html"><img style="width: 140px; margin-left: 700px;" src="imagens/logotipo.png" alt="logotipo"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto" img>
					<li class="nav-item">
						<a class="nav-link" href="index.html">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="receitas.html">Receitas</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contactos.html">Contactos</a>
					</li>
					<li class="nav-item active" style="margin-top: 6px;">
						<a style="color: white;" class="hover-rbw" href="login.html">Login</a>
					</li>
				</ul>
			</div>
		</nav>

		<!-- Conteúdo da Página -->
		<!-- Slider main container -->
		<div class="swiperf">
			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
				<!-- Slides -->
				<div class="swiper-slide">
					<img src="imagens/slie1.png" alt="Slide 1" style="width: 100%; height: 100%; object-fit: cover;">
				</div>
				<div class="swiper-slide">
					<img src="imagens/slide2.png" alt="Slide 2" style="width: 100%; height: 100%; object-fit: cover;">
				</div>
			<!-- If we need pagination -->
			<div class="swiper-pagination"></div>
			<!-- If we need scrollbar -->
			<div class="swiper-scrollbar"></div>
		</div>
		<script>
			const fswiper = new Swiper('.swiperf', {
			// Optional parameters
			direction: 'horizontal',
			loop: true,
			
			// If we need pagination
			pagination: {
			el: '.swiper-pagination',
			},
			
			// Navigation arrows
			navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
			},
			
			autoplay: {
			delay: 5000,
			},
			
			slidesPerView: 1,
			spaceBetween: 10,
			
			breakpoints: {

			'@1.50': {
			slidesPerView: 1,
			spaceBetween: 50,
			},
			}
			
			});
		</script>
		<section  style="margin-bottom: -120px;" class="section">
			<div class="container">
				<h2 class="section-heading">Bem-vindo à nossa loja!</h2>
			</div>
		</section>
		<!-- Seção de Produtos -->
		<section class="section">
			<div class="container">
				<h2 class="section-heading">Nossos Produtos</h2>
				<h5 style="text-align: center; color: red;">DESTAQUE</h5>
				<div class="row">
					<div class="col-lg-4">
						<div class="product-card">
							<h4 style="text-align: center;">CheeseCake</h4>
							<br> 
							<img src="imagens/cheesecake.png" alt="cheesecake" style="width: 300px; height: auto; border-radius: 0.8rem;">
							<div style="color: #ff0303;" class="price">$ 10,99</div>
							<button style="margin-top: 10px;" class="glow-on-hover" type="submit">Comprar</button> 
						</div>
					</div>
					<div class="col-lg-4">
						<div class="product-card">
							<h4 style="text-align: center;">Bolo Chocolate</h4>
							<br> 
							<img src="imagens/bolochocolate.png" alt="bolochocolate" style="width: 300px; height: auto; border-radius: 0.8rem;">
							<div style="color: #ff0303;" class="price">$ 18,99</div>
							<button style="margin-top: 10px;" class="glow-on-hover" type="submit">Comprar</button> 
						</div>
					</div>
					<div class="col-lg-4">
						<div class="product-card">
							<h4 style="text-align: center;">Roll</h4>
							<br> 
							<img src="imagens/roll.png" alt="Pudim" style="width: 300px; height: auto; border-radius: 0.8rem;">
							<div style="color: #ff0303;" class="price">$ 14,00</div>
							<button style="margin-top: 10px;" class="glow-on-hover" type="submit">Comprar</button> 
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Seção de Depoimentos de Clientes -->
		<section class="section">
			<div class="container">
				<h2 class="section-heading">Feedback dos Clientes</h2>
				<div class="swiper">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">
						<!-- Slides -->
						<div class="swiper-slide">
							<div class="testimonial-card">
								<div class="testimonial-content">
									<div class="testimonial-image">
										<img src="pato.jpeg" alt="Imagem do Cliente" />
										<h5 style="color: #41033b; margin-top: 10px;">Suzy Cardon</h5>
									</div>
									<div class="testimonial-text">
										<p>satisfeita</p>
										<span class="star">&#9733;</span>
										<span class="star">&#9733;</span>
										<span class="star">&#9733;</span>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="testimonial-card">
								<div class="testimonial-content">
									<div class="testimonial-image">
										<img src="pato.jpeg" alt="Imagem do Cliente" />
										<h5 style="color: #41033b; margin-top: 10px;">Donald Mouse</h5>
									</div>
									<div class="testimonial-text">
										<p>AMAZING</p>
										<span class="star">&#9733;</span>
										<span class="star">&#9733;</span>
										<span class="star">&#9733;</span>
										<span class="star">&#9733;</span>  
										<span class="star">&#9733;</span>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="testimonial-card">
								<div class="testimonial-content">
									<div class="testimonial-image">
										<img src="pato.jpeg" alt="Imagem do Cliente" />
										<h5 style="color: #41033b; margin-top: 10px;">Margarida Tuffy</h5>
									</div>
									<div class="testimonial-text">
										<p>Roupas com boa qualidade</p>
										<span class="star">&#9733;</span>
										<span class="star">&#9733;</span>
										<span class="star">&#9733;</span>
										<span class="star">&#9733;</span>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="testimonial-card">
								<div class="testimonial-content">
									<div class="testimonial-image">
										<img src="pato.jpeg" alt="Imagem do Cliente" />
										<h5 style="color: #41033b; margin-top: 10px;">Toy Tuffy</h5>
									</div>
									<div class="testimonial-text">
										<p>CheeseCakes Deliciosos</p>
										<span class="star">&#9733;</span>
										<span class="star">&#9733;</span>
										<span class="star">&#9733;</span>
										<span class="star">&#9733;</span>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="testimonial-card">
								<div class="testimonial-content">
									<div class="testimonial-image">
										<img src="pato.jpeg" alt="Imagem do Cliente" />
										<h5 style="color: #41033b; margin-top: 10px;">Reinaldo LOL</h5>
									</div>
									<div class="testimonial-text">
										<p>Roupas top xuxa</p>
										<span class="star">&#9733;</span>
										<span class="star">&#9733;</span>
										<span class="star">&#9733;</span>
										<span class="star">&#9733;</span>
										<span class="star">&#9733;</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>
				</div>
			</div>
		</section>
		<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
		<script>
			const swiper = new Swiper('.swiper', {
			// Optional parameters
			direction: 'horizontal',
			loop: true,
			
			// If we need pagination
			pagination: {
			el: '.swiper-pagination',
			},
			
			// Navigation arrows
			navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
			},
			
			autoplay: {
			delay: 5000,
			},
			
			slidesPerView: 1,
			spaceBetween: 10,
			
			breakpoints: {
			
			'@1.00': {
			slidesPerView: 2,
			spaceBetween: 40,
			},
			'@1.50': {
			slidesPerView: 3,
			spaceBetween: 50,
			},
			}
			
			});
		</script>
		<footer>
			<p>&copy; 2023 SHOP SA. Todos os direitos reservados.</p>
		</footer>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</body>
</html>