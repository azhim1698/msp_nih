<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<tr class="et-search-stats-critical-searches-row">
	<td><?php echo $i; ?></td>
	<td><?php echo esc_html( $row['phrase'] ); ?></td>
	<td><?php echo esc_html( $row['qty'] ); ?></td>
</tr>
