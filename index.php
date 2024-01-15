<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
    <title>E-commerce</title>
</head>

<body>

    <?php

    require __DIR__ . "/data.php";


    ?>

    <div class="container">
        <div class="row mt-4">
            <?php foreach ($Products as $product) : ?>
                <div class="col-4 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <h3><?= $product->category->description ?></h3>
                            <img class="img-fluid" src= <?= "img/" . $product->category->photo?> alt="">
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3><?= $product->name ?></h3>
                            </div>
                            <div class="card-text">
                                <h5>Tipo prodotto: <?= $product->getProductType()?></h5>
                                <h5>Prezzo: <?= $product->price ?></h5>
                                <?= isset($product->weight) ? "<h5>Peso: $product->weight </h5>" : null ?>
                                <?= isset($product->ingredients) ? "<h5>Ingredienti: $product->ingredients </h5>" : null ?>
                                <?= isset($product->type) ? "<h5>Materiale:$product->type </h5>" : null ?>
                                <?= isset($product->width) ?  "<h5>Dimensioni:$product->width </h5>" : null ?>
                            </div>

                        </div>
                    </div>

                </div>
            <?php endforeach ?>
        </div>

    </div>



</body>

</html>