<?php include 'header.php';?>

<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Your future device is here</p>
						<h1>Shop</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">

			<div class="row">
				<div class="col-md-12">
					<div class="product-filters">
						<ul>
							<li class="active" data-filter="*">All</li>
							<li data-filter=".laptop">Laptop</li>
							<li data-filter=".PC">PC</li>
							<li data-filter=".Phone">Phone</li>
						</ul>
					</div>
				</div>
			</div>
            <div class="row product-lists">
            <?php
			
            $qry = "SELECT * FROM products INNER JOIN cat ON cat.cid = products.cid";
            $res = mysqli_query($cdb,$qry);
            foreach ($res as $r): ?>
				<div class="col-lg-4 col-md-6 text-center <?= $r['cn'] ?>">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.php?id=<?= $r['ID'] ?>"><img src="assets/img/products/<?= $r['IMAGE'] ?>" alt=""></a>
						</div>
						<h3><?= $r['TITLE'] ?></h3>
						<p class="product-price"><span>Starts from</span> <?= $r['PRICE']?> EGP </p>
						<a href="cart.php?id=<?=$r['ID']?>" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
                <?php endforeach; ?>
			</div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="pagination-wrap">
						<ul>
							<li><a class="active" href="#">1</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end products -->
    <?php include 'footer.php'; ?>