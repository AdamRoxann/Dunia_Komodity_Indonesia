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
              <h2 class="banner-inner-title">Arabica Gayo</h2>
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
                  <span>Arabica</span> Gayo
                </h2>
                <div class="list-image-arabica" style="position: relative">
                  <div class="col-4">
                    <img
                      src="/assets/images/coffee_beans/gayo/1.jpeg"
                      style="width: 100%; object-fit: cover; object-position: 20% 80%; border-radius: 20px"
                      alt=""
                    />
                  </div>
                  <div class="col-4">
                    <img
                      src="/assets/images/coffee_beans/gayo/2.jpeg"
                      style="width: 100%; object-fit: cover; object-position: 20% 80%; border-radius: 20px"
                      alt=""
                    />
                  </div>
                  <div class="col-4">
                    <img
                      class=""
                      src="/assets/images/coffee_beans/gayo/3.jpeg"
                      style="width: 100%; object-fit: cover; object-position: 20% 80%; border-radius: 20px"
                      alt=""
                    />
                  </div>
                </div>
                <p style="font-size: 16px; text-align: justify">
                  <b>Gayo Arabica Coffee</b> is considered one of the most premium
                  coffee beans in the world. It is harvested from plantations in
                  Central Aceh region. It has a fine aroma and a pretty low
                  bitter taste. Aceh Gayo coffee beans grow in a distinctive
                  type of soil in the highlands, thus it almost impossible to
                  find it in any other place outside its origin. It lies on the
                  altitude of 900 – 1700 above sea level with rainfall rate at
                  around 1,643 – 2,000 mm/year which is considered highly
                  favorable for coffee plantations.
                </p>
              </div>

              <div class="row key-benifits-item xs-mb-60">
                <div
                  class="col-lg-6"
                  style="
                    display: flex;
                    align-items: center;
                    justify-content: center;
                  "
                >
                  <div class="key-benifits-content">
                    <h3 class="xs-post-title">
                      <span class="light-text"></span> <br />
                      Our specification :
                    </h3>
                    <ul>
                                    <li><i class="fa fa-caret-right"></i>Grade : 1</li>
                                    <li><i class="fa fa-caret-right"></i>Process : Semi wash</li>
                                    <li><i class="fa fa-caret-right"></i>Region : Gayo, Aceh</li>
                                    <li><i class="fa fa-caret-right"></i>Variety : Mix </li>
                                    <li><i class="fa fa-caret-right"></i>Moisture : 11%</li>
                                    <li><i class="fa fa-caret-right"></i>Altitude : 1200 - 1600 mas</li>
                                    <li><i class="fa fa-caret-right"></i>Tasting notes : spices, hints of vanilla, <br>stong aroma, bold body, medium to low acidity</li>
                                </ul>
                    <!-- <span>
                      Type: Aceh Gayo grade 1.<br />
                      Arabica coffee beans.<br />
                      One of the premium coffee beans in the world.<br />
                      Harvested from plantations in Central Aceh region.<br />
                      Fine aroma and pretty low bitter taste.<br />
                      Grown in the distinctive type of soil in the highlands.<br />
                      Almost impossible to find in any other places outside its
                      origin.<br />
                      Famous for its classic balance of earthiness, bold and
                      syrupy flavor.</span
                    > -->
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