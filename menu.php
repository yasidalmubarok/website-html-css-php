<div class="container-fluid py-5 mb-3" style="background-color: #537188">
    <div class="container">
        <div class="header-menu pb-3">
            <h1 class="header-h1">Choose and enjoy</h1>
            <p>Inspire by Recipe and creations of worlds bests chefs</p>
        </div>

        <div class="main-menu">

            <?php
            $initial_key = 0;
            $key = [0, 1, 2, 3, 4, 5, 6, 7];
            $menu_name = [0 => "menu-aa", 1 => "menu-lo", 2 => "menu-dW", 3 => "menu-Hp", 4 => "menu-Qx", 5 => "menu-dp", 6 => "menu-qI", 7 => "menu-er"];
            $menu_price = [0 => "100", 1 => "200", 2 => "300", 3 => "100", 4 => "500", 5 => "200", 6 => "300", 7 => "100"];
            $image = ["pizza.jpg", "burger.jpg", "pasta.jpg", "salad.jpg", "kebab.jpg", "nasi-goreng.jpg", "chicken.jpg", "babi.jpg"];
                ?>
            <div class="row mb-5 menugua" style="background-color: #CBB279">
                <?php foreach ($key as $k) { ?>
                    <div class="col">
                        <div class="card mb-5" style="width: 18rem;">
                            <img src="img/<?= $image[$k] ?>" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?= $menu_name[$k] ?>
                                </h5>
                                <p>
                                    <?= $menu_price[$k] ?>
                                </p>
                                <a href="#" class="btn btn-dark">Order Now</a>
                            </div>
                        </div>
                    </div>
                    <?php
                    $i++;
                }
                ?>
            </div>
            <div class="col-md-12 text-center mt-5">
                <button class="btn btn-dark px-4 py-3">View All</button>
            </div>
        </div>
    </div>
</div>