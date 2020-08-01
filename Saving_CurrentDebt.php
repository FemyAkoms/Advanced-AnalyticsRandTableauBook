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
                                                    Current Debt
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
                                                                            <input type="text" class="form-control modalcontrol" id="exampleFormControlInput1" placeholder="Description" v-model="savings.credit_debit.addData.description" :style="[savings.error.description?{'border-color':'red'}:{}]">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                          <input type="text" class="form-control modalcontrol" id="exampleFormControlInput1" placeholder="Owed" v-model="savings.credit_debit.addData.owed" :style="[savings.error.owed?{'border-color':'red'}:{}]">
                                                                      </div>
                                                                  </div>
                                                                  <div class="row">
                                                                   <div class="col-md-6">
                                                                       <vuejs-datepicker :language="en" placeholder="As Of" class="form-control modalcontrol" v-model="savings.credit_debit.addData.as_of" :style="[savings.error.as_of?{'border-color':'red'}:{}]"></vuejs-datepicker>
                                                                   </div>
                                                                   <div class="col-md-6">
                                                                       <select class="modalcontrol" v-model="savings.credit_debit.addData.debt_type" :style="[savings.error.debt_type?{'border-color':'red'}:{}]">
                                                                        <option disabled selected value> select debt type </option>
                                                                        <option value="Other">Other</option>
                                                                        <option value="Personal Loan">Personal Loan</option>
                                                                        <option value="Credit Card">Credit Card</option>
                                                                        <option value="Car loan">Car loan</option>
                                                                        <option value="Investment Loan">Investment Loan</option>
                                                                        <option value="Student Loan">Student Loan</option>
                                                                        <option value="2nd Mortgage Loan">2nd Mortgage Loan</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                               <div class="col-md-6">
                                                                   <input type="text" name="payment" class="form-control modalcontrol" placeholder="Payment" v-model="savings.credit_debit.addData.payment" :style="[savings.error.payment?{'border-color':'red'}:{}]">
                                                               </div>
                                                               <div class="col-md-6">
                                                                   <input type="text" name="rate" class="form-control modalcontrol" placeholder="Rate" v-model="savings.credit_debit.addData.rate"
                                                                   :style="[savings.error.rate?{'border-color':'red'}:{}]">
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary" @click.prevent="addSavingCurrentDebt()">Save</button>
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
                                                <th style="padding: 0px 50px;     text-align: center;">DESCRIPTION</th>
                                                <th style="padding: 0px 50px;     text-align: center;">OWED</th>
                                                <th style="padding: 0px 50px;     text-align: center;">AS OF</th>
                                                <th style="padding: 0px 50px;     text-align: center;">DEBT TYPE</th>
                                                <th style="padding: 0px 50px;     text-align: center;">PAYMENT</th>
                                                <th style="padding: 0px 50px;     text-align: center;">RATE</th>
                                                <th style="padding: 0px 50px;     text-align: center;">ACTION</th>
                                            </tr>
                                            <tr v-show="filterpagination<1" class="table_row_design2" style="background-color: #edf1f9">
                                                <td style="text-align:center;    padding: 70px 0;" colspan="7">
                                                    <p style="font-size:30px; font-weight:bold;color: #9E9E9E;">Oops! No Input Yet.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <div class="se-pre-con"></div>
                                            </tr>
                                            <tr class="table_row_design1" v-for="(v,i) in filterpagination" :key='v.id'>
                                                <td style="padding-left: 0; text-align: center;"><span v-if="!v.edit">{{v.description}}</span><span v-if="v.edit"><input type="text" class="form-control control_input_from5" id="exampleFormControlInput1" placeholder="Description" v-model="v.edit_description" style="margin: 0 auto;" :style="[v.error.description?{'border-color':'red'}:{}]"></span></td>
                                                <td style="padding-left: 0; text-align: center;"><span v-if="!v.edit">$ {{v.owed}}</span><span v-if="v.edit"><input type="text" class="form-control control_input_from5" id="exampleFormControlInput1" placeholder="Owed" v-model="v.edit_owed" style="margin: 0 auto;" :style="[v.error.owed?{'border-color':'red'}:{}]"></span></td>
                                                <td style="padding-left: 0; text-align: center;">
                                                    <span v-if="!v.edit">{{v.as_of}}</span><span v-if="v.edit">
                                                        <vuejs-datepicker :language="en" placeholder="As Of" class="form-control modalcontrol" v-model="v.edit_as_of" :style="[v.error.as_of?{'border-color':'red'}:{}]"></vuejs-datepicker>
                                                    </span></td>

                                                    <td style="padding-left: 0; text-align: center;">
                                                        <span v-if="!v.edit">{{v.debt_type}}</span><span v-if="v.edit">
                                                            <select class=" textmort1" v-model="v.edit_debt_type" style="margin: 0 auto;" :style="[v.error.debt_type?{'border-color':'red'}:{}]">
                                                                <option value="Other">Other</option>
                                                                <option value="Personal Loan">Personal Loan</option>
                                                                <option value="Credit Card">Credit Card</option>
                                                                <option value="Car loan">Car loan</option>
                                                                <option value="Investment Loan">Investment Loan</option>
                                                                <option value="Student Loan">Student Loan</option>
                                                                <option value="2nd Mortgage Loan">2nd Mortgage Loan</option>
                                                            </select>
                                                        </span>
                                                    </td>
                                                    <td style="padding-left: 0;text-align: center;"><span v-if="!v.edit">$ {{v.payment}}</span><span v-if="v.edit"><input type="text" class="form-control control_input_from5" id="exampleFormControlInput1" placeholder="Payment" v-model="v.edit_payment" style="margin: 0 auto;" :style="[v.error.payment?{'border-color':'red'}:{}]"></span></td>
                                                    <td style="padding-left: 0;text-align: center;"><span v-if="!v.edit">{{v.rate}} %</span><span v-if="v.edit"><input type="text" class="form-control control_input_from5" id="exampleFormControlInput1" placeholder="Rate" v-model="v.edit_rate" style="margin: 0 auto;" :style="[v.error.rate?{'border-color':'red'}:{}]"></span></td>
                                                    <td>
                                                        <div class="d-flex bd-highlight ">
                                                            <div class="p-2 bd-highlight" @click.prevent="editSavingCurrentDebt(v)" v-if="!v.edit" style="cursor:pointer"><i class="fas fa-pen-alt"></i> Edit</div>
                                                            <div class="p-2 bd-highlight" @click.prevent="saveSavingCurrentDebt(v)" v-if="v.edit" style="cursor:pointer"><i class="fas fa-file-alt"></i> Save</div>
                                                            <div class="p-2 bd-highlight" @click.prevent="deleteSavingCurrentDebt(v,i)" style="cursor:pointer"><i class="far fa-trash-alt"></i> Delete</div>
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
                                                    <td>
                                                        <button class="btn btnsuccessde"><a href="Saving_LumpsumIncome" style="text-decoration: none;color: white">NEXT >></a></button>
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
            },

            toolData: {
                selectedType: 1,
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
        t.getSavingCurrentDebit();

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
            if (typeof(ths.savings.credit_debit.data[i]) != "undefined")
                ths.filterpagination.push(ths.savings.credit_debit.data[i]);
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
                // ********************* SAVING TOOL ******************************* //
                getSavingCurrentDebit: function() {
                    let t = this;
                    $('.se-pre-con').fadeIn("slow");
                    $('.trans').fadeIn("slow");
                    t.noInput = false;
                    https.get('inputs/savingtool/debt')
                    .then(function(res) {
                        t.noInput = false;
                        this.isActive = true;
                        res.forEach(function(v, i) {
                            v.edit = false;
                            v.edit_description = v.description;
                            v.edit_owed = v.owed;
                            v.edit_as_of = v.as_of;
                            v.edit_debt_type = v.debt_type;
                            v.edit_payment = v.payment;
                            v.edit_rate = v.rate;
                            v.error = {};
                            t.savings.credit_debit.data.push(v);
                        });
                    }).then(function() {
                        $(".se-pre-con").fadeOut("slow");
                        $('.trans').fadeOut("slow");
                        this.isActive = false;
                        t.settings.count = Math.ceil(t.savings.credit_debit.data.length / 10);
                        t.settings.loaded = true;
                        t.paginate(1);
                    });
                },
                addSavingCurrentDebt: function() {
                    let t = this;
                    t.savings.credit_debit.addData.as_of=t.customFormatter(t.savings.credit_debit.addData.as_of);
                    let data = t.savings.credit_debit.addData;
                    https.post('inputs/savingtool/debt/', data)
                    .then(function(res) {
                        console.log(res);
                        if (res.hasValidationError) {
                            t.savings.error = res.validationError;
                        }
                        if (!res.hasValidationError && !res.validationError) {
                            res.edit = false;
                            res.edit_description = data.description;
                            res.edit_owed = data.owed;
                            res.edit_as_of = data.as_of;
                            res.edit_payment = data.payment;
                            res.edit_rate = data.rate;
                            res.edit_debt_type = data.debt_type;
                            res.error = {}
                                // t.savings.credit_debit.data.unshift(res);
                                t.filterpagination.unshift(res);
                                t.savings.credit_debit.addData = {
                                    description: '',
                                    owed: '',
                                    as_of: '',
                                    debt_type: "",
                                    payment: '',
                                    rate: ''
                                }
                                t.savings.error = {}
                                t.settings.count = Math.ceil(t.savings.credit_debit.data.length / 10);
                                t.settings.loaded = true;
                                t.paginate(1);
                                // window.location.href = "Saving_LumpsumIncome.php"
                            }
                        });
                },
                saveSavingCurrentDebt: function(d) {
                    let t= this;
                    d.edit_as_of=t.customFormatter(d.edit_as_of);
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
                            d.error = res.validationError;
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
                editSavingCurrentDebt: function(d) {
                    d.edit = !d.edit;
                },
                deleteSavingCurrentDebt: function(d, i) {
                    let t = this;
                    let id = d.id;
                    https.delete('inputs/savingtool/debt/' + id + '/')
                    .then(function(res) {
                        console.log(res);
                        t.filterpagination.splice(i, 1);
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
                    let val = (value / 1).toFixed(2).replace(',', '.')
                    return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
                },
            }
        })
    </script>
</body>

</html>