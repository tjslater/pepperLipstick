<?php

function get_list_view_html($product_id, $product) {
    
$output = "";
$output = $output . "<li>";
$output = $output . '<a href="shirt.php?id=' . $product_id . '">';
$output = $output . '<img src="' . $product["img"] . '" alt="' . $product["name"] . '">';
$output = $output . "<p>View Details</p>";
$output = $output . "</a>";
$output = $output . "</li>";

 return $output;   
}

$products = array();
$products[101] = array(
	"name" => "Art Deco",
	"price" => 18,
	"img" => "img/shirts/shirt-101.jpg",
    "sizes" => array("Small", "Medium", "Large", "X-Large"),
    "description" => "The Art Couture Lipstick velvet in the matte collection contains the perfect shade for any woman. The unbeatable new generation of lipsticks offers seductive, sensuous, rich colors that are combined with feminine elegance and softness. There is an ideal balance between long durability, complete opacity and satiny color quality. High pigmented color creations tie together with intense luminosity and depth of the color. The silicon-free texture of cadelilla, bees and Carnauba wax protect the lips."

	);
$products[102] = array(
    "name" => "Yves St. Laurent",
    "img" => "img/shirts/shirt-102.jpg",
    "price" => 20,
    "sizes" => array("Small", "Medium", "Large", "X-Large"),
    "description" => "Protection, comfort, wet-looking shine, homogeneous color that doesn't smudge: Rouge Volupte Shine melts on your lips and stays with you for hours of pure pleasure & unlimited seduction."
);
$products[103] = array(
    "name" => "Swarovski",
    "img" => "img/shirts/shirt-103.jpg",    
    "price" => 20,
    "sizes" => array("Small", "Medium", "Large", "X-Large"),
    "description" => '"Crystallize your lips" is a fashionable and elegant collection that enhances lips\' beauty. A new jewel of light in the Collection Aura by Swarovski. Its futuristic and elegant line matches perfectly with the fragrance design. Very slim and high, the lipstick is sublimated by a real Swarovski colored crystal that sparkles  with thousand reflections.'
);
$products[104] = array(
    "name" => "M&#8226A&#8226C",
    "img" => "img/shirts/shirt-104.jpg",    
    "price" => 18,
    "sizes" => array("Small", "Medium", "Large", "X-Large"),
    "description" => "Colour plus texture for the lips. Stands out on the runway. Simmers on the street! What made M&#8226A&#8226C famous."
);
$products[105] = array(
    "name" => "Benefit",
    "img" => "img/shirts/shirt-105.jpg",    
    "price" => 25,
    "sizes" => array("Small", "Medium", "Large", "X-Large"),
    "description" => "Your search for the perfect lipstick is over! From naughty nudes to red carpet reds, these rich, seductive full-finish lipsticks give you the coverage and color you've been longing for. This creamy formula with medium to full coverage. Leaves lips with a smooth finish. With 20 glamorous shades to choose from, you'll want them all!"
);
$products[106] = array(
    "name" => "Deborah Lippman",
    "img" => "img/shirts/shirt-106.jpg",    
    "price" => 20,
    "sizes" => array("Small", "Medium", "Large", "X-Large"),
    "description" => "The rich, creamy texture of a lipstick. The sheer, high-shine finish of a gloss."
);
$products[107] = array(
    "name" => "Aya cosmetics",
    "img" => "img/shirts/shirt-107.jpg",    
    "price" => 20,
    "sizes" => array("Small", "Medium", "Large", "X-Large"),
    "description" => "Pastel pink with a hint of orchid."
);
$products[108] = array(
    "name" => "Art Deco",
    "img" => "img/shirts/shirt-108.jpg",    
    "price" => 25,
    "sizes" => array("Small", "Medium", "Large", "X-Large"),
    "description" => '"Classic red lips are always the height of glamour, and the most chic beauty statement a woman can make!" - Dita Von Teese'

);	 
		 
?>