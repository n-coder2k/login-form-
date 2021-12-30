?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & User Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/finalindex.css">
    <style>
        body{
            background: url('images/baner.jpg')no-repeat 0 0;
            background-attachment: fixed;
            background-size: cover;
        }
        .container{
            padding: 70px;
            margin-top: 120px;
            background-color: rgb(167, 241, 167);
            box-shadow: 0 12px 15px 0 rgba(0, 0, 0, .24), 0 17px 50px 0 rgba(0, 0, 0, .19);
        }
    </style>
</head>
<body>
<div id="header" class=" fixed-top">
        <div class="container1">
            <div class="row">
                <div class="col-md-4 my-2 ">
                    <h1 id="logo"><i class="fas fa-recycle"></i>  Green Trash</h1>
                </div>
                <div class="col-md-8 my-2">
                    <ul id="menu" class="float-md-end">
                        <li><a href="index-final.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="Login-form.html">Login/Signup</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
            <div class="row">
                <div class="col-md-6">
                        <h2>Register Here</h2>
                        <form action="connection.php" method="post">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="username" id="username" name="username" class="form-control" placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <h2>Login Here</h2>
                        <form action="validation.php" method="post">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="username" id="username" name="username" class="form-control" placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                
        </div>
    </div>
</body>
</html>
