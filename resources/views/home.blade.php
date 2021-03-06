
@extends('layouts.app')

@section('content')
      @include('partials.navbar')
      @include('partials.home')
      @include('partials.services')


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-7 pb-0">

        <div class="container">
          <div class="row">
            <div class="col-6 col-lg mb-5">
              <div class="text-center"><img src="{{ asset('img/icons/awards.png')}}" alt="..." />
                <h1 class="text-primary mt-4">26+</h1>
                <h5 class="text-800">Awards won</h5>
              </div>
            </div>
            <div class="col-6 col-lg mb-5">
              <div class="text-center"><img src="{{ asset('img/icons/states.png')}}" alt="..." />
                <h1 class="text-primary mt-4">65+</h1>
                <h5 class="text-800">States covered</h5>
              </div>
            </div>
            <div class="col-6 col-lg mb-5">
              <div class="text-center"><img src="{{ asset('img/icons/clients.png')}}" alt="..." />
                <h1 class="text-primary mt-4">689K+</h1>
                <h5 class="text-800">Happy clients</h5>
              </div>
            </div>
            <div class="col-6 col-lg mb-5">
              <div class="text-center"><img src="{{ asset('img/icons/goods.png')}}" alt="..." />
                <h1 class="text-primary mt-4">130M+</h1>
                <h5 class="text-800">Goods delivered</h5>
              </div>
            </div>
            <div class="col-6 col-lg mb-5">
              <div class="text-center"><img src="{{ asset('img/icons/business.png')}}" alt="..." />
                <h1 class="text-primary mt-4">130M+</h1>
                <h5 class="text-800">Business hours</h5>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section>

        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="card bg-dark text-white py-4 py-sm-0"><img class="w-100" src="{{ asset('img/gallery/video.png')}}" alt="video" />
                <div class="card-img-overlay bg-dark-gradient d-flex flex-column flex-center"><img src="{{ asset('img/icons/play.png')}}" width="80" alt="play" />
                  <h5 class="text-primary">FASTEST DELIVERY</h5>
                  <p class="text-center">You can get your valuable item in the fastest period of<br class="d-none d-sm-block" />time with safety. Because your emergency<br class="d-none d-sm-block" />is our first priority.</p><a class="stretched-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"></a>
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                      <div class="modal-content overflow-hidden">
                        <div class="modal-header p-0">
                          <div class="ratio ratio-16x9" id="exampleModalLabel">
                            <iframe src="https://www.youtube.com/embed/TlcP2aTOp-Q" title="YouTube video" allowfullscreen="allowfullscreen"></iframe>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-7">

        <div class="container-fluid">
          <div class="row flex-center">
            <div class="bg-holder bg-size" style="background-image:url({{ asset('img/gallery/quote.png')}});background-position:top;background-size:auto;margin-left:-270px;margin-top:-45px;">
            </div>
            <!--/.bg-holder-->

            <div class="col-md-8 col-lg-5 text-center">
              <h5 class="text-danger">TESTIMONIAL</h5>
              <h2>Our Awesome Clients</h2>
            </div>
          </div>
          <div class="carousel slide pt-6" id="carouselExampleDark" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <div class="row h-100">
                  <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card h-100 card-span p-3">
                      <div class="card-body">
                        <h5 class="mb-0 text-primary">Fantastic service!</h5>
                        <p class="card-text pt-3">I purchased a phone from an e-commerce site, and this courier service provider assisted me in getting it delivered to my home. I received my phone within one day, and I was really satisfied with their service when I received it. </p>
                        <div class="d-xl-flex justify-content-between align-items-center">
                          <div class="d-flex align-items-center mb-3"><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i></div>
                          <div class="d-flex align-items-center"><img class="img-fluid" src="{{ asset('img/icons/avatar.png')}}" alt="" />
                            <div class="flex-1 ms-3">
                              <h6 class="mb-0 fs--1 text-1000 fw-medium">Yves Tanguy</h6>
                              <p class="fs--2 fw-normal mb-0">Chief Executive, DLF</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card h-100 card-span p-3">
                      <div class="card-body">
                        <h5 class="mb-0 text-primary">Fantastic service!</h5>
                        <p class="card-text pt-3">I purchased a phone from an e-commerce site, and this courier service provider assisted me in getting it delivered to my home. I received my phone within one day, and I was really satisfied with their service when I received it.</p>
                        <div class="d-xl-flex justify-content-between align-items-center">
                          <div class="d-flex align-items-center mb-3"><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i></div>
                          <div class="d-flex align-items-center"><img class="img-fluid" src="{{ asset('img/icons/avatar.png')}}" alt="" />
                            <div class="flex-1 ms-3">
                              <h6 class="mb-0 fs--1 text-1000 fw-medium">Kim Young Jou</h6>
                              <p class="fs--2 fw-normal mb-0">Chief Executive, DLF</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card h-100 card-span p-3">
                      <div class="card-body">
                        <h5 class="mb-0 text-primary">Fantastic service!</h5>
                        <p class="card-text pt-3">I purchased a phone from an e-commerce site, and this courier service provider assisted me in getting it delivered to my home. I received my phone within one day, and I was really satisfied with their service when I received it. .</p>
                        <div class="d-xl-flex justify-content-between align-items-center">
                          <div class="d-flex align-items-center mb-3"><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i></div>
                          <div class="d-flex align-items-center"><img class="img-fluid" src="{{ asset('img/icons/avatar.png')}}" alt="" />
                            <div class="flex-1 ms-3">
                              <h6 class="mb-0 fs--1 text-1000 fw-medium">Yves Tanguy</h6>
                              <p class="fs--2 fw-normal mb-0">Chief Executive, DLF</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <div class="row h-100">
                  <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card h-100 card-span p-3">
                      <div class="card-body">
                        <h5 class="mb-0 text-primary">Fantastic service!</h5>
                        <p class="card-text pt-3">I purchased a phone from an e-commerce site, and this courier service provider assisted me in getting it delivered to my home. I received my phone within one day, and I was really satisfied with their service when I received it. </p>
                        <div class="d-xl-flex justify-content-between align-items-center">
                          <div class="d-flex align-items-center mb-3"><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i></div>
                          <div class="d-flex align-items-center"><img class="img-fluid" src="{{ asset('img/icons/avatar.png')}}" alt="" />
                            <div class="flex-1 ms-3">
                              <h6 class="mb-0 fs--1 text-1000 fw-medium">Yves Tanguy</h6>
                              <p class="fs--2 fw-normal mb-0">Chief Executive, DLF</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card h-100 card-span p-3">
                      <div class="card-body">
                        <h5 class="mb-0 text-primary">Fantastic service!</h5>
                        <p class="card-text pt-3">I purchased a phone from an e-commerce site, and this courier service provider assisted me in getting it delivered to my home. I received my phone within one day, and I was really satisfied with their service when I received it. </p>
                        <div class="d-xl-flex justify-content-between align-items-center">
                          <div class="d-flex align-items-center mb-3"><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i></div>
                          <div class="d-flex align-items-center"><img class="img-fluid" src="{{ asset('img/icons/avatar.png')}}" alt="" />
                            <div class="flex-1 ms-3">
                              <h6 class="mb-0 fs--1 text-1000 fw-medium">Kim Young Jou</h6>
                              <p class="fs--2 fw-normal mb-0">Chief Executive, DLF</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card h-100 card-span p-3">
                      <div class="card-body">
                        <h5 class="mb-0 text-primary">Fantastic service!</h5>
                        <p class="card-text pt-3">I purchased a phone from an e-commerce site, and this courier service provider assisted me in getting it delivered to my home. I received my phone within one day, and I was really satisfied with their service when I received it. .</p>
                        <div class="d-xl-flex justify-content-between align-items-center">
                          <div class="d-flex align-items-center mb-3"><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i></div>
                          <div class="d-flex align-items-center"><img class="img-fluid" src="{{ asset('img/icons/avatar.png')}}" alt="" />
                            <div class="flex-1 ms-3">
                              <h6 class="mb-0 fs--1 text-1000 fw-medium">Yves Tanguy</h6>
                              <p class="fs--2 fw-normal mb-0">Chief Executive, DLF</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row h-100">
                  <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card h-100 card-span p-3">
                      <div class="card-body">
                        <h5 class="mb-0 text-primary">Fantastic service!</h5>
                        <p class="card-text pt-3">I purchased a phone from an e-commerce site, and this courier service provider assisted me in getting it delivered to my home. I received my phone within one day, and I was really satisfied with their service when I received it. </p>
                        <div class="d-xl-flex justify-content-between align-items-center">
                          <div class="d-flex align-items-center mb-3"><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i></div>
                          <div class="d-flex align-items-center"><img class="img-fluid" src="{{ asset('img/icons/avatar.png')}}" alt="" />
                            <div class="flex-1 ms-3">
                              <h6 class="mb-0 fs--1 text-1000 fw-medium">Yves Tanguy</h6>
                              <p class="fs--2 fw-normal mb-0">Chief Executive, DLF</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card h-100 card-span p-3">
                      <div class="card-body">
                        <h5 class="mb-0 text-primary">Fantastic service!</h5>
                        <p class="card-text pt-3">???I purchased a phone from an e-commerce site, and this courier service provider assisted me in getting it delivered to my home. I received my phone within one day, and I was really satisfied with their service when I received it. </p>
                        <div class="d-xl-flex justify-content-between align-items-center">
                          <div class="d-flex align-items-center mb-3"><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i></div>
                          <div class="d-flex align-items-center"><img class="img-fluid" src="{{ asset('img/icons/avatar.png')}}" alt="" />
                            <div class="flex-1 ms-3">
                              <h6 class="mb-0 fs--1 text-1000 fw-medium">Kim Young Jou</h6>
                              <p class="fs--2 fw-normal mb-0">Chief Executive, DLF</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card h-100 card-span p-3">
                      <div class="card-body">
                        <h5 class="mb-0 text-primary">Fantastic service!</h5>
                        <p class="card-text pt-3">I purchased a phone from an e-commerce site, and this courier service provider assisted me in getting it delivered to my home. I received my phone within one day, and I was really satisfied with their service when I received it. .</p>
                        <div class="d-xl-flex justify-content-between align-items-center">
                          <div class="d-flex align-items-center mb-3"><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i></div>
                          <div class="d-flex align-items-center"><img class="img-fluid" src="{{ asset('img/icons/avatar.png')}}" alt="" />
                            <div class="flex-1 ms-3">
                              <h6 class="mb-0 fs--1 text-1000 fw-medium">Yves Tanguy</h6>
                              <p class="fs--2 fw-normal mb-0">Chief Executive, DLF</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row px-3 px-md-0 mt-6">
              <div class="col-12 position-relative">
                <ol class="carousel-indicators">
                  <li class="active" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"></li>
                  <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                  <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section>

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5 col-xl-4"><img src="{{ asset('img/illustrations/callback.png')}}" alt="..." />
              <h5 class="text-danger">REQUEST A CALLBACK</h5>
              <h2>We will contact in the shortest time.</h2>
              <p class="text-muted">Monday to Friday, 9am-5pm.</p>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-4">
              <form class="row">
                <div class="mb-3">
                  <label class="form-label visually-hidden" for="inputName">Name</label>
                  <input class="form-control form-quriar-control" id="inputName" type="text" placeholder="Name" />
                </div>
                <div class="mb-3">
                  <label class="form-label visually-hidden" for="inputEmail">Another label</label>
                  <input class="form-control form-quriar-control" id="inputEmail" type="email" placeholder="Email" />
                </div>
                <div class="mb-5">
                  <label class="form-label visually-hidden" for="validationTextarea">Message</label>
                  <textarea class="form-control form-quriar-control is-invalid border-400" id="validationTextarea" placeholder="Message" style="height: 150px" required="required"></textarea>
                </div>
                <div class="d-grid">
                  <button class="btn btn-primary" type="submit">Send Message<i class="fas fa-paper-plane ms-2"></i></button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section id="findUs">

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 col-lg-5 mb-6 text-center">
              <h5 class="text-danger">FIND US</h5>
              <h2>Access us easily</h2>
            </div>
            <div class="col-12">
              <div class="card card-span rounded-2 mb-3">
                <div class="row">
                  <div class="col-md-6 col-lg-7 d-flex"><img class="w-100 fit-cover rounded-md-start rounded-top rounded-md-top-0" src="{{ asset('img/gallery/map.svg')}}" alt="map" /></div>
                  <div class="col-md-6 col-lg-5 d-flex flex-center">
                    <div class="card-body">
                      <h5>Contact with us</h5>
                      <p class="text-700 my-4"> <i class="fas fa-map-marker-alt text-warning me-3"></i><span>2277 Lorem Ave, San Diego, CA 22553</span></p>
                      <p><i class="fas fa-phone-alt text-warning me-3"></i><span class="text-700">Monday - Friday: 10 am - 10pm<br/><span class="ps-4">Sunday: 11 am - 9pm  </span></span></p>
                      <p><i class="fas fa-envelope text-warning me-3"> </i><a class="text-700" href="mailto:vctung@outlook.com"> info@quriarbox.com</a></p>
                      <ul class="list-unstyled list-inline mt-5">
                        <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-facebook-square fs-2"></i></a></li>
                        <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-instagram-square fs-2"></i></a></li>
                        <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-twitter-square fs-2"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <button class="btn btn-primary px-5" type="submit"><i class="fas fa-phone-alt me-2"></i><a class="text-light" href="tel:123-456789">Call us to delivery 123-456789</a></button>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-1000">

        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h2 class="fw-bold text-white">Get an update every week</h2>
              <p class="text-300">We ensure that your product is delivered in the safest possible<br />manner, at the correct location, at the right time.</p>
            </div>
            <div class="col-lg-6">
              <h5 class="text-primary mb-3">SUBSCRIBE TO NEWSLETTER </h5>
              <form class="row gx-2 gy-2 align-items-center">
                <div class="col">
                  <div class="input-group-icon">
                    <label class="visually-hidden" for="inputEmailCta">Address</label>
                    <input class="form-control input-box form-quriar-control text-light" id="inputEmailCta" type="email" placeholder="Enter your mail" />
                  </div>
                </div>
                <div class="d-grid gap-3 col-sm-auto">
                  <button class="btn btn-danger" type="submit">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-900 pb-0 pt-5">

        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-12 col-lg-6 mb-4 order-0 order-sm-0"><a class="text-decoration-none" href="#"><img src="{{ asset('img/gallery/footer-logo.png')}}" height="51" alt="" /></a>
              <p class="text-500 my-4">The most trusted Courier<br />company in your area.</p>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 mb-3 order-2 order-sm-1">
              <h5 class="lh-lg fw-bold mb-4 text-light font-sans-serif">Other links </h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-500" href="#!">Blogs</a></li>
                <li class="lh-lg"><a class="text-500" href="#!">Movers website</a></li>
                <li class="lh-lg"><a class="text-500" href="#!">Traffic Update</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2">
              <h5 class="lh-lg fw-bold text-light mb-4 font-sans-serif">Services</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-500" href="#!">Corporate goods</a></li>
                <li class="lh-lg"><a class="text-500" href="#!">Artworks</a></li>
                <li class="lh-lg"><a class="text-500" href="#!">Documents</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2">
              <h5 class="lh-lg fw-bold text-light mb-4 font-sans-serif"> Customer Care</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-500" href="#!">About Us</a></li>
                <li class="lh-lg"><a class="text-500" href="#!">Contact US</a></li>
                <li class="lh-lg"><a class="text-500" href="#!">Get Update</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0 bg-1000">

        <div class="container">
          <div class="row justify-content-md-between justify-content-evenly py-4">
            <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
              <p class="fs--1 my-2 fw-bold text-200">All rights Reserved &copy; Your Company, 2021</p>
            </div>
            <div class="col-12 col-sm-8 col-md-6">
              <p class="fs--1 my-2 text-center text-md-end text-200"> Made with&nbsp;
                <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#F95C19" viewBox="0 0 16 16">
                  <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
                </svg>&nbsp;by&nbsp;<a class="fw-bold text-primary" href="https://themewagon.com/" target="_blank">ThemeWagon </a>
              </p>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->
@endsection

