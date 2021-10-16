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
              <h2 class="banner-inner-title">Arabica Kerinci</h2>
              <ul class="xs-breadcumb">
                <li>
                  <router-link :to="{ name: 'home' }"> Home / </router-link>
                  Arabica Kerinci
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
                  <span>Arabica</span> Kerinci
                </h2>
                <div class="list-image-arabica" style="position: relative">
                  <div class="col-4">
                    <img
                      src="/assets/images/coffee_beans/kerinci/1.jpeg"
                      style="width: 100%; object-fit: cover; object-position: 5% 95%; border-radius: 20px"
                      alt=""
                    />
                  </div>
                  <div class="col-4">
                    <img
                      src="/assets/images/coffee_beans/kerinci/2.jpeg"
                      style="width: 100%; object-fit: cover; object-position: 20% 80%; border-radius: 20px"
                      alt=""
                    />
                  </div>
                  <div class="col-4">
                    <img
                      class=""
                      src="/assets/images/coffee_beans/kerinci/3.jpeg"
                      style="width: 100%; object-fit: cover; object-position: 20% 80%; border-radius: 20px"
                      alt=""
                    />
                  </div>
                </div>
                <p style="font-size: 16px; text-align: justify">
                  <b>Kerinci Arabica Coffee</b> grows at altitude of 900 to 1,600 masl.
                  Arabica Kerinci coffee is usually small to medium in size. In
                  terms of aroma, Kerinci coffee has a unique and distinctive
                  taste. The aroma of Kerinci coffee is very fragrant and tasted
                  like tamarind, hints of brown sugar and spicy taste. Kerinci
                  Arabica has not been well known as another Sumatra’s coffee
                  like Gayo and Mandailing, but it has a special and unique
                  taste which another coffee above do not.
                </p>
                <!-- <p style="font-size: 16px; text-align: justify">
                  Coffee plantations in Kerinci Regency are located in three
                  sub-districts, namely Kayu Aro, Kayu Aro Barat, and Gunung
                  Tujuh. Coffee plantations in this area are located at an
                  altitude of 900 to 1,200 meters above sea level. The type of
                  plant that is cultivated here is arabica.
                </p>
                <p style="font-size: 16px; text-align: justify">
                  The character of Kopi Kerinci is that it tastes sour like
                  lemon, but leaves a sweet taste that lasts a long time in the
                  mouth. The body is thick and the aroma produced is dominated
                  by spices with a hint of chocolate.
                </p>
                <p style="font-size: 16px; text-align: justify">
                  The Q grader describes the taste of this coffee as a
                  combination of characters from five varieties, namely sigarar
                  debt, gayo, andung sari, Sidikalang, and P88. The combination
                  of these flavors earned him a high score and deserves the
                  title of specialty coffee.
                </p>
                <p style="font-size: 16px; text-align: justify">
                  There are two methods used for pulping Arabica Kerinci coffee
                  beans, namely honey and dry process. The honey method is
                  mostly used by farmers from Kayu Aro, while in other areas it
                  uses the dry process. Seeds that are processed with honey tend
                  to taste sweeter and softer. However, the process takes longer
                  and is rarer on the market. Kerinci Arabica coffee is very
                  delicious served as a single origin coffee. However, if you
                  are bored with single origin, try the coffee blend for a
                  different taste.
                </p> -->
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
                      <span class="light-text"></span> <br />Our
                      Specifications:
                    </h3>
                    <ul>
                      <li>
                        <i class="fa fa-caret-right"></i>Grade : 1

                      </li>
                      <li>
                        <i class="fa fa-caret-right"></i>Process : Semi wash
                      </li>
                      <li>
                        <i class="fa fa-caret-right"></i>Variety : Andung sari mix Sigara rutang

                      </li>
                      <li>
                        <i class="fa fa-caret-right"></i>Moisture : 11%

                      </li>
                      <li>
                        <i class="fa fa-caret-right"></i>Altitude : 1300 - 1600 masl

                      </li>
                      <li>
                        <i class="fa fa-caret-right"></i>Tasting notes : fruity, hint of spices, sweet after taste, bold body.

                      </li>
                      <!-- <li><i class="fa fa-caret-right"></i>Body : Bold</li>
                      <li><i class="fa fa-caret-right"></i>Acidity : Medium</li> -->
                    </ul>
                    <!-- <span>
                                    Region: Jambi, Sumatera, Indonesia.<br>
                                    Arabica coffee beans.<br>
                                    One of the premium coffee beans in the world.<br>
                                    Harvested from plantations in Central Aceh region.<br>
                                    Fine aroma and pretty low bitter taste.<br>
                                    Grown in the distinctive type of soil in the highlands.<br>
                                    Almost impossible to find in any other places outside its origin.<br>
                                    Famous for its classic balance of earthiness, bold and syrupy flavor.</span> -->
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