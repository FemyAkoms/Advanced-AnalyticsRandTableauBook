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
    <script src="/js/paginate.js"></script>
    <script>
        var app = new Vue({
            el: '#app',
            components: {
                'paginate': VuejsPaginate
            },
            data: {
                vsrc: 'https://www.youtube.com/embed/zpOULjyy-n8?rel=0',
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
                lastYear: 0,
                noInput: false,
                isActive: false,
                common_output_report:{
                    'Monthly Debt':0,
                    'Monthly Expense': 0,
                    'Monthly Income': 0,
                    'Total Debt': 0,
                    'Total Expense': 0,
                    'Total Income': 0,
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
                    morRegExp: {
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
                        addmorRegExp: {
                            description: "",
                            amount: "",
                            frequency: "",
                            start_date: "",
                            end_date: "",
                            user: 1
                        }
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
                        filteredData: {
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
                        yearly_balances: {
                            years: [],
                            filterYears:[],
                            settings:{
                                count:0,
                                loaded:false,
                            }
                        }
                    }
                },
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
                credit: {
                    credit_card_debit: {
                        addData: {
                            description: "",
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
                        },
                        total_debts:0,
                        credits_cards:0
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
                subscriptionDetails: [],
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
                // let currY = date.getFullYear();
                // let maxRange = currY + 10;
                // for (var i = currY; i <= maxRange; i++) {
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
            //   t.mySubscription();
                t.getSavingTool();
                // t.getCreditTool();

                t.changeType();
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
                        $('#exampleModalScrollable').modal('hide');
                        $('.modal-backdrop').removeClass('show');
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
                    if (me.toolData.selectedType == 4) {
                        let data = {
                            Mortgage_Owed: me.toolData.Mortgage_Owed,
                            Interest_Rate: me.toolData.Interest_Rate,
                            Monthly_Installment: me.toolData.Monthly_Installment,
                            Monthly_Income: me.toolData.Monthly_Income,
                            Monthly_Expenses: me.toolData.Monthly_Expenses,
                            Current_Debt: me.toolData.Current_Debt,
                            Loan_Period: me.toolData.Loan_Period,
                            LumpsumIncome: me.toolData.LumpsumIncome,
                            LumpsumExpenses: me.toolData.LumpsumExpenses
                        }
                        https.post('landing/mortgage/', data)
                            .then(function(res) {
                                console.log(res)
                                this.calculatedMortgage = res;
                            })
                    } else if (me.toolData.selectedType == 5) {
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
                                console.log(res)
                                this.calculatedSavings = res;
                            })
                    } else if (me.toolData.selectedType == 6) {
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
                    }
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
                        // t.getMortgageInputData();
                        // t.getMorCurrentDebt();
                        // t.getLumbSumIncome();
                        // t.getLumbSumExp();
                        // t.getMorRegExp();
                        // t.getMorRegInc();
                        t.getApiToolOutput();
                    }
                    else if(t.toolData.selectedType == 2){
                        t.getSavingTool();
                    }
                    else if(t.toolData.selectedType == 3){
                        t.getCreditTool();
                    }
                },

                // ********************* MORTGAGE TOOL ******************************* //
                // getMorCurrentDebt: function() {
                //     let t = this;
                //     https.get('inputs/aiptool/currentdebt/')
                //         .then(function(res) {
                //             res.forEach(function(v, i) {
                //                 v.edit = false;
                //                 v.edit_description = v.description;
                //                 v.edit_owed = v.owed;
                //                 v.edit_as_of = v.as_of;
                //                 v.debt_type = v.debt_type;
                //                 v.edit_payment = v.payment;
                //                 v.edit_rate = v.rate;
                //                 t.morCurDebtData.push(v);
                //             });
                //         });
                // },
                // getMortgageInputData: function() {
                //     let t = this;
                //     https.get('/inputs/aiptool/inputdata/')
                //         .then(function(res) {
                //             console.log(res);
                //             t.mortgage.input = res[0];
                //         });
                // },
                // getMorRegExp: function() {
                //     let t = this;
                //     https.get('inputs/aiptool/regular-expense/')
                //         .then(function(res) {
                //             res.forEach(function(v, i) {
                //                 v.edit = false;
                //                 v.edit_description = v.description;
                //                 v.edit_amount = v.amount;
                //                 v.edit_frequency = v.frequency;
                //                 v.edit_start_date = v.start_date;
                //                 v.edit_end_date = v.end_date;
                //                 t.morRegExp.push(v);
                //             });
                //         });
                // },
                // getMorRegInc: function() {
                //     let t = this;
                //     https.get('inputs/aiptool/regular-income/')
                //         .then(function(res) {
                //             res.forEach(function(v, i) {
                //                 v.edit = false;
                //                 v.edit_description = v.description;
                //                 v.edit_amount = v.amount;
                //                 v.edit_frequency = v.frequency;
                //                 v.edit_income_starts = v.income_starts;
                //                 v.edit_income_ends = v.income_ends;
                //                 t.morRegInc.push(v);

                //             });
                //         });
                // },
                // getLumbSumIncome: function() {
                //     let t = this;
                //     https.get('inputs/aiptool/lumpsum-income/')
                //         .then(function(res) {
                //             res.forEach(function(v, i) {
                //                 v.edit = false;
                //                 v.edit_description = v.description;
                //                 v.edit_amount = v.amount;
                //                 v.edit_when_injecting = v.when_injecting;
                //                 t.morLumbSumInc.push(v);
                //             });
                //         });
                // },
                // getLumbSumExp: function() {
                //     let t = this;
                //     https.get('inputs/aiptool/lumpsum-expense/')
                //         .then(function(res) {
                //             res.forEach(function(v, i) {
                //                 v.edit = false;
                //                 v.edit_description = v.description;
                //                 v.edit_amount = v.amount;
                //                 v.when_expended = v.when_expended;
                //                 t.morLumbSumExp.push(v);

                //             });

                //         });
                // },

                // addLumbSumIncome: function() {
                //     let t = this;
                //     let data = t.mortgage.lumbSumIncome.addlumbsumIncome;
                //     console.log(data);
                //     https.post('inputs/aiptool/lumpsum-income/', data)
                //         .then(function(res) {
                //             console.log(res);
                //             res.edit = false;
                //             res.edit_description = data.description;
                //             res.edit_amount = data.amount;
                //             res.edit_when_injecting = data.when_injecting;
                //             t.morLumbSumInc.unshift(res);
                //             t.mortgage.lumbSumIncome.addlumbsumIncome = {
                //                 description: "",
                //                 amount: "",
                //                 when_injecting: "",
                //                 user: 1
                //             }
                //         });
                // },
                // addLumbSumExp: function() {
                //     let t = this;
                //     let data = t.mortgage.lumbSumExp.addLumbSumExp;
                //     console.log(data);
                //     https.post('inputs/aiptool/lumpsum-expense/', data)
                //         .then(function(res) {
                //             console.log(res);
                //             res.edit = false;
                //             res.edit_description = data.description;
                //             res.edit_amount = data.amount;
                //             res.edit_when_expended = data.when_expended;
                //             t.morLumbSumExp.unshift(res);
                //             t.mortgage.lumbSumExp.addLumbSumExp = {
                //                 description: "",
                //                 amount: "",
                //                 when_expended: "",
                //                 user: 1
                //             }
                //         });
                // },
                // addMorCurrentDebt: function() {
                //     let t = this;

                //     let data = t.mortgage.currentDebt.addData;


                //     console.log(data);
                //     https.post('inputs/aiptool/currentdebt/', data)
                //         .then(function(res) {
                //             console.log(res);
                //             res.edit = false;
                //             res.edit_description = data.description;
                //             res.edit_owed = data.owed;
                //             res.edit_as_of = data.as_of;
                //             res.edit_payment = data.payment;
                //             res.edit_rate = data.rate;
                //             res.edit_debt_type = data.debt_type;
                //             t.morCurDebtData.unshift(res);
                //             t.mortgage.currentDebt.addData = {
                //                 description: "",
                //                 owed: "",
                //                 as_of: "",
                //                 debt_type: "",
                //                 income_type: "",
                //                 payment: "",
                //                 rate: "",
                //                 user: 1
                //             }
                //         });

                // },
                // addMorRegExp: function() {
                //     let t = this;
                //     let data = t.mortgage.morRegExp.addmorRegExp;
                //     console.log(data);
                //     https.post('inputs/aiptool/regular-expense/', data)
                //         .then(function(res) {
                //             console.log(res);
                //             res.edit = false;
                //             res.edit_description = data.description;
                //             res.edit_amount = data.amount;
                //             res.edit_frequency = data.frequency;
                //             res.edit_start_date = data.start_date;
                //             res.edit_end_date = data.end_date;
                //             t.morRegExp.unshift(res);
                //             t.mortgage.morRegExp.addmorRegExp = {
                //                 description: "",
                //                 amount: "",
                //                 frequency: "",
                //                 start_date: "",
                //                 end_date: "",
                //                 user: 1
                //             }
                //         });
                // },
                // addMorRegInc: function() {
                //     let t = this;
                //     let data = t.mortgage.morRegIncome.addmorRegIncome;
                //     console.log(data);
                //     https.post('inputs/aiptool/regular-income/', data)
                //         .then(function(res) {
                //             console.log(res);
                //             res.edit = false;
                //             res.edit_description = data.description;
                //             res.edit_amount = data.amount;
                //             res.edit_frequency = data.frequency;
                //             res.edit_income_starts = data.income_starts;
                //             res.edit_income_ends = data.income_ends;
                //             t.morRegInc.unshift(res);
                //             t.mortgage.morRegIncome.addmorRegIncome = {
                //                 description: "",
                //                 amount: "",
                //                 frequency: "",
                //                 income_type: "",
                //                 income_starts: "",
                //                 income_ends: "",
                //                 user: 1
                //             }
                //         });
                // },

                // deleteCurrentDebt: function(value, i) {
                //     let e = this;
                //     https.delete('inputs/aiptool/currentdebt/' + value.id + '/')
                //         .then(function(res) {
                //             console.log(res);
                //             e.morCurDebtData.splice(i, 1);
                //         });
                // },
                // deleteLumbsumInc: function(value, i) {
                //     let e = this;
                //     https.delete('inputs/aiptool/lumpsum-income/' + value.id + '/')
                //         .then(function(res) {
                //             console.log(res);
                //             e.morLumbSumInc.splice(i, 1);
                //         });
                // },
                // deleteLumbsumExp: function(value, i) {
                //     let e = this;
                //     https.delete('inputs/aiptool/lumpsum-expense/' + value.id + '/')
                //         .then(function(res) {
                //             console.log(res);
                //             e.morLumbSumExp.splice(i, 1);
                //         });
                // },
                // deleteRegInc: function(value, i) {
                //     let e = this;
                //     https.delete('inputs/aiptool/regular-income/' + value.id + '/')
                //         .then(function(res) {
                //             console.log(res);
                //             e.morRegInc.splice(i, 1);
                //         });
                // },
                // deleteRegExp: function(value, i) {
                //     let e = this;
                //     https.delete('inputs/aiptool/regular-expense/' + value.id + '/')
                //         .then(function(res) {
                //             console.log(res);
                //             e.morRegExp.splice(i, 1);
                //         });
                // },

                // saveCurrentDebt: function(value) {
                //     let e = this;
                //     let data = {
                //         description: value.edit_description,
                //         owed: value.edit_owed,
                //         as_of: value.edit_as_of,
                //         debt_type: value.edit_debt_type,
                //         payment: value.edit_payment,
                //         rate: value.edit_rate,
                //         user: 1
                //     }
                //     console.log(data);
                //     https.patch('inputs/aiptool/currentdebt/' + value.id + '/', data)
                //         .then(function(res) {
                //             console.log(res);
                //             value.edit = false;
                //             value.description = value.edit_description;
                //             value.owed = value.edit_owed;
                //             value.as_of = value.edit_as_of;
                //             value.debt_type = value.edit_debt_type;
                //             value.payment = value.edit_payment;
                //             value.rate = value.edit_rate;
                //         });
                // },
                // saveLumbsumIncome: function(value) {
                //     let e = this;
                //     let data = {
                //         description: value.edit_description,
                //         amount: value.edit_amount,
                //         when_injecting: value.edit_when_injecting,
                //         user: 1
                //     }
                //     console.log(data);
                //     https.patch('inputs/aiptool/lumpsum-income/' + value.id + '/', data)
                //         .then(function(res) {
                //             console.log(res);
                //             value.edit = false;
                //             value.description = value.edit_description;
                //             value.amount = value.edit_amount;
                //             value.when_injecting = value.edit_when_injecting;
                //         });
                // },
                // saveLumbsumExp: function(value) {
                //     let e = this;
                //     let data = {
                //         description: value.edit_description,
                //         amount: value.edit_amount,
                //         when_expended: value.edit_when_expended,
                //         user: 1
                //     }
                //     console.log(data);
                //     https.patch('inputs/aiptool/lumpsum-expense/' + value.id + '/', data)
                //         .then(function(res) {
                //             console.log(res);
                //             value.edit = false;
                //             value.description = value.edit_description;
                //             value.amount = value.edit_amount;
                //             value.when_expended = value.edit_when_expended;
                //         });
                // },
                // saveRegInc: function(value) {
                //     let e = this;
                //     let data = {
                //         description: value.edit_description,
                //         amount: value.edit_amount,
                //         frequency: value.edit_frequency,
                //         income_type: value.edit_income_type,
                //         income_starts: value.edit_income_starts,
                //         income_ends: value.edit_income_ends,
                //         user: 1
                //     }
                //     console.log(data);
                //     https.patch('inputs/aiptool/regular-income/' + value.id + '/', data)
                //         .then(function(res) {
                //             console.log(res);
                //             value.edit = false;
                //             value.description = value.edit_description;
                //             value.amount = value.edit_amount;
                //             value.frequency = value.edit_frequency;
                //             value.income_type = value.edit_income_type;
                //             value.income_starts = value.edit_income_starts;
                //             value.income_ends = value.edit_income_ends;
                //         });
                // },
                // saveRegExp: function(value) {
                //     let e = this;
                //     let data = {
                //         description: value.edit_description,
                //         amount: value.edit_amount,
                //         frequency: value.edit_frequency,
                //         start_date: value.edit_start_date,
                //         end_date: value.edit_end_date,
                //         user: 1
                //     }
                //     console.log(data);
                //     https.patch('inputs/aiptool/regular-expense/' + value.id + '/', data)
                //         .then(function(res) {
                //             console.log(res);
                //             value.edit = false;
                //             value.description = value.edit_description;
                //             value.amount = value.edit_amount;
                //             value.frequency = value.edit_frequency;
                //             value.start_date = value.edit_start_date;
                //             value.end_date = value.edit_end_date;
                //         });
                // },
                //AipTool Output



                // Savings Output

                getSavingTool: function() {
                    let t = this;
                    https.get('inputs/savingtool/inputdata')
                        .then(function(res) {
                            if (res.length > 0) {
                                https.get('outputs/savingtool/')
                                    .then(function(res) {
                                        console.log(res);
                                        let cashFlowSummary = JSON.parse(res.CashFlowSummary);
                                        let LoanTermComparison = JSON.parse(res.LoanTermComparison);
                                        let YearlyBalances = JSON.parse(res.YearlyBalances);
                                        t.common_output_report = res.dashboard;
                                        cashFlowSummary = t.setArr([cashFlowSummary]);
                                        LoanTermComparison = t.setArr([LoanTermComparison]);
                                        YearlyBalances = t.setArr([YearlyBalances]);
                                        t.savings.output.loan_term_comparison = LoanTermComparison[0];
                                        t.getSavingMonths(cashFlowSummary[0]);
                                        t.setSavingYearly(YearlyBalances[0])
                                    });
                            }
                        });
                },
                // Credit Output
                getCreditTool: function() {
                    let t = this;
                    https.get('outputs/creditcard/')
                    .then(function(res) {
                        console.log('caredtyi,=', res);

                        if (!res.hasError && !res.hasValidationError) {
                            let cashFlowSummary = JSON.parse(res.CashFlowSummary);
                            let CreditTermComparison = JSON.parse(res.LoanTermComparison);
                            t.common_output_report = res.dashboard;
                            cashFlowSummary = t.setArr([cashFlowSummary]);
                            console.log('asasasasdasdasasd', CreditTermComparison);
                            CreditTermComparison = t.setArr([CreditTermComparison]);
                            t.credit.output.loan_term_comparison = CreditTermComparison[0];
                            t.getCreditMonths(cashFlowSummary[0]);
                        }
                    });
                    https.get('outputs/sorted-cards/')
                    .then(function(res){
                        t.credit.output.credits_cards = res.output.length;
                        t.credit.output.total_debts = res.total_debts.amount_owed__sum
                    });
                },
                //Calculate Saving Debt
                getApiToolOutput: function() {
                    let t = this;
                    $('.se-pre-con').fadeIn("slow");
                    $('.trans').fadeIn("slow");
                    https.get('/inputs/aiptool/inputdata/')
                        .then(function(res) {
                            console.log(res.length);
                            if (res.length > 0) {
                                https.get('outputs/mortgage/')
                                    .then(function(res) {
                                        this.isActive = true;
                                        let cashFlowSummary = JSON.parse(res.CashFlowSummary);
                                        let LoanTermComparison = JSON.parse(res.LoanTermComparison);
                                        let YearlyBalances = JSON.parse(res.YearlyBalances);
                                        console.log(cashFlowSummary);
                                        t.common_output_report = res.dashboard;
                                        cashFlowSummary = t.setArr([cashFlowSummary]);
                                        LoanTermComparison = t.setArr([LoanTermComparison]);
                                        YearlyBalances = t.setArr([YearlyBalances]);
                                        t.mortgage.output.totalCashFlow = cashFlowSummary[0];
                                        t.mortgage.output.loan_term_comparison = LoanTermComparison[0];
                                        t.getAipMonths(cashFlowSummary[0]);
                                        t.setAipYearly(YearlyBalances[0])
                                    }).then(function() {
                                        $(".se-pre-con").fadeOut("slow");
                                        $('.trans').fadeOut("slow");
                                        this.isActive = false;
                                    });
                            }
                            else{
                                t.noInput = true;
                                $(".se-pre-con").fadeOut("slow");
                                $('.trans').fadeOut("slow");
                            }
                        });
                },
                calculateSavingDebt: function() {
                    let t = this;
                    t.toolData.selectedType = 15;
                    let data = t.savings.input_data;
                    console.log(data);
                    https.post('inputs/savingtool/inputdata/', data)
                        .then(function(res) {
                            console.log(res);
                        });
                },
                //getSavingMonths
                getAipMonths: function() {
                    let t = this;
                    let month = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                    let count = 0;
                    let currY = t.currYear;
                    currY = currY.slice(-2);

                    t.mortgage.output.months = [];
                    for (var i in t.mortgage.output.totalCashFlow) {

                        console.log(count);
                        let monName = i.split('-');
                        if (currY == monName[1]) {
                            count++;
                            if (month.includes(monName[0])) {
                                t.mortgage.output.months.push(i);
                            }
                        }
                        if (count == t.mortgage.output.months.length) {
                            t.lastYear = '20' + monName[1];
                            t.setAipToolOutputData(t.mortgage.output.totalCashFlow);
                        }

                    }
                },

                //getSavingMonths
                getSavingMonths: function(data) {
                    let t = this;
                    let month = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                    let count = 0;
                    t.savings.output.months = [];
                    for (var i in data) {
                        count++;
                        let monName = i.split('-');
                        if (month.includes(monName[0])) {
                            // console.log(i)
                            t.savings.output.months.push(i);
                            if (count == Object.keys(data).length) {
                                t.setSavingToolOutputData(data);
                            }
                        }
                    }
                },

                //  
                getCreditMonths: function(data) {
                    let t = this;
                    let month = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                    let count = 0;
                    t.credit.output.months = [];
                    for (var i in data) {
                        count++;
                        let monName = i.split('-');
                        if (month.includes(monName[0])) {
                            // console.log(i)
                            t.credit.output.months.push(i);
                            if (count == Object.keys(data).length) {
                                t.setCreditToolOutputData(data);
                            }
                        }
                    }
                },

                //setAipToolOutputData
                setAipToolOutputData: function(d) {
                    let t = this;
                    let aiptoolData = {
                        Original_Loan_Balance: [],
                        Original_HELOC_Credit_Limit: [],
                        HELOC_Interest_Rate: [],
                        Amount_Injected_into_Loan: [],
                        New_Loan_Balance_After_Injection: [],
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
                        Loan_Closing_Balance__Projected_Forecast: [],
                        Left_Over_from_Checking_Account: []
                    }
                    t.mortgage.output.months.forEach(function(v, i) {
                        let sortData = t.setArr([d[v]]);
                        if(v == "May-20")
                         console.log('ddddd', sortData);
                        aiptoolData.Original_Loan_Balance.push(sortData[0].Original_Loan_Balance);
                        aiptoolData.Original_HELOC_Credit_Limit.push(sortData[0].Original_HELOC_Credit_Limit);
                        aiptoolData.HELOC_Interest_Rate.push(sortData[0].HELOC_Interest_Rate);
                        aiptoolData.Amount_Injected_into_Loan.push(sortData[0].Amount_Injected_into_Loan);
                        aiptoolData.New_Loan_Balance_After_Injection.push(sortData[0].New_Loan_Balance_After_Injection);
                        aiptoolData.HELOC_Revolving_Loan_Opening_Balance.push(sortData[0].HELOC_Revolving_Loan_Opening_Balance);
                        aiptoolData.HELOC_Revolving_Loan_Unused_Amount.push(sortData[0].HELOC_Revolving_Loan_Unused_Amount);
                        aiptoolData.Regular_Income.push(sortData[0].Regular_Income);
                        aiptoolData.ONE___OFF_Income.push(sortData[0]['One_-_OFF_Income']);
                        aiptoolData.Total_Income.push(sortData[0].Total_Income);
                        aiptoolData.Regular_Expenses.push(sortData[0].Regular_Expenses);
                        aiptoolData.ONE___OFF_Expense.push(sortData[0]['ONE_-_OFF_Expense']);
                        aiptoolData.Debt_Payments.push(sortData[0].Debt_Payments);
                        aiptoolData.Loan_Monthly_Payment.push(sortData[0].Loan_Monthly_Payment);
                        aiptoolData.Total_Expense.push(sortData[0].Total_Expense);
                        aiptoolData.Total_Interest_Due.push(sortData[0].Total_Interest_Due);
                        aiptoolData.Original_HELOC_Revolving_Loan_Reduction_Amount.push(sortData[0].Original_HELOC_Revolving_Loan_Reduction_Amount);
                        aiptoolData.Loan_Closing_Balance__Projected_Forecast.push(sortData[0]['Loan_Closing_Balance_(Projected_Forecast)']);
                        aiptoolData.Left_Over_from_Checking_Account.push(sortData[0].Left_Over_from_Checking_Account);
                        if (t.mortgage.output.months.length == (i + 1))
                            t.mortgage.output.data = aiptoolData;
                    })
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


                applyFilter: function() {
                    let t = this;
                    t.mortgage.output.data = {
                        Original_Loan_Balance: [],
                        Original_HELOC_Credit_Limit: [],
                        HELOC_Interest_Rate: [],
                        Amount_Injected_into_Loan: [],
                        New_Loan_Balance_After_Injection: [],
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
                        Loan_Closing_Balance__Projected_Forecast: [],
                        Left_Over_from_Checking_Account: []
                    };
                    t.getAipMonths();
                },

                //YearlyBalances

                setAipYearly: function(d) {
                    let t = this;
                    console.log(d);
                    let count = 0;
                    Object.keys(d['Original_P&I_Loan']).forEach(function(key) {
                        console.log(key);
                        t.mortgage.output.yearly_balances.years.push({
                            years: key
                        });
                        count++;
                        if (Object.keys(d['Original_P&I_Loan']).length == count) {
                            t.setAipYearlyData(d)
                        }
                    });
                },
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
                        if(t.mortgage.output.yearly_balances.years.length == (i+1)){
                            t.mortgage.output.yearly_balances.settings.count = Math.ceil(t.mortgage.output.yearly_balances.years.length / 10);
                            t.mortgage.output.yearly_balances.settings.loaded = true;
                            t.paginate(1);
                        }
                    });
                },
                paginate: function(page) {
                    var ths = this;
                    ths.mortgage.output.yearly_balances.filterYears = [];
                    var start = (page * 10);
                    var last = (start + 10);
                    for (var i = start - 10; i <= last - 10; i++) {
                        if (typeof(ths.mortgage.output.yearly_balances.years[i]) != "undefined")
                            ths.mortgage.output.yearly_balances.filterYears.push(ths.mortgage.output.yearly_balances.years[i]);
                    }
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

                },
                formatAmt: function(value) {
                    // return "$ " + value.toLocaleString().split(".")[0] + "." + value.toFixed(2).split(".")[1];
                    let val = (value / 1).toFixed(2).replace(',', '.')
                    return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
                }
            }
        })
    </script>
    </body>

    </html>