

app.controller('loginRegister', function ($scope, $http, $templateCache) {
    //login
    $scope.signIn = function () {
        $('.loginLoader').show();
        var formData = {
            'userName': $('#login-form-username').val(),
            'password': $('#login-form-password').val()
        };
        ngPost('login', formData, $scope, $http, $templateCache, 'errorReg');
    };
    //register
    $scope.signUp = function () {
        validation();
        if (!$('#registerForm').valid()) {
            return false;
        }
        ;
        $('.registerLoader').show();
        var formData = {
            'user_login': $('#register-form-email').val(),
            'first_name': $('#register-form-name').val(),
            'user_email': $('#register-form-email').val(),
            'user_pass': $('#register-form-password').val(),
            'phone': $('#register-form-phone').val()
        };
        ngPost('register', formData, $scope, $http, $templateCache, 'errorReg');
    };
    $scope.forgotPasswordSubmit = function () {
        $('.forgotLoader').show();
        var formData = {
            'emailForgot': $('#emailForgot').val(),
        };
        ngPost('forgotPassword', formData, $scope, $http, $templateCache, 'errorReg');
    }

});

function ngPost(typeName, formData, $scope, $http, $templateCache, errorBlock, event) {
    $http({
        method: 'POST',
        url: domain + typeName,
        data: $.param(formData),
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        cache: $templateCache
    }).success(function (response) {
        $('.forgotLoader').hide();
        $('.loginLoader').hide();
        $('.registerLoader').hide();
        if (typeName == 'login' && response.msg == 'success_login') {
            window.location = base_url;
        } else {
            swal({
                html: true,
                title: response.msg
            });
        }
    });
}

function validation() {
    $('#registerForm').validate({
        rules: {
            fName: {minlength: 3, required: true},
            email: {required: true, email: true},
            phone: {required: true, minlength: 10, maxlength: 10, number: true},
            terms: {required: true},
            password: {
                required: true,
                minlength: 5
            },
            confirmPassword: {
                equalTo: "#register-form-password",
            }

        },
        messages: {fname: "Minimum length should be 3",
            email: "Not a valid Email Id",
            phone: "Enter a valid mobile number",
            terms: "Kindly accept terms and conditions",
            confirmPassword: {equalTo: 'Password does not match'},
        }
    });
}
