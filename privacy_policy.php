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
    <link rel="stylesheet" href="css/about.css">
    <title>Privacy Policy</title>
    <style type="text/css">
        .section7onlyblueback1 {
          background-color: white;
          width: 100%;
          height: 120px;
        }

        .copyrighttext {
          font-size: 12px;
          letter-spacing: 0px;
          line-height: 22px;
          color: #aeaeae;
          font-family: "Roboto";
          font-weight: 400;
          margin-top: 75px;
        }
        .copyrighttext2 {
          font-size: 12px;
          letter-spacing: 0px;
          line-height: 22px;
          color: #aeaeae;
          font-family: "Roboto";
          font-weight: 500;
          margin-top: 75px;
          text-align: right;
        }
        .sociallink {
          font-size: 13px;
          letter-spacing: 1px;
          line-height: 24px;
          color: #282828;
          font-family: "Roboto";
          font-weight: 402;
          text-align: center;
          margin-right: 25px;
        }
        .sociallink1 {
          margin-top: 30px;
        }
    </style>
</head>

<body>
    <main id="app">
        <header id="home">
            <!--Navbar -->
            <nav class=" navbar navbar-expand-lg navbar-dark white-color">
                <a class="navbar-brand marginleft" href="#">
                    <img src="images/Layout 2ib1.png" alt="" style="width:100%" class="img-responsive">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <ul class="navbar-nav ml-auto marginright">
                        <li class="nav-item ">
                            <a class="nav-link" href="/">
                                Home
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
                            <a class="nav-link" href="login">
                                Register/Login
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <section>
            <div class="coinandtree">
                <div class="container">
                    <div class="about_aip">
                        <p> PRIVACY POLICY</p>
                    </div>
                    <div class="about_aip1">
                        <div class="flex-container">
                            <div class="home_on_image">
                                <p> <a href="/" class="home_on_image">HOME</a> <i
                                        class="fas fa-angle-right angleright"></i></p>
                            </div>
                            <div class="ABOUT_AIP_SOFTWARE">
                                <p>PRIVACY POLICY</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div>
                <div class="container" style="padding-bottom: 100px;">
                    <div class="ABOUT_AIP_SOFTWARE1">
                        <!-- <p>About AIP Software</p> -->
                        <p>
                            {{pagetitle}}
                        </p>
                    </div>
                    <div class="ABOUT_AIP_SOFTWARE2">
                        <p v-html="pagecontent1"></p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="section7onlyblueback1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="copyrighttext">
                                <p>©2019 Avoid Interest Payments. All Rights Reserved </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="flex-container sociallink1">
                                <div class="sociallink">Facebook</div>
                                <div class="sociallink">Twitter</div>
                                <div class="sociallink">Instagram</div>
                                <div class="sociallink">Youtube</div>
                            </div>
                            <div class="flex-container sociallink1" style="margin: 0px 10%;">
                                <div class="sociallink" style="font-size: 12px;font-weight: 400;"><a href="terms_of_service" style="color: #282828">Terms of Service</a></div>
                                <div class="sociallink" style="font-size: 12px;font-weight: 400;"><a href="privacy_policy" style="color: #282828">Privacy Policy</a></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="copyrighttext2">
                                <p>Designed & Developed By: FocusXgen</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
    </script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
                pagetitle: 'Privacy Policy',
                pagecontent1: '',
                pagecontent2: '',
                isToken:'',
            },
            mounted: function () {
                let t = this;
                if (getToken() == null || getToken() == 'undefined') {
                    t.isToken = false;
                    console.log(t.isToken);
                } else {
                    t.isToken = true;
                    console.log(t.isToken);
                }
                this.getData();
            },
            methods: {
                getData: function () {
                    let me = this;
                    https.get('content/policy')
                        .then(function (res) {
                            console.log(res);
                            me.pagecontent1 = res[0].privacy_policy;
                        });
                },

            }
        })
    </script>
</body>

</html>