(function() {
    'use strict';

    var casinoApp = angular.module('casinoApp', [
        'ngAnimate',
        'casinoApp.modules'
    ]);

    casinoApp.constant('CONFIG', {
        root: config.root,
        apiURL: config.root + 'wct/v1/'
    });

    casinoApp.run();

})();