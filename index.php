<?php
session_start();

if (!empty($_POST)) {

    $_SESSION['number'][] = $_POST['number'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="container text-center">
        <h1>
            <?php if (isset($_SESSION['number'])) {
                echo array_sum($_SESSION['number']);
            } else {
                echo 0;
            } ?>
        </h1>

        <form action="" method="POST">
            <input type="number" name="number" id="number" required><br><br>
            <button type="submit">submit</button>
        </form>
        <br>
        <a href="./logout.php">Logout</a><br><br>

        <?php
        if (isset($_SESSION['number'])) {
            foreach ($_SESSION['number'] as $number) {
                echo $number . "<br>";
            }
        }

        ?>
    </div>

</body>

</html>