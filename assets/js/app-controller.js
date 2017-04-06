(function() {
    'use strict';

    angular.module('casinoApp.modules.controller', [])
        .controller('CasinoCtrl', MainCtrl);

    CarsCtrl.$inject = ['$scope', 'CONFIG', 'CasinoService'];

    function CarsCtrl($scope, CONFIG, CasinoService) {
        var self = this;

    }
})();