<?php
/*
* Setting up your GP & GB Containers
*/
add_filter( 'generateblocks_defaults', function( $defaults ) {
    $defaults['container']['paddingTop'] = '100';
    $defaults['container']['paddingRight'] = '30';
    $defaults['container']['paddingBottom'] = '100';
    $defaults['container']['paddingLeft'] = '30';
    $defaults['container']['paddingTopTablet'] = '100';
    $defaults['container']['paddingRightTablet'] = '30';
    $defaults['container']['paddingBottomTablet'] = '100';
    $defaults['container']['paddingLeftTablet'] = '30';
    $defaults['container']['paddingTopMobile'] = '60';
    $defaults['container']['paddingRightMobile'] = '30';
    $defaults['container']['paddingBottomMobile'] = '60';
    $defaults['container']['paddingLeftMobile'] = '30';

    return $defaults;
} );