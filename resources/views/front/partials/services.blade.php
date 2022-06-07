<section>
    <div class="welcome-intro">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="section-heading">
                        <h1>Welcome to Educa</h1>
                        <span>Twee Vice synth stumptown</span>
                        <img src="{{ asset('images/line-dec.png') }}" alt="">
                        <p>Twee Vice synth stumptown, distillery aesthetic slow-carb Intelligentsia bitters
                            taxidermy<br>McSweeney's, flexitarian actually iPhone mlkshk brunch.</p>
                    </div>
                    <div class="row">
                        @foreach ($services as $service)
                            <div class="col-md-6 col-sm-6">
                                <div class="service-item">
                                    <i class="{{ $service->icone }}"></i>
                                    <h4>{{ $service->titre }}</h4>
                                    <div class="line-dec"></div>
                                    <p>{{ $service->description }}</p>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
                <div class="col-md-4">
                    <div class="request-information">

                        <div class="widget-heading">
                            <h4>Request Information</h4>
                        </div>
                        @if (Route::has('login'))
                        @auth
                        <div class="search-form">
                            <form action="{{ route('demande.store') }}" method='POST'>
                                @csrf
                                <div class="search-form">
                                    @if (session()->has('message'))
                                        <div class='alert alert-success'
                                            style='display:flex !important; align-items:center !important; justify-content:center !important;'>
                                            {{ session()->get('message') }}
                                        </div>
                                    @endif
                                    @if (session()->has('error'))
                                        <div class='alert alert-danger'
                                            style='display:flex !important; align-items:center !important; justify-content:center !important;'>
                                            {{ session()->get('error') }}
                                        </div>
                                    @endif
                                    <input style='margin-bottom: 10px !important;' type="text" name="from" placeholder="Full Name"
                                        value="{{ Auth::user()->nom }}">
                                    <input type="text" id="address" name="email" placeholder="E-mail Address"
                                        value="{{ Auth::user()->email }}">
                                    <div class="select" style='margin-bottom: 10px !important;' >
                                        <select name="contenu" id="about">
                                            <option value="-1">Cours</option>
                                            @foreach ($cours as $cour)
                                                <option value="{{ $cour->titre }}">{{ $cour->titre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="select">
                                        <select name="to" id="to">
                                            <option value="-1">teachers</option>
                                            @foreach ($teachers as $teacher)
                                                
                                                <option value="{{ $teacher->nom }}">{{ $teacher->nom }}
                                                </option>
                                                
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="accent-button">
                                        <button type="submit" style='border: none !important; margin-top: 20px !important;'>Submit Request</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                            @else
                            <div class="accent-button">
                                <a href="{{ route('login') }}">Log in</a>
                            </div>
                            @endauth
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
