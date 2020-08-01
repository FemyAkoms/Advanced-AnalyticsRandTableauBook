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
    <!-- for about page css -->
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>

</head>

<body>
    <main id="app">
        <header id="home">
            <!--Navbar -->
            <nav class=" navbar navbar-expand-lg navbar-dark white-color">
                <a class="navbar-brand marginleft" href="/">
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
                        <li class="nav-item item_button" v-if="isToken">
                            <a class="nav-link" href="dashboard">
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item item_button" v-if="!isToken">
                            <a class="nav-link" href="pricing">
                                Register
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <section>
            <div class="forloginbackground">

                <div class="logincontentdiv">
                    <div class="contentstartd">
                        <div class="contentstared11">
                            <img src="images/Layout 2ib1.png" alt="" style="width: 50%;margin: 0 auto;display: block;" class="img-responsive">
                            <div class="logintoaip">
                                Log In to <br>
                                <span class="logintoaip1">AIP Software</span>
                            </div>
                            <form action="">
                                <div class="container">
                                    <p class="alert-link" v-if="loginError.non_field_errors" style="color:#a94442; text-align:center">{{loginError.non_field_errors}}</p>
                                    <div class="Email_or_User_Name">
                                        <label for="uname" class="lebel1design">Email</label>
                                        <input class="input1" type="text" placeholder="Enter Your Email" name="uname" v-model="login.email" required>
                                        <p class="alert-link" v-if="loginError.email" style="color:#a94442;margin:0px !important;"> {{loginError.email}}</p>
                                        </p>
                                    </div>

                                    <div class="d-flex bd-highlight">
                                        <div class=" bd-highlight">
                                            <label for="psw" class="lebel1design">Password</label>
                                        </div>
                                        <div class="ml-auto  bd-highlight ">
                                            <a href="#" class="lebel1design1">Forgot Password?</a>
                                        </div>

                                    </div>
                                    <input class="input1" type="password" placeholder="Enter Password" v-model="login.password" name="psw" required>
                                    <p class="alert-link" v-if="loginError.password" style="color:#a94442;margin:0px !important;"> {{loginError.password}}</p>
                                    </p>
                                    <button class="loginde" @click.prevent="loginSubmit($event)">Log In</button>
                                    <div class="ml-auto  bd-highlight ">
                                        <p style="text-align: center;">Don't have an account? <a href="pricing.php" class="lebel1design1"> Register</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>




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
    <script type="text/javascript">
        var app = new Vue({
            el: "#app",
            data: {
                login: {
                    email: "",
                    password: ""
                },
                loginError: {

                    non_field_errors: ''
                },
                isToken:''
            },
            created: function() {
                 let t = this;
                if (getToken() == null || getToken() == 'undefined') {
                    t.isToken = false;
                    console.log(t.isToken);
                } else {
                    t.isToken = true;
                    console.log(t.isToken);
                }
            },
            methods: {
                loginSubmit: function() {
                    let me = this;
                    let data = {
                        email: this.login.email,
                        password: this.login.password,
                    }
                    https.post("user/login/", data)
                        .then(function(res) {

                            if (res.hasValidationError) {
                                me.loginError = res.validationError;

                            } else {
                                console.log(res);
                                window.localStorage.setItem('admin_identifier', res.token);
                                window.location.href = "/dashboard.php"
                            }
                        });
                }
            }
        });
    </script>

</body>

</html>