<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <a class="home-button" href="index.php"><i class="fa-solid fa-house"></i></a>
    <div class="container">
        <div class="header">
            <h2>Registration Form</h2>
        </div>
        <form class="form" id="form" action="users.php" method="post">
            <div class="form-control">
                <label>Name</label>
                <input type="text" placeholder="eg. Jane Doe" name="name" id="name" autocomplete="off">
                <small>Error Msg</small>
            </div>
            <div class="form-control">
                <label>Email</label>
                <input type="email" placeholder="eg. janedoe@gmail.com" name="email" id="email" autocomplete="off" onkeyup="showEmailNote(this.value)">
                <small>Error Msg</small>
            </div>
            <div class="flex-container">
                <div class="form-control">
                    <label>Phone Number</label>
                    <input type="number" placeholder="eg. 9732237461" name="phone" id="phone" autocomplete="off" onkeyup="showPhoneNote(this.value)">
                    <small>Error Msg</small>
                </div>
                <div class="form-control">
                    <label>Age</label>
                    <input type="number" placeholder="eg. 25" name="age" id="age" autocomplete="off">
                    <small>Error Msg</small>
                </div>
            </div>
            <div class="flex-container">
                <div class="form-control">
                    <label>Password</label>
                    <input type="password" placeholder="eg. janedoe123#" name="password" id="password" autocomplete="off">
                    <small>Error Msg</small>
                </div>
                <div class="form-control">
                    <label>Confirm Password</label>
                    <input type="password" placeholder="Enter your password again" name="confirm_password" id="cpassword"
                        autocomplete="off">
                    <small>Error Msg</small>
                </div>
            </div>

            <p style="font-size: 1.1rem; text-align: center; color: white;">Already have an account? <a style="text-decoration: none; color: #FAC543;" href="login.php">Login</a></p>
            <br>

            <div class="buttons">
                <input type="submit" value="Submit" id="submit" class="btn" name="submit">
                <input type="reset" value="Reset" id="reset" class="btn1" name="reset">
            </div>
        </form>
    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- <script src="index.js"></script> -->

    

</body>

</html>