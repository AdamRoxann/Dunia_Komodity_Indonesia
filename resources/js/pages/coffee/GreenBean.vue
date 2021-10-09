<template>
  <div>
    <section
      class="banner-inner-sec"
      style="
        background-image: url('/assets/images/green_bean_banner.JPG');
        background-position: 75% 50%;
      "
    >
      <div class="banner-table">
        <div class="banner-table-cell wow fadeInLeft"
            data-wow-duration="0.5s"
            data-wow-delay="100ms">
          <div class="container">
            <div class="banner-inner-content">
              <h2 class="banner-inner-title">Our Green Beans Coffee</h2>
              <ul class="xs-breadcumb">
                <li>
                  <router-link :to="{ name: 'home' }"> Home / </router-link>
                  Green Beans Coffee
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
                <!-- <ul class="services-link-item">
                  <li class="active"><a href="#">Our Green Beans Coffee</a></li>
                  <li>
                    <router-link :to="{ name: 'gayo' }">
                      Arabica Gayo</router-link
                    >
                  </li>
                  <li>
                    <router-link :to="{ name: 'lintong' }"
                      >Arabica Lintong</router-link
                    >
                  </li>
                  <li>
                    <router-link :to="{ name: 'kerinci' }">
                      Arabica Kerinci</router-link
                    >
                  </li>
                  <li>
                    <router-link :to="{ name: 'sidikalang' }"
                      >Arabica Sidikalang</router-link
                    >
                  </li>
                  <li>
                    <router-link :to="{ name: 'mandailing' }">
                      Arabica Mandailing</router-link
                    >
                  </li>
                </ul> -->
                <ul class="services-link-item">
                  <li class="active">
                    <a class="no_dropdown" href="#">Our Green Beans Coffee</a>
                  </li>
                  <li>
                    <router-link :to="{ name: 'gayo' }"
                      >Arabica Gayo</router-link
                    >
                  </li>
                  <li>
                    <router-link :to="{ name: 'lintong' }"
                      >Arabica Lintong</router-link
                    >
                  </li>
                  <li>
                    <router-link :to="{ name: 'kerinci' }"
                      >Arabica Kerinci</router-link
                    >
                  </li>
                  <li>
                    <router-link :to="{ name: 'sidikalang' }"
                      >Arabica Sidikalang</router-link
                    >
                  </li>
                  <li>
                    <router-link :to="{ name: 'mandailing' }"
                      >Arabica Mandailing</router-link
                    >
                  </li>
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
                  <router-link :to="{name: 'gayo'}">
                    <img
                      class="products-detail-images zoom"
                      src="/assets/images/arabica_gayo_choice.jpeg"
                      alt=""
                    />
                  </router-link>
                  <h3 class="xs-service-title">
                    <router-link :to="{name: 'gayo'}"
                      >Arabica Gayo</router-link
                    >
                  </h3>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-services-item">
                  <router-link :to="{name: 'lintong'}">
                    <img
                      class="products-detail-images zoom"
                      src="/assets/images/arabica_lintong_choice.jpeg"
                      alt=""
                    />
                  </router-link>
                  <h3 class="xs-service-title">
                    <router-link :to="{name: 'lintong'}"
                      >Arabica Lintong</router-link
                    >
                  </h3>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-services-item">
                  <router-link :to="{name: 'kerinci'}">
                    <img
                      class="products-detail-images zoom"
                      src="/assets/images/arabica_kerinci_choice.jpeg"
                      alt=""
                    />
                  </router-link>
                  <h3 class="xs-service-title">
                    <router-link :to="{name: 'kerinci'}"
                      >Arabica Kerinci</router-link
                    >
                  </h3>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-services-item">
                  <router-link :to="{name: 'sidikalang'}">
                    <img
                      class="products-detail-images zoom"
                      src="/assets/images/services/service_style_8.jpg"
                      alt=""
                    />
                  </router-link>
                  <h3 class="xs-service-title">
                    <router-link :to="{name: 'sidikalang'}"
                      >Arabica Sidikalang</router-link
                    >
                  </h3>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-services-item">
                  <router-link :to="{name: 'mandailing'}">
                    <img
                      class="products-detail-images zoom"
                      src="/assets/images/services/service_style_8.jpg"
                      alt=""
                    />
                  </router-link>
                  <h3 class="xs-service-title">
                    <router-link :to="{name: 'mandailing'}"
                      >Arabica Mandailing</router-link
                    >
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