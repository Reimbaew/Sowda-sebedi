<div id="product-grid">
    <div class="txt-heading">
        <div class="txt-heading-label">Harytlar</div>
    </div>
    <?php
    $query = "SELECT * FROM tbl_product";
    $product_array = $shoppingCart->getAllProduct($query);
    if (!empty($product_array)) {
        foreach ($product_array as $key => $value) {
            ?>
            <div class="product-item">
                <form method="post" action="index.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
                    <div class="product-image">
                        <img src="<?php echo $product_array[$key]["image"]; ?>">
                        <div class="product-title">
                            <?php echo $product_array[$key]["name"]; ?>
                        </div>
                    </div>
                    <div class="product-footer">
                        <div class="float-right">
                            <input type="text" name="quantity" value="1" size="2" class="input-cart-quantity" /><input
                                type="image" src="add-to-cart.png" class="btnAddAction" />
                        </div>
                        <div class="product-price float-left" id="product-price-<?php echo $product_array[$key]["code"]; ?>">
                            <?php echo "$" . $product_array[$key]["price"]; ?></div>

                    </div>
                </form>
            </div>
            <?php
        }
    }
    ?>
</div>
