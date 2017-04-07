(function() {
    'use strict';

    angular.module('casinoApp.modules.controller', [])
        .controller('CasinoCtrl', CasinoCtrl);

    CasinoCtrl.$inject = ['$scope', '$document', 'CasinoService'];

    function CasinoCtrl($scope, $document, CasinoService) {
        var self = this;

        self.casinos = [];

        self.sorting = 'popular';

        self.rowsLimit = 6;

        self.reverseOrdering = false;

        CasinoService.getEntries().then(function( response ){
            self.casinos = response.data.casinos;
        });

        self.changeSorting = function ( sorting ) {
            self.sorting = sorting;
            self.reverseOrdering = ( sorting == 'popular' ) ? false : true;
            self.rowsLimit = 6;
        };

        self.showMore = function ( limit ) {
            if( self.rowsLimit == 6 ){
                self.rowsLimit = limit;
            } else {
                self.rowsLimit = 6;
                var someElement = angular.element(document.getElementById('table'));
                $document.scrollToElement(someElement, -60, 2000);
            }
        };
    }
})();