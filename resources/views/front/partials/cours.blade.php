<section class="popular-courses">
    <div class="container">
        <div class="row">
            <div class="section-heading text-center">
                <h1>Popular Courses</h1>
                <img src="{{ asset("images/line-dec.png") }}" alt="">
                <p>Twee Vice synth stumptown distillery aesthetic slow carb</p>
            </div>
        </div>
        <div class="row">
            <div id="owl-courses">

                @foreach ($cours as $cour )
                @if ($cour->status == 1)
                <div class="item course-item">
                    <a href="single-course.html"><img src="{{ asset("/images/". $cour->image) }}" alt="{{ $cour->image }}"></a>
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
                        <a href="single-course.html"><h4><?= str_replace(["<br>"], ["<br>"], $cour->titre) ?></h4></a>
                        <p>
                            {!! (Str::words($cour->description, '12')) !!}</p>
                        <div class="text-button">
                            <a href="{{ route('cour.singleshow', $cour->id) }}">view more<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
               
            </div>
        </div>
    </div>
</section>