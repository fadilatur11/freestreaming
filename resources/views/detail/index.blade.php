@include('layout.header')
<div class="hero common-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1>{{ ucfirst($detail['name'])}}</h1>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- blog detail section-->
<div class="page-single">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="blog-detail-ct">
					@if ($detail['type'] == 2)
					<iframe src="{{$detail['url']}}" autostart="true" volume="100" class="videokotak" allowfullscreen></iframe>
					@else
					<video controls class="fitkotak"></video>
					@endif
					
					<div class="flex-it flex-ct">
						<p>
							Enjoy the show !!!
						</p>
						<img src="images/uploads/blog-detail2.jpg" alt="">
					</div>
					
					<!-- share link -->
					<div class="flex-it share-tag">
						<div class="social-link">
							<h4>Share it</h4>
							<a href="#"><i class="ion-social-facebook"></i></a>
							<a href="#"><i class="ion-social-twitter"></i></a>
							<a href="#"><i class="ion-social-googleplus"></i></a>
							<a href="#"><i class="ion-social-pinterest"></i></a>
							<a href="#"><i class="ion-social-linkedin"></i></a>
						</div>
						<input type="hidden" class="urldata" value="{{ base64_encode($detail['url']) }}">
						<div class="right-it">
							<h4>Tags</h4>
							<a href="#">Gray,</a>
							<a href="#">Film,</a>
							<a href="#">Poster</a>
						</div>
					</div>

				</div>
			</div>
			
		</div>
	</div>
</div>
<!-- end of  blog detail section-->
@include('layout.footer')
@if ($detail['type'] == 1)
<script src="{{asset('assets/js/jquerybase.js')}}"></script>
<script src="{{asset('assets/js/anonim.js')}}"></script>
@endif