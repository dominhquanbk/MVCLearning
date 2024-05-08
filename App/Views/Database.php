<?php

$result = $databaseObj->selectAllInTable("testhuman");
?>
<form id="deleteForm" method="post">
    <input type="hidden" name="itemId" id="itemId">
</form>
<?php if (isset($_POST["itemId"])) {
    $delete_id = $_POST["itemId"];
    $sql = "DELETE from testhuman where PersonID='$delete_id'";
    $databaseObj->Query($sql);
} ?>
<section class="section-products">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-8 col-lg-6">
                <div class="header">
                    <h3>Featured Product</h3>
                    <h2>Popular Products</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Single Product -->
            <?php foreach ($result as $row) : ?>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-1" class="single-product">
                        <div class="part-1">
                            <ul>
                                <li><a href="#"><i class="fas fa-shopping-cart" onclick="submitForm('cart')"></i></a></li>
                                <li><a href="#"><i class="fas fa-heart" onclick="submitForm('heart')"></i></a></li>
                                <li><a href="#"><i class="fas fa-plus" onclick="submitForm('plus')"></i></a></li>
                                <li><a href="#"><i class="fas fa-trash" onclick="submitForm('<?php echo $row['PersonID']; ?>')"></i></a></li>

                            </ul>

                        </div>
                        <div class="part-2">
                            <h3 class="product-title"><?php echo  $row['FirstName'] ?></h3>
                            <h4 class="product-old-price">$79.99</h4>
                            <h4 class="product-price">$49.99</h4>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>


        </div>
    </div>
</section>
<script>
    function submitForm(itemId) {
        // Set the item ID value in the hidden input field
        document.getElementById('itemId').value = itemId;

        // Submit the form
        document.getElementById('deleteForm').submit();
    }
</script>