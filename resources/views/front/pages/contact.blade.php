@extends('front.layouts.app')
@section('content')
    <div class="page-heading news-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact Us</h1>
                    <span>Salvia next level crucifix pickled heirloom synth</span>
                    <div class="page-list">
                        <ul>
                            <li class="active"><a href="index.html">Home</a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="contact-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-content">
                        <div class="contact-item">
                            <i class="fa fa-map-marker"></i>
                            <h4>Address Info</h4>
                            <p>{{ $contact->adress }}</p>
                        </div>
                        <div class="contact-item">
                            <i class="fa fa-envelope-o"></i>
                            <h4>Email Info</h4>
                            <p>{{ $contact->email }}</p>
                        </div>
                        <div class="contact-item last-contact">
                            <i class="fa fa-phone"></i>
                            <h4>Phone Number</h4>
                            <p>{{ $contact->phone }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="location-contact">
                        <div class="widget-heading">
                            <h4>Location Map</h4>
                        </div>
                        <div class="content-map">
                            <div id="map">
                                <iframe width="100%" height="345px" id="gmap_canvas"
                                    src="https://maps.google.com/maps?q=<?= str_replace([' '], ['%20'], $contact->adress) ?>&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="message-form">
                        <div class="widget-heading">
                            <h4>Contact Us</h4>
                        </div>
                        <div class="message-content">
                            <form action="{{ Route('contactMail') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" id="name" name="nom" placeholder="Full Name" value="">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" id="address" name="email" placeholder="E-mail Address" value="">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea id="message" class="message" name="message" placeholder="Write message"></textarea>
                                    </div>
                                </div>
                                <div class="accent-button">
                                    <a><button type="submit">Submit Message</button></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
        </div>
    </section>
@endsection
