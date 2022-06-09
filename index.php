<?php
    include "database.php";
    session_start();
    $questions = $db->query("SELECT * FROM questions");
    $_SESSION["total"] = $questions->num_rows;
    $_SESSION["scores"] = 0;
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
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-light navbar-light   rounded-3">

                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="img/quiz-logo-icon-vector-40094461-removebg-preview.png" width="80px"> </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost/quizzer/index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link" href="admin.php">Login admin panel</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About us
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="mailto:foruozanfar2000f@gmail.com">contact us</a></li>
                            
                        </ul>
                        </li>
                        
                    </ul>
                    <!-- Button trigger modal -->
                    
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-dark" type="submit">Search</button>
                    </form>
                    </div>
                </div>
            </nav>
            <div class="row mt-5">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                        <h3>Welcome To Quizzer</h3> 
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">This Quiz has <?php echo $_SESSION["total"]; ?> questions</h5>
                            <p class="card-text">The test time is <?php echo $_SESSION["total"]/2; ?> minutes</p>
                            <a href="qustion.php?page=1"><button class="button-28" role="button">Lets Go</button></a>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>