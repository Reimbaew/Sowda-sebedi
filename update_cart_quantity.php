<?php
require_once "ShoppingCart.php";

$member_id = 2; // agza bolmak üçin bu ýerde integrasiýa tanamak modulyny şu ýerde edip bilersiňiz

$shoppingCart = new ShoppingCart();
 
$shoppingCart->updateCartQuantity($_POST["new_quantity"], $_POST["cart_id"]);
                
?>
