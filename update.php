<?php
                include "C:\laragon\www\Group11\dbconnection.php";
				date_default_timezone_set("Asia/Kuala_Lumpur");					
                if (isset($_POST['editdata'])) {
					$id = $_POST['edit_id'];
                    $name = $_POST['name'];
                    $descr = $_POST['descr'];
                    $price = $_POST['price'];
                    $rrp = $_POST['rrp'];
                    $quantity = $_POST['quantity'];
					$img = $_POST['img'];
					$qr = $_POST['qr'];
					$date = date("Y-m-d h:i:s");
					
                  
                    $sql = "UPDATE products SET name='$name', descr='$descr', price='$price', rrp='$rrp', quantity='$quantity', img='$img', qr='$qr', date='$date' WHERE id='$id'";

                    if ($conn->query($sql) === true) {
                        // Success
                        echo "Success";
                    } else {
                        // Failed
                        echo "Error: " . $sql . " | " . $conn->error;
                        die();
                    }
                }
                header("location:manageproduct.php");
 ?>