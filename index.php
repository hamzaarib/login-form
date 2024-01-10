<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./contenu/css/bootstrap.min.css">
    <link rel="stylesheet" href="./contenu/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container w-25 bg-light p-3">
        <h4 class="text-center">SIGN UP</h4>
        <form action="" method="post">
            <?php
                if(isset($_POST['submit'])){
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    if(!empty($username)&&!empty($email)&&!empty($password)){
                        include("./database/connect.php");
                        include("./database/insert.php");
                        insertUser($username,$email,$password);
                    }else{
                    ?>
                        <div class="alert alert-danger" role="alert">
                            Email and Password is required
                        </div>
                    <?php
                    }
                    
                }
            ?>
            <div class="mb-3 mt-3">
                <label class="form-label">User Name</label>
                <input type="text" class="form-control" placeholder="Enter User Name" name="username">
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
                <div class="form-text text-danger">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" name="submit" class="btn btn-primary mb-3">Submit</button>
            <p class="text-secondary text-center"><small><i>you have a count</i></small> <a href="./view/log_in.php">Log in</a></p>
        </form>
    </div>
</body>
</html>