<?php

function WCT_entry_comparison( $atts ) {
    ob_start();
    ?>

    <div class="row" ng-app="casinoApp">
        <div class="col-md-12" ng-controller="CasinoCtrl as $ctrl">
            <div class="wct-sorting">
                Sorteeri
                <button ng-class="{active: $ctrl.sorting == 'popular'}" ng-click="$ctrl.changeSorting('popular')">
                    <span class="glyphicon glyphicon-heart"></span> POPULAARSED
                </button>
                <button ng-class="{active: $ctrl.sorting == 'bonus'}"ng-click="$ctrl.changeSorting('bonus')">
                    <span class="glyphicon glyphicon-euro"></span> BOONUS
                </button>
                <button ng-class="{active: $ctrl.sorting == 'spins'}"ng-click="$ctrl.changeSorting('spins')">
                    <span class="glyphicon glyphicon-cd"></span> TASUTA SPINNI
                </button>
                <button ng-class="{active: $ctrl.sorting == 'date'}"ng-click="$ctrl.changeSorting('date')">
                    <span class="glyphicon glyphicon-time"></span> UUED KASIINOD
                </button>
            </div>

            <div class="wct-table" id="table">
                <div class="wct-header hidden-xs text-center">
                    <div class="col-sm-3">KASIINOD</div>
                    <div class="col-sm-3">BOONUS</div>
                    <div class="col-sm-3">EELISED</div>
                    <div class="col-sm-3">ÜLEVAADE</div>
                    <div class="clearfix"></div>
                </div>

                <div class="wct-preload" ng-if="$ctrl.casinos.length == 0" ng-cloak>
                    <div class="cssload-thecube">
                        <div class="cssload-cube cssload-c1"></div>
                        <div class="cssload-cube cssload-c2"></div>
                        <div class="cssload-cube cssload-c4"></div>
                        <div class="cssload-cube cssload-c3"></div>
                    </div>
                </div>

                <div ng-if="$ctrl.casinos.length" ng-cloak>
                    <div class="wct-row"
                         ng-class="{ 'last-child': $index == $ctrl.rowsLimit - 1 }"
                         ng-repeat="entry in $ctrl.casinos | orderBy: $ctrl.sorting :$ctrl.reverseOrdering | limitTo: $ctrl.rowsLimit track by $index">
                        <div class="row">
                            <div class="col-sm-3 col-xs-6 row-logo">
                                <a ng-href="{{entry.link}}" target="_blank">
                                    <img ng-src="{{entry.logo}}" alt="" class="img-responsive" />
                                </a>
                            </div>

                            <div class="col-sm-3 col-xs-6 row-bonuses">
                                <span class="wct-bonus">€ {{entry.bonus}}</span> BOONUS <br>
                                <span class="wct-spins">{{entry.spins}}</span> TASUTA SPINNI
                            </div>

                            <div class="col-sm-3 hidden-xs">
                                <ul ng-if="entry.advantages">
                                    <li ng-repeat="item in entry.advantages"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> {{item}}</li>
                                </ul>
                            </div>

                            <div class="col-sm-3 col-xs-12">
                                <div class="wct-rating text-center col-xs-6 col-sm-12">
                                    <rating stars="entry.rating"></rating>
                                </div>
                                <div class="clearfix"></div>

                                <a ng-href="{{entry.link}}" target="_blank" class="button">Liitu {{entry.title}}</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="wct-show-more text-center" ng-if="$ctrl.sorting == 'popular'">
                        <button ng-click="$ctrl.showMore( $ctrl.casinos.length )">
                            <span ng-if="$ctrl.rowsLimit == 6">Näita rohkem <span class="glyphicon glyphicon-triangle-bottom"></span></span>
                            <span ng-if="$ctrl.rowsLimit > 6">Näita vähem <span class="glyphicon glyphicon-triangle-top"></span></span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>


	<?php 
    return ob_get_clean();
}
add_shortcode( 'comparison-table', 'WCT_entry_comparison' );