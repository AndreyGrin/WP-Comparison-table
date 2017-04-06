(function() {
    'use strict';

    angular.module('casinoApp.modules.controller', [])
        .controller('CasinoCtrl', CasinoCtrl);

    CasinoCtrl.$inject = ['$scope', 'CasinoService'];

    function CasinoCtrl($scope, CasinoService) {
        var self = this;

        self.casinos = [];

        console.log(self.casinos.length);

        CasinoService.getEntries().then(function( response ){
            self.casinos = response.data.casinos;
        });
    }
})();