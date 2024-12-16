<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login :: เข้าใช้งาน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9a194cfb78.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sriracha&display=swap');
    </style>
    <style>
         :root {
            --bg-white-app: rgb(228, 228, 228);
            --black: black;
            --silver: silver;
            --gray: gray;
            --gray2: #4a4a4a;
        }
        html, body {
            font-family: "Sriracha", cursive;
            margin: 0;
            box-sizing: border-box;
            background-color: rgb(238, 238, 238);
        }
        header.login {
            top: 0;
            position: fixed;
            min-width: 100vw;
            height: 50px;
            background-color: var(--bg-white-app);
            color: var(--black);
            display: flex;
            align-items: center;
            font-weight: 500;
            font-size: 1.2rem;
            justify-content: space-between;
            z-index: 99;
            box-shadow: 1px 1px 10px 1px;
            .header-login-title {
                width: 250px;
                display: flex;
                align-items: center;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <header class="login">
        <div class="header-login-title">Login :: เข้าใช้งาน</div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3">Lorem, ipsum.</div>
            <div class="col-12 col-md-6">Lorem, ipsum dolor.</div>
            <div class="col-12 col-md-3">Lorem ipsum dolor sit amet.</div>
        </div>
    </div>
</body>
</html>