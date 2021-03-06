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
<!-- Testimonials-->
<section class="section section-lg text-center" id="testimonials">
	<div class="container">
		<h3><?=$atts['h2']?></h3>
		<div class="slick-widget-testimonials wow fadeIn">
			<div class="slick-slider carousel-child" id="child-carousel" data-for=".carousel-parent" data-arrows="true" data-loop="true" data-dots="false" data-swipe="true" data-items="1" data-sm-items="3" data-md-items="5" data-lg-items="5" data-xl-items="5" data-center-mode="true" data-slide-to-scroll="1">
				<?php $n=0; foreach ($atts['feedback'] as $feedback): $n++;?>
					<div class="item wow-outer">
						<a class="js-preview-open" href="#slick-img<?=$n?>">
							<img class="wow slideInLeft" src="<?=$feedback['img']['url']?>" alt="" width="96" height="96"/>
						</a>
					</div>
				<?php endforeach;?>
			</div>
			<!-- Slick Carousel-->
			<div class="slick-slider carousel-parent" data-arrows="false" data-loop="true" data-dots="false" data-swipe="false" data-items="1" data-fade="true" data-child="#child-carousel" data-for="#child-carousel">
				<?php foreach ($atts['feedback'] as $feedback):?>
					<div class="item">
					<!-- Quote Light 1-->
					<blockquote class="quote-light">
						<cite class="quote-light-cite"><?=$feedback['name']?></cite>
						<p class="quote-light-caption"><?=$feedback['position']?></p>
						<svg class="quote-light-mark" x="0px" y="0px" width="35px" height="25px" viewbox="0 0 35 25">
							<path d="M27.461,10.206h7.5v15h-15v-15L25,0.127h7.5L27.461,10.206z M7.539,10.206h7.5v15h-15v-15L4.961,0.127h7.5                L7.539,10.206z"></path>
						</svg>
						<div class="quote-light-text">
							<p><?=$feedback['desc']?></p>
						</div>
						<div class="quote-light-footer"><img class="quote-light-image" src="<?php bloginfo('template_url')?>/assets/images/logo-the-oldbrand-83x64.png" alt="" width="83" height="64"/>
						</div>
					</blockquote>
				</div>
				<?php endforeach;?>
<!--				<div class="item">-->
<!--					<!-- Quote Light 2-->
<!--					<blockquote class="quote-light">-->
<!--						<cite class="quote-light-cite">Harold Barnett</cite>-->
<!--						<p class="quote-light-caption">CFO at Havana Cabana</p>-->
<!--						<svg class="quote-light-mark" x="0px" y="0px" width="35px" height="25px" viewbox="0 0 35 25">-->
<!--							<path d="M27.461,10.206h7.5v15h-15v-15L25,0.127h7.5L27.461,10.206z M7.539,10.206h7.5v15h-15v-15L4.961,0.127h7.5                L7.539,10.206z"></path>-->
<!--						</svg>-->
<!--						<div class="quote-light-text">-->
<!--							<p>Management Company is the only agency that provides high quality online marketing and promotion services. The members of their team are real professionals in what they do.</p>-->
<!--						</div>-->
<!--						<div class="quote-light-footer"><img class="quote-light-image" src="images/logo-havana-kabana-96x64.png" alt="" width="96" height="64"/>-->
<!--						</div>-->
<!--					</blockquote>-->
<!--				</div>-->
<!--				<div class="item">-->
<!--					<!-- Quote Light 3-->
<!--					<blockquote class="quote-light">-->
<!--						<cite class="quote-light-cite">Albert Webb</cite>-->
<!--						<p class="quote-light-caption">Manager at Majestic</p>-->
<!--						<svg class="quote-light-mark" x="0px" y="0px" width="35px" height="25px" viewbox="0 0 35 25">-->
<!--							<path d="M27.461,10.206h7.5v15h-15v-15L25,0.127h7.5L27.461,10.206z M7.539,10.206h7.5v15h-15v-15L4.961,0.127h7.5                L7.539,10.206z"></path>-->
<!--						</svg>-->
<!--						<div class="quote-light-text">-->
<!--							<p>I would just like to say thank you for your effective online marketing services, for your friendly and professional support and answers to my questions connected with my advertising campaign!</p>-->
<!--						</div>-->
<!--						<div class="quote-light-footer"><img class="quote-light-image" src="--><?php //bloginfo('template_url')?><!--/assets/images/logo-majestic-104x64.png" alt="" width="104" height="64"/>-->
<!--						</div>-->
<!--					</blockquote>-->
<!--				</div>-->
<!--				<div class="item">-->
<!--					<!-- Quote Light 4 -->
<!--					<blockquote class="quote-light">-->
<!--						<cite class="quote-light-cite">Samantha Lee</cite>-->
<!--						<p class="quote-light-caption">Sales Manager at Hillplan</p>-->
<!--						<svg class="quote-light-mark" x="0px" y="0px" width="35px" height="25px" viewbox="0 0 35 25">-->
<!--							<path d="M27.461,10.206h7.5v15h-15v-15L25,0.127h7.5L27.461,10.206z M7.539,10.206h7.5v15h-15v-15L4.961,0.127h7.5                L7.539,10.206z"></path>-->
<!--						</svg>-->
<!--						<div class="quote-light-text">-->
<!--							<p>If you want advertising and marketing that’s done right, and a truly dedicated team of professionals, you need to work with Management Company. They know the market and care about their clients.</p>-->
<!--						</div>-->
<!--						<div class="quote-light-footer"><img class="quote-light-image" src="--><?php //bloginfo('template_url')?><!--/assets/images/logo-hillplan-84x64.png" alt="" width="84" height="64"/>-->
<!--						</div>-->
<!--					</blockquote>-->
<!--				</div>-->
<!--				<div class="item">-->
<!--					<!-- Quote Light 5-->
<!--					<blockquote class="quote-light">-->
<!--						<cite class="quote-light-cite">Bill Warner</cite>-->
<!--						<p class="quote-light-caption">Sr. Manager at Brownie</p>-->
<!--						<svg class="quote-light-mark" x="0px" y="0px" width="35px" height="25px" viewbox="0 0 35 25">-->
<!--							<path d="M27.461,10.206h7.5v15h-15v-15L25,0.127h7.5L27.461,10.206z M7.539,10.206h7.5v15h-15v-15L4.961,0.127h7.5                L7.539,10.206z"></path>-->
<!--						</svg>-->
<!--						<div class="quote-light-text">-->
<!--							<p>Management Company created a well-planned, well-placed, and well-executed media campaign for us. They are real professionals when it comes to affordable and high-quality online marketing services.</p>-->
<!--						</div>-->
<!--						<div class="quote-light-footer"><img class="quote-light-image" src="--><?php //bloginfo('template_url')?><!--/assets/images/logo-brownie-103x61.png" alt="" width="103" height="61"/>-->
<!--						</div>-->
<!--					</blockquote>-->
<!--				</div>-->
<!--				<div class="item">-->
<!--					<!-- Quote Light 6-->
<!--					<blockquote class="quote-light">-->
<!--						<cite class="quote-light-cite">Albert Webb</cite>-->
<!--						<p class="quote-light-caption">Manager at Majestic</p>-->
<!--						<svg class="quote-light-mark" x="0px" y="0px" width="35px" height="25px" viewbox="0 0 35 25">-->
<!--							<path d="M27.461,10.206h7.5v15h-15v-15L25,0.127h7.5L27.461,10.206z M7.539,10.206h7.5v15h-15v-15L4.961,0.127h7.5                L7.539,10.206z"></path>-->
<!--						</svg>-->
<!--						<div class="quote-light-text">-->
<!--							<p>I would just like to say thank you for your effective online marketing services, for your friendly and professional support and answers to my questions connected with my advertising campaign!</p>-->
<!--						</div>-->
<!--						<div class="quote-light-footer"><img class="quote-light-image" src="--><?php //bloginfo('template_url')?><!--/assets/images/logo-majestic-104x64.png" alt="" width="104" height="64"/>-->
<!--						</div>-->
<!--					</blockquote>-->
<!--				</div>-->
			</div>
		</div>
	</div>
	<div>
		<?php $z=0; foreach ($atts['feedback'] as $item): $z++;?>
			<div class="img__preview" id="slick-img<?=$z?>">
				<div class="img__preview-wrap">
					<div class="img__preview-main-wrap">
						<button class="img__preview-close">
							<i class="fa fa-close text-normal"></i>
						</button>
						<img class="img__preview-main" src="<?=$item['img']['url']?>" alt="">
					</div>
				</div>
			</div>
		<?php endforeach;?>
	</div>
</section>
