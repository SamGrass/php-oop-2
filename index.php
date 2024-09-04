<?php
require_once __DIR__ . '/Model/Product.php';
require_once __DIR__ . '/Model/Animal.php';
require_once __DIR__ . '/Model/ProductsCategories/Bed.php';
require_once __DIR__ . '/Model/ProductsCategories/Bowl.php';
require_once __DIR__ . '/Model/ProductsCategories/Food.php';
require_once __DIR__ . '/Model/ProductsCategories/Game.php';
require_once __DIR__ . '/Model/ProductsCategories/Litter.php';
require_once __DIR__ . '/db/products.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center my-5">Prodotti Per Animali</h1>
        <div class="d-flex justify-content-between">
            <?php foreach ($products as $product) : ?>
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product->name ?></h5>
                        <h6><?php echo $product->printPrice() ?> €</h6>
                        <?php if ($product->category === 'Pet Food') :  ?>
                            <p class="card-text">Ingredienti:</p>
                            <ul>
                                <?php echo $product->printFoodList() ?>
                            </ul>
                        <?php elseif ($product->category === 'Toys'): ?>
                            <p><?php echo $product->getGameInfo() ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>