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
    <link rel="stylesheet" href="css/pricing.css">
    <title>Pricing</title>
    <style>
        .card_b_t2 p,
        .card_b_t p {
            text-transform: uppercase;
            padding: 15px 0;
            margin: 0px
        }
    </style>
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
    <script src="https://www.paypal.com/sdk/js?client-id=AS7Dk3KSoXFeT3TEiuKiGUf_3805GpNGe6z3h51uXQbC6d2aK3Epl1Y2OQCtVfpg7R-9X3lvBmnK3G9c">
        // Required. Replace SB_CLIENT_ID with your sandbox client ID.
    </script>
    <div id="app">

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
                                <span class="sr-only">(current)</span>
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
        <main>
            <section>
                <div class="coinandtree">
                    <div class="container">
                        <div class="about_aip">
                            <p>PRICING</p>
                        </div>
                        <div class="about_aip1">
                            <div class="flex-container">
                                <div class="home_on_image">
                                    <p> <a href="/" class="home_on_image">HOME</a><i class="fas fa-angle-right angleright"></i></p>
                                </div>
                                <div class="ABOUT_AIP_SOFTWARE">
                                    <p>PRICING</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div>
                    <div class="container">
                        <div class="ABOUT_AIP_SOFTWARE1">
                            <p>AIP Plans & Pricing</p>
                        </div>
                        <div class="ABOUT_AIP_SOFTWARE2" v-html='main_desc'>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div>
                    <div class="container mb-5">
                        <div class="row">
                            <!-- <div class="col-md-3">
                                <span class="monthly1year">

                                    <div>
                                        <div class="card mb-5 mb-lg-0">
                                            <div class="card-body">
                                                <div class="card_b_t2" v-for="(item,k) in featureData">
                                                    <p>{{item.name}}</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </span>
                            </div> -->
                            <div class="col-md-12 offset-md-2">
                                <section class="pricing ">
                                    <div class="container">
                                        <div class="row">
                                            <!-- Free Tier -->
                                            <div class="col-lg-4" v-for="(i,k) in planData">
                                                <div class="card mb-5 mb-lg-0">
                                                    <div v-if="i.popular">
                                                        <div class="pricingtoptext11">
                                                            <div class="pricingtoptext1">
                                                                <span class="forstarimage" v-if="i.popular">
                                                                    <img src="images/Layout 2ib_Pricing.png" alt="">
                                                                </span>
                                                                <p>{{i.name}}</p>
                                                            </div>
                                                            <div class="pricingtoptext2">
                                                                <p>${{i.price}}</p>
                                                            </div>
                                                            <div class="pricingtoptext3">
                                                                <p>{{i.validity}} Days</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div v-if="!i.popular">
                                                        <div class="pricingtoptext">
                                                            <div class="pricingtoptext1">
                                                                <span class="forstarimage" v-if="i.popular">
                                                                    <img src="images/Layout 2ib_Pricing.png" alt="">
                                                                </span>
                                                                <p>{{i.name}}</p>
                                                            </div>
                                                            <div class="pricingtoptext2">
                                                                <p>${{i.price}}</p>
                                                            </div>
                                                            <div class="pricingtoptext3">
                                                                <p>{{i.validity}} Days</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card-body">
                                                        <div class="card_b_t" v-for="(j,l) in i.featureValueData">
                                                            <p>{{j.value}}</p>
                                                        </div>
                                                        <a href="#" class="btn btn-block btn-success rounded-pill text-uppercase" @click.prevent="purchase(i)">GET
                                                            THE PLAN NOW!
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="gtpn2">
                        <p>Got a Question? Or Need More Help <br>Making an Informed Decision? </p>
                    </div>
                    <div class="gtpn3">
                        <a href="contact" class="btn btn-success rounded-pill text-uppercase gtpn1">Contact Us Now
                        </a>
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
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
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
                plan: '',
                planData: [],
                featureData: [],
                main_desc: "",
                isToken: false,
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
                this.getPlan();
                this.getFeature();
                this.getFeatureDescription();
            },
            mounted: function() {

            },
            methods: {
                getFeatureDescription: function() {
                    let t = this;
                    https.get('content/pricing-page/')
                        .then(function(res) {
                            console.log(res);
                            t.main_desc = res[0].main_description
                        });
                },
                getPlan: function() {
                    let p = this;
                    https.get('master/pricingplans/')
                        .then(function(res) {
                            console.log(res);
                            res.forEach(function(v, i) {
                                v.featureValueData = [];
                                p.getFeatureValue(v);
                                p.planData.push(v);
                                console.log(p.planData)

                            });
                        });
                },

                getFeatureValue: function(v) {
                    let me = this;
                    https.get('master/feature-values/')
                        .then(function(res) {
                            res.forEach(function(j, k) {
                                if (v.id == j.plan) {
                                    v.featureValueData.push(j);
                                }
                            });
                        })
                },

                getFeature: function() {
                    let p = this;
                    https.get('master/features/')
                        .then(function(res) {
                            p.featureData = res;
                        });
                },

                purchase: function(event) {
                    let p = this;
                    // this.plan = event;
                    console.log(event);
                    this.setCookie("plan", JSON.stringify(event));
                    window.location.href = "signup";

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
                }
            }
        })
    </script>


</body>

</html>