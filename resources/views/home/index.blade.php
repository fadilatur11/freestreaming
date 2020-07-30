@include('layout.header')
<div class="hero common-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1>STREAMING TV, MOVIES, NEWS AND MORE</h1>
					<ul class="breadcumb">
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-single">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				
				<div class="flex-wrap-movielist mv-grid-fw">
                    @foreach ($local as $item)   
						<div class="movie-item-style-2 movie-item-style-1">
                            <img src="{{ asset('storage/'.$item['image']) }}" alt="">
                            <a  href="{{url('detail/'.$item['id'].'/'.$item['slug']) }}">
                                <div class="hvr-inner">
	            				Watch Now <i class="ion-android-arrow-dropright"></i>
                            </div>
                            </a>
							<div class="mv-item-infor">
								<h6><a href="{{url('detail/'.$item['id'].'/'.$item['slug']) }}">{{$item['name']}}</a></h6>
								
							</div>
						</div>					
                    @endforeach
                    @foreach ($movies as $moviesitem)   
                    <div class="movie-item-style-2 movie-item-style-1">
                        <img src="{{ asset('storage/'.$moviesitem['image']) }}" alt="">
                        <a  href="{{url('detail/'.$moviesitem['id'].'/'.$moviesitem['slug']) }}">
                             <div class="hvr-inner">
                             Watch Now <i class="ion-android-arrow-dropright"></i>
                        </div>
                        </a>
                        <div class="mv-item-infor">
                            <h6><a href="{{url('detail/'.$moviesitem['id'].'/'.$moviesitem['slug']) }}">{{$moviesitem['name']}}</a></h6>
                            
                        </div>
                    </div>					
                @endforeach

                @foreach ($luar as $luaritem)   
                <div class="movie-item-style-2 movie-item-style-1">
                    <img src="{{ asset('storage/'.$luaritem['image']) }}" alt="">
                    <a  href="{{url('detail/'.$luaritem['id'].'/'.$luaritem['slug']) }}">
                        <div class="hvr-inner">
                        Watch Now <i class="ion-android-arrow-dropright"></i>
                    </div>
                    </a>
                    <div class="mv-item-infor">
                        <h6><a href="{{url('detail/'.$luaritem['id'].'/'.$luaritem['slug']) }}">{{$luaritem['name']}}</a></h6>
                        
                    </div>
                </div>					
            @endforeach
				</div>		
				
			</div>
		</div>
	</div>
</div>
@include('layout.footer')