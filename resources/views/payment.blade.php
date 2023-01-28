<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technoscape</title>
    <link rel="stylesheet" href="/css/payment.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- <style> @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap'); </style> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                        <a href="/login">Login</a>
                        <a href="/payment" style="color: lightpink;">Payment</a>
                    </li>
                    <!-- <li>
                        <a href="login.html">Login</a>
                    </li> -->
                </ul>
            </div>
        </nav>
    </section>
        <section>
            <div class="pay">
                <h2>Payment</h2>
                <form id="payment" action="/store-pay" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="inputname">
                        <div class="input_box">
                            <input type="text" placeholder="Group Name" name="Name" id="name" required>
                            <i class="fa fa-users" style="color: whitesmoke;"></i>
                        </div>
                    </div>
                    <div class="inputname">
                        <div class="input_box">
                            <input type="text" placeholder="Leader Name" name="LName" id="Lname" required>
                            <i class="fa fa-user icon" style="color: whitesmoke;"></i>
                        </div>
                    </div>
                    <div class="inputemail">
                        <div class="input_box">
                            <input type="email" placeholder="Email" name="Email" id="Email" required>
                            <i class="fa fa-envelope-o" style="color: whitesmoke;"></i>
                        </div>
                        <div class="inputname">
                            <div class="input_box">
                                <input type="text" placeholder="Card Number" name="cardNum" id="name" required>
                                <i class="fa fa-credit-card" style="color: whitesmoke"></i>
                            </div>
                        </div>
                        <div class="relative flex items-center min-h-screen justify-center overflow-hidden">
                            {{-- <form action="{{ route('image.store') }}" method="POST" class="shadow p-12" enctype="multipart/form-data"> --}}
                                @csrf
                                <label class="block mb-4">
                                    <span class="sr-only">Choose File</span>
                                    <input type="file" name="image" 
                                        class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                                    @error('image')
                                    <div class="alert" role="alert" style="color: palevioletred" >{{ $message }}</div>
                                    {{-- <span class="text-red-600 text-sm">{{ $message }}</span> --}}
                                    @enderror
                                </label>
                            {{-- </form> --}}
                        </div>
                        <div id="submit">
                            <button onclick="readData()">Confirm Payment</button>
                        </div>
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