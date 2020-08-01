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
    <!-- for about page css -->
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/signup.css">
    <title>Signup</title>

</head>

<body>
    <script src="https://www.paypal.com/sdk/js?client-id=AS7Dk3KSoXFeT3TEiuKiGUf_3805GpNGe6z3h51uXQbC6d2aK3Epl1Y2OQCtVfpg7R-9X3lvBmnK3G9c" id="script-bind">
        // Required. Replace SB_CLIENT_ID with your sandbox client ID.
    </script>
    <main id="app">

        <section>
            <div class="coinandtree">
                <div class="container">
                    <div class="about_aip">
                        <p>REGISTER</p>
                    </div>
                    <div class="about_aip1">
                        <div class="flex-container">
                            <div class="home_on_image">
                                <p>HOME <i class="fas fa-angle-right angleright"></i></p>
                            </div>
                            <div class="ABOUT_AIP_SOFTWARE">
                                <p>REGISTER</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <div class="Registration_From">
                            Registration From
                        </div>
                        <div class="Lorem_Ipsum_is">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </div>
                        <div class="Contact_Information">
                            Contact Information
                        </div>
                        <form>
                            <div class="form-row rowpaddingtb">
                                <div class="col">
                                    <label for="uname" class="lebel1design">First Name</label>
                                    <input class="input1" type="text" placeholder="Enter First Name" name="uname" v-model="data.first_name" v-bind:class="(dataerror.first_name)?'border border-danger':''" required>
                                    <p class="alert-link" v-if="dataerror.first_name" style="color:#a94442;margin:0px !important;"> {{dataerror.first_name}}</p>
                                    </p>
                                </div>
                                <div class="col lastnameml">
                                    <label for="uname" class="lebel1design">Last Name</label>
                                    <input class="input1 " type="text" placeholder="Enter Last Name" name="uname" v-model="data.last_name" v-bind:class="(dataerror.last_name)?'border border-danger':''" required>
                                    <p class="alert-link" v-if="dataerror.last_name" style="color:#a94442;margin:0px !important;"> {{dataerror.last_name}}</p>
                                    </p>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label for="uname" class="lebel1design">Phone</label>
                                    <input class="input1" type="text" placeholder="Enter Your Phone Number" v-model="data.phone" name="uname" 
                                    v-bind:class="(dataerror.phone)?'border border-danger':''" required>
                                    <p class="alert-link" v-if="dataerror.phone" style="color:#a94442;margin:0px !important;"> {{dataerror.phone}}</p>
                                    </p>
                                </div>
                                <div class="col lastnameml">
                                    <label for="uname" class="lebel1design">Email Address</label>
                                    <input class="input1" type="text" placeholder="Enter Your Email Address" v-model="data.email" name="uname"
                                     v-bind:class="(dataerror.email)?'border border-danger':''" required>
                                    <p class="alert-link" v-if="dataerror.email" style="color:#a94442;margin:0px !important;"> {{dataerror.email}}</p>
                                    </p>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label for="uname" class="lebel1design">Password</label>
                                    <input class="input1" type="password" placeholder="Password" v-model="data.password" name="uname" 
                                    v-bind:class="(dataerror.password)?'border border-danger':''" required>
                                    <p class="alert-link" v-if="dataerror.password" style="color:#a94442;margin:0px !important;"> {{dataerror.password}}</p>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">

                    </div>
                </div>
                <!-- for payment part -->
                <div class="Contact_Information">
                    Your Selected Package
                </div>
                <div class="d-flex bd-highlight ">
                    <div class="col-md-10  bd-highlight">
                        <div class="Ahrefs_Standard">
                            <p>{{dataCookie.name}}</p>
                        </div>
                        <div class="monthly_week">
                            <p>Price: <Span class="for999">${{dataCookie.price}} </Span>for {{dataCookie.validity}} days.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-1 bd-highlight" style="    margin: 0 10px;">
                        <div class="subtotalde2">
                            <p>${{dataCookie.price}}</p>
                        </div>
                    </div>
                  
                </div>
                <div class="row subtotalbackgroundd" >
                    <div class="col-md-7"></div>
                    <div class="col-md-3">
                        <div class="subtotalde">
                            <p>Subtotal</p>
                        </div>
                        <div class="subtotalde1">
                            <p>GST(18%)</p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="subtotalde2">
                            <p>${{dataCookie.price}}</p>
                        </div>
                        <div class="subtotalde3">
                            <p>${{dataCookie.price}}</p>
                        </div>
                    </div>
                </div>
                <div class="row subtotalbackgroundd1">
                    <div class="col-md-7">

                    </div>
                    <div class="col-md-3">
                        <div class="fortotalcalculation">
                            <p>TOTAL</p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="fortotalcalculation1">
                            <p>${{dataCookie.price}}</p>
                        </div>
                    </div>
                </div>

                <!-- last portion -->
                <div class="This_purchase_is">
                    This purchase is from our online retailer FastSpring
                </div>
                <div class="FastSpring">
                    FastSpring <span class="Terms_of_Service">Terms of Service</span> and <span class="Terms_of_Service">Privacy Policy</span>
                </div>
                <div class="d-flex bd-highlight complete_order_margin">
                    <div class=" bd-highlight" id="">
                        <!-- <button type="submit" class=" btn complete_order" v-on:click="getRegister($event)">COMPLETE ORDER</button> -->
                        <div class=" bd-highlight" id="">
                            <button type="submit" class=" btn complete_order" v-on:click="getRegister($event)">COMPLETE ORDER</button>
                        </div>

                    </div>
                    <!-- <div id="paypal-button-container" style="justify-content: center; display: flex;"></div> -->
                    <!-- <div class="ml-auto  bd-highlight">
                                <img src="images/Layout 2ib_Signup.png" alt="">
                            </div> -->
                </div>

                <div class=" We_use_industry-standard">
                    We use industry-standard encryption to protect the confidentiality of your personal information. This purchase and product fulfillment are through FastSpring, a trusted reseller for <br>
                    <span class=" We_use_industry-standard1"> http://AvoidInterestPayments.com </span>
                </div>

            </div>
        </section>


        <!-- The Modal -->
        <div class="modal" id="myModal" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header" style="border-bottom: 0px">
                    </div>
                    <!-- Modal Header -->

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div id="paypal-button-container" style="justify-content: center; display: flex;"></div>

                    </div>
                    <div class="modal-footer" style="border:0px">

                    </div>
                </div>
            </div>
        </div>
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
    <script src="js/axios.min.js"></script>
    <script type="text/javascript" src="global.js"></script>
    <script src="https://cdn.jsdelivr.net/rangeslider.js/2.3.0/rangeslider.min.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
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
                    password: ''
                },
                dataerror: {
                    first_name: '',
                    last_name: '',
                    email: '',
                    phone: '',
                    password: ''
                },
                registerData: [],
                dataCookie: '',
                token:null,
                pay: false,
                orderId:0
            },
            created: function() {
                this.dataCookie = JSON.parse(this.getCookie('plan'));
                console.log(this.dataCookie);
                this.token=getToken();
                console.log(this.token);
                
            },
            mounted: function() {
                let t=this;
                if(t.token != null && t.token != undefined){
                      https.get("user/profile/").then(function(res){
                          console.log(res);
                          t.data.first_name = res.first_name;
                          t.data.last_name = res.last_name;
                          t.data.email = res.email;
                          t.data.phone = res.phone;
                      })
                    }
            },
            methods: {
                getRegister(event) {
                    let t = this;
                    if(t.token != null && t.token != undefined){
                        t.createPayment();
                    }else{
                    https.get("user/check/?email="+ t.data.email)
                    .then(function(res) {
                        console.log(res);
                        if(res.exists){
                            t.dataerror.email = "Email Id already exists"
                        }else if(!res.exists){
                            t.register();
                        }
                    });
                }
                    // $('#myModal').modal('show');
                    // return false;
                   
                    // console.log(planId);

                    // let first_name = v.first_name;
                    // let last_name = v.last_name;
                    // let email = v.email;
                    // let phone =v.phone;

                   
                },
                register: function(){
                    let v = this;

                    this.getCookie('plan');
                    let planId = event.id;

                    let register = {
                        first_name: v.data.first_name,
                        last_name: v.data.last_name,
                        password:v.data.password,
                        email: v.data.email,
                        phone: v.data.phone
                    }
                    https.post("user/register/", register)
                        .then(function(res) {
                            console.log($('#paypal-button-container'));
                            // $('div[data-funding-source="paypal"]').click();
                            console.log(res);
                            if (!res.hasValidationError) {
                                v.login({email:register.email, password:register.password});
                            }
                            else if (res.hasValidationError) {
                                v.dataerror = res.validationError;
                            }
                            // if (!res.hasValidationError) {
                            //     $('#myModal').modal('show');
                            //     backdrop = 'static',
                            //     keyboard = false
                            // } else if (res.hasValidationError) {
                            //     v.dataerror = res.validationError;
                            // }
                        });
                },
                login: function(creds){
                    let t = this;
                    console.log(creds)
                    https.post("user/login/", creds)
                    .then(function(res) {
                            console.log(res);
                        if(!res.hasValidationError && res.token){
                            window.localStorage.setItem('admin_identifier', res.token);
                            t.createPayment();
                        } else if (res.hasValidationError) {
                            t.dataerror = res.validationError;
                        }
                    });
                },
                createPayment: function(){
                    let t = this;
                    let data = {
                        plan: t.dataCookie.id
                    }
                    https.post("subscriptions/create-payment/", data)
                    .then(function(res){
                         if (!res.hasValidationError) {
                            
                            t.orderId = res.id;
                            // var my_awesome_script = document.createElement('script');
                            // my_awesome_script.setAttribute('src','https://www.paypal.com/sdk/js?client-id=AS7Dk3KSoXFeT3TEiuKiGUf_3805GpNGe6z3h51uXQbC6d2aK3Epl1Y2OQCtVfpg7R-9X3lvBmnK3G9c&merchant-id='+res.id);
                            // document.head.appendChild(my_awesome_script);
                            // $('#script-bind').attr('src','https://www.paypal.com/sdk/js?client-id=AS7Dk3KSoXFeT3TEiuKiGUf_3805GpNGe6z3h51uXQbC6d2aK3Epl1Y2OQCtVfpg7R-9X3lvBmnK3G9c&merchant-id='+res.id);
                            setTimeout(function(){
                                $('#myModal').modal('show');
                                backdrop = 'static';
                                keyboard = false;
                                createButton();
                            },300)
                            
                        } else if (res.hasValidationError) {
                            v.dataerror = res.validationError;
                        }   
                    });
                },
                subscribeUser: function(){
                    let t = this;
                    let data = {
                        order_id: t.orderId
                    }
                    https.post("subscriptions/create-subscription/", data)
                    .then(function(res){
                         console.log(res);
                         if (!res.hasValidationError) {
                            window.location.href="/dashboard";
                         }
                    });
                },
                getCookie: function(cname) {
                    var name = cname + "=";
                    var decodedCookie = decodeURIComponent(document.cookie);
                    var ca = decodedCookie.split(';');
                    console.log(ca);
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
    <script>
        // paypal.Buttons({
        //     createOrder: function(data, actions) {
        //         // This function sets up the details of the transaction, including the amount and line item details.
        //         return actions.order.create({
        //             purchase_units: [{
        //                 amount: {
        //                     value: '0.2'
        //                 }
        //             }]
        //         });
        //     },
        //     onApprove: function(data, actions) {
        //         // This function captures the funds from the transaction.
        //         return actions.order.capture().then(function(details) {
        //             // This function shows a transaction success message to your buyer.
        //             alert(JSON.stringify(details));
        //             app.subscribeUser();
        //         });
        //     },
        //     onError: function (err) {
        //         alert(err);
        //         // Show an error page here, when an error occurs
        //       }
        // }).render('#paypal-button-container');
        function createButton(){
                    paypal.Buttons({
                    createOrder: function(data, actions) {
                        // This function sets up the details of the transaction, including the amount and line item details.
                        return actions.order.create({
                            purchase_units: [{
                                amount: {
                                    value: app.dataCookie.price
                                }
                            }]
                        });
                    },
                    onApprove: function(data, actions) {
                        // This function captures the funds from the transaction.
                        return actions.order.capture().then(function(details) {
                            // This function shows a transaction success message to your buyer.
                            // alert(JSON.stringify(details));
                            app.subscribeUser();
                        });g
                    },
                    onError: function (err) {
                        windows.location.href="/manage_subscription";
                        // alert(err);
                        // Show an error page here, when an error occurs
                      }
                }).render('#paypal-button-container');
        }
    </script>
</body>

</html>