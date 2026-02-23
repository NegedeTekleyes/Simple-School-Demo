<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        background-color: lightgray;
        font-family: verdana;
        color: rgb(9, 20, 101);
        margin: 0px;
        padding: 0px;
    }

    h1 {
        color: green;
    }

    p {
        text-align: justify;
    }

    ul {
        list-style-type: none;
        display: flex;

    }

    li a {
        display: block;
        color: black;
        padding: 20px 40px;
        text-decoration: none;
        float: left;
    }

    header,
    footer {
        background-color: aqua;
        text-align: center;
    }

    .main_body {
        background-color: black;
        color: aliceblue;
        padding: 50px 100px;
        height: 50vh;
        text-align: center;
    }

    button {
        padding: 10px 20px;
    }

    .second_body {
        margin-top: -40px;
        margin-left: 500px;
        display: flex;
        width: 30%;
        justify-content: center;
        gap: 10px;

    }

    .third_body {
        background-color: rgb(8, 58, 97);
        padding: 70px 100px;
        color: white;
        border-radius: 10px;

    }

    .login_body {
        background-color: brown;
        padding: 50px 70px;
        margin-left: 360px;
        width: 60%;
        text-align: center;
    }
</style>

<body>
    <header>
        <ul>
            <h4>Email: oromiya@gmail.com || +251123456789</h4> &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li><a href="">FB</a></li>
            <li><a href="">GO</a></li>
        </ul>

        <ul>
            <h1>Oromiya Boarding school</h1>
            <li><a href="">Home</a></li>
            <li><a href="">Student</a></li>
            <li><a href="">Teahcer</a></li>
            <li><a href="">Course</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Login</a></li>
        </ul>
    </header>
    <form method="POST" action="">
        <div class="login_body">
            <fieldset>
                <h1>Login Form</h1>
                User Name: <input type="text" name="user">
                Password : <input type="password" name="password"> <br><br><br>
                <input type="submit" name="login">
            </fieldset>

        </div>
        <?php
        include("conn.php");
        if (isset($_POST['login'])) {
            $username = $_POST['user'];
            $password = $_POST['password'];
            $res = mysqli_query($conn,  "SELECT * from login where email= '$username' and password = '$password'");
            if (mysqli_num_rows($res) > 0) {
                header('location:home.html');
            } else {
                echo "Invalid username or pasword";
            }
        }




        ?>




    </form>
</body>

</html>