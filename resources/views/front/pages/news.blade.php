
@extends('front.layouts.app')
@section('content')
				<section class="classic-news">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<div class="classic-posts">

									@foreach ($posts as $post )
									@if ($post->status == 1)
									
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
									@endif
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
									
									<form action="{{ route('post.search') }}">
										@csrf
										<div class="search-box">
											<input type="text" class="search" name="search"  placeholder="Search..." value="">

										</div>
									</form>
									<div class="categories">
										<div class="widget-heading">
											<h4>Categories</h4>
										</div>
										<ul>
										@foreach ($categories as $categorie )
											<li><a href="{{ url('/categorie/post/'. $categorie->id) }}"><i class="fa fa-angle-right"></i>{{ $categorie->nom }}</a></li>
										@endforeach
											
										</ul>
									</div>
									
									<div class="tags">
										<div class="widget-heading">
											<h4>Tags</h4>
										</div>
										<ul>
										@foreach ($tags as $tag )
											<li><a href="{{ url('/tag/post/'. $tag->id) }}">{{ $tag->nom }}</a></li>
										@endforeach
										</ul>
									</div>
									
									
								</div>
							</div>
						</div>
					</div>
				</section>
@endsection
			