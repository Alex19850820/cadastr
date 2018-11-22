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
<!-- Logo-->
<section class="section section-sm bg-alabaster">
	<div class="container text-center">
		<div class="row">
			<?php foreach ($atts['img'] as $logo):?>
				<div class="col-sm-4 col-lg-2">
					<a href="#">
						<img src="<?=$logo['url']?>" alt="" width="170" height="75" class="link-image">
					</a>
				</div>
			<?php endforeach;?>
		</div>
	</div>
</section>
