<?php
/**
 * Defines json_encode/json_decode functions using the Zend library
 * in case we have a version of php installed which doesn't support them
 */
require_once 'lib/Zend/Json.php';

if (!is_callable('json_encode')) {
	function json_encode($value) {
		return Zend_Json::encode($value);
	}
}

if (!is_callable('json_decode')) {
	function json_decode($value, $type) {
		return Zend_Json::decode($value, $type);
	}
}
