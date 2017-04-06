(function() {
    'use strict';

    angular.module('casinoApp.modules.component', [])
        .component('rating', {
            bindings: {
                stars: '<'
            },
            controllerAs: "$ctrl",
            controller: function () {},
            template: `<span ng-repeat="stars in $ctrl.stars track by $index"> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> </span>`
        });
})();