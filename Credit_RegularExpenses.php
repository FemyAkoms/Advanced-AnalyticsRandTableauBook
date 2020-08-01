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
    /* .vdp-datepicker input{
        border: 0!important;
        width: 100%!important;
    } */
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
                                            <div>
                                                <div class="Input_Data_Form">
                                                    Credit Card Regular Expenses

                                                    <span class="resbtn">
                                                        <div class="float-right">                                                
                                                            <button type="button" class="btn btnsuccessde" data-toggle="modal" data-target="#exampleModal">
                                                                Add
                                                            </button>
                                                        </div>
                                                    </span>

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
                                                                            <input type="text" class="form-control modalcontrol" id="exampleFormControlInput1" placeholder="Description" v-model="credit.regular_expenses.addData.description" style="width:100%" :style="[credit.error.description?{'border-color':'red'}:{}]"> 
                                                                        </div>
                                                                        
                                                                        <div class="col-md-6">
                                                                          <input type="text" class="form-control modalcontrol" id="exampleFormControlInput1" placeholder="Amount Owed" v-model="credit.regular_expenses.addData.amount" style="width:100%" :style="[credit.error.amount?{'border-color':'red'}:{}]">
                                                                      </div>
                                                                  </div>
                                                                  <div class="row">
                                                                   <div class="col-md-6">
                                                                       <select class=" modalcontrol" v-model="credit.regular_expenses.addData.frequency" style="width: 100%;" :style="[credit.error.frequency?{'border-color':'red'}:{}]">
                                                                        <option disabled selected value> select frequency </option>
                                                                        <option value="Monthly">Monthly</option>
                                                                        <option value="Monthly">One-Time</option>
                                                                        <option value="Yearly">Yearly</option>
                                                                        <option value="Weekly">Weekly</option>
                                                                        <option value="Bi-Weekly">Bi-Weekly</option>
                                                                        <option value="Half Yearly">Half Yearly</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-6">
                                                                   <vuejs-datepicker :language="en" placeholder="Start Date" class="form-control modalcontrol" v-model="credit.regular_expenses.addData.start_date" :style="[credit.error.start_date?{'border-color':'red'}:{}]"></vuejs-datepicker>

                                                                   <!-- <input type="date" class="form-control modalcontrol" id="exampleFormControlInput1" placeholder="Statement Date" v-model="credit.regular_expenses.addData.start_date" style="width:100%" :style="[credit.error.start_date?{'border-color':'red'}:{}]"> -->
                                                               </div>
                                                           </div>
                                                           <div class="row">
                                                               <div class="col-md-6">
                                                                   <vuejs-datepicker :language="en" placeholder="End Date" class="form-control modalcontrol" v-model="credit.regular_expenses.addData.end_date" :style="[credit.error.end_date?{'border-color':'red'}:{}]"></vuejs-datepicker>

                                                                   <!-- <input type="date" class="form-control modalcontrol" id="exampleFormControlInput1" placeholder="Payment Due Date" v-model="credit.regular_expenses.addData.end_date" style="width:100%" :style="[credit.error.end_date?{'border-color':'red'}:{}]"> -->
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary" @click.prevent="addCreditRegularExpense">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                                <div>
                                    <div style="overflow-x:auto;">
                                        <table>
                                            <tr class="table_row_design">
                                                <th style="padding: 0px 50px;text-align: center;">DESCRIPTION</th>
                                                <th style="padding: 0px 50px;text-align: center;"> AMOUNT</th>
                                                <th style="padding: 0px 50px;text-align: center;">FREQUENCY</th>
                                                <th style="padding: 0px 50px;text-align: center;">INCOME STARTS</th>
                                                <th style="padding: 0px 50px;text-align: center;">INCOME ENDS</th>
                                                <th style="padding: 0px 50px;text-align: center;">ACTION</th>
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
                                                <td style="padding-left: 0; text-align: center;"><span v-if="!v.edit">{{v.description}}</span><span v-if="v.edit"><input style="margin: 0 auto;" type="text" class="form-control control_input_from5" id="exampleFormControlInput1" placeholder="Description" v-model="v.edit_description" style="width:100%" :style="[v.error.description?{'border-color':'red'}:{}]"></span></td>

                                                <td style="padding-left: 0; text-align: center;"><span v-if="!v.edit">
                                                 $ <span v-if="!v.amount">0</span> {{v.amount}}</span><span v-if="v.edit"><input style="margin: 0 auto;" type="text" class="form-control control_input_from5" id="exampleFormControlInput1" placeholder="Amount" v-model="v.edit_amount" style="width:100%" :style="[v.error.amount?{'border-color':'red'}:{}]"></span></td>

                                                <td style="padding-left: 0; text-align: center;"><span v-if="!v.edit">{{v.frequency}}</span><span v-if="v.edit">
                                                    <!-- <input type="text" class="form-control control_input_from5" id="exampleFormControlInput1" placeholder="Frequency" v-model="v.edit_frequency"> -->
                                                    <select style="margin: 0 auto;" class=" textmort1" v-model="v.edit_frequency" style="width: 100%;" :style="[v.error.frequency?{'border-color':'red'}:{}]">
                                                        <option disabled selected value> select frequency </option>
                                                        <option value="Monthly">Monthly</option>
                                                        <option value="Monthly">One-Time</option>
                                                        <option value="Yearly">Yearly</option>
                                                        <option value="Weekly">Weekly</option>
                                                        <option value="Bi-Weekly">Bi-Weekly</option>
                                                        <option value="Half Yearly">Half Yearly</option>
                                                    </select>
                                                </span></td>

                                                <td style="padding-left: 0; text-align: center;"><span v-if="!v.edit">{{v.start_date}}</span><span v-if="v.edit">
                                                    
                                                    <vuejs-datepicker :language="en"  placeholder="Income Starts" class="form-control modalcontrol" v-model="v.edit_start_date" :style="[v.error.start_date?{'border-color':'red'}:{}]"></vuejs-datepicker>
                                                    <!-- <input style="margin: 0 auto;" type="date" class="form-control control_input_from5" id="exampleFormControlInput1" placeholder="Income Starts" v-model="v.edit_start_date" style="width:100%" :style="[v.error.start_date?{'border-color':'red'}:{}]"> -->
                                                </span></td>

                                                <td style="padding-left: 0; text-align: center;"><span v-if="!v.edit">{{v.end_date}}</span><span v-if="v.edit">

                                                    <vuejs-datepicker :language="en" placeholder="Income Ends" class="form-control modalcontrol" v-model="v.edit_end_date" :style="[v.error.end_date?{'border-color':'red'}:{}]"></vuejs-datepicker>
                                                    
                                                    <!-- <input style="margin: 0 auto;" type="date" class="form-control control_input_from5" id="exampleFormControlInput1" placeholder="Income Ends" v-model="v.edit_end_date" style="width:100%" :style="[v.error.end_date?{'border-color':'red'}:{}]"> -->
                                                </span></td>
                                                <td>
                                                    <div class="d-flex bd-highlight ">
                                                        <div class="p-2 bd-highlight" @click.prevent="editCreditRegularExpense(v)" v-if="!v.edit" style="cursor:pointer"><i class="fas fa-pen-alt"></i> Edit</div>
                                                        <div class="p-2 bd-highlight" @click.prevent="saveCreditRegularExpense(v)" v-if="v.edit" style="cursor:pointer"><i class="fas fa-file-alt"></i> Save</div>
                                                        <div class="p-2 bd-highlight" @click.prevent="deleteCreditRegularExpense(v,i)" style="cursor:pointer"><i class="far fa-trash-alt"></i> Delete</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td colspan="2">
                                                    <paginate v-if="settings.loaded && filterpagination.length > 0" :page-count="settings.count" :click-handler="paginate" :prev-text="'Prev'" :next-text="'Next'" :hide-prev-next=true :container-class="'pagination'" :page-class="'page-item'">
                                                    </paginate>
                                                </td>
                                            </tr>
                                            <tr>
                                                            <!-- <td style="padding:0 30px">
                                                                <input type="text" class="form-control control_input_from5" id="exampleFormControlInput1" placeholder="Description" v-model="credit.regular_expenses.addData.description" style="width:100%" :style="[credit.error.description?{'border-color':'red'}:{}]">
                                                            </td>
                                                            <td style="padding:0 30px">
                                                                <input type="text" class="form-control control_input_from5" id="exampleFormControlInput1" placeholder="Amount Owed" v-model="credit.regular_expenses.addData.amount" style="width:100%" :style="[credit.error.amount?{'border-color':'red'}:{}]">
                                                            </td>
                                                            <td style="padding:0 30px">
                                                                <select class=" textmort1" v-model="credit.regular_expenses.addData.frequency" style="width: 100%;" :style="[credit.error.frequency?{'border-color':'red'}:{}]">
                                                                    <option disabled selected value> select frequency </option>
                                                                    <option value="Monthly">Monthly</option>
                                                                    <option value="Monthly">One-Time</option>
                                                                    <option value="Yearly">Yearly</option>
                                                                    <option value="Weekly">Weekly</option>
                                                                    <option value="Bi-Weekly">Bi-Weekly</option>
                                                                    <option value="Half Yearly">Half Yearly</option>
                                                                </select>
                                                            </td>
                                                            <td style="padding:0 30px">
                                                                <input type="date" class="form-control control_input_from5" id="exampleFormControlInput1" placeholder="Statement Date" v-model="credit.regular_expenses.addData.start_date" style="width:100%" :style="[credit.error.start_date?{'border-color':'red'}:{}]">
                                                            </td>
                                                            <td style="padding:0 30px">
                                                                <input type="date" class="form-control control_input_from5" id="exampleFormControlInput1" placeholder="Payment Due Date" v-model="credit.regular_expenses.addData.end_date" style="width:100%" :style="[credit.error.end_date?{'border-color':'red'}:{}]">
                                                            </td> -->
                                                            <td>
                                                                <!-- <button class="btn btnsuccessde" @click.prevent="addCreditRegularExpense">ADD</button> -->
                                                                <button class="btn btnsuccessde"><a href="Credit_RegularIncome" style="text-decoration: none;color: white">NEXT >></a></button>
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
                subscriptionDetails: [],

                noInput: false,
                isActive: false,
                lastYear: '',
                credit: {
                    error: {},
                    credit_card_debit: {
                        addData: {
                            description: "",
                            debt_type: "",
                            amount_owed: 0,
                            statement_date: "",
                            payment_due_date: "",
                            income_type: '',
                            minimum_payment: 0,
                            rate: 0
                        },
                        data: []
                    },
                    regular_expenses: {
                        addData: {
                            description: '',
                            amount: '',
                            frequency: '',
                            start_date: '',
                            end_date: ''
                        },
                        data: []
                    },
                    regular_income: {
                        addData: {
                            description: '',
                            amount: '',
                            frequency: '',
                            income_type: '',
                            income_starts: '',
                            income_ends: ''
                        },
                        data: []
                    },
                    output: {
                        months: [],
                        totalCashFlow: [],
                        data: {
                            Loan_Type: [],
                            Value: [],
                            Years: [],
                            Months: [],
                            Interest_Cost: []
                        },
                        loan_term_comparison: {
                            Loan_Type: {},
                            Value: {},
                            Years: {},
                            Months: {},
                            Interest_Cost: {}
                        }
                    }
                },
                toolData: {
                    Mortgage_Owed: 366306,
                    Interest_Rate: 4.25,
                    Monthly_Installment: 1869.37,
                    Monthly_Income: 12000,
                    Monthly_Expenses: 8500,
                    Current_Debt: 500,
                    Loan_Period: 30,
                    Savings_Available: 5000,
                    Total_Savings: 10000,
                    selectedType: 1,
                    Credit_Owed: 5000,
                    Minimum_Amount: 1700,
                    LumpsumIncome: 5000,
                    LumpsumExpenses: 500,
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
            console.log(t.toolData.selectedType);
            let date = new Date();
            t.currYear = JSON.stringify(date.getFullYear());
                // let currY = date.getFullYear()
                // let minRange = currY - 5;
                // let maxRange = currY + 5;
                // for (var i = minRange; i <= maxRange; i++) {
                //     t.years.push(i);
                // }
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
                t.getCreditRegularExpense();
            },
            methods: {
                customFormatter:function(date) {
                   let t=this;
                   console.log(date);
                   let dt= moment(date).format('YYYY-MM-DD');
                   
                   console.log(dt);
                   return dt;
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
            paginate: function(page) {
                var ths = this;
                ths.filterpagination = [];
                var start = (page * 10);
                var last = (start + 10);
                for (var i = start - 10; i <= last - 10; i++) {
                    if (typeof(ths.credit.regular_expenses.data[i]) != "undefined")
                        ths.filterpagination.push(ths.credit.regular_expenses.data[i]);
                }
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
                        console.log(res);
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
                getCalculate: function() {
                    let me = this;

                    let ptDate = new Date(me.toolData.Payment_Date);
                    let stDate = new Date(me.toolData.Statement_Date);
                    let stMonth = parseInt(stDate.getMonth() + 1) < 10 ? '0' + (stDate.getMonth() + 1) : (stDate.getMonth() + 1);
                    let ptMonth = parseInt(ptDate.getMonth() + 1) < 10 ? '0' + (ptDate.getMonth() + 1) : (ptDate.getMonth() + 1);
                    stDate = stDate.getDate() + '-' + stMonth + '-' + stDate.getFullYear();
                    ptDate = ptDate.getDate() + '-' + ptMonth + '-' + ptDate.getFullYear();
                    let data = {
                        Credit_Owed: me.toolData.Credit_Owed,
                        Interest_Rate: me.toolData.Interest_Rate,
                        Monthly_Expenses: me.toolData.Monthly_Expenses,
                        Monthly_Income: me.toolData.Monthly_Income,
                        Minimum_Amount: me.toolData.Minimum_Amount,
                        Payment_Date: ptDate,
                        Statement_Date: stDate,
                    }
                    https.post('landing/creditcard/', data)
                    .then(function(res) {
                        console.log(res)
                        this.calculatedCreditcard = res;
                    })

                },
                getUser: function() {
                    let t = this;
                    https.get('user/profile')
                    .then(function(res) {
                        console.log(res);
                        t.user = res;
                    });
                },
                submitCalculate: function() {
                    let t = this;
                    // t.toolData.selectedType = 10;
                    console.log(t.toolData.selectedType);
                    // if (t.toolData.selectedType == 4) {
                        console.log(Object.keys(t.mortgage.input).length);
                        let data = t.mortgage.input;
                        if (Object.keys(t.mortgage.input).length > 0) {
                            https.patch('inputs/aiptool/inputdata/' + t.mortgage.input.id + '/', data)
                            .then(function(res) {
                                console.log(res);
                            });
                        } else {
                            https.post('inputs/aiptool/inputdata/', data)
                            .then(function(res) {
                                console.log(res);
                            });
                        }
                    // t.toolData.selectedType = 10;
                    window.location.href = "/Input_CurrentDebt";

                    // }
                },
                changeType: function() {
                    let t = this;
                    t.morCurDebtData = [],
                    t.morLumbSumInc = [],
                    t.morLumbSumExp = [],
                    t.morRegInc = [],
                    t.morRegExp = [],
                    t.credit.data = [];
                    console.log(t.toolData.selectedType);
                    if (t.toolData.selectedType == 1) {
                        // t.getMortgageInputData();
                        // t.getMorCurrentDebt();
                        // t.getLumbSumIncome();
                        // t.getLumbSumExp();
                        // t.getMorRegExp();
                        // t.getMorRegInc();
                        // t.getApiToolOutput();
                    }
                },
                // ********************* CREDIT TOOL ******************************* //
                
                getCreditRegularExpense: function() {
                    let t = this;
                    $('.se-pre-con').fadeIn("slow");
                    $('.trans').fadeIn("slow");
                    t.noInput = false;
                    https.get('inputs/creditcardtool/regular-expense/')
                    .then(function(res) {
                        t.noInput = false;
                        this.isActive = true;
                        console.log(res);
                        res.forEach(function(v, i) {
                            v.edit = false;
                            v.edit_description = v.description;
                            v.edit_amount = v.amount;
                            v.edit_frequency = v.frequency;
                            v.edit_start_date = v.start_date;
                            v.edit_end_date = v.end_date;
                            v.error = {};
                            t.credit.regular_expenses.data.push(v);
                        });
                    }).then(function() {
                        $(".se-pre-con").fadeOut("slow");
                        $('.trans').fadeOut("slow");
                        this.isActive = false;
                        t.settings.count = Math.ceil(t.credit.regular_expenses.data.length / 10);
                        t.settings.loaded = true;
                        t.paginate(1);
                    });
                },

                addCreditRegularExpense: function() {
                    let t = this;
                    t.credit.regular_expenses.addData.start_date=t.customFormatter(t.credit.regular_expenses.addData.start_date);
                    t.credit.regular_expenses.addData.end_date=t.customFormatter(t.credit.regular_expenses.addData.end_date);

                    let data = t.credit.regular_expenses.addData;
                    https.post('inputs/creditcardtool/regular-expense/', data)
                    .then(function(res) {
                        console.log(res);
                        if (res.hasValidationError) {
                            t.credit.error = res.validationError;
                        }
                        if (!res.hasValidationError && !res.validationError) {
                            res.edit = false;
                            res.edit_description = data.description;
                            res.edit_amount = data.amount;
                            res.edit_frequency = data.frequency;
                            res.edit_start_date = data.start_date;
                            res.edit_end_date = data.end_date;
                            res.error = {}
                                t.credit.regular_expenses.data.unshift(res);
                                // t.filterpagination.unshift(res);

                                t.credit.regular_expenses.addData = {
                                    description: '',
                                    amount: '',
                                    frequency: '',
                                    start_date: '',
                                    end_date: ''
                                }
                                t.credit.error = {}
                                t.settings.count = Math.ceil(t.credit.regular_expenses.data.length / 10);
                                t.settings.loaded = true;
                                t.paginate(1);
                            }
                        });
                },

                addCreditCardDebit: function() {
                    let t = this;
                    let data = t.credit.credit_card_debit.addData;
                    https.post('inputs/creditcardtool/debt/', data)
                    .then(function(res) {
                        console.log(res);
                        if (res.hasValidationError) {
                            alert(res.validationError.message)
                        } else {
                            res.edit = false
                            res.edit_description = data.description;

                            res.edit_debt_type = data.debt_type;
                            res.edit_amount_owed = data.amount_owed;
                            res.edit_statement_date = data.statement_date;
                            res.edit_payment_due_date = data.payment_due_date;
                            res.edit_minimum_payment = data.minimum_payment;
                            res.edit_rate = data.rate;
                            t.credit.credit_card_debit.data.unshift(res);
                            t.credit.credit_card_debit.addData = {
                                description: "",
                                amount_owed: 0,
                                statement_date: "",
                                debt_type: "",
                                payment_due_date: "",
                                minimum_payment: 0,
                                rate: 0
                            }
                        }

                    })
                },

                editCredit: function(d) {
                    d.edit = !d.edit;
                },
                editCreditRegularExpense: function(d) {
                    d.edit = !d.edit;
                },



                saveCreditRegularExpense: function(d) {
                    let t=this;
                    d.edit_start_date=t.customFormatter(d.edit_start_date);
                    d.edit_end_date=t.customFormatter(d.edit_end_date);
                    
                    let data = {
                        description: d.edit_description,
                        amount: d.edit_amount,
                        frequency: d.edit_frequency,
                        start_date: d.edit_start_date,
                        end_date: d.edit_end_date,
                    }
                    console.log('jhvjgdfgjfgjg', data)
                    https.patch('inputs/creditcardtool/regular-expense/' + d.id + '/', data)
                    .then(function(res) {
                        console.log(d);
                        if (res.hasValidationError) {
                            d.error = res.validationError;
                        }
                        if (!res.hasValidationError && !res.validationError) {
                            d.edit = !d.edit;
                            d.description = d.edit_description;
                            d.amount = d.edit_amount;
                            d.frequency = d.edit_frequency;
                            d.start_date = d.edit_start_date;
                            d.end_date = d.edit_end_date;
                        }
                    });
                },

                deleteCredit: function(d, i) {
                    let t = this;
                    let id = d.id;
                    https.delete('inputs/creditcardtool/debt/' + id + '/')
                    .then(function(res) {
                        console.log(res);
                        t.credit.credit_card_debit.data.splice(i, 1);
                    });
                },
                deleteCreditRegularExpense: function(d, i) {
                    let t = this;
                    let id = d.id;
                    https.delete('inputs/creditcardtool/regular-expense/' + id + '/')
                    .then(function(res) {
                        console.log(res);
                        t.filterpagination.splice(i, 1);
                    });
                },

                // Credit Output
                getCreditTool: function() {
                    let t = this;
                    https.get('outputs/creditcard/')
                    .then(function(res) {
                        if (!res.hasError && !res.hasValidationError) {
                            let cashFlowSummary = JSON.parse(res.CashFlowSummary);
                            let CreditTermComparison = JSON.parse(res.CreditTermComparison);
                            cashFlowSummary = t.setArr([cashFlowSummary]);
                            t.credit.output.totalCashFlow = cashFlowSummary[0]
                            CreditTermComparison = t.setArr([CreditTermComparison]);
                            t.credit.output.loan_term_comparison = CreditTermComparison[0];
                            console.log(CreditTermComparison);
                            t.getCreditMonths(cashFlowSummary[0]);
                        }
                    });
                },

                //Calculate Saving Debt
                getCreditMonths: function() {
                    let t = this;
                    let month = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                    let count = 0;
                    let currY = t.currYear;
                    currY = currY.slice(-2);
                    t.credit.output.months = [];
                    for (var i in t.credit.output.totalCashFlow) {
                        count++;
                        let monName = i.split('-');
                        if (currY == monName[1]) {
                            if (month.includes(monName[0])) {
                                // console.log(i)
                                t.credit.output.months.push(i);
                            }
                        }
                        if (count == t.credit.output.months.length) {
                            t.lastYear = '20' + monName[1];
                            t.setCreditToolOutputData(t.credit.output.totalCashFlow);
                        }
                    }
                },

                setCreditToolOutputData: function(d) {
                    let t = this;
                    console.log(d);
                    let aiptoolData = {
                        Original_Credit_Card_Balance: [],
                        Amount_to_be_deposited_on_nanth: [],
                        Amount_Owed_on_CC_before_Statement_Date: [],
                        Statement_on_nanth: [],
                        Expense_To_be_withdrawn_on_nanth: [],
                        Present_Amount_Owed_on_CC_after_Expense_withdrawl: [],
                    }
                    t.credit.output.months.forEach(function(v, i) {
                        let sortData = t.setArr([d[v]]);
                        aiptoolData.Original_Credit_Card_Balance.push(sortData[0].Original_Credit_Card_Balance);
                        aiptoolData.Amount_to_be_deposited_on_nanth.push(sortData[0].Amount_to_be_deposited_on_nanth);
                        aiptoolData.Amount_Owed_on_CC_before_Statement_Date.push(sortData[0].Amount_Owed_on_CC_before_Statement_Date);
                        aiptoolData.Statement_on_nanth.push(sortData[0].Statement_on_nanth);
                        aiptoolData.Expense_To_be_withdrawn_on_nanth.push(sortData[0].Expense_To_be_withdrawn_on_nanth);
                        aiptoolData.Present_Amount_Owed_on_CC_after_Expense_withdrawl.push(sortData[0].Present_Amount_Owed_on_CC_after_Expense_withdrawl);
                        // console.log(sortData);
                        if (t.credit.output.months.length == (i + 1))
                            t.credit.output.data = aiptoolData;
                    })
                },

                applyFilter: function() {
                    let t = this;
                    t.credit.output.data = {
                        Original_Credit_Card_Balance: [],
                        Amount_to_be_deposited_on_nanth: [],
                        Amount_Owed_on_CC_before_Statement_Date: [],
                        Statement_on_nanth: [],
                        Expense_To_be_withdrawn_on_nanth: [],
                        Present_Amount_Owed_on_CC_after_Expense_withdrawl: [],
                    };
                    t.getCreditMonths();
                },


                //Logout
                logoutUser: function() {
                    window.localStorage.removeItem('admin_identifier');
                    window.location.href = "/";
                },

                //Set Arr format to Json

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
                    // return "$ " + value.toLocaleString().split(".")[0] + "." + value.toFixed(2).split(".")[1];
                    let val = (value / 1).toFixed(2).replace(',', '.')
                    return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
                },
                getDescriptionVal: function(d, v) {
                    let t = this;
                    console.log(v);
                    if (v == 1) {
                        t.mortgage[d].showDescription = true;
                    } else if (v == 2) {
                        t.savings[d].showDescription = true;
                    }
                },
                editDescriptionVal: function(d, v) {
                    let t = this;
                    if (v == 3) {
                        console.log(t.morRegExp[d]);
                        let description = [
                        'Household',
                        'Accounting Fees',
                        'Baby Sitting',
                        'Charity',
                        'Child Support',
                        'Chiropractic',
                        'Christmas',
                        'Clothing',
                        'Cosmetic Grooming',
                        'Day Care',
                        'Food & Groceries',
                        'HairCut/Styling',
                        'Income Protection Insurance',
                        'Life Insurance',
                        'Magazines',
                        'Massage',
                        'Medical',
                        'Medical Insurcance',
                        'NewsPaper',
                        'Optical',
                        'Pet Care',
                        'School Expenses',
                        'Take Out',
                        'Tithing, Vitamins/Supplements',
                        'Household -Maintenance',
                        'Escrow',
                        'Gardening',
                        'Home Insurance',
                        'Home Maintenance',
                        'Lawn Moving',
                        'Private MGE',
                        'Property Taxes',
                        'Utilities',
                        'Cable/Satellite TV',
                        'Electricity',
                        'Garbabe & Recycling',
                        'Gas',
                        'Internet',
                        'Long Distance',
                        'Propane',
                        'Telephone',
                        'Water Sewer',
                        'Vehicle',
                        'Entertainment',
                        'Alcohol',
                        'Gifts',
                        'Hobby',
                        'Lotto',
                        'Movies',
                        'Night Clubs',
                        'Restaurant',
                        'Sports',
                        'Tobacco',
                        'Vacation',
                        'Video Rental',
                        'other',
                        ];
                        t.morRegExp[d].description = description;
                        t.morRegExp[d].showDescription = true;
                    } else if (v == 4) {
                        console.log(t.morRegExp[d]);
                        let description = [
                        'Household',
                        'Accounting Fees',
                        'Baby Sitting',
                        'Charity',
                        'Child Support',
                        'Chiropractic',
                        'Christmas',
                        'Clothing',
                        'Cosmetic Grooming',
                        'Day Care',
                        'Food & Groceries',
                        'HairCut/Styling',
                        'Income Protection Insurance',
                        'Life Insurance',
                        'Magazines',
                        'Massage',
                        'Medical',
                        'Medical Insurcance',
                        'NewsPaper',
                        'Optical',
                        'Pet Care',
                        'School Expenses',
                        'Take Out',
                        'Tithing, Vitamins/Supplements',
                        'Household -Maintenance',
                        'Escrow',
                        'Gardening',
                        'Home Insurance',
                        'Home Maintenance',
                        'Lawn Moving',
                        'Private MGE',
                        'Property Taxes',
                        'Utilities',
                        'Cable/Satellite TV',
                        'Electricity',
                        'Garbabe & Recycling',
                        'Gas',
                        'Internet',
                        'Long Distance',
                        'Propane',
                        'Telephone',
                        'Water Sewer',
                        'Vehicle',
                        'Entertainment',
                        'Alcohol',
                        'Gifts',
                        'Hobby',
                        'Lotto',
                        'Movies',
                        'Night Clubs',
                        'Restaurant',
                        'Sports',
                        'Tobacco',
                        'Vacation',
                        'Video Rental',
                        'other',
                        ];
                        t.regular_expense[d].description = description;
                        t.regular_expense[d].showDescription = true;
                    }

                },
                selectEditDescription: function(d, v, k) {
                    let t = this;
                    if (v == 3) {
                        t.morRegExp[d].edit_description = k;
                        t.morRegExp[d].showDescription = false;
                    } else if (v == 4) {
                        t.savings.regular_expense.data[d].edit_description = k;
                        t.savings.regular_expense.data[d].showDescription = false;
                        savings.regular_expense.data[d].description = [];
                    }

                }
            }
        })
    </script>
</body>

</html>