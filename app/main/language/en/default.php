<?php
return [
    'site_title'     => '%s - %s',
    'site_copyright' => '&copy; %s %s - ',

    'text_free'        => 'Free',
    'text_equals'      => ' = ',
    'text_plus'        => '+ ',
    'text_minutes'     => 'minutes',
    'text_min'         => 'min',
    'text_my_account'  => 'My Account',
    'text_information' => 'Information',
    'text_follow_us'   => 'Follow us on:',

    'text_maintenance_enabled' => 'Maintenance Enabled',

    'menu_home'               => 'Home',
    'menu_menu'               => 'View Menu',
    'menu_reservation'        => 'Reservation',
    'menu_login'              => 'Login',
    'menu_logout'             => 'Logout',
    'menu_register'           => 'Register',
    'menu_my_account'         => 'My Account',
    'menu_account'            => 'Main',
    'menu_detail'             => 'Edit Details',
    'menu_address'            => 'Address Book',
    'menu_recent_order'       => 'Recent Orders',
    'menu_recent_reservation' => 'Recent Reservations',
    'menu_locations'          => 'Our Locations',
    'menu_contact'            => 'Contact Us',
    'menu_admin'              => 'Administrator',

    'alert_success'         => '%s successfully.',
    'alert_error'           => 'An error occurred, %s.',
    'alert_error_nothing'   => 'An error occurred, nothing %s.',
    'alert_error_try_again' => 'An error occurred, please try again.',
    'alert_warning_confirm' => 'This cannot be undone! Are you sure you want to do this?',

    'alert_no_search_query'       => 'Please type in a postcode/address to check if we can deliver to you.',
    'alert_info_outdated_browser' => 'You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.',

    'home' => [
        'text_heading'     => 'Welcome To TastyIgniter!',
        'text_step_one'    => 'Search',
        'text_step_two'    => 'Choose',
        'text_step_three'  => 'Pay by cash or card',
        'text_step_four'   => 'Enjoy',
        'text_step_search' => 'Find and select restaurant that deliver to you by entering your postcode or address.',
        'text_step_choose' => 'Browse hundreds of menus to find the food you like.',
        'text_step_pay'    => 'It\'s quick, easy and secure. Pay by Cash on Delivery or PayPal.',
        'text_step_enjoy'  => 'Food is prepared & delivered to your door step or ready for pick-up at the restaurant.',
    ],

    'local' => [
        'text_heading'                      => 'Restaurants',
        'text_tab_menu'                     => 'Menu',
        'text_tab_review'                   => 'Reviews',
        'text_tab_info'                     => 'Info',
        'text_tab_gallery'                  => 'Gallery',
        'text_local_heading'                => '%s - Restaurant',
        'text_hours'                        => 'Working Hours',
        'text_opening'                      => 'Opening',
        'text_opening_hours'                => 'Opening Hours',
        'text_delivery_hours'               => 'Delivery Hours',
        'text_collection_hours'             => 'Pick-up Hours',
        'text_opens_24_7'                   => '<strong>Opens:</strong> 24 hours a day & 7 days a week',
        'text_24h'                          => '24 hours a day',
        'text_is_opened'                    => '<span class="text-success">We are open</span>',
        'text_closed'                       => '<span class="text-close text-danger">CLOSED</span>',
        'text_is_closed'                    => '<span class="text-close text-danger">is CLOSED</span>',
        'text_starts'                       => '<b class="text-close text-danger">starts %s</b>',
        'text_delivery_time_info'           => 'Delivery %s',
        'text_collection_time_info'         => 'Pick-up %s',
        'text_opening_time'                 => '<b class="text-close text-danger">Opening %s</b>',
        'text_delivery_time'                => 'Delivery Time',
        'text_from'                         => ' from ',
        'text_on'                           => ' on ',
        'text_source'                       => 'Source Title',
        'text_only_delivery_is_available'   => 'Offers delivery only, pick-up is not available.',
        'text_only_collection_is_available' => 'Offers pick-up only, delivery is not available.',
        'text_delivery'                     => 'Delivery',
        'text_collection'                   => 'Pick-up',
        'text_delivery_only'                => 'Delivery only',
        'text_collection_only'              => 'Pick-up only',
        'text_offers_both_types'            => 'Offers both delivery and pick-up.',
        'text_offers_no_types'              => 'Does not offer delivery or pick-up.',
        'text_no_delivery_areas'            => 'No delivery area covered.',
        'text_asap'                         => '<b>ASAP</b>',
        'text_none'                         => 'None',
        'text_total_review'                 => '(%s)',
        'text_in_minutes'                   => 'in <b>%s</b> minutes',
        'text_after_opening'                => '<b>%s</b> minutes after we open',
        'text_same_as_opening_hours'        => 'Same as opening hours',
        'text_no_review'                    => 'There are no reviews yet.',
        'text_delivery_all_orders'          => 'on all orders',
        'text_delivery_above_total'         => '%s above %s',
        'text_delivery_below_total'         => 'not available below %s ',
        'text_miles'                        => 'Miles',
        'text_kilometers'                   => 'Kilometers',

        'text_filter'        => 'Note: Filter the menu by selecting a category on the left',
        'text_empty'         => 'No menu found in this category.',
        'text_no_category'   => 'No category found.',
        'text_empty_gallery' => 'No images to display.',
        'text_no_match'      => 'No items were found matching the selected category.',
        'text_hungry'        => 'Hungry ?',
        'text_free'          => 'Free',
        'text_category'      => 'Menu Category',
        'text_specials'      => 'Special Deals',
        'text_end_days'      => 'Ends %s in %s days',
        'text_end_today'     => 'Ends today',
        'text_end_elapsed'   => 'Ends in %s',
        'text_mealtime'      => '%s only (%s - %s)',
    ],

    'not_found' => [
        'layout_name'       => 'Layout [%s] not found',
        'page_label'        => 'Page not found',
        'page_message'      => 'The requested page cannot be found',
        'active_theme'      => 'Unable to load the active theme',
        'controller_action' => 'Action [%s] is not found in the controller [%s]',
        'layout'            => 'The layout [%s] is not found.',
        'component'         => 'The component [%s] is not found.',
        'partial'           => 'The partial [%s] is not found.',
        'content'           => 'The content [%s] is not found.',
        'method'            => 'The method [:method] is not found in [:name].',
        'ajax_handler'      => 'Ajax handler [%s] is not found.',
    ],
];