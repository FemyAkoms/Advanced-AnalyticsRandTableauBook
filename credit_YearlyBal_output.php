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
                    <?php include('credit_con_out.php'); ?>

                        <div class="col-md-9">
                            <div class="rightwhitesidesignd">
                                <div class="rightwhiteside1">
                                    <div class="d-flex bd-highlight rightwhiteside2">
                                        <div class="mr-auto bd-highlight">
                                            <div class="wellcomedm">
                                                <p>
                                                    <i class="fas fa-file-import wellcomeiconde"></i> Output Results Credit</p>
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
                                                    <div class="flex-container">
                                                        <div class="monthtextdesign">Select Year</div>
                                                        <div>
                                                            <span class="textmonthdropde1">
                                                                <div class="form-group">
                                                                    <select class="textmonthdropde" v-model="currYear">
                                                                        <option v-for="(v,i) in years">{{v}}</option>
                                                                    </select>
                                                                </div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                <div style="overflow-x:auto;border-bottom-right-radius: 25px;
                                        border-bottom-left-radius: 25px">
                                                    <table class="table table-striped">
                                                        <thead style="background-color: #003770; color: white; font-size: 12px;">
                                                            <tr>
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
                                                        <tbody>
                                                            <tr style="padding-top:12px; padding-bottom:12px;">
                                                                <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                    Original Loan</td>
                                                                <td style="padding-top:12px; padding-bottom:12px;font-weight:400;" v-for="(v,i) in credit.output.months">
                                                                    {{v}}</td>

                                                                <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                    {{v}}</td>
                                                                <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                    {{credit.output.loan_term_comparison.Total_Interest_Cost['0']}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                    Original Loan with AIP Software</td>
                                                                <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                    {{credit.output.loan_term_comparison.Loan_Amount['1']}}</td>

                                                                <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                    {{credit.output.loan_term_comparison.Repayment_Months['1']}}</td>
                                                                <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                    {{credit.output.loan_term_comparison.Total_Interest_Cost['1']}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;color: #003770;">
                                                                    HELOC/Revolving Loan Payoff Period</td>
                                                                <td style="padding-top:12px; padding-bottom:12px;font-weight:400;color: #003770;">
                                                                    {{credit.output.loan_term_comparison.Loan_Amount['2']}}</td>

                                                                <td style="padding-top:12px; padding-bottom:12px;font-weight:400;color: #003770;">
                                                                    {{credit.output.loan_term_comparison.Repayment_Months['2']}}</td>
                                                                <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                    {{credit.output.loan_term_comparison.Total_Interest_Cost['2']}}</td>
                                                            </tr>
                                                        </tbody>
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
                lastYear:'',
                credit: {
                    credit_card_debit: {
                        addData: {
                            description: "",
                            debt_type: "",
                            amount_owed: 0,
                            statement_date: "",
                            payment_due_date: "",
                            income_type: '',
                            minimum_payment: 0,
                            rate: 0,
                            user: 1
                        },
                        data: []
                    },
                    regular_expenses: {
                        addData: {
                            description: '',
                            amount: '',
                            frequency: '',
                            start_date: '',
                            end_date: '',
                            user: 1,
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
                            user: 1,
                        },
                        data: []
                    },
                    output: {
                        months: [],
                        totalCashFlow:[],
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
                    email: '',
                },
                subscriptionDetails: [],
            },
            watch:{
                lastYear: function(v){
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
            
                t.getCreditCardDebit();
                t.getCreditTool();

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
                        t.getMortgageInputData();
                        t.getMorCurrentDebt();
                        t.getLumbSumIncome();
                        t.getLumbSumExp();
                        t.getMorRegExp();
                        t.getMorRegInc();
                        t.getApiToolOutput();
                    }
                },
                // ********************* CREDIT TOOL ******************************* //
                getCreditCardDebit: function() {
                    let t = this;
                    https.get('inputs/creditcardtool/debt/')
                        .then(function(res) {
                            console.log(res);
                            res.forEach(function(v, i) {
                                v.edit = false;
                                v.edit_description = v.description,
                                v.debt_type = v.debt_type;
                                    v.edit_amount_owed = v.amount_owed,
                                    v.edit_statement_date = v.statement_date,
                                    v.edit_payment_due_date = v.payment_due_date,
                                    v.edit_minimum_payment = v.minimum_payment,
                                    v.edit_rate = v.rate,
                                    t.credit.credit_card_debit.data.push(v);
                            });
                        });
                },
                getCreditRegularExpense: function() {
                    let t = this;
                    https.get('inputs/creditcardtool/regular-expense/')
                        .then(function(res) {
                            console.log(res);
                            res.forEach(function(v, i) {
                                v.edit = false;
                                v.edit_description = v.description;
                                v.edit_amount = v.amount;
                                v.edit_frequency = v.frequency;
                                v.edit_start_date = v.start_date;
                                v.edit_end_date = v.end_date;
                                t.credit.regular_expenses.data.push(v);
                            });
                        });
                },
                getCreditRegularIncome: function() {
                    let t = this;
                    https.get('inputs/creditcardtool/regular-income/')
                        .then(function(res) {
                            console.log(res);
                            res.forEach(function(v, i) {
                                v.edit = false;
                                v.edit_description = v.description;
                                v.edit_amount = v.amount;
                                v.edit_frequency = v.frequency;
                                v.edit_income_type = v.income_type;
                                v.edit_income_starts = v.income_starts;
                                v.edit_income_ends = v.income_ends;
                                t.credit.regular_income.data.push(v);
                            });
                        });
                },

               
                addCreditRegularExpense: function() {
                    let t = this;
                    let data = t.credit.regular_expenses.addData;
                    https.post('inputs/creditcardtool/regular-expense/', data)
                        .then(function(res) {
                            console.log(res);
                            if (res.hasValidationError) {
                                alert(res.validationError.message)
                            } else {
                                res.edit = false;
                                res.edit_description = data.description;
                                res.edit_amount = data.amount;
                                res.edit_frequency = data.frequency;
                                res.edit_start_date = data.start_date;
                                res.edit_end_date = data.end_date;
                                t.credit.regular_expenses.data.unshift(res);
                                t.credit.regular_expenses.addData = {
                                    description: '',
                                    amount: '',
                                    frequency: '',
                                    start_date: '',
                                    end_date: '',
                                    user: 1,
                                }
                            }
                        });
                },
                addCreditRegularIncome: function() {
                    let t = this;
                    let data = t.credit.regular_income.addData;
                    https.post('inputs/creditcardtool/regular-income/', data)
                        .then(function(res) {
                            console.log(res);
                            if (res.hasValidationError) {
                                alert(res.validationError.message)
                            } else {
                                res.edit = false;
                                res.edit_description = data.description;
                                res.edit_amount = data.amount;
                                res.edit_frequency = data.frequency;
                                res.edit_income_type = data.income_type;
                                res.edit_income_starts = data.income_starts;
                                res.edit_income_ends = data.income_ends;
                                t.credit.regular_income.data.unshift(res);
                                t.credit.regular_income.addData = {
                                    description: '',
                                    amount: '',
                                    frequency: '',
                                    income_starts: '',
                                    income_type: "",
                                    income_ends: '',
                                    user: 1,
                                }
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
                                    rate: 0,
                                    user: 1
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
                editCreditRegularIncome: function(d) {
                    d.edit = !d.edit;
                },

                saveCredit: function(d) {
                    let data = {
                        description: d.edit_description,
                        debt_type: d.edit_debt_type,
                        amount_owed: d.edit_amount_owed,
                        statement_date: d.edit_statement_date,
                        payment_due_date: d.edit_payment_due_date,
                        minimum_payment: d.edit_minimum_payment,
                        rate: d.edit_rate,
                        user: 1
                    }
                    console.log(data)
                    https.patch('inputs/creditcardtool/regular-expense/' + d.id + '/', data)
                        .then(function(res) {
                            console.log(res);
                            if (res.hasValidationError) {
                                alert(res.validationError.message)
                            } else {
                                d.edit = !d.edit;
                                d.description = d.edit_description;
                                d.debt_type = d.edit.edit_debt_type;
                                d.amount_owed = d.edit_amount_owed;
                                d.statement_date = d.edit_statement_date;
                                d.payment_due_date = d.edit_payment_due_date;
                                d.minimum_payment = d.edit_minimum_payment;
                                d.rate = d.edit_rate;
                            }
                        });
                },
                saveCreditRegularExpense: function(d) {
                    let data = {
                        description: d.edit_description,
                        amount: d.edit_amount,
                        frequency: d.edit_frequency,
                        start_date: d.edit_start_date,
                        end_date: d.edit_end_date,
                        user: 1,
                    }
                    console.log('jhvjgdfgjfgjg', data)
                    https.patch('inputs/creditcardtool/regular-expense/' + d.id + '/', data)
                        .then(function(res) {
                            console.log(d);
                            if (res.hasValidationError) {
                                alert(res.validationError.message)
                            } else {
                                d.edit = !d.edit;
                                d.description = d.edit_description;
                                d.amount = d.edit_amount;
                                d.frequency = d.edit_frequency;
                                d.start_date = d.edit_start_date;
                                d.end_date = d.edit_end_date;
                            }
                        });
                },
                saveCreditRegularIncome: function(d) {
                    let data = {
                        description: d.edit_description,
                        amount: d.edit_amount,
                        frequency: d.edit_frequency,
                        income_type: d.edit_income_type,
                        income_starts: d.edit_income_starts,
                        income_ends: d.edit_income_ends,
                        user: 1,
                    }
                    https.patch('inputs/creditcardtool/regular-expense/' + d.id + '/', data)
                        .then(function(res) {
                            console.log(d);
                            if (res.hasValidationError) {
                                alert(res.validationError.message)
                            } else {
                                d.edit = !d.edit;
                                d.description = d.edit_description;
                                d.amount = d.edit_amount;
                                d.income_type = d.edit_income_type;
                                d.frequency = d.edit_frequency;
                                d.income_starts = d.edit_income_starts;
                                d.income_ends = d.edit_income_ends;
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
                            t.credit.regular_expenses.data.splice(i, 1);
                        });
                },
                deleteCreditRegularIncome: function(d, i) {
                    let t = this;
                    let id = d.id;
                    https.delete('inputs/creditcardtool/regular-income/' + id + '/')
                        .then(function(res) {
                            console.log(res);
                            t.credit.regular_income.data.splice(i, 1);
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
                        if(currY == monName[1]){
                        if (month.includes(monName[0])) {
                                // console.log(i)
                                t.credit.output.months.push(i);
                            }
                        }
                        if (count == t.credit.output.months.length) {
                            t.lastYear = '20'+monName[1];
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

                applyFilter: function(){
                    let t = this;
                    t.credit.output.data={
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