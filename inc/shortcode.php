<?php

function WCT_entry_comparison( $atts ) {
    ob_start();
    ?>

    <div class="row" ng-app="casinoApp">
        <div class="col-md-12" ng-controller="CasinoCtrl as $ctrl">
            <div class="comparison-table">

            </div>
        </div>
    </div>


	<?php 
    return ob_get_clean();
}
add_shortcode( 'comparison-table', 'WCT_entry_comparison' );