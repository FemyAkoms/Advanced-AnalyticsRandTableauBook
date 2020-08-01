
const https = axios.create({
    // baseURL: 'http://192.168.1.19:8000/api/'
    baseURL: 'https://aip-backend.herokuapp.com/api/'

});

https.interceptors.request.use(function (config) {
    let token = getToken();
    console.log(typeof token);
    if (token != null && token != 'undefined')
        config.headers.Authorization = "Token " + token;
    return config;
});

isAuth();

function isAuth() {
    let token = getToken();
    let uri = window.location.pathname;
    if (token == null || token =='undefined') {
        console.log(uri);
        if(uri != "/login" && uri != "/privacy_policy" && uri != "/terms_of_service" &&  uri !="/" && uri!="/pricing" && uri!="/signup" && uri!="/index" && uri!="/contact" && uri!="/about")
            window.location.href = "login"
    }
    else{
        checkSubscription();
        // if(uri !="/dashboard.php"  && uri !="/"  && uri!="/pricing.php" && uri!="/signup.php" && uri!="/contact.php" && uri!="/about.php" && uri!="/index.php" && uri!="/mortgage_input.php" && uri!="/Input_CurrentDebt.php" && uri!="/Input_LumpSumIncome.php" && uri!="/Input_RegularExpensedData.php" && uri!="/Input_LumpSumExpenses.php" && uri!="/Input_RegularIncomeData.php" && uri!="/mortgage_output.php" && uri!="/mortgage_LoanTermComparison_output.php" && uri!="/mortgage_YearlyBalances_output.php" && uri!="/saving_input.php"  && uri!="/Saving_CurrentDebt.php" && uri!="/Saving_LumpsumExpenses.php" && uri!="/Saving_LumpsumIncome.php" && uri!="/Saving_RegularExpensedData.php" && uri!="/Saving_RegularIncomeData.php" && uri!="/saving_YearlyBal_outpu.php" && uri!="/saving_LoanTermComparison_output.php" && uri!="/saving_output.php" && uri!="/credit_input.php" && uri!="/Credit_RegularExpenses.php" && uri!="/Credit_RegularIncome.php" && uri!="/credit_output.php" && uri!="/credit_LoanTermComparison_Output.php")
        // window.location.href = "dashboard.php"
    }
}

function checkSubscription(){
    let uri = window.location.pathname;
    https.get('subscriptions/check-subscription/')
    .then(function(res){
        console.log(res);
        if(!res.data.subscription_status){
            if(uri !="/" && uri != "/privacy_policy" && uri != "/terms_of_service"  && uri!="/pricing" && uri!="/signup" && uri!="/contact" && uri!="/about" && uri!="/index" && uri!="/manage_subscription" && uri!="/about"){
                // alert('Please Subscribe for the service');
                window.location.href = "/manage_subscription";
            }
        }
        // else{
        //     alert('Please Subscribe for the service');
        //     window.location.href = "/";
        // }
    });
}

function getToken() {
    return window.localStorage.getItem('admin_identifier');
}
function removeToken() {
    localStorage.removeItem("admin_identifier");
}

https.interceptors.response.use(function (res) {
    return Promise.resolve(res.data);
}, function (err) {

    if (typeof err.response === 'undefined')
        return Promise.reject(err);
    switch (err.response.status) {
        case 401:

            removeToken();

            window.location.href = err.response.data.redirectTo ? err.response.data.redirectTo : '/';

            break;

        // case 400 : err.response.data = {hasError:true, error: 'Bad Request', hasValidationError: false}; break;

        case 404: err.response.data = { hasError: true, error: 'Not Found', hasValidationError: false }; break;

        case 500: err.response.data = { hasError: true, error: 'Internal Server Error', hasValidationError: false }; break;

        case 400:

            let errors = {};

            let count = -1;

            let resErrors = err.response.data;

            for (var i in resErrors) {
                if (Array.isArray(resErrors)) {
                    errors["message"] = resErrors;
                }
                else {
                    count++;
                    console.log(resErrors);
                    if (resErrors.hasOwnProperty(i)) {
                        errors[i] = resErrors[i][0];
                        // return { hasError: false, hasValidationError: true, validationError: {message:i+':'+resErrors[i][0]} };
                    }
                    if (count == 0)
                        errors["message"] = errors[i];
                }
            }

            err.response.data = { hasError: false, hasValidationError: true, validationError: errors }; break;

        default: err.response.data = { hasError: false, error: 'Something went wrong', hasValidationError: false }; break;
    }

    return Promise.resolve(err.response.data);

});


