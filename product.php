<?php

include 'header.php';

include 'navbar.php';



$id = $_GET['id'];



$query = "SELECT * FROM products WHERE id='$id'";

$result = mysqli_query($conn, $query);

$product = mysqli_fetch_assoc($result);

?>



<div class="container mt-5">

    <div class="row bg-white p-5 rounded shadow-sm">



        <!-- PRODUCT IMAGE -->

        <div class="col-md-5 text-center">

            <img src="images/<?php echo $product['image']; ?>"

                 class="img-fluid product-details-image">

        </div>



        <!-- PRODUCT DETAILS -->

        <div class="col-md-7">



            <h2 class="fw-bold">

                <?php echo $product['name']; ?>

            </h2>



            <h3 class="text-danger mt-3">

                ₹<?php echo $product['price']; ?>

            </h3>



            <hr>



            <p class="mt-4">

                <?php echo $product['description']; ?>

            </p>



            <button class="btn btn-warning btn-lg mt-3">

                Add To Cart

            </button>



            <button class="btn btn-dark btn-lg mt-3 ms-2">

                Buy Now

            </button>



        </div>

    </div>

</div>



<?php include 'footer.php'; ?>