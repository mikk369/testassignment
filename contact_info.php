<?php
// Add custom text below the product title and above the price on single product pages
function add_custom_text_below_title() {
    if (is_product()) {
        echo '<p>For more information please contact us.</p>';
    }
}

// Set priority to 6 to place the custom text right after the title (priority 5) and before the price (priority 10)
add_action('woocommerce_single_product_summary', 'add_custom_text_below_title', 6);
?>
