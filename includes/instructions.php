<?php

$formats = array(
	'n/j/Y H:i',
	'F j, Y g:i a',
	'Y-m-d',
	'n/j/y'
);

$colors = array(
	'#000000' => 'Black',
	'#FFFFFF' => 'White',
	'#FF0000' => 'Red',
	'#00FF00' => 'Green',
	'#0000FF' => 'Blue'
);

$title =  __( 'Countdown To My Special Day!', 'captain-countdown' );

?>

<div class='wrap'>

	<h2>
		Captain Countdown Clock <?php _e( 'Instructions', 'captain-countdown' ); ?>
	</h2>

	<p>
		<strong>
			<?php _e( 'Add the following shortcode to your page', 'captain-countdown' ); ?>:
		</strong>
	</p>

	<p class="captain-countdown-code">

		[captain_countdown datetime="<?php echo date( $formats[0], time() + 60*60*24 ); ?>" title="<?php echo $title; ?>"]

	</p>

	<p>
		<strong>
			<?php _e( 'Most date formats will work', 'captain-countdown' ); ?>:
		</strong>
	</p>

	<ul>
		<?php foreach ( $formats as $format ) { ?>
			<li>
				<?php echo date( $format, time() + 60*60*24 ); ?>
			</li>
		<?php } ?>
	</ul>

	<p>
		<strong>
			<?php _e( 'Date is always required. Time is optional.', 'captain-countdown' ); ?>
		</strong>
	</p>

	<h3>
		<?php _e( 'Other Shortcode Options', 'captain-countdown' ); ?>
	</h3>

	<p>
		<strong>
			<?php _e( 'Turn off seconds', 'captain-countdown' ); ?>:
		</strong>
	</p>

	<p class="captain-countdown-code">

		[captain_countdown datetime="<?php echo date( $formats[0], time() + 60*60*24 ); ?>" title="<?php echo $title; ?>" seconds="off"]

	</p>

	<p>
		<strong>
			<?php _e( 'Change the background color (default is white)', 'captain-countdown' ); ?>:
		</strong>
	</p>

	<p class="captain-countdown-code">

		[captain_countdown datetime="<?php echo date( $formats[0], time() + 60*60*24 ); ?>" title="<?php echo $title; ?>" background="#FF0000"]

	</p>

	<p>
		<strong>
			<?php _e( 'Background text color (default is black)', 'captain-countdown' ); ?>:
		</strong>
	</p>

	<p class="captain-countdown-code">

		[captain_countdown datetime="<?php echo date( $formats[0], time() + 60*60*24 ); ?>" title="<?php echo $title; ?>" text="#FFFFFF"]

	</p>

	<p>
		<strong>
			<?php _e( 'Background border color (default is gray)', 'captain-countdown' ); ?>:
		</strong>
	</p>

	<p class="captain-countdown-code">

		[captain_countdown datetime="<?php echo date( $formats[0], time() + 60*60*24 ); ?>" title="<?php echo $title; ?>" border="#000000"]

	</p>

	<p>
		<strong>
			<?php _e( 'You can use common color names instead of hex values as well', 'captain-countdown' ); ?>:
		</strong>
	</p>

	<ul>
		<?php foreach ( $colors as $hex => $name ) { ?>
			<li>
				<?php _e( 'Use', 'captain-countdown' ); ?>
				"<?php echo $hex; ?>"
				<?php _e( 'or', 'captain-countdown' ); ?>
				"<?php echo $name; ?>"
				<?php _e( 'for', 'captain-countdown' ); ?>
				<?php _e( $name, 'captain-countdown' ); ?>
			</li>
		<?php } ?>
		<li>
			<a href="http://www.w3schools.com/colors/colors_hex.asp" target="_blank"><?php _e( 'Click here', 'captain-countdown' ); ?></a>
			<?php _e( 'for more color options.', 'captain-countdown' ); ?>
		</li>
	</ul>

</div>