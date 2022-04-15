<!DOCTYPE html>
<html lang="en">
<head>
    <?php
     require_once('./connect.php');
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <title>Document</title>
    <style>
        img{
            max-width: 100%;
        }
        .card-body{
            text-align: center;
        }
        button{
            display: inline;
        }
    </style>
</head>
<body>
<div id="wrapper">
        <div id="header">
            <div id="toggle">
                <i class="fas fa-bars"></i>
            </div>
            <nav>
                <ul id="main-menu">
                    <li>
                        <a href="">Trang chủ</a>
                    </li>
                    <li>
                        <a href="">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="">Sản phẩm</a>
                    </li>
                    <li>
                        <a href="">Dịch Vụ</a>
                    </li>
                    <li>
                        <a href="">Blog</a>
                    </li>
                    <li>
                        <a href="">Liên hệ</a>
                    </li>   
                </ul>
            </nav>
        </div>
</div>
<div id="bg">
    <?php
        $sql = "SELECT * From sildes Where id = 1";
        $result = mysqli_query($conn,$sql);
            if($result){
                while ($row = mysqli_fetch_assoc($result)){
                    ?>
                    <img width="100%" height="500px" src="<?php echo $row['img'] ?>" alt="">
                    <?php
                }
            }
    ?>
</div>
<div class="container">
        <section class="new-products ">
            <h1 class="text-center">New Products</h1>
            <div class="row">
                <?php
                $sql = "select * from products where type_product = 3;";
                $results = $conn->query($sql);
                while ($row = $results->fetch_assoc()) { ?>
                 <?php $img = "./img/".$row['image_product']; ?>
                <div class="col-lg-4 col-md-4  card ">
                    <img src="<?php echo $img ?>" class="card-img-top"
                        style="width: 100%;height: 400px;object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row["name_product"] ?></h5>
                        <p class="card-text text-danger"><?php echo $row["price_product"] ?> VND</p>
                        <span>
                        <form method="GET" action="cart.php">
                            <input type = "hidden" name ="action" value="addto">
                            <input type="hidden" value="1" name = "quanlity">
                            <input type="hidden" name = "id" value="<?php echo $row['id']?>">
                            <button type="submit" class="btn btn-success">Mua hàng</button>
                        </form>
                        </span>
                        <br>
                        <a href="./detail.php?id=<?php echo $row['id']?>" class="btn btn-success">Chi tiet</a>
                    </div>
                </div>


                <?php }
                ?>
            </div>
        </section>  
        <section class="men-products mt-5">
            <h1 class="text-center">Men Products</h1>
            <div class="row">
                <?php
                $sql = "select * from products where type_product = 1 ;";
                $results = $conn->query($sql);
                while ($row = $results->fetch_assoc()) { ?>
                 <?php $img = "./img/".$row['image_product']; ?>
                <div class="col-md-4 col-lg-4 card">
                    <img src="<?php echo $img ?>" class="card-img-top"
                        style="width: 100%;height: 400px;object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row["name_product"] ?></h5>
                        <p class="card-text text-danger"><?php echo $row["price_product"] ?> VND</p>
                        <span>
                        <form method="GET" action="cart.php">
                            <input type = "hidden" name ="action" value="addto">
                            <input type="hidden" value="1" name = "quanlity">
                            <input type="hidden" name = "id" value="<?php echo $row['id']?>">
                            <button type="submit" class="btn btn-success">Mua hàng</button>
                        </form>
                        </span>
                        <br>
                        <a href="./detail.php?id=<?php echo $row['id']?>" class="btn btn-success">Chi tiet</a>
                    </div>
                </div>
                <?php }

                ?>
            </div>
        </section>
        <section class="women-products mt-5">
            <h1 class="text-center">Women Products</h1>
            <div class="row">
                <?php
                $sql = "select * from products where type_product = 2;";
                $results = $conn->query($sql);
                while ($row = $results->fetch_assoc()) { ?>
                 <?php $img = "./img/".$row['image_product']; ?>
                <div class="col-md-4 col-lg-4 card">
                    <img src="<?php echo $img ?>" class="card-img-top"
                        style="width: 100%;height: 400px;object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row["name_product"] ?></h5>
                        <p class="card-text text-danger"><?php echo $row["price_product"] ?> VND</p>
                        <span>
                        <form method="GET" action="cart.php">
                            <input type = "hidden" name ="action" value="addto">
                            <input type="hidden" value="1" name = "quanlity">
                            <input type="hidden" name = "id" value="<?php echo $row['id']?>">
                            <button type="submit" class="btn btn-success">Mua hàng</button>
                        </form>
                        </span>
                        <br>
                        <a href="./detail.php?id=<?php echo $row['id']?>" class="btn btn-success">Chi tiet</a>
                    </div>
                </div>
                <?php }

                ?>
            </div>
        </section>
    </div>
</body>
</html>