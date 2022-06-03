
@extends('front.layouts.app')
@section('content')
				<section class="events-grid">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="pre-featured">
									<div class="info-text">
										<h4>showing 1-9 of 40 courses</h4>
									</div>
									<div class="right-content">
										<div class="input-select">
		                                    <select name="mark" id="mark">
		                                        <option value="-1">Select Category</option>
		                                          <option>Free</option>
		                                          <option>Timing</option>
		                                          <option>Mostly</option>
		                                          <option>Latest</option>
		                                    </select>
		                                </div>
		                                <div class="input-select">
		                                    <select name="mark" id="mark">
		                                        <option value="-1">Sorted by</option>
		                                          <option>Price</option>
		                                          <option>Useless</option>
		                                          <option>Important</option>
		                                    </select>
		                                </div>
		                                <div class="grid-list">
		                                	<ul>
		                                		<li><a href="#"><i class="fa fa-list"></i></a></li>
		                                		<li><a href="#"><i class="fa fa-th-large"></i></a></li>
		                                	</ul>
		                                </div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							

						@foreach ($evenements as $evenement)
							
						
							<div class="col-md-4">
								<div class="event-item">
									<div class="thumb-holder">
										<img src="{{ asset("/images/". $evenement->image) }}" alt="">
										<div class="hover-content">
											<ul>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#">5 stars</a></li>
												<li><a href="#"><i class="fa fa-thumbs-up"></i>68</a></li>
											</ul>
										</div>
									</div>
									<div class="down-content">
										<ul>
											<li><i class="fa fa-map-marker"></i>{!! $evenement->lieu !!}</li>
											<li><i class="fa fa-clock-o"></i>{!! $evenement->date !!}</li>
										</ul>
										<div class="date">
											<p>{!! $evenement->start !!}</span></p>
										</div>
										<a href="{{ route('teacher.singleshow', $evenement->teacher->id) }}"><h4>{!! $evenement->titre !!}</h4></a>
										<p>{!! $evenement->description !!}</p>
									</div>
								</div>
							</div>

						@endforeach

							
						<div class="row">
							<div class="col-md-12">
								<div class="pagination-navigation">
									<div class="row">
										<div class="col-md-6 col-xs-6">
											<div class="pagination">
												{!! $evenements->links() !!}
											</div>
										</div>
										<div class="col-md-6 col-xs-6">
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
					</div>
				</section>
@endsection
			