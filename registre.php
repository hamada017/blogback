<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ========= Font awesome ======= -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- =========== Google fonts============== -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&family=Roboto+Slab:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- ======== Css ========= -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <title>Registre</title>
</head>
<body>
    <header>
        <div class="logo">
            <h1 class="logo-text"><span>Ham</span>BLOG</h1>
        </div>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <!-- <li><a href="#"></a>Sign up</li>
            <li><a href="#"></a>Login</li> -->
            <li>
                <a href="#">
                    <i class="fa fa-user"></i>
                    Hamada Bachar
                    <i class="fa fa-chevron-down" style="font-size: .8rem;"></i>
                </a>
                <ul>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#" class="logout">Logout</a></li>
                </ul>
            </li>
        </ul>
    </header>
    
    <div class="auth-content">

        <form action="registre.html" method="post" class="">
            <h2 class="form-title">Register</h2>

            <!-- <div class="msg error">
                <li>Username required</li>
            </div> -->

            <div>
                <label>Username</label>
                <input type="text" name="Username" class="text-input">
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email" class="text-input">
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password" class="text-input">
            </div>
            <div>
                <label>Password Confirmation</label>
                <input type="password" name="passwordConf" class="text-input">
            </div>
            <div>
                <button type="submit" name="registre-btn" class="btn btn-big">Register</button>
            </div>
            <p> Or <a href="login.html">Sign in</a></p>
        </form>
    </div>
  

    <!-- =========JQuery======== -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>


    <!-- ===========javascript============ -->
    <script src="assets/js/script.js"></script>
</body>
</html>