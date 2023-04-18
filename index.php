<?php
require_once __DIR__.'/models/Category.php';
require_once __DIR__.'/models/Product.php';
require_once __DIR__.'/models/Food.php';

$category_dog = new Category('dog', '<i class="fa-solid fa-dog"></i>');
$category_cat = new Category('dog', '<i class="fa-solid fa-cat"></i>');
$category_bird = new Category('dog', '<i class="fa-solid fa-cove"></i>');
$category_fish = new Category('dog', '<i class="fa-solid fa-fish"></i>');

//var_dump($category_bird,$category_cat,$category_dog,$category_fish);
$product1 = new Product(10, 'Prodotto uno', 'descrizione lunga',$category_cat,5.99,'img');
$product2 = new Product(11, 'Prodotto due', 'descrizione lunga',$category_dog,8.99,'img');
$product3 = new Food(12, 'Prodotto 3', 'descrizione lunga',$category_fish,4.99,'img');
$product3->set_ingridients('Pollo, Carne, Verdure');

$product = [
    $product1,
    $product2,
    $product3,
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Boolshop</title>

</head>
<body>
    <div class="container">
        <h1>Boolshop</h1>
        <div class="row">
            <?php foreach ($product as $product):?> 
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product->get_name();?></h5>
                    <!-- echo $product->get_category()->get_category_info();?>-->
                    <p class="card-text"><?php echo $product->get_description();?></p>
                    <?php if (method_exists($product, 'get_ingridients')) : ?>
                            <p>Ingrideints: <?php 
                                /** @var Food $product */
                                echo $product->get_ingridients(); ?></p>
                    <?php endif; ?>
                    <div><?php echo $product->get_price_formatted();?></div>
                    <a href="#" class="btn btn-primary">Buy</a>
                </div>
            </div>
            <?php endforeach; ?> 
        </div>
    </div>
    
    
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>