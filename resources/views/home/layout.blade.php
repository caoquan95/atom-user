<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" type="image/png" href="landing-page/assets/img/logo.png" cph-ssorder="0">
    <link rel="icon" type="image/png" href="landing-page/assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>KEE TOOL - @yield('title')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="landing-page/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="landing-page/assets/css/paper-kit.css" rel="stylesheet"/>
    <link href="landing-page/assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="landing-page/assets/css/nucleo-icons.css" rel="stylesheet">

</head>
<body class="presentation-page loading">
<nav class="navbar navbar-toggleable-md fixed-top nav-down">
    <div class="container" style="width:95%!important">
        <div class="navbar-translate">
            <button class="navbar-toggler navbar-toggler-right navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
            </button>
            <div class="navbar-header">
                <a class="navbar-brand" href="/">
                    <img src="landing-page/assets/img/colorlogo.png" height="20px"/>
                </a>
            </div>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html" data-scroll="true">Giới thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html" data-scroll="true">Về chúng tôi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html" data-scroll="true">Báo giá</a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-round btn-danger" style="background-color:#c50000;border-color:#c50000" href="/free-trial">
                        <i class="fa fa-shopping-cart"></i> Dùng thử
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield("content")

<footer class="footer footer-big footer-black">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-3 col-xs-6">
                <img src="landing-page/assets/img/logowhite.png" height="30px"/>
            </div>
            <div class="col-md-9 offset-md-1 col-sm-9 col-xs-12">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="links">
                            <ul class="uppercase-links stacked-links">
                                <li>
                                    <a href="#paper-kit">
                                        Trang chủ
                                    </a>
                                </li>
                                <li>
                                    <a href="#paper-kit">
                                        Báo giá
                                    </a>
                                </li>
                                <li>
                                    <a href="#paper-kit">
                                        Bảo hành
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="links">
                            <ul class="uppercase-links stacked-links">
                                <li>
                                    <a href="#paper-kit">
                                        Liên hệ
                                    </a>
                                </li>
                                <li>
                                    <a href="#paper-kit">
                                        Tuyển dụng
                                    </a>
                                </li>
                                <li>
                                    <a href="#paper-kit">
                                        Về chúng tôi
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="links">
                            <ul class="uppercase-links stacked-links">
                                <li>
                                    <a href="#paper-kit">
                                        Tin tức
                                    </a>
                                </li>
                                <li>
                                    <a href="#paper-kit">
                                        Dùng thử
                                    </a>
                                </li>
                                <li>
                                    <a href="#paper-kit">
                                        Phản hồi
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="social-area">
                            <a class="btn btn-just-icon btn-round btn-default" href="https://www.facebook.com/keetool">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a class="btn btn-just-icon btn-round btn-default">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a class="btn btn-just-icon btn-round btn-default">
                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="copyright">
                    <div class="pull-left">
                        © <script>document.write(new Date().getFullYear())</script> KEETOOL
                    </div>
                    <div class="links pull-right">
                        <ul>
                            <li>
                                <a href="#paper-kit">
                                    Company Policy
                                </a>
                            </li>
                            |
                            <li>
                                <a href="#paper-kit">
                                    Terms
                                </a>
                            </li>
                            |
                            <li>
                                <a href="#paper-kit">
                                    Privacy
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>

<!--  Plugins -->
<!-- Core JS Files -->
<script src="landing-page/assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="landing-page/assets/js/jquery-ui-1.12.1.custom.min.js" type="text/javascript"></script>
<script src="landing-page/assets/js/tether.min.js" type="text/javascript"></script>
<script src="landing-page/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="landing-page/assets/js/paper-kit.js?v=2.0.0"></script>
<script src="landing-page/assets/js/demo.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<!--  Plugins for presentation page -->
<script src="landing-page/assets/js/presentation-page/main.js"></script>
<script src="landing-page/assets/js/presentation-page/jquery.sharrre.js"></script>

<script async defer src="https://buttons.github.io/buttons.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>

<script type="text/javascript">
    (function() {
        function getRandomInt(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }

        new IsoGrid(document.querySelector('.isolayer--deco1'), {
            transform : 'translateX(33vw) translateY(-340px) rotateX(45deg) rotateZ(45deg)',
            stackItemsAnimation : {
                properties : function(pos) {
                    return {
                        translateZ: (pos+1) * 30,
                        rotateZ: getRandomInt(-4, 4)
                    };
                },
                options : function(pos, itemstotal) {
                    return {
                        type: dynamics.bezier,
                        duration: 500,
                        points: [{"x":0,"y":0,"cp":[{"x":0.2,"y":1}]},{"x":1,"y":1,"cp":[{"x":0.3,"y":1}]}],
                        delay: (itemstotal-pos-1)*40
                    };
                }
            }
        });
    })();
</script>

@yield("script")

</html>
