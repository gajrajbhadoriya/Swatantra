@include('client/header');
	<!-- script-for-menu -->
	<!-- script-for-menu -->
		<script>
			$("span.menu").click(function(){
				$(" ul.navig").slideToggle("slow" , function(){
				});
			});
		</script>
	<!-- script-for-menu -->
				

	<!-- banner-starts -->
	<div class="banner-1">
		
	</div>
	<!--banner-end-->
<div class="contact">
		<div class="container">
			<div class="contact-top">
				<h3>Contact Us</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla. Sed cursus ante dapibus diam. Sed nisi. Nulla. </p>
			</div>	
			<div class="col-md-6 contact-lft">
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d25090.351787808224!2d-122.2569291!3d38.179845!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80850c726b66df5b%3A0xfaee3a3990d21c4c!2sAmerican+Canyon%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1413272890200"></iframe>
			 </div>
			<h4>Address</h4>
				<address>
					795 Folsom Ave, Suite 600<br>
					San Francisco, CA 94107<br>
					<abbr title="Phone">P :</abbr> (123) 456-7890
				</address>
			</div>	
			 <div class="col-md-6 contact-bottom">
				 <form>
					<input type="text" value="First Name" placeholder="" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'First Name';}">	
					<input type="text" value="Last Name" placeholder="" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Last Name';}">				
					<input type="text" value="Email Address" placeholder="" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Email Address';}">
					<textarea placeholder="" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>	
					<input type="submit" value="Submit">
				</form>	
			</div>
				<div class="clearfix"></div>		
		</div>
	</div>
	@include('client/footer');