<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <title>Landing Page</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

        <style>
            body {
                font-family: "Audiowide", sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f4f4f4;
            }
            header {
                background-color: #0f5a44;
                color: #fff;
                padding: 5px 0;
                text-align: center;
                width: 100%;
                border-radius: 8px;
            }
            nav {

                color: #fff;
            }
            nav ul {
                list-style: none;
                padding: 0;
                margin: 0;
                text-align: left;
            }
            nav li {
                display: inline;
                margin: 0 15px;
            }
            .landing {
                width: 35%;
                margin: 20px auto;
                background-color: #fff;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 0 10px;
                float: center;
                text-align: center;
            }
            head {
                background-color: #0f5a44

            }

            .asla {
                color: rgb(0, 128, 107);
                background-color: transparent;
                text-decoration: none;

            }
            .asla:hover {
                color: rgb(231, 30, 63);
                background-color: transparent;
                text-decoration: none;
            }
            .div1 {
                max-width: 1150px;
                margin: 5px 20px;
                background-color:#fff;
                padding: 10px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                float: right;
            }

            #h01 {
                    color: #010c08;
                    margin-left: 20px;
                    text-align: center;
            }



            .div2 {
                margin: 5px 20px;
                background-color:#fff;
                padding: 10px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            }
            p {
                color: #191919;
            }

        </style>
    </head>
    <body>

        <header class="head" >
            <h1> CARSU REPOSITORY </h1>
            <div class="div1" >
                <nav>
                    <li><a class="asla" href="{{ url("/register") }}">Register</a></li>
                    <li><a class="asla" href="">About</a></li>
                    <li><a class="asla" href="">Contact</a></li>
                </nav>
            </div>
        </header>

        <div class="landing">

            <form class="box" method="POST" action="{{ route('dashboard') }}" >
               @if (Session::has('error'))
                    <div class="aler alert-danger" role="alert">
                        {{ Session::get('error') }}
                    </div>
                    @endif
                    @csrf
                    <h1 style="color: rgb(0, 128, 107)" >Login here</h1>
                    <input type="text" name="email" required placeholder="Email">
                    <input type="password" name="password" required placeholder="Password">
                    <Button type="submit" class="btn btn-primary" > login </Button>
                </form>



        </div>
    </body>
    <footer>
        <div style="color: #008080">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="" class="img-fluid rounded-start" alt="">
                  </div>
                  <div  class="div2">
                    <div class="card-body">
                      <h3 style="font-family: 'Marcellus';font-size: 22px" class="card-title">Edzel B. Mulig Best Thesis Award</h3>
                      <p  style="font-family: 'Marcellus';font-size: 22px" class="card-text">Si Boss Mulig nga PINAKA BAGTIK Sa CCIS nga ang Program kay Information Systems, Ang PINAKA BAGTIK MO BUHAT UG THESIS</p>
                      <p style="font-family: 'Marcellus';font-size: 22px" class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </footer>
    </html>
