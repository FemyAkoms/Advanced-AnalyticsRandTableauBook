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
                                            <div>
                                                <div class="Input_Data_Form">
                                                    Input Data Form
                                                </div>
                                                <div class="idfdesign">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="labeldata">Property Value</label>
                                                            <div class="flex-container">
                                                                <div class="Property_Value">Property Value</div>
                                                                <div>
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text fordollerdesign" id="basic-addon1">$</span>
                                                                        </div>
                                                                        <input type="text" class="form-control forfromcontrolde" placeholder="450,000.00" aria-label="Username" aria-describedby="basic-addon1" v-model="mortgage.input.property_value" :style="[mortgage.error.property_value?{'border-color':'red'}:{}]">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                          <label class="labeldata">Amount Owed As of Start of Tool</label>
                                                          <div class="flex-container">
                                                            <div class="Property_Value">Amount Owed As of Start of Tool</div>
                                                            <div>
                                                                <div class="input-group mb-3">
                                                                    <input type="text" class="form-control forfromcontroldepersen" placeholder="4.25" aria-label="Username" aria-describedby="basic-addon1" v-model="mortgage.input.amount_owed" :style="[mortgage.error.amount_owed?{'border-color':'red'}:{}]">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text fordollerdesignpersen" id="basic-addon1">$</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- </div> -->
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                     <label class="labeldata">Start Months Of Tool</label>
                                                     <div class="flex-container">
                                                        <div class="Property_Value"> Start Months Of Tool </div>
                                                        <div class="m-42">
                                                            <!-- <span class="textmort2"> -->
                                                                <div class="input-group mb-3">
                                                                    <select class=" textmort1" v-model="mortgage.input.start_month" :style="[mortgage.error.start_month?{'border-color':'red'}:{}]">
                                                                        <option value="1">January</option>
                                                                        <option value="2">February</option>
                                                                        <option value="3">March</option>
                                                                        <option value="4">April</option>
                                                                        <option value="5">May</option>
                                                                        <option value="6">June</option>
                                                                        <option value="7">July</option>
                                                                        <option value="8">August</option>
                                                                        <option value="9">September</option>
                                                                        <option value="10">October</option>
                                                                        <option value="11">November</option>
                                                                        <option value="12">December</option>
                                                                    </select>
                                                                </div>
                                                                <!-- </span> -->
                                                            </div>
                                                        </div>
                                                        <!-- </div> -->
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="labeldata">Start Year Of Tool</label>
                                                        <div class="flex-container">
                                                            <div class="Property_Value"> Start Year Of Tool</div>
                                                            <div>
                                                                <div class="input-group mb-3">
                                                                    <input type="text" class="form-control forfromcontrolde" placeholder="Years" aria-label="Username" aria-describedby="basic-addon1" v-model="mortgage.input.start_year" :style="[mortgage.error.start_year?{'border-color':'red'}:{}]">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- </div> -->
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="labeldata">Current Payment for Loan</label>
                                                        <div class="flex-container">
                                                            <div class="Property_Value">Current Payment for Loan</div>
                                                            <div>
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text fordollerdesign" id="basic-addon1">$</span>
                                                                    </div>
                                                                    <input type="text" class="form-control forfromcontrolde" placeholder="450,000.00" aria-label="Username" aria-describedby="basic-addon1" v-model="mortgage.input.current_payment" :style="[mortgage.error.current_payment?{'border-color':'red'}:{}]">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="labeldata">Frequency of Payment</label>
                                                        <div class="flex-container">
                                                            <div class="Property_Value">Frequency of Payment</div>
                                                            <div class="m-42">
                                                                <div class="input-group mb-3">
                                                                    <select class=" textmort1" v-model="mortgage.input.frequency" :style="[mortgage.error.frequency?{'border-color':'red'}:{}]">
                                                                        <option disabled selected value> select frequency </option>
                                                                        <option value="Monthly">Monthly</option>
                                                                        <!-- <option value="Monthly">One-Time</option>
                                                                        <option value="Yearly">Yearly</option> -->
                                                                        <option value="Weekly">Weekly</option>
                                                                        <option value="Bi-Weekly">Bi-Weekly</option>
                                                                        <!-- <option value="Half Yearly">Half Yearly</option> -->
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- </div> -->
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="labeldata">Current Interest rate</label>
                                                        <div class="flex-container">
                                                            <div class="Property_Value">Current Interest rate</div>
                                                            <div>
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text fordollerdesign" id="basic-addon1">%</span>
                                                                    </div>
                                                                    <input type="text" class="form-control forfromcontrolde" placeholder="450,000.00" aria-label="Username" aria-describedby="basic-addon1" v-model="mortgage.input.current_interest_rate" :style="[mortgage.error.current_interest_rate?{'border-color':'red'}:{}]">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="labeldata">Terms of Rate</label>
                                                        <div class="flex-container">
                                                            <div class="Property_Value">Terms of Rate</div>
                                                            <div>
                                                                <div class="input-group mb-3">
                                                                    <input type="text" class="form-control forfromcontroldepersen" placeholder="4.25" aria-label="Username" aria-describedby="basic-addon1" v-model="mortgage.input.terms_of_rate" :style="[mortgage.error.terms_of_rate?{'border-color':'red'}:{}]">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text fordollerdesignpersen" id="basic-addon1">%</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- </div> -->
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="labeldata">Approved Amount</label>
                                                        <div class="flex-container">
                                                            <div class="Property_Value">Approved Amount</div>
                                                            <div>
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text fordollerdesign" id="basic-addon1">$</span>
                                                                    </div>
                                                                    <input type="text" class="form-control forfromcontrolde" placeholder="450,000.00" aria-label="Username" aria-describedby="basic-addon1" v-model="mortgage.input.approved_amount" :style="[mortgage.error.approved_amount?{'border-color':'red'}:{}]">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                     <label class="labeldata">Current owed on HELOC</label>
                                                     <div class="flex-container">
                                                        <div class="Property_Value">Current owed on HELOC</div>
                                                        <div>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control forfromcontroldepersen" placeholder="4.25" aria-label="Username" aria-describedby="basic-addon1" v-model="mortgage.input.current_owed_on_heloc" :style="[mortgage.error.current_owed_on_heloc?{'border-color':'red'}:{}]">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text fordollerdesignpersen" id="basic-addon1">$</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- </div> -->
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="labeldata">Projected Injection To Mortgage</label>
                                                    <div class="flex-container">
                                                        <div class="Property_Value">Projected Injection To Mortgage</div>
                                                        <div>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text fordollerdesign" id="basic-addon1">$</span>
                                                                </div>
                                                                <input type="text" class="form-control forfromcontrolde" placeholder="450,000.00" aria-label="Username" aria-describedby="basic-addon1" v-model="mortgage.input.projected_injection_to_mortgage" :style="[mortgage.error.projected_injection_to_mortgage?{'border-color':'red'}:{}]">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="labeldata">Recurring Injection After HELOC reached zero</label>
                                                    <div class="flex-container">
                                                        <div class="Property_Value">Recurring Injection After HELOC reached zero</div>
                                                        <div>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control forfromcontroldepersen" placeholder="4.25" aria-label="Username" aria-describedby="basic-addon1" v-model="mortgage.input.recurring_injection_after_heloc" :style="[mortgage.error.recurring_injection_after_heloc?{'border-color':'red'}:{}]">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text fordollerdesignpersen" id="basic-addon1">$</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- </div> -->
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="labeldata">HELOC Initial interest rate</label>
                                                    <div class="flex-container">
                                                        <div class="Property_Value">HELOC Initial interest rate</div>
                                                        <div>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text fordollerdesign" id="basic-addon1">%</span>
                                                                </div>
                                                                <input type="text" class="form-control forfromcontrolde" placeholder="4.25" aria-label="Username" aria-describedby="basic-addon1" v-model="mortgage.input.heloc_interest_rate" :style="[mortgage.error.heloc_interest_rate?{'border-color':'red'}:{}]">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <button class=" btn complete_order" @click.prevent="submitCalculate($event)">SAVE & NEXT</button>
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
                },
           
                error: {},
                isInput: false
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
        mounted: function() {
            let t = this;
            console.log(t.toolData.selectedType);
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
            t.mySubscription(),
            t.getMortgageInputData();
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
            submitCalculate: function() {
                let t = this;
                console.log(t.toolData.selectedType);
                console.log(Object.keys(t.mortgage.input).length);
                let data = t.mortgage.input;
                if (t.mortgage.isInput) {
                    https.patch('inputs/aiptool/inputdata/' + t.mortgage.input.id + '/', data)
                    .then(function(res) {
                        console.log(res);
                        if (res.hasValidationError) {
                            t.mortgage.error = res.validationError
                        } else {
                            window.location.href = "Input_CurrentDebt"
                        }
                    });
                } else {
                    https.post('inputs/aiptool/inputdata/', data)
                    .then(function(res) {
                        console.log(res);
                        if (res.hasValidationError) {
                            t.mortgage.error = res.validationError
                        } else {
                            window.location.href = "Input_CurrentDebt"
                        }
                    });
                }
            },

                // ********************* MORTGAGE TOOL ******************************* //
                getMortgageInputData: function() {
                    let t = this;
                    https.get('inputs/aiptool/inputdata/')
                    .then(function(res) {
                        console.log(res);
                        if (res.length > 0) {
                            t.mortgage.input = res[0];
                            t.mortgage.isInput = true
                        } else {
                            t.mortgage.isInput = false
                        }

                    });
                },
                //Logout
                logoutUser: function() {
                    window.localStorage.removeItem('admin_identifier');
                    window.location.href = "/";
                },
            }
        })
    </script>
</body>

</html>