<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ url('public/login') }}/fonts/icomoon/style.css">

        <link rel="stylesheet" href="{{ url('public/login') }}/css/owl.carousel.min.css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ url('public/login') }}/css/bootstrap.min.css">

        <!-- Style -->
        <link rel="stylesheet" href="{{ url('public/login') }}/css/style.css">

        <title>E-KTG | Login</title>
    </head>

    <body>
        <div class="d-lg-flex half">
            <div class="bg order-1 order-md-2" style="background-image: url(public/login/images/bg.JPG);"></div>
            <div class="contents order-2 order-md-1">

                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-7">
                            <h3>Login <strong> E-KTG</strong></h3>

                            <form action="{{ url('login') }}" class="pt-2" method="POST">
                                @csrf
                                <div class="form-group first">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" placeholder="Username" name="username">
                                </div>
                                <div class="form-group last mb-3">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" placeholder="***************"
                                        name="password">
                                </div>

                                <button class="btn btn-block btn-primary"> Login</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="{{ url('public/login') }}/js/jquery-3.3.1.min.js"></script>
        <script src="{{ url('public/login') }}/js/popper.min.js"></script>
        <script src="{{ url('public/login') }}/js/bootstrap.min.js"></script>
        <script src="{{ url('public/login') }}/js/main.js"></script>
    </body>

</html>
