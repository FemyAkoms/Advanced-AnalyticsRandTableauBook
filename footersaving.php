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
                lastYear:0,
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
                    error:{},
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
                        totalCashFlow:[],
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

                t.getSavingLumpsumExpenses();
                t.getSavingLumpsumIncome();
                t.getSavingCurrentDebit();
                t.getSavingInput();
                t.getSavingRegularExpense();
                t.getSavingRegularIncome();
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

                // ********************* SAVING TOOL ******************************* //
                getSavingCurrentDebit: function() {
                    let t = this;
                    https.get('inputs/savingtool/debt')
                        .then(function(res) {
                            res.forEach(function(v, i) {
                                v.edit = false;
                                v.edit_description = v.description;
                                v.edit_owed = v.owed;
                                v.edit_as_of = v.as_of;
                                v.edit_debt_type = v.debt_type;
                                v.edit_payment = v.payment;
                                v.edit_rate = v.rate;
                                t.savings.credit_debit.data.push(v);
                            });
                        });
                },
                getSavingInput: function() {
                    let t = this;
                    https.get('inputs/savingtool/inputdata')
                        .then(function(res) {
                            if (res.length > 0)
                                t.savings.input_data = res[0];
                        });
                },
                getSavingLumpsumExpenses: function() {
                    let t = this;
                    https.get('inputs/savingtool/lumpsum-expense/')
                        .then(function(res) {
                            console.log(res);
                            res.forEach(function(v, i) {
                                v.edit = false;
                                v.edit_description = v.description;
                                v.edit_amount = v.amount;
                                v.edit_when_expended = v.when_expended;
                                t.savings.lumpsum_expense.data.push(v);
                            });
                        });
                },
                getSavingLumpsumIncome: function() {
                    let t = this;
                    https.get('inputs/savingtool/lumpsum-income/')
                        .then(function(res) {
                            console.log(res);
                            res.forEach(function(v, i) {
                                v.edit = false;
                                v.edit_description = v.description;
                                v.edit_amount = v.amount;
                                v.edit_when_injecting = v.when_injecting;
                                t.savings.lumpsum_income.data.push(v);
                            });
                        });
                },
                getSavingRegularExpense: function() {
                    let t = this;
                    https.get('inputs/savingtool/regular-expense/')
                        .then(function(res) {
                            console.log(res);
                            res.forEach(function(v, i) {
                                v.edit = false;
                                v.edit_description = v.description;
                                v.edit_amount = v.amount;
                                v.edit_frequency = v.frequency;
                                v.edit_start_date = v.start_date;
                                v.edit_end_date = v.end_date;
                                t.savings.regular_expense.data.push(v);
                            });
                        });
                },
                getSavingRegularIncome: function() {
                    let t = this;
                    https.get('inputs/savingtool/regular-income/')
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
                                t.savings.regular_income.data.push(v);
                            });
                        });
                },

                addSavingCurrentDebt: function() {
                    let t = this;
                    let data = t.savings.credit_debit.addData;
                    https.post('inputs/savingtool/debt/', data)
                        .then(function(res) {
                            console.log(res);
                            if (res.hasValidationError) {
                                alert(res.validationError.message)
                            } else {
                                res.edit = false;
                                res.edit_description = data.description;
                                res.edit_owed = data.owed;
                                res.edit_as_of = data.as_of;
                                res.edit_payment = data.payment;
                                res.edit_rate = data.rate;
                                res.edit_debt_type = data.debt_type;
                                t.savings.credit_debit.data.unshift(res);
                                t.savings.credit_debit.addData = {
                                    description: '',
                                    owed: '',
                                    as_of: '',
                                    debt_type: "",
                                    payment: '',
                                    rate: '',
                                    user: 1,
                                }
                                window.location.href = "Saving_LumpsumIncome"
                            }
                        });
                },
                addSavingLumpsumIncome: function() {
                    let t = this;
                    let data = t.savings.lumpsum_income.addData;
                    console.log(data);
                    https.post('inputs/savingtool/lumpsum-income/', data)
                        .then(function(res) {
                            console.log(res);
                            if (res.hasValidationError) {
                                alert(res.validationError.message)
                            } else {
                                res.edit = false;
                                res.edit_description = data.description;
                                res.edit_amount = data.amount;
                                res.edit_when_injecting = data.when_injecting;
                                t.savings.lumpsum_income.data.unshift(res);
                                t.savings.lumpsum_income.addData = {
                                    description: '',
                                    amount: '',
                                    when_injecting: '',
                                    user: 1,
                                }
                            }
                            window.location.href = "Saving_LumpsumExpenses"
                        });
                },
                addSavingLumpsumExpenses: function() {
                    let t = this;
                    let data = t.savings.lumpsum_expense.addData;
                    console.log(data);
                    https.post('inputs/savingtool/lumpsum-expense/', data)
                        .then(function(res) {
                            console.log(res);
                            if (res.hasValidationError) {
                                alert(res.validationError.message)
                            } else {
                                res.edit = false;
                                res.edit_description = data.description;
                                res.edit_amount = data.amount;
                                res.edit_when_expended = data.when_expended;
                                t.savings.lumpsum_expense.data.unshift(res);
                                t.savings.lumpsum_expense.addData = {
                                    description: '',
                                    amount: '',
                                    when_expended: '',
                                    user: 1,
                                }
                                window.location.href = "Saving_RegularIncomeData"
                            }
                        });
                },
               
            
                addSavingRegularIncome: function() {
                    let t = this;
                    let data = t.savings.regular_income.addData;
                    console.log(data);
                    https.post('inputs/savingtool/regular-income/', data)
                        .then(function(res) {
                            console.log(res);
                            if (res.hasValidationError) {
                                alert(res.validationError.message)
                            } else {
                                res.edit = false;
                                res.edit_description = data.description;
                                res.edit_amount = data.amount;
                                res.edit_frequency = data.frequency;
                                res.edit_income_starts = data.income_starts;
                                res.edit_income_ends = data.income_ends;
                                t.savings.regular_income.data.unshift(res);
                                t.savings.regular_income.addData = {
                                    description: '',
                                    amount: '',
                                    frequency: '',
                                    income_type: '',
                                    income_starts: '',
                                    income_ends: '',
                                    user: 1,
                                }
                                window.location.href = "Saving_RegularExpensedData"
                            }
                        });
                },
                addSavingRegularExpense: function() {
                    let t = this;
                    let data = t.savings.regular_expense.addData;
                    console.log(data);
                    https.post('inputs/savingtool/regular-expense/', data)
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
                                t.savings.regular_expense.data.unshift(res);
                                t.savings.regular_expense.addData = {
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
                saveSavingLumpsumExpenses: function(d) {
                    let data = {
                        description: d.edit_description,
                        amount: d.edit_amount,
                        when_expended: d.edit_when_expended
                    }
                    https.patch('inputs/savingtool/lumpsum-expense/' + d.id + '/', data)
                        .then(function(res) {
                            console.log(d);
                            if (res.hasValidationError) {
                                alert(res.validationError.message)
                            } else {
                                d.edit = !d.edit;
                                d.description = d.edit_description;
                                d.amount = d.edit_amount;
                                d.when_expended = d.edit_when_expended;
                            }
                        });
                },
                saveSavingLumpsumIncome: function(d) {
                    let data = {
                        description: d.edit_description,
                        amount: d.edit_amount,
                        when_injecting: d.edit_when_injecting
                    }
                    https.patch('inputs/savingtool/lumpsum-income/' + d.id + '/', data)
                        .then(function(res) {
                            console.log(d);
                            if (res.hasValidationError) {
                                alert(res.validationError.message)
                            } else {
                                d.edit = !d.edit;
                                d.description = d.edit_description;
                                d.amount = d.edit_amount;
                                d.when_injecting = d.edit_when_injecting;
                            }
                        });
                },
                saveSavingRegularExpense: function(d) {
                    let data = {
                        description: d.edit_description,
                        amount: d.edit_amount,
                        frequency: d.edit_frequency,
                        start_date: d.edit_start_date,
                        end_date: d.edit_end_date
                    }
                    https.patch('inputs/savingtool/regular-expense/' + d.id + '/', data)
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
                saveSavingRegularIncome: function(d) {
                    let data = {
                        description: d.edit_description,
                        amount: d.edit_amount,
                        frequency: d.edit_frequency,
                        income_type: d.edit_income_type,
                        income_starts: d.edit_income_starts,
                        income_ends: d.edit_income_ends
                    }
                    https.patch('inputs/savingtool/regular-income/' + d.id + '/', data)
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
                saveSavingCurrentDebt: function(d) {
                    let data = {
                        description: d.edit_description,
                        owed: d.edit_owed,
                        as_of: d.edit_as_of,
                        debt_type: d.edit_debt_type,
                        payment: d.edit_payment,
                        rate: d.edit_rate,
                    }
                    https.patch('inputs/savingtool/debt/' + d.id + '/', data)
                        .then(function(res) {
                            console.log(d);
                            if (res.hasValidationError) {
                                alert(res.validationError.message)
                            } else {
                                d.edit = !d.edit;
                                d.description = d.edit_description;
                                d.owed = d.edit_owed;
                                d.as_of = d.edit_as_of;
                                d.debt_type = d.edit_debt_type;
                                d.payment = d.edit_payment;
                                d.rate = d.edit_rate;
                            }
                        });
                },

                editSavingLumpsumExpenses: function(d) {
                    d.edit = !d.edit;
                },
                editSavingLumpsumIncome: function(d) {
                    d.edit = !d.edit;
                },
                editSavingRegularExpense: function(d) {
                    d.edit = !d.edit;
                    d.description = [
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
                    document.showDescription = false
                },
                editSavingRegularIncome: function(d) {
                    d.edit = !d.edit;
                },
                editSavingCurrentDebt: function(d) {
                    d.edit = !d.edit;
                },

                deleteSavingLumpsumExpenses: function(d, i) {
                    let t = this;
                    let id = d.id;
                    https.delete('inputs/savingtool/lumpsum-expense/' + id + '/')
                        .then(function(res) {
                            console.log(res);
                            t.savings.lumpsum_expense.data.splice(i, 1);
                        });
                },
                deleteSavingLumpsumIncome: function(d, i) {
                    let t = this;
                    let id = d.id;
                    https.delete('inputs/savingtool/lumpsum-income/' + id + '/')
                        .then(function(res) {
                            console.log(res);
                            t.savings.lumpsum_income.data.splice(i, 1);
                        });
                },
                deleteSavingRegularExpense: function(d, i) {
                    let t = this;
                    let id = d.id;
                    https.delete('inputs/savingtool/regular-expense/' + id + '/')
                        .then(function(res) {
                            console.log(res);
                            t.savings.regular_expense.data.splice(i, 1);
                        });
                },
                deleteSavingRegularIncome: function(d, i) {
                    let t = this;
                    let id = d.id;
                    https.delete('inputs/savingtool/regular-income/' + id + '/')
                        .then(function(res) {
                            console.log(res);
                            t.savings.regular_income.data.splice(i, 1);
                        });
                },
                deleteSavingCurrentDebt: function(d, i) {
                    let t = this;
                    let id = d.id;
                    https.delete('inputs/savingtool/debt/' + id + '/')
                        .then(function(res) {
                            console.log(res);
                            t.savings.credit_debit.data.splice(i, 1);
                        });
                },
                // Savings Output

                getSavingTool: function() {
                    let t = this;
                    t.noInput = true;
                    https.get('inputs/savingtool/inputdata')
                        .then(function(res) {
                            if (res.length > 0) {
                                t.noInput = false;
                                https.get('outputs/savingtool/')
                                .then(function(res) {
                                    console.log(res);
                                    if(!res.hasValidationError && !res.hasError){
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
                                    
                                });
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
                                if(res.hasValidationError){
                                   t.savings.error = res.validationError
                                }
                                else{
                                     window.location.href = "Saving_CurrentDebt";
                                 }
                            });
                    } else {
                        https.post('inputs/savingtool/inputdata/', data)
                            .then(function(res) {
                                console.log(res);
                                if(res.hasValidationError){
                                   t.savings.error = res.validationError
                                }
                                else{
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
                        if(currY == monName[1]){
                            count++;
                            
                            if (month.includes(monName[0])) {
                                // console.log(i)
                                t.savings.output.months.push(i);
                                
                            }
                        }
                        if (count == t.savings.output.months.length) {
                            t.lastYear = '20'+monName[1];
                            t.setSavingToolOutputData(t.savings.output.totalCashFlow);
                        }
                    }
                },

                applyFilter: function(){
                    let t = this;
                    t.savings.output.data= {
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

                }
            }
        })
    </script>
    </body>

    </html>