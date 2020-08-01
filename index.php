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
    <link rel="stylesheet" href="css/index.css">

    <title>AIP</title>
</head>

<body>

    <div id="app">
        <header id="home">
            <!--Navbar -->
            <nav class=" navbar navbar-expand-lg navbar-dark white-color">
                <a class="navbar-brand marginleft" href="/">
                    <img src="images/Layout 2ib1.png" alt="" style="width:100%" class="img-responsive">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <ul class="navbar-nav ml-auto marginright">
                        <li class="nav-item ">
                            <a class="nav-link" href="/">
                                Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about">
                                ABOUT AIP
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pricing">
                                PRICING
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="contact">
                                CONTACT US
                            </a>
                        </li>
                        <li class="nav-item item_button" v-if="isToken">
                            <a class="nav-link" href="dashboard">
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item item_button" v-if="!isToken">
                            <a class="nav-link" href="login">
                                Register/Login
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            
        </header>
        <div>
            <main>
                <section>
                    <div class="background_image">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-5 row_design">
                                    <div>
                                        <p class="elimiande">
                                            {{sectiontitle1}}
                                        </p>
                                    </div>
                                    <div>
                                        <p class="useur hl">
                                            <span v-html="subsectiontitle1">
                                            </p>
                                        </div>
                                        <div>
                                            <div class="flex-container">
                                                <div>
                                                   <a href="about"><button type="button" class="btn btn-success rounded-pill">HOW IT WORKS</button></a> 
                                                </div>
                                                <div>
                                                <a href="pricing"><button type="button" class="btn btn-primary rounded-pill"> Get Started NOW</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 row_design1">
                                        <div class="flex-container">
                                            <div class="mortgage">
                                                <form>
                                                    <div class="form-group">
                                                        <p class="gageowed2">Select Account Type</p>
                                                        <select class="form-control textmort" v-model="toolData.selectedType"  style="width: 100%;">
                                                            <!-- <option disabled selected value> select frequency </option> -->
                                                            <option value="1">Pay with HELOC</option>
                                                            <option value="2">Pay with Savings</option>
                                                            <option value="3">Pay off Credits</option>
                                                        </select>
                                                    </div>
                                                    <div style="margin-top: 6px;" v-show="toolData.selectedType == 3">
                                                        <p class="gageowed2">Credit Owed</p>
                                                        <input type="text" class="rangervalue2" aria-label="Dollar amount (with dot and two decimal places)" v-model="toolData.Credit_Owed">
                                                        <span class="badge_u1 ">$</span>
                                                    </div>
                                                    <div v-show="toolData.selectedType == 1 || toolData.selectedType == 2   ">
                                                        <p class="gageowed2">Mortgage Owed</p>
                                                        <input type="text" min="1" max="1000000" value="366306" class="rangervalue1" v-model="toolData.Mortgage_Owed">
                                                        <span class="badge_u1 ">$</span>
                                                    </div>

                                                    <div style="margin-top: 15px;" v-show="toolData.selectedType == 1 || toolData.selectedType == 2 || toolData.selectedType == 3">
                                                        <p class="gageowed2">Interest Rate</p>
                                                        <input type="text" class="rangervalue1" aria-label="Dollar amount (with dot and two decimal places)" v-model="toolData.Interest_Rate">
                                                        <span class="badge4">%</span>
                                                    </div>
                                                    <div style="margin-top: 6px;" v-show="toolData.selectedType == 1 || toolData.selectedType == 2">
                                                        <p class="gageowed2">Loan Period</p>
                                                        <input type="text" class="rangervalue1" aria-label="Dollar amount (with dot and two decimal places)" v-model="toolData.Loan_Period">
                                                        <span class="badge5">Years</span>
                                                    </div>
                                                    <div style="margin-top: 6px;" v-show="toolData.selectedType == 1 || toolData.selectedType == 2">
                                                        <p class="gageowed2">Monthly Installment</p>
                                                        <input type="text" class="rangervalue2" aria-label="Dollar amount (with dot and two decimal places)" v-model="toolData.Monthly_Installment">
                                                        <span class="badge_u1 ">$</span>
                                                    </div>
                                                    <div style="margin-top: 6px;" v-show="toolData.selectedType == 2">
                                                        <p class="gageowed2">Amount available in Saving or Emergency Funds</p>
                                                        <input type="text" class="rangervalue2" aria-label="Dollar amount (with dot and two decimal places)" v-model="toolData.Total_Savings">
                                                        <span class="badge_u1 ">$</span>
                                                    </div>
                                                    <div style="margin-top: 6px;" v-show="toolData.selectedType == 2">
                                                        <p class="gageowed2">Amount available for paying down debt 50%</p>
                                                        <input type="text" class="rangervalue2" aria-label="Dollar amount (with dot and two decimal places)" v-model="toolData.Savings_Available">
                                                        <span class="badge_u1 ">$</span>
                                                    </div>
                                                    <div style="margin-top: 6px;" v-show="toolData.selectedType == 1 || toolData.selectedType == 2 || toolData.selectedType == 3">
                                                        <p class="gageowed2">Monthly Income</p>
                                                        <input type="text" class="rangervalue2" aria-label="Dollar amount (with dot and two decimal places)" v-model="toolData.Monthly_Income">
                                                        <span class="badge_u1 ">$</span>
                                                        <span class="badge7">/Month</span>
                                                    </div>
                                                    <div style="margin-top: 6px;" v-show="toolData.selectedType == 1 || toolData.selectedType == 2 || toolData.selectedType == 3">
                                                        <p class="gageowed2">Monthly Expenses</p>
                                                        <input type="text" class="rangervalue2" aria-label="Dollar amount (with dot and two decimal places)" v-model="toolData.Monthly_Expenses">
                                                        <span class="badge_u1 ">$</span>
                                                        <!-- <span class="badge6">/Month</span> -->
                                                    </div>

                                                    <div style="margin-top: 6px;" v-show="toolData.selectedType == 1 || toolData.selectedType == 2">
                                                        <p class="gageowed2">Current Debt</p>
                                                        <input type="text" class="rangervalue2" aria-label="Dollar amount (with dot and two decimal places)" v-model="toolData.Current_Debt">
                                                        <span class="badge_u1 ">$</span>
                                                        <!-- <span class="badge6">/Month</span> -->
                                                    </div>

                                                    <div style="margin-top: 6px;" v-show="toolData.selectedType == 3">
                                                        <p class="gageowed2">Minimum Amount</p>
                                                        <input type="text" class="rangervalue2" aria-label="Dollar amount (with dot and two decimal places)" v-model="toolData.Minimum_Amount">
                                                        <span class="badge_u1 ">$</span>
                                                        <!-- <span class="badge6">/Month</span> -->
                                                    </div>

                                                    <div style="margin-top: 6px;" v-show="toolData.selectedType == 3">
                                                        <p class="gageowed2">Payment Date</p>
                                                        <input type="date" class="rangervalue2" v-model="toolData.Payment_Date">
                                                        <span class="badge_u1 ">$</span>
                                                        <!-- <span class="badge6">/Month</span> -->
                                                    </div>
                                                    <div style="margin-top: 6px;" v-show="toolData.selectedType == 3">
                                                        <p class="gageowed2">Statement Date</p>
                                                        <input type="date" class="rangervalue2" v-model="toolData.Statement_Date">
                                                        <span class="badge_u1 ">$</span>
                                                        <!-- <span class="badge6">/Month</span> -->
                                                    </div>

                                                    <div style="margin-top: 6px;" v-show="toolData.selectedType == 1">
                                                        <p class="gageowed2">Lumpsum Income</p>
                                                        <input type="text" class="rangervalue2" aria-label="Dollar amount (with dot and two decimal places)" v-model="toolData.LumpsumIncome">
                                                        <span class="badge_u1 ">$</span>
                                                        <!-- <span class="badge6">/Month</span> -->
                                                    </div>
                                                    <div style="margin-top: 6px;" v-show="toolData.selectedType == 1">
                                                        <p class="gageowed2">Lumpsum Expenses</p>
                                                        <input type="text" class="rangervalue2" aria-label="Dollar amount (with dot and two decimal places)" v-model="toolData.LumpsumExpenses">
                                                        <span class="badge_u1 ">$</span>
                                                        <!-- <span class="badge6">/Month</span> -->
                                                    </div>

                                                    <div style="margin-top: 6px;">
                                                        <!-- <p class="gageowed2">Current Debt</p> -->
                                                        <button class="btn btn-outline-light btn-sm rounded-pill cal" @click.prevent="getCalculate($event)">CALCULATE</button>
                                                    </div>
                                                </form>
                                            </div>

                                            <div class="totalofallpayment">
                                                <div class="trans"></div>
                                                <div class="se-pre-con"></div>
                                                <div class="flex-container bbm">
                                                    <div class="flex_content">
                                                        <div class="flextext">
                                                            <p>$ {{formatAmt(toolData.Monthly_Installment)}}</p>
                                                            <p class="mpi">Monthly Principal & Interest</p>
                                                        </div>

                                                    </div>
                                                    <div class="flex_content">
                                                        <div class="flextext">
                                                            <p>$ {{formatAmt((toolData.Loan_Period*12) * toolData.Monthly_Installment)}}</p>
                                                            <p class="mpi">Total of {{toolData.Loan_Period*12}} Payments</p>
                                                        </div>

                                                    </div>
                                                    <div class="flex_content">
                                                        <div class="flextext">
                                                            <p>{{toolData.loan_with_sip.repayment_month_name.substr(0,3)}} 15, {{toolData.loan_with_sip.repayment_month_years}}</p>
                                                            <p class="mpi">Payoff Date</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="holetextcontent">
                                                    <div>
                                                        <div class="flex-container">
                                                            <div class="pl1st">
                                                                <p>ORIGINAL LOAN<br>
                                                                REPAYMENT PERIOD</p>
                                                            </div>
                                                            <div class="years21">
                                                                <p>{{toolData.original_loan.Repayment_Years}} Years {{toolData.original_loan.Repayment_Months}} Months</p>
                                                            </div>
                                                        </div>
                                                        <div class="flex-container">
                                                            <div class="pl1st">
                                                                <p class="forgaping">AIP REPAYMENT PERIOD <br>
                                                                </p>
                                                            </div>
                                                            <div class="years8">
                                                                <p>{{toolData.loan_with_sip.Repayment_Years}} Years {{toolData.loan_with_sip.Repayment_Months}} Months</p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="fordivition">
                                                        <div class="flex-container">
                                                            <div class="pl1st">
                                                                <p>TOTAL INTEREST PAID ON<br>
                                                                ORIGINAL LOAN </p>
                                                            </div>
                                                            <div class="years211">
                                                                <p>$ {{formatAmt(toolData.original_loan.Total_Interest_Cost)}}</p>
                                                            </div>
                                                        </div>
                                                        <div class="flex-container">
                                                            <div class="pl1st">
                                                                <p class="forgaping">TOTAL INTEREST PAID <br>
                                                                WITH AIP SOFTWARE</p>
                                                            </div>
                                                            <div class="years81">
                                                                <p>$ {{formatAmt(toolData.loan_with_sip.Total_Interest_Cost)}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-container tpi">
                                                    <div style="width:100%">
                                                        <div class="table-responsive trp">
                                                            <table class="table table-striped table-bordered" v-if="toolData.selectedType == 1 || toolData.selectedType == 2">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col" class="data" style="padding-top: 15px; padding-bottom: 15px;">Date
                                                                        </th>
                                                                        <th scope="col" class="data1" style="padding-top: 15px; padding-bottom: 15px;background: #0e558f;">
                                                                        Original Principle & Interest</th>
                                                                        <th scope="col" class="data1" style="padding-top: 15px; padding-bottom: 15px;">
                                                                        New Principle & Interest</th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="lineheight" v-for="(v,i) in toolData.cashflowdata" v-if="i<7">
                                                                        <td scope="row" class="tdata" style="padding-top: 11px; padding-bottom: 11px;">{{v.day}}</th>
                                                                            <td class="tdata" style="padding-top: 11px; padding-bottom: 11px;">
                                                                            $ {{formatAmt(v.data.Original_Loan_Balance)}}</td>
                                                                            <td class="tdata" style="padding-top: 11px; padding-bottom: 11px;">
                                                                            $ {{formatAmt(v.data.New_Loan_Balance_After_Injection)}}</td>

                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                                <table v-if="toolData.selectedType == 3" class="table table-striped table-bordered">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col" colspan="3" class="data1" style="background: #0e558f;padding: 5px 0;" colspan="3"></th>
                                                                            <th v-for="(v,i) in credit.output.months" scope="col" class="data1" style="background: #0e558f;padding: 5px 0;">{{v}}</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td scope="row" class="tdata" style="padding: 5px 0;" colspan="3">{{key0}}</td>
                                                                            <td v-for="(v,i) in credit.output.data.Original_Credit_Card_Balance" scope="row" class="tdata" style="padding: 5px 0;">$ {{formatAmt(v)}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row" class="tdata" colspan="3" style="padding: 5px 0;">{{key1}}</td>
                                                                            <td v-for="(v,i) in credit.output.data.Amount_to_be_deposited_on_nanth" scope="row" class="tdata" style="padding: 5px 0;">$ {{formatAmt(v)}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row" class="tdata" colspan="3" style="padding: 5px 0;">{{key2}}</td>
                                                                            <td v-for="(v,i) in credit.output.data.Amount_Owed_on_CC_before_Statement_Date" scope="row" class="tdata" style="padding: 5px 0;">$ {{formatAmt(v)}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row" class="tdata" colspan="3" style="padding: 5px 0;">{{key3}}</td>
                                                                            <td v-for="(v,i) in credit.output.data.Statement_on_nanth" scope="row" class="tdata" style="padding: 5px 0;">$ {{formatAmt(v)}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row" class="tdata" colspan="3" style="padding: 5px 0;">{{key4}}</td>
                                                                            <td v-for="(v,i) in credit.output.data.Expense_To_be_withdrawn_on_nanth" scope="row" class="tdata" style="padding: 5px 0;">$ {{formatAmt(v)}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row" class="tdata" colspan="3" style="padding: 5px 0;">{{key5}}</td>
                                                                            <td v-for="(v,i) in credit.output.data.Present_Amount_Owed_on_CC_after_Expense_withdrawl" scope="row" class="tdata" style="padding: 5px 0;">$ {{formatAmt(v)}}</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- for button -->
                                                    <div class="gsn">
                                                        <button class="btn btn-success  rounded-pill cal1">EVALUATE AIP
                                                        SOFTWARE</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section>
                            <!-- for section two start -->
                            <div class="heip">
                                <div>
                                    <div>
                                        <div class="heitext">
                                            <p v-html="sectiontitle2">
                                            </div>
                                            <div class="heitext1">
                                                <p v-html="sectioncontent2">
                                                </p>
                                            </div>
                                            <div class="buttongsn">
                                                <button class="btn btn-success  rounded-pill cal2">EVALUATE AIP SOFTWARE</button>
                                            </div>
                                            <div class="contentcenter">
                                                <div class="aiptext" style="margin: 0 auto;">
                                                    <div class="embed-responsive embed-responsive-16by9">
                                                        <iframe class="embed-responsive-item  mt-4" v-bind:src="video_url" allowfullscreen></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- for section two end -->
                            </section>
                            <section>
                                <div class="mobleimage">
                                    <div class="container">
                                        <p class="our_text" v-html="sectiontitle3">
                                        </p>
                                        <div>
                                            <div class="flex-container">
                                                <div class="divcontent">
                                                    <div class="divimg">
                                                        <img src="images/Layout 2ib(2).png" alt="">
                                                    </div>
                                                    <div class="selt_service">
                                                        <p>
                                                            {{section3subtitle1}}
                                                            <!-- No Sensors or Surveys -->
                                                        </p>
                                                    </div>
                                                    <div class="loremtext">
                                                        <p v-html="section3subcontent1">
                                                        </p>
                                                    </div>
                                                    <div class="ourdata">
                                                        <p>YOUR DATA <i class="fas fa-arrow-right arr"></i></p>
                                                    </div>
                                                </div>
                                                <div class="divcontent">
                                                    <div class="divimg">
                                                        <img src="images/Layout 2ib(3).png" alt="">
                                                    </div>
                                                    <div class="selt_service">
                                                        <p style="margin-top: 41px;">
                                                            {{section3subtitle2}}
                                                        </p>
                                                    </div>
                                                    <div class="loremtext">
                                                        <p v-html="section3subcontent2">
                                                        </p>
                                                    </div>
                                                    <div class="ourdata">
                                                        <p><a href="pricing"> HOW IT WORKS <i class="fas fa-arrow-right arr"></i></a></p>
                                                    </div>
                                                </div>
                                                <div class="divcontent">
                                                    <div class="divimg">
                                                        <img src="images/Layout 2ib(4).png" alt="">
                                                    </div>
                                                    <div class="selt_service">
                                                        <p>
                                                            {{section3subtitle3}}
                                                            <!-- Accurate & Validate -->
                                                        </p>
                                                    </div>
                                                    <div class="loremtext">
                                                        <p v-html="section3subcontent3">
                                                        </p>
                                                    </div>
                                                    <div class="ourdata">
                                                        <p>ACCURACY <i class="fas fa-arrow-right arr"></i></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="buttongsn1">
                                            <a href="#" class="btn btn-success  rounded-pill cal3">Get Started Now</a>
                                        </div>

                                    </div>
                                </div>
                            </section>
                            <section>
                                <div class="section4d">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="raipat">
                                                    <p v-html="section4title">
                                                    </p>
                                                </div>
                                                <div class="raipat2">
                                                    <span v-html="section4content">
                                                    </div>
                                                    <div class="buttongsn2">
                                                        <a href="#home" class="btn btn-success  rounded-pill cal4">GET STARTED</a>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="homepage_images">
                                                        <img src="images/homepage_image02.png" alt="" class="homepage_images1 img-responsive">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <?php include('homeslider.php');?>
                                <section>
                                    <div class="section6bluebackgroung">
                                        <div class="tbmtext">
                                            <p>The most Innovative way to Eliminate Debt using Algorithm<br>powered by Avoid Interest Payment Tool
</p>
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6 section6border1">
                                                    <div class="tistext">
                                                        <p>{{data1_heading}}</p>
                                                    </div>
                                                    <div class="flex-container section6border8">
                                                        <div class="fivenumber">{{data1_count}}</div>
                                                        <!-- <div class="fivenumber1">
                                                            <P> {{data1_text}}</P>
                                                        </div> -->
                                                    </div>
                                                </div>
                                                <div class="col-md-6 section6border2">
                                                    <div class="tistext">
                                                        <p>{{data2_heading}}</p>
                                                    </div>
                                                    <div class="flex-container section6border7">
                                                        <div class="fivenumber">{{data2_count}}</div>
                                                        <!-- <div class="fivenumber1">
                                                            <P>{{data2_text}}</P>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 section6border3">
                                                    <div class="tistext">
                                                        <p>{{data3_heading}}</p>

                                                    </div>
                                                    <div class="flex-container section6border5">
                                                        <div class="fivenumber">{{data3_count}}</div>

                                                        <!-- <div class="fivenumber1">
                                                            <P>{{data3_text}}</P>
                                                        </div> -->
                                                    </div>
                                                </div>
                                                <div class="col-md-6 section6border4">
                                                    <div class="tistext">
                                                        <p>{{data4_heading}}</p>
                                                    </div>
                                                    <div class="flex-container section6border6">
                                                        <div class="fivenumber">{{data4_count}}</div>

                                                        <!-- <div class="fivenumber1">
                                                            <P>{{data4_text}}</P>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </main>
                            <footer>
                                <section>
                                    <div class="section7blckbackground">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="haveaquwstion">
                                                        <p>HAVE A QUESTION?</p>
                                                    </div>
                                                    <div class="haveaquwstion1">
                                                        <p>Get in Touch with a <span class="avoidtext"> Avoid Interest<br> Payments
                                                        </span>Representative.</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="youcansection7text">
                                                        <p>You can reach out
                                                            directly to your <span class="avoidtext1"> AVOID INTEREST
                                                            PAYMENTS </span> Representative <br> or you
                                                            can<span class="avoidtext1"> CONTACT US </span>here & we’ll have someone
                                                        get back to you soon .... </p>
                                                    </div>
                                                    <div class="buttongsn">
                                                        <a href="contact" class="btn btn-success  rounded-pill cal5">CONTACT US NOW !</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section7onlyblueback">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="stayupadte">
                                                        <p>Stay Updated</p>
                                                    </div>
                                                    <div class="stayupadte1">
                                                        <p>Get the Latest News,Straight to your Inbox.</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="md-form">
                                                        <input type="text" id="materialSubscriptionFormPasswords" class="form-control">
                                                        <label for="materialSubscriptionFormPasswords" class="youremaill">Your name</label>
                                                    </div>

                                                </div>
                                                <div class="col-md-3">
                                                    <div class="md-form">
                                                        <input type="text" id="materialLoginFormEmail" class="form-control">
                                                        <label for="materialLoginFormEmail" class="youremaill">Your E-mail Address</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="subscribebtn">
                                                        <button class="btn btn-success  rounded-pill sub10">SUBSCRIBE</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section7onlyblueback1">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="copyrighttext">
                                                        <p>©2019 Avoid Interest Payments. All Rights Reserved </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="flex-container sociallink1">
                                                        <div class="sociallink">Facebook</div>
                                                        <div class="sociallink">Twitter</div>
                                                        <div class="sociallink">Instagram</div>
                                                        <div class="sociallink">Youtube</div>
                                                    </div>
                                                    <div class="flex-container sociallink1" style="margin: 0px 10%;">
                                                        <div class="sociallink" style="font-size: 12px;font-weight: 400;"><a href="terms_of_service" style="color: #282828">Terms of Service</a></div>
                                                        <div class="sociallink" style="font-size: 12px;font-weight: 400;"><a href="privacy_policy" style="color: #282828">Privacy Policy</a></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="copyrighttext2">
                                                        <p>Designed & Developed By: FocusXgen</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </footer>
                        </div>
                    </div>
                    <!-- hole body div end  -->
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
                                key0:'',
                                key1:'',
                                key2:'',
                                key3:'',
                                key4:'',
                                key5:'',
                                sectiontitle1:'',
                                subsectiontitle1:`USE OUR SOPHISTICATED TOOL TO GUIDE<br> YOU TO FINANCIAL FREEDOM & LIVE<br> DEBT FREE!`,
                                sectiontitle2:'',
                                sectioncontent2:'',
                                video_url:'',

                                sectiontitle3:`Our AIP Software is Simple to Use`,
                                section3subtitle1:'',
                                section3subcontent1:'',
                                section3link1:'',
                                section3subtitle2:'',
                                section3subcontent2:'',
                                section3link2:'',
                                section3subtitle3:'',
                                section3subcontent3:'',
                                section3link3:'',

                                section4title:'Review AIP<br>Software Tool',
                                section4subtitle:`'Experience how everyday people are using our software'`,
                                section4content:'',

                                data1_heading:'',
                                data1_text:'',
                                data1_count:'',
                                data2_heading:'',
                                data2_text:'',
                                data2_count:'',
                                data3_heading:'',
                                data3_text:'',
                                data3_count:'',
                                data4_heading:'',
                                data4_text:'',
                                data4_count:'',

                                slider:[],
                                sortSlide:[],
                                isActive: false,
                                isToken: false,
                                currYear: 0,
                                credit: {
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
                                    original_loan: {
                                        Repayment_Years: 0,
                                        Total_Interest_Cost: 0
                                    },
                                    loan_with_sip: {
                                        Repayment_Years: 0,
                                        Total_Interest_Cost: 0,
                                        repayment_month_name:'',
                                        repayment_month_years:''
                                    },
                                    cashFlow: [],
                                    currYear: "",
                                    currMonthNo: 0,
                                    monthList: [],
                                    cashflowdata: [],
                                    creditMonth:[],
                                    creditCashFlow:{
                                        original_bal:[],
                                        amount_deposited:[],
                                        amount_owed_on_cc:[],
                                        statement_nanth:[],
                                        expense_withdrawn:[],
                                        present_amount_awed:[]
                                    }
                                }
                            },
                            created: function() {
                                let monArr = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov",
                                "Dec"
                                ];
                                let d = new Date();
                                let t = this;
                                this.toolData.currMonth = d.getMonth();
                                this.toolData.currYear = parseInt(d.getFullYear().toString().substr(-2) - 1);
                                // this.toolData.currYear = d.getFullYear() - 1);
                                t.toolData.currYear = parseInt(t.toolData.currYear) + 1;
                                for (var j = this.toolData.currMonth; j <= 11; j++) {
                                    if (this.toolData.monthList.length < 7) {
                                        t.toolData.currYear = parseInt(t.toolData.currYear);
                                        console.log(t.toolData.currYear);
                                        t.toolData.monthList.push(monArr[j] + '-' + t.toolData.currYear);
                                    }
                                    console.log(t.toolData.monthList);
                                }
                // let token = getToken();
                console.log(getToken());
                if (getToken() == null || getToken() == 'undefined') {
                    t.isToken = false;
                    console.log(t.isToken);
                } else {
                    t.isToken = true;
                    console.log(t.isToken);
                }

            },
            mounted: function() {
                let t = this;
                let date = new Date();
                t.currYear = JSON.stringify(date.getFullYear());
                t.getContent();
                t.getSlider();
                t.rangeSlider();
                t.getCalculate();
                t.getLink();
            },
            methods: {
                getContent:function(){
                  let t = this;
                  https.get('content/home-page/')
                  .then(function(res) {
                    console.log(res);
                    t.sectiontitle1=res[0].banner_text;
                    t.sectiontitle2=res[0].heading_bar_text;
                    t.sectioncontent2=res[0].heading_content;

                    t.video_url=res[0].video_url;

                    t.section3subtitle1=res[0].feature1_heading;
                    t.section3subcontent1=res[0].feature1_content;
                    t.section3subtitle2=res[0].feature2_heading;
                    t.section3subcontent2=res[0].feature2_content;
                    t.section3subtitle3=res[0].feature3_heading;
                    t.section3subcontent3=res[0].feature3_content;
                    t.section4content=res[0].review_content;
                    
                    t.data1_heading=res[0].data1_heading;
                    t.data1_text=res[0].data1_text;
                    t.data1_count=res[0].data1_count;
                    t.data2_heading=res[0].data2_heading;
                    t.data2_text=res[0].data2_text;
                    t.data2_count=res[0].data2_count;
                    t.data3_heading=res[0].data3_heading;
                    t.data3_text=res[0].data3_text;
                    t.data3_count=res[0].data3_count;
                    t.data4_heading=res[0].data4_heading;
                    t.data4_text=res[0].data4_text;
                    t.data4_count=res[0].data4_count;
                });
              },
                  
              getSlider:function(){
                  let t = this;
                    // $('.carousel').carousel('destroy');
                    https.get('content/testimonials/')
                    .then(function(res) {
                        console.log(res);
                        // t.slider = res;
                        res.forEach(function(v,j){
                            console.log(j%3);
                            if(j%3 == 0){
                                t.slider.push({items:[]});
                                let index = t.slider.length-1;
                                t.slider[index].items.push(v);
                            }
                            else{
                                let index = t.slider.length-1;
                                t.slider[index].items.push(v);
                            }
                        });
                        $('.carousel').carousel();
                    });
                },

                getCalculate: function() {
                    let me = this;
                    $('.se-pre-con').fadeIn("slow");
                    $('.trans').fadeIn("slow");
                    me.toolData.cashflowdata = [];
                    if (me.toolData.selectedType == 1) {
                        let data = {
                            Mortgage_Owed: me.toolData.Mortgage_Owed,
                            Interest_Rate: me.toolData.Interest_Rate,
                            Monthly_Installment: me.toolData.Monthly_Installment,
                            Monthly_Income: me.toolData.Monthly_Income,
                            Monthly_Expenses: me.toolData.Monthly_Expenses,
                            Current_Debt: me.toolData.Current_Debt,
                            Loan_Period: me.toolData.Loan_Period,
                            LumpsumIncome: me.toolData.LumpsumIncome,
                            LumpsumExpenses: me.toolData.LumpsumExpenses,
                        }
                        https.post('landing/mortgage/', data)
                        .then(function(res) {
                            this.isActive = true;
                            let longterm = JSON.parse(res.longterm);
                            let cashFlow = JSON.parse(res.cashFlow);

                            longterm = me.setArr([longterm]);
                            cashFlow = me.setArr([cashFlow]);
                            console.log('cashflowdata to review', cashFlow);
                            let original_loan = longterm[0];
                            console.log(original_loan);
                            me.toolData.original_loan.Repayment_Years = original_loan.Repayment_Years[0];
                            me.toolData.loan_with_sip.Repayment_Years = original_loan.Repayment_Years[1];
                            me.toolData.loan_with_sip.repayment_month_name = original_loan.Repayment_Months[2];
                            me.toolData.loan_with_sip.repayment_month_years = original_loan.Repayment_Years[2];
                            me.toolData.original_loan.Repayment_Months = original_loan.Repayment_Months[0];
                            me.toolData.loan_with_sip.Repayment_Months = original_loan.Repayment_Months[1];
                            me.toolData.original_loan.Total_Interest_Cost = original_loan.Total_Interest_Cost[0];
                            me.toolData.loan_with_sip.Total_Interest_Cost = original_loan.Total_Interest_Cost[1]
                            me.toolData.cashFlow = cashFlow[0];
                            me.toolData.monthList.forEach(function(v, i) {
                                let data = me.setArr([me.toolData.cashFlow[v]]);
                                me.toolData.cashflowdata.push({
                                    day: v,
                                    data: data[0]
                                });
                            });

                        }).then(function() {
                            $(".se-pre-con").fadeOut("slow");
                            $('.trans').fadeOut("slow");
                            this.isActive = false;
                        })
                    } else if (me.toolData.selectedType == 2) {
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
                            let longterm = JSON.parse(res.longterm);
                            let cashFlow = JSON.parse(res.cashFlow);

                            longterm = me.setArr([longterm]);
                            cashFlow = me.setArr([cashFlow]);
                            console.log('cashflowdata to review', cashFlow);
                            let original_loan = longterm[0];
                            console.log(original_loan);
                            me.toolData.original_loan.Repayment_Years = original_loan.Repayment_Years[0];
                            me.toolData.loan_with_sip.Repayment_Years = original_loan.Repayment_Years[1];
                            me.toolData.original_loan.Repayment_Months = original_loan.Repayment_Months[0];
                            me.toolData.loan_with_sip.Repayment_Months = original_loan.Repayment_Months[1];
                            me.toolData.loan_with_sip.repayment_month_name = original_loan.Repayment_Months[2];
                            me.toolData.loan_with_sip.repayment_month_years = original_loan.Repayment_Years[2];
                            me.toolData.original_loan.Total_Interest_Cost = original_loan.Total_Interest_Cost[0];
                            me.toolData.loan_with_sip.Total_Interest_Cost = original_loan.Total_Interest_Cost[1]
                            me.toolData.cashFlow = cashFlow[0];
                            me.toolData.monthList.forEach(function(v, i) {
                                let data = me.setArr([me.toolData.cashFlow[v]]);
                                // console.log(v)
                                me.toolData.cashflowdata.push({
                                    day: v,
                                    data: data[0]
                                });
                            })
                        }).then(function() {
                            $(".se-pre-con").fadeOut("slow");
                            $('.trans').fadeOut("slow");
                        });
                    } else if (me.toolData.selectedType == 3) {
                        let ptDate = new Date(me.toolData.Payment_Date);
                        let stDate = new Date(me.toolData.Statement_Date);
                        let stMonth = parseInt(stDate.getMonth() + 1) < 10 ? '0' + (stDate.getMonth() + 1) : (stDate.getMonth() + 1);
                        let ptMonth = parseInt(ptDate.getMonth() + 1) < 10 ? '0' + (ptDate.getMonth() + 1) : (ptDate.getMonth() + 1);
                        stDate = stDate.getDate() + '-' + stMonth + '-' + stDate.getFullYear();
                        ptDate = ptDate.getDate() + '-' + ptMonth + '-' + ptDate.getFullYear();
                        console.log(stDate);
                        console.log(ptDate);
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
                            me.credit = {
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
                                }

                            let longterm = JSON.parse(res.longterm);
                            let cashFlow = JSON.parse(res.cashFlow);
                            longterm = me.setArr([longterm]);
                            cashFlow = me.setArr([cashFlow]);
                            me.credit.output.totalCashFlow = cashFlow[0];
                            console.log('cashflowdata to review', cashFlow);
                            console.log(longterm);
                            let cashFlowData = {
                                Original_Credit_Card_Balance:[],
                                Amount_to_be_deposited_on_nanth:[],
                                Amount_Owed_on_CC_before_Statement_Date:[],
                                Statement_on_nanth:[],
                                Expense_To_be_withdrawn_on_nanth:[],
                                Present_Amount_Owed_on_CC_after_Expense_withdrawl:[]
                            }
                            let original_loan = longterm[0];
                            me.toolData.loan_with_sip.repayment_month_name = original_loan.Months[2];
                            me.toolData.loan_with_sip.repayment_month_years = original_loan.Years[2];
                            me.getCreditMonths(cashFlow[0])
                        }).then(function() {
                            $(".se-pre-con").fadeOut("slow");
                            $('.trans').fadeOut("slow");
                        });
                    }
                },
                // getCreditMonths: function(data) {
                //     let t = this;
                //     let count = 0;
                //     t.toolData.creditMonth = [];
                //     console.log(data);
                //     for (var i in data) {
                //         count++;

                //         if (count < 6) {
                //             t.toolData.creditMonth.push(i);
                //             t.toolData.creditCashFlow[i] = [];
                //             if (t.toolData.creditMonth.length == 5) {
                //                 console.log(t.toolData.creditMonth);
                //                 t.setCreditToolOutputData(data);
                //             }
                //         }
                //     }
                // },
                // setCreditToolOutputData:function(data){
                //     console.log(data);
                //     let t = this;
                //     let cashFlowData = {
                //         original_bal:[],
                //         amount_deposited:[],
                //         amount_owed_on_cc:[],
                //         statement_nanth:[],
                //         expense_withdrawn:[],
                //         present_amount_awed:[],
                //     }
                //     data.forEach(function(v,m){
                //         console.log(v);
                //         console.log(t.convertObjToArr(v))
                //         if(m == 0){
                //             t.toolData.creditCashFlow['original_bal'] = t.convertObjToArr(v);
                //         }
                //         if(m == 1){
                //             t.toolData.creditCashFlow['amount_deposited']= t.convertObjToArr(v);
                //         }
                //         if(m == 2){
                //             t.toolData.creditCashFlow['amount_owed_on_cc'] = t.convertObjToArr(v);
                //         }
                //         if(m == 3){
                //             t.toolData.creditCashFlow['statement_nanth'] = t.convertObjToArr(v);
                //         }
                //         if(m == 4){
                //             t.toolData.creditCashFlow['expense_withdrawn'] = t.convertObjToArr(v);
                //         }
                //         if(m == 5){
                //             t.toolData.creditCashFlow['present_amount_awed'] = t.convertObjToArr(v);
                //         }
                //     });
                // },
                getCreditMonths: function() {
                    let t = this;
                    let month = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                    let count = 0;
                    let currY = t.currYear;
                    currY = currY.slice(-2);
                    t.credit.output.months = [];
                    for (var i in t.credit.output.totalCashFlow) {
                        let monName = i.split('-');
                        if (currY == monName[1]) {
                            if(t.credit.output.months.length < 4){
                                if (month.includes(monName[0])) {
                                    // console.log(i)
                                    count++;
                                    t.credit.output.months.push(i);
                                }
                            }
                        }
                        console.log(count);
                        if (count == t.credit.output.months.length) {
                            t.lastYear = '20' + monName[1];
                            t.setCreditToolOutputData(t.credit.output.totalCashFlow);
                        }
                    }
                },

                setCreditToolOutputData: function(d) {
                    let t = this;
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
                        t.key0 = Object.keys(sortData[0])[0];
                        t.key1 = Object.keys(sortData[0])[1];
                        t.key2 = Object.keys(sortData[0])[2];
                        t.key3 = Object.keys(sortData[0])[3];
                        t.key4 = Object.keys(sortData[0])[4];
                        t.key5 = Object.keys(sortData[0])[5];
                       
                        aiptoolData.Original_Credit_Card_Balance.push(sortData[0][t.key0]);
                        aiptoolData.Amount_to_be_deposited_on_nanth.push(sortData[0][t.key1]);
                        aiptoolData.Amount_Owed_on_CC_before_Statement_Date.push(sortData[0][t.key2]);
                        aiptoolData.Statement_on_nanth.push(sortData[0][t.key3]);
                        aiptoolData.Expense_To_be_withdrawn_on_nanth.push(sortData[0][t.key4]);
                        aiptoolData.Present_Amount_Owed_on_CC_after_Expense_withdrawl.push(sortData[0][t.key5]);
                        // console.log(sortData);
                        if (t.credit.output.months.length == (i + 1))
                            t.credit.output.data = aiptoolData;
                    });
                    t.key0=t.key0.replace(/_/g," ");
                    t.key1=t.key1.replace(/_/g," ");
                    t.key2=t.key2.replace(/_/g," ");
                    t.key3=t.key3.replace(/_/g," ");
                    t.key4=t.key4.replace(/_/g," ");
                    t.key5=t.key5.replace(/_/g," ");

                },
                convertObjToArr: function(obj){
                    let resArr = []
                    console.log(obj);
                    let count = 0;
                    Object.keys(obj).forEach(function(key) {
                        if(count < 5){
                            resArr.push(obj[key]);
                        }
                        count++;
                    })
                    return resArr;
                },
                formatAmt: function(value) {
                    let val = (value / 1).toFixed(2).replace(',', '.')
                    return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
                },

                setArr: function(arr) {
                    arr.forEach(function(e, i) {
                        Object.keys(e).forEach(function(key) {
                            var val = e[key],
                            newKey = key.replace(/\s+/g, '_');
                            delete arr[i][key];
                            arr[i][newKey] = val;
                        });
                    });
                    return arr;
                },
                rangeSlider: function() {
                    var $element = $('input[type="range"]');
                    var $handle;

                    $element.rangeslider({
                        polyfill: false,
                        onInit: function() {
                            $handle = $('.rangeslider__handle', this.$range);
                            updateHandle($handle[0], this.value);
                            $("#amount-label").html('<span class="pricing__dollar">€</span>' + this.value);
                        }
                    }).on('input', function() {
                        updateHandle($handle[0], this.value);
                        $("#amount-label").html('<span class="pricing__dollar">€</span>' + this.value);
                    });

                    function updateHandle(el, val) {
                        el.textContent = val;
                    }

                    $('input[type="range"]').rangeslider();
                },
                getLink: function() {
                    https.get('content/social-media')
                    .then(function(res) {
                        console.log(res);
                    });
                },
            }
        })
    </script>
</body>
</html>