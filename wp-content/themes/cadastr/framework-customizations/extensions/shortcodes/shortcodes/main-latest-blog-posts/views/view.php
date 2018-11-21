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
<!-- Latest Blog Posts-->
<section class="section section-lg bg-gray-100 text-center">
	<div class="container">
		<h3 class="wow-outer"><span class="wow slideInDown">Latest Blog Posts</span></h3>
		<div class="row row-50">
			<div class="col-sm-6 col-lg-4 wow-outer">
				<!-- Post Classic-->
				<article class="post-classic wow slideInLeft"><a class="post-classic-media" href="#"><img src="<?php bloginfo('template_url')?>/assets/images/sidebar-blog-1-370x264.jpg" alt="" width="370" height="264"/></a>
					<ul class="post-classic-meta">
						<li><a class="button-winona" href="#">News</a></li>
						<li>
							<time datetime="2018">Apr 21, 2018 at 12:05 pm</time>
						</li>
					</ul>
					<h4 class="post-classic-title"><a href="#">How to Create the Best Online Advertisement</a></h4>
				</article>
			</div>
			<div class="col-sm-6 col-lg-4 wow-outer">
				<!-- Post Classic-->
				<article class="post-classic wow slideInLeft" data-wow-delay=".05s"><a class="post-classic-media" href="#"><img src="<?php bloginfo('template_url')?>/assets/images/sidebar-blog-2-370x264.jpg" alt="" width="370" height="264"/></a>
					<ul class="post-classic-meta">
						<li><a class="button-winona" href="#">Advertising</a></li>
						<li>
							<time datetime="2018">Apr 21, 2018 at 12:05 pm</time>
						</li>
					</ul>
					<h4 class="post-classic-title"><a href="#">Creating and Managing an Advertising Campaign</a></h4>
				</article>
			</div>
			<div class="col-sm-6 col-lg-4 wow-outer">
				<!-- Post Classic-->
				<article class="post-classic wow slideInLeft" data-wow-delay=".1s"><a class="post-classic-media" href="#"><img src="<?php bloginfo('template_url')?>/assets/images/sidebar-blog-3-370x264.jpg" alt="" width="370" height="264"/></a>
					<ul class="post-classic-meta">
						<li><a class="button-winona" href="#">Tips</a></li>
						<li>
							<time datetime="2018">Apr 21, 2018 at 12:05 pm</time>
						</li>
					</ul>
					<h4 class="post-classic-title"><a href="#">How to Choose an Advertising Agency in the USA</a></h4>
				</article>
			</div>
		</div>
		<div class="wow-outer button-outer"><a class="button button-lg button-primary button-winona wow slideInUp" href="#">View all Blog posts</a></div>
	</div>
</section>
<section class="section">
	<section class="section google-map-container" data-styles="[{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#e9e9e9&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:29},{&quot;weight&quot;:0.2}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:18}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:21}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#dedede&quot;},{&quot;lightness&quot;:21}]},{&quot;elementType&quot;:&quot;labels.text.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:36},{&quot;color&quot;:&quot;#333333&quot;},{&quot;lightness&quot;:40}]},{&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;},{&quot;lightness&quot;:19}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:17},{&quot;weight&quot;:1.2}]}]" data-zoom="14" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45.">
		<div class="google-map"></div>
		<ul class="google-map-markers">
			<li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow" data-icon="<?php bloginfo('template_url')?>/assets/images/gmap_marker.svg" data-icon-active="<?php bloginfo('template_url')?>/assets/images/gmap_marker_active.svg"></li>
		</ul>
	</section>
</section>
