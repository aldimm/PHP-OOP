<?php
    require_once "Product.php";
    require_once "CDMusic.php";
    require_once "CDRack.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCT</title>
    <link href="MODEL.css" rel="stylesheet">
</head>
<body>

    <h1 class=border>INPUT PRODUCT</h1>
<table>
    
    <form method="POST" action="">
    
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" placeholder="Product Name" size="30"></td>
        </tr>

        <tr>
            <td>Price</td>
            <td><input type="text" name="price" placeholder="Product Price" size="30"></td>
        </tr>

        <tr>
            <td>Discount</td>
            <td><input type="text" name="discount" placeholder="Product Discount" size="30"></td>
        </tr>

        <tr>
            <td>Artist</td>
            <td><input type="text" name="artist" placeholder="Artist Name" size="30"></td>
        </tr>

        <tr>
            <td>Genre</td>
            <td><input type="text" name="genre" placeholder="Product Genre" size="30"></td>
        </tr>

        <tr>
            <td>Rack Name</td>
            <td><input type="text" name="rackname" placeholder="Name" size="30"></td>
        </tr>

        <tr>
            <td>Capacity</td>
            <td><input type="text" name="capacity" placeholder="Capacity" size="30"></td>
        </tr>

        <tr>
            <td>Model</td>
            <td><input type="text" name="model" placeholder="Model" size="30"></td>
        </tr>
    
            <td><input class="AB" type="submit" name="submit" value="SUBMIT"></td>
    </table>
    </form>

    <?php
         if (isset($_POST['submit'])) 
         {
            $product = new PRODUCT();
            $product->setName($name = $_POST['name']);
            $product->setPrice($price = $_POST['price']);
            $product->setDiscount($discount = $_POST['discount']);
            echo "PRODUCT"."<br>";
            echo "<pre>";
            echo "Name      : " . $product->getName() . "<br>";
            echo "Price     : Rp" . $product->getPrice() . "<br>";
            echo "Discount  : " . $product->getDiscount() . "<br><br>";
            echo "</pre>";

            //CDMUSIC
            $cd_music = new CDMusic();
            $cd_music->setArtist($artist = $_POST['artist']);
            $cd_music->setGenre($genre = $_POST['genre']);
            echo"CD ARTIST"."<br>";
            echo "<pre>";
            echo "Name           : " . $cd_music->artist . "<br>";
            echo "Music Price    : Rp" . $cd_music->getPriceWithTaxM() . "<br>";
            echo "Music Discount : " . $cd_music->getDiscountTaxM() . "<br>";
            echo "Music Genre    : " . $cd_music->genre . "<br><br>";
            echo "</pre>";

            //CDRack
            $cd_rack = new CDRack();
            $cd_rack->setRackName($rackname = $_POST['rackname']);
            $cd_rack->setCapacity($capacity = $_POST['capacity']);
            $cd_rack->setModel($model = $_POST['model']);
            echo"CD RACK"."<br>";
            echo "<pre>";
            echo "Name      : " . $cd_rack->rackname . "<br>";
            echo "Price     : Rp" . $cd_rack->getPriceWithTaxR() . "<br>";
            echo "Discount  : " . $cd_rack->getDiscountTaxR() . "<br>";
            echo "Capacity  : " . $cd_rack->capacity . "<br>";
            echo "Model     : " . $cd_rack->model . "<br>";
            echo "</pre>";
            }

    ?>
</body>
</html>