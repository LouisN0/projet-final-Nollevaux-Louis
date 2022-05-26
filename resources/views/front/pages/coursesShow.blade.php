@extends('front.layouts.app')
@section('content')
				<div class="page-heading">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h1>Single Course</h1>
								<span>Salvia next level crucifix pickled heirloom synth</span>
								<div class="page-list">
									<ul>
										<li class="active"><a href="{{ route('courses') }}">Home</a></li>
										<li><i class="fa fa-angle-right"></i></li>
										<li><a href="courses-grid.html">Single Course</a></li>
									</ul>
								</div>
							</div>	
						</div>
					</div>
				</div>

				<section class="single-course">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<div class="single-item">		
									<div class="row">		
										<div class="col-md-12">
											<div class="item course-item">
												<div class="up-content">
													<a href="single-course.html"><h4><?= str_replace(["<br>"], [""], $cour->titre) ?></h4></a>
													<p>Plaid you probably haven't heard of them fashion axe meditation</p>
													<img src="assets/images/course-author-1.jpg" alt="">
													<h6>Ernest Byrd</h6>
													<div class="price-red">
														<span>Free</span>
														<div id="base"></div>
													</div>
												</div>
												<div class="courses-slider">
													<ul class="slides">
													    <li data-thumb="{{ asset("/images/". $cour->slide->image1) }}">
													      <img src="{{ asset("/images/". $cour->slide->image1) }}" alt="" />
													    </li>
													    <li data-thumb="{{ asset("/images/". $cour->slide->image2) }}">
													      <img src="{{ asset("/images/". $cour->slide->image2) }}" alt="" />
													    </li>
													    <li data-thumb="{{ asset("/images/". $cour->slide->image3) }}">
													      <img src="{{ asset("/images/". $cour->slide->image3) }}" alt="" />
													    </li>
													    <li data-thumb="{{ asset("/images/". $cour->slide->image4) }}">
													      <img src="{{ asset("/images/". $cour->slide->image4) }}" alt="" />
													    </li>
													</ul>
												</div>
											</div>
											<div class="description">
												<h4>Description</h4>
												<p>{{ $cour->description }}</p>
											</div>
											<div class="topics">
												<h4>Topics Included</h4>
												<div class="row">
													<div class="col-md-4">
														<ul>
															<li><i class="fa fa-check"></i>Ennui pickled asymmetrical</li>
															<li><i class="fa fa-check"></i>Kitsch keffiyeh crucifix ennui</li>
															<li><i class="fa fa-check"></i>Quinoa dreamcatcher food</li>
															<li><i class="fa fa-check"></i>Truck skateboard selvage bear</li>
														</ul>
													</div>
													<div class="col-md-4">
														<ul>
															<li><i class="fa fa-check"></i>Fitsch keffiyeh crucifix ennui</li>
															<li><i class="fa fa-check"></i>Ennui pickled asymmetrical</li>
															<li><i class="fa fa-check"></i>Quinoa dreamcatcher food</li>
															<li><i class="fa fa-check"></i>Truck skateboard selvage bear</li>
														</ul>
													</div>												
													<div class="col-md-4">
														<ul>
															<li><i class="fa fa-check"></i>Ennui pickled asymmetrical</li>
															<li><i class="fa fa-check"></i>Truck skateboard selvage bear</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="accordions">
												<h4>Accordion</h4>
												<div class="accordion">
												    <div class="accordion-section">
												        <a class="accordion-section-title" href="#accordion-1"><span class="first-icon"><i class="fa fa-play-circle-o"></i></span><span>Short Courses:</span><h6><em>New Course</em>Master of Business Administration<span id="1" class="second-icon"><i class="fa fa-sort-desc"></i></span></h6></a>
												        <div id="accordion-1" class="accordion-section-content">
												            <p>Mauris interdum fringilla augue vitae tincidunt. Curabitur vitae tortor id eros euismod ultrices. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent nulla mi, rutrum ut feugiat at, vestibulum ut neque? Cras tincidunt enim vel aliquet facilisis.</p>
												        </div>
												    </div>
												    <div class="accordion-section">
												        <a class="accordion-section-title second-accordion-section-title" href="#accordion-2">	<span class="first-icon"><i class="fa fa-play-circle-o"></i></span><span>Post Graduated:</span><h6>Distance Learning MBA Business Management<span id="2" class="second-icon"><i class="fa fa-sort-desc"></i></span></h6></a>
												        <div id="accordion-2" class="accordion-section-content">
												            <p>Mauris interdum fringilla augue vitae tincidunt. Curabitur vitae tortor id eros euismod ultrices. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent nulla mi, rutrum ut feugiat at, vestibulum ut neque? Cras tincidunt enim vel aliquet facilisis.</p>
												        </div>
												    </div>
												    <div class="accordion-section">
												        <a class="accordion-section-title" href="#accordion-3">	<span class="first-icon"><i class="fa fa-play-circle-o"></i></span><span>CPD:</span><h6>Environmental Science BTEC (HND) Course<span id="3" class="second-icon"><i class="fa fa-sort-desc"></i></span></h6></a>
												        <div id="accordion-3" class="accordion-section-content">
												            <p>Mauris interdum fringilla augue vitae tincidunt. Curabitur vitae tortor id eros euismod ultrices. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent nulla mi, rutrum ut feugiat at, vestibulum ut neque? Cras tincidunt enim vel aliquet facilisis.</p>
												        </div>
												    </div>
												    <div class="accordion-section">
												        <a class="accordion-section-title second-accordion-section-title" href="#accordion-4"><span class="first-icon"><i class="fa fa-play-circle-o"></i></span><span>Post Graduated:</span><h6><em>
												        exam</em>Criminal Justice &amp; Criminology<span id="4" class="second-icon"><i class="fa fa-sort-desc"></i></span></h6></a>
												        <div id="accordion-4" class="accordion-section-content">
												            <p>Mauris interdum fringilla augue vitae tincidunt. Curabitur vitae tortor id eros euismod ultrices. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent nulla mi, rutrum ut feugiat at, vestibulum ut neque? Cras tincidunt enim vel aliquet facilisis.</p>
												        </div>
												    </div>
												    <div class="accordion-section">
												        <a class="accordion-section-title" href="#accordion-5">	<span class="first-icon"><i class="fa fa-play-circle-o"></i></span><span>Short Courses:</span><h6>Higher Level Teaching Assistant &amp; Child Psychology<span id="5" class="second-icon"><i class="fa fa-sort-desc"></i></span></h6></a>
												        <div id="accordion-5" class="accordion-section-content">
												            <p>Mauris interdum fringilla augue vitae tincidunt. Curabitur vitae tortor id eros euismod ultrices. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent nulla mi, rutrum ut feugiat at, vestibulum ut neque? Cras tincidunt enim vel aliquet facilisis.</p>
												        </div>
												    </div>
												    <div class="accordion-section">
												        <a class="accordion-section-title second-accordion-section-title" href="#accordion-6">	<span class="first-icon"><i class="fa fa-play-circle-o"></i></span><span>Other:</span><h6>TAP Training Delivery skills (for new trainers)<span id="6" class="second-icon"><i class="fa fa-sort-desc"></i></span></h6></a>
												        <div id="accordion-6" class="accordion-section-content">
												            <p>Mauris interdum fringilla augue vitae tincidunt. Curabitur vitae tortor id eros euismod ultrices. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent nulla mi, rutrum ut feugiat at, vestibulum ut neque? Cras tincidunt enim vel aliquet facilisis.</p>
												        </div>
												    </div>
												    <div class="accordion-section">
												        <a class="accordion-section-title" href="#accordion-7">	<span class="first-icon"><i class="fa fa-play-circle-o"></i></span><span>CPD:</span><h6>Find Courses, Telecourses &amp; Web Courses<span id="7" class="second-icon"><i class="fa fa-sort-desc"></i></span></h6></a>
												        <div id="accordion-7" class="accordion-section-content">
												            <p>Mauris interdum fringilla augue vitae tincidunt. Curabitur vitae tortor id eros euismod ultrices. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent nulla mi, rutrum ut feugiat at, vestibulum ut neque? Cras tincidunt enim vel aliquet facilisis.</p>
												        </div>
												    </div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="course-information">
									<div class="widget-heading">
										<h4>Course Information</h4>
									</div>
									<ul>
										<li><span>Starts:</span>{{ $cour->start }}</li>
										<li><span>Duration:</span>{{ $cour->temps }}</li>
										<li><span>Study Level:</span>{{ $cour->niveau }}</li>
										<li><span>Disipline</span>{{ $cour->discipline }}</li>
										<li><span>Price:</span>${{ $cour->prix }}</li>
									</ul>
								</div>
								<div class="related-courses">
									<div class="widget-heading">
										<h4>Related Courses</h4>
									</div>
									<ul>
										<li>
											<a href="single-course.html"><img src="http://placehold.it/70x70" alt=""></a>
											<span>John Smith</span>
											<a href="single-course.html"><h6>History of Art Architecture</h6></a>
											<p>Price: <em>$39.99</em></p>
										</li>
										<li>
											<a href="single-course.html"><img src="http://placehold.it/70x70" alt=""></a>
											<span>John Smith</span>
											<a href="single-course.html"><h6>Fashion Buying Managment</h6></a>
											<p>Price: <em>$29.99</em></p>
										</li>
										<li>
											<a href="single-course.html"><img src="http://placehold.it/70x70" alt=""></a>
											<span>John Smith</span>
											<a href="single-course.html"><h6>Electronic Engineering</h6></a>
											<p>Price: <em>$19.99</em></p>
										</li>
									</ul>
								</div>
								<div class="categories">
									<div class="widget-heading">
										<h4>Categories</h4>
									</div>
									<ul>
										<li><a href="#"><i class="fa fa-angle-right"></i>Design</a></li>
										<li><a href="#"><i class="fa fa-angle-right"></i>International</a></li>
										<li><a href="#"><i class="fa fa-angle-right"></i>Learning</a></li>
										<li><a href="#"><i class="fa fa-angle-right"></i>Read</a></li>
										<li><a href="#"><i class="fa fa-angle-right"></i>Education</a></li>
										<li><a href="#"><i class="fa fa-angle-right"></i>Finance</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</section>
@endsection