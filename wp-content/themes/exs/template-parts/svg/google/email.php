<?php if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$args = ! empty( $args ) ? $args : array();
$style_string = ! empty( $args[0] ) ? $args[0] : '';
?>
<svg style="<?php echo esc_attr( $style_string ); ?>" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M172.31-180Q142-180 121-201q-21-21-21-51.31v-455.38Q100-738 121-759q21-21 51.31-21h615.38Q818-780 839-759q21 21 21 51.31v455.38Q860-222 839-201q-21 21-51.31 21H172.31ZM480-457.69l320-204.62-6.15-57.69L480-520 166.15-720 160-662.31l320 204.62Z"/></svg>