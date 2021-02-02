<?php
include __DIR__ . './db.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./dist/css/style.css">
</head>
<body>
    <header>
        <nav class="container">
            <div class="icon">
                <img src="./dist/img/logo.png" alt="">
            </div>
        </nav>
    </header>
    <main>
        <div class="container d-flex d-wrap just_cont_sp_bt">
            <?php foreach ($db as $value) { ;?> 
                <div class="card d-flex fl_dir_col align_c">
                    <div class="img_card ">
                        <img src="<?php echo $value['poster']?>" alt="">
                    </div>
                    <div class="description_card">
                        <h4><?php echo $value['title']?></h4>
                        <h5><?php echo $value['author']?></h5>
                        <h6><?php echo $value['year']?></h6>
                    </div>
                </div>
            <?php }?>
        </div>
    </main>
    <script src="./dist/js/main.js"></script>
</body>
</html>