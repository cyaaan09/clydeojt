<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
    <title>Register Form</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>

  <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #0f5a44;
            color: #fff;
            padding: 5px 0;
            width: 100%;
            border-radius: 8px;
            float: center;
        }
        .div1 {
            background: #fcfdfd;
            border-radius: 5px;
            margin: 5px 20px;
            width: 100px;
            padding: 5px 20px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            float: right;
        }
        .a1:hover,.a1:active {
            color: rgb(231, 30, 63);
            background-color: transparent;
            text-decoration: none;
        }
        .a1 {
            color: rgb(0, 128, 107);
        }

  </style>

  <body style="font-family: Comfortaa, sans-serif" >
<header>
    <h1 style="text-align: center; font-style:oblique"> Register Here </h1>
    <h6>
    <div class="div1">
        <nav> <a class="a1" href="{{ url("/dashboard") }}"> Log in </a> </nav>
    </div>
    </h6>

<div class="card-header">
    @if (Session::has('success'))
        <div class="aler alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
        <form action="{{ route('register.register') }}" method="POST"
        class="row g-3" style="margin: 50px 350px 50px;"
        enctype="multipart/form-data" >

            @csrf

                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" name="email">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" name="password">
                        </div>

                    <div class="col-6">
                        <label for="inputFirstname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="inputFirstname" name="firstname" placeholder="First Name">
                    </div>
                    <div class="col-md-6">
                        <label for="inputLastname" class="form-label" >Middle Name</label>
                        <input type="text" class="form-control" id="inputLastname" name="midname" placeholder="Middle Name">
                    </div>
                    <div class="col-6">
                        <label for="inputFirstname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="inputFirstname" name="lastname" placeholder="Last Name">
                    </div>
                    <div class="col-md-6">
                        <label for="inputUsertype" class="form-label">User Type</label>
                        <select id="inputUsertype" class="form-select" name="usertypesname">
                            <option > User type </option>
                            <option value="Student" > Student </option>
                            <option value="Employee" > Employee </option>
                        </select>
                    </div>

                        <div class="col-md-6">
                            <label for="inputProgram" class="form-label">Program</label>
                        <select id="inputProgram" class="form-select" name="programs">
                            <option selected>Choose...</option>
                            <option value="BSIS"> BSIS </option>
                            <option value="BSIT" > BSIT </option>
                            <option value="BSCS" > BSCS </option>
                        </select>
                        </div>

                        <div class="col-12">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Under Graduate
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Graduate School
                                </label>
                            </div>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>


                        <!-- <div class="col-md-2">
                        <label for="inputZip" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                        </div> -->





                    </form>
</div>
</header>





  </body>
</html>
