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
<!-- Our Team-->
<section class="section section-lg text-center bg-gray-100" id="our-team">
	<div class="container">
		<h3 class="wow-outer"><span class="wow slideInUp"><?=$atts['h2']?></span></h3>
		<div class="row row-50">
			<?php $i=0; foreach ($atts['employees'] as $employee): $i++;?>
				<div class="col-sm-6 col-lg-3 wow-outer">
					<!-- Profile Classic-->
					<article class="profile-classic wow slideInLeft">
						<div class="profile-classic-main">
							<img class="profile-classic-image" src="<?=$employee['img']['url']?>" alt="" width="270" height="273"/>
							<div class="profile-classic-caption">
								<div class="group group-xs group-middle">
									<a class="team-link modal-btn-js" href="#more<?=$i?>" data-toggle="modal">Узнать подробнее</a>
								</div>
							</div>
						</div>
						<h5 class="profile-classic-title"><a href="#"><?=$employee['name']?></a></h5>
						<p class="profile-classic-position"><?=$employee['position']?></p>
					</article>
				</div>
			<?php endforeach;?>
		</div>
	</div>
</section>
<!-- Our Team-Modal-->
<?php $n=0; foreach ($atts['employees'] as $employee): $n++; ?>
	<div class="modal fade" id="more<?=$n?>">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h6><?=$employee['h6']?></h6>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
				</div>
				<div class="modal-body">
					<p><?=$employee['text_modal']?></p>
					<form id="send_employees" class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="<?php bloginfo('template_url')?>/includes/bat/rd-mailform.php">
						<div class="row row-10">
							<div class="col-md-12">
								<div class="form-wrap">
									<label class="form-label-outside" for="contact-name">Name</label>
									<input class="form-input" type="text" name="name" data-constraints="@Required">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-wrap">
									<label class="form-label-outside" for="contact-phone">Phone</label>
									<input class="form-input" type="text" name="phone" data-constraints="@PhoneNumber">
								</div>
							</div>
							<div class="col-12">
								<button class="button button-primary button-winona" type="submit" data-form="send_employees">
									Send
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php endforeach;?>
