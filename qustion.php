<?php
    include "database.php";
    $number = $_GET["page"];
    $question_tabel = $db->query("SELECT * FROM questions WHERE ID = $number");
    $question = $question_tabel->fetch_assoc();
    
    $answers = $db->query("SELECT * FROM answers WHERE q_id = $number");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Phone Book">
    <meta name="keywords" content="html, css, bootstrap5, js, php, sql, database,quizzer, online test">
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
                        <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
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
                            <h5>Questions <?php echo $question["ID"]; ?></h5>
                        </div>
                        <div class="card-body">
                        <h4><?php echo $question["text"]; ?></h4>
                        </div>
                        <form method="post" action="procces.php">
                            <input type="hidden" value="<?php echo $question["ID"]; ?>" name="question_id">
                            <div>
                                <?php foreach($answers as $answer): ?>
                                <label class="rad-label">
                                    <input type="radio" value="<?php echo $answer["ID"];?>" class="rad-input" name="answer">
                                    <div class="rad-design"></div>
                                    <div class="rad-text"><?php echo $answer["text"] ?></div>
                                </label>

                                
                                <?php endforeach; ?>
                            </div>
                            <div style="margin-left: 15px; margin-bottom: 15px;">
                                <button type="submit" class="button-28">Next</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>