<?php
// Check to make sure the id parameter is specified in the URL
if (isset($_GET['id'])) {
    // Prepare statement and execute, prevents SQL injection
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    // Fetch the product from the database and return the result as an Array
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    // Check if the product exists (array is not empty)
    if (!$product) {
        exit('Product does not exist!');
    }
} else {
    exit('Product does not exist!');
}

if(isset($_POST['cart'])){
    $id = $_POST['id'];
    $img = $_POST['img'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $stmt = $pdo->prepare('INSERT INTO cart SELECT id,img,price,quantity FROM products WHERE id = ?');
    $stmt->execute([$_GET['id']]);
}

?>

<?=template_header('Product')?>

<div class="product content-wrapper">
    <img src="imgs/<?=$product['img']?>" width="500" height="500" alt="<?=$product['name']?>">
    <div>
        <h1 class="name"><?=$product['name']?></h1>
        <span class="price">
            RM<?=$product['price']?>
            <?php if ($product['rrp'] > 0): ?>
            <span class="rrp">RM<?=$product['rrp']?></span>
            <?php endif; ?><br>
            <img src="imgs/<?=$product['qr']?>" width="120" height="120"  alt="<?=$product['name']?>">
        </span>
        
        <form action="index.php?page=cart" method="post">
            <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
            <input type="hidden" name="product_id" value="<?=$product['id']?>">
            <input type="submit" name="cart" value="Add To Cart">
        </form>
        <div class="description">
            <?=$product['desc']?>
        </div>
</div>

<?=template_footer()?>