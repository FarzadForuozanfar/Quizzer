<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Phone Book">
    <meta name="keywords" content="html, css, bootstrap5, js, php, sql, database, quizzer, online test">
    <meta name="author" content="farzad foroozanfar">
    <title>Quizzer</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_final.css">
</head>
<body>
    
            <div class="container">
                <div style="display: none ;" class="box">
                    <span></span>
                    <div class="content">
                    <h2>Card one</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#">Read More</a>
                    </div>
                </div>
                <div class="box" style="text-align: center;">
                    <span></span>
                    <div class="content">
                    <h2>Congratulations</h2>
                    <p>With effort and perseverance, you were able to answer <?php echo  $_SESSION["scores"] ?> question correctly from <?php echo  $_SESSION["total"] ?> question and finally get a score of <?php echo  $_SESSION["scores"] * 2 ?></p>
                    <a href="index.php">Test Again</a>
                    </div>
                </div>
                
            </div>          
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>