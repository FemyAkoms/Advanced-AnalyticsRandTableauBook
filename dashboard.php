<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <section class="my-4 sectionmarginright" style="margin-top: 0 !important;">
            <div class="coinandtree_dash">
                <div class="container">
                    <div class="about_aip_dash">
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
                        <?php include('dashConfig.php'); ?>
                        <div class="col-md-9">
                            <div class="rightwhiteside">
                                <div class="rightwhiteside1">
                                    <div class="d-flex bd-highlight rightwhiteside2">
                                        <div class="mr-auto bd-highlight">
                                            <div class="wellcomedm">
                                                <p>Welcome <span class="wellcomedm1">{{user.first_name}} {{user.last_name}}</span></p>
                                            </div>
                                        </div>
                                        <div class=" bd-highlight">
                                            <form>
                                                <div class="flex-container">

                                                    <div class="Dashboard_for">
                                                        <p>Dashboard for
                                                        </p>
                                                    </div>
                                                    <div>
                                                        <span class="textmort2 desk">
                                                            <div class="form-group">
                                                                <select class=" textmort" v-model="toolData.selectedType" @change='changeType()'>
                                                                    <option value="1">Pay with HELOC</option>
                                                                    <option value="2">Pay with Savings</option>
                                                                    <option value="3">Pay off Credits</option>
                                                                </select>
                                                            </div>
                                                        </span>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="Analytic_Overview">
                                        <p>Analytic Overview</p>
                                    </div>
                                    <section class="pricing ">
                                        <div class="container">
                                            <div class="row">
                                                <!-- Free Tier -->
                                                <div class="col-lg-4">
                                                    <div class="card mb-5 mb-lg-0 cardbg1">

                                                        <div class="card-body">
                                                            <div class="flex-container">
                                                                <div class="Total_Income">
                                                                    <p>Total Income</p>
                                                                </div>
                                                                <div class="tatalincomeimg">
                                                                    <img src="images/Layout 2ib_Dashboard.png" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="flex-container">
                                                                <div class="Total_Income1">
                                                                    <p>$ {{formatAmt(common_output_report['Monthly Income'])}}</p>
                                                                    <p class="monthlyic">Monthly</p>
                                                                </div>
                                                                <div class="tatalincomeimg1">
                                                                    <p>${{formatAmt(common_output_report['Total Income'])}} </p>
                                                                    <p class="monthlyic1">Year to Date</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Plus Tier -->
                                                <div class="col-lg-4">
                                                    <div class="card mb-5 mb-lg-0 cardbg2">

                                                        <div class="card-body">
                                                            <div class="flex-container">
                                                                <div class="Total_Income11">
                                                                    <p>Total Expense</p>
                                                                </div>
                                                                <div class="tatalincomeimg11">
                                                                    <img src="images/Layout 2ib_Dashboard(1).png" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="flex-container">
                                                                <div class="Total_Income1">
                                                                    <p>$ {{formatAmt(common_output_report['Monthly Expense'])}}</p>
                                                                    <p class="monthlyic">Monthly</p>
                                                                </div>
                                                                <div class="tatalincomeimg1">
                                                                    <p>${{formatAmt(common_output_report['Total Expense'])}} </p>
                                                                    <p class="monthlyic1">Year to Date</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Pro Tier -->
                                                <div class="col-lg-4" v-show="toolData.selectedType == 1 || toolData.selectedType == 2">
                                                    <div class="card cardbg3">

                                                        <div class="card-body">

                                                            <div class="flex-container">
                                                                <div class="Total_Income22">
                                                                    <p>Total Debt</p>
                                                                </div>
                                                                <div class="tatalincomeimg22">
                                                                    <img src="images/Layout 2ib_Dashboard(2).png" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="flex-container">
                                                                <div class="Total_Income1">
                                                                    <p>$ {{formatAmt(common_output_report['Monthly Debt'])}}</p>
                                                                    <p class="monthlyic">Monthly</p>
                                                                </div>
                                                                <div class="tatalincomeimg1">
                                                                    <p>${{formatAmt(common_output_report['Total Debt'])}} </p>
                                                                    <p class="monthlyic1">Year to Date</p>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4" v-show="toolData.selectedType == 3">
                                                    <div class="card cardbg3">

                                                        <div class="card-body">

                                                            <div class="flex-container">
                                                                <div class="Total_Income22">
                                                                    <p>Total Debt</p>
                                                                </div>
                                                                <div class="tatalincomeimg22">
                                                                    <img src="images/Layout 2ib_Dashboard(2).png" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="flex-container">
                                                                <div class="Total_Income1">
                                                                    <p>$ {{formatAmt(credit.output.total_debts)}}</p>
                                                                    <p class="monthlyic"></p>
                                                                </div>
                                                                <!-- <div class="tatalincomeimg1">
                                                                    <p>${{common_output_report['Total Debt']}} </p>
                                                                    <p class="monthlyic1">Year to Date</p>
                                                                </div> -->
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <section class="mt-4">
                                    <div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-8 forbgdash">
                                                    <div v-show="toolData.selectedType == 1">
                                                        <div class="holetextcontent">
                                                            <div>
                                                                <div class="flex-container">
                                                                    <div class="pl1st">
                                                                        <p>PRIMARY LOAN<br>
                                                                            REPAYMENT PERIOD</p>
                                                                    </div>
                                                                    <div class="years21">
                                                                        <p>{{mortgage.output.loan_term_comparison.Repayment_Years['Original Loan']}} Years {{mortgage.output.loan_term_comparison.Repayment_Months['Original Loan']}} Months</p>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-container">
                                                                    <div class="pl1st">
                                                                        <p class="forgaping">PRIMARY LOAN WITH <br>
                                                                            AIP REPAYMENT PERIOD</p>
                                                                    </div>
                                                                    <div class="years8">
                                                                        <p>{{mortgage.output.loan_term_comparison.Repayment_Years['Original Loan with AIP Software']}} Years {{mortgage.output.loan_term_comparison.Repayment_Months['Original Loan with AIP Software']}} Months</p>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="fordivition">
                                                                <div class="flex-container">
                                                                    <div class="pl1st">
                                                                        <p>TOTAL INTEREST PAID THROUGH<br>
                                                                            TRADITIONAL PAYMENT </p>
                                                                    </div>
                                                                    <div class="years211">
                                                                        <p>${{formatAmt(mortgage.output.loan_term_comparison.Total_Interest_Cost['Original Loan'])}}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-container">
                                                                    <div class="pl1st">
                                                                        <p class="forgaping">TOTAL INTEREST PAID
                                                                            USING<br>
                                                                            AIP SOFTWARE</p>
                                                                    </div>
                                                                    <div class="years81">
                                                                        <p>${{formatAmt(mortgage.output.loan_term_comparison.Total_Interest_Cost['Original Loan with AIP Software'])}}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div v-show="toolData.selectedType == 2">
                                                        <div class="holetextcontent">
                                                            <div>
                                                                <div class="flex-container">
                                                                    <div class="pl1st">
                                                                        <p>PRIMARY LOAN<br>
                                                                            REPAYMENT PERIOD</p>
                                                                    </div>
                                                                    <div class="years21">
                                                                        <p>{{savings.output.loan_term_comparison.Repayment_Years['Original Loan']}} Years {{savings.output.loan_term_comparison.Repayment_Months['Original Loan']}} Months</p>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-container">
                                                                    <div class="pl1st">
                                                                        <p class="forgaping">PRIMARY LOAN WITH <br>
                                                                            AIP REPAYMENT PERIOD</p>
                                                                    </div>
                                                                    <div class="years8">
                                                                        <p>{{savings.output.loan_term_comparison.Repayment_Years['Original Loan with AIP Software']}} Years {{savings.output.loan_term_comparison.Repayment_Months['Original Loan with AIP Software']}} Months</p>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="fordivition">
                                                                <div class="flex-container">
                                                                    <div class="pl1st">
                                                                        <p>TOTAL INTEREST PAID THROUGH<br>
                                                                            TRADITIONAL PAYMENT </p>
                                                                    </div>
                                                                    <div class="years211">
                                                                        <p>${{formatAmt(savings.output.loan_term_comparison.Total_Interest_Cost['Original Loan'])}}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-container">
                                                                    <div class="pl1st">
                                                                        <p class="forgaping">TOTAL INTEREST PAID
                                                                            USING<br>
                                                                            AIP SOFTWARE</p>
                                                                    </div>
                                                                    <div class="years81">
                                                                        <p>${{formatAmt(savings.output.loan_term_comparison.Total_Interest_Cost['Original Loan with AIP Software'])}}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div v-show="toolData.selectedType == 3">
                                                        <div class="holetextcontent">
                                                            <div>
                                                                <div class="flex-container">
                                                                    <div class="pl1st">
                                                                        <p>PRIMARY LOAN<br>
                                                                            REPAYMENT PERIOD</p>
                                                                    </div>
                                                                    <div class="years21">
                                                                        <p>{{credit.output.loan_term_comparison.Years['Credit Card']}} Years {{credit.output.loan_term_comparison.Months['Credit Card']}} Months</p>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-container">
                                                                    <div class="pl1st">
                                                                        <p class="forgaping">PRIMARY LOAN WITH <br>
                                                                            AIP REPAYMENT PERIOD</p>
                                                                    </div>
                                                                    <div class="years8">
                                                                        <p>{{credit.output.loan_term_comparison.Years['Credit Card Using Tool']}} Years {{credit.output.loan_term_comparison.Months['Credit Card Using Tool']}} Months</p>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="fordivition">
                                                                <div class="flex-container">
                                                                    <div class="pl1st">
                                                                        <p>TOTAL INTEREST PAID THROUGH<br>
                                                                            TRADITIONAL PAYMENT </p>
                                                                    </div>
                                                                    <div class="years211">
                                                                        <p>${{formatAmt(credit.output.loan_term_comparison.Interest_Cost['Credit Card'])}}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-container">
                                                                    <div class="pl1st">
                                                                        <p class="forgaping">TOTAL INTEREST PAID
                                                                            USING<br>
                                                                            AIP SOFTWARE</p>
                                                                    </div>
                                                                    <div class="years81">
                                                                        <p>${{formatAmt(credit.output.loan_term_comparison.Interest_Cost['Credit Card Using Tool'])}}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                               <div class="col-md-4">
                                                    <div>
                                                        <div class="embed-responsive embed-responsive-16by9 forvideodashbord">
                                                            <iframe class="embed-responsive-item" v-bind:src="vsrc" allowfullscreen>                                                       
                                                            </iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="mt-4">
                                    <div class="tablebgcolor">

                                        <div class="">
                                            <div class="Loan_Term_Comparison">
                                                <p>Loan Term Comparison</p>
                                            </div>
                                            <div class="table-responsive">

                                                <table class="table table-striped">
                                                    <thead style="background-color: #003770; color: white; font-size: 12px;">
                                                        <tr>
                                                            <th scope="col" style="padding-top:12px; padding-bottom:12px;font-weight:500;">
                                                                LOAN TYPE</th>
                                                            <th scope="col" style="padding-top:12px; padding-bottom:12px;font-weight:500;">
                                                                VALUE</th>
                                                            <th scope="col" style="padding-top:12px; padding-bottom:12px;font-weight:500;">
                                                                YEARS</th>
                                                            <th scope="col" style="padding-top:12px; padding-bottom:12px;font-weight:500;">
                                                                MONTHS</th>
                                                            <th scope="col" style="padding-top:12px; padding-bottom:12px;font-weight:500;">
                                                                INTEREST COST</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody v-show="toolData.selectedType == 1">
                                                        <tr style="padding-top:12px; padding-bottom:12px;">
                                                            <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                Original Loan</td>
                                                            <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                $ <span v-if="!mortgage.output.loan_term_comparison.Loan_Amount['Original Loan']">0</span> {{formatAmt(mortgage.output.loan_term_comparison.Loan_Amount['Original Loan'])}}</td>
                                                            <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                {{mortgage.output.loan_term_comparison.Repayment_Years['Original Loan']}}</td>
                                                            <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                {{mortgage.output.loan_term_comparison.Repayment_Months['Original Loan']}}</td>
                                                            <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                               $ <span v-if="!mortgage.output.loan_term_comparison.Total_Interest_Cost['Original Loan']">0</span> {{formatAmt(mortgage.output.loan_term_comparison.Total_Interest_Cost['Original Loan'])}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                Original Loan with AIP Software</td>
                                                            <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                $ <span v-if="!mortgage.output.loan_term_comparison.Loan_Amount['Original Loan with AIP Software']">0</span> {{formatAmt(mortgage.output.loan_term_comparison.Loan_Amount['Original Loan with AIP Software'])}}</td>
                                                            <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                {{mortgage.output.loan_term_comparison.Repayment_Years['Original Loan with AIP Software']}}</td>
                                                            <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                {{mortgage.output.loan_term_comparison.Repayment_Months['Original Loan with AIP Software']}}</td>
                                                            <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                $ <span v-if="!mortgage.output.loan_term_comparison.Total_Interest_Cost['Original Loan with AIP Software']">0</span> {{formatAmt(mortgage.output.loan_term_comparison.Total_Interest_Cost['Original Loan with AIP Software'])}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;color: #003770;">
                                                                HELOC/Revolving Loan Payoff Period</td>
                                                            <td style="padding-top:12px; padding-bottom:12px;font-weight:400;color: #003770;">
                                                                $ <span v-if="!mortgage.output.loan_term_comparison.Loan_Amount['HELOC/Revolving Loan Payoff Period']">0</span> {{(mortgage.output.loan_term_comparison.Loan_Amount['HELOC/Revolving Loan Payoff Period'])}}</td>
                                                            <td style="padding-top:12px; padding-bottom:12px;font-weight:400;color: #003770;">
                                                                {{mortgage.output.loan_term_comparison.Repayment_Years['HELOC/Revolving Loan Payoff Period']}}</td>
                                                            <td style="padding-top:12px; padding-bottom:12px;font-weight:400;color: #003770;">
                                                                {{mortgage.output.loan_term_comparison.Repayment_Months['HELOC/Revolving Loan Payoff Period']}}</td>
                                                            <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                $ <span v-if="!mortgage.output.loan_term_comparison.Total_Interest_Cost['HELOC/Revolving Loan Payoff Period']">0</span> {{formatAmt(mortgage.output.loan_term_comparison.Total_Interest_Cost['HELOC/Revolving Loan Payoff Period'])}}</td>
                                                        </tr>
                                                    </tbody>
                                                    <tbody v-show="toolData.selectedType == 2">
                                                        <tr style="padding-top:12px; padding-bottom:12px;">
                                                            <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                Original Loan</td>
                                                            <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                $ <span v-if="!savings.output.loan_term_comparison.Loan_Amount['Original Loan']">0</span> {{formatAmt(savings.output.loan_term_comparison.Loan_Amount['Original Loan'])}}</td>
                                                            <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                {{savings.output.loan_term_comparison.Repayment_Years['Original Loan']}}</td>
                                                            <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                {{savings.output.loan_term_comparison.Repayment_Months['Original Loan']}}</td>
                                                            <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                $ <span v-if="!savings.output.loan_term_comparison.Total_Interest_Cost['Original Loan']">0</span> {{formatAmt(savings.output.loan_term_comparison.Total_Interest_Cost['Original Loan'])}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                Original Loan with AIP Software</td>
                                                            <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                $ <span v-if="!savings.output.loan_term_comparison.Loan_Amount['Original Loan with AIP Software']">0</span> {{formatAmt(savings.output.loan_term_comparison.Loan_Amount['Original Loan with AIP Software'])}}</td>
                                                            <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                {{savings.output.loan_term_comparison.Repayment_Years['Original Loan with AIP Software']}}</td>
                                                            <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                {{savings.output.loan_term_comparison.Repayment_Months['Original Loan with AIP Software']}}</td>
                                                            <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                $ <span v-if="!savings.output.loan_term_comparison.Total_Interest_Cost['Original Loan with AIP Software']">0</span>{{formatAmt(savings.output.loan_term_comparison.Total_Interest_Cost['Original Loan with AIP Software'])}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;color: #003770;">
                                                                HELOC/Revolving Loan Payoff Period</td>
                                                            <td style="padding-top:12px; padding-bottom:12px;font-weight:400;color: #003770;">
                                                                $ <span v-if="!savings.output.loan_term_comparison.Loan_Amount['Savings/Revolving Loan Payoff Period']">0</span> {{formatAmt(savings.output.loan_term_comparison.Loan_Amount['Savings/Revolving Loan Payoff Period'])}}</td>
                                                            <td style="padding-top:12px; padding-bottom:12px;font-weight:400;color: #003770;">
                                                                {{savings.output.loan_term_comparison.Repayment_Years['Savings/Revolving Loan Payoff Period']}}</td>
                                                            <td style="padding-top:12px; padding-bottom:12px;font-weight:400;color: #003770;">
                                                                {{savings.output.loan_term_comparison.Repayment_Months['Savings/Revolving Loan Payoff Period']}}</td>
                                                            <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                $ <span v-if="!savings.output.loan_term_comparison.Total_Interest_Cost['Savings/Revolving Loan Payoff Period']">0</span> {{formatAmt(savings.output.loan_term_comparison.Total_Interest_Cost['Savings/Revolving Loan Payoff Period'])}}</td>
                                                        </tr>
                                                    </tbody>
                                                    <tbody v-show="toolData.selectedType == 3">
                                                        <tr>
                                                            <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                Credit Card</td>
                                                            <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                $ <span v-if="!credit.output.loan_term_comparison.Value['Credit Card']">0</span> {{formatAmt(credit.output.loan_term_comparison.Value['Credit Card'])}}</td>
                                                            <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                {{credit.output.loan_term_comparison.Years['Credit Card']}}</td>
                                                            <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                {{credit.output.loan_term_comparison.Months['Credit Card']}}</td>
                                                            <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                $ <span v-if="!credit.output.loan_term_comparison.Interest_Cost['Credit Card']">0</span> {{formatAmt(credit.output.loan_term_comparison.Interest_Cost['Credit Card'])}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                Credit Card Using Tool</td>
                                                            <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                $ {{formatAmt(credit.output.loan_term_comparison.Value['Credit Card Using Tool'])>0?formatAmt(credit.output.loan_term_comparison.Value['Credit Card Using Tool']):0}}</td>
                                                            <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                {{credit.output.loan_term_comparison.Years['Credit Card Using Tool']}}</td>
                                                            <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                {{credit.output.loan_term_comparison.Months['Credit Card Using Tool']}}</td>
                                                            <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                $  {{formatAmt(credit.output.loan_term_comparison.Interest_Cost['Credit Card Using Tool'])}}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="bluecoloronly">
                                            </div>
                                            <div class="greencolor2">
                                                <div class="greencolor1">
                                                    <p>Your Total Time Saved:<span class="greencolor"> 21 years 8 months
                                                        </span> </p>
                                                </div>
                                                <div class="greencolor1">
                                                    <p>Your Total Payments Saved:<span class="greencolor"> 260</span>
                                                        months x <span class="greencolor"> $1,869.37 </span> per month
                                                        =<span class="greencolor"> $486,036.20</span></p>
                                                </div>
                                                <div class="greencolor1">
                                                    <p>Your Total Interest Saved:<span class="greencolor">
                                                            $198,436.65</span></p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include('footer.php') ?>

        

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
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</body>
</html>