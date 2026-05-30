<?php

session_start();

include 'db.php';



// ADMIN SECURITY

if(!isset($_SESSION['user_name'])){

    header("Location: login.php");

}



if($_SESSION['user_role'] != 'admin'){

    header("Location: index.php");

}



// ADD PRODUCT

if(isset($_POST['add_product'])){



    $name = $_POST['name'];

    $price = $_POST['price'];

    $description = $_POST['description'];



    // IMAGE

    $image = $_FILES['image']['name'];

    $tmp_name = $_FILES['image']['tmp_name'];



    move_uploaded_file(
        $tmp_name,
        "images/$image"
    );



    // INSERT QUERY

    $query = "INSERT INTO products
              (name, price, image, description)

              VALUES
              ('$name', '$price', '$image', '$description')";



    mysqli_query($conn, $query);



    $success = "Product Added Successfully";

}

?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Add Product</title>



    <link rel="stylesheet"
          href="css/bootstrap.min.css">



    <link rel="stylesheet"
          href="css/style.css">

</head>

<body class="admin-page">



<div class="container mt-5">

    <div class="row">



        <!-- SIDEBAR -->

        <div class="col-md-3">

            <div class="bg-dark text-white p-4 rounded">



                <h3 class="mb-4">

                    Admin Panel

                </h3>



                <ul class="list-unstyled">



                    <li class="mb-3">

                        <a href="admin_dashboard.php"
                           class="text-white text-decoration-none">

                            Dashboard

                        </a>

                    </li>



                    <li class="mb-3">

                        <a href="add_product.php"
                           class="text-warning text-decoration-none">

                            Add Product

                        </a>

                    </li>



                    <li class="mb-3">

                        <a href="manage_products.php"
                           class="text-white text-decoration-none">

                            Manage Products

                        </a>

                    </li>



                    <li class="mb-3">

                        <a href="logout.php"
                           class="text-danger text-decoration-none">

                            Logout

                        </a>

                    </li>

                </ul>

            </div>

        </div>



        <!-- MAIN CONTENT -->

        <div class="col-md-9">

          <div class="admin-card p-5">



                <h2 class="mb-4">

                    Add New Product

                </h2>



                <!-- SUCCESS MESSAGE -->

                <?php

                if(isset($success)){

                    echo "<div class='alert alert-success'>$success</div>";

                }

                ?>



                <form method="POST"
                      enctype="multipart/form-data"
                      class="admin-form">



                    <!-- PRODUCT NAME -->

                    <div class="mb-3">

                        <label class="form-label">

                            Product Name

                        </label>

                        <input type="text"
                               name="name"
                               class="form-control"
                               required>

                    </div>



                    <!-- PRODUCT PRICE -->

                    <div class="mb-3">

                        <label class="form-label">

                            Product Price

                        </label>

                        <input type="number"
                               name="price"
                               class="form-control"
                               required>

                    </div>



                    <!-- PRODUCT IMAGE -->

                    <div class="mb-3">

                        <label class="form-label">

                            Product Image

                        </label>

                        <input type="file"
                               name="image"
                               class="form-control"
                               required>

                    </div>



                    <!-- PRODUCT DESCRIPTION -->

                    <div class="mb-3">

                        <label class="form-label">

                            Product Description

                        </label>

                        <textarea name="description"
                                  rows="5"
                                  class="form-control"
                                  required></textarea>

                    </div>



                    <!-- SUBMIT BUTTON -->

                    <button type="submit"
                            name="add_product"
                            class="btn btn-warning">

                        Add Product

                    </button>

                </form>

            </div>

        </div>

    </div>

</div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>