<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../contenu/css/bootstrap.min.css">
    <link rel="stylesheet" href="../contenu/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">
    <title>Home</title>
</head>
<body>
    <?php
        session_start();
        if(!isset($_SESSION['user'])){
            header("Location: ../view/log_in.php");
        }
        if(isset($_POST['legout'])){
            session_unset();
            session_destroy();
            header("Location: ../view/log_in.php");
        }
    ?>
    <div class="content">
        <h1 class="user_name"><?= $_SESSION['user']['username']?></h1><br>
        <form action="" method="post">
            <button type="submit" name="legout" class="btn btn-light legout">Legout</button>    
        </form>
    </div>
</body>
</html>