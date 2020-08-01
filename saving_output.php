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
            top: 50%;
            left: 45%;
            z-index: 9999;
            background: url(/images/302-loader-1.gif) center no-repeat #fff;
        }

        .trans {
            position: absolute;
            width: 95%;
            height: 795px;
            top: 107px;
            left: 60px;
            background-color: rgba(0, 0, 0, 0.2);
            margin-left: -25px;
            z-index: 888;
            border-radius: 10px;
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
                    <?php include('save_out_config.php'); ?>
                        <div class="col-md-9">
                            <div class="rightwhitesidesignd">
                                <div class="rightwhiteside1">
                                    <div class="d-flex bd-highlight rightwhiteside2">
                                        <div class="mr-auto bd-highlight">
                                            <div class="wellcomedm">
                                                <p>
                                                    <i class="fas fa-file-import wellcomeiconde"></i> Output Results Savings</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form action="">
                                    <div class=" z-depth-4 inputdata_filedesign">
                                        <div class="trans"></div>
                                        <div class="se-pre-con"></div>
                                        <div>
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <div class="Input_Data_Form" style="border-bottom:none;">
                                                        Cash Flow Summary
                                                    </div>
                                                </div>

                                                <div class="ml-auto  bd-highlight">
                                                    <div class="flex-container">
                                                        <div class="monthtextdesign">Select Year</div>
                                                        <div>
                                                            <span class="textmonthdropde1">
                                                                <div class="form-group">
                                                                    <select class="textmonthdropde" v-model="currYear" @change="applyFilter()">
                                                                        <option v-for="(v,i) in years">{{v}}</option>
                                                                    </select>
                                                                </div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                <div style="overflow-x:auto;border-bottom-right-radius: 25px; border-bottom-left-radius: 25px">
                                                    <table v-if="noInput">
                                                        <tr class="table_row_design2" style="background-color: #edf1f9;height: 906px;">
                                                            <td style="text-align:center">
                                                                <p style="font-size:30px; font-weight:bold;color: #9E9E9E;">Oops! No Input Yet.</p>
                                                                <a class="button" href="saving_input"><i class="icon-home"></i> Go back saving input page.</a>
                                                            </td>
                                                        </tr>
                                                    </table>

                                                    <table v-if="!noInput">
                                                        <tr class="table_row_design">
                                                            <th style="padding-left: 20px">P&I & HELOC DETAILS</th>
                                                            <th v-for="(v,i) in savings.output.months">{{v}}</th>
                                                        </tr>
                                                        <tr class="table_row_design1">
                                                            <td style="padding-left: 20px">Original Loan Balance</td>
                                                            <td v-for="(v,i) in savings.output.data.Original_Loan_Balance">$ {{formatAmt(v)}}</td>
                                                        </tr>
                                                        <tr class="table_row_design2">
                                                            <td style="padding-left: 20px">Savings or Emergency Fund Possible
                                                            </td>
                                                            <td v-for="(v,i) in savings.output.data.Savings_or_Emergency_Fund_Possible">$ {{formatAmt(v==null?0:v)}}</td>
                                                        </tr>
                                                        <tr class="table_row_design2">
                                                            <td style="padding-left: 20px">Amount Injected into Loan
                                                            </td>
                                                            <td v-for="(v,i) in savings.output.data.Amount_Injected_into_Loan">$ {{formatAmt(v==null?0:v)}}</td>
                                                        </tr>

                                                        <tr class="table_row_design1">
                                                            <td style="padding-left: 20px">New Loan Balance After
                                                                Injection</td>
                                                            <td v-for="(v,i) in savings.output.data.New_Loan_Balance_After_Injection">$ {{formatAmt(v==null?0:v)}}</td>
                                                        </tr>

                                                        <tr class="table_row_design1">
                                                            <td style="padding-left: 20px">Savings Withdrawn Balance</td>
                                                            <td v-for="(v,i) in savings.output.data.Savings_Withdrawn_Balance">$ {{formatAmt(v==null?0:v)}}</td>
                                                        </tr>

                                                        <tr class="table_row_design2">
                                                            <td style="padding-left: 20px">Savings balance leftover untounched</td>
                                                            <td v-for="(v,i) in savings.output.data.Savings_balance_leftover_untounched">$ {{formatAmt(v==null?0:v)}}</td>
                                                        </tr>

                                                        <tr class="table_row_design2">
                                                            <td style="padding-left: 20px">Regular Income</td>
                                                            <td v-for="(v,i) in savings.output.data.Regular_Income">$ {{formatAmt(v==null?0:v)}}</td>
                                                        </tr>

                                                        <tr class="table_row_design1">
                                                            <td style="padding-left: 20px">One - OFF Income</td>
                                                            <td v-for="(v,i) in savings.output.data.ONE___OFF_Expense">$ {{formatAmt(v==null?0:v)}}</td>

                                                        </tr>

                                                        <tr class="table_row_designnextstep" style="background: #003770 !important">
                                                            <th style="padding-left: 20px">TOTAL INCOME</th>
                                                            <th v-for="(v,i) in savings.output.data.Total_Income">$ {{formatAmt(v==null?0:v)}}</th>
                                                        </tr>

                                                        <tr class="table_row_design1">
                                                            <td style="padding-left: 20px">Regular Expenses</td>
                                                            <td v-for="(v,i) in savings.output.data.Regular_Expenses">$ {{formatAmt(v==null?0:v)}}</td>
                                                        </tr>

                                                        <tr class="table_row_design2">
                                                            <td style="padding-left: 20px">ONE - OFF Expenses</td>
                                                            <td v-for="(v,i) in savings.output.data.ONE___OFF_Expense">$ {{formatAmt(v==null?0:v)}}</td>
                                                        </tr>

                                                        <tr class="table_row_design1">
                                                            <td style="padding-left: 20px">Debt Payments</td>
                                                            <td v-for="(v,i) in savings.output.data.Debt_Payments">$ {{formatAmt(v==null?0:v)}}</td>
                                                        </tr>

                                                        <tr class="table_row_design2">
                                                            <td style="padding-left: 20px">Loan Monthly Payments</td>
                                                            <td v-for="(v,i) in savings.output.data.Loan_Monthly_Payment">$ {{formatAmt(v==null?0:v)}}</td>
                                                        </tr>

                                                        <tr class="table_row_designnextstep" style="background: #003770 !important">
                                                            <th style="padding-left: 20px">TOTAL EXPENSES</th>
                                                            <th v-for="(v,i) in savings.output.data.Total_Expense">$ {{formatAmt(v==null?0:v)}}</th>
                                                        </tr>

                                                        <tr class="table_row_design2">
                                                            <td style="padding-left: 20px">Savings Closing Balance (Forecasted)</td>
                                                            <td v-for="(v,i) in savings.output.data.Savings_Closing_Balance__Forecasted">$ {{formatAmt(v==null?0:v)}}</td>
                                                        </tr>
                                                        <tr class="table_row_design2">
                                                            <td style="padding-left: 20px">Surplus from checking (injected into P&I)</td>
                                                            <td v-for="(v,i) in savings.output.data.Surplus_from_checking__injected_into_P_I">$ {{formatAmt(v==null?0:v)}}</td>
                                                        </tr>
                                                        <!-- <tr class="table_row_design1">
                                                            <td style="padding-left: 20px">HELOC/Revolving Loan Unused
                                                                Amount</td>
                                                            <td v-for="(v,i) in savings.output.data.HELOC_Revolving_Loan_Unused_Amount">$ {{formatAmt(v==null?0:v)}}</td>
                                                        </tr>

                                                       
                                                        <tr class="table_row_design1">
                                                            <td style="padding-left: 20px">Original HELOC/Revolving Loan
                                                                Reduction Amount</td>
                                                            <td v-for="(v,i) in savings.output.data.Original_HELOC_Revolving_Loan_Reduction_Amount">$ {{formatAmt(v==null?0:v)}}</td>
                                                        </tr> -->

                                                        <!-- <tr class="table_row_design1">
                                                            <td style="padding-left: 20px">Left Over from Checking
                                                                Account</td>
                                                            <td v-for="(v,i) in savings.output.data.Left_Over_from_Checking_Account">$ {{formatAmt(v==null?0:v)}}</td>
                                                        </tr> -->
                                                        <tr class="table_row_design2">
                                                            <td style="padding-left: 20px"></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
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
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                months: [],

                showUpdate: false,
                currYear: 0,
                years: [],
                userProData: [],

                noInput: false,
                isActive: false,
                lastYear: 0,
                savings: {
                    input_data: {
                        property_value: '',
                        start_month: '',
                        start_year: '',
                        amount_owed: '',
                        current_payment: '',
                        frequency: '',
                        current_interest_rate: '',
                        terms_of_rate: '',
                        amount_available_in_savings: '',
                        amount_available_for_debt: '',
                        user: 1
                    },
                    error: {},
                    credit_debit: {
                        data: [],
                        addData: {
                            description: '',
                            owed: '',
                            as_of: '',
                            debt_type: '',
                            payment: '',
                            rate: '',
                            user: 1
                        }
                    },
                    lumpsum_expense: {
                        data: [],
                        addData: {
                            description: '',
                            amount: '',
                            when_expended: '',
                            user: 1
                        }
                    },
                    lumpsum_income: {
                        data: [],
                        addData: {
                            description: '',
                            amount: '',
                            when_injecting: '',
                            user: 1
                        }
                    },
                    regular_expense: {
                        showDescription: false,
                        description: [
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
                        ],
                        addData: {
                            description: '',
                            amount: '',
                            frequency: '',
                            start_date: '',
                            end_date: '',
                            user: 1
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
                            income_ends: '',
                            user: 1
                        },
                        data: []
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
                        loan_term_comparison: {
                            Loan_Type: {},
                            Loan_Amount: {},
                            Repayment_Years: {},
                            Repayment_Months: {},
                            Total_Interest_Cost: {},
                        },
                        yearly_balances: {
                            years: [],
                        }
                    },
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
                // let minRange = t.currYear - 5;
                // let maxRange = t.currYear + 5;
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
                t.getSavingTool();
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
                getUser: function() {
                    let t = this;
                    https.get('user/profile')
                        .then(function(res) {
                            console.log(res);
                            t.user = res;
                        });
                },
                changeType: function() {
                    let t = this;
                },
                // ********************* SAVING TOOL ******************************* //
                // Savings Output
                getSavingTool: function() {
                    let t = this;
                    $('.se-pre-con').fadeIn("slow");
                    $('.trans').fadeIn("slow");
                    https.get('inputs/savingtool/inputdata')
                        .then(function(res) {
                            if (res.length > 0) {
                                t.noInput = false;
                                https.get('outputs/savingtool/')
                                    .then(function(res) {
                                        this.isActive = true;
                                        console.log(res);
                                        if (!res.hasValidationError && !res.hasError) {
                                            let cashFlowSummary = JSON.parse(res.CashFlowSummary);
                                            let LoanTermComparison = JSON.parse(res.LoanTermComparison);
                                            let YearlyBalances = JSON.parse(res.YearlyBalances);
                                            cashFlowSummary = t.setArr([cashFlowSummary]);
                                            LoanTermComparison = t.setArr([LoanTermComparison]);
                                            YearlyBalances = t.setArr([YearlyBalances]);
                                            t.savings.output.totalCashFlow = cashFlowSummary[0];
                                            t.savings.output.loan_term_comparison = LoanTermComparison[0];
                                            t.getSavingMonths(cashFlowSummary[0]);
                                            t.setSavingYearly(YearlyBalances[0]);
                                        }

                                    }).then(function() {
                                        $(".se-pre-con").fadeOut("slow");
                                        $('.trans').fadeOut("slow");
                                        this.isActive = false;
                                    });;
                            } else {
                                t.noInput = true;
                                $(".se-pre-con").fadeOut("slow");
                                $('.trans').fadeOut("slow");
                            }
                        });
                },
                //Calculate Saving Debt
                calculateSavingDebt: function() {
                    let t = this;

                    let data = t.savings.input_data;
                    if (Object.keys(t.savings.input_data).length > 0) {
                        https.patch('inputs/savingtool/inputdata/' + t.savings.input_data.id + '/', data)
                            .then(function(res) {
                                console.log(res);
                                if (res.hasValidationError) {
                                    t.savings.error = res.validationError
                                } else {
                                    window.location.href = "Saving_CurrentDebt";
                                }
                            });
                    } else {
                        https.post('inputs/savingtool/inputdata/', data)
                            .then(function(res) {
                                console.log(res);
                                if (res.hasValidationError) {
                                    t.savings.error = res.validationError
                                } else {
                                    window.location.href = "Saving_CurrentDebt";
                                }
                            });
                    }
                    // https.post('inputs/savingtool/inputdata/', data)
                    //     .then(function(res) {
                    //         console.log(res);
                    //     });
                },
                //getSavingMonths
                //getSavingMonths
                getSavingMonths: function(data) {
                    let t = this;
                    let month = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                    let count = 0;
                    let currY = t.currYear;
                    currY = currY.slice(-2);
                    t.savings.output.months = [];
                    for (var i in t.savings.output.totalCashFlow) {
                        let monName = i.split('-');
                        if (currY == monName[1]) {
                            count++;

                            if (month.includes(monName[0])) {
                                // console.log(i)
                                t.savings.output.months.push(i);

                            }
                        }
                        if (count == t.savings.output.months.length) {
                            t.lastYear = '20' + monName[1];
                            t.setSavingToolOutputData(t.savings.output.totalCashFlow);
                        }
                    }
                },

                applyFilter: function() {
                    let t = this;
                    t.savings.output.data = {
                        Original_Loan_Balance: [],
                        Original_HELOC_Credit_Limit: [],
                        Savings_or_Emergency_Fund_Possible: [],
                        HELOC_Interest_Rate: [],
                        Amount_Injected_into_Loan: [],
                        New_Loan_Balance_After_Injection: [],
                        Savings_Withdrawn_Balance: [],
                        Savings_balance_leftover_untounched: [],
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
                        Savings_Closing_Balance__Forecasted: [],
                        Left_Over_from_Checking_Account: [],
                        Surplus_from_checking__injected_into_P_I: []
                    };
                    t.getSavingMonths();
                },



                //setSavingToolOutput
                setSavingToolOutputData: function(d) {
                    let t = this;
                    console.log(d);
                    let aiptoolData = {
                        Original_Loan_Balance: [],
                        Original_HELOC_Credit_Limit: [],
                        Savings_or_Emergency_Fund_Possible: [],
                        HELOC_Interest_Rate: [],
                        Amount_Injected_into_Loan: [],
                        New_Loan_Balance_After_Injection: [],
                        Savings_Withdrawn_Balance: [],
                        Savings_balance_leftover_untounched: [],
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
                        Savings_Closing_Balance__Forecasted: [],
                        Left_Over_from_Checking_Account: [],
                        Surplus_from_checking__injected_into_P_I: []
                    }
                    t.savings.output.months.forEach(function(v, i) {
                        let sortData = t.setArr([d[v]]);
                        aiptoolData.Original_Loan_Balance.push(sortData[0].Original_Loan_Balance);
                        aiptoolData.Original_HELOC_Credit_Limit.push(sortData[0].Original_HELOC_Credit_Limit);
                        aiptoolData.Savings_or_Emergency_Fund_Possible.push(sortData[0].Savings_or_Emergency_Fund_Possible);
                        aiptoolData.HELOC_Interest_Rate.push(sortData[0].HELOC_Interest_Rate);
                        aiptoolData.Amount_Injected_into_Loan.push(sortData[0].Amount_Injected_into_Loan);
                        aiptoolData.New_Loan_Balance_After_Injection.push(sortData[0].New_Loan_Balance_After_Injection);
                        aiptoolData.Savings_Withdrawn_Balance.push(sortData[0].Savings_Withdrawn_Balance);
                        aiptoolData.Savings_balance_leftover_untounched.push(sortData[0].Savings_balance_leftover_untounched);
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
                        aiptoolData.Savings_Closing_Balance__Forecasted.push(sortData[0]['Savings_Closing_Balance_(Forecasted)']);
                        aiptoolData.Left_Over_from_Checking_Account.push(sortData[0].Left_Over_from_Checking_Account);
                        aiptoolData.Surplus_from_checking__injected_into_P_I.push(sortData[0]['Surplus_from_checking_(injected_into_P&I)']);
                        
                        // console.log(sortData);
                        if (t.savings.output.months.length == (i + 1))
                            t.savings.output.data = aiptoolData;
                    })
                },

                //YearlyBalances


                setSavingYearly: function(d) {
                    let t = this;
                    console.log(d);
                    let count = 0;
                    Object.keys(d['Original_P&I_Loan']).forEach(function(key) {
                        console.log(key);
                        t.savings.output.yearly_balances.years.push({
                            years: key
                        });
                        count++;
                        if (Object.keys(d['Original_P&I_Loan']).length == count) {
                            t.setSavingYearlyData(d)
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
                    });
                },

                setSavingYearlyData: function(d) {
                    let t = this;
                    t.savings.output.yearly_balances.years.forEach(function(v, i) {
                        let y = v.years;
                        v.original_p_i_loan = d['Original_P&I_Loan'][y];
                        v.Savings = d['Savings'][y];
                        v.P_I_with_Injections = d['P&I_with_Injections'][y];
                    });
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

            }
        })
    </script>
</body>

</html>