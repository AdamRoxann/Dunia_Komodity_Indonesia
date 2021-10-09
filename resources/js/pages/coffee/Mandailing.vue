<template>
  <div>
    <section
      class="banner-inner-sec"
      style="
        background-image: url('/assets/images/green_bean_detail_banner.jpeg');
        background-position: 65% 35%;
        background-size: cover;
      "
    >
      <div class="banner-table">
        <div class="banner-table-cell wow fadeInLeft"
            data-wow-duration="0.5s"
            data-wow-delay="100ms">
          <div class="container">
            <div class="banner-inner-content">
              <h2 class="banner-inner-title">Arabica Mandailing</h2>
              <ul class="xs-breadcumb">
                <li>
                  <router-link :to="{ name: 'home' }"> Home / </router-link>
                  Arabica Mandailing
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--breadcumb end here-->
    <!--  service inner section -->
    <section class="service-inner-sec single-service-sec section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-8">
            <div class="main-single-service-content">
              <div class="single-service-post-content">
                <h2 class="column-title column-title2">
                  <span>Arabica</span> Mandailing
                </h2>
                <div class="list-image-arabica" style="position: relative">
                  <div class="col-5">
                    <img
                      class="float-left"
                      src="/assets/images/arabica_gayo_landscape.jpeg"
                      style=""
                      alt=""
                    />
                  </div>
                  <div class="col-3">
                    <img
                      class="ml-auto mr-3"
                      src="/assets/images/arabica_gayo2.JPG"
                      style=""
                      alt=""
                    />
                  </div>
                  <div class="col-4">
                    <img
                      class=""
                      src="/assets/images/arabica_gayo_landscape2.jpeg"
                      style=""
                      alt=""
                    />
                  </div>
                </div>
                <p style="font-size: 16px; text-align: justify">
                  <b>Mandailing Arabica Coffee</b> is arabica coffee originating
                  from the Mandailing area, Bukit Barisan Mountains which
                  located within the elevation of 1,100 – 1,400 masl , North
                  Sumatra. This coffee has a good viscous taste, medium acidity,
                  cocoa, spices with a sweet finish as its tasting notes. In
                  William H. Ukers' book (New York, 1922), mandailing coffee is
                  described as the best and most expensive coffee on the
                  international market. Our mandailing coffee beans were
                  developed by mixed of catimor, tim tim, and S 795 varieties.
                </p>
              </div>

              <div class="row key-benifits-item xs-mb-60">
                <div class="col-lg-6">
                  <div class="key-benifits-content">
                    <h3 class="xs-post-title">
                      <span class="light-text"></span> <br />Our Specifications
                      :
                    </h3>
                    <ul>
                      <li><i class="fa fa-caret-right"></i>Grade : 1</li>
                      <li>
                        <i class="fa fa-caret-right"></i>Altitude : 1100 - 1400
                      </li>
                      <li>
                        <i class="fa fa-caret-right"></i>Variety : Catimor,tim
                        tim,S 795
                      </li>
                      <li>
                        <i class="fa fa-caret-right"></i>Process : Semi wash
                      </li>
                      <li>
                        <i class="fa fa-caret-right"></i>Medium body, Medium
                        acidity
                      </li>
                      <li>
                        <i class="fa fa-caret-right"></i>Tasting notes :
                        sweet,mellow,cocoa,spices,
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- col end-->
                <div class="col-lg-6">
                  <div class="key-benifits-img" style="text-align: center">
                    <img
                      src="/assets/images/arabica_gayo.jpeg"
                      width="250"
                      alt=""
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- col end-->
        </div>
        <!-- row end-->
      </div>
      <!-- .container end -->
    </section>
  </div>
</template>