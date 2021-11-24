<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background-color: gray;
        }

        i {
            font-size: 100px;
            color: burlywood;
        }

        .text-center {
            margin-top: 30px;
        }

        nav {
            display: flex;
            justify-content: space-around;
        }

        p {
            background-color: gray;
            border: 3px solid burlywood;
            width: 800px;
            height: 100px;
            font-family: 'Microsoft JhengHei;';
            font-weight: auto;
            font-size: 20px;
            color: burlywood;
        }

        img {
            border: 3px solid burlywood;
        }
        i:hover {
            color: darkgoldenrod;
        }
    </style>
</head>

<body>


    <div class=text-center>
        <img src="https://picsum.photos/800/600" class="round" alt="as">
    </div>
    <br>
    <br>
    <br>
    <nav>
        <a href="a"><i class="fas fa-caret-left"></i></a>
        <div class="box">
            <p>
                一開始學習 SQL 的時候完全不知道有 Window Function 可以使用，
                因此只要遇到需要連續計算的資料，通常都會以很多個 Subquery 來執行；
                但缺點就是不僅 Code
                很長很難看懂，自己也很容易寫到糊塗。
            </p>
        </div>
        <a href="b"><i class="fas fa-caret-right"></i></a>
    </nav>







    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>
</body>

</html>