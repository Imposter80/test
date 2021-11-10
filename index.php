

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Tasks</title>
</head>
<body>
<div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Task 1
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body" style="margin: auto; width: 70%;">

                <div class="alert alert-primary" >
                    В массиве, содержащем 3 или более чисел, определить подходит ли
                    каждая группа из трех чисел условию a > b < c или a < b > c. Оформить
                    решение в виде функции которая принимает исходный массив и возвращает
                    массив с результатом проверки каждой группы, где 1 удовлетворяет
                    условию и 0 - нет.
                </div>
                <form method="post" action="pages/task1.php" >
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <div class="form-check">
                            <input class="check_task1" type="radio" name="check_task1" id="check_task1"  value="1" checked >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Использовать массив по умолчанию - [1, 3, 5, 4, 5, 7]
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="check_task1" type="radio" name="check_task1" id="check_task1"  value="2" >
                            <label class="form-check-label" for="flexRadioDefault2">
                                Использовать рандомный массив
                            </label>
                        </div>
                    </div>

                    <div style="text-align:center; margin: 20px">
                        <button type="submit" class="btn btn-primary" >Попробовать</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Task 2
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body" style="margin: auto; width: 70%;">

                <div class="alert alert-primary" >
                    Дана матрица из целых чисел от 1 до 9, размером 3 * N, где N может быть
                    больше либо равна 3. Необходимо определить содержит ли каждый участок
                    матрицы 3 * 3 все числа от 1 до 9.
                </div>

                <form method="post" action="pages/task2.php" >
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <div class="form-check">
                            <input class="check_task1" type="radio" name="check_task2" id="check_task2"  value="1" checked >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Использовать массив по умолчанию 
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="check_task1" type="radio" name="check_task2" id="check_task2" value="2" >
                            <label class="form-check-label" for="flexRadioDefault2">
                                Использовать рандомный массив
                            </label>
                        </div>
                    </div>

                    <div style="text-align:center; margin: 20px">
                        <button type="submit" class="btn btn-primary"   >Попробовать</button>
                    </div>

                </form>


            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Task 3
            </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body" style="margin: auto; width: 70%;">

                <div class="alert alert-primary" >
                    Есть набор строк (строка это массив из слов), условия форматирования
                    каждой этой строки и лимит символов в строке. Необходимо подготовить
                    текст к публикации, так чтобы он удовлетворял условиям форматирования и
                    не превышал количество символов в строке. Текст должен быть заключен
                    символ * со всех сторон.
                </div>

                <div style="text-align:center; margin: 20px">
                    <a  href="pages/task3.php"  class="btn btn-primary"   >Попробовать</a>
                </div>

            </div>

        </div>
    </div>
</div>

</body>
</html>
