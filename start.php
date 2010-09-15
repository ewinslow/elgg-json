<?php
/**
 * Defines json_encode/json_decode functions using the Zend library
 * in case we have a version of php installed which doesn't support them
 */
require_once dirname(__FILE__).'/vendors/Zend/Json.php';

if (!function_exists('json_encode')) {
	function json_encode($value) {
		return Zend_Json::encode($value);
	}
}

if (!function_exists('json_decode')) {
	function json_decode($value) {
		return Zend_Json::decode($value);
	}
}
