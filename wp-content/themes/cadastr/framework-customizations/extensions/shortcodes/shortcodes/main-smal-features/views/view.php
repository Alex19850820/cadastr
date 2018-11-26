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
<!-- Small Features-->
<section class="section section-sm bg-gray-100 text-center">
	<div class="container">
		<div class="row row-50">
			<?php foreach ($atts['features'] as $feature):?>
				<div class="col-6 col-md-3">
					<!-- Counter Minimal-->
					<article class="counter-minimal">
						<div class="counter-minimal-icon icon-small"><img src="<?=$feature['ico']['url']?>"></div>
						<div class="counter-minimal-main">
							<div class="counter"><?=$feature['count']?></div>
						</div>
						<h5 class="counter-minimal-title"><?=$feature['h5']?></h5>
					</article>
				</div>
			<?php endforeach;?>
		</div>
	</div>
</section>