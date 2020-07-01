<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <?php
    $day = "";
    $month = "";
    ?> 
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#" method="POST" name="main-form" class="align-center">
                    <h1 class="text-center">Ban thuoc chom sao gi?</h1>
                    <div class="row">
                        <h5>Ngay sinh</h5>
                        <input type="text" name="number1" class="form-control" value= "<?php echo $day ?>">
                    </div>
                    <div class="row">
                        <h5>Thang tinh</h5>
                        <input type="text" name="caculate" class="form-control" value="<?php echo $month ?>">
                    </div>
                    <div class="row ">
                        <input type="submit" value="Ket qua">
                    </div>
                    <h5> <?php 
                        if($flag == true) {
                            echo $n1 . " " . $caculate . " " . $n2 . " = " . $result;
                        } else {
                            echo $result;
                        }
                    ?>    </h5>
                </form>
            </div>
        </div>
    </div>
</body>
</html>