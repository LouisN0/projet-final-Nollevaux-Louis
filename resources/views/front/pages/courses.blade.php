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
								<div class="btn-group">
									<button class="btn btn-primary"><a style="color:white" href="{{ route('courses') }}">clear filter</a></button>
									<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									  Select Category <span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										@foreach ($categories as $categorie)
										<li><a href="{{ url('/categorie/' . $categorie->id) }}">{{ $categorie->nom }}</a></li>
									@endforeach
									</ul>
								  </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($cours as $cour)
                    <div class="col-md-4">
                        <div class="item course-item">
                            <a href="{{ route('cour.singleshow', $cour->id) }}"><img
                                    src="{{ asset('/images/' . $cour->image) }}" alt=""></a>
                            <div class="down-content">
                                <img src="{{ asset('/images/' . $cour->teacher->photo) }}" alt="">
                                <h6>{{ $cour->teacher->nom }}</h6>
                                @if ($cour->prix == 'free' || $cour->prix == 0)
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
                                <a href="{{ route('cour.singleshow', $cour->id) }}">
                                    <h4><?= str_replace(['<br>'], ['<br>'], $cour->titre) ?></h4>
                                </a>
                                <p>
                                    {!! Str::words($cour->description, '12') !!}</p>
                                <div class="text-button">
                                    <a href="{{ route('cour.singleshow', $cour->id) }}">view more<i
                                            class="fa fa-arrow-right"></i></a>
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
