<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
         body {
            background-image: url("sestava-pozadi.png");
            display: flex;
            justify-content: center;
            align-items: center;
            height: 97vh;
            flex-direction: column;
            }

            *{
            font-family: cursive;
            box-sizing: padding-box;
            }

            form {
            width: 1000px;
            border: 3px solid  #0069FF;
            padding: 20px;
            background: transparent;
            border-radius: 20px;
            background-color: black;
            }

            h2 {
            text-align: center;
            margin-bottom: 40px;
            color:  #0069FF;
            }

            input {
            display: block;
            border: 2px solid #ccc;
            width: 95%;
            padding: 10px;
            margin: 10px auto;
            border-radius: 5px;
            }

            label {
            color:  #0069FF;
            font-size: 18px;
            padding: 10px;
            }

            button {
            float: right;
            background: transparent;
            padding: 10px 15px;
            color:  #0069FF;
            border-radius: 5px;
            margin-right: 10px;
            border: 1px solid  #0069FF;
            transition: .3s;
            }

            button:hover{
            background:  #0069FF;
            color: #000;
            cursor: pointer;
            box-shadow: 0 0 10px   #0069FF, 0 0 20px  #0069FF, 0 0 30px  #0069FF;
            border: 1px solid transparent;
            }

            .error {
            background: #F2DEDE;
            color: #0c0101;
            padding: 10px;
            width: 95%;
            border-radius: 5px;
            margin: 20px auto;
            }

            h1 {
            text-align: center;
            color: rgb(134, 3, 3);
            }

            a {
            float: right;
            background: rgb(183, 225, 233);
            padding: 10px 15px;
            color: #fff;
            border-radius: 10px;
            margin-right: 10px;
            border: none;
            text-decoration: none;
            }

            a:hover{
            opacity: .7;
            }

            p {
                text-align: center;
            }
    </style>
</head>
<body>
<?php
    $servername= "localhost";
    $username= "root";
    $password = "";
    $esuba = "esuba";
    $conn = mysqli_connect($servername, $username, $password, $esuba);
    if (!$conn) {
        echo "Connection failed!";
    }

    session_start();
    
    if (isset($_POST['user_name']) && isset($_POST['password'])) {
        function validate($data){
           $data = trim($data);
           $data = stripslashes($data);
           $data = htmlspecialchars($data);
           return $data;
        }

        $username = validate($_POST['user_name']); 
        $password = validate($_POST['password']);  

        if (empty($username)) { 
            header("Location: login.php?error=Jméno musí být vyplněno");
            exit();

        }
        else if(empty($password)){
            header("Location: login.php?error=Heslo musí být vyplněno");
            exit();
        }
        else{
            $sql = "SELECT * FROM users WHERE user_name='$username' AND password='$password'";
            $result = mysqli_query($conn, $sql);
    
            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if ($row['user_name'] === $username && $row['password'] === $password) {
                    echo "loggedin";
                    $_SESSION['user_name'] = $row['user_name'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['id'];
                    header("Location: rozcesti.php");
                    exit();
                }
                else{
                    header("Location: login.php?error=Nesprávné jméno nebo heslo");
                    exit();
                }
            }
            else{
                header("Location: login.php?error=Nesprávné jméno nebo heslo");
                exit();
            }
        }
    }
?>
     <form action="login.php" method="post">
        <h2>Přihlášení k editaci stránek</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>Jméno</label>
        <input type="text" name="user_name" placeholder="User Name"><br>
        <label>Heslo</label>
        <input type="password" name="password" placeholder="Password"><br> 
        <button type="submit">Login</button>
     </form>
    
</body>
</html>