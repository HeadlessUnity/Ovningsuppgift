<!DOCTYPE html>
<?php header('Content-type: text/plain; charset=utf-8'); ?>
<!DOCTYPE html>
<html lang="sv" ng-app="botDb">
    <head>
        <title>Övningsuppgift</title>
        <script
          src="https://code.jquery.com/jquery-1.12.4.min.js"
          integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
          crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.3/angular.js"</script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.3/angular-animate.min.js"</script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.3/angular-route.js"</script>
        <!-- Ladda Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
        integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"
        crossorigin="anonymous">
        <script src=
        "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
    </head>
    <body>
        <h2>Bot-Databasen</h2>
        <div  ng-controller="botController">

            <!-- Table-to-load-the-data Part
            <table class="table">
                <thead>
                    <tr>'id', 'regNr', 'datumTid','betalaBestrid',
                    'bestridText', 'belopp','plats'
                        <th>id</th>
                        <th>datumTid</th>
                        <th></th>
                        <th>Contact No</th>
                        <th>Position</th>
                        <th><button id="btn-add" class="btn btn-primary btn-xs" ng-click="toggle('add', 0)">Add New bot</button></th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="bot in bot">
                        <td>{{  bot.id }}</td>
                        <td>{{ bot.regNr }}</td>
                        <td>{{ bot.kod }}</td>
                        <td>{{ bot.contact_number }}</td>
                        <td>{{ bot.position }}</td>
                        <td>
                            <button class="btn btn-default btn-xs btn-detail" ng-click="toggle('edit', bot.id)">Edit</button>
                            <button class="btn btn-danger btn-xs btn-delete" ng-click="confirmDelete(bot.id)">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table> -->
            <!-- End of Table-to-load-the-data Part -->
            <!-- Modal (Pop up when detail button clicked) -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                      <!--
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="myModalLabel">{{form_title}}</h4>
                        </div>-->
                        <div class="modal-body">
                            <form regNr="frmbot" class="form-horizontal" novalidate="">

                                <div class="form-group error">
                                    <label for="inputkod3" class="col-sm-3 control-label">regNr</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control has-error" id="regNr" name="registreringsnummer" placeholder="ABC-123" value="{{regNr}}"
                                        ng-model="bot.regNr" ng-required="true">
                                        <span class="help-inline"
                                        ng-show="frmbot.regNr.$invalid && frmbot.regNr.$touched">Måste skriva in registreringsnumret</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputkod3" class="col-sm-3 control-label">kod</label>
                                    <div class="col-sm-9">
                                        <input type="kod" class="form-control" id="kod" name="bot-kod" placeholder="abcde12345" value="{{kod}}"
                                        ng-model="bot.kod" ng-required="true">
                                        <span class="help-inline"
                                        ng-show="frmbot.kod.$invalid && frmbot.kod.$touched">måste skriva in bot-kod</span>
                                    </div>
                                </div>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="btn-save" ng-click="save(modalstate, id)" ng-disabled="frmbot.$invalid">Sök</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- AngularJS Application Scripts -->
        <script src="<?= asset('app/app.js') ?>"></script>
        <script src="<?= asset('app/controllers/bot.js') ?>"></script>
    </body>
</html>
