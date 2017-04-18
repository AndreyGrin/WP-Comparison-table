(function() {
    'use strict';

    var casinoApp = angular.module('casinoApp', [
        'ngAnimate',
        'duScroll',
        'casinoApp.modules'
    ]);

    casinoApp.constant('CONFIG', {
        root: TBZ.root,
        apiURL: TBZ.root + 'TBZ/v1/'
    });

    casinoApp.run();

})();