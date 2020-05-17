<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
<div>
    <form action="php_forms_one.php" method="GET">
        <input type="text" placeholder="Enter Name" name="x"> <br>
        <input type="number" placeholder="Enter Age" name="y"> <br>
        <input type="submit" value="Check in" name="z"> <br>
    </form>
    <?php
    // to receive data from the form , start by checking if button with name z has been clicked.
    if (isset($_GET ['z']) ){
        //start receiving data
        $jina = $_GET['x'];
        $umri = $_GET['y'];

        echo "Hello $jina, you are $umri years old";

    }





    ?>
</div>
</body>
</html>
