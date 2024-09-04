<?php

require_once __DIR__ . '/../Model/Product.php';
require_once __DIR__ . '/../Model/Animal.php';
require_once __DIR__ . '/../Model/ProductsCategories/Bed.php';
require_once __DIR__ . '/../Model/ProductsCategories/Bowl.php';
require_once __DIR__ . '/../Model/ProductsCategories/Food.php';
require_once __DIR__ . '/../Model/ProductsCategories/Game.php';
require_once __DIR__ . '/../Model/ProductsCategories/Litter.php';

$animals = [
    new Animal('dog', 5, 'large'),
    new Animal('cat', 3, 'medium'),
    new Animal('dog', 4, 'medium'),
    new Animal('cat', 2, 'large')
];


$products = [
    new Food('Premium Dog Food', 29.99, 'dog_food.jpg', 'Pet Food', 'BestBrand', $animals[0], '2025-12-31', ['chicken', 'rice', 'vegetables']),
    new Food('Gourmet Cat Food', 15.99, 'cat_food.jpg', 'Pet Food', 'TopBrand', $animals[1], '2025-06-30', ['fish', 'liver', 'carrots']),
    new Game('Fetch Ball', 9.99, 'fetch_ball.jpg', 'Toys', 'PlayWell', $animals[2], 'fetch', 'rubber'),
    new Game('Feather Wand', 12.49, 'feather_wand.jpg', 'Toys', 'FunCat', $animals[3], 'interactive', 'feather'),
];
