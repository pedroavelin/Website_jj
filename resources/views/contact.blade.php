@extends('layouts.main_layout')
@section('content')
<div id="page"> 

  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.html">Início</a><span>&raquo;</span></li>
            <li><strong>Contacto</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 

  <!-- Main Container -->
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="row">
        <section class="col-main col-sm-12">
          
          <div id="contact" class="page-content page-contact">
          <div class="page-title">
            <h2>Contacto</h2>
          </div>
            <div id="message-box-conact">We're available for new projects</div>
            <div class="row">
              <div class="col-xs-12 col-sm-6" id="contact_form_map">
                <h3 class="page-subheading">Let's get in touch</h3>
                <p>Lorem ipsum dolor sit amet onsectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor dapibus eget. Mauris tincidunt aliquam lectus sed vestibulum. Vestibulum bibendum suscipit mattis.</p>
                <br/>
                <ul>
                  <li>Praesent nec tincidunt turpis.</li>
                  <li>Aliquam et nisi risus.&nbsp;Cras ut varius ante.</li>
                  <li>Ut congue gravida dolor, vitae viverra dolor.</li>
                </ul>
                <br/>
                <ul class="store_info">
                  <li><i class="fa fa-home"></i>7064 Lorem Ipsum Vestibulum 666/13</li>
                  <li><i class="fa fa-phone"></i><span>+ 012 315 678 1234</span></li>
                  <li><i class="fa fa-fax"></i><span>+39 0035 356 765</span></li>
                  <li><i class="fa fa-envelope"></i>Email: <span><a href="/cdn-cgi/l/email-protection#88fbfdf8f8e7fafcc8e2fdfbfcfce0ede5eda6ebe7e5"><span class="__cf_email__" data-cfemail="b8cbcdc8c8d7caccf8d2cdcbccccd0ddd5ddced9d4d4ddc196dbd7d5">[email&#160;protected]</span></a></span></li>
                </ul>
              </div>
              <div class="col-sm-6">
                <h3 class="page-subheading">Envie-nos um email</h3>
                <div class="contact-form-box">
                  <div class="form-selector">
                    <label>Name</label>
                    <input type="text" class="form-control input-sm" id="name" />
                  </div>
                  <div class="form-selector">
                    <label>Email</label>
                    <input type="text" class="form-control input-sm" id="email" />
                  </div>
                  <div class="form-selector">
                    <label>Phone</label>
                    <input type="text" class="form-control input-sm" id="phone" />
                  </div>
                  <div class="form-selector">
                    <label>Message</label>
                    <textarea class="form-control input-sm" rows="10" id="message"></textarea>
                  </div>
                  <div class="form-selector">
                    <button class="button"><i class="fa fa-send"></i>&nbsp; <span>Enviar</span></button>
                    &nbsp; <a href="#" class="button">Limpar</a> </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </section>
  <!-- Main Container End -->
  <div class="our-clients">
    <div class="slider-items-products">
      <div id="our-clients-slider" class="product-flexslider hidden-buttons">
        <div class="slider-items slider-width-col6"> 
          
          <!-- Item -->
          <div class="item"> <a href="#!"><img src="{{ asset('assets/images/brand1.png')}}" alt="Image"></a> </div>
          <!-- End Item --> 
          
          <!-- Item -->
          <div class="item"> <a href="#!"><img src="{{ asset('assets/images/brand2.png')}}" alt="Image"></a> </div>
          <!-- End Item --> 
          
          <!-- Item -->
          <div class="item"> <a href="#!"><img src="{{ asset('assets/images/brand3.png')}}" alt="Image"></a> </div>
          <!-- End Item --> 
          
          <!-- Item -->
          <div class="item"> <a href="#!"><img src="{{ asset('assets/images/brand4.png')}}" alt="Image"></a> </div>
          <!-- End Item --> 
          <!-- Item -->
          <div class="item"> <a href="#!"><img src="{{ asset('assets/images/brand5.png')}}" alt="Image"></a> </div>
          <!-- End Item --> 
          <!-- Item -->
          <div class="item"> <a href="#!"><img src="{{ asset('assets/images/brand6.png')}}" alt="Image"></a> </div>
          <!-- End Item --> 
          <!-- Item -->
          <div class="item"> <a href="#!"><img src="{{ asset('assets/images/brand7.png')}}" alt="Image"></a> </div>
          <!-- End Item --> 
          
        </div>
      </div>
    </div>
  </div>
  <a href="#" class="totop"> </a> </div>

  @endsection