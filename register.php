<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- forfont family -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">

    <title>Hello, world!</title>
    <style>
        body {
            font-family: Verdana, Geneva, sans-serif;
            font-size: 14px;
            background: #f2f2f2;
        }

        .clearfix:after {
            content: "";
            display: block;
            clear: both;
            visibility: hidden;
            height: 0;
        }

        .form_wrapper {
            background: #fff;
            width: 400px;
            max-width: 100%;
            box-sizing: border-box;
            padding: 25px;
            margin: 8% auto 0;
            position: relative;
            z-index: 1;
            border-top: 5px solid #f5ba1a;
            -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
            box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
            -webkit-transform-origin: 50% 0%;
            transform-origin: 50% 0%;
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
            -webkit-transition: none;
            transition: none;
            -webkit-animation: expand 0.8s 0.6s ease-out forwards;
            animation: expand 0.8s 0.6s ease-out forwards;
            opacity: 0;
        }

        .form_wrapper h2 {
            font-size: 1.5em;
            line-height: 1.5em;
            margin: 0;
        }

        .form_wrapper .title_container {
            text-align: center;
            padding-bottom: 15px;
        }

        .form_wrapper h3 {
            font-size: 1.1em;
            font-weight: normal;
            line-height: 1.5em;
            margin: 0;
        }

        .form_wrapper label {
            font-size: 12px;
        }

        .form_wrapper .row {
            margin: 10px -15px;
        }

        .form_wrapper .row>div {
            padding: 0 15px;
            box-sizing: border-box;
        }

        .form_wrapper .col_half {
            width: 50%;
            float: left;
        }

        .form_wrapper .input_field {
            position: relative;
            margin-bottom: 20px;
            -webkit-animation: bounce 0.6s ease-out;
            animation: bounce 0.6s ease-out;
        }

        .form_wrapper .input_field>span {
            position: absolute;
            left: 0;
            top: 0;
            color: #333;
            height: 100%;
            border-right: 1px solid #cccccc;
            text-align: center;
            width: 30px;
        }

        .form_wrapper .input_field>span>i {
            padding-top: 10px;
        }

        .form_wrapper .textarea_field>span>i {
            padding-top: 10px;
        }

        .form_wrapper input[type="text"],
        .form_wrapper input[type="email"],
        .form_wrapper input[type="password"] {
            width: 100%;
            padding: 8px 10px 9px 35px;
            height: 35px;
            border: 1px solid #cccccc;
            box-sizing: border-box;
            outline: none;
            -webkit-transition: all 0.30s ease-in-out;
            -moz-transition: all 0.30s ease-in-out;
            -ms-transition: all 0.30s ease-in-out;
            transition: all 0.30s ease-in-out;
        }

        .form_wrapper input[type="text"]:hover,
        .form_wrapper input[type="email"]:hover,
        .form_wrapper input[type="password"]:hover {
            background: #fafafa;
        }

        .form_wrapper input[type="text"]:focus,
        .form_wrapper input[type="email"]:focus,
        .form_wrapper input[type="password"]:focus {
            -webkit-box-shadow: 0 0 2px 1px rgba(255, 169, 0, 0.5);
            -moz-box-shadow: 0 0 2px 1px rgba(255, 169, 0, 0.5);
            box-shadow: 0 0 2px 1px rgba(255, 169, 0, 0.5);
            border: 1px solid #f5ba1a;
            background: #fafafa;
        }

        .form_wrapper input[type="submit"] {
            background: #f5ba1a;
            height: 35px;
            line-height: 35px;
            width: 100%;
            border: none;
            outline: none;
            cursor: pointer;
            color: #fff;
            font-size: 1.1em;
            margin-bottom: 10px;
            -webkit-transition: all 0.30s ease-in-out;
            -moz-transition: all 0.30s ease-in-out;
            -ms-transition: all 0.30s ease-in-out;
            transition: all 0.30s ease-in-out;
        }

        .form_wrapper input[type="submit"]:hover {
            background: #e1a70a;
        }

        .form_wrapper input[type="submit"]:focus {
            background: #e1a70a;
        }

        .form_wrapper input[type="checkbox"],
        .form_wrapper input[type="radio"] {
            border: 0;
            clip: rect(0 0 0 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
        }

        .form_container .row .col_half.last {
            border-left: 1px solid #cccccc;
        }

        .checkbox_option label {
            margin-right: 1em;
            position: relative;
        }

        .checkbox_option label:before {
            content: "";
            display: inline-block;
            width: 0.5em;
            height: 0.5em;
            margin-right: 0.5em;
            vertical-align: -2px;
            border: 2px solid #cccccc;
            padding: 0.12em;
            background-color: transparent;
            background-clip: content-box;
            transition: all 0.2s ease;
        }

        .checkbox_option label:after {
            border-right: 2px solid #000000;
            border-top: 2px solid #000000;
            content: "";
            height: 20px;
            left: 2px;
            position: absolute;
            top: 7px;
            transform: scaleX(-1) rotate(135deg);
            transform-origin: left top;
            width: 7px;
            display: none;
        }

        .checkbox_option input:hover+label:before {
            border-color: #000000;
        }

        .checkbox_option input:checked+label:before {
            border-color: #000000;
        }

        .checkbox_option input:checked+label:after {
            -moz-animation: check 0.8s ease 0s running;
            -webkit-animation: check 0.8s ease 0s running;
            animation: check 0.8s ease 0s running;
            display: block;
            width: 7px;
            height: 20px;
            border-color: #000000;
        }

        .radio_option label {
            margin-right: 1em;
        }

        .radio_option label:before {
            content: "";
            display: inline-block;
            width: 0.5em;
            height: 0.5em;
            margin-right: 0.5em;
            border-radius: 100%;
            vertical-align: -3px;
            border: 2px solid #cccccc;
            padding: 0.15em;
            background-color: transparent;
            background-clip: content-box;
            transition: all 0.2s ease;
        }

        .radio_option input:hover+label:before {
            border-color: #000000;
        }

        .radio_option input:checked+label:before {
            background-color: #000000;
            border-color: #000000;
        }

        .select_option {
            position: relative;
            width: 100%;
        }

        .select_option select {
            display: inline-block;
            width: 100%;
            height: 35px;
            padding: 0px 15px;
            cursor: pointer;
            color: #7b7b7b;
            border: 1px solid #cccccc;
            border-radius: 0;
            background: #fff;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            transition: all 0.2s ease;
        }

        .select_option select::-ms-expand {
            display: none;
        }

        .select_option select:hover,
        .select_option select:focus {
            color: #000000;
            background: #fafafa;
            border-color: #000000;
            outline: none;
        }

        .select_arrow {
            position: absolute;
            top: calc(50% - 4px);
            right: 15px;
            width: 0;
            height: 0;
            pointer-events: none;
            border-width: 8px 5px 0 5px;
            border-style: solid;
            border-color: #7b7b7b transparent transparent transparent;
        }

        .select_option select:hover+.select_arrow,
        .select_option select:focus+.select_arrow {
            border-top-color: #000000;
        }

        .credit {
            position: relative;
            z-index: 1;
            text-align: center;
            padding: 15px;
            color: #f5ba1a;
        }

        .credit a {
            color: #e1a70a;
        }

        @-webkit-keyframes check {
            0% {
                height: 0;
                width: 0;
            }

            25% {
                height: 0;
                width: 7px;
            }

            50% {
                height: 20px;
                width: 7px;
            }
        }

        @keyframes check {
            0% {
                height: 0;
                width: 0;
            }

            25% {
                height: 0;
                width: 7px;
            }

            50% {
                height: 20px;
                width: 7px;
            }
        }

        @-webkit-keyframes expand {
            0% {
                -webkit-transform: scale3d(1, 0, 1);
                opacity: 0;
            }

            25% {
                -webkit-transform: scale3d(1, 1.2, 1);
            }

            50% {
                -webkit-transform: scale3d(1, 0.85, 1);
            }

            75% {
                -webkit-transform: scale3d(1, 1.05, 1);
            }

            100% {
                -webkit-transform: scale3d(1, 1, 1);
                opacity: 1;
            }
        }

        @keyframes expand {
            0% {
                -webkit-transform: scale3d(1, 0, 1);
                transform: scale3d(1, 0, 1);
                opacity: 0;
            }

            25% {
                -webkit-transform: scale3d(1, 1.2, 1);
                transform: scale3d(1, 1.2, 1);
            }

            50% {
                -webkit-transform: scale3d(1, 0.85, 1);
                transform: scale3d(1, 0.85, 1);
            }

            75% {
                -webkit-transform: scale3d(1, 1.05, 1);
                transform: scale3d(1, 1.05, 1);
            }

            100% {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
                opacity: 1;
            }
        }

        @-webkit-keyframes bounce {
            0% {
                -webkit-transform: translate3d(0, -25px, 0);
                opacity: 0;
            }

            25% {
                -webkit-transform: translate3d(0, 10px, 0);
            }

            50% {
                -webkit-transform: translate3d(0, -6px, 0);
            }

            75% {
                -webkit-transform: translate3d(0, 2px, 0);
            }

            100% {
                -webkit-transform: translate3d(0, 0, 0);
                opacity: 1;
            }
        }

        @keyframes bounce {
            0% {
                -webkit-transform: translate3d(0, -25px, 0);
                transform: translate3d(0, -25px, 0);
                opacity: 0;
            }

            25% {
                -webkit-transform: translate3d(0, 10px, 0);
                transform: translate3d(0, 10px, 0);
            }

            50% {
                -webkit-transform: translate3d(0, -6px, 0);
                transform: translate3d(0, -6px, 0);
            }

            75% {
                -webkit-transform: translate3d(0, 2px, 0);
                transform: translate3d(0, 2px, 0);
            }

            100% {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
                opacity: 1;
            }
        }

        @media (max-width: 600px) {
            .form_wrapper .col_half {
                width: 100%;
                float: none;
            }

            .bottom_row .col_half {
                width: 50%;
                float: left;
            }

            .form_container .row .col_half.last {
                border-left: none;
            }

            .remember_me {
                padding-bottom: 20px;
            }
        }

        /* for navbar button */
        .navbar-toggler-icon {
            color: #000 !important;
        }

        /* for nav item */
        .nav-item {
            padding-right: 50px;
        }

        .se-pre-con {
            position: absolute;

            width: 100px;
            height: 100px;
            top: 40%;
            left: 40%;
            z-index: 9999;
            background: url(/images/302-loader-1.gif) center no-repeat #fff;
        }

        .trans {
            position: absolute;
            width: 519px;
            height: 490px;
            top: 11%;
            left: 24%;
            background-color: rgba(0, 0, 0, 0.2);

            margin-left: -25px;
            z-index: 888;
            border-radius: 20px;
        }

        /* for nav link */
        .nav-link {
            color: #000 !important;
            font-size: 14px;
            text-transform: uppercase;
            font-size: 13.5px;
            letter-spacing: 1px;
            line-height: 17px;
            font-family: "Roboto";
            font-weight: 700;
        }

        .nav-link:hover {
            color: #379632 !important;
        }

        /* nav button ittem */
        .item_button {
            border: 2px solid black;
            border-radius: 25px;
            padding-left: 17px;
            padding-right: 17px;
        }

        /* for  navbar margin right */
        .marginright {
            margin-right: 40px;
        }

        /* for  navbar margin right */
        .marginleft {
            margin-left: 40px;
        }
    </style>
</head>

<body>
    <header id="home" style="background: #fff;">
        <!--Navbar -->
        <nav class=" navbar navbar-expand-lg navbar-dark white-color">
            <a class="navbar-brand marginleft" href="#">
                <img src="images/Layout 2ib1.png" alt="" style="width:100%" class="img-responsive">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <ul class="navbar-nav ml-auto marginright">
                    <li class="nav-item ">
                        <a class="nav-link" href="/">
                            Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">
                            ABOUT AIP
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pricing">
                            PRICING
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">
                            CONTACT US
                        </a>
                    </li>

                    <li class="nav-item item_button" v-if="!isToken">
                        <a class="nav-link" href="login">
                            Login
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="form_wrapper" id="app">
        <div class="form_container">
            <div class="title_container">
                <h2>Responsive Registration Form</h2>
            </div>
            <div class="row clearfix">
                <div class="">
                    <form>

                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                            <input type="email" name="email" placeholder="Email" v-model="data.email" required />
                        </div>

                        <div class="row clearfix">
                            <div class="col_half">
                                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                    <input type="text" name="name" placeholder="First Name" v-model="data.first_name" />
                                </div>
                            </div>
                            <div class="col_half">
                                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                    <input type="text" name="name" placeholder="Last Name" v-model="data.last_name" required />
                                </div>
                            </div>
                        </div>
                        <div class="input_field"> <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                            <input type="text" name="email" placeholder="Phone" v-model="data.phone" required />
                        </div>
                        <button type="button" class="btn btn-warning button" v-on:click="getRegister($event)" style=" margin: 0;
    width: 100%;">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js">
    </script>
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
    </script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/rangeslider.js/2.3.0/rangeslider.min.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="js/axios.min.js"></script>
    <script type="text/javascript" src="global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
        var app = new Vue({
            el: '#app',
            data: {

                data: {
                    first_name: '',
                    last_name: '',
                    email: '',
                    phone: '',
                    pricing_plan_id: '',
                },
                registerData: [],
            },
            created: function() {

            },
            mounted: function() {

            },
            methods: {
                getRegister() {
                    let v = this;
                    this.getCookie('plan_id');
                    let planId = this.getCookie('plan_id');
                    console.log(planId);

                    // let first_name = v.first_name;
                    // let last_name = v.last_name;
                    // let email = v.email;
                    // let phone =v.phone;

                    let register = {
                        first_name: v.data.first_name,
                        last_name: v.data.last_name,
                        email: v.data.email,
                        phone: v.data.phone,
                        pricing_plan_id: planId,
                    }
                    https.post('user/verify/', register)
                        .then(function(res) {
                            console.log(res);
                        })
                },
                getCookie: function(cname) {
                    var name = cname + "=";
                    var decodedCookie = decodeURIComponent(document.cookie);
                    var ca = decodedCookie.split(';');
                    for (var i = 0; i < ca.length; i++) {
                        var c = ca[i];
                        while (c.charAt(0) == ' ') {
                            c = c.substring(1);
                        }
                        if (c.indexOf(name) == 0) {
                            return c.substring(name.length, c.length);
                        }
                    }
                    return "";
                },
                setCookie: function(cname, cvalue, exdays) {
                    var d = new Date();
                    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
                    var expires = "expires=" + d.toUTCString();
                    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
                },
                delete_cookie: function(name) {
                    var d = new Date();
                    d.setTime(d.getTime());
                    var expires = "expires=" + d.toUTCString();
                    document.cookie = name + "=" + "" + ";path=/;expires=" + expires;
                },
            }
        })
    </script>
</body>

</html>