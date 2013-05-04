<?php 
$pageTitle = "Pepper lipstick"; 

include('inc/header.php'); ?>

		<div class="section banner">

			<div class="wrapper">
				

				<img class="hero" src="img/mike-the-frog.png" alt="Pepper the cat says:">
				<!--<div class="button">
					<a href="shirts.php">
						<h2>Hey, I&rsquo;m Mike!</h2>
						<p>Check Out My Shirts</p>
					</a>
				</div>-->
			</div>

		</div>

		<div class="section shirts latest">

			<div class="wrapper">

				<h2>Pepper&rsquo;s Latest Lipstick</h2>
				<?php include("inc/products.php"); ?>
				<ul class="products">
					<?php

						$total_products = count($products);
						$position = 0;
						$list_view_html = "";
						$shirts_on_page = 4;
						foreach($products as $product_id => $product) {
							$position += 1;
							if ($total_products - $position < $shirts_on_page){
								$list_view_html = get_list_view_html($product_id, $product) . $list_view_html;
							}
						} 
						echo $list_view_html;
				?>				
				</ul>

			</div>

		</div>

	<?php include ('inc/footer.php'); ?>