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
<!-- Services-->
<section class="section section-lg text-center" id="services">
	<div class="container">
		<h3 class="wow-outer">
			<span class="wow slideInUp"><?=$atts['h3']?></span>
		</h3>
		<div class="row row-50 row-xxl-70 offset-top-2">
			<?php foreach ($atts['box'] as $box):?>
				<div class="col-sm-6 col-md-4 col-lg-3">
					<!-- Box Light-->
					<article class="box-light">
						<div class="box-light-icon services__img">
							<img src="<?=$box['ico']['url']?>">
						</div>
						<h4 class="box-light-title">
							<?=$box['h4']?>
						</h4>
						<p><?=$box['text']?></p>
					</article>
				</div>
			<?php endforeach;?>
		</div>
	</div>
</section>