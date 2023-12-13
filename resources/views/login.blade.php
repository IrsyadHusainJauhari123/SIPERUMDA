<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="{{ url('/login12') }}/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('/login12') }}/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ url('/login12') }}/assets/css/style.css" rel="stylesheet">

    <title>SIPERUMDA</title>
</head>

<body>
    <section class="form-01-main">
        <div class="form-cover">
            {{-- <a href="{{ url('dashboard') }}"><b>SI</b>KELTA</a> --}}
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-sub-main">
                            <div class="_main_head_as">
                                <a href="#">
                                    <img src="{{ url('/login12') }}/assets/images/vector.png">
                                </a>


                            </div>
                            <p>Silahkan Login</p>
                            <hr> @include('components.utils.notif')
                            <form action="{{ url('login') }}" method="post">
                                @csrf
                                <p class="login-box-msg"> Admin Ketapang
                                </p>
                                <p> Pangan Mandiri</p>
                                <hr>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" type="text"
                                        placeholder="Email">
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="password">
                                    <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                                </div>

                                <div class="form-group">
                                    <div class="check_box_main">
                                        <a href="#" class="pas-text">Forgot Password</a>
                                    </div>
                                </div><br>

                                <div class="form-group">
                                    <button style="background-color: green" type="submit" class="btn  btn-block">Sign
                                        In</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</body>

</html>
