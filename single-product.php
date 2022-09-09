<?php include 'header.php';?>

<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>See more Details</p>
						<h1>Single Product</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- single product -->
	<div class="single-product mt-150 mb-150">
		<div class="container">
			<div class="row">
				<?php
				$id = $_GET['id'];
				$qry = "select * from products,cat where ID = $id and products.cid = cat.cid;";
				$res = mysqli_query($cdb,$qry);
				foreach($res as $r):?>

				<div class="col-md-5">
					<div class="single-product-img">
						<img src="assets/img/products/<?= $r['IMAGE']?>" alt="">
					</div>
				</div>
				<div class="col-md-7">
					<div class="single-product-content">
						<h3><?= $r['TITLE']?></h3>
						<p class="single-product-pricing"> <?= $r['PRICE']?> EGP </p>
						<p>
							<?= $r['CONTENT']?>
						</p>
						<div class="single-product-form">
							<a href="cart.php?id=<?= $r['ID']?>" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
							<p><strong>Categories: </strong><?= $r['cn']?></p>
						</div>
					</div>
				</div>
				<?php endforeach; ?>

			</div>
		</div>
	</div>
	<!-- end single product -->

	<!-- more products -->
	<div class="more-products mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3><span class="orange-text">Related</span> Products</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet
							beatae optio.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 text-center Phone">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="assets/img/products/product-img-1.jpg" alt=""></a>
						</div>
						<h3>iPhone 13 pro</h3>
						<p class="product-price"><span>Starts from</span> 30,000 EGP </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center laptop">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="assets/img/products/product-img-2.jpg" alt=""></a>
						</div>
						<h3>Acer Predator Helios 300</h3>
						<p class="product-price"><span>Starts from</span> 20,600 EGP </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center PC">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="assets/img/products/product-img-3.jpg" alt=""></a>
						</div>
						<h3>LIAN LI Mesh Airflow ATX PC</h3>
						<p class="product-price"><span>Starts from</span> 10000 EGP </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end more products -->

	
		<?php include 'footer.php'; ?>