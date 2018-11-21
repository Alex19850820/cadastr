<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/***
  * Верстка шорткода
  * весь контент лежит в переменной $atts
 *@var $atts array
 *
 **/

?>
<!-- CTA Thin-->
<section class="section section-md bg-primary-darker text-center">
	<div class="container">
		<div class="box-cta-1">
			<h3>
				<?=$atts['h2']?>
				<span class="font-weight-bold">
					<?=$atts['h2_second']?>
				</span>
			</h3>
			<a class="button button-lg button-primary button-winona" href="#make-appointment" data-toggle="modal">
				<?=$atts['href_text']?>
			</a>
		</div>
	</div>
</section>
