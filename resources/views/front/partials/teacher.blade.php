<section class="our-teachers">
    <div class="container">
        <div class="row">
            <div class="section-heading text-center">
                <h1>Our Teachers</h1>
                <img src="{{ asset("images/line-dec.png") }}" alt="">
                <p>High Life squid literally scenester fap Helvetica quinoa church-key</p>
            </div>
        </div>
        <div class="row">

            <div class="col-md-3 col-sm-6">
                <div class="teacher-item">
                    <div class="thumb-holder">
                        <a href="single-teacher.html"><img src="{{ asset("/images/". $teacher1[0]->photo) }}" alt=""></a>
                        <div class="hover-content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="down-content">
                        <a href="{{ route('teacher.singleshow', $teacher1[0]->id) }}"><h4>{{ $teacher1[0]->nom }}</h4></a>
                        <span>{{ $teacher1[0]->discipline }}</span>
                        <p><?= str_replace(["<em>"], [""],  (Str::words($teacher1[0]->description, '10'))) ?></p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="teacher-item">
                    <div class="thumb-holder">
                        <a href="single-teacher.html"><img src="{{ asset("/images/". $teacher2->photo) }}" alt=""></a>
                        <div class="hover-content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="down-content">
                        <a href="{{ route('teacher.singleshow', $teacher2->id) }}"><h4>{{ $teacher2->nom }}</h4></a>
                        <span>{{ $teacher2->discipline }}</span>
                        <p><?= str_replace(["<em>"], [""],  (Str::words($teacher2->description, '10'))) ?></p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="teacher-item">
                    <div class="thumb-holder">

                        <a href="single-teacher.html"><img src="{{ asset("/images/". $teacher3->photo) }}" alt=""></a>
                        <div class="hover-content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="down-content">
                        <a href="{{ route('teacher.singleshow', $teacher3->id) }}"><h4>{{ $teacher3->nom }}</h4></a>
                        <span>{{ $teacher3->discipline }}</span>
                        <p><?= str_replace(["<em>"], [""],  (Str::words($teacher3->description, '10'))) ?></p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="teacher-item">
                    <div class="thumb-holder">
                        <a href="single-teacher.html"><img src="{{ asset("/images/". $teacher4[0]->photo) }}" alt=""></a>
                        <div class="hover-content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="down-content">
                        <a href="{{ route('teacher.singleshow', $teacher4[0]->id) }}"><h4>{{ $teacher4[0]->nom }}</h4></a>
                        <span>{{ $teacher4[0]->discipline }}</span>
                        <p><?= str_replace(["<em>"], [""],  (Str::words($teacher4[0]->description, '10'))) ?></p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>