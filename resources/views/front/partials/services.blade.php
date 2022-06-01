<section>
    <div class="welcome-intro">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="section-heading">
                        <h1>Welcome to Educa</h1>
                        <span>Twee Vice synth stumptown</span>
                        <img src="{{ asset("images/line-dec.png") }}" alt="">
                        <p>Twee Vice synth stumptown, distillery aesthetic slow-carb Intelligentsia bitters taxidermy<br>McSweeney's, flexitarian actually iPhone mlkshk brunch.</p>
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
                        <div class="search-form">
                            <input type="text" id="name" name="s" placeholder="Full Name" value="">
                            <input type="text" id="address" name="s" placeholder="E-mail Address" value="">
                            <div class="select">
                                <select name="to" id="campus">
                                    @foreach ($teachers as $teacher )
                                     <option value="{{ $teacher->id }}">{{ $teacher->nom }}</option>   
                                    @endforeach
                                </select>
                            </div>
                            <div class="select">
                                <select name="message" id="program">
                                    @foreach ($cours as $cour)
                                        <option value="{{ $cour->id }}">{!! $cour->titre !!}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="accent-button"> @if (Route::has('login'))
                            @auth
                                <a href="#">Submit Request</a>
                            @else
                            <a href="{{ route('login') }}">Log in</a> 
                            @endauth
                        @endif
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>