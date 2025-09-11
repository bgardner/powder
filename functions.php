<?php
/**
 * Functions for the Powder WordPress theme.
 *
 * @package	Powder
 * @author	Brian Gardner
 * @license	GNU General Public License v3
 * @link	https://powder.design/
 */

/**
 * Auto-load PHP files.
 */
foreach ( glob( __DIR__ . '/inc/*.php' ) as $file ) {
	require_once $file;
}
