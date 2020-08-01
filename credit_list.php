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
    <link rel="stylesheet" href="css/dashboard_input.css">
    <link rel="stylesheet" href="css/Dashboard_Output.css">
    <link rel="stylesheet" href="css/Contact.css">

    <title>Dashboard</title>
    <style>
        input[type="date"] {
            -webkit-align-items: center;
            padding: 0;
            -webkit-padding-start: 1px;
        }

        .Property_Value1 {
            width: 242px;
        }

        li.liDescription:hover {
            background-color: #007bff;
            color: #fff;
        }

        .uiDescription {
            width: 205px;
            height: 165px;
            overflow-y: scroll;
            overflow-x: hidden;
            position: absolute;
            border: 1px solid rgb(204, 204, 204);
            border-radius: 4px;
            padding: 0px;
            /* margin: 2px 0px 0px; */
            box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 6px 0px;
            background-color: rgb(255, 255, 255);
            list-style-type: none;
        }

        .se-pre-con {
            position: absolute;
            width: 100px;
            height: 100px;
            top: 26%;
            left: 45%;
            z-index: 9999;
            background: url(/images/302-loader-1.gif) center no-repeat #fff;
        }
        .pagination {
            padding-left: 0;
            margin: 20px 0;
            border-radius: 4px;
        }
        .page-item {
          display: inline;
        }
        .pagination > li > a:hover, .pagination > li > span:hover, .pagination > li > a:focus, .pagination > li > span:focus {
            z-index: 3;
            color: #23527c;
            background-color: #eee;
            border-color: #0c2069;
        }
        .pagination > li > a, .pagination > li > span {
            position: relative;
            float: left;
            padding: 6px 12px;
            margin-left: -1px;
            line-height: 1.42857143;
            color: #0c2069;
            text-decoration: none;
            background-color: #fff;
            border: 1px solid #0c2069;
        }
        .pagination > .active > a
        {
            color: #fff;
            background-color: #0c2069 !important;
            border: solid 1px #0c2069 !important;
        }

        .pagination > .active > a:focus
        {   
            color:#fff;
            background-color: #0c2069 !important;
            border: solid 1px #0c2069;
        }
    </style>
</head>

<body>
    <main id="app">
        <section>
            <div class="coinandtree">
                <div class="container">
                    <div class="about_aip">
                        <p>DASHBOARD</p>
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

                        <?php include('credit_config.php'); ?>

                        <div class="col-md-9">
                            <div class="rightwhitesidesignd">
                                <!-- <div class="rightwhiteside1">
                                    <div class="d-flex bd-highlight rightwhiteside2">
                                        <div class="mr-auto bd-highlight">
                                            <div class="wellcomedm">
                                                <p>
                                                    <i class="fas fa-file-export wellcomeiconde"></i> Input Data </p>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <form action="">
                                    <div class="contaner z-depth-4 inputdata_filedesign">
                                        <div>
                                            <div class="Input_Data_Form">
                                                <!-- Credit Card List -->
                                                Credit Card Output
                                            </div>
                                            <div>
                                                <div style="overflow-x:auto;">
                                                    <table>
                                                        <tr class="table_row_design">
                                                            <th style="padding: 0px 50px;text-align: center;">DESCRIPTION</th>
                                                            <th style="padding: 0px 50px;text-align: center;">View</th>
                                                        </tr>
                                                        <tr v-show="filterpagination.length<1" class="table_row_design2" style="background-color: #edf1f9">
                                                            <td style="text-align:center;    padding: 70px 0;" colspan="7">
                                                                <p style="font-size:30px; font-weight:bold;color: #9E9E9E;">Oops! No Input Yet.</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <div class="se-pre-con"></div>
                                                        </tr>
                                                        <tr class="table_row_design1" v-for="(v,i) in filterpagination" :key='v.id'>

                                                            <td style="padding-left: 0; text-align: center;"><span>{{v[0]}}</span></td>
                                                            <td style="padding-left: 0; text-align: center;">
                                                                <div class="p-2 bd-highlight" style="cursor: pointer;width: 50%;float: left;"><a style="text-decoration: underline;" :href="'/credit_output?id='+v[1][1]">Cashflow Summary</a>
                                                                </div>
                                                                <div class="p-2 bd-highlight" style="cursor: pointer;width: 50%;float: left;"><a style="text-decoration: underline;" :href="'/credit_LoanTermComparison_Output?id='+v[1][1]">Loan Term Comparision</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <paginate v-if="settings.loaded && filterpagination.length > 0" :page-count="settings.count" :click-handler="paginate" :prev-text="'Prev'" :next-text="'Next'" :hide-prev-next=true :container-class="'pagination'" :page-class="'page-item'">
                                                                </paginate>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
    <script src="/js/paginate.js"></script>

    <script src="https://unpkg.com/vuejs-datepicker"></script>
    <script src="https://unpkg.com/vuejs-datepicker/dist/locale/translations/en.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>

    <script>
        var app = new Vue({
            el: '#app',
            components: {
                'paginate': VuejsPaginate,
                'vuejs-datepicker': vuejsDatepicker,
            },
            data: {
                en: vdp_translation_en.js,
                months: [],
                filterpagination:[],
                showUpdate: false,
                currYear: 0,
                years: [],
                userProData: [],
                noInput: false,
                lastYear: '',
                noInput: false,
                isActive: false,
                credit: {
                    credit_card_debit: {
                        data: []
                    },
                },
                toolData: {
                    selectedType:3
                },
                user: {},
                userPro: {
                    first_name: '',
                    last_name: '',
                    phone: '',
                    email: ''
                },
                settings:{
                  count:0,
                  loaded:false,
                },
            },
            watch: {
                lastYear: function(v) {
                    let t = this;
                    let date = new Date();
                    let currY = date.getFullYear();
                    for (var i = currY; i <= v; i++) {
                        console.log(v);
                        t.years.push(i);
                    }
                }
            },
            mounted: function() {
                let t = this;
                let date = new Date();
                t.getUserProfile();
                t.getCreditCardDebit();
            },
            methods: {
                getCreditCardDebit: function() {
                    let t = this;
                    $('.se-pre-con').fadeIn("slow");
                    $('.trans').fadeIn("slow");
                    t.noInput = false;
                    https.get('outputs/sorted-cards/')
                        .then(function(res) {
                            console.log(res);
                            t.noInput = false;
                            this.isActive = true;
                            t.credit.credit_card_debit.data = res.output;
                            // res.forEach(function(v, i) {
                            //     v.edit = false;
                            //     v.edit_description = v.description,
                            //         v.debt_type = v.debt_type;
                            //     v.edit_amount_owed = v.amount_owed,
                            //         v.edit_statement_date = v.statement_date,
                            //         v.edit_payment_due_date = v.payment_due_date,
                            //         v.edit_minimum_payment = v.minimum_payment,
                            //         v.edit_rate = v.rate,
                            //         v.error = {};
                            //     t.credit.credit_card_debit.data.push(v);
                            // });
                        }).then(function() {
                            $(".se-pre-con").fadeOut("slow");
                            $('.trans').fadeOut("slow");
                            this.isActive = false;
                            t.settings.count = Math.ceil(t.credit.credit_card_debit.data.length / 10);
                            t.settings.loaded = true;
                            t.paginate(1);
                        });
                },
                getUserProfile: function() {
                    let me = this;

                    https.get('user/profile/')
                        .then(function(res) {
                            console.log(res);
                            me.userPro.email = res.email;
                            me.userPro.first_name = res.first_name;
                            me.userPro.last_name = res.last_name;
                            me.userPro.phone = res.phone
                        });
                },
                //Logout
                logoutUser: function() {
                    window.localStorage.removeItem('admin_identifier');
                    window.location.href = "/index.php";
                },
                paginate: function(page) {
                    var ths = this;
                    ths.filterpagination = [];
                    var start = (page * 10);
                    var last = (start + 10);
                    for (var i = start - 10; i <= last - 10; i++) {
                        if (typeof(ths.credit.credit_card_debit.data[i]) != "undefined")
                            ths.filterpagination.push(ths.credit.credit_card_debit.data[i]);
                    }
                },
            }
        })
    </script>
</body>

</html>