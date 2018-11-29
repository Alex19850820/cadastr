<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cadastr
 */
$footer = fw_get_db_customizer_option();
?>
<!-- Page Footer-->
<footer class="section footer-standard bg-gray-700" id="contacts">
	<div class="footer-standard-main">
		<div class="container">
			<div class="row row-50">
				<div class="col-lg-4">
					<div class="inset-right-1">
						<h4><?=$footer['f_h4']?></h4>
						<p><?=$footer['f_desc']?></p>
					</div>
				</div>
				<div class="col-sm-6 col-md-5 col-lg-4">
					<div class="box-1">
						<h4><?=$footer['f_h4_2']?></h4>
						<ul class="list-sm">
							<li class="object-inline"><span class="icon icon-md mdi mdi-map-marker text-gray-700"></span><a class="link-default" href="#"><?=$footer['f_address']?></a></li>
							<li class="object-inline"><span class="icon icon-md mdi mdi-phone text-gray-700"></span><a class="link-default" href="tel:#"><?=$footer['f_phone']?></a></li>
							<li class="object-inline"><span class="icon icon-md mdi mdi-email text-gray-700"></span><a class="link-default" href="mailto:#"><?=$footer['f_mail']?></a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-7 col-lg-4">
					<h4><?=$footer['f_h4_3']?></h4>
					<p><?=$footer['f_desc_2']?></p>
					<!-- RD Mailform-->
					<form id="send_phone" class="rd-form rd-mailform form-inline" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="<?php bloginfo('template_url')?>/includes/bat/rd-mailform.php">
						<div class="form-wrap">
<!--<label class="form-label" for="subscribe-form-2-email">Phone</label>-->
							<input id="phone" value="" class="form-input" id="subscribe-form-2-email" type="tel" name="phone" data-constraints="@Email @Required" placeholder="Enter phone">
							
						</div>
						<div class="form-button">
							<button class="button button-primary button-icon button-icon-only button-winona" type="submit" aria-label="submit" id="send__form" data-form="send_phone"><span class="icon mdi mdi-email-outline"></span></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="footer-standard-aside"><a class="brand" href="/">
				<img src="<?php bloginfo('template_url')?>/assets/images/Logofuter.png" alt="Кадровый консалтинг" width="120" srcset="<?php bloginfo('template_url')?>/assets/images/logo-light-221x50.png 2x"/></a>
			<!-- Rights-->
			<p class="rights">
				<span>&copy;&nbsp;</span>
				<span class="copyright-year"></span>
				<span>&nbsp;</span>
				<span><?=$footer['f_all_rights']?></span>
				<span>&nbsp;</span>
				<br class="d-sm-none"/>
				<a href="#"><?=$footer['f_terms']?></a>
				<span> и</span>
				<span>&nbsp;</span>
				<a href="#"><?=$footer['f_privacy']?></a>
			</p>
		</div>
	</div>
</footer>
<div class="modal fade" id="join-us">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h6>Join Us</h6>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
			</div>
			<div class="modal-body">
				<form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="<?php bloginfo('template_url')?>/includes/bat/rd-mailform.php">
					<div class="row row-10">
						<div class="col-md-12">
							<div class="form-wrap">
								<label class="form-label-outside" for="contact-name">Name</label>
								<input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-wrap">
								<label class="form-label-outside" for="contact-phone">Phone</label>
								<input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@PhoneNumber">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-wrap">
								<label class="form-label-outside" for="contact-email">E-mail</label>
								<input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
							</div>
						</div>
						<div class="col-12">
							<div class="form-wrap">
								<label class="form-label-outside" for="contact-message">Your Message</label>
								<textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
							</div>
						</div>
						<div class="col-12">
							<button class="button button-primary button-winona" type="submit">Отправить</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="make-appointment">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h6>Заказать аудит</h6>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
			</div>
			<div class="modal-body">
				<form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="<?php bloginfo('template_url')?>/includes/bat/rd-mailform.php">
					<div class="row row-10">
<!--						<div class="col-md-12">-->
<!--							<div class="form-wrap">-->
<!--								<label class="form-label-outside" for="contact-name1">Name</label>-->
<!--								<input class="form-input" id="contact-name1" type="text" name="name" data-constraints="@Required">-->
<!--							</div>-->
<!--						</div>-->
						<div class="col-md-12">
							<div class="form-wrap">
								<label class="form-label-outside" for="contact-phone1">Телефон</label>
								<input class="form-input" id="contact-phone1" type="text" name="phone" data-constraints="@PhoneNumber">
							</div>
						</div>
<!--						<div class="col-md-12">-->
<!--							<div class="form-wrap">-->
<!--								<label class="form-label-outside" for="contact-2-email">E-mail</label>-->
<!--								<input class="form-input" id="contact-2-email" type="email" name="email" data-constraints="@Email @Required">-->
<!--							</div>-->
<!--						</div>-->
<!--						<div class="col-md-12">-->
<!--							<div class="form-wrap">-->
<!--								<label class="form-label-outside" for="contact-date">Date</label>-->
<!--								<input class="form-input" id="contact-date" type="text" name="date" data-constraints="@Required" data-time-picker="date">-->
<!--							</div>-->
<!--						</div>-->
						<div class="col-12">
							<button class="button button-primary button-winona" type="submit">Отправить</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
<div class="preloader">
	<div class="preloader-logo"><img src="<?php bloginfo('template_url')?>/assets/images/Logo1.png" alt="" width="161" height="39" srcset="<?php bloginfo('template_url')?>/assets/images/Logo1.png 2x"/>
	</div>
	<div class="preloader-body">
		<div id="loadingProgressG">
			<div class="loadingProgressG" id="loadingProgressG_1"></div>
		</div>
	</div>
</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->
<?php wp_footer(); ?>
</body>
</html>
