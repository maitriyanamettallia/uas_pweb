<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tim Kami</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        header {
            text-align: center;
            background-color: #ffcccb;
            color: black;
            padding: 1em;
            width: 100%;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            text-align: center;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-size: 20px;
            transition: font-size 0.3s ease;
        }

        nav ul li a:hover {
            font-size: 28px;
        }

        .container {
            display: flex;
            justify-content: space-evenly;
            gap: 20px;
            padding: 20px;
            margin-top: 20px;
            flex-wrap: wrap;
        }

        .image-area {
            text-align: center;
            position: relative;
        }

        .img-wrapper {
            width: 300px;
            height: 400px;
            position: relative;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .img-wrapper:before {
            content: '';
            position: absolute;
            top: 0;
            left: 180%;
            height: 100%;
            width: 100%;
            background: rgba(255,255,255,.3);
            z-index: 1;
            transform: skew(45deg);
            transition: .5s;
        }

        .img-wrapper:hover:before {
            left: -180%;
        }

        .img-wrapper img {
            height: 400px;
            width: 300px;
            filter: grayscale(100%);
            transition: 2s;
        }

        .img-wrapper:hover img {
            filter: grayscale(0%);
            transform: scale(1.1);
        }

        .img-wrapper h2 {
            background: tomato;
            font-family: Poppins;
            color: #fff;
            text-align: center;
            text-transform: uppercase;
            margin: 0;
            padding: 10px 0;
            position: absolute;
            bottom: 0;
            width: 100%;
            transform: perspective(400px) rotateY(90deg);
            transform-origin: right;
            transition: 1s;
        }

        .img-wrapper:hover h2 {
            transform: perspective(400px) rotateY(0deg);
        }

        .img-wrapper ul {
            position: absolute;
            top: 10px; /* Penyesuaian untuk memindahkan ke pojok kiri atas */
            left: 10px; /* Penyesuaian untuk memindahkan ke pojok kiri atas */
            margin: 0;
            padding: 0;
            list-style: none;
            background: rgba(255,255,255,0);
        }

        .img-wrapper ul li {
            background: #333;
            height: 30px; /* Mengurangi tinggi */
            width: 30px; /* Mengurangi lebar */
            text-align: center;
            line-height: 30px; /* Sesuaikan dengan tinggi */
            transform: perspective(800px) rotateY(90deg);
            transition: .5s;
            transform-origin: left;
        }

        .img-wrapper:hover ul li {
            transform: perspective(800px) rotateY(0deg);
        }

        .img-wrapper:hover ul li:nth-child(1) { transition-delay: .2s; }
        .img-wrapper:hover ul li:nth-child(2) { transition-delay: .6s; }
        .img-wrapper:hover ul li:nth-child(3) { transition-delay: .8s; }
        .img-wrapper:hover ul li:nth-child(4) { transition-delay: 1s; }

        .img-wrapper ul li a {
            color: tomato;
            background: rgba(255,255,255,0);
        }

        .img-wrapper ul li i {
            color: tomato;
            background: rgba(255,255,255,0);
        }

        .img-wrapper ul li i:hover {
            color: #fff;
            background: rgba(255,255,255,0);
        }

    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="team.php">Team</a></li>
            </ul>
        </nav>
    </header>
    <link rel="stylesheet" type="text/css" href="https://cdn.prinsh.com/NathanPrinsley-textstyle/nprinsh-stext.css"/>
        <div class="nprinsley-text-rainbowan"><h1 align = "center">WELCOME TO HUMBLE CAFE♡</h1></div>
    <div class="container">
        <div class="image-area">
            <div class="img-wrapper">
                <img src="img/mai.jpg">
                <h2>Maitriyana Mettalia 2022132007</h2>
            </div>
            <div class="social-media-links">
            <a href="https://www.instagram.com/mxyzh_/" target="_blank">
              <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-insta.svg"style="width: 10%;">
            </a>
    </div>
        </div>
        
        <div class="image-area">
            <div class="img-wrapper">
                <img src="img/jus.jpg">
                <h2>Justin Darmawan 2022132002</h2>
            </div>
            <div class="social-media-links">
            <a href="https://www.instagram.com/darmawanjustin/" target="_blank">
            <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-insta.svg" style="width: 10%;">
            </a>
    </div>
    </div>
        <div class="image-area">
            <div class="img-wrapper">
                <img src="img/jes.jpg">
                <h2>Jessica 2022132023</h2>
            </div>
            <div class="social-media-links">
            <a href="https://www.instagram.com/jessica_zwy_/" target="_blank">
              <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-insta.svg"style="width: 10%;">
            </a>            
          </div>
        </div>
    </div>
    
    <script type='text/javascript' src='https://cdn.prinsh.com/NathanPrinsley-effect/green-bintang-jatuh.js'></script>
</body>
</html>
