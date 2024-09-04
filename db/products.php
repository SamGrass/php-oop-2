<?php

$animal = [
    new Animal('dog', 'Labrador', 5, 'large'),
    new Animal('cat', 'Siamese', 3, 'medium'),
];

$Food = [
    new Food('Premium Dog Food', 29.99, 'dog_food.jpg', 'Pet Food', 'BestBrand', $animal[0], '2025-12-31', ['chicken', 'rice', 'vegetables']),
    new Food('Gourmet Cat Food', 15.99, 'cat_food.jpg', 'Pet Food', 'TopBrand', $animal[1], '2025-06-30', ['fish', 'liver', 'carrots'])
];
