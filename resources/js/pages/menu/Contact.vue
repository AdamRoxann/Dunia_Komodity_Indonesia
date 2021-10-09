<template>
  <div>
    <section
      class="banner-inner-sec"
      style="background-image:url('/assets/images/contact-banner.jpg')"
    >
      <div class="banner-table">
        <div class="banner-table-cell wow fadeInLeft"
            data-wow-duration="0.5s"
            data-wow-delay="100ms">
          <div class="container">
            <div class="banner-inner-content">
              <h2 class="banner-inner-title">Contact us</h2>
              <ul class="xs-breadcumb">
                <li>
                  <router-link :to="{name: 'home'}"> Home / </router-link>
                  contact
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--breadcumb end here-->
    <!--  get in touch section -->
    <section class="xs-get-in-touch wow fadeInUp"
            data-wow-duration="1.5s"
            data-wow-delay="300ms">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="get-in-touch-cont text-center">
              <h3><span class="light-text">Get</span> in touch</h3>
              <p>
                Get more info about us,<br />
                Reach your target with us.
              </p>
            </div>
          </div>
        </div>
        <!-- .row end -->
      </div>
      <!-- .container end -->
    </section>
    <!-- End get in touch section -->

    <!--  contact section -->
    <section class="xs-contact-sec wow fadeInUp"
            data-wow-duration="1.5s"
            data-wow-delay="300ms">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="xs-form-group">
              <form
                action="#"
                method="POST"
                id="xs-contact-form"
                class="xs-form"
              >
                <div class="row">
                  <div class="col-lg-6">
                    <input
                      type="text"
                      class="form-control"
                      name="name"
                      placeholder="Your name"
                      id="xs_contact_name"
                    />
                  </div>
                  <div class="col-lg-6">
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      placeholder="Your email"
                      id="xs_contact_email"
                    />
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <input
                      type="number"
                      class="form-control"
                      name="phone-number"
                      placeholder="Your phone number"
                      id="xs_contact_phone"
                    />
                  </div>
                  <div class="col-lg-6">
                    <input
                      type="text"
                      class="form-control"
                      name="Subject"
                      placeholder="Subject"
                      id="xs_contact_subject"
                    />
                  </div>
                </div>

                <textarea
                  name="massage"
                  placeholder="Message"
                  id="x_contact_massage"
                  class="form-control message-box"
                  cols="30"
                  rows="10"
                ></textarea>

                <div class="xs-btn-wraper">
                  <input
                    type="submit"
                    class="xs-btn"
                    id="xs_contact_submit"
                    value="SEND MESSAGE"
                  />
                </div>
              </form>
            </div>
          </div>
          <!-- col end -->
          <div class="col-lg-5">
            <div class="contact-map">
              <div style="width: 100%">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0840806781634!2d106.77074681409859!3d-6.2526519954741495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f102508fe5ab%3A0x85fe0c1d0a91f664!2sJl.%20Bendi%20Besar%20No.186%2C%20RT.2%2FRW.10%2C%20Kby.%20Lama%20Utara%2C%20Kec.%20Kby.%20Lama%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012240!5e0!3m2!1sid!2sid!4v1633178575007!5m2!1sid!2sid"
                  width="600"
                  height="450"
                  style="border: 0"
                  allowfullscreen=""
                  loading="lazy"
                ></iframe>
              </div>
            </div>
          </div>
        </div>
        <!-- .row end -->
      </div>
      <!-- .container end -->
    </section>
    <!-- End contact section -->
    <!--  contact section -->
    <section class="xs-contact-infomation xs-contact-info-1">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 wow fadeInUp"
            data-wow-duration="0.5s"
            data-wow-delay="300ms">
            <div class="contact-info-group">
              <i class="icon-address"></i>
              <h4>Visit our office</h4>
              <span>Jalan Bendi Besar 186, Kebayoran Lama</span>
              <span class="text-color">DKI Jakarta, 12240, IDN</span>
            </div>
            <!-- .contact-info-group END -->
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp"
            data-wow-duration="1.0s"
            data-wow-delay="300ms">
            <div class="contact-info-group">
              <i class="icon-mail"></i>
              <h4>Mail us</h4>
              <a href="mailto:ptduniakomoditiindonesia@yahoo.com">ptduniakomoditiindonesia@yahoo.com</a>
              <!-- <a href="mailto:info@example.com">bdexample@gmail.com</a> -->
            </div>
            <!-- .contact-info-group END -->
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp"
            data-wow-duration="1.5s"
            data-wow-delay="300ms">
            <div class="contact-info-group">
              <i class="icon-call"></i>
              <h4>Call us</h4>
              <span><a href="tel:081260774365"
                                            >+6281260774365</a></span>
              <span class="text-color">9.am to 6pm</span>
            </div>
            <!-- .contact-info-group END -->
          </div>
        </div>
      </div>
      <!-- .container end -->
    </section>
  </div>
</template>