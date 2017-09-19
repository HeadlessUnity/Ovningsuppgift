app.controller('botController', function($scope, $http, API_URL) {
    //retrieve bot listing from API
    $http.get(API_URL + "bot")
            .success(function(response) {
                $scope.bot = response;
            });

    //show modal form
    $scope.toggle = function(modalstate, kod) {
        $scope.modalstate = modalstate;

        switch (modalstate) {
            case 'add':
                $scope.form_title = "Add New bot";
                break;
            case 'edit':
                $scope.form_title = "bot Detail";
                $scope.kod = kod;
                $http.get(API_URL + 'bot/' + kod)
                        .success(function(response) {
                            console.log(response);
                            $scope.bot = response;
                        });
                break;
            default:
                break;
        }
        console.log(kod);
        $('#myModal').modal('show');
    }

    //save new record / update existing record
    $scope.save = function(modalstate, kod) {
        var url = API_URL + "bot";

        //append bot kod to the URL if the form is in edit mode
        if (modalstate === 'edit'){
            url += "/" + kod;
        }

        $http({
            method: 'POST',
            url: url,
            data: $.param($scope.bot),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).success(function(response) {
            console.log(response);
            location.reload();
        }).error(function(response) {
            console.log(response);
            alert('This is embarassing. An error has occured. Please check the log for details');
        });
    }
/*
    //delete record
    $scope.confirmDelete = function(kod) {
        var isConfirmDelete = confirm('Are you sure you want this record?');
        if (isConfirmDelete) {
            $http({
                method: 'DELETE',
                url: API_URL + 'bot/' + kod
            }).
                    success(function(data) {
                        console.log(data);
                        location.reload();
                    }).
                    error(function(data) {
                        console.log(data);
                        alert('Unable to delete');
                    });
        } else {
            return false;
        }
    }*/
});
