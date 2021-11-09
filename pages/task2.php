<?php

include_once('../function/functions.php');

$result = checkMatrix($secondTask);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css" />


    <title>Tasks2</title>
</head>
<body style="margin-left: 25px;">

<div class="conteiner">
    <div class="row">
        <nav class="col-sm-12 col-md-12 col-lg-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="task1.php">Task 1</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="task3.php">Task 3</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </nav>
    </div>
</div>



<div style="text-align:center; margin: 20px">
    <div class="container">

        <div class="card-body">
            <h3>Task 2</h3>

            <?php
            echo 'Исходный массив:<br>';

            foreach ($secondTask as $value) {
                foreach ($value as $v2) {
                    echo "$v2\n";
                }
                echo '<br>';
            }
            if (!empty($result)){
               echo '<br>Результат:<br>';
               foreach ($result as $value){
                   echo (boolval($value) ? '<a style="color: green">true</a>' : '<a style="color: red">false</a>') . " ";
               }
            }

            ?>


        </div>

        <a type="button" class="btn btn-primary" href="../index.php">Вернуться к заданиям</a>
    </div>

</div>


</body>
</html>
