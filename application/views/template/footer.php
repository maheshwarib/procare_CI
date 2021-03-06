<section class="map-section">
  <div class="map-outer">
   <div id="map" style="width:100%;height:400px;" ></div>

    <div class="container">
      <div class="outer-container">
        <div class="info-container">
          <address>
               <h4>our contact</h4>
               <div class="info"><i aria-hidden="true" class="fa fa-map-marker"></i>
                 <p>Procare Accounting Solutions<br> #11/2, 1st Cross, 1st Main <br>Mahalakshmipuram,<br> bengaluru-560086</p>
               </div><br>
               <div class="info"><i aria-hidden="true" class="fa fa-phone"></i>
                 <p>080-23101039</p>
               </div><br>
               <div class="info"><i aria-hidden="true" class="fa fa-envelope-o"></i>
                 <p>contact@procaresolutions.co.in</p>
               </div>
             </address>
        </div>
      </div>
    </div>
  </div>
</section>

	<footer class="footer">
		<div class="thm-container">
			<div class="row">
				<div class="col-md-4">
					<div class="footer-widget about-widget">
						<a href="#"><img src="assets/images/icon/logo4.png" alt="Awesome Image"></a>
						<p>Procare accounting solutions gives services related to finance. we teach you to manage your finance</p>
						<div class="tel-box">
							<div class="icon-box"><i class="fa fa-phone"></i></div>
							<div class="text-box">
								<h4>080-23101039</h4>
								<p>contact@procaresolutions.co.in</p>
							</div>
						</div>
						<ul class="social list-inline">
							<li><a href="#"><i class="fa fa-tumblr"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-skype"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-5">
					<div class="row">
						<div class="col-lg-6 col-sm-12">
							<div class="footer-widget links-widget">
								<div class="title">
									<h2>Our Services</h2>
									<div class="decor-line"></div>
								</div>
								<ul>
									<li><a href="#">Investment Planning</a></li>
									<li><a href="#">Retairment Planning</a></li>
									<li><a href="#">Mutial Funds</a></li>
									<li><a href="#">Saving & Investments</a></li>
									<li><a href="#">Tax Advisory Service</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6 col-sm-12">
							<div class="title">
								<h2>Our Services</h2>
								<div class="decor-line"></div>
							</div>
							<ul class="twitter-feed">
								<li><a href="#"><i class="fa fa-twitter"></i><span class="color-light-grn">@ProcareSolutions,</span> Procare Accounting Solutions</a></li>
								<li><a href="#"><i class="fa fa-facebook"></i><span class="color-light-grn">@ProcareSolutions,</span> Procare Accounting Solutions</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget subscribe-widget">
						<div class="title">
							<h2>Newsletter</h2>
							<div class="decor-line"></div>
						</div>
						<ul class="flickr-img">
							<li>
								<a href="#"><img src="assets/images/flickr-img-1.jpg"></a>
							</li>
							<li>
								<a href="#"><img src="assets/images/flickr-img-2.jpg"></a>
							</li>
							<li>
								<a href="#"><img src="assets/images/flickr-img-3.jpg"></a>
							</li>
							<li>
								<a href="#"><img src="assets/images/flickr-img-4.jpg"></a>
							</li>
							<li>
								<a href="#"><img src="assets/images/flickr-img-5.jpg"></a>
							</li>
							<li>
								<a href="#"><img src="assets/images/flickr-img-6.jpg"></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<section class="footer-bottom">
		<div class="thm-container clearfix">
			<div class="pull-left">
				<p>Copyright ProCare Accounting Solutions 2018. All rights reserved. </p>
			</div>
			<div class="pull-right">
				<p>Created by: ProcareSolutions</p>
			</div>
		</div>
	</section>

  		<script>
  		function myMap() {
  		  var mapCanvas = document.getElementById("map");
  		  var myCenter = new google.maps.LatLng( 13.005836,  77.547861);
  		  var mapOptions = {center: myCenter, zoom: 16};
  		  var map = new google.maps.Map(mapCanvas,mapOptions);
  		  var marker = new google.maps.Marker({
  		    position: myCenter,
  		    animation: google.maps.Animation.BOUNCE
  		  });
  		  marker.setMap(map);
  		}
  		</script>

  	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkD7-j7G2ZxH0n_Y_WR7o7d-Uthu2MDAo&callback=myMap"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
