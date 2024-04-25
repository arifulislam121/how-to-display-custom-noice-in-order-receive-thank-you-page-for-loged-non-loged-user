<?php 

// Add a custom notice to the WooCommerce thank you page for login and  non-logged-in users

function change_order_received_text() {
    // Check if the current user is not logged in
    if (!is_user_logged_in()) {
        // Display the custom notice
        //wc_add_notice('Custom notice for non-logged-in users. Your message goes here.', 'notice');
		echo "Congratulations! Your account has been successfully created";
    }else{
		echo "Thank you. Your order has been received.";
	}
}
//add_action('woocommerce_thankyou', 'custom_thankyou_notice_for_non_logged_in_users', 11, 1);
add_filter('woocommerce_thankyou_order_received_text', 'change_order_received_text', 10, 2 );


?>
