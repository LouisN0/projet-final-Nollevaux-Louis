
@extends('front.layouts.app')
@section('content')
				<section class="classic-news">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<div class="classic-posts">

									@foreach ($posts as $post )
										
									
									<div class="classic-item">
										<a href="single-post.html"><img src="{{ asset('/images/'. $post->image) }}" alt=""></a>
										<ul>
											<li>Posted: <em>{{ $post->date }}</em></li>
											<li>By: <em>Admin</em></li>
											<li>Comments: <em>2</em></li>
										</ul>
										<a href="single-post.html"><h4>{{ $post->titre }}</h4></a>
										<p>{!! (Str::words($post->texte, '50')) !!}</p>
										<div class="buttons">
											<div class="accent-button">
												<a href="{{ route('singlepost', $post->id) }}">Continue Reading</a>
											</div>
											<div class="second-button">
												<a href="#">Share <i class="fa fa-share-alt"></i></a>
											</div>
										</div>
									</div>
@endforeach
									
									<div class="pagination-navigation">
										<div class="row">
											<div class="col-md-6">
												<div class="pagination">
													{!! $posts->links() !!}
												</div>
											</div>
											<div class="col-md-6">
												<div class="navigation">
													<ul>
														<li><a href="#"><i class="fa fa-arrow-left"></i></a></li>
														<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="side-bar">
									<div class="search-box">
										<input type="text" class="search" name="s" placeholder="Search..." value="">
									</div>
									<div class="categories">
										<div class="widget-heading">
											<h4>Categories</h4>
										</div>
										<ul>
										@foreach ($categories as $categorie )
											<li><a href="{{ url('/categorie/'. $categorie->id) }}"><i class="fa fa-angle-right"></i>{{ $categorie->nom }}</a></li>
										@endforeach
											
										</ul>
									</div>
									<div class="recent-news">
										<div class="widget-heading">
											<h4>Recent News</h4>
										</div>
										<ul>
											<li>
												<a href="single-post.html"><img src="http://placehold.it/70x70" alt=""></a>
												<a href="single-post.html"><h6>Visiting Artists: Giles Bailey</h6></a>
												<span>7 October 2015</span>
											</li>
											<li>
												<a href="single-post.html"><img src="http://placehold.it/70x70" alt=""></a>
												<a href="single-post.html"><h6>How Students use Rankings?</h6></a>
												<span>7 October 2015</span>
											</li>
											<li>
												<a href="single-post.html"><img src="http://placehold.it/70x70" alt=""></a>
												<a href="single-post.html"><h6>University Finder: Compare</h6></a>
												<span>7 October 2015</span>
											</li>
										</ul>
									</div>
									<div class="tags">
										<div class="widget-heading">
											<h4>Tags</h4>
										</div>
										<ul>
										@foreach ($tags as $tag )
											<li><a href="{{ url('/tag/'. $tag->id) }}">{{ $tag->nom }}</a></li>
										@endforeach
										</ul>
									</div>
									<div class="recent-tweets">
										<div class="widget-heading">
											<h4>Recents Tweets</h4>
										</div>
										<ul>
											<li>
												<i class="fa fa-twitter"></i>
												<p>Tote bag post-ironic messenger bag bespoke cray wolf moon key ready.</p>
												<a href="#">https://olark.recruiterbox.com/jobs/fk0h</a>
												<span>21 minutes ago.</span>
											</li>
											<li>
												<i class="fa fa-twitter"></i>
												<p>Tote bag post-ironic messenger bag bespoke cray wolf moon key ready.</p>
												<a href="#">https://olark.recruiterbox.com/jobs/fk0h</a>
												<span>21 minutes ago.</span>
											</li>
										</ul>
									</div>
									<div class="instagram-feeds">
										<div class="widget-heading">
											<h4>Instagram</h4>
										</div>
										<div class="instagram-items">
											<div class="instagram-item">
												<a href="#"><img src="http://placehold.it/90x80" alt=""></a>
											</div>
											<div class="instagram-item">
												<a href="#"><img src="http://placehold.it/90x80" alt=""></a>
											</div>
											<div class="instagram-item">
												<a href="#"><img src="http://placehold.it/90x80" alt=""></a>
											</div>
											<div class="instagram-item">
												<a href="#"><img src="http://placehold.it/90x80" alt=""></a>
											</div>
											<div class="instagram-item">
												<a href="#"><img src="http://placehold.it/90x80" alt=""></a>
											</div>
											<div class="instagram-item">
												<a href="#"><img src="http://placehold.it/90x80" alt=""></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
@endsection
			