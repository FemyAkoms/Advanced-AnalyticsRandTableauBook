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

        .button {
            font-weight: bold;
            color: #003770;
            font-size: 16px;
            text-decoration: none;
            transition: all .3s linear;
        }

        .button:hover {
            color: #000;
        }

        .se-pre-con {
            position: absolute;
            width: 100px;
            height: 100px;
            top: 24%;
            left: 45%;
            z-index: 9999;
            background: url(/images/302-loader-1.gif) center no-repeat #fff;
        }

        .trans {
            position: absolute;
            width: 95%;
            height: 302px;
            top: 107px;
            left: 60px;
            background-color: rgba(0, 0, 0, 0.2);
            margin-left: -25px;
            z-index: 888;
            border-radius: 10px;
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
                <div class="container-fluid sectionbackground" >
                    <div class="row">


                        <?php include('mor_output_confg.php'); ?>

                        <div class="col-md-9">
                            <div class="rightwhitesidesignd">
                                <div class="rightwhiteside1">
                                    <div class="d-flex bd-highlight rightwhiteside2">
                                        <div class="mr-auto bd-highlight">
                                            <div class="wellcomedm">
                                                <p>
                                                    <i class="fas fa-file-import wellcomeiconde"></i> Output Results Mortgage</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="">
                                        <div class=" z-depth-4 inputdata_filedesign">
                                            <div>
                                                <div class="d-flex bd-highlight">
                                                    <div class=" bd-highlight">
                                                        <div class="Input_Data_Form" style="border-bottom:none;">
                                                            Yearly Balances
                                                        </div>
                                                    </div>

                                                    <div class="ml-auto  bd-highlight">
                                                    </div>
                                                </div>

                                                <div>
                                                    <div style="overflow-x:auto;border-bottom-right-radius: 25px;
                                                    border-bottom-left-radius: 25px">


                                                    <table class="table table-striped">
                                                        <thead style="background-color: #003770; color: white; font-size: 12px;">
                                                            <tr v-if="!noInput">
                                                                <th scope="col" style="padding-top:12px; padding-bottom:12px;font-weight:500;">
                                                                Date</th>
                                                                <th scope="col" style="padding-top:12px; padding-bottom:12px;font-weight:500;">
                                                                Original P&I Loan</th>

                                                                <th scope="col" style="padding-top:12px; padding-bottom:12px;font-weight:500;">
                                                                HELOC</th>
                                                                <th scope="col" style="padding-top:12px; padding-bottom:12px;font-weight:500;">
                                                                P&I with Injections</th>
                                                            </tr>
                                                        </thead>
                                                        <div class="se-pre-con"></div>
                                                        <div class="trans"></div>
                                                        <tbody>

                                                            <tr v-show="mortgage.output.yearly_balances.filterYears<1" class="table_row_design2" style="background-color: #edf1f9;height:172px">
                                                                <td style="text-align:center" colspan="4">
                                                                    <p style="font-size:30px; font-weight:bold;color: #9E9E9E;">Oops! No Input Yet.</p>
                                                                    <a class="button" href="mortgage_input"><i class="icon-home"></i> Go back mortgage input page.</a>
                                                                </td>
                                                            </tr>
                                                            <tr style="padding-top:12px; padding-bottom:12px;" v-for="(v,i) in mortgage.output.yearly_balances.filterYears">
                                                                <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                {{v.years}}</td>
                                                                <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                {{formatAmt(v.original_p_i_loan)}}</td>
                                                                <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                {{formatAmt(v.HELOC)}}</td>
                                                                <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                {{formatAmt(v.P_I_with_Injections)}}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div style="float: right;padding: 0% 2%;">
                                                        <paginate v-if="mortgage.output.yearly_balances.settings.loaded && mortgage.output.yearly_balances.filterYears.length > 0" :page-count="mortgage.output.yearly_balances.settings.count" :click-handler="paginate" :prev-text="'Prev'" :next-text="'Next'" :hide-prev-next=true :container-class="'pagination'" :page-class="'page-item'">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                   <!--  <form action="">
                                        <div class=" z-depth-4 inputdata_filedesign">
                                            <div>
                                                <div class="d-flex bd-highlight">
                                                    <div class=" bd-highlight">
                                                        <div class="Input_Data_Form" style="border-bottom:none;">
                                                            What If I ...
                                                        </div>
                                                    </div>

                                                    <div class="ml-auto  bd-highlight">
                                                    </div>
                                                </div>

                                                <div>
                                                    <div style="overflow-x:auto;border-bottom-right-radius: 25px;
                                                    border-bottom-left-radius: 25px">


                                                    <table class="table table-striped">
                                                        <thead style="background-color: #003770; color: white; font-size: 12px;">
                                                            <tr v-if="!noInput">
                                                                <th scope="col" style="padding-top:12px; padding-bottom:12px;font-weight:500;padding-left: 35px;">
                                                                Action</th>
                                                                <th scope="col" style="padding-top:12px; padding-bottom:12px;font-weight:500;">
                                                                Amount</th>

                                                            </tr>
                                                        </thead>
                                                        <div class="se-pre-con"></div>
                                                        <div class="trans"></div>
                                                        <tbody>

                                                            <tr style="padding-top:12px; padding-bottom:12px;">
                                                                <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                    <div class="Property_Value" style="background-color:transparent">Increase My Income By:</div>
                                                                </td>
                                                                <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                    <div class="input-group mb-3">
                                                                       <input type="text" class="form-control forfromcontrolde" v-model="mortgage.output.yearly_balances.input.income_amount">
                                                                   </div>
                                                               </td>
                                                           </tr>
                                                           <tr style="padding-top:12px; padding-bottom:12px;">
                                                            <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                <div class="Property_Value" style="background-color:transparent">Frequency Of The Income :</div>
                                                            </td>
                                                            <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                <div class="input-group mb-3">
                                                                    <input type="text" class="form-control 
                                                                    forfromcontroldepersen" v-model="mortgage.output.yearly_balances.input.income_frequency"  >
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr style="padding-top:12px; padding-bottom:12px;">
                                                            <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                <div class="Property_Value" style="background-color:transparent">Income Start at :</div>
                                                            </td>
                                                            <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                <div class="input-group mb-3">
                                                                    <input type="text" class="form-control forfromcontroldepersen" v-model="mortgage.output.yearly_balances.input.income_start">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr style="padding-top:12px; padding-bottom:12px;">
                                                            <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                <div class="Property_Value" style="background-color:transparent">Income Ends at:</div>
                                                            </td>
                                                            <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                <div class="input-group mb-3">
                                                                    <input type="text" class="form-control forfromcontroldepersen" v-model="mortgage.output.yearly_balances.input.income_end">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr style="padding-top:12px; padding-bottom:12px;">
                                                            <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                <div class="Property_Value" style="background-color:transparent">Increase My Expense By:</div>
                                                            </td>
                                                            <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                <div class="input-group mb-3">
                                                                    <input type="text" class="form-control forfromcontroldepersen" v-model="mortgage.output.yearly_balances.input.expense_amount">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr style="padding-top:12px; padding-bottom:12px;">
                                                            <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                <div class="Property_Value" style="background-color:transparent">Frequency Of The Expense :</div>
                                                            </td>
                                                            <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                <div class="input-group mb-3">
                                                                    <input type="text" class="form-control forfromcontroldepersen"v-model="mortgage.output.yearly_balances.input.expense_frequency">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr style="padding-top:12px; padding-bottom:12px;">
                                                            <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                <div class="Property_Value" style="background-color:transparent">Expense Start at :</div>
                                                            </td>
                                                            <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                <div class="input-group mb-3">
                                                                    <input type="text" class="form-control forfromcontroldepersen" v-model="mortgage.output.yearly_balances.input.expense_start">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr style="padding-top:12px; padding-bottom:12px;">
                                                            <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                <div class="Property_Value" style="background-color:transparent">Expense Ends at:</div>
                                                            </td>
                                                            <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                <div class="input-group mb-3">
                                                                    <input type="text" class="form-control forfromcontroldepersen"v-model="mortgage.output.yearly_balances.input.expense_end">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr style="padding-top:12px; padding-bottom:12px;">

                                                            <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;" colspan="2">
                                                                <div class="" style="display: flex;justify-content: center;">
                                                                    <button class=" btn complete_order" @click.prevent="CalculateWhat($event)">Calculate</button>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </form> -->
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
    <script>
        var app = new Vue({
            el: '#app',
            components: {
                'paginate': VuejsPaginate
            },
            data: {
                months: [],
                morCurDebtData: [],
                morLumbSumInc: [],
                morLumbSumExp: [],
                morRegInc: [],
                morRegExp: [],
                showUpdate: false,
                currYear: 0,
                years: [],
                userProData: [],
                lastYear: 0,
                noInput: false,
                isActive: false,
                mortgage: {
                    input: {
                        property_value: '',
                        start_month: '',
                        start_year: '',
                        amount_owed: '',
                        current_payment: '',
                        frequency: '',
                        current_interest_rate: '',
                        terms_of_rate: '',
                        approved_amount: '',
                        current_owed_on_heloc: '',
                        projected_injection_to_mortgage: '',
                        recurring_injection_after_heloc: '',
                        heloc_interest_rate: '',
                        income_type: '',
                        user: 1
                    },
                    output: {
                        months: [],
                        totalCashFlow: [],
                        data: {
                            Loan_Type: [],
                            Loan_Amount: [],
                            Repayment_Years: [],
                            Repayment_Months: [],
                            Total_Interest_Cost: [],
                        },
                        filteredData: {
                            Loan_Type: [],
                            Loan_Amount: [],
                            Repayment_Years: [],
                            Repayment_Months: [],
                            Total_Interest_Cost: [],
                        },
                        loan_term_comparison: {
                            Loan_Type: [],
                            Loan_Amount: [],
                            Repayment_Years: [],
                            Repayment_Months: [],
                            Total_Interest_Cost: [],
                        },
                        yearly_balances: {
                            scenario_flag:false,
                            income_flag:false,
                            expense_flag:false,
                            input:{
                                income_amount:'',
                                income_frequency:'',
                                income_start:'',
                                income_end:'',
                                expense_amount:'',
                                expense_frequency:'',
                                expense_start:'',
                                expense_end:'',
                            },
                            years: [],
                            filterYears:[],
                            settings:{
                                count:0,
                                loaded:false,
                            }
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
                subscriptionDetails:[],
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
                // let currY = date.getFullYear();
                // let maxRange = currY + 10;
                // for (var i = currY; i <= maxRange; i++) {
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
                // t.getSavingTool();
                // t.getCreditTool();

                t.changeType();
            },
            methods: {
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
                    if (me.toolData.selectedType == 4) {
                        let data = {
                            Mortgage_Owed: me.toolData.Mortgage_Owed,
                            Interest_Rate: me.toolData.Interest_Rate,
                            Monthly_Installment: me.toolData.Monthly_Installment,
                            Monthly_Income: me.toolData.Monthly_Income,
                            Monthly_Expenses: me.toolData.Monthly_Expenses,
                            Current_Debt: me.toolData.Current_Debt,
                            Loan_Period: me.toolData.Loan_Period,
                            LumpsumIncome: me.toolData.LumpsumIncome,
                            LumpsumExpenses: me.toolData.LumpsumExpenses
                        }
                        https.post('landing/mortgage/', data)
                        .then(function(res) {
                            console.log(res)
                            this.calculatedMortgage = res;
                        })
                    } else if (me.toolData.selectedType == 5) {
                        let data = {
                            Mortgage_Owed: me.toolData.Mortgage_Owed,
                            Interest_Rate: me.toolData.Interest_Rate,
                            Monthly_Installment: me.toolData.Monthly_Installment,
                            Monthly_Income: me.toolData.Monthly_Income,
                            Total_Savings: me.toolData.Total_Savings,
                            Savings_Available: me.toolData.Savings_Available,
                            Monthly_Expenses: me.toolData.Monthly_Expenses,
                            Current_Debt: me.toolData.Current_Debt,
                            Loan_Period: me.toolData.Loan_Period,
                        }
                        https.post('landing/savings/', data)
                        .then(function(res) {
                            console.log(res)
                            this.calculatedSavings = res;
                        })
                    } else if (me.toolData.selectedType == 6) {
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
                    }
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
                    // t.morCurDebtData = [],
                    // t.morLumbSumInc = [],
                    // t.morLumbSumExp = [],
                    // t.morRegInc = [],
                    // t.morRegExp = [],
                    // t.credit.data = [];
                    console.log(t.toolData.selectedType);
                    if (t.toolData.selectedType == 1) {

                        t.getApiToolOutput();
                    }

                },
                CalculateWhat:function(){
                  let t = this;
                  t.mortgage.output.yearly_balances.scenario_flag=true;

                  let data = t.mortgage.output.yearly_balances.input;
                  let uri ='?scenario_flag=true';
                  let payLoad = {
                    scenario_flag: t.mortgage.output.yearly_balances.scenario_flag,
                    // income_flag:t.mortgage.output.yearly_balances.income_flag,
                    // expense_flag:t.mortgage.output.yearly_balances.expense_flag,
                    income_amount:t.mortgage.output.yearly_balances.input.income_amount,
                    income_frequency:t.mortgage.output.yearly_balances.input.income_frequency,
                    income_start:t.mortgage.output.yearly_balances.input.income_start,
                    income_end:t.mortgage.output.yearly_balances.input.income_end,
                    expense_amount:t.mortgage.output.yearly_balances.input.expense_amount,
                    expense_frequency:t.mortgage.output.yearly_balances.input.expense_frequency,
                    expense_start:t.mortgage.output.yearly_balances.input.expense_start,
                    expense_end:t.mortgage.output.yearly_balances.input.expense_end,
                }
                if(data.income_amount.length >0 || data.income_start.length >0 || data.income_end.length >0 || data.income_frequency.length >0){
                    payLoad.income_flag = true;
                    uri =uri+'&income_amount='+t.mortgage.output.yearly_balances.input.income_amount+'&income_start='+t.mortgage.output.yearly_balances.input.income_start+'&income_end='+t.mortgage.output.yearly_balances.input.income_end+'&income_frequency='+t.mortgage.output.yearly_balances.input.income_frequency+'&income_flag=true';
                }
                if(data.expense_amount.length >0 || data.expense_frequency.length >0 || data.expense_start.length >0 || data.expense_end.length >0){
                    payLoad.expense_flag=true;
                    uri =uri+'&expense_amount='+t.mortgage.output.yearly_balances.input.expense_amount+'&expense_start='+t.mortgage.output.yearly_balances.input.expense_start+'&expense_end='+t.mortgage.output.yearly_balances.input.expense_end+'&expense_frequency='+t.mortgage.output.yearly_balances.input.expense_frequency+'&expense_flag=true';
                }
                t.getApiToolOutput(uri)



            },
                //Calculate Saving Debt
                // getApiToolOutput: function(payLoad=null) {
                //     let t = this;
                //     $('.se-pre-con').fadeIn("slow");
                //     $('.trans').fadeIn("slow");

                //     https.get('/inputs/aiptool/inputdata/')
                //     .then(function(res) {

                //         console.log(res.length);
                //         if(res.length > 0) {
                //             t.noInput = false;
                //             let uri = https.get('outputs/mortgage/');
                //             if(payLoad != null){
                //                uri = https.get('outputs/mortgage/'+payLoad)
                //                uri.then(function(res) {
                //                 this.isActive = true;
                //                 let YearlyBalances = JSON.parse(res.YearlyBalances);
                //                 YearlyBalances = t.setArr([YearlyBalances]);
                //                 t.setAipYearly(YearlyBalances[0])
                //             }).then(function() {
                //                 $(".se-pre-con").fadeOut("slow");
                //                 $('.trans').fadeOut("slow");
                //                 this.isActive = false;
                //             });
                //         }
                //         else{
                //            https.get('outputs/mortgage/')
                //            .then(function(res) {
                //             this.isActive = true;
                //             t.noInput = false;
                //             let cashFlowSummary = JSON.parse(res.CashFlowSummary);
                //             let LoanTermComparison = JSON.parse(res.LoanTermComparison);
                //             let YearlyBalances = JSON.parse(res.YearlyBalances);
                //             cashFlowSummary = t.setArr([cashFlowSummary]);
                //             LoanTermComparison = t.setArr([LoanTermComparison]);
                //             YearlyBalances = t.setArr([YearlyBalances]);
                //             t.mortgage.output.totalCashFlow = cashFlowSummary[0];
                //             t.mortgage.output.loan_term_comparison = LoanTermComparison[0];
                //             t.getAipMonths(cashFlowSummary[0]);
                //             t.setAipYearly(YearlyBalances[0])
                //         }).then(function() {
                //             $(".se-pre-con").fadeOut("slow");
                //             $('.trans').fadeOut("slow");
                //             this.isActive = false;
                //         });
                //     }
                // }});
                // },

                getApiToolOutput: function() {
                    let t = this;
                    $('.se-pre-con').fadeIn("slow");
                    $('.trans').fadeIn("slow");
                    https.get('/inputs/aiptool/inputdata/')
                        .then(function(res) {
                            console.log(res.length);
                            if (res.length > 0) {
                                https.get('outputs/mortgage/')
                                    .then(function(res) {
                                        this.isActive = true;
                                        let YearlyBalances = JSON.parse(res.YearlyBalances);
                                        YearlyBalances = t.setArr([YearlyBalances]);
                                        t.setAipYearly(YearlyBalances[0])
                                    }).then(function() {
                                        $(".se-pre-con").fadeOut("slow");
                                        $('.trans').fadeOut("slow");
                                        this.isActive = false;
                                    });
                            }
                            else{
                                t.noInput = true;
                                $(".se-pre-con").fadeOut("slow");
                                $('.trans').fadeOut("slow");
                            }
                        });
                },
                calculateSavingDebt: function() {
                    let t = this;
                    t.toolData.selectedType = 15;
                    let data = t.savings.input_data;
                    console.log(data);
                    https.post('inputs/savingtool/inputdata/', data)
                    .then(function(res) {
                        console.log(res);
                    });
                },
                //getSavingMonths
                getAipMonths: function() {
                    let t = this;
                    let month = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                    let count = 0;
                    let currY = t.currYear;
                    currY = currY.slice(-2);

                    t.mortgage.output.months = [];
                    for (var i in t.mortgage.output.totalCashFlow) {

                        console.log(count);
                        let monName = i.split('-');
                        if (currY == monName[1]) {
                            count++;
                            if (month.includes(monName[0])) {
                                t.mortgage.output.months.push(i);
                            }
                        }
                        if (count == t.mortgage.output.months.length) {
                            t.lastYear = '20' + monName[1];
                            t.setAipToolOutputData(t.mortgage.output.totalCashFlow);
                        }

                    }
                },

                

                //setAipToolOutputData
                setAipToolOutputData: function(d) {
                    let t = this;
                    let aiptoolData = {
                        Original_Loan_Balance: [],
                        Original_HELOC_Credit_Limit: [],
                        HELOC_Interest_Rate: [],
                        Amount_Injected_into_Loan: [],
                        New_Loan_Balance_After_Injection: [],
                        HELOC_Revolving_Loan_Opening_Balance: [],
                        HELOC_Revolving_Loan_Unused_Amount: [],
                        Regular_Income: [],
                        ONE___OFF_Income: [],
                        Total_Income: [],
                        Regular_Expenses: [],
                        ONE___OFF_Expense: [],
                        Debt_Payments: [],
                        Loan_Monthly_Payment: [],
                        Total_Expense: [],
                        Total_Interest_Due: [],
                        Original_HELOC_Revolving_Loan_Reduction_Amount: [],
                        Loan_Closing_Balance__Projected_Forecast: [],
                        Left_Over_from_Checking_Account: []
                    }
                    t.mortgage.output.months.forEach(function(v, i) {
                        let sortData = t.setArr([d[v]]);
                        console.log('ddddd', sortData);
                        aiptoolData.Original_Loan_Balance.push(sortData[0].Original_Loan_Balance);
                        aiptoolData.Original_HELOC_Credit_Limit.push(sortData[0].Original_HELOC_Credit_Limit);
                        aiptoolData.HELOC_Interest_Rate.push(sortData[0].HELOC_Interest_Rate);
                        aiptoolData.Amount_Injected_into_Loan.push(sortData[0].Amount_Injected_into_Loan);
                        aiptoolData.New_Loan_Balance_After_Injection.push(sortData[0].New_Loan_Balance_After_Injection);
                        aiptoolData.HELOC_Revolving_Loan_Opening_Balance.push(sortData[0].HELOC_Revolving_Loan_Opening_Balance);
                        aiptoolData.HELOC_Revolving_Loan_Unused_Amount.push(sortData[0].HELOC_Revolving_Loan_Unused_Amount);
                        aiptoolData.Regular_Income.push(sortData[0].Regular_Income);
                        aiptoolData.ONE___OFF_Income.push(sortData[0]['ONE_-_OFF_Income']);
                        aiptoolData.Total_Income.push(sortData[0].Total_Income);
                        aiptoolData.Regular_Expenses.push(sortData[0].Regular_Expenses);
                        aiptoolData.ONE___OFF_Expense.push(sortData[0]['ONE_-_OFF_Expense']);
                        aiptoolData.Debt_Payments.push(sortData[0].Debt_Payments);
                        aiptoolData.Loan_Monthly_Payment.push(sortData[0].Loan_Monthly_Payment);
                        aiptoolData.Total_Expense.push(sortData[0].Total_Expense);
                        aiptoolData.Total_Interest_Due.push(sortData[0].Total_Interest_Due);
                        aiptoolData.Original_HELOC_Revolving_Loan_Reduction_Amount.push(sortData[0].Original_HELOC_Revolving_Loan_Reduction_Amount);
                        aiptoolData.Loan_Closing_Balance__Projected_Forecast.push(sortData[0]['Loan_Closing_Balance_(Projected_Forecast)']);
                        aiptoolData.Left_Over_from_Checking_Account.push(sortData[0].Left_Over_from_Checking_Account);
                        if (t.mortgage.output.months.length == (i + 1))
                            t.mortgage.output.data = aiptoolData;
                    })
                },
                //setSavingToolOutput



                applyFilter: function() {
                    let t = this;
                    t.mortgage.output.data = {
                        Original_Loan_Balance: [],
                        Original_HELOC_Credit_Limit: [],
                        HELOC_Interest_Rate: [],
                        Amount_Injected_into_Loan: [],
                        New_Loan_Balance_After_Injection: [],
                        HELOC_Revolving_Loan_Opening_Balance: [],
                        HELOC_Revolving_Loan_Unused_Amount: [],
                        Regular_Income: [],
                        ONE___OFF_Income: [],
                        Total_Income: [],
                        Regular_Expenses: [],
                        ONE___OFF_Expense: [],
                        Debt_Payments: [],
                        Loan_Monthly_Payment: [],
                        Total_Expense: [],
                        Total_Interest_Due: [],
                        Original_HELOC_Revolving_Loan_Reduction_Amount: [],
                        Loan_Closing_Balance__Projected_Forecast: [],
                        Left_Over_from_Checking_Account: []
                    };
                    t.getAipMonths();
                },

                //YearlyBalances

                setAipYearly: function(d) {
                    let t = this;
                    console.log(d);
                    let count = 0;
                    Object.keys(d['Original_P&I_Loan']).forEach(function(key) {
                        console.log(key);
                        t.mortgage.output.yearly_balances.years.push({
                            years: key
                        });
                        count++;
                        if (Object.keys(d['Original_P&I_Loan']).length == count) {
                            t.setAipYearlyData(d)
                        }
                    });
                },

                setAipYearlyData: function(d) {
                    let t = this;
                    t.mortgage.output.yearly_balances.years.forEach(function(v, i) {
                        console.log(d);
                        console.log(v.years);
                        let y = v.years;
                        v.original_p_i_loan = d['Original_P&I_Loan'][y];
                        v.HELOC = d['HELOC'][y];
                        v.P_I_with_Injections = d['P&I_with_Injections'][y];
                        if(t.mortgage.output.yearly_balances.years.length == (i+1)){
                            t.mortgage.output.yearly_balances.settings.count = Math.ceil(t.mortgage.output.yearly_balances.years.length / 10);
                            t.mortgage.output.yearly_balances.settings.loaded = true;
                            t.paginate(1);
                        }
                    });
                },
                paginate: function(page) {
                    var ths = this;
                    ths.mortgage.output.yearly_balances.filterYears = [];
                    var start = (page * 10);
                    var last = (start + 10);
                    for (var i = start - 10; i <= last - 10; i++) {
                        if (typeof(ths.mortgage.output.yearly_balances.years[i]) != "undefined")
                            ths.mortgage.output.yearly_balances.filterYears.push(ths.mortgage.output.yearly_balances.years[i]);
                    }
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
                selectDescription: function(d, v, k) {
                    let t = this;
                    if (v == 1) {
                        t.mortgage[d].addmorRegExp.description = k;
                        t.mortgage[d].showDescription = false;
                    } else if (v == 2) {
                        t.savings[d].addData.description = k;
                        t.savings[d].showDescription = false;
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

                },
                formatAmt: function(value) {
                    // return "$ " + value.toLocaleString().split(".")[0] + "." + value.toFixed(2).split(".")[1];
                    let val = (value / 1).toFixed(2).replace(',', '.')
                    return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
                }
            }
        })
    </script>
</body>

</html>