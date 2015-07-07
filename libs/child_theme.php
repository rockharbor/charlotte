<?php
/**
 * RH Charlotte theme
 *
 * @package rockharbor
 * @subpackage charlotte
 */
class ChildTheme extends RockharborThemeBase {

/**
 * List of options for this theme
 *
 * @var array
 */
	protected $themeOptions = array(
		'slug' => 'charlotte',
		'short_name' => 'Charlotte',
		'supports' => array(
			'message',
			'staff',
			'curriculum'
		)
	);
}
