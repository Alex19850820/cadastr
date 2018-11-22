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
<!-- 4 Column Layout-->
<section class="section section-lg text-center">
	<div class="container">
		<h3><?=$atts['h2']?></h3>
		<p>
			<span class="text-width-1">
				<?=$atts['desc']?>
			</span>
		</p>
		<div class="pricing-group-modern wow-outer">
			<!-- Pricing Modern-->
			<?php  $n=0; foreach ($atts['price'] as $price): $n++;?>
				<article class="pricing-modern wow fadeInLeft">
					<ul class="pricing-modern-rating">
						<?php for($i=0; $i < $price['stars_count']; $i++):?>
							<li><i class="fa fa-star-o text-normal"></i></li>
						<?php endfor;?>
					</ul>
					<h5 class="pricing-modern-title"><a href="#"><?=$price['h2']?></a></h5>
					<table class="pricing-modern-table">
						<tr>
							<td><?=$price['employees']?></td>
							<td>Employees</td>
						</tr>
						<tr>
							<td><?=$price['month']?></td>
							<td>Month</td>
						</tr>
						<tr>
							<td><?=$price['minutes']?></td>
							<td>Minutes</td>
						</tr>
					</table>
					<p class="pricing-modern-price">
						<span class="pricing-modern-price-currency">$</span><?=$price['price']?></p>
					<?php if($n == 1):?>
						<a class="button button-primary button-winona" href="#">Order service</a>
					<?php endif;?>
				</article>
			<?php endforeach;?>
			<!-- Pricing Modern-->
<!--			<article class="pricing-modern wow fadeInLeft" data-wow-delay=".05s">-->
<!--				<ul class="pricing-modern-rating">-->
<!--					<li><i class="fa fa-star-o text-normal"></i></li>-->
<!--					<li><i class="fa fa-star-o text-normal"></i></li>-->
<!--				</ul>-->
<!--				<h5 class="pricing-modern-title"><a href="#">Medium Business</a></h5>-->
<!--				<table class="pricing-modern-table">-->
<!--					<tr>-->
<!--						<td>5</td>-->
<!--						<td>Employees</td>-->
<!--					</tr>-->
<!--					<tr>-->
<!--						<td>2</td>-->
<!--						<td>Months</td>-->
<!--					</tr>-->
<!--					<tr>-->
<!--						<td>2000</td>-->
<!--						<td>Minutes</td>-->
<!--					</tr>-->
<!--				</table>-->
<!--				<p class="pricing-modern-price"><span class="pricing-modern-price-currency">$</span>1299.00</p><a class="button button-primary button-winona" href="#">Order service</a>-->
<!--			</article>-->
<!--			<!-- Pricing Modern-->
<!--			<article class="pricing-modern wow fadeInLeft" data-wow-delay=".1s">-->
<!--				<ul class="pricing-modern-rating">-->
<!--					<li><i class="fa fa-star-o text-normal"></i></li>-->
<!--					<li><i class="fa fa-star-o text-normal"></i></li>-->
<!--					<li><i class="fa fa-star-o text-normal"></i></li>-->
<!--				</ul>-->
<!--				<h5 class="pricing-modern-title"><a href="#">Big Business</a></h5>-->
<!--				<table class="pricing-modern-table">-->
<!--					<tr>-->
<!--						<td>10</td>-->
<!--						<td>Employees</td>-->
<!--					</tr>-->
<!--					<tr>-->
<!--						<td>3</td>-->
<!--						<td>Months</td>-->
<!--					</tr>-->
<!--					<tr>-->
<!--						<td>4000</td>-->
<!--						<td>Minutes</td>-->
<!--					</tr>-->
<!--				</table>-->
<!--				<p class="pricing-modern-price"><span class="pricing-modern-price-currency">$</span>2369.00</p><a class="button button-primary button-winona" href="#">Order service</a>-->
<!--			</article>-->
<!--			<!-- Pricing Modern-->
<!--			<article class="pricing-modern wow fadeInLeft" data-wow-delay=".15s">-->
<!--				<ul class="pricing-modern-rating">-->
<!--					<li><i class="fa fa-star-o text-normal"></i></li>-->
<!--					<li><i class="fa fa-star-o text-normal"></i></li>-->
<!--					<li><i class="fa fa-star-o text-normal"></i></li>-->
<!--					<li><i class="fa fa-star-o text-normal"></i></li>-->
<!--				</ul>-->
<!--				<h5 class="pricing-modern-title"><a href="#">Corporation</a></h5>-->
<!--				<table class="pricing-modern-table">-->
<!--					<tr>-->
<!--						<td>20+</td>-->
<!--						<td>Employees</td>-->
<!--					</tr>-->
<!--					<tr>-->
<!--						<td>4</td>-->
<!--						<td>Months</td>-->
<!--					</tr>-->
<!--					<tr>-->
<!--						<td>8000+</td>-->
<!--						<td>Minutes</td>-->
<!--					</tr>-->
<!--				</table>-->
<!--				<p class="pricing-modern-price"><span class="pricing-modern-price-currency">$</span>6790.00</p><a class="button button-primary button-winona" href="#">Order service</a>-->
<!--			</article>-->
		</div>
	</div>
</section>
