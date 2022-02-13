<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="#" class="sign-in-form">
                    <h2 class="title">Sign in</h2>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" />
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" />
                    </div>
                    <a href="BITSProfile.php" class="btn2 solid" type="submit" value="Login"
                        style="text-decoration:none">Login</a>




                    <!-- <a href="BITS/index.php"><input type="submit" value="Login" class="btn solid" /> </a> -->


                </form>
                <form action="#" class="sign-up-form">
                    <img class="levitation"
                        src="https://upload.wikimedia.org/wikipedia/en/thumb/c/cc/San_Beda_University_seal.svg/1200px-San_Beda_University_seal.svg.png"
                        alt="image" />
                    </br>
                    </br>
                    <h2 class="title">ABOUT THE SYSTEM?</h2>
                    <div class="div-p">
                        <P>The student activity budget proposal system, is for the student organization circle in San
                            Beda University.in an attempt to assist in the standardization of processes,
                            the management of organizational documents, and the setting of expectations To avoid delays
                            and promote efficiency, engagement, productivity, and even work quality,
                            this reduces the tedious work of physical papers in the face-to-face setting by reducing
                            tedious traditional work
                        </P>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>ABOUT THIS CAPSTONE</h3>
                    <p>
                        Description about this web application project
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Click here
                    </button>

                    <a href="more.php"><button class="btn transparent" id="sign-up-btn">
                            more
                        </button></a>



                </div>
                <img src="img/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">

                <div class="content">
                    <h3>Access our system here</h3>
                    <p>
                        Click here to go to login Page
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button>
                </div>

                <img src="img/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="app.js"></script>
</body>

</html>