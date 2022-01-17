<?php
include('dashboard.php');
include('dbconnection.php');


                            global $conn;
                            $sqluser = "SELECT * FROM user";
                            
                            $resultuser = $conn->query($sqluser);
                            
                            $user = 0;
                            
                            if ($resultuser->num_rows >0 ){
                                while ($row = $resultuser->fetch_assoc()) {
                                    
                                    $createuser =++$user;
                            }
                            $createuser = $createuser+1;
                            }
                            
                            else {
                              echo "0 results";
                              $conn->close();
                            }
                        
?>


    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total User</div>
            <div class="number"><?php echo $createuser;?></div>
          </div>
          <i class='bx bx-user cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Product</div>

            <?php 
            $sqlproduct = "SELECT * FROM products";
            $resultproduct = $conn->query($sqlproduct);
            $product = 0;
            if ($resultproduct->num_rows >0 ){
                while ($row = $resultproduct->fetch_assoc()) {
                  
                    $createproduct = ++$product;
            }
                $createproduct = $createproduct +1 ;
            } ?>


            <div class="number"><?php echo $createproduct;?> </div>
          </div>
          <i class='bx bxs-package cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Order</div>
            <div class="number">20</div>
          </div>
          <i class='bx bx-cart cart three' ></i>
        </div>

        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Sales</div>
            <div class="number">RM 250</div>
          </div>
          <i class='bx bx-money cart four' ></i>
        </div>
      </div>


      <div class="sales-boxes">
        <div class="recent-sales box">
        <span class="title">Recent Order</span>
          <div class="sales-details">
            <ul class="details">
              <li class="topic">ID</li>
              <li><a href="#">02 Jan 2021</a></li>
            </ul>
            <ul class="details">
            <li class="topic">Name</li>
            <li><a href="#">Alex Doe</a></li>
          </ul>
          <ul class="details">
            <li class="topic">Quantity</li>
            <li><a href="#">23</a></li>
          </ul>
          <ul class="details">
            <li class="topic">Total</li>
            <li><a href="#">$204.98</a></li>
          </ul>
          </div>
          <div class="button">
            <a href="#">See All</a>
          </div>
        </div>

        <div class="top-sales box">
        <div class="title">Popular</div>
          <div class="title">Product</div>
          <ul class="top-sales-details">
            <li>
            <a href="#">
              <span class="product"><i class='bx bx-mobile' ></i>Vuitton Sunglasses</span>
            </a>
          </li>
          </ul>
          <div class="button">
            <a href="manageproduct.php">See All</a>
          </div>
        </div>
      </div>
    </div>
  </section>



<script>
let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
</script>



</body>
</html>

<?php
            
            
           
?>