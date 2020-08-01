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

    .pagination>li>a:hover,
    .pagination>li>span:hover,
    .pagination>li>a:focus,
    .pagination>li>span:focus {
      z-index: 3;
      color: #23527c;
      background-color: #eee;
      border-color: #0c2069;
    }

    .pagination>li>a,
    .pagination>li>span {
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

    .pagination>.active>a {
      color: #fff;
      background-color: #0c2069 !important;
      border: solid 1px #0c2069 !important;
    }

    .pagination>.active>a:focus {
      color: #fff;
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
                          Regular Income Data

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
                                     <input type="text" class="form-control modalcontrol" id="exampleFormControlInput1" placeholder="Description"
                                     v-model="mortgage.morRegIncome.addmorRegIncome.description" :style="[mortgage.error.description?{'border-color':'red'}:{}]">    
                                   </div>

                                   <div class="col-md-6">
                                    <input type="text" class="form-control modalcontrol" id="exampleFormControlInput1" placeholder="Amount"
                                    v-model="mortgage.morRegIncome.addmorRegIncome.amount" :style="[mortgage.error.amount?{'border-color':'red'}:{}]">

                                  </div>
                                </div>
                                <div class="row">
                                 <div class="col-md-6">
                                   <select class=" modalcontrol" v-model="mortgage.morRegIncome.addmorRegIncome.frequency" 
                                   :style="[mortgage.error.frequency?{'border-color':'red'}:{}]">

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
                                 <select class=" modalcontrol" v-model="mortgage.morRegIncome.addmorRegIncome.income_type"
                                 :style="[mortgage.error.income_type?{'border-color':'red'}:{}]">
                                 <option disabled selected value> select type </option>
                                 <option value="Salary">Salary</option>
                                 <option value="Rental Income">Rental Income</option>
                                 <option value="Business Income">Business Income</option>
                                 <option value="Dividend Income">Dividend Income</option>
                                 <option value="Bonus">Bonus</option>
                                 <option value="Commission">Commission</option>
                                 <option value="Tax Refund">Tax Refund</option>
                                 <option value="Social Security">Social Security</option>
                                 <option value="Pension">Pension</option>
                                 <option value="Other">Other</option>
                               </select>
                             </div>
                           </div>
                           <div class="row">
                             <div class="col-md-6">
                               <vuejs-datepicker :language="en" placeholder="Start Date" class="form-control modalcontrol" v-model="mortgage.morRegIncome.addmorRegIncome.income_starts" :style="[mortgage.error.income_starts?{'border-color':'red'}:{}]"></vuejs-datepicker>

                               <!-- <input type="date" name="bday" class="modalcontrol"  v-model="mortgage.morRegIncome.addmorRegIncome.income_starts" :style="[mortgage.error.income_starts?{'border-color':'red'}:{}]"> -->

                             </div>
                             <div class="col-md-6">
                               <vuejs-datepicker :language="en" placeholder="End Start" class="form-control modalcontrol" v-model="mortgage.morRegIncome.addmorRegIncome.income_ends" :style="[mortgage.error.income_ends?{'border-color':'red'}:{}]"></vuejs-datepicker>

                               <!-- <input type="date" name="bday" class="modalcontrol"  v-model="mortgage.morRegIncome.addmorRegIncome.income_ends" :style="[mortgage.error.income_ends?{'border-color':'red'}:{}]"> -->
                             </div>
                           </div>
                         </div>
                         <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary" @click.prevent="addMorRegInc()">Save</button>
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
                      <th style="padding: 0px 50px;text-align: center;">DESCRIPTION</th>
                      <th style="padding: 0px 50px;text-align: center;">AMOUNT</th>
                      <th style="padding: 0px 50px;text-align: center;">FREQUENCY</th>
                      <th style="padding: 0px 50px;text-align: center;">TYPE</th>
                      <th style="padding: 0px 50px;text-align: center;">START DATE</th>
                      <th style="padding: 0px 50px;text-align: center;">END DATE</th>
                      <th style="padding: 0px 50px;text-align: center;">ACTION</th>
                    </tr>
                    <tr v-show="filterpagination.length<1" class="table_row_design2" style="background-color: #edf1f9">
                      <td style="text-align:center;    padding: 70px 0;" colspan="7">
                        <p style="font-size:30px; font-weight:bold;color: #9E9E9E;">Oops! No Input Yet.</p>
                      </td>
                    </tr>
                    <tr>
                      <div class="se-pre-con"></div>
                    </tr>
                    <tr class="table_row_design1" v-for="(item,i) in filterpagination" :key='item.id'>
                      <td style="padding-left: 0; text-align: center;">
                        <span v-if="!item.edit">{{item.description}} </span><span v-if="item.edit"><input style="margin: 0 auto;" type="text" class="form-control control_input_from4" id="exampleFormControlInput1" placeholder="Description" v-model="item.edit_description" :style="[item.error.description?{'border-color':'red'}:{}]"></span>
                      </td>
                      <td style="padding-left: 0; text-align: center;">
                        <span v-if="!item.edit">$ {{item.amount}} </span><span v-if="item.edit"><input style="margin: 0 auto;" type="text" class="form-control control_input_from4" id="exampleFormControlInput1" placeholder="Amount" v-model="item.edit_amount" :style="[item.error.amount?{'border-color':'red'}:{}]"></span>
                      </td>
                      <td style="padding-left: 0; text-align: center;">
                        <span v-if="!item.edit">{{item.frequency}} </span><span v-if="item.edit">
                          <!-- <input type="text" class="form-control control_input_from4" id="exampleFormControlInput1" placeholder="Frequency" v-model="item.edit_frequency"> -->
                          <select class=" textmort1" v-model="item.edit_frequency" style="margin: 0 auto;" :style="[item.error.frequency?{'border-color':'red'}:{}]">
                            <option disabled selected value> select frequency </option>
                            <option value="Monthly">Monthly</option>
                            <option value="Monthly">One-Time</option>
                            <option value="Yearly">Yearly</option>
                            <option value="Weekly">Weekly</option>
                            <option value="Bi-Weekly">Bi-Weekly</option>
                            <option value="Half Yearly">Half Yearly</option>
                          </select>
                        </span>
                      </td>
                      <td style="padding-left: 0; text-align: center;">
                        <span v-if="!item.edit">{{item.income_type}} </span><span v-if="item.edit">
                          <select class=" textmort1" v-model="item.edit_income_type" style="margin: 0 auto;" :style="[item.error.income_type?{'border-color':'red'}:{}]">
                            <option value="Salary">Salary</option>
                            <option value="Rental Income">Rental Income</option>
                            <option value="Business Income">Business Income</option>
                            <option value="Dividend Income">Dividend Income</option>
                            <option value="Bonus">Bonus</option>
                            <option value="Commission">Commission</option>
                            <option value="Tax Refund">Tax Refund</option>
                            <option value="Social Security">Social Security</option>
                            <option value="Pension">Pension</option>
                            <option value="Other">Other</option>
                          </select>
                        </span>
                      </td>
                      <td style="padding-left: 0; text-align: center;">
                        <span v-if="!item.edit">{{item.income_starts}} </span><span v-if="item.edit">
                         <vuejs-datepicker :language="en" placeholder="Start Date" class="form-control modalcontrol" v-model="item.edit_income_starts" :style="[item.error.income_starts?{'border-color':'red'}:{}]"></vuejs-datepicker>
                         <!-- <input style="margin: 0 auto;" type="text" class="form-control control_input_from4" id="exampleFormControlInput1" placeholder="Income Starts" v-model="item.edit_income_starts" :style="[item.error.income_starts?{'border-color':'red'}:{}]"> -->
                       </span>
                     </td>
                     <td style="padding-left: 0; text-align: center;">
                      <span v-if="!item.edit"> {{item.income_ends}}</span><span v-if="item.edit">
                        <vuejs-datepicker :language="en" placeholder="End Date" class="form-control modalcontrol" v-model="item.edit_income_ends" :style="[item.error.income_ends?{'border-color':'red'}:{}]"></vuejs-datepicker>

                        <!-- <input style="margin: 0 auto;" type="text" class="form-control control_input_from4" id="exampleFormControlInput1" placeholder="Income Ends" v-model="item.edit_income_ends" :style="[item.error.income_ends?{'border-color':'red'}:{}]"> -->
                      </span>
                    </td>
                    <td>
                      <div class="d-flex bd-highlight ">
                        <div class="p-2 bd-highlight" v-on:click="editRegInc(item)" v-if="!item.edit" style="cursor:pointer"><i class="fas fa-pen-alt"></i> Edit</div>
                        <div class="p-2 bd-highlight" v-on:click="saveRegInc(item)" v-if="item.edit" style="cursor:pointer"><i class="fas fa-pen-alt"></i> Save</div>
                        <div class="p-2 bd-highlight" style="cursor:pointer" v-on:click="deleteRegInc(item,i)"><i class="far fa-trash-alt"></i> Delete</div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
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
                              <!-- <td style="padding: 0px 30px;">
                                <input type="text" class="form-control control_input_from1" id="exampleFormControlInput1" placeholder="Description" v-model="mortgage.morRegIncome.addmorRegIncome.description" :style="[mortgage.error.description?{'border-color':'red'}:{}]">
                              </td>
                              <td>
                                <input type="text" class="form-control control_input_from1" id="exampleFormControlInput1" placeholder="Amount" v-model="mortgage.morRegIncome.addmorRegIncome.amount" :style="[mortgage.error.amount?{'border-color':'red'}:{}]">
                              </td>
                              <td>
                                <select class=" textmort1" v-model="mortgage.morRegIncome.addmorRegIncome.frequency" :style="[mortgage.error.frequency?{'border-color':'red'}:{}]">
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
                                <select class=" textmort1" v-model="mortgage.morRegIncome.addmorRegIncome.income_type" :style="[mortgage.error.income_type?{'border-color':'red'}:{}]">
                                  <option disabled selected value> select type </option>
                                  <option value="Salary">Salary</option>
                                  <option value="Rental Income">Rental Income</option>
                                  <option value="Business Income">Business Income</option>
                                  <option value="Dividend Income">Dividend Income</option>
                                  <option value="Bonus">Bonus</option>
                                  <option value="Commission">Commission</option>
                                  <option value="Tax Refund">Tax Refund</option>
                                  <option value="Social Security">Social Security</option>
                                  <option value="Pension">Pension</option>
                                  <option value="Other">Other</option>
                                </select>
                              </td>
                              <td>
                                <input type="date" name="bday" class="control_input_from3" style="width: 155px;" v-model="mortgage.morRegIncome.addmorRegIncome.income_starts" :style="[mortgage.error.income_starts?{'border-color':'red'}:{}]">
                              </td>
                              <td>
                                <input type="date" name="bday" class="control_input_from4" style="width: 155px;" v-model="mortgage.morRegIncome.addmorRegIncome.income_ends" :style="[mortgage.error.income_ends?{'border-color':'red'}:{}]">
                              </td> -->
                              <td>
                                <!-- <button class="btn btnsuccessde" @click.prevent="addMorRegInc()">SAVE</button> -->
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
        morRegInc: [],
        showUpdate: false,
        currYear: 0,
        years: [],
        userProData: [],
        filterpagination: [],
        noInput: false,
        isActive: false,
        mortgage: {
          error: {},
          morRegIncome: {
            addmorRegIncome: {
              description: "",
              amount: "",
              frequency: "",
              income_type: "",
              income_starts: "",
              income_ends: ""
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
            yearly_balances: {
              years: [],
            }
          }
        },

        toolData: {
          selectedType: 1,
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
      // t.mySubscription();
        t.getMorRegInc();
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
            if (typeof(ths.morRegInc[i]) != "undefined")
              ths.filterpagination.push(ths.morRegInc[i]);
          }
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
        // ********************* MORTGAGE TOOL ******************************* //
        getMorRegInc: function() {
          let t = this;
          $('.se-pre-con').fadeIn("slow");
          $('.trans').fadeIn("slow");
          t.noInput = false;
          https.get('inputs/aiptool/regular-income/')
          .then(function(res) {
            t.noInput = false;
            this.isActive = true;
            res.forEach(function(v, i) {
              v.edit = false;
              v.edit_description = v.description;
              v.edit_amount = v.amount;
              v.edit_frequency = v.frequency;
              v.edit_income_starts = v.income_starts;
              v.edit_income_ends = v.income_ends;
              v.edit_income_type = v.income_type
              v.error = {};
              t.morRegInc.push(v);
            });
          }).then(function() {
            $(".se-pre-con").fadeOut("slow");
            $('.trans').fadeOut("slow");
            this.isActive = false;
            t.settings.count = Math.ceil(t.morRegInc.length / 10);
            t.settings.loaded = true;
            t.paginate(1);
          });
        },
        addMorRegInc: function() {
          let t = this;
          t.mortgage.morRegIncome.addmorRegIncome.income_starts=t.customFormatter(t.mortgage.morRegIncome.addmorRegIncome.income_starts);
          t.mortgage.morRegIncome.addmorRegIncome.income_ends=t.customFormatter(t.mortgage.morRegIncome.addmorRegIncome.income_ends);
          let data = t.mortgage.morRegIncome.addmorRegIncome;
          console.log(data);
          https.post('inputs/aiptool/regular-income/', data)
          .then(function(res) {
            console.log(res);
            if (res.hasValidationError) {
              t.mortgage.error = res.validationError
            }
            if (!res.hasValidationError && !res.validationError) {
              res.edit = false;
              res.edit_description = data.description;
              res.edit_amount = data.amount;
              res.edit_frequency = data.frequency;
              res.edit_income_starts = data.income_starts;
              res.edit_income_ends = data.income_ends;
              res.error = {};
                t.filterpagination.unshift(res);
                t.mortgage.morRegIncome.addmorRegIncome = {
                  description: "",
                  amount: "",
                  frequency: "",
                  income_type: "",
                  income_starts: "",
                  income_ends: ""
                }
                t.mortgage.error = {}
                t.settings.count = Math.ceil(t.morRegInc.length / 10);
                t.settings.loaded = true;
                t.paginate(1);
              }
            });
        },
        deleteRegInc: function(value, i) {
          let e = this;
          https.delete('inputs/aiptool/regular-income/' + value.id + '/')
          .then(function(res) {
            console.log(res);
            e.filterpagination.splice(i, 1);
          });
        },
        saveRegInc: function(value) {
          let e = this;
          value.edit_income_starts=e.customFormatter(value.edit_income_starts);
          value.edit_income_ends=e.customFormatter(value.edit_income_ends);
          let data = {
            description: value.edit_description,
            amount: value.edit_amount,
            frequency: value.edit_frequency,
            income_type: value.edit_income_type,
            income_starts: value.edit_income_starts,
            income_ends: value.edit_income_ends,
          }
          console.log(data);
          https.patch('inputs/aiptool/regular-income/' + value.id + '/', data)
          .then(function(res) {
            console.log(res);
            if (res.hasValidationError) {
              value.error = res.validationError;
            }
            if (!res.hasValidationError && !res.validationError) {
              value.edit = false;
              value.description = value.edit_description;
              value.amount = value.edit_amount;
              value.frequency = value.edit_frequency;
              value.income_type = value.edit_income_type;
              value.income_starts = value.edit_income_starts;
              value.income_ends = value.edit_income_ends;
            }
          });
        },
        editRegInc: function(value) {
          console.log(value);
          value.edit = !value.edit;
        },
        logoutUser: function() {
          window.localStorage.removeItem('admin_identifier');
          window.location.href = "/";
        },
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
          let val = (value / 1).toFixed(2).replace(',', '.')
          return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        },
      }
    })
  </script>
</body>

</html>