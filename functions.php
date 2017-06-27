<?php
function create( $merchant_id, $amount, $callback_url ) {
	$ch = curl_init();
	curl_setopt( $ch, CURLOPT_URL, 'https://123pay.ir/api/v1/create/payment' );
	curl_setopt( $ch, CURLOPT_POSTFIELDS, "merchant_id=$merchant_id&amount=$amount&callback_url=$callback_url" );
	curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	$response = curl_exec( $ch );
	curl_close( $ch );

	return $response;
}

function verify( $merchant_id, $RefNum ) {
	$ch = curl_init();
	curl_setopt( $ch, CURLOPT_URL, 'https://123pay.ir/api/v1/verify/payment' );
	curl_setopt( $ch, CURLOPT_POSTFIELDS, "merchant_id=$merchant_id&RefNum=$RefNum" );
	curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	$response = curl_exec( $ch );
	curl_close( $ch );

	return $response;
}