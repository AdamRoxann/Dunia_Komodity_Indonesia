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
              <h2 class="banner-inner-title">Arabica Sidikalang</h2>
              <ul class="xs-breadcumb">
                <li>
                  <router-link :to="{ name: 'home' }"> Home / </router-link>
                  Arabica Gayo
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
                  <span>Arabica</span> Sidikalang
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
                  <b>Sidikalang Arabica Coffee</b> has unique flavor profile
                  that is both distinctive and familiar, especially if you love
                  Sumatra coffee’s characteristics. According to the expertise,
                  the uniqueness of Sidikalang comes from the combination of
                  cold temperature and soil types in the area of Bukit Barisan.
                  This coffee is developed at the elevation of 1,100 –
                  1,400masl. This coffee beans has brown sugar, spice, vanilla,
                  hint of citrus acidity, medium body, clean aftertaste comes as
                  the tasting notes. Our sidikalang coffee beans were developed
                  by mixed of sigara rutang, tim tim, and S 795 varieties.
                </p>
              </div>

              <div class="row key-benifits-item xs-mb-60">
                <div class="col-lg-6">
                  <div class="key-benifits-content">
                    <h3 class="xs-post-title">
                      <span class="light-text"></span> <br />Our Specifications:
                    </h3>
                    <ul>
                      <li><i class="fa fa-caret-right"></i>Grade : 1</li>
                      <li>
                        <i class="fa fa-caret-right"></i>Altitude :1100- 1400
                        masl
                      </li>
                      <li>
                        <i class="fa fa-caret-right"></i>Variety : Sigara
                        Rutang/Catimor,tim tim,S 795
                      </li>
                      <li>
                        <i class="fa fa-caret-right"></i>Process : Semi wash
                      </li>
                      <li>
                        <i class="fa fa-caret-right"></i>Moisture : 11 - 13 %
                      </li>
                      <li>
                        <i class="fa fa-caret-right"></i>Medium body, and medium
                        acidity.
                      </li>
                      <li>
                        <i class="fa fa-caret-right"></i>Tasting notes :
                        sweet,brown sugar,chocolate baker,vanilla,spices
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