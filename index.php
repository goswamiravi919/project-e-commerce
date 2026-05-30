<?php include 'header.php'; ?>

<?php include 'navbar.php'; ?>

    <!-- BANNER START -->

    <div class="banner">

    </div>

    <!-- BANNER END -->



    <!-- PRODUCTS SECTION -->

    <div class="container mt-5 main-content">

       <div class="row">

<?php

if(isset($_GET['search'])){

    $search = $_GET['search'];

    $query = "SELECT * FROM products
              WHERE name LIKE '%$search%'";

}else{

    $query = "SELECT * FROM products";

}

$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)){

?>



<div class="col-md-3 mb-4">

    <div class="product-card text-center">

        <img src="images/<?php echo $row['image']; ?>"
             class="img-fluid">



        <h5 class="mt-3">

            <?php echo $row['name']; ?>

        </h5>



        <h4>

            ₹<?php echo $row['price']; ?>

        </h4>



        <a href="product.php?id=<?php echo $row['id']; ?>"

   class="btn btn-warning w-100">

    View Product

</a>

    </div>

</div>



<?php } ?>

</div>

    </div>



  <?php include 'footer.php'; ?>