<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewsport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="inputIndex">Masukan Index</label>
        <input type="text" name="inputIndex" id="inputIndex">
        <button type="submit" name="proses" id="proses">Proses</button>
    </form>
    <?php
    if(isset($_POST['proses'])){
        $array = ['S','U','C','I'];
        $inputIndex =$_POST['inputIndex'];

        if(array_key_exists($inputIndex,$array)){
            echo $array[$inputIndex];
        } else{
            echo "index tidak tersedia";
        }
    }
    ?>
</body>
</html>