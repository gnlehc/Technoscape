<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technoscape</title>
    <link rel="stylesheet" href="/css/user.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- <style> @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap'); </style> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
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
                        <a href="/user" style="color: lightpink;">User</a>
                        <a href="/payment">payment</a>
                    </li>
                    <!-- <li>
                        <a href="login.html">Login</a>
                    </li> -->
                </ul>
            </div>
        </nav>
    </section>
    <section>
        <div class="hello">
            <h1><b>Welcome!</b></h1>
            {{-- @foreach ($accs as $accs) --}}
            {{-- <div class="card" style="width: 18rem;"> --}}
                {{-- <img src="..." class="card-img-top" alt="..."> --}}
                {{-- <div class="card-body">
                    <h4>Group 1</h4>
                 <h2 class="card-title">{{$accs->Name}}</h2>
                 <h2 class="card-title">{{$accs->Email}}</h2>
                 <h2 class="card-title">{{$accs->password}}</h2>
                 <h2 class="card-title">{{$accs->Pass}}</h2> --}}
                  {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                {{-- </div>
              </div> --}}
              <table class="table table-striped table-dark">
                <thead>
                  <tr>
                    <th scope="col">Group Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Confirm Password</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                    @csrf
                    @method('patch')
                    @foreach($accs as $accs)
                  <tr>
                    <td>{{$accs->Name}}</td>
                    <td>{{$accs->Email}}</td>
                    <td>{{$accs->password}}</td>
                    <td>{{$accs->Pass}}</td>
                    <td><a href="{{route('editData', $accs->id)}}" class="btn btn-success">Edit</a></td>
                    {{-- <td><button class="btn btn-success">Edit</button></td>
                    <td><button class="btn btn-danger">Delete</button></td> --}}
                    <form action="{{route('delete', $accs->id)}}" method="POST">
                      @csrf
                      @method('delete')
                      <td><button class="btn btn-danger">Delete</button></td>
                    </form>
                  </tr>
                  @endforeach
                  {{-- <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody> --}}
              </table>
        </div>
        {{-- @endforeach --}}
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