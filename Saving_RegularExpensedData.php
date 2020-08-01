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
            /* width: 205px; */
            z-index: 100000;
            width:100%;
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

        .se-pre-con {
            position: absolute;
            width: 100px;
            height: 100px;
            top: 26%;
            left: 45%;
            z-index: 9999;
            background: url(/images/302-loader-1.gif) center no-repeat #fff;
        }
        .pagination {
            padding-left: 0;
            margin: 20px 0;
            border-radius: 4px;
        }
        .page-item {
          display: inline;
      }
      .pagination > li > a:hover, .pagination > li > span:hover, .pagination > li > a:focus, .pagination > li > span:focus {
        z-index: 3;
        color: #23527c;
        background-color: #eee;
        border-color: #0c2069;
    }
    .pagination > li > a, .pagination > li > span {
        position: relative;
        float: left;
        padding: 6px 12px;
        margin-left: -1px;
        line-height: 1.42857143;
        color: #0c2069;
        text-decoration: none;
        background-color: #fff;
        border: 1px solid #0c2069;
    }
    .pagination > .active > a
    {
        color: #fff;
        background-color: #0c2069 !important;
        border: solid 1px #0c2069 !important;
    }

    .pagination > .active > a:focus
    {   
        color:#fff;
        background-color: #0c2069 !important;
        border: solid 1px #0c2069;
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
                        

                        <?php include('saving_Config.php'); ?>


                        <div class="col-md-9">
                            <div class="rightwhitesidesignd">
                                <div class="rightwhiteside1">
                                    <div class="d-flex bd-highlight rightwhiteside2">
                                        <div class="mr-auto bd-highlight">
                                            <div class="wellcomedm">
                                                <p>
                                                    <i class="fas fa-file-export wellcomeiconde"></i> Saving Data </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="">
                                        <div class="contaner z-depth-4 inputdata_filedesign">
                                            <div>
                                                <div class="Input_Data_Form">
                                                    Regular Expensed Data
                                                    <div class="float-right">
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btnsuccessde" data-toggle="modal" data-target="#exampleModal">
                                                            Add
                                                        </button>
                                                    </div>
                                                    <!-- Modal -->
                                                    <div class="modal  fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">ADD</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <!-- <input type="text" class="form-control modalcontrol" id="exampleFormControlInput1" placeholder="Description" v-model="mortgage.currentDebt.addData.description" :style="[mortgage.error.description?{'border-color':'red'}:{}]"> -->
                                                                            
                                                                            <div class="ui-widget">
                                                                                <input id="tags" class="form-control modalcontrol" @focus="getDescriptionVal('regular_expense',2)" 
                                                                                @blur="closeMainDrop(savings.regular_expense)" @focus="savings.regular_expense.showDescription = false" 
                                                                                v-model="savings.regular_expense.addData.description" autocomplete="OFF" placeholder="Description" 
                                                                                :style="[savings.error.description?{'border-color':'red'}:{}]" />
                                                                                <div v-show="savings.regular_expense.showDescription" class="uiDescription">
                                                                                    <ul style="   list-style-type: none;width:100%; margin-left: -40px;">
                                                                                        <li v-for="(v,j) in savings.regular_expense.description" @click="selectDescription('regular_expense',2,v)"
                                                                                        style="padding: 0px 20px;
                                                                                        font-size: 14px;cursor: pointer;white-space: nowrap;" class="liDescription">{{v}}</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>    
                                                                        </div>
                                                                        
                                                                        <div class="col-md-6">
                                                                          <input type="text" class="form-control modalcontrol" id="exampleFormControlInput1" placeholder="Amount" v-model="savings.regular_expense.addData.amount" :style="[savings.error.amount?{'border-color':'red'}:{}]">
                                                                      </div>
                                                                  </div>
                                                                  <div class="row">
                                                                     <div class="col-md-6">
                                                                         <select class="modalcontrol" v-model="savings.regular_expense.addData.frequency" :style="[savings.error.frequency?{'border-color':'red'}:{}]">
                                                                            <option disabled selected value> select frequency </option>
                                                                            <option value="Monthly">Monthly</option>
                                                                            <option value="Monthly">One-Time</option>
                                                                            <option value="Yearly">Yearly</option>
                                                                            <option value="Weekly">Weekly</option>
                                                                            <option value="Bi-Weekly">Bi-Weekly</option>
                                                                            <option value="Half Yearly">Half Yearly</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                     <vuejs-datepicker :language="en" placeholder="Start date" class="form-control modalcontrol" v-model="savings.regular_expense.addData.start_date" :style="[savings.error.start_date?{'border-color':'red'}:{}]"></vuejs-datepicker>

                                                                     <!-- <input type="date" name="bday" class="form-control modalcontrol" v-model="savings.regular_expense.addData.start_date" :style="[savings.error.start_date?{'border-color':'red'}:{}]"> -->
                                                                 </div>
                                                             </div>
                                                             <div class="row">
                                                                 <div class="col-md-6">
                                                                     <vuejs-datepicker :language="en" placeholder="End date" class="form-control modalcontrol" v-model="savings.regular_expense.addData.end_date"  :style="[savings.error.end_date?{'border-color':'red'}:{}]"></vuejs-datepicker>

                                                                     <!-- <input type="date" name="bday" class="form-control modalcontrol" v-model="savings.regular_expense.addData.end_date" :style="[savings.error.end_date?{'border-color':'red'}:{}]"> -->
                                                                 </div>
                                                                 <div class="col-md-6">
                                                               <!-- <input type="date" name="bday" class="modalcontrol" v-model="mortgage.morRegExp.addmorRegExp.end_date" 
                                                                 :style="[mortgage.error.end_date?{'border-color':'red'}:{}]"> -->
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary" @click.prevent="addSavingRegularExpense">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                                <div>
                                    <div style="overflow-x:auto;">
                                        <table>
                                            <tr class="table_row_design">
                                                <th style="padding: 0 50px;text-align: center;">DESCRIPTION</th>
                                                <th style="padding: 0 50px;text-align: center;">AMOUNT</th>
                                                <th style="padding: 0 50px;text-align: center;">FREQUENCY</th>
                                                <th style="padding: 0 50px;text-align: center;">START DATE</th>
                                                <th style="padding: 0 50px;text-align: center;">END DATE</th>
                                                <th style="padding: 0 50px;text-align: center;">ACTION</th>
                                            </tr>
                                            <tr v-show="filterpagination.length<1" class="table_row_design2" style="background-color: #edf1f9">
                                                <td style="text-align:center;    padding: 70px 0;" colspan="7">
                                                    <p style="font-size:30px; font-weight:bold;color: #9E9E9E;">Oops! No Input Yet.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <div class="se-pre-con"></div>
                                            </tr>
                                            <tr class="table_row_design1" v-for="(v,i) in filterpagination" :key='v.id'>
                                                <td style="padding-left: 0; text-align: center;"><span v-if="!v.edit">{{v.description}}</span><span v-if="v.edit">

                                                    <!-- <input type="text" class="form-control control_input_from5" id="exampleFormControlInput1" placeholder="Description" v-model="v.edit_description"> -->
                                                    <div class="ui-widget">
                                                        <input id="tags" style="margin: 0 auto;" class="form-control control_input_from1" @focus="editDescriptionVal(i,4)" v-model="v.edit_description" @blur="closeMainDrop(v,true)" autocomplete="OFF" placeholder="Description" :style="[v.error.description?{'border-color':'red'}:{}]" />
                                                        <div v-show="v.showDescription" class="uiDescription">
                                                            <ul style="list-style-type: none; margin-left: -40px;">
                                                                <li v-for="(v,j) in v.description" @click="selectEditDescription(i,4,v)" style=" padding: 5px 20px;cursor: pointer;white-space: nowrap;" class="liDescription">{{v}}</li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </span>
                                            </td>
                                            <td style="padding-left: 0; text-align: center;"><span v-if="!v.edit">$ {{v.amount}}</span><span v-if="v.edit"><input style="margin: 0 auto;" type="text" class="form-control control_input_from5" id="exampleFormControlInput1" placeholder="Amount" v-model="v.edit_amount" :style="[v.error.amount?{'border-color':'red'}:{}]"></span></td>
                                            <td style="padding-left: 0; text-align: center;"><span v-if="!v.edit">{{v.frequency}}</span><span v-if="v.edit">


                                                <!-- <input type="date" class="form-control control_input_from5" id="exampleFormControlInput1" placeholder="Frequency" v-model="v.edit_frequency"> -->
                                                <select class=" textmort1" v-model="v.edit_frequency" style="margin: 0 auto;" :style="[v.error.frequency?{'border-color':'red'}:{}]">
                                                    <option disabled selected value> select frequency </option>
                                                    <option value="Monthly">Monthly</option>
                                                    <option value="Monthly">One-Time</option>
                                                    <option value="Yearly">Yearly</option>
                                                    <option value="Weekly">Weekly</option>
                                                    <option value="Bi-Weekly">Bi-Weekly</option>
                                                    <option value="Half Yearly">Half Yearly</option>
                                                </select>

                                            </span></td>
                                            <td style="padding-left: 0; text-align: center;"><span v-if="!v.edit">{{v.start_date}}</span><span v-if="v.edit">
                                              
                                              <vuejs-datepicker :language="en"  placeholder="Start Date" class="form-control modalcontrol" v-model="v.edit_start_date" :style="[v.error.start_date?{'border-color':'red'}:{}]"></vuejs-datepicker>

                                              <!-- <input style="margin: 0 auto;" type="date" class="form-control control_input_from5" id="exampleFormControlInput1" placeholder="Start Date" v-model="v.edit_start_date" :style="[v.error.start_date?{'border-color':'red'}:{}]"> -->
                                          </span></td>
                                          <td style="padding-left: 0; text-align: center;"><span v-if="!v.edit">{{v.end_date}}</span><span v-if="v.edit">
                                            
                                            <vuejs-datepicker :language="en"  placeholder="End Date" class="form-control modalcontrol" v-model="v.edit_end_date" :style="[v.error.end_date?{'border-color':'red'}:{}]"></vuejs-datepicker>
                                            <!-- <input style="margin: 0 auto;" type="date" class="form-control control_input_from5" id="exampleFormControlInput1" placeholder="End Date" v-model="v.edit_end_date" :style="[v.error.end_date?{'border-color':'red'}:{}]"> -->
                                            
                                        </span></td>
                                        <td>
                                            <div class="d-flex bd-highlight ">
                                                <div class="p-2 bd-highlight" @click.prevent="editSavingRegularExpense(v)" v-if="!v.edit" style="cursor:pointer"><i class="fas fa-pen-alt"></i> Edit</div>
                                                <div class="p-2 bd-highlight" @click.prevent="saveSavingRegularExpense(v)" v-if="v.edit" style="cursor:pointer"><i class="fas fa-file-alt"></i> Save</div>
                                                <div class="p-2 bd-highlight" @click.prevent="deleteSavingRegularExpense(v,i)" style="cursor:pointer"><i class="far fa-trash-alt"></i> Delete</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                        <td colspan="2">
                                            <paginate v-if="settings.loaded && filterpagination.length > 0" :page-count="settings.count" :click-handler="paginate" :prev-text="'Prev'" :next-text="'Next'" :hide-prev-next=true :container-class="'pagination'" :page-class="'page-item'">
                                            </paginate>
                                        </td>
                                    </tr>
                                    <tr>
                                                            <!-- <td style="padding:0 30px">

                                                                <div class="ui-widget">
                                                                    <input id="tags" class="form-control control_input_from1" @focus="getDescriptionVal('regular_expense',2)" @blur="closeMainDrop(savings.regular_expense)" @focus="savings.regular_expense.showDescription = false" v-model="savings.regular_expense.addData.description" autocomplete="OFF" placeholder="Description" :style="[savings.error.description?{'border-color':'red'}:{}]" />
                                                                    <div v-show="savings.regular_expense.showDescription" class="uiDescription">
                                                                        <ul style="   list-style-type: none;    margin-left: -40px;">
                                                                            <li v-for="(v,j) in savings.regular_expense.description" @click="selectDescription('regular_expense',2,v)" style=" padding: 5px 20px;cursor: pointer;white-space: nowrap;" class="liDescription">{{v}}</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control control_input_from1" id="exampleFormControlInput1" placeholder="Amount" v-model="savings.regular_expense.addData.amount" :style="[savings.error.amount?{'border-color':'red'}:{}]">
                                                            </td>
                                                            <td> -->
                                                                <!-- <input type="text" name="bday" class="form-control control_input_from1" v-model="savings.regular_expense.addData.frequency"> -->
                                                                <!-- <select class=" textmort1" v-model="savings.regular_expense.addData.frequency" :style="[savings.error.frequency?{'border-color':'red'}:{}]">
                                                                    <option disabled selected value> select frequency </option>
                                                                    <option value="Monthly">Monthly</option>
                                                                    <option value="Monthly">One-Time</option>
                                                                    <option value="Yearly">Yearly</option>
                                                                    <option value="Weekly">Weekly</option>
                                                                    <option value="Bi-Weekly">Bi-Weekly</option>
                                                                    <option value="Half Yearly">Half Yearly</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <input type="date" name="bday" class="form-control control_input_from1" v-model="savings.regular_expense.addData.start_date" :style="[savings.error.start_date?{'border-color':'red'}:{}]">
                                                            </td>
                                                            <td>
                                                                <input type="date" name="bday" class="form-control control_input_from1" v-model="savings.regular_expense.addData.end_date" :style="[savings.error.end_date?{'border-color':'red'}:{}]">
                                                            </td> -->
                                                            <td>
                                                                <!-- <button class="btn btnsuccessde" @click.prevent="addSavingRegularExpense">Save</button> -->
                                                            </td>
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

    <script src="https://unpkg.com/vuejs-datepicker"></script>
    <script src="https://unpkg.com/vuejs-datepicker/dist/locale/translations/en.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>

    <script>
        var app = new Vue({
            el: '#app',
            components: {
                'paginate': VuejsPaginate,
                'vuejs-datepicker': vuejsDatepicker,

            },
            data: {
                en: vdp_translation_en.js,

                months: [],

                showUpdate: false,
                currYear: 0,
                years: [],
                userProData: [],
                filterpagination:[],
                noInput: false,
                isActive: false,
                lastYear: 0,
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
                        amount_available_for_debt: ''
                    },
                    error: {},
                    credit_debit: {
                        data: [],
                        addData: {
                            description: '',
                            owed: '',
                            as_of: '',
                            debt_type: '',
                            payment: '',
                            rate: ''
                        }
                    },
                    lumpsum_expense: {
                        data: [],
                        addData: {
                            description: '',
                            amount: '',
                            when_expended: ''
                        }
                    },
                    lumpsum_income: {
                        data: [],
                        addData: {
                            description: '',
                            amount: '',
                            when_injecting: ''
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
                            end_date: ''
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
                            income_ends: ''
                        },
                        data: []
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
                settings:{
                  count:0,
                  loaded:false,
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
                t.getSavingRegularExpense();
            },
            methods: {
                customFormatter:function(date) {
                 let t=this;
                 console.log(date);
                 let dt= moment(date).format('YYYY-MM-DD');
                 
                 console.log(dt);
                 return dt;
             },
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
            paginate: function(page) {
                var ths = this;
                ths.filterpagination = [];
                var start = (page * 10);
                var last = (start + 10);
                for (var i = start - 10; i <= last - 10; i++) {
                    if (typeof(ths.savings.regular_expense.data[i]) != "undefined")
                        ths.filterpagination.push(ths.savings.regular_expense.data[i]);
                }
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
                closeMainDrop: function(v, emptyArr) {
                    let t = this;
                    t.timer = setTimeout(function() {
                        if (emptyArr) {
                            v.description = [];
                            v.showDescription = false;
                        } else {
                            v.showDescription = false;
                        }
                    }, 275)
                },

                getUser: function() {
                    let t = this;
                    https.get('user/profile')
                    .then(function(res) {
                        console.log(res);
                        t.user = res;
                    });
                },
                changeType: function() {
                    let t = this;
                },

                // ********************* SAVING TOOL ******************************* //
                getSavingRegularExpense: function() {
                    let t = this;
                    $('.se-pre-con').fadeIn("slow");
                    $('.trans').fadeIn("slow");
                    t.noInput = false;
                    https.get('inputs/savingtool/regular-expense/')
                    .then(function(res) {
                        console.log(res);
                        t.noInput = false;
                        this.isActive = true;
                        res.forEach(function(v, i) {
                            v.edit = false;
                            v.edit_description = v.description;
                            v.edit_amount = v.amount;
                            v.edit_frequency = v.frequency;
                            v.edit_start_date = v.start_date;
                            v.edit_end_date = v.end_date;
                            v.error = {};
                            t.savings.regular_expense.data.push(v);
                        });
                    }).then(function() {
                        $(".se-pre-con").fadeOut("slow");
                        $('.trans').fadeOut("slow");
                        this.isActive = false;
                        t.settings.count = Math.ceil(t.savings.regular_expense.data.length / 10);
                        t.settings.loaded = true;
                        t.paginate(1);
                    });
                },
                addSavingRegularExpense: function() {
                    let t = this;

                    t.savings.regular_expense.addData.start_date=t.customFormatter(t.savings.regular_expense.addData.start_date);
                    t.savings.regular_expense.addData.end_date=t.customFormatter(t.savings.regular_expense.addData.end_date);
                    let data = t.savings.regular_expense.addData;
                    console.log(data);
                    https.post('inputs/savingtool/regular-expense/', data)
                    .then(function(res) {
                        console.log(res);
                        if (res.hasValidationError) {
                            t.savings.error = res.validationError;
                        }
                        if (!res.hasValidationError && !res.validationError) {
                            res.edit = false;
                            res.edit_description = data.description;
                            res.edit_amount = data.amount;
                            res.edit_frequency = data.frequency;
                            res.edit_start_date = data.start_date;
                            res.edit_end_date = data.end_date;
                            res.error = {}
                                // t.savings.regular_expense.data.unshift(res);
                                t.filterpagination.unshift(res);
                                t.savings.regular_expense.addData = {
                                    description: '',
                                    amount: '',
                                    frequency: '',
                                    start_date: '',
                                    end_date: ''
                                }
                                t.savings.error = {}
                                t.settings.count = Math.ceil(t.savings.regular_expense.data.length / 10);
                                t.settings.loaded = true;
                                t.paginate(1);
                            }
                        });
                },
                saveSavingRegularExpense: function(d) {
                    let t=this;
                    d.edit_start_date=t.customFormatter(d.edit_start_date);
                    d.edit_end_date=t.customFormatter(d.edit_end_date);
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
                            d.error = res.validationError;
                        }
                        if (!res.hasValidationError && !res.validationError) {
                            d.edit = !d.edit;
                            d.description = d.edit_description;
                            d.amount = d.edit_amount;
                            d.frequency = d.edit_frequency;
                            d.start_date = d.edit_start_date;
                            d.end_date = d.edit_end_date;
                        }
                    });
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
                deleteSavingRegularExpense: function(d, i) {
                    let t = this;
                    let id = d.id;
                    https.delete('inputs/savingtool/regular-expense/' + id + '/')
                    .then(function(res) {
                        console.log(res);
                        t.filterpagination.splice(i, 1);
                    });
                },


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
                                if (!res.hasValidationError && !res.hasError) {
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
                            if (res.hasValidationError) {
                                t.savings.error = res.validationError
                            } else {
                                window.location.href = "Saving_CurrentDebt";
                            }
                        });
                    } else {
                        https.post('inputs/savingtool/inputdata/', data)
                        .then(function(res) {
                            console.log(res);
                            if (res.hasValidationError) {
                                t.savings.error = res.validationError
                            } else {
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
                        if (currY == monName[1]) {
                            count++;

                            if (month.includes(monName[0])) {
                                // console.log(i)
                                t.savings.output.months.push(i);

                            }
                        }
                        if (count == t.savings.output.months.length) {
                            t.lastYear = '20' + monName[1];
                            t.setSavingToolOutputData(t.savings.output.totalCashFlow);
                        }
                    }
                },

                applyFilter: function() {
                    let t = this;
                    t.savings.output.data = {
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
                        console.log(t.savings.regular_expense.data[d]);
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
                        t.savings.regular_expense.data[d].description = description;
                        t.savings.regular_expense.data[d].showDescription = true;
                    } else if (v == 4) {
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
                        t.savings.regular_expense.data[d].description = description;
                        t.savings.regular_expense.data[d].showDescription = true;
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
                        t.savings.regular_expense.data[d].description = [];
                    }

                }
            }
        })
    </script>
</body>

</html>