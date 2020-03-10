<?php
/**
 * Plugin Name: WP Tinkerwell
 * Description: Tinkerwell integration allowing to log anything using Tinkerwell.app
 * Version:     0.1
 * Author:      hwk
 * Author URI:  https://hwk.fr
 * 
 * 
 * Usage example:
 * Add the following code anywhere in WordPress: tinkerwell($my_var, $my_var_2, my_function());
 * Add the following code in Tinkerwell to display logs: do_action('tinkerwell');
 *
 * Note: tinkerwell() accepts unlimited arguments and will only print during Tinkerwell preview
 */
function tinkerwell(){

    $is_tinkerwell = false;

    // Check if request is served by Tinkerwell
    if(isset($_SERVER['PHP_SELF']) && stripos($_SERVER['PHP_SELF'], 'tinker.phar') !== false)
        $is_tinkerwell = true;
    
    // Bail early
    if(!$is_tinkerwell)
        return;

    // vars
    $args = func_get_args();

    // loop
    foreach($args as $i => $arg){

        // array | object
        if(is_array($arg) || is_object($arg)){
            
            $arg = print_r($arg, true);
        // bool
        }elseif(is_bool($arg)){
            
            $arg = 'bool(' . ( $arg ? 'true' : 'false' ) . ')';
            
        }

        // update
        $args[$i] = $arg;

    }

    // log
    add_action('tinkerwell', function() use($args){

        print_r(implode(' ', $args));
        echo "\n";

    });

}