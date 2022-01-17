<?php include('dashboard.php');
?>


<style>
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
	background: #fff;
	padding: 20px 25px;
	border-radius: 3px;
	min-width: 1000px;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {        
	padding-bottom: 15px;
	background: #000000;
	color: #fff;
	padding: 16px 30px;
	min-width: 100%;
	margin: -20px -25px 10px;
	border-radius: 3px 3px 0 0;
}
.table-title h2 {
	margin: 5px 0 0;
	font-size: 24px;
}
.table-title .btn-group {
	float: right;
}
.table-title .btn {
	color: #fff;
	float: right;
	font-size: 13px;
	border: none;
	min-width: 50px;
	border-radius: 2px;
	border: none;
	outline: none !important;
	margin-left: 10px;
}
.table-title .btn i {
	float: left;
	font-size: 21px;
	margin-right: 5px;
}
.table-title .btn span {
	float: left;
	margin-top: 2px;
}
table.table tr th, table.table tr td {
	border-color: #e9e9e9;
	padding: 12px 15px;
	vertical-align: middle;
}
table.table tr th:first-child {
	width: 60px;
}
table.table tr th:last-child {
	width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
	background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
	background: #f5f5f5;
}
table.table th i {
	font-size: 13px;
	margin: 0 5px;
	cursor: pointer;
}	
table.table td:last-child i {
	opacity: 0.9;
	font-size: 22px;
	margin: 0 5px;
}
table.table td a {
	font-weight: bold;
	color: #566787;
	display: inline-block;
	text-decoration: none;
	outline: none !important;
}
table.table td a:hover {
	color: #2196F3;
}
table.table td a.edit {
	color: #FFC107;
}
table.table td a.delete {
	color: #F44336;
}
table.table td i {
	font-size: 19px;
}
table.table .avatar {
	border-radius: 50%;
	vertical-align: middle;
	margin-right: 10px;
}
.pagination {
	float: right;
	margin: 0 0 5px;
}
.pagination li a {
	border: none;
	font-size: 13px;
	min-width: 30px;
	min-height: 30px;
	color: #999;
	margin: 0 2px;
	line-height: 30px;
	border-radius: 2px !important;
	text-align: center;
	padding: 0 6px;
}
.pagination li a:hover {
	color: #666;
}	
.pagination li.active a, .pagination li.active a.page-link {
	background: #03A9F4;
}
.pagination li.active a:hover {        
	background: #0397d6;
}
.pagination li.disabled i {
	color: #ccc;
}
.pagination li i {
	font-size: 16px;
	padding-top: 6px
}
.hint-text {
	float: left;
	margin-top: 10px;
	font-size: 13px;
}    
/* Custom checkbox */
.custom-checkbox {
	position: relative;
}
.custom-checkbox input[type="checkbox"] {    
	opacity: 0;
	position: absolute;
	margin: 5px 0 0 3px;
	z-index: 9;
}
.custom-checkbox label:before{
	width: 18px;
	height: 18px;
}
.custom-checkbox label:before {
	content: '';
	margin-right: 10px;
	display: inline-block;
	vertical-align: text-top;
	background: white;
	border: 1px solid #bbb;
	border-radius: 2px;
	box-sizing: border-box;
	z-index: 2;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	content: '';
	position: absolute;
	left: 6px;
	top: 3px;
	width: 6px;
	height: 11px;
	border: solid #000;
	border-width: 0 3px 3px 0;
	transform: inherit;
	z-index: 3;
	transform: rotateZ(45deg);
}
.custom-checkbox input[type="checkbox"]:checked + label:before {
	border-color: #03A9F4;
	background: #03A9F4;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	border-color: #fff;
}
.custom-checkbox input[type="checkbox"]:disabled + label:before {
	color: #b8b8b8;
	cursor: auto;
	box-shadow: none;
	background: #ddd;
}
/* Modal styles */
.modal .modal-dialog {
	max-width: 400px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
	padding: 20px 30px;
}
.modal .modal-content {
	border-radius: 3px;
	font-size: 14px;
}
.modal .modal-footer {
	background: #ecf0f1;
	border-radius: 0 0 3px 3px;
}
.modal .modal-title {
	display: inline-block;
}
.modal .form-control {
	border-radius: 2px;
	box-shadow: none;
	border-color: #dddddd;
}
.modal textarea.form-control {
	resize: vertical;
}
.modal .btn {
	border-radius: 2px;
	min-width: 100px;
}	
.modal form label {
	font-weight: normal;
}	
</style>
<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
<div class="home-content">
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Product</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addProduct" class="btn btn-success" data-toggle="modal"><i class="bx bx-add-to-queue">&#xE147;</i> <span>Add New Product</span></a>					
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
                        <th>ID</th>
						<th>Name</th>
						<th>Description</th>
						<th>Price</th>
						<th>Promotion</th>
						<th>Quantity</th>
                        <th>Image</th>
                        <th>QRCode</th>
                        <th>Date Added</th>
                        <th>Action</th>
					</tr>
				</thead>
				<tbody>
                

                <?php 
                            include "C:\laragon\www\Group11\dbconnection.php";
                            global $conn;
                            $sql ="SELECT * FROM products";
                            $result = $conn->query($sql);
                            $num = 0;

                            if ($result->num_rows >0 ){
                                while ($row = $result->fetch_assoc()) {
                                    ++$num;
                                
                ?>
               
			<tr>
						<td><?php echo $row["id"] ?></td>
						<td><?php echo $row["name"] ?></td>
						<td><?php echo $row["descr"] ?></td>
						<td><?php echo $row["price"] ?></td>
						<td><?php echo $row["rrp"] ?></td>
						<td><?php echo $row["quantity"] ?></td>
                        <td><?php echo $row["img"] ?></td>
                        <td><?php echo $row["qr"] ?></td>
                        <td><?php echo $row["date"] ?></td>
						<td>
							<button type = "button" class = "btn btn-primary editbtn"> EDIT </button>
							<button type = "button" class = "btn btn-danger deletebtn"> DELETE </button>
						</td>
			</tr>	
			


<div id="addProduct" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
		<?php
                include "C:\laragon\www\Group11\dbconnection.php";
				date_default_timezone_set("Asia/Kuala_Lumpur");					
                if (isset($_POST['add'])) {
                    $name = $_POST['name'];
                    $desc = $_POST['desc'];
                    $price = $_POST['price'];
                    $rrp = $_POST['rrp'];
                    $quantity = $_POST['quantity'];
					$img = $_POST['img'];
					$date = date("Y-m-d h:i:s");

                  
                    $sql = "INSERT INTO products (name, descr, price, rrp, quantity, img, qr, date) VALUES ('$name', '$descr', '$price', '$rrp', '$quantity', '$img', '$qr' , '$date');";

                    if ($conn->query($sql) === true) {
                        // Success
                        echo "Success";
                    } else {
                        // Failed
                        echo "Error: " . $sql . " | " . $conn->error;
                        die();
                    }
                }
        ?>
			<form method="POST"  enctype="multipart/form-date" accept-charset="utf-8">
				<div class="modal-header">						
					<h4 class="modal-title">Add Product</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Description</label>
						<textarea class="form-control" name="desc" required></textarea>
					</div>
					<div class="form-group">
						<label>Price</label>
						<input type="text" class="form-control" name="price" required>
					</div>
					<div class="form-group">
						<label>Promotion Price</label>
						<input type="text" class="form-control" name="rrp" required>
					</div>
					<div class="form-group">
						<label>Quantity</label>
						<input type="text" class="form-control"  name="quantity" required>
					</div>	
					<div class="form-group">
						<label>Image</label>
						<input type="text" class="form-control"  name="img" required>
					</div>
					<div class="form-group">
						<label>QR</label>
						<input type="text" class="form-control"  name="qr" required>
					</div>	
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success"  name="add">
				</div>
			</form>
		</div>
	</div>
</div>


<!-- Edit Modal HTML -->

 
<div id="editProduct" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
		<form action=update.php method="POST">
				<div class="modal-header">						
					<h4 class="modal-title">Edit Product</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
					<input type ="hidden" name="edit_id" id="edit_id">		
						<label>Name</label>
						<input type="text" id="name" name="name" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Description</label>
						<textarea class="form-control" id="descr" name="descr" required></textarea>
					</div>
					<div class="form-group">
						<label>Price</label>
						<input type="text" class="form-control" id="price" name="price" required>
					</div>
					<div class="form-group">
						<label>Promotion Price</label>
						<input type="text" class="form-control" id="rrp" name="rrp" required>
					</div>
					<div class="form-group">
						<label>Quantity</label>
						<input type="text" class="form-control" id="quantity" name="quantity" required>
					</div>	
					<div class="form-group">
						<label>Image</label>
						<input type="text" class="form-control" id="img" name="img" required>
					</div>
					<div class="form-group">
						<label>QR</label>
						<input type="text" class="form-control" id="qr" name="qr" required>
					</div>	
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" name ="editdata" class="btn btn-info" value="Edit">
				</div>
			</form>
		</div>
	</div>
</div>






<!-- Delete Modal HTML -->
<div id="deleteProduct" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action=delete.php method="POST">
				<div class="modal-header">						
					<h4 class="modal-title">Delete Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<input type ="hidden" name="delete_id" id="delete_id">					
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" name="deletedata" class="btn btn-danger" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html> 


<script>

$(document).ready(function() {
	$('.editbtn').on('click', function() {

	$('#editProduct').modal('show');
	$tr = $(this).closest('tr');

	var data = $tr.children("td").map(function() {
	return $(this).text();
	}).get();

	console.log(data);

	$('#edit_id').val(data[0]);
	$('#name').val(data[1]);
 	$('#descr').val(data[2]);
	$('#price').val(data[3]);
 	$('#rrp').val(data[4]);
	$('#quantity').val(data[5]);
 	$('#img').val(data[6]);
	$('#qr').val(data[7]);

});
});
</script>

<script>

$(document).ready(function() {
	$('.deletebtn').on('click', function() {

	$('#deleteProduct').modal('show');
	$tr = $(this).closest('tr');

	var data = $tr.children("td").map(function() {
	return $(this).text();
	}).get();

	console.log(data);

	$('#delete_id').val(data[0]);

});
});
</script>



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
            }
            $create = $num+1;
            } else {
            echo "0 results";
            }
            $conn->close();
	?>