<?php

function vcpl2015_alpha_preprocess_page(&$vars) {
	if (isset($vars['is_front'])) { 
		$vars['title']=""; 
		unset($vars['page']['content']['system_main']['default_message']);
	}
}
