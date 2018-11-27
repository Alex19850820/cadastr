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
<!-- Advantages-->
<section class="section section-lg text-center" id="advantages">
	<div class="container">
		<h3><?=$atts['h2']?></h3>
		<div class="row row-50 row-xxl-70 offset-top-2">
			<?php $i=0; foreach ($atts['advantages'] as $advantage): $i++;?>
				<div class="col-sm-6 col-md-4 col-lg-3">
					<!-- Box Light-->
					<article class="box-light text-center">
						<div class="box-light-icon services__img"><img src="<?=$advantage['ico']['url']?>"></div>
						<h4 class="box-light-title"><?=$advantage['h4']?></h4>
						<p><?=$advantage['p']?></p>
						<div class="header__price">
							<span class="header__price-old"><?=$advantage['old_price']?></span>
							<span class="header__price-new"><?=$advantage['new_price']?>₽</span>
						</div>
						<?php if($i == 1):?>
							<button class="button button-primary button-winona button-small">
								<?=$atts['button']?>
							</button>
						<?php endif;?>
					</article>
				</div>
			<?php endforeach;?>
		</div>
	</div>
</section>
