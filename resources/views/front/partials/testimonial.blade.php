<section class="testimonials-news">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="section-heading">
                    <h1>What Our Students Say</h1>
                    <img src="{{ asset("images/line-dec.png") }}" alt="">
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="owl-testimonials">
                            <div class="item">
                                <i class="fa fa-quote-right"></i>
                                <p>Stumptown polaroid skateboard single-origin coffee. Farm-to-table Vice authentic Truffaut put a bird on it, pug ethical tousled photo booth gluten-free cliche bicycle rights four dollar toast single-origin coffee taxidermy.</p>
                                <img src="{{ asset('/images/teacher1.jpg') }}" alt="">
                                <h4>Caroll m. davis</h4>
                                <span>Web Designer</span>
                            </div>
                            <div class="item">
                                <i class="fa fa-quote-right"></i>
                                <p>Stumptown polaroid skateboard single-origin coffee. Farm-to-table Vice authentic Truffaut put a bird on it, pug ethical tousled photo booth gluten-free cliche bicycle rights four dollar toast single-origin coffee taxidermy.</p>
                                <img src="{{ asset('/images/teacher2.jpg') }}" alt="">
                                <h4>Peter j. smith</h4>
                                <span>Web Designer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="section-heading university-news">
                    <h1>University News</h1>
                    <img src="{{ asset("images/line-dec.png") }}" alt="">
                </div>
                <div class="row">
                    <div class="col-md-12">
                    @foreach ($posts as $post )
                        <div class="news-item">
                            <a href="{{ route('singlepost', $post->id) }}"><img style="width: 40%" src="{{ asset('/images/'. $post->image) }}" alt=""></a>
                            <ul>
                                <li>{{ $post->date }}</li>
                                <li>By {{ $post->user->nom }}</li>
                                <li>{{ $post->comments->count() }} Comments</li>
                            </ul>
                            <a href="{{ route('singlepost', $post->id) }}"><h4>{{ $post->titre }}</h4></a>
                            <p>{!! (Str::words($post->texte, '12')) !!}</p>
                        </div>
                    @endforeach

                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>