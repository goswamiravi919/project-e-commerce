<?php

include 'db.php';

if(isset($_POST['register'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users(name,email,password)
              VALUES('$name','$email','$password')";

    mysqli_query($conn,$query);

    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Register</title>

    <link rel="stylesheet"
          href="css/bootstrap.min.css">

    <link rel="stylesheet"
          href="css/style.css">

</head>

<body class="auth-body">

<div class="container">

    <div class="row justify-content-center align-items-center vh-100">

        <div class="col-md-5">

            <div class="auth-card">

                <h2 class="text-center mb-4">
                    Create Account
                </h2>

                <form method="POST">

                    <div class="mb-3">

                        <label class="form-label">
                            Full Name
                        </label>

                        <input type="text"
                               name="name"
                               class="form-control"
                               required>

                    </div>



                    <div class="mb-3">

                        <label class="form-label">
                            Email Address
                        </label>

                        <input type="email"
                               name="email"
                               class="form-control"
                               required>

                    </div>



                    <div class="mb-3">

                        <label class="form-label">
                            Password
                        </label>

                        <input type="password"
                               name="password"
                               class="form-control"
                               required>

                    </div>



                    <button type="submit"
                            name="register"
                            class="btn btn-warning w-100">

                        Register

                    </button>

                </form>



                <p class="text-center mt-4">

                    Already have account?

                    <a href="login.php">
                        Login
                    </a>

                </p>

            </div>

        </div>

    </div>

</div>

<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>