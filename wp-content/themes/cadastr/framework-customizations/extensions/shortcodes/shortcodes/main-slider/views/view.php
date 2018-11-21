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
<!-- Slider-->
<section class="section section-overlap bg-gray-100">
	<div class="section-overlap-image" style="background-image: url(<?php bloginfo('template_url')?>/assets/images/screens-1-1046x720.jpg)"></div>
	<div class="section-overlap-content">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-5 col-xl-4">
					<div class="wow-outer">
						<h6 class="wow slideInDown"><?=$atts['h2']?></h6>
					</div>
				</div>
				<div class="col-md-8 col-lg-7">
					<h1 class="wow-outer">
						<span class="font-weight-light wow-outer">
							<span class="wow slideInUp">
								<?=$atts['h1_first']?>
							</span>
						</span>
						<span class="font-weight-bold wow-outer">
							<span class="wow slideInUp" data-wow-delay=".1s">
								<?=$atts['h1_second']?>
							</span>
						</span>
					</h1>
				</div>
				<div class="col-md-6 col-lg-5 col-xl-4 col-offset-1">
					<div class="wow-outer">
						<p class="wow slideInUp" data-wow-delay=".2s"><?=$atts['desc']?></p>
					</div>
					<div class="wow-outer button-outer">
						<a class="button button-lg button-primary button-winona wow slideInUp" href="#make-appointment" data-toggle="modal">
							<?=$atts['text_button']?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>