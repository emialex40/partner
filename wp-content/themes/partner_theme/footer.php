<div class="section why" id="anchor4">
		<div class="container">
			<div class="row">
				<h2>Контакти</h2>
				<div class="col-md-6">
					<img class="img_office" src="<?php bloginfo('template_url'); ?>/img/photo/IMG_3652_photo_office.jpg" alt="office">
				</div>
				<div class="col-md-6">
					<div class="cotacts">
					<div class="phone_icon">
					<img src="<?php bloginfo('template_url'); ?>/img/icons/phone.png" alt="phone">
					<p class="phone_numb">(067) 363 19 66<br>
						(095) 213 69 55
					</p>
					</div>
					<div class="email">
						<img src="<?php bloginfo('template_url'); ?>/img/icons/mail.png" alt="mail">
						<p class="mail_text"><a href="mailto:an_partner@ukr.net">an_partner@ukr.net</a> </p>
					</div>
					<div class="social">
						<a href="skype:an-partner?chat"><img src="<?php bloginfo('template_url'); ?>/img/icons/skype.png" alt="skype"></a>
						<a href="https://www.facebook.com/partner.rv/?fref=ts"><img src="<?php bloginfo('template_url'); ?>/img/icons/facebook.png" alt="facebook"></a>
						<a href="http://partner.asnu.net/"><img src="<?php bloginfo('template_url'); ?>/img/icons/asnu.png" alt="asnu"></a>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- map -->
	<div class="section_map"></div>
	</div>
</div>
	<!-- map end -->
<!-- footer -->
<footer>
	<div class="footer">
		<div class="container">
			<div class="row">
				<p>&copy;АН «ПАРТНЕР», 2003-<?php echo date("Y");?>. Усі права захищені</p>
			</div>
		</div>
	</div>

</footer>

<!-- footer end -->

<!-- additional components -->

<!-- on top button -->
<div id="top">
	<img src="<?php bloginfo('template_url'); ?>/img/icons/on_top.png" alt="on_top">
</div>
<!-- on top button end -->

<!-- pop up call -->
<!-- <div class="call">
	<img src="<?php bloginfo('template_url'); ?>/img/icons/call_phone.png" alt="call_phone">
</div> -->
<!-- pop up call end -->

<!-- popup window -->
<!--<div id="parent_popup"></div>

 <div id="popup">
<div class="title_win">
	<strong>Замовлення зворотнього дзвінка</strong>
	<i class="fa fa-times" aria-hidden="true"></i>
</div>
	<div class="form_wrapper">
		<form action="send.php" method="POST">
			<input type="text" placeholder="Ваше ім'я" name= "name">
			<input type="email" placeholder="E-mail" name= "email">
			<input type="tel" placeholder="Телефон" name="tel" pattern="+[0-9]{3}-[0-9]{3}-[0-9]{2}[0-9]{2}" name= "phone">
			<input class="button" type="submit" value="Відправити">
		</form>
	</div> -->
	
</div>
<!-- popup window end -->

<!-- additional components end -->

<script type="text/javascript" >
	var $page = $('html, body');
  $('a[href*="#"]').click(function() {
    event.preventDefault();
      $page.animate({
          scrollTop: $($.attr(this, 'href')).offset().top
      }, 1000);
    return false;
});
</script>

<?php wp_footer(); ?>
</body>
</html>