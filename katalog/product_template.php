<?php

include '../products.php';
$productId = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$products = Product::getAllProducts();
$product = null;

foreach($products as $pro)
  if ($pro->id === $productId) {
    $product = $pro;
    break;
  }

if (!$product) {
    header('location: /index.php');
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title><?= $product->name ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <header>
            <a href="/index.html"></a>
            <span><?= $product->name ?></span>
        </header>
        <main>
            <div>
                <img src="../<?= $product->images[0] ?>" alt="Картинка товара" height="200" width="200">
                <img src="../<?= $product->images[1] ?>" alt="Картинка товара" height="200" width="200">
                <img src="../<?= $product->images[2] ?>" alt="Картинка товара" height="200" width="200">
            </div>
            <div>
                <h1><?= $product->name ?></h1>
                <p><?= $product->description[0] ?></p>
                <p><?= $product->description[1] ?></p>
            </div>
            <div>
                <p>стоимость: <?= $product->price ?> ₸</p>
                 <P>количество на складе: <?= $product->amount ?></P>
                 <div>
                    <button>-</button>
                    <span>1</span>
                    <button>+</button>
                </div>
                <button>добавить в корзину</button>
            </div>
        </main>
    </body>
</html>