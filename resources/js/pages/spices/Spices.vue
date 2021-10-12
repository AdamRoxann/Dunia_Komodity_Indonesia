<template>
  <div>
    <section
      class="banner-inner-sec"
      style="background-image: url('/assets/images/coconut_sugar.PNG')"
    >
      <div class="banner-table">
        <div class="banner-table-cell wow fadeInLeft"
            data-wow-duration="0.5s"
            data-wow-delay="100ms">
          <div class="container">
            <div class="banner-inner-content">
              <h2 class="banner-inner-title">Our Spices</h2>
              <ul class="xs-breadcumb">
                <li>
                  <router-link :to="{ name: 'home' }"> Home / </router-link>
                  Coconut Sugar
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--breadcumb end here-->
    <!--  service inner section -->
    <section class="service-v2-sec service-inner-sec section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-4 wow fadeInLeft"
            data-wow-duration="0.5s"
            data-wow-delay="200ms">
            <div class="service-sidebar">
              <div class="widgets">
                <h3 class="widget-title"><span></span> Product</h3>
                <ul class="services-link-item">
                  <li class="active"><a style="background-color: #66442C" class="no_dropdown" href="#">Our Coconut Sugar</a></li>
                  <li>
                    <router-link :to="{ name: 'sugarblock' }">
                      Dried Nutmeg</router-link
                    >
                  </li>
                  <li>
                    <router-link :to="{ name: 'palmsugar' }">Cinnamon </router-link>
                    <router-link :to="{ name: 'palmsugar' }">Pepper</router-link>
                  </li>
                  <!-- <li><a href="#">Arabica Kerinci</a></li>
                            <li><a href="#">Arabica Sidikalang</a></li> -->
                  <!-- <li><a href="#">Fall cleanup</a></li>
                            <li><a href="#">Irrigation and drainage</a></li> -->
                </ul>
              </div>
              <!-- widgets -->

              <!-- <div class="widgets">
                        <h3 class="widget-title"><span>Products</span> Certificate</h3>
                        <ul class="brochures-list">
                            <li><a href="#"><i class="fa fa-file-pdf-o"></i>Coconut-sugar.view</a></li>
                            <li><a href="#"><i class="fa fa-file-word-o"></i>Download .doc</a></li>
                        </ul>
                    </div>widgets -->

              <!-- <div class="widgets">
                        <h3 class="widget-title"><span>Get</span> in touch</h3>
                        <ul class="contact-list">
                            <li><i class="icon icon-map-marker2"></i>76/A, North road, Green lawn New york city</li>
                            <li>
                                <i class="icon icon-envelope4"></i>
                                <label>  Mail us</label>
                                examplestudio@gmail.com
                            </li>
                            <li>
                                <i class="icon icon-phone3"></i>
                                <label>  Call Us</label>
                                +888 367 253 252
                            </li>
                        </ul>
                    </div> -->
              <!-- widgets -->
            </div>
            <!-- srvice sidebar -->
          </div>
          <!-- col end -->
          <div class="col-lg-9 col-md-8 wow fadeInDown"
            data-wow-duration="1.0s"
            data-wow-delay="200ms">
            <div class="row">
              <div class="col-lg-4 col-md-6">
                <div class="single-services-item">
                  <router-link :to="{ name: 'sugarblock' }">
                    <img
                      class="products-detail-images zoom"
                      src="/assets/images/coconut_sugar_choice.PNG"
                      alt=""
                    />
                  </router-link>
                  <h3 class="xs-service-title">
                    <router-link :to="{ name: 'sugarblock' }">
                      Dried Nutmeg</router-link
                    >
                  </h3>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-services-item">
                  <router-link :to="{ name: 'palmsugar' }">
                    <img
                      class="products-detail-images zoom"
                      src="/assets/images/palm_sugar_choice.PNG"
                      alt=""
                    />
                  </router-link>
                  <h3 class="xs-service-title">
                    <router-link :to="{ name: 'palmsugar' }">Cinnamon</router-link>
                  </h3>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-services-item">
                  <router-link :to="{ name: 'palmsugar' }">
                    <img
                      class="products-detail-images zoom"
                      src="/assets/images/palm_sugar_choice.PNG"
                      alt=""
                    />
                  </router-link>
                  <h3 class="xs-service-title">
                    <router-link :to="{ name: 'palmsugar' }">Pepper</router-link>
                  </h3>
                </div>
              </div>
              <div class="col-lg-12 col-md-6">
                <div class="widgets" style="text-align: center">
                  <h3 class="widget-title">
                    <span>Products</span> Certificate
                  </h3>
                  <ul class="brochures-list">
                    <li>
                      <a href="#"
                        ><i class="fa fa-file-pdf-o"></i>Coconut-sugar.view</a
                      >
                    </li>
                    <li>
                      <a href="#"
                        ><i class="fa fa-file-word-o"></i>Download .doc</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
              <!-- <div class="col-lg-4 col-md-6">
                        <div class="single-services-item">
                            <img src="/assets/images/services/service_style_7.jpg" alt="">
                            <h3 class="xs-service-title"><a href="single-service-v1.html">Arabica Kerinci</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-services-item">
                            <img src="/assets/images/services/service_style_8.jpg" alt="">
                            <h3 class="xs-service-title"><a href="single-service-v1.html">Arabica Sidikalang</a></h3>
                        </div>
                    </div> -->
              <!-- <div class="col-lg-4 col-md-6">
                        <div class="single-services-item">
                            <img src="/assets/images/services/service_style_9.jpg" alt="">
                            <h3 class="xs-service-title"><a href="single-service-v1.html">Fall cleanup</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-services-item">
                            <img src="/assets/images/services/service_style_10.jpg" alt="">
                            <h3 class="xs-service-title"><a href="single-service-v1.html">Irrigation and drainage</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-services-item">
                            <img src="/assets/images/services/service_style_18.jpg" alt="">
                            <h3 class="xs-service-title"><a href="single-service-v1.html">Snow removal</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-services-item">
                            <img src="/assets/images/services/service_style_19.jpg" alt="">
                            <h3 class="xs-service-title"><a href="single-service-v1.html">Fall cleanup</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-services-item">
                            <img src="/assets/images/services/service_style_20.jpg" alt="">
                            <h3 class="xs-service-title"><a href="single-service-v1.html">Irrigation and drainage</a></h3>
                        </div>
                    </div> -->
            </div>
            <!-- row end-->
          </div>
          <!-- col end-->
        </div>
        <!-- row end-->
      </div>
      <!-- .container end -->
    </section>
  </div>
</template>