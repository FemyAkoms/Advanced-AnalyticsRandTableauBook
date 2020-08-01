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
                                <span class="textmort2">
                                    <div class="form-group">
                                        <select class=" textmort1" v-model="toolData.selectedType" @change='changeType()'>
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
                                            <p>$ 4500.00</p>
                                            <p class="monthlyic">Monthly</p>
                                        </div>
                                        <div class="tatalincomeimg1">
                                            <p>$28.08 K</p>
                                            <p class="monthlyic1">Yearly</p>
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
                                            <p>$ 4500.00</p>
                                            <p class="monthlyic">Monthly</p>
                                        </div>
                                        <div class="tatalincomeimg1">
                                            <p>$28.08 K</p>
                                            <p class="monthlyic1">Yearly</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Pro Tier -->
                        <div class="col-lg-4">
                            <div class="card cardbg3">

                                <div class="card-body">

                                    <div class="flex-container">
                                        <div class="Total_Income22">
                                            <p>Total Debts</p>
                                        </div>
                                        <div class="tatalincomeimg22">
                                            <img src="images/Layout 2ib_Dashboard(2).png" alt="">
                                        </div>
                                    </div>
                                    <div class="flex-container">
                                        <div class="Total_Income1">
                                            <p>$ 4500.00</p>
                                            <p class="monthlyic">Monthly</p>
                                        </div>
                                        <div class="tatalincomeimg1">
                                            <p>$28.08 K</p>
                                            <p class="monthlyic1">Yearly</p>
                                        </div>
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
                            <div>
                                <div class="holetextcontent">
                                    <div>
                                        <div class="flex-container">
                                            <div class="pl1st">
                                                <p>PRIMARY LOAN<br>
                                                    REPAYMENT PERIOD</p>
                                            </div>
                                            <div class="years21">
                                                <p>21Years 11Months</p>
                                            </div>
                                        </div>
                                        <div class="flex-container">
                                            <div class="pl1st">
                                                <p class="forgaping">PRIMARY LOAN WITH <br>
                                                    AIP REPAYMENT PERIOD</p>
                                            </div>
                                            <div class="years8">
                                                <p>8Years 5Months</p>

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
                                                <p>$259,854.34</p>
                                            </div>
                                        </div>
                                        <div class="flex-container">
                                            <div class="pl1st">
                                                <p class="forgaping">TOTAL INTEREST PAID
                                                    USING<br>
                                                    AIP SOFTWARE</p>
                                            </div>
                                            <div class="years81">
                                                <p>$98,655.33</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <div class="embed-responsive embed-responsive-16by9 forvideodashbord">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
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
                            <tbody>
                                <tr style="padding-top:12px; padding-bottom:12px;">
                                    <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                        Original Loan</td>
                                    <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                        {{mortgage.output.loan_term_comparison.Loan_Amount['Original Loan']}}</td>
                                    <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                        {{mortgage.output.loan_term_comparison.Repayment_Years['Original Loan']}}</td>
                                    <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                        {{mortgage.output.loan_term_comparison.Repayment_Months['Original Loan']}}</td>
                                    <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                        {{mortgage.output.loan_term_comparison.Total_Interest_Cost['Original Loan']}}</td>
                                </tr>
                                <tr>
                                    <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                        Original Loan with AIP Software</td>
                                    <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                        {{mortgage.output.loan_term_comparison.Loan_Amount['Original Loan with AIP Software']}}</td>
                                    <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                        {{mortgage.output.loan_term_comparison.Repayment_Years['Original Loan with AIP Software']}}</td>
                                    <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                        {{mortgage.output.loan_term_comparison.Repayment_Months['Original Loan with AIP Software']}}</td>
                                    <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                        {{mortgage.output.loan_term_comparison.Total_Interest_Cost['Original Loan with AIP Software']}}</td>
                                </tr>
                                <tr>
                                    <td scope="row" style="padding-top:12px; padding-bottom:12px;font-weight:400;color: #003770;">
                                        HELOC/Revolving Loan Payoff Period</td>
                                    <td style="padding-top:12px; padding-bottom:12px;font-weight:400;color: #003770;">
                                        {{mortgage.output.loan_term_comparison.Loan_Amount['HELOC/Revolving Loan Payoff Period']}}</td>
                                    <td style="padding-top:12px; padding-bottom:12px;font-weight:400;color: #003770;">
                                        {{mortgage.output.loan_term_comparison.Repayment_Years['HELOC/Revolving Loan Payoff Period']}}</td>
                                    <td style="padding-top:12px; padding-bottom:12px;font-weight:400;color: #003770;">
                                        {{mortgage.output.loan_term_comparison.Repayment_Months['HELOC/Revolving Loan Payoff Period']}}</td>
                                    <td style="padding-top:12px; padding-bottom:12px;font-weight:400;">
                                        {{mortgage.output.loan_term_comparison.Total_Interest_Cost['HELOC/Revolving Loan Payoff Period']}}</td>
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