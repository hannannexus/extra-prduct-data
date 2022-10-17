<?php
/**
 * Plugin Name: Extra Product Data
 * Plugin URI: #
 * Description: Display ACF Custom Field Data On Single produc page.
 * Author: Hannan
 * Author URI: #
 * Version: 1.0
 * 
 */

function display_custom_field(){

    global $post;

    $custom_size = get_field('size',$post->ID);
    $custom_color = get_field('color',$post->ID);

    if(isset($custom_size)){
    ?>
    <div class="product-size"> Product size: <?php echo $custom_size;?></div>
    <?php
    }
    if(isset($custom_color)){
     ?>
      <div class="product-color"> Product Color: <?php echo $custom_color;?></div>
     <?php
    }
    

}
 add_action('woocommerce_single_product_summary','display_custom_field');
