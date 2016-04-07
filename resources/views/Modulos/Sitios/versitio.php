<?php include_once ('/../../Templates/Frontend/head.php') ?>
<?php include_once ('/../../Templates/Frontend/header.php') ?>

<style>
@charset "UTF-8";

* {
  /* font-family: 'Source Sans Pro', 'Verdana'; */
}
body{background-color: white !important}
/*p, a, strong {
  font-size: 120%;
}*/
h1, h2, h3, h4, h5, h6 {
  font-family: 'Luxury', 'Luxury Gold';
}

a, a:hover, a:active, a:visited {
  color: #7eca47;
}

a:hover {
  text-decoration: underline;
}

html {
  overflow-x: hidden;
}

html, body {
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  z-index: -2;
}

body {
  background-image: url("https://dieselcore.com/resources/images/layout/bigbg.png");
  background-attachment: fixed;
  background-size: cover !important;
  background-repeat: no-repeat;
  width: 100% !important;
  height: 100% !important;
  font-family: 'Fira Sans', sans-serif;
}

body.dark {
  background-image: none;
  background-color: #282425;
  color: #ede9e9;
}

body.dark h1, body.dark h2, body.dark h3, body.dark h4, body.dark h5, body.dark h6, body.dark label {
  color: #ede9e9;
}

footer {
  position: fixed;
  width: 100%;
  bottom: 0;
  left: 0;
}

main {
  position: relative;
}

i {
  font-style: normal;
}

/* Foundation Modifiers */
.loose {
  max-width: 100% !important;
}

.collapse {
  margin: 0;
  padding: 0;
}

.columns img, img {
  max-width: 100%;
  /*  max-height: 100%;*/
}

.row .row {
  width: 100%;
  margin-left: auto;
  margin-right: auto;
  margin-top: 0;
  margin-bottom: 0;
  max-width: 62.5rem;
}

.breadcrumbs {
  border: none;
  background: none;
  padding: 0.5625rem 0 0.5625rem;
}

.breadcrumbs > * {
  color: #7eca47;
}

.breadcrumbs a {
  color: #7eca47;
}

.breadcrumbs > *:before {
  content: "❯";
  color: #AAAAAA;
  margin: 0 0.55rem;
  position: relative;
  top: 0px;
  font-size: 0.7rem;
}

.right-off-canvas-menu {
  bottom: auto;
  height: 100vh;
}

/* End Foundation Modifiers */
/* Masterslider Modifiers */
.ms-view {
  background: none;
}

/* End Masterslider Modifiers */
.height-full {
  height: 100vh;
}

.height-100 {
  height: 100%;
}

.no-margin {
  margin: 0;
}

.no-padding {
  padding: 0;
}

.nav-strip {
  background: linear-gradient(180deg, #ffffff 0%, #dfdfdf 90%) repeat scroll 0 0 transparent;
  border-top: 2px solid #757575;
  /*  -webkit-box-shadow: 0px 5px 75px 35px #939393;
    -moz-box-shadow: 0px 5px 75px 35px #939393;
    box-shadow: 0px 5px 75px 35px #939393;*/
  min-height: 116px;
  width: 100%;
  padding: 0.7rem;
  z-index: 100;
}

/*.nav-strip:before {
  display: block;
  width: 100%;
  position: absolute;
  height: 10px;
  top: 0px;
  left: 0px;
  right: 0px;
  z-index: -1;
  -webkit-box-shadow: 0px 5px 75px 35px #939393;
  -moz-box-shadow: 0px 5px 75px 35px #939393;
  box-shadow: 0px 5px 75px 35px #939393;
}*/
.footer-strip {
  border-top: 2px solid #7eca47;
  height: 42px;
  background-color: #000000;
  color: #FFFFFF;
}

.footer-strip ul {
  margin: 0;
  padding: 0;
  list-style: none outside none;
}

.footer-strip ul li {
  float: left;
  margin: 0 0.5rem 0 0;
  padding: 0.3rem 0.7rem;
}

.footer-strip ul li:last-child {
  margin-right: 0;
}

.footer-strip ul li a {
  font-family: 'Luxury', 'Luxury Gold';
  font-size: 0.8rem;
  line-height: 1;
}

.product-array {
  margin-top: -2rem;
  top: -0.2rem;
}

.product-array-button {
  border-width: 1px;
  border-style: solid;
  border-color: #7eca47;
  box-shadow: 0 1px 5px #333333;
  -webkit-box-shadow: 0 1px 5px #333333;
  -moz-box-shadow: 0 1px 5px #333333;
  position: relative;
  background-repeat: no-repeat;
  cursor: pointer;
  display: inline-block;
  text-decoration: none !important;
  width: 94px;
  height: 129px;
  background-color: #282425;
  text-align: center;
  color: #7ECA47;
  transition: all 0.1s ease-in-out 0s;
  -webkit-transition: all 0.1s ease-in-out;
  -moz-transition: all 0.1s ease-in-out;
  -o-transition: all 0.1s ease-in-out;
  font-family: 'Luxury', 'Luxury Gold';
  line-height: 4.5rem;
  top: 0;
}

.product-array-button:hover {
  top: -8px;
}

.product-array-button > div {
  font-size: 75px;
  text-align: center;
  width: 100%;
}

.product-array-button > span {
  display: block;
  font-size: 17px;
  line-height: 1.2em;
  margin-top: 4px;
  text-align: center;
  padding-top: 4px;
}

h1.home-slider, h2.home-slider, h3.home-slider, h4.home-slider, h5.home-slider, h6.home-slider {
  line-height: 0.9;
}

h2.home-slider {
  font-size: 4.3rem;
}

h4.home-slider {
  font-size: 1.3rem;
  padding-left: 0.3rem;
}

.home-slider-description {
  top: 10%;
}

.green-text {
  color: #7eca47 !important;
}

.luxury, .dc-font {
  font-family: 'Luxury', 'Luxury Gold';
}

.fira, .body-font {
  font-family: 'Fira Sans', Verdana;
}

.icon:before {
  font-size: 260% !important;
}

#desktop-cart {
  position: absolute;
  top: 20px;
  right: 35px;
  z-index: 70;
}

#desktop-cart h1, #desktop-cart h2, #desktop-cart h3, #desktop-cart h4, #desktop-cart h5, #desktop-cart h6 {
  font-weight: normal;
  margin: 0;
  line-height: 1.2;
  letter-spacing: 0.05rem;
}

#desktop-cart h5, #desktop-cart h5 a {
  font-size: 1.14rem;
}

#desktop-cart h6, #desktop-cart h6 a {
  font-size: 0.8rem;
}

.f-dropdown {
  border: 1px solid #80C950;
}

.f-dropdown li a, .f-dropdown li span {
  color: #3a3838;
  text-decoration: none;
  font-size: 0.65rem;
  font-weight: bold;
  letter-spacing: 0.02rem;
  padding: 0.5rem;
}

.f-dropdown li {
  overflow: auto;
}

.f-dropdown li:nth-child(odd) {
  background-color: #bfe6a5;
}

.f-dropdown li:nth-child(even) {
  background-color: #7ecc48;
}

.f-dropdown li span:last-of-type {
  float: right;
}

.f-dropdown li span, .f-dropdown li a {
  display: inline-block;
}

.f-dropdown:before, .f-dropdown:after {
  display: none !important;
}

.divider {
  background-color: #7eca47;
  height: 4px;
  display: block;
  content: '';
  margin: 1.7em 0;
}

.divider.length-10 {
  width: 10%;
}

.divider.length-20 {
  width: 20%;
}

.divider.length-30 {
  width: 30%;
}

.divider.length-40 {
  width: 40%;
}

.divider.length-50 {
  width: 50%;
}

.divider.length-60 {
  width: 60%;
}

.divider.length-70 {
  width: 70%;
}

.divider.length-80 {
  width: 80%;
}

.divider.length-90 {
  width: 90%;
}

.divider.length-100 {
  width: 100%;
}

/* Buttons */
.button, .button:active, .button:visited {
  background-color: #85c34a;
  text-decoration: none !important;
  padding: 0.8em 3.8em;
  font-size: 0.85rem;
  font-family: Fira Sans;
  color: #FFFFFF;
}

.button:hover {
  background-color: #65a32a;
}

.button.alert, .button.alert:active, .button.alert:visited {
  background-color: #e74c3c;
}

.button.info, .button.info:active, .button.info:visited {
  background-color: #2c3e50;
  color: #FFFFFF;
}

.button-nav, .button-nav:active, .button-nav:visited {
  border: 1px solid #80c850;
  box-shadow: 0 1px 5px #333333;
  min-width: 165px;
  color: #7eca47;
  text-decoration: none;
  background-color: #000000;
  padding: 4px 0px;
  font-family: 'Luxury', 'Luxury Gold';
  font-size: 0.7rem;
  line-height: 1.1;
  display: inline-block;
  text-align: center;
}

.button-nav:hover {
  text-decoration: none;
  color: #7eca47;
  background-color: #000000;
}

.button-nav.button-left {
  border-left: 0;
}

.button-nav.button-top {
  position: relative;
  top: -0.3rem;
  margin-top: 0;
  margin-right: 1.5rem;
}

.button-nav.button-top:last-of-type {
  margin-right: 0;
}

.button-nav.button-right {
  text-align: right;
  padding: 8px 16px;
  right: -0.1rem;
  min-width: 185px;
}

/* End Buttons */
/* Tabs */
.tabs dd > a, .tabs .tab-title > a {
  outline: none;
  display: block;
  background-color: transparent;
  color: #222222;
  padding: 1rem 2rem;
  font-family: inherit;
  font-size: 1rem;
  text-decoration: none;
  font-weight: bold;
  letter-spacing: 0.05rem;
  border: 1px solid #cccccc;
}

.tabs dd.active:first-of-type a, .tabs .tab-title.active:first-of-type a, .tabs dd:first-of-type a, .tabs .tab-title:first-of-type a {
  border-bottom: none;
}

.tabs dd:last-of-type a, .tabs .tab-title:last-of-type a {
  border-top: none;
}

.tabs dd.active a, .tabs .tab-title.active a {
  background-color: transparent;
  color: #222222;
  border-left: 4px solid #7ECA47;
  position: relative;
}

.tabs dd.active a:before, .tabs .tab-title.active a:before {
  display: block;
  content: '';
  position: absolute;
  top: 20px;
  left: 0px;
  border-right: 8px solid transparent;
  border-top: 8px solid transparent;
  border-bottom: 8px solid transparent;
  border-left: 8px solid #7ECA47;
  height: 15px;
  width: 15px;
}

.tabs-wrapper {
  border: 1px solid #cccccc;
}

.tabs-content {
  padding: 1.2em;
}

@media only screen and (min-width: 40.063em) {
  .tabs-content {
    width: 80%;
    float: left;
    padding: 0 1.2em;
  }

  .tabs dd > a, .tabs .tab-title > a:last-of-type {
    border-bottom: none;
  }

  .tabs .tab-title.active:first-of-type a {
    border-top: none;
    border-bottom: none;
  }

  .tabs .tab-title.active:last-of-type a {
    border-top: 1px solid #cccccc;
    border-bottom: none;
  }

  .tabs dd.active a, .tabs .tab-title.active a {
    background-color: transparent;
    color: #222222;
    border-left: 4px solid #7ECA47;
    border-right: 1px solid #ffffff;
    border-top: 1px solid #cccccc;
    position: relative;
  }

  .tabs dd.active a:before, .tabs .tab-title.active a:before {
    display: block;
    content: '';
    position: absolute;
    top: 20px;
    left: 0px;
    border-right: 8px solid transparent;
    border-top: 8px solid transparent;
    border-bottom: 8px solid transparent;
    border-left: 8px solid #7ECA47;
    height: 15px;
    width: 15px;
  }

  .tabs dd > a, .tabs .tab-title > a {
    outline: none;
    display: block;
    background-color: transparent;
    color: #222222;
    padding: 1rem 2rem;
    font-family: inherit;
    font-size: 1rem;
    text-decoration: none;
    font-weight: bold;
    letter-spacing: 0.05rem;
    border-right: 1px solid #cccccc;
    border-top: 1px solid #cccccc;
    border-left: none;
  }

  .tabs dd:first-of-type > a, .tabs .tab-title:first-of-type > a {
    border-top: none;
  }
}
/* End Tabs */
/* Forms */
body.dark div.fancy-select div.trigger, body.dark div.fancy-select div.trigger.open, body.dark div.fancy-select ul.options, body.dark div.fancy-select ul.options li, body.dark div.fancy-select ul.options li.selected {
  background-color: #333333;
}

body.dark div.fancy-select ul.options li.hover, body.dark div.fancy-select ul.options li.selected {
  background-color: #7eca47;
  color: #FFFFFF !important;
}

.dark-form textarea, .dark-form input:not([type="submit"]) {
  color: #7eca47;
  box-shadow: none;
  background-color: #333333;
  border: none;
  outline: none;
  font-size: 0.8rem;
}

.dark-form textarea {
  resize: vertical;
}

.dark-form h6 {
  border-bottom: 2px solid #46493f;
  letter-spacing: 0.18em;
  font-size: 0.9rem;
  margin-bottom: 1em;
  overflow: auto;
}

.dark-form h6 a.explain {
  font-size: 0.7rem;
  float: right;
  margin-top: -4px;
  letter-spacing: 0.12em;
}

.explain i {
  font-size: 0.9rem;
}

.dark-form label {
  padding-top: 0.5em;
  font-size: 0.7rem;
  letter-spacing: 0.18em;
}

/* Password Toggles */
::-ms-reveal,
::-ms-clear {
  display: none !important;
}

.hideShowPassword-toggle, .hideShowPassword-toggle:active, .hideShowPassword-toggle:visited {
  background: transparent;
  border: 0;
  border-radius: 0.25em;
  color: #EDE9E9;
  cursor: pointer;
  font-size: 0.75em;
  font-family: 'Fira Sans', Verdana;
  margin-right: 0.5em;
  padding: 0.5em;
  text-transform: uppercase;
  -moz-appearance: none;
  -webkit-appearance: none;
}

.hideShowPassword-toggle:hover,
.hideShowPassword-toggle:focus {
  background-color: #7eca47;
  color: #EDE9E9;
  outline: transparent;
}

/* End Forms */
.bordered {
  padding: 1.8em;
  border-width: 2px;
  border-style: solid;
  border-color: #46493f;
  border-radius: 3px;
}

body.dark ul.side-nav a.active:before, body.dark ul.side-nav a:hover.active:before {
  border-color: #282425;
  border-style: solid;
  border-width: 7px;
  box-shadow: 2px 2px 0 0 #46493f;
  content: "";
  display: block;
  position: absolute;
  right: -6px;
  top: 45%;
  transform: rotate(-44deg);
}

body.dark ul.side-nav a:hover.active {
  color: #7eca47;
  border-color: #7eca47;
}

body.dark ul.side-nav a:hover {
  border: 2px solid #46493f;
  color: #7eca47;
}

body.dark ul.side-nav a:hover.active:before {
  box-shadow: 2px 2px 0 0 #7eca47;
}

body.dark ul.side-nav a.active {
  border: 2px solid #46493f;
}

body.dark ul.side-nav a {
  color: #7eca47;
  display: block;
  font-family: "Fira Sans",Verdana;
  font-size: 0.7rem;
  letter-spacing: 0.12em;
  height: 130px;
  width: 145px;
  position: relative;
  text-decoration: none;
  text-transform: uppercase;
  padding: 3em 0;
  border: 2px solid #282425;
  border-radius: 3px;
}

body.dark ul.side-nav a:visited, body.dark ul.side-nav a:active {
  color: #7eca47;
}

body.dark ul.side-nav li {
  display: inline-block;
}

body.dark ul.side-nav li {
  color: #7eca47;
}

body.dark ul.side-nav a i {
  border: 2px solid;
  border-radius: 100%;
  display: inline-block;
  font-size: 2em;
  font-style: normal !important;
  height: 40px;
  line-height: 1.15;
  padding: 4px 8px;
  width: 41px;
  text-align: center;
  margin-bottom: 5px;
}

.product-description h1 {
  font-size: 150%;
}

.product-currency {
  vertical-align: text-top;
  font-size: 1rem;
  display: inline-block;
  padding-top: 5px;
}

.product-each {
  vertical-align: text-bottom;
  font-size: 0.6rem;
  display: inline-block;
  letter-spacing: 0.03rem;
  padding-bottom: 5px;
  font-weight: bold;
  color: #999999;
}

.quick-buy-description {
  padding-top: 2rem;
}

p.quick-buy-controls, a.quick-buy-controls, strong.quick-buy-controls, .quick-buy-controls {
  font-family: 'Luxury', 'Luxury Gold';
  font-size: 140%;
}

a.quick-add {
  font-family: 'Luxury', 'Luxury Gold';
  font-size: 230%;
  text-decoration: none;
}

a.quick-add:hover {
  color: #FFFFFF;
  text-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
}

/* Page specific Classes/IDs */
main#full .columns img {
  max-height: 100%;
}

main#full {
  /* height: calc(100vh - 165px); */
  height: 100vh;
  overflow-x: hidden;
}

ul.product-category li {
  padding-bottom: 5rem;
}

ul.product-category li p {
  /*  font-size: 0.7rem;*/
  margin-top: 1.3rem;
}

ul.product-category li p strong {
  text-transform: uppercase;
}

#login-register {
  position: fixed;
  bottom: 200px;
  right: -2px;
}

@media only screen and (min-width: 40.063em) {
  #benwink_container {
    position: absolute !important;
    right: 0;
    bottom: 162px;
    z-index: 0;
  }
}
/* End Page specific Classes/IDs */
/* Fancy Select */
div.fancy-select div.trigger, div.fancy-select div.trigger.open, div.fancy-select ul.options, div.fancy-select ul.options li, div.fancy-select ul.options li.selected {
  border: none;
  background: #282324;
  color: #7eca47 !important;
  font-weight: normal;
  padding: 8px;
  width: 100%;
  box-shadow: 0px 0px 0px 0px transparent;
  border-radius: 0;
  outline: none;
}

div.fancy-select ul.options li, div.fancy-select ul.options li.selected {
  font-weight: normal !important;
  font-size: 0.8rem !important;
  padding-left: 8px;
}

div.fancy-select div.trigger:after {
  top: 14px;
  border: 8px solid transparent;
  border-top-color: #7eca47;
}

div.fancy-select ul.options.open {
  top: 35px;
  overflow-x: hidden;
  padding-left: 0px;
}

div.fancy-select ul.options {
  /* padding-left: 0px; */
}

div.fancy-select ul.options li.hover, div.fancy-select ul.options li.selected {
  background-color: #7eca47;
  color: #FFFFFF !important;
}

/*
########## CUSTOM ANIMATIONS ##########
*/
@-webkit-keyframes desktopCartMenu {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-20px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
  }
}
@keyframes desktopCartMenu {
  0% {
    opacity: 0;
    transform: translateY(-20px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}
.f-open-dropdown {
  -webkit-animation-name: desktopCartMenu;
  animation-name: desktopCartMenu;
  -webkit-animation-duration: 0.4s;
  animation-duration: 0.4s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  -webkit-animation-timing-function: ease-in-out;
  animation-timing-function: ease-in-out;
}

/* Transition Delays */
/* To be used in conjunction with animate.css */
.animated.delay-one {
  -webkit-animation-delay: 1s !important;
  animation-delay: 1s !important;
}

.animated.delay-one-and-half {
  -webkit-animation-delay: 1.5s !important;
  animation-delay: 1.5s !important;
}

.animated.delay-two {
  -webkit-animation-delay: 2s !important;
  animation-delay: 2s !important;
}

.animated.delay-two-and-half {
  -webkit-animation-delay: 2.5s !important;
  animation-delay: 2.5s !important;
}

.animated.delay-three {
  -webkit-animation-delay: 3s !important;
  animation-delay: 3s !important;
}

.animated.delay-three-and-half {
  -webkit-animation-delay: 3.5s !important;
  animation-delay: 3.5s !important;
}

.animated.delay-four {
  -webkit-animation-delay: 4s !important;
  animation-delay: 4s !important;
}

.animated.delay-four-and-half {
  -webkit-animation-delay: 4.5s !important;
  animation-delay: 4.5s !important;
}

.animated.delay-five {
  -webkit-animation-delay: 5s !important;
  animation-delay: 5s !important;
}

.animated.delay-five-and-half {
  -webkit-animation-delay: 5.5s !important;
  animation-delay: 5.5s !important;
}

/*
########## MEDIA QUERIES ##########
*/
/* SMALL & UP  MEDIA QUERIES */
@media only screen {
  .nav-strip {
    min-height: 50px;
    background-color: #000000;
  }
}
/* MEDIUM & UP SCREEN QUERIES */
@media only screen and (min-width: 40.0625em) {
  .nav-strip {
    background-color: inherit;
  }
}
/* LARGE & UP SCREEN QUERIES */
@media only screen and (min-width: 64.0625em) {
  .nav-strip {
    background-color: inherit;
  }
}


</style>

<!--
<html lang="en">
[if lt IE 9]>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.min.js"></script>
  <![endif]

<head>
    <meta charset="UTF-8" />
    <title>Product Page - DieselCore</title>
</head>

<body>
  -->
<!-- Off Canvas Wrap Begins -->
<div class="off-canvas-wrap" data-offcanvas>
<div class="inner-wrap">

<!-- Mobile Nav -->
<aside class="right-off-canvas-menu">
  <ul>
    <li><a href="#">Test link</a></li>
    <li><a href="#">Test link</a></li>
  </ul>
</aside>
<!-- End mobile nav -->

    <main class="row loose">

        
      
        

        <!-- spacer div -->
        <div class="row">
            <div class="small-12 columns" style="height: 3rem;"></div>
        </div>
        <!-- End spacer div -->

        <section class="row">
          
          <!-- breadcrumbs -->
              <div class="large-12 columns">
                            <ul class="breadcrumbs" role="menubar" aria-label="breadcrumbs">
                <li role="menuitem"><a href="#">Home</a></li>
                <li role="menuitem" class="unavailable" role="button" aria-disabled="true"><a href="#">Fuel Injectors</a></li>
              </ul>
              </div>
              <!-- end breadcrumbs -->

            <!-- Product Description Column -->
            <div class="medium-5 medium-push-7 columns">
             
              <!-- Product description -->
              <div class="product-description">
              <h1>Ford 6.0L Powerstroke Fuel Injection Control Module (FICM)</h1>
                <h2 style="font-size: 300%"><span class="product-currency">$</span>50<span class="luxury product-each">/ EACH</span></h2>
                <hr>
              <div class="row">
              <div class="small-5 columns">
                <small class="luxury" style="letter-spacing: 0.03rem; font-weight: bold;">UNIT QUANTITY</small>
                <input type="number" min="0" max="20" pattern="[0-9]*" value="0" />
              </div>
              <div class="small-7 columns" style="padding-top: 2rem;">
                <a href="#" class="button round">ADD TO CART</a>
              </div>
              </div>
                
              </div>
              <!-- End product description -->
            </div>
          <!-- End product description column -->
          
                      <!-- Product slider column -->
            <div class="medium-7 medium-pull-5 columns">
            
              <!-- template -->
<div class="ms-showcase2-template">
<!-- masterslider -->
<div class="master-slider ms-skin-default" id="masterslider">

<!-- slide 1 -->
<div class="ms-slide">
<!--<a class="fancybox" href="http://cowtank.com/dc_assets/masterslider/images/PARTS_17.png">-->
<img src="http://cowtank.com/dc_assets/fancybox/blank.gif" data-src="http://cowtank.com/dc_assets/masterslider/images/PARTS_17.png" alt="lorem ipsum dolor sit"/> 
<!--</a>-->
<img class="ms-thumb" src="http://cowtank.com/dc_assets/masterslider/images/PARTS_17.png" alt="thumb" />
</div>

<!-- slide 2 -->
<div class="ms-slide">
<img src="http://cowtank.com/dc_assets/fancybox/blank.gif" data-src="http://cowtank.com/dc_assets/masterslider/images/PARTS_3.png" alt="lorem ipsum dolor sit"/> 
<img class="ms-thumb" src="http://cowtank.com/dc_assets/masterslider/images/PARTS_3.png" alt="thumb" />
</div>

</div>
<!-- end of masterslider -->
</div>
<!-- end of template -->      
              
            </div>
            <!-- End Product slider column -->
          
          <!-- Tabs section -->
          <section class="large-12 columns">
           <div class="tabs-wrapper clearfix">
          <ul class="tabs vertical" data-tab data-options="deep_linking:true">
  <li class="tab-title active"><a href="#summary">SUMMARY</a></li>
  <li class="tab-title"><a href="#fitment">FITMENT</a></li>
  <li class="tab-title"><a href="#questions">QUESTIONS?</a></li>
</ul>
<div class="tabs-content">
  <div class="content active" id="summary">
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.<br><br> Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.<br><br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.<br><br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
  </div>
  <div class="content" id="fitment">
    <h6>THIS PRODUCT FITS...</h6>
    <br />
    <ul>
      <li>Fitment YMM data</li>
      <li>Fitment YMM data</li>
      <li>Fitment YMM data</li>
      <li>Fitment YMM data</li>
      <li>Fitment YMM data</li>
    </ul>
  </div>
  <div class="content" id="questions">
    <p>
    <form class="dark-form">
<!--      <h5 class="text-center">YOU MUST <a href="#">LOG IN</a> TO ASK A QUESTION.</h5>-->
      <label for="productQuestion"><strong>What is your question?</strong></label>
      <textarea name="productQuestion" id="productQuestion" placeholder="Please enter your question about {product name} here..." rows="7"></textarea>
      <input type="hidden" name="userEmail" />
      <input type="hidden" name="userIdentity" />
      <input type="hidden" name="inquiryURL" />
      <input class="button round" type="submit" value="Submit" />
    </form>
    </p>
  </div>
</div>
          </div>
          </section>
          <!-- End tabs sections -->
        </section>
    </main>
  
        <!-- spacer div -->
        <div class="row">
            <div class="small-12 columns" style="height: 18em;"></div>
        </div>
        <!-- End spacer div -->

     
  
<!-- Off Canvas Wrap Ends -->
</div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

 <?php
// 
// 
// $siti = $sitio; 
//                        $count = 0;
//                        foreach ($siti as $sitio):
//                            if ($count++ == 12)
//                                break;
//                            
                            
                            ?>
<!--                        <figure class="col-xs-12 col-sm-6 col-md-4">
                            <div class="contenedor-imgX fxX">
                                <div class="imgback img-contenido" style=" background-image: url('<?php echo asset("media/img/sitios/".$sitio->img_ruta) ?>');">   
                                <div class="mascara">
                                    <h2><?php echo ($sitio->sit_nombre) ?></h2>
                                    <p><?php echo ((strlen($sitio->sit_descripcion) > 100) ? substr(($sitio->sit_descripcion), 0, 200) . " ..." : ($sitio->sit_descripcion)) ?></p>
                                    <a class="link" href="<?php echo url("sitios/sitios/versitio/" . $sitio->sit_id) ?>">Leer mas</a>
                                </div>
                            </div>
                        </figure>-->
                         <?php// endforeach; ?>



<div class="container">
                    <div class="row contenido">
                        
                            <figure class="col-xs-12 col-sm-6 col-md-4">
                                <div class="contenedor-img fx2">  
                                    <img class="img-contenido img-responsive" src="" alt="Imagen" />  
                                    <div class="mascara">
                                        <h2><?php echo ($sitio->sit_nombre) ?></h2>
                                        <p><?php echo ((strlen($sitio->sit_descripcion) > 100) ? substr(($sitio->sit_descripcion), 0, 400) . " ..." : ($sitio->sit_descripcion)) ?></p>
                                        <a class="link" href="<?php echo url("sitios/sitios/indexx/" . $sitio->sit_id) ?>">Leer mas</a>
                                    </div>
                                </div>
                            </figure>
                       
                    </div>
                </div>


<script>
// Masterslider
    var slider = new MasterSlider();
     
    slider.control('arrows');  
    slider.control('thumblist' , {autohide:false ,dir:'h',arrows:false, align:'bottom', width:127, height:137, margin:5, space:5});
 
    slider.setup('masterslider' , {
        width:540,
        height: 600,
        space: 5,
        view:'scale',
        autoHeight: true,
        fillMode: "fit",
        mouse: false,
        keyboard: true,
        loop: true,
    });

// Initialize foundation
$(document).foundation();

// Fastclick
$(function() {
    FastClick.attach(document.body);
});

// Number
$("input[type=number]").number();

// Numble
/*$("input[type=number]").numble({
  debug: false,
  includeButtons: true,
  allowNegative: false,
  maxValue: undefined,
  minValue: 0,
  initialValue: 0,
  allowScroll: false,
  incrementText: ▲,
  decrementText: ▼,
  allowEdit: true
});*/

/*// FancyBox
	$(document).ready(function() {
				$(".fancybox").fancybox({
					fitToView	: true,
					width		: '75%',
					height		: '75%',
					autoSize	: false,
					closeClick	: false,
					openEffect	: 'elastic',
					closeEffect	: 'fade'
				});
			});*/


</script>

<?php include_once ('/../../Templates/Frontend/footer.php') ?>
<?php include_once ('/../../Templates/Frontend/foot.php') ?>

