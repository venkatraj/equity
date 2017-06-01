<?php
require_once get_template_directory() . '/includes/options-config.php';
require_once get_template_directory() . '/admin/control-icon-picker.php';

	if( ! class_exists('Equity_Customizer_API_Wrapper') ) {
			require_once get_template_directory() . '/admin/class.equity-customizer-api-wrapper.php';
	}


Equity_Customizer_API_Wrapper::getInstance($options);
