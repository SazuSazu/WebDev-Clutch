<?php
// Get the 4 most recently added products
$stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added DESC LIMIT 4');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?=template_header()?>

<section class="section">
         <div class="slider">
             <div class="slide">
                 <input type="radio" name="radio-btn" id="radio1">
                 <input type="radio" name="radio-btn" id="radio2">
                 <input type="radio" name="radio-btn" id="radio3">
                 <input type="radio" name="radio-btn" id="radio4">
                 <input type="radio" name="radio-btn" id="radio5">

                 <div class="st first">
                     <img src="imgs/hias/slider1.jpg" alt="">
                 </div>
                 <div class="st">
                    <img src="imgs/hias/huaweislider.jpg" alt="">
                </div>
                <div class="st">
                    <img src="imgs/hias/opposlider.jpg" alt="">
                </div>
                <div class="st">
                    <img src="imgs/hias/redmislider.jpg" alt="">
                </div>
                <div class="st">
                    <img src="imgs/hias/samsungslider.jpg" alt="">
                </div>

                <div class="nav-auto">
                    <div class="a-b1"></div>
                    <div class="a-b2"></div>
                    <div class="a-b3"></div>
                    <div class="a-b4"></div>
                    <div class="a-b5"></div>
                </div>
             </div>

             <div class="nav-m">
                 <label for="radio1" class="m-btn"></label>
                 <label for="radio2" class="m-btn"></label>
                 <label for="radio3" class="m-btn"></label>
                 <label for="radio4" class="m-btn"></label>
                 <label for="radio5" class="m-btn"></label>
             </div>
         </div>
     </section>

     <!-- <h1 class="center">Product Available</h1>
    <section class="container1">
        <div class="card">
            <div class="card-image brand-1">
            </div>
            <h2>SAMSUNG</h2>
        </div>
        <div class="card">
            <div class="card-image brand-2"></div>
            <h2>APPLE</h2>
        </div>
        <div class="card">
            <div class="card-image brand-3"></div>
            <h2>HUAWEI</h2>
        </div>
</section>   
    <section class="container2">
        <div class="card">
            <div class="card-image brand-4"></div>
            <h2>OPPO</h2>
        </div>
        <div class="card">
            <div class="card-image brand-5"></div>
            <h2>XIAOMI</h2>
        </div><br><br><br><br>
</section> -->
<div class="recentlyadded content-wrapper">
    <h2>Hot Items</h2>
    <div class="products">
        <?php foreach ($recently_added_products as $product): ?>
        <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
            <img src="imgs/<?=$product['img']?>" width="200" height="200" alt="<?=$product['name']?>">
            <span class="name"><?=$product['name']?></span>
            <span class="price">
                RM<?=$product['price']?>
                <?php if ($product['rrp'] > 0): ?>
                <span class="rrp">RM<?=$product['rrp']?></span>
                <?php endif; ?>
            </span>
        </a>
        <?php endforeach; ?>
    </div>
</div>

<section class="about">
        <div class="main">
            <img src="/imgs/hias/about.jpg">
            <div class="about-text">
                <h1>About Us</h1>
                <h5>E-Phone Store</h5>
                <p>E-Phone Store gives you a chance to quickly and easily find the phone you want. </p>
                <p>E-Phone Store website was launched in 2021, a group of university friends decided to go into business together. 
                    We started selling phones in shops, but our combined ambition, drive and abilities soon made us look for new challenges and new markets. </p>
            </div>
        </div>
    </section>
    <div class="image-grid">
        <img class="image-grid-col-2 image-grid-row-2" src="/imgs/hias/gallery4.jpg" alt="gallery">
        <img src="/imgs/hias/gallery1.jpg" alt="gallery">
        <img src="/imgs/hias/gallery2.jpg" alt="gallery">
        <img src="/imgs/hias/gallery3.jpg" alt="gallery">
        <img src="/imgs/hias/gallery5.jpg" alt="gallery">
      </div><br>

<script type="text/javascript">
         var counter = 1;
         setInterval(function(){
             document.getElementById('radio' + counter).checked = true;
             counter++;
             if(counter > 5){
                counter = 1;
             }
         },5000)
     </script>

<?=template_footer()?>