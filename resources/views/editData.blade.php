<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technoscape</title>
    <link rel="stylesheet" href="/css/register.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- <style> @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap'); </style> -->
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css” />
</head>
<body>
    <section class="payment">
        <div class="pay">
            <h2>Personal Information</h2>
            <form action="{{route('update', $users->id)}}" method="POST">
                @csrf
                @method('patch')
                <div class="inputname">
                    <div class="input_box">
                        <input type="text" placeholder="Group Name" name="Name" id="name" value="{{$users->Name}}" required>
                        <i class="fa fa-user icon" style="color: whitesmoke;"></i>
                    </div>
                </div>
                <div class="inputemail">
                    <div class="input_box">
                        <input type="email" placeholder="Email" name="Email" id="Email" value="{{$users->Email}}" required>
                        <i class="fa fa-envelope-o" style="color: whitesmoke;"></i>
                    </div>
            </div>
            <div class="inputpass">
                <div class="input_box">
                    <input type="password" placeholder="Password" name="password" id="password" minlength=8 maxlength=15 value="{{Session::get($users->password)}}" required>
                    <i class="fa fa-eye" id="show-password" style="color: whitesmoke;"></i>
                </div>
            </div>
            <div class="inputpass">
                <div class="input_box">
                    <input type="password" placeholder="Confirm Password" name="Pass" id="Pass" minlength=8 maxlength=15 value="{{Session::get($users->Pass)}}" required>
                    <i class="fa fa-eye" id="show-Pass" style="color: whitesmoke;"></i>
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
            <script>
                const showPass = document.querySelector('#show-Pass');
                const PasswordFld = document.querySelector('#Pass');
                showPass.addEventListener("click", function(){
                    this.classList.toggle("fa-eye-slash");
                    const type = PasswordFld.getAttribute("type") === "password" ? "text" : "password";
                    PasswordFld.setAttribute("type", type);
                });
            </script>
            <div id="submit" >
                <button onclick="readData()">Register</button>
            </div>
            <div class="login">
                Already have an account? <a href="/login" style="color: mediumpurple">Login</a> now!
            </div>
        </form>
        </div>
    </section>
        
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