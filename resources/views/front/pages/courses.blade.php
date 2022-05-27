@extends('front.layouts.app')
@section('content')
				<section class="courses-grid">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="pre-featured">
									<div class="info-text">
										<h4>showing 1-9 of 40 courses</h4>
									</div>
									<div class="right-content">
										<div class="input-select">
		                                    <select name="category" id="category">
		                                        <option value="-1">Select Category</option>
		                                          <option>Free</option>
		                                          <option>Timing</option>
		                                          <option>Mostly</option>
		                                          <option>Latest</option>
		                                    </select>
		                                </div>
		                                <div class="input-select">
		                                    <select name="sorted" id="sorted">
		                                        <option value="-1">Sorted by</option>
		                                          <option>Price</option>
		                                          <option>Useless</option>
		                                          <option>Important</option>
		                                    </select>
		                                </div>
		                                
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							@foreach ($cours as $cour)
								
							<div class="col-md-4">
								<div class="item course-item">
									<a href="{{ route('cour.singleshow', $cour->id) }}"><img src="{{ asset("/images/". $cour->image) }}" alt=""></a>
									<div class="down-content">
										<img src="{{ asset("/images/". $cour->teacher->photo) }}" alt="">
										<h6>{{ $cour->teacher->nom }}</h6>
										@if ($cour->prix == "free" || $cour->prix == 0)
										<div class="price-yellow">
											<span>Free</span>
											<div class="base"></div>
										</div>
									@else
										<div class="price-red">
											<span>${{ $cour->prix }}</span>
											<div class="base"></div>
										</div>
									@endif
									<a href="{{ route('cour.singleshow', $cour->id) }}"><h4><?= str_replace(["<br>"], ["<br>"], $cour->titre) ?></h4></a>
									<p>
										{!! (Str::words($cour->description, '12')) !!}</p>
									<div class="text-button">
										<a href="{{ route('cour.singleshow', $cour->id) }}">view more<i class="fa fa-arrow-right"></i></a>
									</div>
									</div>
								</div>
							</div>

							@endforeach
							
							
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="pagination-navigation">
									<div class="row">
										<div class="col-md-6 col-xs-6">
											<div class="pagination">
												{!! $cours->links() !!}
											</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
@endsection
				