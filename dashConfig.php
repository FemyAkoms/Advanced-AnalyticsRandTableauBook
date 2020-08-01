<div class="col-md-3">
    <div class="leftblueside">
        <div class="">
            <div class="flex-container forpaddin2sideinblue1 desk">
                <!-- <div class="forbluesideimg">
                    <img src="images/user-default.png" alt="" class="willsmithimage">
                </div> -->
                <div class="danial_mitev_textpd">
                    <div class="danial_mitev_textpd ttt">
                        <!-- <p>{{user.first_name}} {{user.last_name}}</p> -->
                    </div>
                    <div class="danial_mitev_textpd2 desk" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor: pointer;margin-top:10px">
                        <p><i class="fas fa-eye eyeicon"></i>Edit Profile</p>
                    </div>
                    <div class="danial_mitev_textpd2" style="cursor: pointer;margin-top:10px;text-align: center;">
                    <a class="row mb-2 px-4 formyaccountde1 " style="cursor:pointer;color:#fff" href="manage_subscription.php">
                            <!-- <i class="fas fa-eye eyeicon"></i> -->
                            My Subscription</a>
                    </div>
                </div>
            </div>
            <div class="row mb-2 px-4 formyaccountde" style="cursor:pointer">
            </div>
            <div>
                <div class="desk">
                    <a class="row mb-2 px-4 formyaccountde1 " style="cursor:pointer;" href="dashboard.php">
                        <div class="col-1"><i class="fas fa-file-export" style="font-size: 14px; color: white;"></i></div>
                        <div class="col-9 ttt">
                            Dashboard
                        </div>
                    </a>
                    <hr style="background-color: rgba(0, 83, 170, 0.99)">
                    <div class="row mb-2 px-4 formyaccountde1 " data-toggle="collapse" data-target="#demo" style="cursor:pointer;" v-show="toolData.selectedType == 1">
                        <div class="col-1"><i class="fas fa-file-export" style="font-size: 14px; color: white;"></i></div>
                        <div class="col-9 ttt">
                            Mortage Input
                        </div>
                        <div class="col-1"><i class="fa fa-chevron-down" style="font-size: 14px; color: white;"></i></div>
                    </div>

                    <div style=" padding-left: 10px;" class="desk">
                        <a id="demo" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 1" href="mortgage_input.php">
                            <div class="col-1"><i class="fas fa-file-export" style="font-size: 14px; color: white;"></i></div>
                            <div class="col-10 ttt">
                                Input Data
                            </div>
                        </a>
                        <a id="demo" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 1 " href="Input_CurrentDebt.php">
                            <div class="col-1"><i class="fas fa-file-export" style="font-size: 14px; color: white;"></i></div>
                            <div class="col-10 ttt">
                                Current Debt
                            </div>
                        </a>
                        <a id="demo" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 1 " href="Input_LumpSumIncome.php">
                            <div class="col-1"><i class="fas fa-file-export" style="font-size: 14px; color: white;"></i></div>
                            <div class="col-10 ttt">
                                Lumpsum Income
                            </div>
                        </a>
                        <a id="demo" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 1 " href="Input_LumpSumExpenses.php">
                            <div class="col-1"><i class="fas fa-file-export" style="font-size: 14px; color: white;"></i></div>
                            <div class="col-10 ttt">
                                Lumpsum Expenses
                            </div>
                        </a>
                        <a id="demo" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 1 " href="Input_RegularExpensedData.php">
                            <div class="col-1"><i class="fas fa-file-export" style="font-size: 14px; color: white;"></i></div>
                            <div class="col-10 ttt">
                                Regular Expenses
                            </div>
                        </a>
                        <a id="demo" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 1 " href="Input_RegularIncomeData.php">
                            <div class="col-1"><i class="fas fa-file-export" style="font-size: 14px; color: white;"></i></div>
                            <div class="col-10 ttt">
                                Regular Income
                            </div>
                        </a>
                    </div>

                    <div class="row mb-2 px-4 formyaccountde1 " data-toggle="collapse" data-target="#demo" style="cursor:pointer;" v-show="toolData.selectedType == 2">
                        <div class="col-1"><i class="fas fa-file-export" style="font-size: 14px; color: white;"></i></div>
                        <div class="col-9 ttt">
                            Saving Input
                        </div>
                        <div class="col-1"><i class="fa fa-chevron-down" style="font-size: 14px; color: white;"></i></div>
                    </div>

                    <div style=" padding-left: 10px;" class="desk">

                        <a id="demo" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 2" href="saving_input.php">
                            <div class="col-1"><i class="fas fa-file-export" style="font-size: 14px; color: white;"></i></div>
                            <div class="col-10 ttt">
                                Input Data
                            </div>
                        </a>
                        <a id="demo" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 2" href="Saving_CurrentDebt.php">
                            <div class="col-1"><i class="fas fa-file-export" style="font-size: 14px; color: white;"></i></div>
                            <div class="col-10 ttt">
                                Current Debt
                            </div>
                        </a>
                        <a id="demo" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 2 " href="Saving_LumpsumExpenses.php">
                            <div class="col-1"><i class="fas fa-file-export" style="font-size: 14px; color: white;"></i></div>
                            <div class="col-10 ttt">
                                LumpSum Expenses
                            </div>
                        </a>
                        <a id="demo" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 2" href="Saving_LumpsumIncome.php">
                            <div class="col-1"><i class="fas fa-file-export" style="font-size: 14px; color: white;"></i></div>
                            <div class="col-10 ttt">
                                LumpSum Income
                            </div>
                        </a>
                        <a id="demo" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 2" href="Saving_RegularExpensedData.php">
                            <div class="col-1"><i class="fas fa-file-export" style="font-size: 14px; color: white;"></i></div>
                            <div class="col-10 ttt">
                                Regular Expense
                            </div>
                        </a>
                        <a id="demo" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 2" href="Saving_RegularIncomeData.php">
                            <div class="col-1"><i class="fas fa-file-export" style="font-size: 14px; color: white;"></i></div>
                            <div class="col-10 ttt">
                                Regular Income
                            </div>
                        </a>

                    </div>

                    <div class="row mb-2 px-4 formyaccountde1 " data-toggle="collapse" data-target="#demo" style="cursor:pointer;" v-show="toolData.selectedType == 3">
                        <div class="col-1"><i class="fas fa-file-export" style="font-size: 14px; color: white;"></i></div>
                        <div class="col-9 ttt">
                            Credit Card Input
                        </div>
                        <div class="col-1"><i class="fa fa-chevron-down" style="font-size: 14px; color: white;"></i></div>
                    </div>

                    <div style="padding-left: 10px;" class="desk">
                        <a id="demo" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 3" href="credit_input.php">
                            <div class="col-1"><i class="fas fa-file-export" style="font-size: 14px; color: white;"></i></div>
                            <div class="col-10 ttt">
                                Credit Card Debt
                            </div>
                        </a>
                        <a id="demo" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 3" href="Credit_RegularExpenses.php">
                            <div class="col-1"><i class="fas fa-file-export" style="font-size: 14px; color: white;"></i></div>
                            <div class="col-10 ttt">
                                Regular Expenses
                            </div>
                        </a>
                        <a id="demo" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 3" href="Credit_RegularIncome.php">
                            <div class="col-1"><i class="fas fa-file-export" style="font-size: 14px; color: white;"></i></div>
                            <div class="col-10 ttt">
                                Regular Income
                            </div>
                        </a>
                    </div>

                    <hr style="background-color: rgba(0, 83, 170, 0.99)" class="desk">
                    <div class="row mb-2 px-4 formyaccountde1 " data-toggle="collapse" data-target="#morout" style="cursor:pointer;" v-show="toolData.selectedType == 1 ">
                        <div class="col-1"><i class="fas fa-file-export" style="font-size: 14px; color: white;"></i></div>
                        <div class="col-9 ttt">
                            Mortgage Output Result
                        </div>
                        <div class="col-1"><i class="fa fa-chevron-down" style="font-size: 14px; color: white;"></i></div>
                    </div>
                    <div style="padding-left: 10px;" class="desk">
                        <a id="morout" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 1" href="mortgage_output.php">
                            <div class="col-1"><i class="fas fa-file-export" style="font-size: 14px; color: white;"></i></div>
                            <div class="col-10 ttt">
                                Cash Flow Summary
                            </div>
                        </a>
                        <a id="morout" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 1  " href="mortgage_LoanTermComparison_output.php">
                            <div class="col-1"><i class="fas fa-file-export" style="font-size: 14px; color: white;"></i></div>
                            <div class="col-10 ttt">
                                Loan Term Comparison
                            </div>
                        </a>
                        <a id="morout" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 1" href="mortgage_YearlyBalances_output.php">
                            <div class="col-1"><i class="fas fa-file-export" style="font-size: 14px; color: white;"></i></div>
                            <div class="col-10 ttt">
                                Yearly Balance
                            </div>
                        </a>
                        <a id="morout" class="row mb-2 px-4 formyaccountde1 collapse " style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 1" href="mortgage_scenario_analysis.php">
                            <div class="col-1"><i class="fas fa-file-export" style="font-size: 14px; color: white;"></i></div>
                            <div class="col-9 ttt">
                                Scenario Analysis
                            </div>
                        </a>
                    </div>
                    <!-- <hr style="background-color: rgba(0, 83, 170, 0.99)" class=""> -->

                    <div class="row mb-2 px-4 formyaccountde1 " data-toggle="collapse" data-target="#morout" style="cursor:pointer;" v-show="toolData.selectedType == 2">
                        <div class="col-1"><i class="fas fa-file-export" style="font-size: 14px; color: white;"></i></div>
                        <div class="col-9 ttt">
                            Saving Output Result
                        </div>
                        <div class="col-1"><i class="fa fa-chevron-down" style="font-size: 14px; color: white;"></i></div>
                    </div>
                    <div style="padding-left: 10px;" class="desk">
                        <a id="morout" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 2 " href="saving_output.php">
                            <div class="col-1"><i class="fas fa-file-export" style="font-size: 14px; color: white;"></i></div>
                            <div class="col-10 ttt">
                                Cash Flow Summary
                            </div>
                        </a>
                        <a id="morout" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 2 " href="saving_LoanTermComparison_output.php">
                            <div class="col-1"><i class="fas fa-file-export" style="font-size: 14px; color: white;"></i></div>
                            <div class="col-10 ttt">
                                Loan Term Comparison
                            </div>
                        </a>
                        <a id="morout" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 2" href="saving_YearlyBal_outpu.php">
                            <div class="col-1"><i class="fas fa-file-export" style="font-size: 14px; color: white;"></i></div>
                            <div class="col-10 ttt">
                                Yearly Balance
                            </div>
                        </a>
                        <a id="morout" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 2" href="saving_scenario_analysis.php">
                            <div class="col-1"><i class="fas fa-file-export" style="font-size: 14px; color: white;"></i></div>
                            <div class="col-9 ttt">
                                Scenario Analysis
                            </div>
                        </a>
                    </div>
                    <a class="row mb-2 px-4 formyaccountde1 " style="cursor:pointer;" href="credit_list.php" v-show="toolData.selectedType == 3">
                        <div class="col-1"><i class="fas fa-file-export" style="font-size: 14px; color: white;"></i></div>
                        <div class="col-9 ttt">
                            <!-- Credit Card List -->
                            Credit Card Output
                        </div>
                    </a>
                    <!-- <div class="row mb-2 px-4 formyaccountde1 " data-toggle="collapse" data-target="#morout" style="cursor:pointer;" v-show="toolData.selectedType == 3">
                        <div class="col-1"><i class="fas fa-file-export" style="font-size: 14px; color: white;"></i></div>
                        <div class="col-9 ttt">
                            Credit Output Result
                        </div>
                        <div class="col-1"><i class="fa fa-chevron-down" style="font-size: 14px; color: white;"></i></div>
                    </div>
                    <div style="padding-left: 10px;" class="desk">
                        <a id="morout" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 3" href="credit_list.php">
                            <div class="col-1"><i class="fas fa-file-export" style="font-size: 14px; color: white;"></i></div>
                            <div class="col-10 ttt">
                                Cash Flow Summary
                            </div>
                        </a>
                        <a id="morout" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 3" href="credit_LoanTermComparison_Output.php">
                            <div class="col-1"><i class="fas fa-file-export" style="font-size: 14px; color: white;"></i></div>
                            <div class="col-10 ttt">
                                Credit Term Comparison
                            </div>
                        </a>
                    </div> -->



                    <!-- <hr style="background-color: rgba(0, 83, 170, 0.99)" class="">
                    <div class="row mb-2 px-4 formyaccountde1 " style="cursor:pointer">
                        <div class="col-1"><i class="fas fa-chart-bar" style="font-size: 14px; color: white;"></i></div>
                        <div class="col-10 ttt">
                            SCENARIO ANALYSIS
                        </div>
                    </div> -->

                    <hr style="background-color: rgba(0, 83, 170, 0.99)" class="">
                    <div class="row mb-2 px-4 formyaccountde1 " style="cursor:pointer" v-on:click="logoutUser">
                        <div class="col-1"><i class="fas fa-sign-out-alt" style="font-size: 14px; color: white;"></i></div>
                        <div class="col-10 ttt">
                            Logout
                        </div>
                    </div>
                </div>

                <!-- mobile view edit profile -->
                <nav class="navbar navbar-expand-lg navbar-light mob">

                    <select class="textmort" style="width:auto" v-model="toolData.selectedType" @change='changeType()'>
                        <option value="1">Pay with HELOC</option>
                        <option value="2">Pay with Savings</option>
                        <option value="3">Pay off Credits</option>
                    </select>

                    <button style="float: right;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fas fa-bars" style="color: #fff"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <a class="row mb-2 px-4 formyaccountde1 " style="cursor:pointer;margin-top:10px" href="dashboard.php">
                            <div class="col-11">
                                <i class="fas fa-file-export" style="font-size: 14px; color: white;"></i>
                                <span style="margin: 0 10px;" class="ttt"> Dashboard</span>
                            </div>

                        </a>
                        <div class="row mb-2 px-4 formyaccountde1 " data-toggle="collapse" data-target="#demo" style="cursor:pointer;margin-top: 10px;" v-show="toolData.selectedType == 1">
                            <div class="col-12">
                                <i class="fas fa-file-export" style="font-size: 14px; color: white;"></i>
                                <span style="margin: 0 10px;" class="ttt"> Mortage Input <i class="fa fa-chevron-down" style="font-size: 14px; color: white;float:right"></i></span>
                            </div>
                        </div>

                        <div style=" padding-left: 10px;display: inline-grid;" class="mob">
                            <a id="demo" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 1" href="mortgage_input.php">
                                <div class="col-12">
                                    <i class="fas fa-file-export" style="font-size: 14px; color: white;"></i> <span style="margin: 0 10px;" class="ttt">Input Data</span>
                                </div>
                            </a>

                            <a id="demo" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 1 " href="Input_CurrentDebt.php">
                                <div class="col-12">
                                    <i class="fas fa-file-export" style="font-size: 14px; color: white;"></i> <span style="margin: 0 10px;" class="ttt"> Current Debt</span>
                                </div>
                            </a>
                            <a id="demo" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 1 " href="Input_LumpSumIncome.php">
                                <div class="col-12">
                                    <i class="fas fa-file-export" style="font-size: 14px; color: white;"></i>
                                    <span style="margin: 0 10px;" class="ttt">Lumpsum Income</span>
                                </div>
                            </a>
                            <a id="demo" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 1 " href="Input_LumpSumExpenses.php">
                                <div class="col-12">
                                    <i class="fas fa-file-export" style="font-size: 14px; color: white;"></i>
                                    <span style="margin: 0 10px;" class="ttt"> Lumpsum Expenses</span>
                                </div>
                            </a>
                            <a id="demo" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 1 " href="Input_RegularExpensedData.php">
                                <div class="col-12">
                                    <i class="fas fa-file-export" style="font-size: 14px; color: white;"></i>
                                    <span style="margin: 0 10px;" class="ttt"> Regular Expenses</span>
                                </div>
                            </a>
                            <a id="demo" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px;padding-bottom: 25px;" v-show="toolData.selectedType == 1 " href="Input_RegularIncomeData.php">
                                <div class="col-12">
                                    <i class="fas fa-file-export" style="font-size: 14px; color: white;"></i>
                                    <span style="margin: 0 10px;" class="ttt"> Regular Income</span>
                                </div>
                            </a>
                        </div>

                        <div class="row mb-2 px-4 formyaccountde1 " data-toggle="collapse" data-target="#morout" style="cursor:pointer; margin-top: 10px;" v-show="toolData.selectedType == 1">
                            <div class="col-12">
                                <i class="fas fa-file-export" style="font-size: 14px; color: white;"></i>
                                <span style="margin: 0 10px;" class="ttt"> Mortgage Output Result <i class="fa fa-chevron-down" style="font-size: 14px; color: white;float:right"></i></span>
                            </div>

                        </div>
                        <div style=" padding-left: 10px;display: inline-grid;" class="mob">
                            <a id="morout" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 1" href="mortgage_output.php">
                                <div class="col-12">
                                    <i class="fas fa-file-export" style="font-size: 14px; color: white;"></i> <span style="margin: 0 10px;" class="ttt">Cash Flow Summary</span>
                                </div>
                            </a>
                            <a id="morout" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 1  " href="mortgage_LoanTermComparison_output.php">
                                <div class="col-12">
                                    <i class="fas fa-file-export" style="font-size: 14px; color: white;"></i> <span style="margin: 0 10px;" class="ttt">Loan Term Comparison</span>
                                </div>
                            </a>
                            <a id="morout" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 1" href="mortgage_YearlyBalances_output.php">
                                <div class="col-12">
                                    <i class="fas fa-file-export" style="font-size: 14px; color: white;"></i> <span style="margin: 0 10px;" class="ttt"> Yearly Balance</span>
                                </div>
                            </a>
                            <a id="morout" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 1" href="mortgage_scenario_analysis.php">
                                <div class="col-1"><i class="fas fa-file-export" style="font-size: 14px; color: white;"></i></div>
                                <div class="col-9 ttt">
                                    Scenario Analysis
                                </div>
                            </a>
                        </div>

                        <div class="row mb-2 px-4 formyaccountde1 " data-toggle="collapse" data-target="#demo" style="cursor:pointer;margin-top: 10px;" v-show="toolData.selectedType == 2">
                            <div class="col-12">
                                <i class="fas fa-file-export" style="font-size: 14px; color: white;"></i>
                                <span style="margin: 0 10px;" class="ttt"> Saving Input <i class="fa fa-chevron-down" style="font-size: 14px; color: white;float:right"></i></span>
                            </div>

                        </div>

                        <div style="padding-left: 10px;display: inline-grid;" class="mob">
                            <a id="demo" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 2" href="saving_input.php">
                                <div class="col-12">
                                    <i class="fas fa-file-export" style="font-size: 14px; color: white;"></i> <span style="margin: 0 10px;" class="ttt"> Input Data</span>
                                </div>
                            </a>
                            <a id="demo" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 2" href="Saving_CurrentDebt.php">
                                <div class="col-12">
                                    <i class="fas fa-file-export" style="font-size: 14px; color: white;"></i> <span style="margin: 0 10px;" class="ttt">Current Debt</span>
                                </div>
                            </a>
                            <a id="demo" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 2 " href="Saving_LumpsumExpenses.php">
                                <div class="col-12">
                                    <i class="fas fa-file-export" style="font-size: 14px; color: white;"></i> <span style="margin: 0 10px;" class="ttt"> LumpSum Expenses</span>
                                </div>
                            </a>
                            <a id="demo" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 2" href="Saving_LumpsumIncome.php">
                                <div class="col-12">
                                    <i class="fas fa-file-export" style="font-size: 14px; color: white;"></i> <span style="margin: 0 10px;" class="ttt"> LumpSum Income</span>
                                </div>
                            </a>
                            <a id="demo" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 2" href="Saving_RegularExpensedData.php">
                                <div class="col-12">
                                    <i class="fas fa-file-export" style="font-size: 14px; color: white;"></i> <span style="margin: 0 10px;" class="ttt"> Regular Expense</span>
                                </div>
                            </a>
                            <a id="demo" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 2" href="Saving_RegularIncomeData.php">
                                <div class="col-12">
                                    <i class="fas fa-file-export" style="font-size: 14px; color: white;"></i> <span style="margin: 0 10px;" class="ttt"> Regular Income</span>
                                </div>
                            </a>

                        </div>

                        <div class="row mb-2 px-4 formyaccountde1 " data-toggle="collapse" data-target="#demo" style="cursor:pointer;margin-top: 10px;" v-show="toolData.selectedType == 3">
                            <div class="col-12">
                                <i class="fas fa-file-export" style="font-size: 14px; color: white;"></i>
                                <span style="margin: 0 10px;" class="ttt"> Credit Card Input <i class="fa fa-chevron-down" style="font-size: 14px; color: white;float:right"></i></span>
                            </div>

                        </div>

                        <div style="padding-left: 10px;display: inline-grid;" class="mob">
                            <a id="demo" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 3" href="credit_input.php">
                                <div class="col-12">
                                    <i class="fas fa-file-export" style="font-size: 14px; color: white;"></i> <span style="margin: 0 10px;" class="ttt"> Credit Card Debt</span>
                                </div>
                            </a>
                            <a id="demo" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 3" href="Credit_RegularExpenses.php">
                                <div class="col-12">
                                    <i class="fas fa-file-export" style="font-size: 14px; color: white;"></i> <span style="margin: 0 10px;" class="ttt">Regular Expenses</span>
                                </div>
                            </a>
                            <a id="demo" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 3" href="Credit_RegularIncome.php">
                                <div class="col-12">
                                    <i class="fas fa-file-export" style="font-size: 14px; color: white;"></i> <span style="margin: 0 10px;" class="ttt"> Regular Income</span>
                                </div>
                            </a>
                        </div>

                        <div class="row mb-2 px-4 formyaccountde1 " data-toggle="collapse" data-target="#morout" style="cursor:pointer;margin-top: 10px;" v-show="toolData.selectedType == 2">
                            <div class="col-12">
                                <i class="fas fa-file-export" style="font-size: 14px; color: white;"></i>
                                <span style="margin: 0 10px;" class="ttt"> Saving Output Result <i class="fa fa-chevron-down" style="font-size: 14px; color: white;float:right"></i></span>
                            </div>

                        </div>
                        <div style="padding-left: 10px;" class="mob">
                            <a id="morout" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 2 " href="saving_output.php">
                                <div class="col-12">
                                    <i class="fas fa-file-export" style="font-size: 14px; color: white;"></i> <span style="margin: 0 10px;" class="ttt">Cash Flow Summary</span>
                                </div>
                            </a>
                            <a id="morout" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 2 " href="saving_LoanTermComparison_output.php">
                                <div class="col-12">
                                    <i class="fas fa-file-export" style="font-size: 14px; color: white;"></i> <span style="margin: 0 10px;" class="ttt"> Loan Term Comparison</span>
                                </div>
                            </a>
                            <a id="morout" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 2" href="saving_YearlyBal_outpu.php">
                                <div class="col-12">
                                    <i class="fas fa-file-export" style="font-size: 14px; color: white;"></i> <span style="margin: 0 10px;" class="ttt"> Yearly Balance</span>
                                </div>
                            </a>
                            <a id="morout" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 2" href="saving_scenario_analysis.php">
                                <div class="col-1"><i class="fas fa-file-export" style="font-size: 14px; color: white;"></i></div>
                                <div class="col-9 ttt">
                                    Scenario Analysis
                                </div>
                            </a>
                        </div>

                        <div class="row mb-2 px-4 formyaccountde1 " data-toggle="collapse" data-target="#morout" style="cursor:pointer;margin-top: 10px;" v-show="toolData.selectedType == 3">
                            <div class="col-12">
                                <i class="fas fa-file-export" style="font-size: 14px; color: white;"></i>
                                <span style="margin: 0 10px;" class="ttt"> Credit Output Result <i class="fa fa-chevron-down" style="font-size: 14px; color: white;float:right"></i></span>
                            </div>

                        </div>
                        <div style="padding-left: 10px;" class="mob">
                            <a id="morout" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 3" href="credit_output.php">
                                <div class="col-12">
                                    <i class="fas fa-file-export" style="font-size: 14px; color: white;"></i> <span style="margin: 0 10px;" class="ttt">Cash Flow Summary</span>
                                </div>
                            </a>
                            <a id="morout" class="row mb-2 px-4 formyaccountde1 collapse" style="cursor:pointer;margin-top:15px" v-show="toolData.selectedType == 3" href="credit_LoanTermComparison_Output.php">
                                <div class="col-12">
                                    <i class="fas fa-file-export" style="font-size: 14px; color: white;"></i> <span style="margin: 0 10px;" class="ttt"> Credit Term Comparison</span>
                                </div>
                            </a>
                        </div>

                        <div class="row mb-2 px-4 formyaccountde1 mob" style="cursor:pointer;margin-top: 10px;" data-toggle="modal" data-target="#exampleModalScrollable">
                            <div class="col-1"><i class="fas fa-eye eyeicon" style="font-size: 14px; color: white;"></i></div>
                            <div class="col-10 ttt" style="margin-left: 30px;margin-top: -26px;">Edit Profile
                            </div>
                        </div>
                        <div class="row mb-2 px-4 formyaccountde1 mob" style="cursor:pointer;margin-top: 10px;" data-toggle="modal" data-target="#manageSubscription">
        <!-- <div class="col-1"><i class="fas fa-eye eyeicon" style="font-size: 14px; color: white;"></i></div> -->
        <div class="col-12 ttt" style="margin-left: 30px;margin-top: -26px;">
        <a style="cursor:pointer;color:#fff" href="manage_subscription.php">
                            <!-- <i class="fas fa-eye eyeicon"></i> -->
                            My Subscription</a>
        </div>
    </div>
                        <div class="row mb-2 px-4 formyaccountde1 mob" style="cursor:pointer;margin-top: 10px;" v-on:click="logoutUser">
                            <div class="col-1"><i class="fas fa-eye eyeicon" style="font-size: 14px; color: white;"></i></div>
                            <div class="col-10 ttt" style="margin-left: 30px;margin-top: -26px;">Logout
                            </div>
                        </div>

                    </div>
                </nav>
            </div>

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">View Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="container ">
                        <div class="form-row">
                            <div class="col">
                                <!-- First name -->
                                <div class="md-form">
                                    <label class="fristname_design">EMAIL </label>
                                    <input type="text" class="emailHover form-control ipfcdesign" placeholder="Your Email" v-model="userPro.email" disabled required>
                                </div>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col">
                                <!-- First name -->
                                <div class="md-form">
                                    <label class="fristname_design">FRIST NAME </label>
                                    <input type="text" class="form-control ipfcdesign" placeholder="Your Frist Name" v-model="userPro.first_name" required>
                                </div>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col">
                                <!-- Last name -->
                                <div class="md-form">
                                    <label class="fristname_design">LAST NAME </label>
                                    <input type="text" class="form-control ipfcdesign" placeholder="Your Last Name" v-model="userPro.last_name" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <!-- Last name -->
                                <div class="md-form">
                                    <label class="fristname_design">PHONE </label>
                                    <input type="text" class="form-control ipfcdesign" placeholder="Your Phone Number" v-model="userPro.phone" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-sm" @click.prevent="updateUserProfile($event)">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->

