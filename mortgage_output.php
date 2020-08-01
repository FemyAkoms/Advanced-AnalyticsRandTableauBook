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
            height: 976px;
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
                                        <div class="trans"></div>
                                        <div class="se-pre-con"></div>
                                        <div>
                                            <div class="row">
                                                <div class="col-md-6 col-xs-12">
                                                    <div class="Input_Data_Form" style="border-bottom:none;">
                                                        Cash Flow Summary
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-xs-12">
                                                    <div class="flex-container ml-3 pull-right">
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

                                                <div style="overflow-x:auto;border-bottom-right-radius: 25px;
                                        border-bottom-left-radius: 25px">

                                                    <table v-if="noInput">

                                                        <tr class="table_row_design2" style="background-color: #edf1f9;height: 906px;">
                                                            <td style="text-align:center">

                                                                <p style="font-size:30px; font-weight:bold;color: #9E9E9E;">Oops! No Input Yet.</p>
                                                                <a class="button" href="mortgage_input"><i class="icon-home"></i> Go back mortgage input page.</a>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table v-if="!noInput">

                                                        <tr class="table_row_design">
                                                            <th style="padding-left: 20px">P&I & HELOC DETAILS</th>
                                                            <th v-for="(v,i) in mortgage.output.months">{{v}}</th>
                                                        </tr>
                                                        <tr class="table_row_design1">
                                                            <td style="padding-left: 20px">Original Loan Balance</td>
                                                            <td v-for="(v,i) in mortgage.output.data.Original_Loan_Balance">$ {{formatAmt(v)}}</td>
                                                        </tr>
                                                        <tr class="table_row_design2">
                                                            <td style="padding-left: 20px">Original HELOC Credit Limit
                                                            </td>
                                                            <td v-for="(v,i) in mortgage.output.data.Original_HELOC_Credit_Limit">$ {{formatAmt(v==null?0:v)}}</td>
                                                        </tr>
                                                        <tr class="table_row_design1">
                                                            <td style="padding-left: 20px">HELOC Interest Rate</td>
                                                            <td v-for="(v,i) in mortgage.output.data.HELOC_Interest_Rate">% {{v==null?0:(v*100)}}</td>

                                                        </tr>
                                                        <tr class="table_row_design2">
                                                            <td style="padding-left: 20px">Amount Injected into Loan
                                                            </td>
                                                            <td v-for="(v,i) in mortgage.output.data.Amount_Injected_into_Loan">$ {{formatAmt(v==null?0:v)}}</td>
                                                        </tr>
                                                        <tr class="table_row_design1">
                                                            <td style="padding-left: 20px">New Loan Balance After
                                                                Injection</td>
                                                            <td v-for="(v,i) in mortgage.output.data.New_Loan_Balance_After_Injection">$ {{formatAmt(v==null?0:v)}}</td>
                                                        </tr>

                                                        <tr class="table_row_design2">
                                                            <td style="padding-left: 20px">HELOC/Revolving Loan Opening
                                                                Balance</td>
                                                            <td v-for="(v,i) in mortgage.output.data.HELOC_Revolving_Loan_Opening_Balance">$ {{formatAmt(v==null?0:v)}}</td>
                                                        </tr>
                                                        <tr class="table_row_design1">
                                                            <td style="padding-left: 20px">HELOC/Revolving Loan Unused
                                                                Amount</td>
                                                            <td v-for="(v,i) in mortgage.output.data.HELOC_Revolving_Loan_Unused_Amount">$ {{formatAmt(v==null?0:v)}}</td>
                                                        </tr>
                                                        <tr class="table_row_design2">
                                                            <td style="padding-left: 20px">Regular Income</td>
                                                            <td v-for="(v,i) in mortgage.output.data.Regular_Income">$ {{formatAmt(v==null?0:v)}}</td>
                                                        </tr>
                                                        <tr class="table_row_design1">
                                                            <td style="padding-left: 20px">One - OFF Income</td>
                                                            <td v-for="(v,i) in mortgage.output.data.ONE___OFF_Income">$ {{formatAmt(v==null?0:v)}}</td>

                                                        </tr>
                                                        <tr class="table_row_designnextstep">
                                                            <th style="padding-left: 20px">TOTAL INCOME</th>
                                                            <th v-for="(v,i) in mortgage.output.data.Total_Income">$ {{formatAmt(v==null?0:v)}}</th>
                                                        </tr>
                                                        <tr class="table_row_design1">
                                                            <td style="padding-left: 20px">Regular Expenses</td>
                                                            <td v-for="(v,i) in mortgage.output.data.Regular_Expenses">$ {{formatAmt(v==null?0:v)}}</td>
                                                        </tr>
                                                        <tr class="table_row_design2">
                                                            <td style="padding-left: 20px">ONE - OFF Expenses</td>
                                                            <td v-for="(v,i) in mortgage.output.data.ONE___OFF_Expense">$ {{formatAmt(v==null?0:v)}}</td>
                                                        </tr>
                                                        <tr class="table_row_design1">
                                                            <td style="padding-left: 20px">Debt Payments</td>
                                                            <td v-for="(v,i) in mortgage.output.data.Debt_Payments">$ {{formatAmt(v==null?0:v)}}</td>
                                                        </tr>
                                                        <tr class="table_row_design2">
                                                            <td style="padding-left: 20px">Loan Monthly Payments</td>
                                                            <td v-for="(v,i) in mortgage.output.data.Loan_Monthly_Payment">$ {{formatAmt(v==null?0:v)}}</td>
                                                        </tr>
                                                        <tr class="table_row_designnextstep1">
                                                            <th style="padding-left: 20px">TOTAL EXPENSES</th>
                                                            <th v-for="(v,i) in mortgage.output.data.Total_Expense">$ {{formatAmt(v==null?0:v)}}</th>
                                                        </tr>
                                                        <tr class="table_row_designnextstep2">
                                                            <td style="padding-left: 20px">TOTAL INTEREST DUE</td>
                                                            <td v-for="(v,i) in mortgage.output.data.Total_Interest_Due">$ {{formatAmt(v==null?0:v)}}</td>
                                                        </tr>
                                                        <tr class="table_row_design1">
                                                            <td style="padding-left: 20px">Original HELOC/Revolving Loan
                                                                Reduction Amount</td>
                                                            <td v-for="(v,i) in mortgage.output.data.Original_HELOC_Revolving_Loan_Reduction_Amount">$ {{formatAmt(v==null?0:v)}}</td>
                                                        </tr>
                                                        <tr class="table_row_design2">
                                                            <td style="padding-left: 20px">Loan Closing Balance
                                                                (Projected Forecast)</td>
                                                            <td v-for="(v,i) in mortgage.output.data.Loan_Closing_Balance__Projected_Forecast">$ {{formatAmt(v==null?0:v)}}</td>
                                                        </tr>
                                                        <tr class="table_row_design1">
                                                            <td style="padding-left: 20px">Left Over from Checking
                                                                Account</td>
                                                            <td v-for="(v,i) in mortgage.output.data.Left_Over_from_Checking_Account">$ {{formatAmt(v==null?0:v)}}</td>
                                                        </tr>
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
    <?php include('footer.php') ?>