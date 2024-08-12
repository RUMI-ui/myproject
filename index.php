<?php 
include 'product.php';
$products = Product::getAllProducts();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>main site</title>
        <link rel="stylesheet" href="./style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
    </head>
    <body>
        <header></header>
        <main class="main">
            <section class="motto"> 
                <img src="img/logo.jpeg" alt="Логотип" >
                <H1><u>Доставка игр</u></H1>
                <p>Оперотивно, но немного дорого</p>
            </section>
            <section class="products">
                <h2>Товары</h2>
                <?php foreach ($products as $product): ?>
                    <div class="card" data-id="<?= $product->id ?>">
                        <img src="<?= $product->images[0] ?>" alt="<?= $product->name ?>" width="200" height="200">
                    <a href="./katalog/product_template.php?id=<?= $product->id ?>"><h3 class="product-name"><?= $product->name ?></h3></a>
                        <p><?= $product->amount ?> шт.</p>
                        <span class="price"><?= $product->price ?> ₸</span>
                
                <?php if ($product->amount > 0): ?>         
                        <div class="buttons">
                            <button>-</button>
                            <span>1</span>
                            <button>+</button>
                        </div>
                    <button class="buttonon">добавить в корзину</button>
                <?php else: ?>
                        <div class="buttons">
                            <button style="background-color: gray">-</button>
                            <span style="color: gray">1</span>
                            <button style="background-color: gray">+</button>
                        </div>
                    <button style="background-color: gray" class="buttonon">Нет в наличии</button>
                <?php endif ?>
                    </div>
                <?php endforeach; ?>
            </section>
            <div class="basket-block">
                <p class="offer">ваш заказ </p>
                <div class="cart-items"></div>
                <p class="delevery">Доставка:800 тыс тенге</p>
                <p class="total">Итого: <span>800 тыс тенге</span></p>
                <form action="order.php" method="POST">
                    <legend class="get-order">оформить заказ</legend>
                    <input type="Hidden" name="cart" class="cart-input">
                    <input type="Phone" name="phone" placeholder="Ваш номер телефона"
                    class="phone-number" required>
                    <button type="sumbit" class="get" id="order">Заказать</button>
                </form>
            </div>
        </main>
    </body>
</html>