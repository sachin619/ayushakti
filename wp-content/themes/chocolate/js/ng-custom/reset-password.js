app.controller('forgotPasswordCtrl', function ($scope, $http, $templateCache) {

    getUrlParameter();
    $scope.resetPassword = function () {
        $('#forgotPassword').validate({
            rules: {
                password: {minlength: 3}
            },
            messages: {
                password: "Minimum lenght should be 3"
            }
        });
        if (!$('#forgotPassword').valid()) {
            return false;
        }
        $('.loader').show();
        var formInfo = {'newPassword': $scope.password, 'key': $.urlParam('key'), 'login': $.urlParam('login')};
        resetPasswordRequest('forgotPasswordReset', formInfo, $scope, $http, $templateCache, 'errorReg');
    };
});

function resetPasswordRequest(typeName, formData, $scope, $http, $templateCache, errorBlock, event) {
    $http({
        method: 'POST',
        url: domain + typeName,
        data: $.param(formData),
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        cache: $templateCache
    }).success(function (response) {
    
            swal({
                html: true,
                title: response.msg
            });
        
    });
}

function getUrlParameter() {
    $.urlParam = function (name) {
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        if (results == null) {
            return null;
        } else {
            return results[1] || 0;
        }
    };
}