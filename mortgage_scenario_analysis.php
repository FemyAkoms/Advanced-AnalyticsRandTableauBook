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

        .se-pre-con1 {
            position: absolute;
            width: 100px;
            height: 100px;
             top: 12%; 
            left: 45%;
            z-index: 9999;
            background: url(/images/302-loader-1.gif) center no-repeat #fff;
        }

        .trans1 {
            position: absolute;
            width: 95%;
            height: 348px;
            /* top: 107px; */
            left: 60px;
            background-color: rgba(0, 0, 0, 0.2);
            margin-left: -25px;
            z-index: 888;
            border-radius: 10px;
        }

        .se-pre-con {
            position: absolute;
            width: 100px;
            height: 100px;
            /* top: 21%; */
            bottom: 7%;
            left: 45%;
            z-index: 9999;
            background: url(/images/302-loader-1.gif) center no-repeat #fff;
        }

        .trans {
            position: absolute;
            width: 95%;
            height: 348px;
            /* top: 107px; */
            left: 60px;
            background-color: rgba(0, 0, 0, 0.2);
            margin-left: -25px;
            z-index: 888;
            border-radius: 10px;
        }
        .vdp-datepicker input {
            border:0px
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
                <div class="container-fluid sectionbackground" style="height: 1800px">
                    <div class="row">
                        <?php include('mor_output_confg.php'); ?>
                        <div class="col-md-9">
                            <div class="rightwhitesidesignd">
                                <div class="rightwhiteside1">
                                    <div class="d-flex bd-highlight rightwhiteside2">
                                        <div class="mr-auto bd-highlight">
                                            <div class="wellcomedm">
                                                <p>
                                                    <i class="fas fa-file-import wellcomeiconde"></i> Mortgage Scenario Analysis</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <form action="">
                                        <div class=" z-depth-4 inputdata_filedesign">
                                            <div class="trans1"></div>
                                            <div class="se-pre-con1"></div>
                                            <div>
                                                <div class="d-flex bd-highlight">
                                                    <div class=" bd-highlight">
                                                        <div class="Input_Data_Form" style="border-bottom:none;">
                                                            Before Analysis
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div style="overflow-x:auto;border-bottom-right-radius: 25px;
                                                    border-bottom-left-radius: 25px">
                                                    <table v-if="noInputM" style="height: 278px;">
                                                        <tr class="table_row_design2" style="background-color: #edf1f9">
                                                            <td style="text-align:center">
                                                                <p style="font-size:30px; font-weight:bold;color: #9E9E9E;">Oops! No Input Yet.</p>
                                                                <a class="button" href="mortgage_input"><i class="icon-home"></i> Go back mortgage input page.</a>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table class="table table-striped" v-if="!noInputM" style="height: 262px;">
                                                        <thead style="background-color: #003770; color: white; font-size: 12px;">
                                                            <tr>
                                                                <th scope="col" style="padding-top:12px; padding-bottom:12px;font-weight:500;">
                                                                LOAN TYPE</th>
                                                                <th scope="col" style="padding-top:12px; padding-bottom:12px;font-weight:500;">
                                                                VALUE</th>

                                                                <th scope="col" style="padding-top:12px; padding-bottom:12px;font-weight:500;">
                                                                Repayment Years</th>


                                                                <th scope="col" style="padding-top:12px; padding-bottom:12px;font-weight:500;">
                                                                MONTHS</th>
                                                                <th scope="col" style="padding-top:12px; padding-bottom:12px;font-weight:500;">
                                                                INTEREST COST</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr style="padding-top:12px; padding-bottom:12px;">
                                                                <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                Original Loan</td>


                                                                <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                {{formatAmt(mortgage.output.loan_term_comparison.Loan_Amount['Original Loan'])}}</td>
                                                                <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                {{(mortgage.output.loan_term_comparison.Repayment_Years['Original Loan'])}}</td>
                                                                <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                {{mortgage.output.loan_term_comparison.Repayment_Months['Original Loan']}}</td>
                                                                <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                {{(mortgage.output.loan_term_comparison.Total_Interest_Cost['Original Loan'])}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                Original Loan with AIP Software</td>


                                                                <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                {{formatAmt(mortgage.output.loan_term_comparison.Loan_Amount['Original Loan with AIP Software'])}}</td>
                                                                <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                {{(mortgage.output.loan_term_comparison.Repayment_Years['Original Loan with AIP Software'])}}</td>
                                                                <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                {{(mortgage.output.loan_term_comparison.Repayment_Months['Original Loan with AIP Software'])}}</td>
                                                                <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                {{(mortgage.output.loan_term_comparison.Total_Interest_Cost['Original Loan with AIP Software'])}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;color: #003770;">
                                                                HELOC/Revolving Loan Payoff Period</td>


                                                                <td style="padding-top:12px; padding-bottom:12px;font-weight:400;color: #003770;">
                                                                {{mortgage.output.loan_term_comparison.Loan_Amount['HELOC/Revolving Loan Payoff Period']}}</td>
                                                                <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                {{mortgage.output.loan_term_comparison.Repayment_Years['HELOC/Revolving Loan Payoff Period']}}</td>
                                                                <td style="padding-top:12px; padding-bottom:12px;font-weight:400;color: #003770;">
                                                                {{mortgage.output.loan_term_comparison.Repayment_Months['HELOC/Revolving Loan Payoff Period']}}</td>
                                                                <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                {{(mortgage.output.loan_term_comparison.Total_Interest_Cost['HELOC/Revolving Loan Payoff Period'])}}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    </form>

                                    <form action="">
                                        <div class=" z-depth-4 inputdata_filedesign">
                                            <!-- <div class="trans"></div> -->
                                            <!-- <div class="se-pre-con"></div> -->
                                            <div>
                                                <div class="d-flex bd-highlight">
                                                    <div class=" bd-highlight">
                                                        <div class="Input_Data_Form" style="border-bottom:none;">
                                                        What If I ...
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div style="overflow-x:auto;border-bottom-right-radius: 25px;border-bottom-left-radius: 25px">
                                                    <table v-if="noInput" style="height: 278px;">
                                                        <tr class="table_row_design2" style="background-color: #edf1f9">
                                                            <td style="text-align:center">
                                                                <p style="font-size:30px; font-weight:bold;color: #9E9E9E;">Oops! No Input Yet.</p>
                                                                <a class="button" href="mortgage_input"><i class="icon-home"></i> Go back mortgage input page.</a>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table class="table table-striped" v-if="!noInput" style="height: 262px;">
                                                        <thead style="background-color: #003770; color: white; font-size: 12px;">
                                                            <tr v-if="!noInput">
                                                                <th scope="col" style="padding-top:12px; padding-bottom:12px;font-weight:500;padding-left: 35px;">
                                                                Action</th>
                                                                <th scope="col" style="padding-top:12px; padding-bottom:12px;font-weight:500;">
                                                                Amount</th>

                                                            </tr>
                                                        </thead>
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
                                                                        <!-- <input type="text" class="form-control 
                                                                        forfromcontroldepersen" v-model="mortgage.output.yearly_balances.input.income_frequency"  > -->

                                                                        <select  class="form-control forfromcontroldepersen"
                                                                        :style="[error.income_frequency?{'border-color':'red'}:{}]" v-model="mortgage.output.yearly_balances.input.income_frequency" >
                                                                         <option disabled selected value> select frequency </option>
                                                                         <option value="Monthly">Monthly</option>
                                                                         <option value="Monthly">One-Time</option>
                                                                         <option value="Yearly">Yearly</option>
                                                                         <option value="Weekly">Weekly</option>
                                                                         <option value="Bi-Weekly">Bi-Weekly</option>
                                                                         <option value="Half Yearly">Half Yearly</option>
                                                                        </select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr style="padding-top:12px; padding-bottom:12px;">
                                                                <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                    <div class="Property_Value" style="background-color:transparent">Income Start at :</div>
                                                                </td>
                                                                <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                    <div class="input-group mb-3">
                                                                        <!-- <input type="text" class="form-control forfromcontroldepersen" v-model="mortgage.output.yearly_balances.input.income_start"> -->

                                                                        <vuejs-datepicker :language="en" placeholder="Start Date" :style="[error.income_start?{'border-color':'red'}:{}]"
                                                                         style="border-radius: 26px !important;padding-left: 17px;margin-left: -43px;width: 150px !important;"  class="form-control modalcontrol "v-model="mortgage.output.yearly_balances.input.income_start"></vuejs-datepicker>

                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr style="padding-top:12px; padding-bottom:12px;">
                                                                <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                    <div class="Property_Value" style="background-color:transparent">Income Ends at:</div>
                                                                </td>
                                                                <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                    <div class="input-group mb-3">
                                                                        <!-- <input type="text" class="form-control forfromcontroldepersen" v-model="mortgage.output.yearly_balances.input.income_end"> -->

                                                                        <vuejs-datepicker :language="en" placeholder="End Date" :style="[error.income_end?{'border-color':'red'}:{}]"
                                                                         style="border-radius: 26px !important;padding-left: 17px;margin-left: -43px;width: 150px !important;"  class="form-control modalcontrol " v-model="mortgage.output.yearly_balances.input.income_end"></vuejs-datepicker>
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
                                                                        <!-- <input type="text" class="form-control forfromcontroldepersen" v-model="mortgage.output.yearly_balances.input.expense_frequency"> -->

                                                                        <select  class="form-control forfromcontroldepersen"
                                                                        :style="[error.expense_frequency?{'border-color':'red'}:{}]" v-model="mortgage.output.yearly_balances.input.expense_frequency" >
                                                                                                                    <option disabled selected value> select frequency </option>
                                                                                                                    <option value="Monthly">Monthly</option>
                                                                                                                    <option value="Monthly">One-Time</option>
                                                                                                                    <option value="Yearly">Yearly</option>
                                                                                                                    <option value="Weekly">Weekly</option>
                                                                                                                    <option value="Bi-Weekly">Bi-Weekly</option>
                                                                                                                    <option value="Half Yearly">Half Yearly</option>

                                                                                                                </select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr style="padding-top:12px; padding-bottom:12px;">
                                                                <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                    <div class="Property_Value" style="background-color:transparent">Expense Start at :</div>
                                                                </td>
                                                                <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                    <div class="input-group mb-3">
                                                                        <!-- <input type="text" class="form-control forfromcontroldepersen" v-model="mortgage.output.yearly_balances.input.expense_start"> -->

                                                                        <vuejs-datepicker :language="en" placeholder="Start Date" :style="[error.expense_start?{'border-color':'red'}:{}]"
                                                                         style="border-radius: 26px !important;padding-left: 17px;margin-left: -43px;width: 150px !important;"  class="form-control modalcontrol " v-model="mortgage.output.yearly_balances.input.expense_start"></vuejs-datepicker>

                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr style="padding-top:12px; padding-bottom:12px;">
                                                                <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                    <div class="Property_Value" style="background-color:transparent">Expense Ends at:</div>
                                                                </td>
                                                                <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                    <div class="input-group mb-3">
                                                                        <!-- <input type="text" class="form-control forfromcontroldepersen" v-model="mortgage.output.yearly_balances.input.expense_end"> -->
                                                                        <vuejs-datepicker :language="en" placeholder="End Date" style="border-radius: 26px !important;padding-left: 17px;margin-left: -43px;width: 150px !important;"  class="form-control modalcontrol "  :style="[error.expense_end?{'border-color':'red'}:{}]" v-model="mortgage.output.yearly_balances.input.expense_end"></vuejs-datepicker>

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
                                        </div>
                                    </form>

                                    <form action="" v-if="isActive">
                                        <div class=" z-depth-4 inputdata_filedesign">
                                            <div class="trans"></div>
                                            <div class="se-pre-con"></div>
                                            <div>
                                                <div class="d-flex bd-highlight">
                                                    <div class=" bd-highlight">
                                                        <div class="Input_Data_Form" style="border-bottom:none;">
                                                            After Analysis
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div style="overflow-x:auto;border-bottom-right-radius: 25px;
                                                    border-bottom-left-radius: 25px">
                                                    <table v-if="noInput" style="height: 278px;">
                                                        <tr class="table_row_design2" style="background-color: #edf1f9">
                                                            <td style="text-align:center">
                                                                <p style="font-size:30px; font-weight:bold;color: #9E9E9E;">Oops! No Input Yet.</p>
                                                                <a class="button" href="mortgage_input"><i class="icon-home"></i> Go back mortgage input page.</a>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table class="table table-striped" v-if="!noInput" style="height: 262px;">
                                                        <thead style="background-color: #003770; color: white; font-size: 12px;">
                                                            <tr>
                                                                <th scope="col" style="padding-top:12px; padding-bottom:12px;font-weight:500;">
                                                                LOAN TYPE</th>
                                                                <th scope="col" style="padding-top:12px; padding-bottom:12px;font-weight:500;">
                                                                VALUE</th>

                                                                <th scope="col" style="padding-top:12px; padding-bottom:12px;font-weight:500;">
                                                                Repayment Years</th>


                                                                <th scope="col" style="padding-top:12px; padding-bottom:12px;font-weight:500;">
                                                                MONTHS</th>
                                                                <th scope="col" style="padding-top:12px; padding-bottom:12px;font-weight:500;">
                                                                INTEREST COST</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <!-- <tr style="padding-top:12px; padding-bottom:12px;">
                                                                <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                Original Loan</td>


                                                                <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                {{formatAmt(mortgage.output.loan_term_scenario_comparison.Loan_Amount['Original Loan'])}}</td>
                                                                <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                {{(mortgage.output.loan_term_scenario_comparison.Repayment_Years['Original Loan'])}}</td>
                                                                <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                {{mortgage.output.loan_term_scenario_comparison.Repayment_Months['Original Loan']}}</td>
                                                                <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                {{(mortgage.output.loan_term_scenario_comparison.Total_Interest_Cost['Original Loan'])}}</td>
                                                            </tr> -->
                                                            <tr>
                                                                <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                Original Loan with AIP Software</td>


                                                                <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                {{formatAmt(mortgage.output.loan_term_scenario_comparison.Loan_Amount['Original Loan with AIP Software'])}}</td>
                                                                <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                {{(mortgage.output.loan_term_scenario_comparison.Repayment_Years['Original Loan with AIP Software'])}}</td>
                                                                <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                {{(mortgage.output.loan_term_scenario_comparison.Repayment_Months['Original Loan with AIP Software'])}}</td>
                                                                <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                {{(mortgage.output.loan_term_scenario_comparison.Total_Interest_Cost['Original Loan with AIP Software'])}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;color: #003770;">
                                                                HELOC/Revolving Loan Payoff Period</td>


                                                                <td style="padding-top:12px; padding-bottom:12px;font-weight:400;color: #003770;">
                                                                {{mortgage.output.loan_term_scenario_comparison.Loan_Amount['HELOC/Revolving Loan Payoff Period']}}</td>
                                                                <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                {{mortgage.output.loan_term_scenario_comparison.Repayment_Years['HELOC/Revolving Loan Payoff Period']}}</td>
                                                                <td style="padding-top:12px; padding-bottom:12px;font-weight:400;color: #003770;">
                                                                {{mortgage.output.loan_term_scenario_comparison.Repayment_Months['HELOC/Revolving Loan Payoff Period']}}</td>
                                                                <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                                                {{(mortgage.output.loan_term_scenario_comparison.Total_Interest_Cost['HELOC/Revolving Loan Payoff Period'])}}</td>
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
<script src="https://unpkg.com/vuejs-datepicker"></script>
<script src="https://unpkg.com/vuejs-datepicker/dist/locale/translations/en.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>


<script>
    var app = new Vue({
        el: '#app',
        components: {
                'vuejs-datepicker': vuejsDatepicker,

            },
        data: {
            en: vdp_translation_en.js,

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
                noInput: false,
                noInputM:false,
                isActive: false,
                error:{
                income_frequency:false,
                income_start:false,
                income_end:false,
                expense_frequency:false,
                expense_start:false,
                expense_end:false,
            },
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
                    currentDebt: {
                        data: [],
                        addData: {
                            description: "",
                            owed: "",
                            as_of: "",
                            payment: "",
                            rate: "",
                            debt_type: "",
                            user: 1
                        }
                    },
                    lumbSumIncome: {
                        addlumbsumIncome: {
                            description: "",
                            amount: "",
                            when_injecting: "",
                            user: 1
                        }
                    },
                    lumbSumExp: {
                        addLumbSumExp: {
                            description: "",
                            amount: "",
                            when_expended: "",
                            user: 1
                        }
                    },
                    morRegIncome: {
                        addmorRegIncome: {
                            description: "",
                            amount: "",
                            frequency: "",
                            income_type: "",
                            income_starts: "",
                            income_ends: "",
                            user: 1
                        }
                    },
                    output: {
                        months: [],
                        data: {
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
                        loan_term_scenario_comparison: {
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
            // t.getUser();
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
            t.getApiOutput();
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
                   
                  
            customFormatter:function(date) {
                let t=this;
                console.log(date);
                let dt= moment(date).format('YYYY-MM-DD');

                console.log(dt);
                return dt;
            },
                // ********************* MORTGAGE TOOL ******************************* //
               
                CalculateWhat:function(){
                  let t = this;

                  t.mortgage.output.yearly_balances.scenario_flag=true;
                    // t.isActive =true;
                  let data = t.mortgage.output.yearly_balances.input;
                  let uri ='?scenario_flag=true';
                  let income_starts_date ='';
                  let income_starts_ends ='';
                  let exp_starts_date ='';
                  let exp_starts_ends ='';
                  $('.se-pre-con').fadeIn("slow");
                  $('.trans').fadeIn("slow");
                  if(t.mortgage.output.yearly_balances.input.income_amount){
                        if(!t.mortgage.output.yearly_balances.input.income_frequency){
                       t.error.income_frequency=true;
                        }else{
                       t.error.income_frequency=false;
                        }
                        if(!t.mortgage.output.yearly_balances.input.income_start){
                        t.error.income_start=true;
                        }else{
                        t.error.income_start=false;
                        }
                        if(!t.mortgage.output.yearly_balances.input.income_end){
                       t.error.income_end=true;
                        }else{
                       t.error.income_end=false;
                        }
                    } else{
                        t.error.income_frequency=false;
                        t.error.income_start=false;
                        t.error.income_end=false;
                    }
                    
                    if(t.mortgage.output.yearly_balances.input.expense_amount){
                        if(!t.mortgage.output.yearly_balances.input.expense_frequency){
                            t.error.expense_frequency=true;
                        }else{
                            t.error.expense_frequency=false;
                        }
                        if(!t.mortgage.output.yearly_balances.input.expense_start){
                        t.error.expense_start=true;
                        }else{
                        t.error.expense_start=false;
                        }
                        if(!t.mortgage.output.yearly_balances.input.expense_end){
                        t.error.expense_end=true;
                        }else{
                        t.error.expense_end=false;

                        }
                    }else{
                        t.error.expense_frequency=false;
                        t.error.expense_start=false;
                        t.error.expense_end=false;
                    }

                  if(t.mortgage.output.yearly_balances.input.income_start)
                    {
                        income_starts_date = t.customFormatter(t.mortgage.output.yearly_balances.input.income_start)
                    }
                    else{
                        income_starts_date=  t.mortgage.output.yearly_balances.input.income_start
                    }


                    if(t.mortgage.output.yearly_balances.input.income_end)
                    {
                        income_starts_ends = t.customFormatter(t.mortgage.output.yearly_balances.input.income_end)
                    }
                    else{
                        income_starts_ends=  t.mortgage.output.yearly_balances.input.income_end
                    }
                

                    if(t.mortgage.output.yearly_balances.input.expense_start)
                    {
                        exp_starts_date = t.customFormatter(t.mortgage.output.yearly_balances.input.expense_start)
                    }
                    else{
                        exp_starts_date=  t.mortgage.output.yearly_balances.input.expense_start
                    }

                    if(t.mortgage.output.yearly_balances.input.expense_end)
                    {
                        exp_starts_ends = t.customFormatter(t.mortgage.output.yearly_balances.input.expense_end)
                    }
                    else{
                        exp_starts_ends=  t.mortgage.output.yearly_balances.input.expense_end
                    } 


                  let payLoad = {
                    scenario_flag: t.mortgage.output.yearly_balances.scenario_flag,
                    // income_flag:t.mortgage.output.yearly_balances.income_flag,
                    // expense_flag:t.mortgage.output.yearly_balances.expense_flag,
                    income_amount:t.mortgage.output.yearly_balances.input.income_amount,
                    income_frequency:t.mortgage.output.yearly_balances.input.income_frequency,
                    income_starts:t.mortgage.output.yearly_balances.input.income_start,
                    income_ends:t.mortgage.output.yearly_balances.input.income_end,
                    expense_amount:t.mortgage.output.yearly_balances.input.expense_amount,
                    expense_frequency:t.mortgage.output.yearly_balances.input.expense_frequency,
                    expense_starts:t.mortgage.output.yearly_balances.input.expense_start,
                    expense_ends:t.mortgage.output.yearly_balances.input.expense_end,
                    }

                    if(data.income_amount.length >0 || data.income_start.length >0 || data.income_end.length >0 || data.income_frequency.length >0){
                        payLoad.income_flag = true;
                        uri =uri+'&income_amount='+t.mortgage.output.yearly_balances.input.income_amount+'&income_starts='+income_starts_date+'&income_ends='+income_starts_ends+'&income_frequency='+t.mortgage.output.yearly_balances.input.income_frequency+'&income_flag=true';
                    }
                    if(data.expense_amount.length >0 || data.expense_frequency.length >0 || data.expense_start.length >0 || data.expense_end.length >0){
                        payLoad.expense_flag=true;
                        uri =uri+'&expense_amount='+t.mortgage.output.yearly_balances.input.expense_amount+'&expense_starts='+exp_starts_date+'&expense_ends='+exp_starts_ends+'&expense_frequency='+t.mortgage.output.yearly_balances.input.expense_frequency+'&expense_flag=true';
                    }
                    if(t.mortgage.output.yearly_balances.input.income_amount || t.mortgage.output.yearly_balances.input.expense_amount){
                    if(!t.error.income_frequency && !t.error.income_start && !t.error.income_end && !t.error.expense_frequency && !t.error.expense_start && !t.error.expense_end){

                        t.getApiScenarioOutput(uri)
                    }
                    }
            },

            getApiOutput : function(payLoad=null) {
                let t = this;
                    $(".se-pre-con1").fadeIn("slow");
                    $('.trans1').fadeIn("slow");
                    https.get('/inputs/aiptool/inputdata/')
                    .then(function(res) {
                        if (res.length > 0) {
                            t.noInputM = false;
                              https.get('outputs/mortgage/')
                              .then(function(res) {
                                console.log(res);
                                this.isActive = true;
                                t.noInputM = false;

                                console.log(t.noInputM);
                                if (!res.hasValidationError && !res.hasError) {
                                    let LoanTermComparison = JSON.parse(res.LoanTermComparison);
                                    LoanTermComparison = t.setArr([LoanTermComparison]);
                                    t.mortgage.output.loan_term_comparison = LoanTermComparison[0];
                                }

                            }).then(function() {
                                $(".se-pre-con1").fadeOut("slow");
                                $('.trans1').fadeOut("slow");
                            });
                        } 
                });
            },

            
            getApiScenarioOutput : function(payLoad=null) {
                let t = this;
                    t.isActive = true;
                    https.get('/inputs/aiptool/inputdata/')
                    .then(function(res) {
                        if (res.length > 0) {
                            t.noInput = false;
                            let uri =   https.get('outputs/mortgage/');
                            if(payLoad != null){
                             uri = https.get('outputs/mortgage/'+payLoad)
                             uri.then(function(res) {
                                 console.log(res);
                                t.noInput = false;
                                if (!res.hasValidationError && !res.hasError) {
                                console.log(t.isActive)
                                let LoanTermComparison = JSON.parse(res.LoanTermComparison);
                                LoanTermComparison = t.setArr([LoanTermComparison]);
                                t.mortgage.output.loan_term_scenario_comparison = LoanTermComparison[0];
                                console.log('Loan_Amount.....', t.mortgage.output.loan_term_scenario_comparison.Loan_Amount);
                                }
                            }).then(function() {
                                $(".se-pre-con").fadeOut("slow");
                                $('.trans').fadeOut("slow");
                                // t.isActive = false;
                                console.log(t.isActive)
                            });
                        }else{
                              https.get('outputs/mortgage/')
                              .then(function(res) {
                                console.log(res);
                                this.isActive = true;
                                t.noInput = false;

                                console.log(t.noInput);
                                if (!res.hasValidationError && !res.hasError) {
                                    let LoanTermComparison = JSON.parse(res.LoanTermComparison);
                                    LoanTermComparison = t.setArr([LoanTermComparison]);
                                    t.savings.output.loan_term_comparison = LoanTermComparison[0];
                                }

                            }).then(function() {
                                $(".se-pre-con").fadeOut("slow");
                                $('.trans').fadeOut("slow");
                                this.isActive = false;
                            });
                        }                    
                    }
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