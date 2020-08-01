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

        /* .emailHover:hover{
            cursor: not-allowed
        } */
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
                        <?php include('dashboard_config.php'); ?>
                        <div class="col-md-9">
                            <div class="rightwhitesidesignd">
                                <div class="rightwhiteside1">
                                    <div class="d-flex bd-highlight rightwhiteside2">
                                        <div class="mr-auto bd-highlight">
                                            <div class="wellcomedm">
                                                <p>
                                                    <i class="fas fa-file-export wellcomeiconde"></i> Input Data </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form action="">
                                    <div class="contaner z-depth-4 inputdata_filedesign">
                                        <div class="Input_Data_Form">
                                                Current Debt    
                                            <div class="float-right">
                                                            <!-- Button trigger modal -->
                                                <button type="button" class="btn btnsuccessde" data-toggle="modal" data-target="#exampleModal">
                                                Add
                                                </button>
                                            </div>
                                        <!-- Modal -->
                                                <div class="modal  fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">ADD</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">


                                                        <div class="row">
                                                            <div class="col-md-6">
                                                            <input type="text" class="form-control modalcontrol" id="exampleFormControlInput1" placeholder="Description" v-model="mortgage.currentDebt.addData.description" :style="[mortgage.error.description?{'border-color':'red'}:{}]">
                                                              </div>
                                                              <div class="col-md-6">
                                                              <input type="text" class="form-control modalcontrol" id="exampleFormControlInput1" placeholder="Amount" v-model="mortgage.currentDebt.addData.owed" :style="[mortgage.error.owed?{'border-color':'red'}:{}]">
                                                               </div>
                                                        </div>
                                                        <div class="row">
                                                               <div class="col-md-6">
                                                               <vuejs-datepicker :language="en" placeholder="As Of" class="form-control modalcontrol" v-model="mortgage.currentDebt.addData.as_of" :style="[mortgage.error.as_of?{'border-color':'red'}:{}]"></vuejs-datepicker>
                                                               </div>
                                                               <div class="col-md-6">
                                                               <select class="modalcontrol" v-model="mortgage.currentDebt.addData.debt_type" :style="[mortgage.error.debt_type?{'border-color':'red'}:{}]">
                                                                    <option disabled selected value> select debt type </option>
                                                                    <option value="Other">Other</option>
                                                                    <option value="Personal Loan">Personal Loan</option>
                                                                    <option value="Credit Card">Credit Card</option>
                                                                    <option value="Car loan">Car loan</option>
                                                                    <option value="Investment Loan">Investment Loan</option>
                                                                    <option value="Student Loan">Student Loan</option>
                                                                    <option value="2nd Mortgage Loan">2nd Mortgage Loan</option>
                                                                </select>
                                                               </div>
                                                        </div>
                                                        <div class="row">
                                                               <div class="col-md-6">
                                                               <input type="text" class="form-control modalcontrol" id="exampleFormControlInput1" placeholder="Payment" v-model="mortgage.currentDebt.addData.payment" :style="[mortgage.error.payment?{'border-color':'red'}:{}]">
                                                               </div>
                                                               <div class="col-md-6">
                                                               <input type="text" class="form-control modalcontrol" id="exampleFormControlInput1" placeholder="Rate" v-model="mortgage.currentDebt.addData.rate" :style="[mortgage.error.rate?{'border-color':'red'}:{}]">
                                                               </div>
                                                        </div>
                                                     </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary" @click.prevent="addMorCurrentDebt()">Save</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>        
                                         </div>
                                     <div>
                                                <div style="overflow-x:auto;">
                                                    <table>
                                                        <tr class="table_row_design">
                                                            <th style="padding: 0px 50px;     text-align: center;">DESCRIPTION</th>
                                                            <!-- <th>TYPE</th> -->
                                                            <th style="padding: 0px 50px;     text-align: center;">OWED</th>
                                                            <th style="padding: 0px 50px;     text-align: center;">AS OF</th>
                                                            <th style="padding: 0px 50px;     text-align: center;">DEBT TYPE</th>
                                                            <th style="padding: 0px 50px;     text-align: center;">PAYMENT</th>
                                                            <th style="padding: 0px 50px;     text-align: center;">RATE</th>
                                                            <th style="padding: 0px 50px;     text-align: center;">ACTION</th>
                                                        </tr>
                                                        <tr v-show="filtermorRegExp.length<1" class="table_row_design2" style="background-color: #edf1f9">
                                                            <td style="text-align:center;    padding: 70px 0;" colspan="7">
                                                                <p style="font-size:30px; font-weight:bold;color: #9E9E9E;">Oops! No Input Yet.</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <div class="se-pre-con"></div>
                                                        </tr>
                                                        <tr class="table_row_design1" v-for="(item,i) in filtermorRegExp" :key='item.id'>
                                                            <td style="padding-left: 0; text-align: center;">
                                                                <span v-if="!item.edit">{{item.description}}</span>
                                                                <span v-if="item.edit">
                                                                    <input style="margin: 0 auto;" type="text" class="form-control control_input_from4" id="exampleFormControlInput1" placeholder="Description" v-model="item.edit_description" :style="[item.error.description?{'border-color':'red'}:{}]"></span>
                                                            </td>
                                                            <!-- <td>Credit Card</td> -->
                                                            <td style="padding-left: 0; text-align: center;">
                                                                <span v-if="!item.edit">$ {{item.owed}}</span>
                                                                <span v-if="item.edit">
                                                                    <input style="margin: 0 auto;" type="text" class="form-control control_input_from4" id="exampleFormControlInput1" placeholder="Owed" v-model="item.edit_owed" :style="[item.error.owed?{'border-color':'red'}:{}]"></span>
                                                            </td>
                                                            <td style="padding-left: 0; text-align: center;">
                                                                <span v-if="!item.edit">{{item.as_of}}</span><span v-if="item.edit">
                                                                <vuejs-datepicker :language="en" placeholder="As Of" class="form-control modalcontrol" v-model="item.edit_as_of" :style="[item.error.as_of?{'border-color':'red'}:{}]"></vuejs-datepicker>
                                                                </span>
                                                            </td>
                                                            <td style="padding-left: 0; text-align: center;">
                                                                <span v-if="!item.edit">{{item.debt_type}}</span><span v-if="item.edit">
                                                                    <select style="margin: 0 auto;" class=" textmort1" v-model="item.edit_debt_type" :style="[item.error.debt_type?{'border-color':'red'}:{}]">
                                                                        <option value="Other">Other</option>
                                                                        <option value="Personal Loan">Personal Loan</option>
                                                                        <option value="Credit Card">Credit Card</option>
                                                                        <option value="Car loan">Car loan</option>
                                                                        <option value="Investment Loan">Investment Loan</option>
                                                                        <option value="Student Loan">Student Loan</option>
                                                                        <option value="2nd Mortgage Loan">2nd Mortgage Loan</option>
                                                                    </select>
                                                                </span>
                                                            </td>
                                                            <td style="padding-left: 0; text-align: center;">
                                                                <span v-if="!item.edit">$ {{item.payment}}</span><span v-if="item.edit"><input style="margin: 0 auto;" type="text" class="form-control control_input_from4" id="exampleFormControlInput1" placeholder="Payment" v-model="item.edit_payment" :style="[item.error.payment?{'border-color':'red'}:{}]"></span>
                                                            </td>
                                                            <td style="padding-left: 0; text-align: center;">
                                                                <span v-if="!item.edit">{{item.rate}} %</span><span v-if="item.edit"><input style="margin: 0 auto;" type="text" class="form-control control_input_from4" id="exampleFormControlInput1" placeholder="Rate" v-model="item.edit_rate" :style="[item.error.rate?{'border-color':'red'}:{}]"></span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex bd-highlight ">
                                                                    <div class="p-2 bd-highlight" v-on:click="editCurrentDebt(item)" v-if="!item.edit" style="cursor:pointer"><i class="fas fa-pen-alt"></i> Edit</div>
                                                                    <div class="p-2 bd-highlight" v-on:click="saveCurrentDebt(item)" v-if="item.edit" style="cursor:pointer"><i class="fas fa-pen-alt"></i> Save</div>
                                                                    <div class="p-2 bd-highlight" style="cursor:pointer" v-on:click="deleteCurrentDebt(item,i)" style="cursor:pointer"><i class="far fa-trash-alt"></i> Delete</div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            
                                                            <td colspan="2">
                                                                <paginate v-if="settings.loaded && filtermorRegExp.length > 0 " :page-count="settings.count" :click-handler="paginate" :prev-text="'Prev'" :next-text="'Next'" :hide-prev-next=true :container-class="'pagination'" :page-class="'page-item'">
                                                                </paginate>
                                                            </td>
                                                        </tr>
                                                        <tr class="next">
                                                            <td style="display:flex" >
                                                                <button class="btn btnsuccessde float-right" style="width: 80px"><a href="Input_LumpSumIncome" style="text-decoration: none;color: white;">NEXT >></a></button>
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
                morCurDebtData: [],
                showUpdate: false,
                currYear: 0,
                years: [],
                userProData: [],
                filtermorRegExp: [],
                noInput: false,
                isActive: false,
                mortgage: {
                    currentDebt: {
                        data: [],
                        addData: {
                            description: "",
                            owed: "",
                            as_of: "",
                            payment: "",
                            rate: "",
                            debt_type: ""
                        }
                    },
                    error: {}
                },

                toolData: {
                    selectedType: 1,
                    Payment_Date: "14-07-2019",
                    Statement_Date: "19-07-2019",
                    calculatedMortgage: [],
                    calculatedCreditcard: [],
                    calculatedSavings: [],
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
                subscriptionDetails: [],
            },
            mounted: function() {
                let t = this;
                // console.log(t.toolData.selectedType);
                let date = new Date();
                t.currYear = date.getFullYear();
                let minRange = t.currYear - 5;
                let maxRange = t.currYear + 5;
                for (var i = minRange; i <= maxRange; i++) {
                    t.years.push(i);
                }
                t.getUser();
                t.months = [{
                    id: 1,
                    title: "Jan"
                }, {
                    id: 2,
                    title: "Feb"
                }, {
                    id: 3,
                    title: "Mar"
                }, {
                    id: 4,
                    title: "Apr"
                }, {
                    id: 5,
                    title: "May"
                }, {
                    id: 6,
                    title: "Jun"
                }, {
                    id: 7,
                    title: "Jul"
                }, {
                    id: 8,
                    title: "Aug"
                }, {
                    id: 9,
                    title: "Sept"
                }, {
                    id: 10,
                    title: "Oct"
                }, {
                    id: 11,
                    title: "Nov"
                }, {
                    id: 12,
                    title: "Dec"
                }]
                t.getUserProfile();
              // t.mySubscription();
                t.getMorCurrentDebt();

            },
            methods: {
                customFormatter:function(date) {
                   let t=this;
                    // console.log(date);
                     let dt= moment(date).format('YYYY-MM-DD');                    
                     // console.log(dt);
                     return dt;
                },
                getUserProfile: function() {
                    let me = this;

                    https.get('user/profile/')
                        .then(function(res) {
                            // console.log(res);
                            me.userPro.email = res.email;
                            me.userPro.first_name = res.first_name;
                            me.userPro.last_name = res.last_name;
                            me.userPro.phone = res.phone
                        });
                },
                paginate: function(page) {
                    var ths = this;
                    ths.filtermorRegExp = [];
                    var start = (page * 10);
                    var last = (start + 10);
                    for (var i = start - 10; i <= last - 10; i++) {
                        if (typeof(ths.morCurDebtData[i]) != "undefined")
                            ths.filtermorRegExp.push(ths.morCurDebtData[i]);
                    }
                    // console.log(ths.morCurDebtData);
                },
                updateUserProfile: function() {
                    let me = this;
                    let data = {
                        first_name: me.userPro.first_name,
                        last_name: me.userPro.last_name,
                        phone: me.userPro.phone,
                        // email: me.userPro.email
                    }
                    https.patch('user/profile/', data)
                        .then(function(res) {
                            // console.log(res);
                            me.userProData.push(res);
                        });
                },
                mySubscription: function(){
                    let t = this;
                    https.get('subscriptions/my-subscriptions/').then(function(res){
                        console.log(res);
                        t.subscriptionDetails = res;
                    })
                },
                getUser: function() {
                    let t = this;
                    https.get('user/profile')
                        .then(function(res) {
                            // console.log(res);
                            t.user = res;
                        });
                },
                // ********************* MORTGAGE TOOL ******************************* //
                getMorCurrentDebt: function() {
                    let t = this;
                    $('.se-pre-con').fadeIn("slow");
                    $('.trans').fadeIn("slow");
                    t.noInput = false;
                    https.get('inputs/aiptool/currentdebt/')
                        .then(function(res) {
                            console.log('response',res);
                            t.noInput = false;
                            this.isActive = true;
                            res.forEach(function(v, i) {
                                v.edit = false;
                                v.edit_description = v.description;
                                v.edit_owed = v.owed;
                                v.edit_as_of = v.as_of;
                                v.edit_debt_type = v.debt_type;
                                v.edit_payment = v.payment;
                                v.edit_rate = v.rate;
                                v.error = {};
                                t.morCurDebtData.push(v);
                            });

                        }).then(function() {
                            $(".se-pre-con").fadeOut("slow");
                            $('.trans').fadeOut("slow");
                            this.isActive = false;
                            t.settings.count = Math.ceil(t.morCurDebtData.length / 10);
                            t.settings.loaded = true;
                            t.paginate(1);
                        });
                },
                addMorCurrentDebt: function() {
                    let t = this;
                    t.mortgage.currentDebt.addData.as_of=t.customFormatter(t.mortgage.currentDebt.addData.as_of);
                    let data = t.mortgage.currentDebt.addData;
                    // console.log(data);
                    https.post('inputs/aiptool/currentdebt/', data)
                        .then(function(res) {
                            // console.log(res);
                            if (res.hasValidationError) {
                                t.mortgage.error = res.validationError
                            }
                            if (!res.hasValidationError && !res.validationError) {
                                res.edit = false;
                                res.edit_description = data.description;
                                res.edit_owed = data.owed;
                                res.edit_as_of = data.as_of;
                                res.edit_payment = data.payment;
                                res.edit_rate = data.rate;
                                res.edit_debt_type = data.debt_type;
                                res.error = {};
                                t.morCurDebtData.unshift(res);
                                t.mortgage.currentDebt.addData = {
                                    description: "",
                                    owed: "",
                                    as_of: "",
                                    debt_type: "",
                                    income_type: "",
                                    payment: "",
                                    rate: ""
                                }
                                t.mortgage.error = {}
                                t.settings.count = Math.ceil(t.morCurDebtData.length / 10);
                                t.settings.loaded = true;
                                t.paginate(1);
                            }
                        });
                },
                deleteCurrentDebt: function(value, i) {
                    let e = this;
                    https.delete('inputs/aiptool/currentdebt/' + value.id + '/')
                        .then(function(res) {
                            // console.log(res);
                            e.filtermorRegExp.splice(i, 1);
                        });
                },
                saveCurrentDebt: function(value) {
                    let e = this;
                    value.edit_as_of=e.customFormatter(value.edit_as_of);
                    let data = {
                        description: value.edit_description,
                        owed: value.edit_owed,
                        as_of: value.edit_as_of,
                        debt_type: value.edit_debt_type,
                        payment: value.edit_payment,
                        rate: value.edit_rate,
                        
                    }
                    // console.log(data);
                    https.patch('inputs/aiptool/currentdebt/' + value.id + '/', data)
                        .then(function(res) {
                            // console.log(res);
                            if (res.hasValidationError) {
                                value.error = res.validationError;
                            }
                            else {
                                value.edit = false;
                                value.description = value.edit_description;
                                value.owed = value.edit_owed;
                                value.as_of = value.edit_as_of;
                                value.debt_type = value.edit_debt_type;
                                value.payment = value.edit_payment;
                                value.rate = value.edit_rate;
                            }
                        });
                },
                editCurrentDebt: function(value) {
                    // console.log(value);
                    value.edit = !value.edit;
                },
                logoutUser: function() {
                    window.localStorage.removeItem('admin_identifier');
                    window.location.href = "/";
                },
                setArr: function(arr) {
                    arr.forEach(function(e, i) {
                        // Iterate over the keys of object
                        Object.keys(e).forEach(function(key) {
                            // Copy the value
                            var val = e[key],
                                newKey = key.replace(/\s+/g, '_');
                            newKey = newKey.replace(/\/+/g, '_');
                            // Remove key-value from object
                            delete arr[i][key];
                            // Add value with new key
                            arr[i][newKey] = val;
                        });
                    });
                    return arr;
                },
                formatAmt: function(value) {
                    let val = (value / 1).toFixed(2).replace(',', '.')
                    return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
                },
            }
        })
    </script>
</body>

</html>