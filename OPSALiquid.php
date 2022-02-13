<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <!----======== CSS ======== -->
    <link rel="stylesheet" href="stylesBITS.css">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>

    <body>
        <nav class="sidebar close">
            <header>
                <div class="image-text">
                    <span class="image">
                        <img src="https://upload.wikimedia.org/wikipedia/en/c/cc/San_Beda_University_seal.svg" alt="">
                    </span>

                    <div class="text logo-text">
                        <span class="name">WELCOME</span>
                        <span class="profession">OPSA</span>
                    </div>
                </div>

                <i class='bx bx-chevron-right toggle'></i>
            </header>

            <!-- <div class="menu-bar">
                <div class="menu">

                    <li class="search-box">
                        <i class='bx bx-search icon'></i>
                        <input type="text" placeholder="Search...">
                    </li> -->

            <ul class="menu-links">
                <li class="nav-link">
                    <a href="OPSAProfile.php">
                        <i class='fa-solid fa-id-card-clip icon'></i>
                        <span class="text nav-text">Account</span>
                    </a>
                </li>



                <li class="nav-link">
                    <a href="OPSAsabp.php">
                        <i class="fa-solid fa-file-lines icon"></i>
                        <span class="text nav-text">SABP</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="OPSALiquid.php">
                        <i class="fa-solid fa-money-bill icon"></i>
                        <span class="text nav-text">Liquidation</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="OPSAsaer.php">
                        <i class="fa-solid fa-square-poll-horizontal icon"></i>
                        <span class="text nav-text">SAER</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="OPSAarchive.php">
                        <i class="fa-solid fa-box-archive icon"></i>
                        <span class="text nav-text">Arhive</span>
                    </a>
                </li>






            </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <!-- <li class="mode">
                        <div class="sun-moon">
                            <i class='bx bx-moon icon moon'></i>
                            <i class='bx bx-sun icon sun'></i>
                        </div>
                        <span class="mode-text text">Dark mode</span>

                        <div class="toggle-switch">
                            <span class="switch"></span>
                        </div>
                    </li> -->

            </div>
            </div>

        </nav>










        <!-- content of the page -->



        <section class="home">
            <div class="text">Liquidation Reports</div> </br></br></br>

        </section>





























        <script>
        const body = document.querySelector('body'),
            sidebar = body.querySelector('nav'),
            toggle = body.querySelector(".toggle"),
            searchBtn = body.querySelector(".search-box"),
            modeSwitch = body.querySelector(".toggle-switch"),
            modeText = body.querySelector(".mode-text");


        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        })

        searchBtn.addEventListener("click", () => {
            sidebar.classList.remove("close");
        })

        modeSwitch.addEventListener("click", () => {
            body.classList.toggle("dark");

            if (body.classList.contains("dark")) {
                modeText.innerText = "Light mode";
            } else {
                modeText.innerText = "Dark mode";

            }
        });
        </script>



    </body>

</html>
</div>
</div>
</div>
</div>
</div>
</div>
</div>



</body>

</html>