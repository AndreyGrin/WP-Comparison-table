<?php

function WCT_entry_comparison( $atts ) {
    ob_start();
    ?>

    <div class="row" ng-app="casinoApp">
        <div class="col-md-12" ng-controller="CasinoCtrl as $ctrl">
            <div class="wct-sorting">

            </div>

            <div class="wct-table">
                <div class="wct-header hidden-xs">
                    <div class="col-sm-3">KASIINOD</div>
                    <div class="col-sm-3">BOONUS</div>
                    <div class="col-sm-3">EELISED</div>
                    <div class="col-sm-3">ÜLEVAADE</div>
                </div>

                {{$ctrl.casinos.length}}

                <div class="wct-preload" ng-if="$ctrl.casinos.length == 0">
                    Loading...
                </div>

                <div class="wct-row" ng-repeat="entry in $ctrl.casinos" ng-if="$ctrl.casinos.length">
                    <div class="col-sm-3 col-xs-6">
                        <img ng-src="{{entry.logo}}" alt="" class="img-responsive" />
                    </div>

                    <div class="col-sm-3 col-xs-6">
                        <span class="wct-bonus">€ {{entry.bonus}}</span> BOONUS<br>
                        <div class="wct-spins">{{entry.spins}} TASUTA SPINNI</div>
                    </div>

                    <div class="col-sm-3 hidden-xs">
                        <ul ng-if="entry.advantages">
                            <li ng-repeat="item in entry.advantages"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> {{item}}</li>
                        </ul>
                    </div>

                    <div class="col-sm-3">
                        <div class="wct-rating">
                            <rating stars="entry.rating"></rating>
                        </div>

                        <a ng-href="{{entry.link}}" target="_blank" class="button">Liitu {{entry.title}}</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>


	<?php 
    return ob_get_clean();
}
add_shortcode( 'comparison-table', 'WCT_entry_comparison' );