(function() {
    'use strict';

    var casinoApp = angular.module('casinoApp', [
        'ngAnimate',
        'casinoApp.modules'
    ]);

    casinoApp.constant('CONFIG', {
        root: wct.root,
        apiURL: wct.root + 'wct/v1/'
    });

    casinoApp.run();

})();