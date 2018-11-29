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
<!-- Woman CTA-->
<section class="section section-xl bg-gray-700 bg-image bg-image-dark" style="background-image: url(<?=$atts['img']['url']?>);">
	<div class="container">
		<div class="row justify-content-sm-end">
			<div class="col-sm-9 col-md-7 col-lg-6">
				<div class="box-2">
					<div class="wow-outer">
						<div class="wow slideInUp">
							<h4><?=$atts['h4']?></h4>
							<h3 class="font-weight-bold"><?=$atts['h3']?></h3>
						</div>
					</div>
					<div class="wow-outer offset-top-4">
						<div class="wow slideInDown">
							<p><?=$atts['desc']?></p>
							<a class="button button-primary button-winona" href="#make-appointment" data-toggle="modal"><?=$atts['text_button']?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>