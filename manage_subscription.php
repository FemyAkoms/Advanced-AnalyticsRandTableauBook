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
    <link rel="stylesheet" href="css/dashboard.css">
    <!-- <link rel="stylesheet" href="css/dashboard_input.css">
    <link rel="stylesheet" href="css/Dashboard_Output.css">
    <link rel="stylesheet" href="css/Contact.css"> -->
    <title>Subscription</title>
<style>
    .btnsuccessde{
  background-color:#319a3b;
color: rgb(255, 255, 255);
border-radius: 25px;
height: 33px;
padding-top: 1px;
padding-right: 15px;
padding-bottom: 1px;
padding-left: 15px;
margin-top: 0px;
font-weight: 500;
margin-left: 0px;
}
</style>
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
                        <p>My Subscription</p>
                    </div>
                    <div class="about_aip1">
                        <div class="flex-container">
                            <div class="home_on_image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="my-4 sectionmarginright">
            <div class="">
                <div class="container-fluid sectionbackground">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="leftblueside">
                                <div class="">
                                    <div class="flex-container forpaddin2sideinblue1 desk">

                                        <div class="danial_mitev_textpd">
                                            <div style="padding: 3px 0;">
                                            <div class="danial_mitev_textpd2" data-toggle="modal"
                                                data-target="#exampleModalScrollable"
                                                style="cursor: pointer;margin-top:10px">
                                                <p><i class="fas fa-eye eyeicon"></i>Edit Profile</p>
                                            </div>
                                            <div class="danial_mitev_textpd2"
                                                style="cursor: pointer;margin-top:10px;text-align: center;">
                                                <a class="row mb-2 px-4 formyaccountde1 "
                                                    style="cursor:pointer;color:#fff" href="manage_subscription">
                                                    <i class="fas fa-hand-holding-usd eyeicon"></i>
                                                    My Subscription</a>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2 px-4 formyaccountde" style="cursor:pointer">
                                    </div>
                                    <div class="desk">
                                        <a class="row mb-2 px-4 formyaccountde1 " style="cursor:pointer;"
                                            href="dashboard">
                                            <div class="col-1"><i class="fas fa-file-export"
                                                    style="font-size: 14px; color: white;"></i></div>
                                            <div class="col-9 ttt">
                                                Dashboard
                                            </div>
                                        </a>
                                        <hr style="background-color: rgba(0, 83, 170, 0.99)" class="">
                                        <div class="row mb-2 px-4 formyaccountde1 " style="cursor:pointer"
                                            v-on:click="logoutUser">
                                            <div class="col-1"><i class="fas fa-sign-out-alt"
                                                    style="font-size: 14px; color: white;"></i></div>
                                            <div class="col-10 ttt">
                                                Logout
                                            </div>
                                        </div>
                                    </div>
                                    <nav class="navbar navbar-expand-lg navbar-light mob" style="padding: 1rem;">

                                        <button style="float: right;margin-top: -18px;" class="navbar-toggler"
                                            type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                                            aria-controls="navbarSupportedContent" aria-expanded="false"
                                            aria-label="Toggle navigation">
                                            <span class="fas fa-bars" style="color: #fff"></span>
                                        </button>

                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                            <a class="row mb-2 px-4 formyaccountde1 "
                                                style="cursor:pointer;margin-top:10px" href="dashboard">
                                                <div class="col-11">
                                                    <i class="fas fa-file-export"
                                                        style="font-size: 14px; color: white;"></i>
                                                    <span style="margin: 0 10px;" class="ttt"> Dashboard</span>
                                                </div>

                                            </a>
                                            <div class="row mb-2 px-4 formyaccountde1 mob"
                                                style="cursor:pointer;margin-top: 10px;" data-toggle="modal"
                                                data-target="#exampleModalScrollable">
                                                <div class="col-1"><i class="fas fa-eye eyeicon"
                                                        style="font-size: 14px; color: white;"></i></div>
                                                <div class="col-10 ttt" style="margin-left: 30px;margin-top: -26px;">
                                                    Edit Profile
                                                </div>
                                            </div>
                                            <div class="row mb-2 px-4 formyaccountde1 mob"
                                                style="cursor:pointer;margin-top: 10px;" data-toggle="modal"
                                                data-target="#manageSubscription">
                                                <!-- <div class="col-1"><i class="fas fa-eye eyeicon" style="font-size: 14px; color: white;"></i></div> -->
                                                <div class="col-12 ttt" >
                                                    <a style="cursor:pointer;color:#fff" href="manage_subscription">
                                                    <i class="fas fa-hand-holding-usd eyeicon"></i>My Subscription</a>
                                                </div>
                                            </div>
                                            <div class="row mb-2 px-4 formyaccountde1 mob"
                                                style="cursor:pointer;margin-top: 10px;" v-on:click="logoutUser">
                                                <div class="col-1"><i class="fas fa-sign-out-alt"
                                                        style="font-size: 14px; color: white;"></i></div>
                                                <div class="col-10 ttt" style="margin-left: 30px;margin-top: -26px;">
                                                    Logout
                                                </div>
                                            </div>

                                        </div>
                                    </nav>

                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalScrollableTitle">View Profile</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="">
                                            <div class="container ">
                                                <div class="form-row">
                                                    <div class="col">
                                                        <!-- First name -->
                                                        <div class="md-form">
                                                            <label class="fristname_design">EMAIL </label>
                                                            <input type="text"
                                                                class="emailHover form-control ipfcdesign"
                                                                placeholder="Your Email" v-model="userPro.email"
                                                                disabled required>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <!-- First name -->
                                                        <div class="md-form">
                                                            <label class="fristname_design">FRIST NAME </label>
                                                            <input type="text" class="form-control ipfcdesign"
                                                                placeholder="Your Frist Name"
                                                                v-model="userPro.first_name" required>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <!-- Last name -->
                                                        <div class="md-form">
                                                            <label class="fristname_design">LAST NAME </label>
                                                            <input type="text" class="form-control ipfcdesign"
                                                                placeholder="Your Last Name" v-model="userPro.last_name"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <!-- Last name -->
                                                        <div class="md-form">
                                                            <label class="fristname_design">PHONE </label>
                                                            <input type="text" class="form-control ipfcdesign"
                                                                placeholder="Your Phone Number" v-model="userPro.phone"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary btn-sm"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary btn-sm"
                                            @click.prevent="updateUserProfile($event)">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal end -->

                        <div class="col-md-9">
                            <div class="rightwhitesidesignd">
                                <div class="rightwhiteside1">
                                    <div class="d-flex bd-highlight rightwhiteside2">
                                        <div class="mr-auto bd-highlight">
                                            <div class="wellcomedm">
                                                <p>
                                                    <i class="fas fa-file-export wellcomeiconde"></i> My Subscription
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="overflow-x:auto;" class="container z-depth-4 inputdata_filedesign mt-4">
                                    <table class="table table-responsive d-md-table"
                                        v-if="subscriptionDetails.length>0">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Plan
                                                </th>
                                                <th>
                                                    Active Date
                                                </th>
                                                <th>
                                                    Expiry Date
                                                </th>
                                                <th>
                                                    Status
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="(v,i) in subscriptionDetails">
                                                <td>{{v.plan}}</td>
                                                <td>{{v.created_at}}</td>
                                                <td>{{v.expiry}}</td>
                                                <td>
                                                    <span v-if="v.active">Active</span>
                                                    <span v-if="!v.active">
                                                        <button type="button" class="btn btnsuccessde" @click.prevent="createPayment(v.plan)">
                                                            Renew
                                                        </button>
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div v-if="subscriptionDetails.length == 0"
                                        style="text-align:center;padding: 5rem;">
                                        <h3>
                                            You have no subscription
                                        </h3>
                                        <a href="pricing">
                                            <button type="button" class="btn btnsuccessde">
                                                Subscribe Now
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js">
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
    <script src="js/axios.min.js"></script>
    <script type="text/javascript" src="global.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                subscriptionDetails: [],
                userPro: [],
                orderId:'',
            },
            mounted: function () {
                let t = this;

                t.mySubscription();
                t.getUser();
                // t.changeType();
            },
            methods: {
                customFormatter: function (date) {
                    let t = this;
                    // console.log(date);
                    let dt = moment(date).format('YYYY-MM-DD');
                    //  console.log(dt);
                    return dt;
                },
                mySubscription: function () {
                    let t = this;
                    https.get('subscriptions/my-subscriptions/').then(function (res) {
                        // console.log(res);
                        res.forEach(e => {
                            e.created_at = t.customFormatter(e.created_at);
                            e.expiry = t.customFormatter(e.expiry);
                            t.subscriptionDetails.push(e);
                        });

                    })
                },
                getUser: function () {
                    let t = this;
                    https.get('user/profile')
                        .then(function (res) {
                            // console.log(res);
                            t.userPro = res;
                        });
                },
                updateUserProfile: function () {
                    let me = this;
                    let data = {
                        first_name: me.userPro.first_name,
                        last_name: me.userPro.last_name,
                        phone: me.userPro.phone,
                        // email: me.userPro.email
                    }
                    https.patch('user/profile/', data)
                        .then(function (res) {
                            // console.log(res);
                            me.userPro.push(res);
                        });
                },
                createPayment: function(id){
                    let t = this;
                    let data = {
                        plan: id
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
                             t.mySubscription();
                            // window.location.href="/dashboard.php";
                         }
                    });
                },
                
                //Logout
                logoutUser: function () {
                    window.localStorage.removeItem('admin_identifier');
                    window.location.href = "/";
                },

            }
        });
    </script>
      <script>
        function createButton(){
                    paypal.Buttons({
                    createOrder: function(data, actions) {
                        // This function sets up the details of the transaction, including the amount and line item details.
                        return actions.order.create({
                            purchase_units: [{
                                amount: {
                                    value: '0.02'
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
                        });
                    },
                    onError: function (err) {
                        // windows.location.href="/manage_subscription.php";
                        alert(err);
                        // Show an error page here, when an error occurs
                      }
                }).render('#paypal-button-container');
        }
    </script>
</body>

</html>