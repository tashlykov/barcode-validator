<?php
	/**
	 * @author Ivan Melgrati
	 * @copyright 2018
	 */
	require_once ('../src/barcode-validator.php');

	$code = '490154203237518';
	echo 'Is IMEI code "'.$code.'" valid? '. (BarcodeValidator::IsValidIMEI($code) ? 'true' : 'false'). '<br>';
	
	$code = '9780596100674';
	echo 'Is ISBN "'.$code.'" valid? '. (BarcodeValidator::IsValidISBN($code, 13) ? 'true' : 'false'). '<br>';
?>