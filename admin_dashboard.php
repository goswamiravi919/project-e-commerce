<?php

session_start();

if(!isset($_SESSION['user_name'])){

    header("Location: login.php");

}



if($_SESSION['user_role'] != 'admin'){

    header("Location: index.php");

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard</title>

    <link rel="stylesheet"
          href="css/bootstrap.min.css">

    <link rel="stylesheet"
          href="css/style.css">

</head>

<body>



<div class="container mt-5">

    <div class="row">



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
                           class="text-white text-decoration-none">

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



        <div class="col-md-9">

            <div class="bg-white p-5 rounded shadow-sm">



                <h2>

                    Welcome Admin

                </h2>



                <p class="mt-3">

                    Manage your products and store here.

                </p>

            </div>

        </div>

    </div>

</div>

</body>
</html>