"use strict";

app.component("navBar",{
    templateUrl:"components/navBar.html",
    controller: "NavBarController",
    bindings: {}
});

app.controller("NavBarController",function ($log){
    $log.debug("NavBarController()");
})