
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        About us
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            
                            <li><a class="dropdown-item" href="mailto:foruozanfar2000f@gmail.com">Contactus</a></li>
                            
                        </ul>
                        </li>
                        <li class="nav-item">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Add Question
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">New Question</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        
                                        <div class="modal-body">
                                            <form  action="add_question.php" method="post">
                                                
                                                    <div class="form-floating mb-3 ">
                                                        <input type="text" class="form-control" name="question-text" id="floatingInput" placeholder="Question Text">
                                                        <label for="floatingInput">Question Text</label>
                                                    </div>
                                                
                                                <div id="form-main">
                                                    
                                                </div>
                                                <div class="d-flex flex-row-reverse">
                                                    <button type="button" id="add-answer" class="btn btn-success mt-5 mb-1 rounded-circle" onclick="Add_answer()">
                                                        <i class="bi bi-plus"></i>
                                                    </button>
                                                    <button type="button" id="remove-answer" class="btn btn-danger mt-5 mb-1 mx-1 rounded-circle" onclick="Remove_answer()">
                                                        <i class="bi bi-dash"></i>
                                                    </button>
                                                </div>
                                                
                                                <div class="">
                                                    <button style="width: 100% !important;" type="submit" class="btn btn-primary mt-2 rounded-pill">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </li>
                        
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-dark" type="submit">Search</button>
                    </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <script>

        let form_main = document.getElementById('form-main');
        let answer_cnt = 0;
        function Add_answer()
        {
            let input_group = `<div class="input-group my-2" id="input_group${answer_cnt}">
                                <div class="input-group-text">
                                    <input class="form-check-input mt-0"  name="correct" type="radio" value="${answer_cnt}" aria-label="Radio button for following text input">
                                </div>
                                <input type="text"placeholder="answer ${answer_cnt+1}"  name="answers[]" class="form-control" aria-label="Text input with radio button">
                            </div>`;
            
            form_main.innerHTML += input_group;
            
            answer_cnt++;
        }
        function Remove_answer()
        {
            if(answer_cnt > 0)
            {
                answer_cnt--;
            }
            
            var form_main = document.getElementById("form-main");
            if(form_main.childNodes[0])
                form_main.removeChild(form_main.lastChild);
        }
    </script>
</body>
</html>