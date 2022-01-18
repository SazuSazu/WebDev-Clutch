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
        // Simple error to display if the id for the product doesn't exists (array is empty)
        exit('Product does not exist!');
    }
} else {
    // Simple error to display if the id wasn't specified
    exit('Product does not exist!');
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
            <input type="hidden" id="text" type="text" value="<?=$product['qr']?>" style="width:80%" /><br />
            <span style="width= 60px" id="qrcode"> </span>
        </span>
        
        <form action="homeindex.php?page=cart" method="post">
            <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
            <input type="hidden" name="product_id" value="<?=$product['id']?>">
            <input type="submit" value="Add To Cart">
        </form>
        <div class="description">
            <?=$product['descr']?>
        </div>
</div>

<script>
var qrcode = new QRCode("qrcode");
function makeCode () {    
  var elText = document.getElementById("text");
  if (!elText.value) {
    alert("Input a text");
    elText.focus();
    return;
  }
  qrcode.makeCode(elText.value);
}
makeCode();
$("#text").
  on("blur", function () {
    makeCode();
  }).
  on("keydown", function (e) {
    if (e.keyCode == 13) {
      makeCode();
    }
  });
</script>


<?=template_footer()?>

