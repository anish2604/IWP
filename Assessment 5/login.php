<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <a class="home-button" href="index.php"><i class="fa-solid fa-house"></i></a>
    <div class="container">
        <div class="header">
            <h2>Login Form</h2>
        </div>
        <form class="form" id="form" action="login_verification.php" method="post">
            <div class="form-control">
                <label>Email</label>
                <input type="email" placeholder="eg. janedoe@gmail.com" name="email" id="email" autocomplete="off">
                <small>Error Msg</small>
            <div class="form-control">
                <label>Password</label>
                <input type="password" placeholder="eg. janedoe123#" name="password" id="password" autocomplete="off">
                <small>Error Msg</small>
            </div>

            <p style="font-size: 1.1rem; text-align: center; color: white;">Don't have an account? <a style="text-decoration: none; color: #FAC543;" href="register.php">Signup</a></p>
            <br>
            <div class="buttons">
                <input type="submit" value="Submit" class="btn" name="submit">
            </div>
        </form>
    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- <script src="index.js"></script> -->

    

</body>

</html>