<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technoscape</title>
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script defer src="login.js"></script>

</head>
<body>
    <section>
        <nav>
            <!-- <a href=""><img src="tlogo.png" alt=""></a> -->
            <div class="Logo">
                <ul>
                    <li>
                        <a href="/">Home</a>
                        <a href="/register">Register</a>
                        <a href="/login" style="color: lightpink;">Login</a>
                        <a href="/payment">Payment</a>
                    </li>
                    <!-- <li>
                        <a href="login.html">Login</a>
                    </li> -->
                </ul>
            </div>
        </nav>
    </section>
    <section class="payment">
        <div class="pay">
            <h2>Login</h2>
            <h4>Welcome Back!</h4>
            <form action="/login" method="POST">
                @csrf
            <div class="username">
                <div class="input_box">
                    <input type="email" placeholder="Email" id="Email" name="Email" required>
                    <i class="fa fa-envelope-o" style="color: whitesmoke; display: contents;"></i>
                    <!-- <i class="fa fa-check-circle" style="color: chartreuse"></i>
                    <i class="fa fa-exclamation-circle" style="color: crimson;"></i>
                    <p>Enter Username</p> -->
                </div>
            </div>
            <div class="Pass">
                <div class="input_box">
                    <input type="password" placeholder="Password" id="password" name="Password" required class="password">
                    <i class="fa fa-eye" id="show-password" style="color: whitesmoke; display: contents;"></i>
                    <!-- <i class="fa fa-check-circle" style="color: chartreuse"></i>
                    <i class="fa fa-exclamation-circle" style="color: crimson;"></i>
                    <p>Enter Username</p> -->
                </div>
            </div>
            <script>
                const showPassword = document.querySelector('#show-password');
                const PasswordField = document.querySelector('#password');
                showPassword.addEventListener("click", function(){
                    this.classList.toggle("fa-eye-slash");
                    const type = PasswordField.getAttribute("type") === "password" ? "text" : "password";
                    PasswordField.setAttribute("type", type);
                });
            </script>
            <div id="submit">
                <button onclick="readData()">Login</button>
            </div>
            <div class="login">
               <p>Don't have an account yet? <a href="/register" style="color: mediumpurple;">Register</a> now!</p> 
            </div>
        </form>
            </div>
            <section class="footer">
                <div class="sm">
                    <ul style="align-items: center;">
                        <li><a href="https://twitter.com/bncc_binus?lang=en"><i class="fa fa-twitter" style="color: whitesmoke"></i></a></li>
                        <li><a href="https://id-id.facebook.com/bina.nusantara.computer.club/"><i class="fa fa-facebook" style="color: whitesmoke"></i></a></li>
                        <li><a href="https://www.instagram.com/technoscapebncc/"><i class="fa fa-instagram" style="color: whitesmoke"></i></a></li>
                    </ul>
                    <p>
                       Copyright © 2022 BNCC. All Rights Reserved
                    </p>
                </div>
            </section>

                
        </body>
        </html>