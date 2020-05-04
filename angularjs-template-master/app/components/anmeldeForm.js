"use strict";

app.component("anmeldeForm",{
    templateUrl:"components/anmeldeForm.html",
    controller: "AnmeldeFormController",
    bindings: {}
});

app.controller("AnmeldeFormController",function ($log){
    $log.debug("AnmeldeFormController()");
})