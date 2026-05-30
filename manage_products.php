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



// DELETE PRODUCT

if(isset($_GET['delete'])){

    $id = $_GET['delete'];



    $delete_query = "DELETE FROM products WHERE id='$id'";



    mysqli_query($conn, $delete_query);



    header("Location: manage_products.php");

}

?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Manage Products</title>



    <link rel="stylesheet"
          href="css/bootstrap.min.css">



    <link rel="stylesheet"
          href="css/style.css">

</head>

<body>



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

                        <a href="admion_dashboard.php"
                           class="text-white text-decoration-none">

                            Dashboard

                        </a>

                    </li>



                    <li class="mb-3">

                        <a href="add_product.php"
                           class="text-white text-decoration-none">

                            Add Product

                        </a>

                    </li>



                    <li class="mb-3">

                        <a href="manage_products.php"
                           class="text-warning text-decoration-none">

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

            <div class="bg-white p-4 rounded shadow-sm">



                <div class="d-flex
                            justify-content-between
                            align-items-center
                            mb-4">



                    <h2>

                        Manage Products

                    </h2>



                    <a href="add_product.php"
                       class="btn btn-warning">

                        Add New Product

                    </a>

                </div>



                <table class="table table-bordered
                              table-hover
                              align-middle">



                    <thead class="table-dark">

                        <tr>

                            <th>ID</th>

                            <th>Image</th>

                            <th>Name</th>

                            <th>Price</th>

                            <th>Action</th>

                        </tr>

                    </thead>



                    <tbody>



                    <?php

                    $query = "SELECT * FROM products";

                    $result = mysqli_query($conn, $query);



                    while($row = mysqli_fetch_assoc($result)){

                    ?>



                    <tr>

                        <td>

                            <?php echo $row['id']; ?>

                        </td>



                        <td>

                            <img src="images/<?php echo $row['image']; ?>"

                                 width="80">

                        </td>



                        <td>

                            <?php echo $row['name']; ?>

                        </td>



                        <td>

                            ₹<?php echo $row['price']; ?>

                        </td>



                        <td>



                            <a href="manage_products.php?delete=<?php echo $row['id']; ?>"

                               class="btn btn-danger btn-sm"

                               onclick="return confirm('Delete this product?')">

                                Delete

                            </a>



                        </td>

                    </tr>



                    <?php } ?>



                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

</body>
</html>