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
    <!-- <link rel="stylesheet" href="css/index.css"> -->
    <!-- for about page css -->
    <link rel="stylesheet" href="css/Contact.css">
    <title>Contact</title>
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
                                <span class="sr-only">(current)</span>
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
                        <p>CONTACT US</p>
                    </div>
                    <div class="contact_aip1">
                        <div class="flex-container">
                            <div class="home_on_image">
                                <p> <a href="/" class="home_on_image">HOME</a> <i class="fas fa-angle-right angleright"></i></p>
                            </div>
                            <div class="ABOUT_AIP_SOFTWARE">
                                <p>Contact us</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="ABOUT_AIP_SOFTWARE1">
                    Contact AIP
                </div>
                <div class="ABOUT_AIP_SOFTWARE2">
                    <span v-html="pagecontent"></span>
                </div>
            </div>
        </section>
        <section>
            <form action="">
                <div class="container not_a_robot3">
                    <center>
                        <div class="contact_fromdesign">
                            <div class="To_Hear_From_You">
                                We'd Love
                            </div>
                            <div class="To_Hear_From_You1">
                                To Hear From You!
                            </div>

                            <div class="form-row">
                                <div class="col">
                                    <!-- First name -->
                                    <div class="md-form">
                                        <label class="fristname_design">FRIST NAME *</label>
                                        <input type="text" class="form-control ipfcdesign" placeholder="Your Frist Name" v-model="contactData.first_name" required>
                                        <p class="alert-link" v-if="errors.first_name" style="color:#a94442;text-align:left">{{errors.first_name}}</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- Last name -->
                                    <div class="md-form">
                                        <label class="fristname_design">LAST NAME *</label>
                                        <input type="text" class="form-control ipfcdesign" placeholder="Your Last Name" v-model="contactData.last_name" required>
                                        <p class="alert-link" v-if="errors.last_name" style="color:#a94442;text-align:left">{{errors.last_name}}</p>
                                    </div>

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <!-- First name -->
                                    <div class="md-form">
                                        <label class="fristname_design">EMAIL *</label>
                                        <input type="email" class="form-control ipfcdesign" placeholder="Your Email ID" v-model="contactData.email" required>
                                        <p class="alert-link" v-if="errors.email" style="color:#a94442;text-align:left">{{errors.email}}</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- Last name -->
                                    <div class="md-form">
                                        <label class="fristname_design">PHONE *</label>
                                        <input type="text" class="form-control ipfcdesign" placeholder="Your Phone Number" v-model="contactData.phone" required>
                                        <p class="alert-link" v-if="errors.phone" style="color:#a94442;text-align:left">{{errors.phone}}</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div style="display: flex;margin-bottom:-5px;margin-top: 10px;">
                                    <label class="fristname_design1">SUBJECT</label>
                                </div>

                                <div class="select-style">
                                    <select v-model="contactData.subject">
                                        <option value="volvo">Select Subject</option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                        <p class="alert-link" v-if="errors.subject" style="color:#a94442;text-align:left">{{errors.subject}}</p>
                                    </select>

                                </div>
                            </div>
                            <div>
                                <div class="md-form">
                                    <div style="display: flex;margin-bottom:14px;margin-top: -10px;">
                                        <label class="fristname_design1">MESSAGE *</label>
                                    </div>
                                    <textarea type="text" id="message" name="message" rows="1" class="form-control md-textarea textareadesignfontsize" placeholder="Your Message" v-model="contactData.message" required></textarea>
                                    <p class="alert-link" v-if="errors.message" style="color:#a94442;text-align:left">{{errors.message}}</p>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex bd-highlight  not_a_robot2">
                                    <div class="ml-auto p-2 bd-highlight">
                                        <button type="submit" class=" btn complete_order" @click.prevent="addContactData($event)">SUBMIT</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </center>
                </div>
            </form>
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
                pagecontent: '',
                contactData: {
                    first_name: '',
                    last_name: '',
                    email: '',
                    phone: '',
                    subject: '',
                    message: '',
                },
                conData: [],
                errors: {
                    first_name: '',
                    last_name: '',
                    email: '',
                    phone: '',
                    subject: '',
                    message: '',
                },
                isToken:''
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
                this.pageContent();
            },
            methods: {
                pageContent: function() {
                    let t = this;
                    https.get('content/contact-page/')
                        .then(function(res) {
                            console.log(res);
                            t.pagecontent = res[0].main_description;
                        });

                },

                addContactData: function(add) {
                    let me = this;
                    let isError = false;
                    me.errors.first_name = '';
                    me.errors.last_name = '';
                    me.errors.email = '';
                    me.errors.message = '';
                    me.errors.phone = '';
                    me.errors.subject = '';
                    let filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                    let phone = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
                    if (me.contactData.first_name == '') {
                        this.errors.first_name = 'first Name';
                        isError = true;

                    }
                    if (me.contactData.last_name == '') {
                        this.errors.last_name = 'Last Name';
                        isError = true;

                    }
                    if (me.contactData.email == '') {
                        this.errors.email = 'email required';
                        isError = true;

                    }
                    if (!filter.test(me.contactData.email)) {
                        this.errors.email = 'valid email required';
                        isError = true;

                    }
                    if (me.contactData.phone == '') {
                        this.errors.phone = 'phone required';
                        isError = true;

                    }
                    if (!phone.test(me.contactData.phone)) {
                        this.errors.phone = 'Invalid number; must be ten digits';
                        isError = true;

                    }
                    if (me.contactData.message == '') {
                        this.errors.message = 'message required';
                        isError = true;

                    }
                    if (me.contactData.subject == '') {
                        this.errors.subject = 'subject required';
                        isError = true;

                    } else {
                        let data = {
                            first_name: me.contactData.first_name,
                            last_name: me.contactData.last_name,
                            email: me.contactData.email,
                            phone: me.contactData.phone,
                            subject: me.contactData.subject,
                            message: me.contactData.message,
                        }
                        https.post('content/contact-mail/', data)
                            .then(function(res) {
                                console.log(res);
                                me.conData.push(res);
                            });
                        return true;
                    }
                }
            }
        })
    </script>
</body>

</html>