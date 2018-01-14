<?php
    require 'controllers/front/footer.php';
?>


<!--Footer Section  -->

<footer class="footer">
<div class="footer-top">
	<div class="row">
		<div class="footer-col col-md-4 col-sm-6 text-left">
			<img src="<?php echo $baseUrl; ?>/assets/front_end/images/ThaiHerbal-logo-white.png" width="80" alt="">
			<p>&nbsp</p>
			<!-- <p>บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด</p>
			<p>องค์การเภสัชกรรม ซึ่งเป็นรัฐวิสาหกิจในการกำกับดูแล ของกระทรวงสาธารณสุขหลังจากที่ได้ประสบความสำเร็จในการผลิตยาแผนปัจจุบันมาแล้ว
				ได้ทำการวิจัยและพัฒนาสมุนไพรเพื่อใช้เป็นยาและผลิตภัณฑ์เสริมอาหาร อย่างต่อเนื่อง และขยายผลการวิจัย</p>
			<p>เลขที่ 130/149 หมู่ 3 ต.วังจุฬา อ.วังน้อย จ.พระนครศรีอยุธยา 13170</p>
			<p>เบอร์โทรศัพท์: 035-721445-7, 063-2049077-8 <br>โทรสาร: 035-721743</p>
			<p>อีเมล์: <a href="mailto:sale@thpnetwork.com">sale@thpnetwork.com</a></p> -->
			<?php echo $rs_footer['content_detail_'.$lang]; ?>
		</div>
		<div class="footer-col col-md-4 col-sm-6">
			<h5>Send Message</h5>
			<form action="#" method="POST">
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
					<input type="text" class="form-control" placeholder="Fullname" name="fullname" aria-describedby="basic-addon1">
				</div>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-send"></i></span>
					<input type="text" class="form-control" placeholder="Email Address" name="email" aria-describedby="basic-addon1">
				</div>
				<div class="input-group">
					<textarea class="form-control" id="exampleTextarea" rows="3" name="message" placeholder="Message"></textarea>
				</div>
				<div class="input-group text-left">
					<a href="#" class="btn btn-large">ส่งข้อความ &nbsp;&nbsp; ></a>
				</div>

			</form>
		</div>
		<div class="footer-col col-md-4">
			<div class="hidden-lg">
				<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FThaiHerbalProductsOfficial%2F&tabs=timeline&width=300&height=400&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=1349441945090988"
					width="300" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
			</div>
			<div class="visible-lg">
				<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FThaiHerbalProductsOfficial%2F&tabs=timeline&width=340&height=400&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=1349441945090988"
					width="340" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
			</div>
		</div>
	</div>

</div>
<!-- footer top -->
<div class="footer-bottom clearfix">
	<div class="col-md-6 text-left copyright">
		<p>Copyrights © <?php echo date('Y'); ?> All Right Reserved</p>
	</div>
	<div class="col-md-6 text-right menu">
		<ul>
			<li><a href="<?php echo $baseUrl.'/'.$lang; ?>">Home</a></li>
			<li><a href="<?php echo $baseUrl.'/'.$lang; ?>/about">About</a></li>
			<li><a href="<?php echo $baseUrl.'/'.$lang; ?>/news_event">News & Event</a></li>
			<li><a href="<?php echo $baseUrl.'/'.$lang; ?>/article">Article</a></li>
			<li><a href="<?php echo $baseUrl.'/'.$lang; ?>/career">Careers</a></li>
			<li><a href="<?php echo $baseUrl.'/'.$lang; ?>/contact">Contact</a></li>
	</div>
</div>
</footer>
<!-- footer -->