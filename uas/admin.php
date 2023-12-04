<!DOCTYPE HTML>
<html>
<head>
    <style>
        * {
            margin: 0;
            padding: 0;
            outline: 0;
            font-family: 'Open Sans', sans-serif;
        }

        body {
            height: 100vh;
            background-image: url(https://images3.alphacoders.com/133/1337500.png);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .container {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            padding: 20px 25px;
            width: 300px;
            background-color: rgba(0,0,0,.7);
            box-shadow: 0 0 10px rgba(255,255,255,.3);
        }

        .container h1 {
            text-align: left;
            color: #fafafa;
            margin-bottom: 30px;
            text-transform: uppercase;
            border-bottom: 4px solid #2979ff;
        }

        .container label {
            text-align: left;
            color: #90caf9;
        }

        .container form input {
            width: calc(100% - 20px);
            padding: 8px 10px;
            margin-bottom: 15px;
            border: none;
            background-color: transparent;
            border-bottom: 2px solid #2979ff;
            color: #fff;
            font-size: 20px;
        }

        .container form button {
            width: 100%;
            padding: 5px 0;
            border: none;
            background-color:#2979ff;
            font-size: 18px;
            color: #fafafa;
        }
    </style>
    <title>Halaman Login</title>
</head>
   
<body>
    <div class="container">
        <h1>Login</h1>
        <form name="form" action="cek_login.php" method="post">
            <label>Username</label><br>
            <input type="text" name="username" placeholder="Enter Your Username" /><br>
            <label>Password</label><br>
            <input type="password" name="password" placeholder="Enter Your Password" /><br>
            <input type="submit" name="submit" value="Sign Up" />
        </form>
    </div>     
</body>
</html>
