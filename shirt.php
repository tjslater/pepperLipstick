<?php include("inc/products.php"); 

if (isset($_GET["id"])){
	$product_id = $_GET["id"];
	if (isset($products[$product_id])) {
	$product = $products[$product_id];
	
	} 
}

if (!isset($product)){
	header("Location: shirts.php");
	exit();
}

$selection = "shirts";
$pageTitle = $product["name"];
include("inc/header.php"); ?>

	<div class="section page">
		<div class="wrapper">
			<div class="breadcrumb"><a href="shirts.php">Lipstick</a> &gt; <?php echo $product["name"]; ?></div>

			<div class="shirt-picture">
				<span>
					<img src="<?php echo $product["img"]; ?>" alt="<?php echo $product["name"]; ?>">
				</span>
			</div>

			<div class="shirt-details">
				<h1><span class="price">$<?php echo $product["price"]; ?></span></h1>
					<?php echo $product["name"] ?>
					<p class="note-designer"><?php echo $product["description"]; ?></p>
			</div>

		</div>
	</div>

	<?php include("inc/footer.php"); ?>