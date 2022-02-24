<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>

    </style>
</head>

<body>
    <form id="myForm" action="./GetForm.php" method="POST">



        <!-- <form id="myForm" action="http://192.168.211.62./GetForm.php" method="POST"> -->
        <!-- 這樣直接連網址可以連到表單，但若是沒有取消CORS機制 送出後會造成CORS -->
        <!-- 要測試造成CORS記得先把GetForm.php的header取消才能測試 -->


        <!-- <form id="myForm" action="http://192.168.211.68/0224/getform.php" method="POST"> -->
        <!-- 像這樣在action後面設定別人的"ip+檔案名稱"並post出去是可以收到對方的檔案設定的 -->


        <!-- <form id="myForm" action="./GetForm.php" method="POST"> -->
        <div class="container">
            <h2 class="text-center">Basic Table</h2>
            <p class="text-center mb-3">The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>
            <table class="table table-bordered text-center ">
                <thead>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" id="name" name="name"></td>
                        <td><input type="text" id="chinese" name="chinese"></td>
                        <td><input type="text" id="english" name="english"></td>
                        <td><input type="text" id="math" name="math"></td>
                    </tr>

                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">
                            <button type="submit" class="btn btn-warning btn-sm btn-block">送出
                            </button>
                        </td>
                    </tr>
                </tfoot>
            </table>
    </form>
    </div>






    <!-- 先載入 -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- 先載入 END-->
    <script>
        $(document).ready(function() {

            $('#myForm').submit(function(e) {
                e.preventDefault(); //讓她忘掉submit的功能

                var form = $(this);
                var url = form.attr('action');
                $.ajax({
                    type: 'post',
                    url: url,
                    data: form.serialize(),
                    dataType: 'json',
                    //沒有dataType會變成字串 有的話會變成物件
                    //這樣出來會是json格式
                    success: function(data) {
                        console.log(typeof(data));
                        console.log(data);
                    }
                })
            })
        })
    </script>








</body>

</html>