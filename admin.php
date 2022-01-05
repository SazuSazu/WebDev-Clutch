<style>
    
body > .container {
    padding: 20px 15px 0;
}

.footer > .container {
    padding-right: 15px;
    padding-left: 15px;
}

code {
    font-size: 80%;
}

/* The hero image */
.hero-image {
    /* The image used */
    background-image: url("../images/wallpapper.jpg");

    /* Set a specific height */
    height: 350px;
    /* Position and center the image to scale nicely on all screens */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}

/* Place text in the middle of the image */
.hero-text {
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
}

</style>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Basic PHP and MySQL application using PHP Data Object and Bootstarp 4">
    <meta name="author" content="Sok Kimsoeurn">
    <link rel="icon" href="images/favicon.ico">

    <title>Admin Module</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/6f636db11c.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-danger fixed-top">
        <div class="container" style="height : 40px">
            <a class="navbar-brand" href="#">Admin Module</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
  
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <a class="navbar-brand" href="signup/login.php" ><span class="fa fa-sign-out">Logout</a>
                
                </form>
            </div>
        </div>
    </nav>
    
        <!-- End create form -->
        <br>
        <!-- Table Product -->
        <div class="card border-dark">
            <div class="card-header bg-dark text-white">
            <strong><i class="fa fa-database"></i> Products</strong>
        </div>
        <div class="card border-dark">
            <div class="card-header bg-dark text-white">
            <strong><i class="fa fa-user"></i> User</strong>
        </div>
        <div class="card-body">
            <div class="row">
            </div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th style="width: 20%;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>test@gmail.com</td>
                        <td>Sazu</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
      </div>


      <div class="card border-dark">
            <div class="card-header bg-dark text-white">
            <strong><i class="fa fa-product"></i> Products</strong>
        </div>
        <div class="card-body">
            <div class="row">
            <div class="col-md-12">
                    <h5 class="card-title float-left">Table Products</h5>
                    <a href="#" class="btn btn-success float-right mb-3"><i class="fa fa-plus"></i> Add New</a>
                </div>
            </div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th style="width: 20%;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>Speaker JBL Charge 3</td>
                        <td>$240</td>
                        <td>12</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-light"><i class="fa fa-th-list"></i></a>
                            <a href="#" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
      </div>



     
