<template>
<div>
    <section class="xs-header-top v2">
	<div class="container">
	    <div class="row">
            <div class="col-lg-6 col-md-8">
                <div class="header-top-info">
                    <ul>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li><i class="icon icon-map-marker2"></i>Jalan Bendi Besar 186, Kebayoran Lama DKI Jakarta, 12240, IDN</li>
                        
                    </ul>
                </div>
            </div>

            <div class="col-lg-6 align-self-center col-md-4">
                <div class="header-top-social">
                    <ul>
                        <a href="mailto:ptduniakomoditiindonesia@yahoo.com" target="_blank"><li style="color: white"><i class="icon icon-envelope"></i> Email Us!</li></a>
                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
	</div>
</section>


<section class="xs-header-middle v2" style="padding: 0px 0;">
    <div class="row logo justify-content-between"  style="width: 100%;">
        <div class="col-md-12 d-flex justify-content-center" style="padding-right: 300px">
            <div class="col-md-2 ml-5 text-center p-0">
                <a href="/">
                    <img src="/assets/images/logo.png" alt="logo">
                </a>
            </div>
            <!-- <div class="typewriter">
  <h1>The cat and the hat.</h1>
</div> -->
            <b id="type" class="py-5 mx-auto" style="font-size: 30px; color: black; font-family: 'Poppins', sans-serif; font-weight: 600; float: right">Indonesian Commodity Specialist</b>
                <!-- <div class="typewriter"><b id="type" class="py-5 mx-auto" style="font-size: 30px; color: black; font-family: 'Poppins', sans-serif; font-weight: 400; float: right">Indonesian Commodity Specialist</b></div> -->
                
        </div>
    </div>
	<div class="container">
	    <div class="row">
	        
            <div class="col-md-12 align-self-center">
                <div class="logo">
                </div>
            </div>
        </div>
	</div>
</section>

<header class="xs-header-nav version-v2" style="padding: 15px 0;">
    <div class="container">
        <div class="row  menu-item">
            <div class="col-lg-12">
                <nav id="navigation1" class="navigation header-nav clearfix" style="display: flex; justify-content: center; flex-direction: column;">
                    <div class="nav-header">
                        <a  class="mobile-logo" href="/" style="padding-left: 10px;font-size: 15px; color: white; font-family: 'Poppins', sans-serif; font-weight: 400;">
                         <img src="/assets/images/logo.png" alt="" width="25"> <b class="ml-3">PT. Dunia Komoditi Indonesia</b>
                        </a>
                        <div class="nav-toggle"></div>
                    </div>

                    <div class="nav-menus-wrapper clearfix">
                        <ul class="nav-menu" style="width: 100%;">
                            <li class="active" ><a href="/">Home</a></li>
                            <!-- <li class="dropdown"><a href="#" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Products</a>
                               
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><router-link :to="{ name: 'greenbeans' }" class="dropdown-item">Green Beans Coffee</router-link> </li>
                                    <li><router-link :to="{ name: 'coconutsugar' }" class="dropdown-item">Coconut Sugar</router-link>
                                    </li>
                                </ul>
                            </li> -->
                            <li><a href="#">Products</a>
                                <ul class="nav-dropdown">
                                    <li><router-link :to="{ name: 'greenbeans' }">Green Beans Coffee</router-link> </li>
                                    <li><router-link :to="{ name: 'coconutsugar' }">Coconut Sugar</router-link></li>
                                    <li><router-link :to="{ name: 'spices' }">Spices</router-link></li>
                                    <!-- <li><a href="single-service-v1.html">single service one</a></li>
                                    <li><a href="single-service-v2.html">single service two</a></li> -->
                                </ul>
                            </li>
                            <li><router-link :to="{ name: 'blog' }">Blog</router-link>
                            </li>
                            <li>
                                <router-link :to="{name: 'contact'}">Contact Us</router-link>
                            </li>
                            <li><router-link :to="{name: 'about'}">About Us</router-link></li>
                            <!-- <li><a href="">How to order?</a></li> -->
                        </ul>
                        <div class="header-nav-right-info align-to-right">
                            <label><i class="icon icon-phone3"></i> <a style="color: white" href="tel:081260774365">+6281260774365</a></label>
                        </div>
                        
                    </div>

                </nav>
            </div>
        </div>
    </div>
</header>
</div>

</template>

<script>
  export default {
    methods: {
      onOver() {
        this.$refs.dropdown.visible = true;
      },
      onLeave() {
        this.$refs.dropdown.visible = false;
      }
    }
  }
</script>