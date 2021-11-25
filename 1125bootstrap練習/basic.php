<?php
include "./common.php";

$errArr = [5 => "id 3 del", "id 5 del", "id 8 del",];


// $cars = array(
//     array("Volvo", 22, 18),
//     array("BMW", 15, 13),
//     array("Saab", 5, 2),
//     array("Land Rover", 17, 15),
// );

// $age = [
//     "peter" => "38",
//     "ban" => "42",
//     "hello" => "16"
// ];

// dd($cars);
// $cars2 = [
//     ["Volvo", 22, 18],
//     ["BMW", 15, 13],
//     ["Saab", 5, 2],
//     ["Land Rover", 17, 15]
// ];

// dd($cars2);

$errArr = [
    ['id' => 's1', 'message' => 'del id s1', 'type' => "danger"],
    ['id' => 's2', 'message' => 'del id s2', 'type' => "danger"],
    ['id' => 's3', 'message' => 'del id s3', 'type' => "danger"],
];
dd($errArr);
echo"<hr>";
// dd([0]['message']);
echo"<hr>";
foreach ($errArr as $key => $value) {
    dd ($value);
}
echo "<hr>";
foreach ($errArr as $key => $value) {
      echo($value['message']."<br>");
};



?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <hr>
    <div class="container-fluid">
        <?php print_r($errArr); ?>
        <?php foreach ($errArr as $key => $value) : ?>
            <div c;ass="alert alert-primary" role="alert">
                <button type="button" class="close" aria-label="Close" data-dismiss="alert"></button>
                <span aria-hidden="true">&times;</span>
                </button>
                <h3><?= $value; ?></h3>
            </div>
        <?php endforeach; ?>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>

</html> -->