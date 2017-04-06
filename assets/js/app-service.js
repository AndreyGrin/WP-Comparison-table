(function() {
    'use strict';

    angular.module('casinoApp.modules.service', [])
        .factory('CasinoService', CasinoServiceCtrl);

    CasinoServiceCtrl.$inject = ['$http', 'CONFIG'];

    function CasinoServiceCtrl($http, CONFIG) {
        return {
            getEntries: function () {
                return $http.get(CONFIG.apiURL + 'casino/', {headers: {'Content-Type': 'application/json'}});
            }
        }
    }
})();