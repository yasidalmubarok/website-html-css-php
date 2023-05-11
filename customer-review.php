<div class="container-fluid">
    <div class="container">
        <div class="header-menu">
            <h1 class="header-h1">Customer Reviews</h1>
        </div>

        <div class="main-menu">

            <?php
            $initial_key = 0;
            $key = [0, 1, 2];
            $reviewer_names = [0 => "Nama Customer 1", 1 => "Nama Customer 2", 2 => "Nama Customer 3", 3 => "Nama Customer 4"];
            $reviews = [0 => "Ini adalah review saya tentang restoran yang bagus ini", 1 => "Ini adalah review saya tentang restoran yang bagus ini", 2 => "Ini adalah review saya tentang restoran yang bagus ini", 3 => "Ini adalah review saya tentang restoran yang bagus ini"];
            ?>
            <div class="row">
                <?php foreach ($key as $k) { ?>
                    <div class="col-4 gambar">
                        <div class="card" style="width: 18rem;">
                            <img class="img-fluid garit" src="img/garit.jpg" alt="proven">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?= $reviewer_names[$k] ?>
                                </h5>
                                <p>
                                    <?= $reviews[$k] ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <?php
                    $i++;
                }
                ;
                ?>
            </div>
        </div>
    </div>
</div>