<header>
    <!-- START NAVBAR -->
    <nav class="navbar fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" alt="Logo" width="30" class="d-inline-block align-text-top">
                FOODLY
            </a>

            <div class="navbar-links">
                <a class="navbar-link active" href="main-header.php">Home</a>
                <a class="navbar-link" href="#">About</a>
                <a class="navbar-link" href="menu.php">Menu</a>
                <a class="navbar-link" href="main-header.php">Reservation</a>
                <a class="navbar-link" href="#">Gallery</a>
                <a class="navbar-link" href="#">FAQs</a>
                <a class="navbar-link" href="#">Contact</a>
                <button class="btn btn-dark contact">Contact Now</button>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <div class="header img-fluid" style="background-color: #537188">
        <h1 class="h1-header text-center">Organic Foods Made Easy & Healthy</h1>
        <div class="input-group search mb-3">
            <input type="text" class="form-control" placeholder="cari makananmu!" aria-label="Recipient's username"
                aria-describedby="basic-addon2">
            <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2"> <img class="mb-1" src="img/search.png" width="20"
                        alt=""></span>
            </div>

            <div class="container services">
                <div class="row mt-4">
                    <?php
                    $menu = ["24/7<br> Fresh Food", "Nature First", "Home Service", "Free Delivery"];
                    $image = ["clock.png", "plant.png", "home.png", "cargo-truck.png"];
                    $i = 0;
                    foreach ($menu as $m) {

                        ?>

                        <div class="col centered">
                            <img src="img/<?= $image[$i] ?>" alt="proven">
                            <p>
                                <?= $m ?>
                            </p>
                        </div>

                        <?php
                        $i++;
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container">
            <div class="row mt-5">
                <div class="col centered">
                    <h3>Book a table:</h3>
                </div>

                <div class="col centered">
                    <div class="input-group datepick mb-3">
                        <input type="text" class="form-control" placeholder="Pick your date"
                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <span class="input-group-text material-symbols-outlined"
                                id="basic-addon2">calendar_month</span>
                        </div>
                    </div>
                </div>


                <div class="col centered">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Select Time</option>
                        <option value="1">13:00</option>
                        <option value="2">14:00</option>
                        <option value="3">15:00</option>
                    </select>
                </div>

                <div class="col centered">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Select Peoples</option>
                        <option value="1">1-2</option>
                        <option value="2">3-4</option>
                        <option value="3">5-10</option>
                    </select>
                </div>

                <div class="col centered">
                    <button class="btn btn-dark">Book Now</button>
                </div>
            </div>

        </div>
    </div>


</header>