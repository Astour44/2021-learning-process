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
<form action="./getapi.php" id="myForm">

</form>


<div class="container">
    <div class="row">
        <div class="col-12">
            <h3 class="text-center">cors get data</h3>
        </div>
        <div class="col-12 mt-3">
            <button id="myBtn" type="button" class="btn btn-success btn-sm btn-block">Get Data</button>
        </div>
    </div>
</div>






    <!-- 先載入 -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- 先載入 END-->
    <script>
        $(document).ready(function() {


            $('#myBtn').click(function(e) {
                // var form=$('#myForm');
                // var formAction =form.attr('action');
                // console.log('formAction',formAction);
                // console.log('myForm');


                //var url = "https://data.ntpc.gov.tw/api/datasets/7A2ED29B-E45D-4707-8A7C-EF9628C0ED94/json/preview";
                //這裡若是網址就變回早上那個需要header的狀況
                var url = "./getapi.php";


                $.ajax({
                    type: 'post',
                    url: url,
                    dataType: 'json',
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