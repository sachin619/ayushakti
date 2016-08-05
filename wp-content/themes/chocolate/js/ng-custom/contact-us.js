app.controller('contactUs', function ($http, $scope, $templateCache) {
    validation();
    $scope.contactUsSubmit = function () {
        if (!$('#contactUs').valid()) {
            return false;
        }
        $('.contactUsLoader').show();
        var formData = {
            'fname': $('.contactFname').val(),
            'phone': $('.contactPhone').val(),
            'email': $('.contactEmail').val(),
            'message': $('.contactMessage').val()
        };
        ngPostContactUs('contactUs', formData, $scope, $http, $templateCache, 'errorReg');
    }
});

function ngPostContactUs(typeName, formData, $scope, $http, $templateCache, errorBlock, event) {
    $http({
        method: 'POST',
        url: domain + typeName,
        data: $.param(formData),
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        cache: $templateCache
    }).success(function (response) {
        $('.contactUsLoader').hide();
        swal({
            html: true,
            title: response.msg
        });

    });
}

function validation() {
    $('#contactUs').validate({
        rules: {
            fname: {minlength: 3, required: true},
            email: {required: true, email: true},
            phone: {minlength: 10, maxlength: 10, number: true},
            message: {required: true, minlength: 10}

        },
        messages: {fname: "Minimum length should be 3",
            email: "Not a valid Email Id",
            phone: "Enter a valid mobile number",
            message: "Minimum length should be 10"
        }
    });
}
