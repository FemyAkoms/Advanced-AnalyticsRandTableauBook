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
    <title>about</title>
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
                                <span class="sr-only">(current)</span>
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
                        <p>ABOUT AIP SOFTWARE</p>
                    </div>
                    <div class="about_aip1">
                        <div class="flex-container">
                            <div class="home_on_image">
                                <p> <a href="/" class="home_on_image">HOME</a> <i class="fas fa-angle-right angleright"></i></p>
                            </div>
                            <div class="ABOUT_AIP_SOFTWARE">
                                <p>ABOUT AIP SOFTWARE</p>
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
                        <span v-html="pagecontent1"></span>

                        <!-- <p>{{pagecontent2}}</p> -->
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div>
                <div class="container">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" v-if="slider.length > 0">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" v-bind:data-slide-to="m" v-for="(j,m) in slider" v-bind:class="[m==0 ? 'active' : '']"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item" v-for="(b,k) in slider" v-bind:class="[k==0 ? 'active' : '']">
                                <img v-bind:src="b.image" class="d-block w-100" alt="...">
                            </div>
                            <!-- <div class="carousel-item">
                                <img v-bind:src="slider[1].img" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img v-bind:src="slider[2].img" class="d-block w-100" alt="...">
                            </div> -->
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true" style="font-size: 50px; color: #000;"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="backgroundblde">
                <div class="container">

                    <div class="flex-container">
                        <div>
                            <img v-bind:src="sectionimg1" alt="">
                        </div>
                        <div class="Repayment_Calculator3">
                            <div class="Repayment_Calculator">
                                <p>
                                    {{sectiontitle1}}
                                </p>
                            </div>
                            <div class="Repayment_Calculator1">
                                <span v-html="sectioncontent1"></span>

                            </div>
                        </div>

                    </div>

                    <div class="flex-container Repayment_Calculator5">

                        <div class="Repayment_Calculator4">
                            <div class="Repayment_Calculator6">
                                <p>
                                    {{sectiontitle2}}
                                </p>
                            </div>
                            <div class="Repayment_Calculator1">
                                <span v-html="sectioncontent2"></span>

                            </div>
                        </div>
                        <div>
                            <img v-bind:src="sectionimg2" alt="">
                        </div>
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
                pagetitle: 'About AIP Software',
                pagecontent1: '',
                pagecontent2: '',
                slider: [],
                sectiontitle1: '',
                sectioncontent1: '',
                sectionimg1: 'images/AboutUs_img02.png',
                sectiontitle2: '',
                sectioncontent2: '',
                sectionimg2: 'images/AboutUs_img03.png',
                isToken:'',

            },
            mounted: function() {
                 let t = this;
                if (getToken() == null || getToken() == 'undefined') {
                    t.isToken = false;
                    console.log(t.isToken);
                } else {
                    t.isToken = true;
                    console.log(t.isToken);
                }
                this.getAboutData();
                this.getSlider();
            },
            methods: {
                getAboutData: function() {
                    let me = this;
                    https.get('content/about/')
                        .then(function(res) {
                            console.log(res);
                            me.pagecontent1 = res[0].main_description;
                            me.sectiontitle1 = res[0].feature1;
                            me.sectiontitle2 = res[0].feature2;
                            me.sectioncontent1 = res[0].feature1_description;
                            me.sectioncontent2 = res[0].feature2_description;
                        });
                },
                getSlider: function() {
                    let t = this;
                    $('.carousel').carousel('destroy');
                    https.get('content/about-slider/')
                        .then(function(res) {
                            console.log(res);
                            t.slider = res;
                            $('.carousel').carousel();
                        });
                }
            }
        })
    </script>
</body>

</html>