<!-- NAVBAR START -->

<nav class="navbar navbar-expand-lg amazon-navbar px-3">

    <!-- LOGO -->

    <a class="navbar-brand text-white fw-bold"
       href="index.php">

        amazon

    </a>



    <!-- MOBILE MENU BUTTON -->

    <button class="navbar-toggler bg-white"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarContent">

        <span class="navbar-toggler-icon"></span>

    </button>



    <!-- NAVBAR CONTENT -->

    <div class="collapse navbar-collapse"
         id="navbarContent">



        <!-- SEARCH BAR -->

        <form class="d-flex mx-auto w-50 search-box"
      method="GET"
      action="index.php">

            <input class="form-control"
                   type="search"
                   name="search"
                   placeholder="Search Amazon">

            <button class="btn search-btn ms-2"
                    type="submit">

                Search

            </button>

        </form>



        <!-- MENU -->

        <ul class="navbar-nav ms-auto">



            <li class="nav-item">

                <a class="nav-link text-white"
                   href="login.php">

                    Login

                </a>

            </li>



            <li class="nav-item">

                <a class="nav-link text-white"
                   href="#">

                    Orders

                </a>

            </li>



            <li class="nav-item">

                <a class="nav-link text-white"
                   href="#">

                    Cart

                </a>

            </li>

        </ul>

    </div>

</nav>

<!-- NAVBAR END -->