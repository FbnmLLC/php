<?php
include_once( 'functions.php' );
$merchant_id  = '';
$amount       = '';
$callback_url = urlencode( 'http://domain.ltd' );
$response     = create( $merchant_id, $amount, $callback_url );
$result       = json_decode( $response );
if ( $result->status ) {
	header( 'Location:' . $result->payment_url );
} else {
	echo '<pre>';
	print_r( $result );
	echo '<pre>';
}
?>