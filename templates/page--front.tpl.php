<?php
   /**
    * @file
    * Default theme implementation to display a single Drupal page.
    *
    * Available variables:
    *
    * General utility variables:
    * - $base_path: The base URL path of the Drupal installation. At the very
    *   least, this will always default to /.
    * - $directory: The directory the template is located in, e.g. modules/system
    *   or themes/garland.
    * - $is_front: TRUE if the current page is the front page.
    * - $logged_in: TRUE if the user is registered and signed in.
    * - $is_admin: TRUE if the user has permission to access administration pages.
    *
    * Site identity:
    * - $front_page: The URL of the front page. Use this instead of $base_path,
    *   when linking to the front page. This includes the language domain or
    *   prefix.
    * - $logo: The path to the logo image, as defined in theme configuration.
    * - $site_name: The name of the site, empty when display has been disabled
    *   in theme settings.
    * - $site_slogan: The slogan of the site, empty when display has been disabled
    *   in theme settings.
    *
    * Navigation:
    * - $main_menu (array): An array containing the Main menu links for the
    *   site, if they have been configured.
    * - $secondary_menu (array): An array containing the Secondary menu links for
    *   the site, if they have been configured.
    * - $breadcrumb: The breadcrumb trail for the current page.
    *
    * Page content (in order of occurrence in the default page.tpl.php):
    * - $title_prefix (array): An array containing additional output populated by
    *   modules, intended to be displayed in front of the main title tag that
    *   appears in the template.
    * - $title: The page title, for use in the actual HTML content.
    * - $title_suffix (array): An array containing additional output populated by
    *   modules, intended to be displayed after the main title tag that appears in
    *   the template.
    * - $messages: HTML for status and error messages. Should be displayed
    *   prominently.
    * - $tabs (array): Tabs linking to any sub-pages beneath the current page
    *   (e.g., the view and edit tabs when displaying a node).
    * - $action_links (array): Actions local to the page, such as 'Add menu' on the
    *   menu administration interface.
    * - $feed_icons: A string of all feed icons for the current page.
    * - $node: The node object, if there is an automatically-loaded node
    *   associated with the page, and the node ID is the second argument
    *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
    *   comment/reply/12345).
    *
    * Regions:
    * - $page['help']: Dynamic help text, mostly for admin pages.
    * - $page['content']: The main content of the current page.
    * - $page['sidebar_first']: Items for the first sidebar.
    * - $page['sidebar_second']: Items for the second sidebar.
    * - $page['header']: Items for the header region.
    * - $page['footer']: Items for the footer region.
    *
    * @see template_preprocess()
    * @see template_preprocess_page()
    * @see template_process()
    */
   ?>

<div id="fullpage">

  <section class="section home-section">
  <div class='container animatedParent' data-sequence='500'>
    <?php if ($logo): ?>
      <div id="logo" class="animated growIn" data-id='1'>
        <a class="page-logo" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
      </div>
    <?php endif; ?>
    <?php if ($page['home_slide']): ?>
    <div class="home-content animated bounceInDown" data-id='2'>
    <?php print render($page['home_slide']); ?>
    </div>
    <?php endif; ?>
    <a href="#secondPage" class='nav-btn animated bounceInUp' data-id='3'></a>
  </section>

  <section class="section story-section">
  <div class="section-content">
    <?php if ($page['content_slide1']): ?>
      <?php print render($page['content_slide1']); ?>
    <?php endif; ?>
  </div>
  <a href="#thirdPage" class='nav-btn animated bounceInUp'></a>
  </section>

  <section class="section story-section">
  <div class="section-content">
    <?php if ($page['content_slide2']): ?>
      <?php print render($page['content_slide2']); ?>
    <?php endif; ?>
  </div>
  <a href="#fourthPage" class='nav-btn animated bounceInUp'></a>
  </section>

  <section class="section story-section">
  <div class="section-content">
    <?php if ($page['content_slide3']): ?>
      <?php print render($page['content_slide3']); ?>
    <?php endif; ?>
  </div>
  <a href="#fifthPage" class='nav-btn animated bounceInUp'></a>
  </section>

  <!-- <section class="section">
  <div class="section-content">
    <figure class="animated fadeInDownShort"><img src="http://geeklabel-compucorp.co.nf/themes/geeklabel/images/db-img.png" alt=""></figure>
    <p class="animated fadeInUpShort">Some agencies love <span>design,</span> but don’t know how to build</p>
  </div>
  <a href="#3rdPage" class='nav-btn animated bounceInUp'>Third section</a>
  </section> -->

  <section class="section services-section">
    <div class="about-section container">
      <h2 class="animated fadeInDownShort">Services</h2>
      <ul class="row ul-reset txt-center animated fadeInUpShort">
        <li class="col col-3">
          <figure><img src="http://geeklabel-compucorp.co.nf/themes/geeklabel/images/icon-web-dev.png" alt=""/></figure>
          <p>Web Development</p>
        </li>
        <li class="col col-3">
          <figure><img src="http://geeklabel-compucorp.co.nf/themes/geeklabel/images/icon-brush.png" alt=""/></figure>
          <p>Design</p>
        </li>
        <li class="col col-3">
          <figure><img src="http://geeklabel-compucorp.co.nf/themes/geeklabel/images/icon-brand.png" alt=""/></figure>
          <p>Branding</p>
        </li>
        <li class="col col-3">
          <figure><img src="http://geeklabel-compucorp.co.nf/themes/geeklabel/images/icon-research.png" alt=""/></figure>
          <p>UX Research</p>
        </li>
      </ul>
    </div>
    <a href="#sixthPage" class='nav-btn animated bounceInUp'></a>
  </section>

  <section class="section client-section">
    <h2 class="animated fadeInDownShort">Clients</h2>
  <div class="slide animated fadeInUpShort large-screen-only">
  
    <ul class="row ul-reset txt-center">
      <li class="col col-4">
        <figure><img src="http://geeklabel-compucorp.co.nf/themes/geeklabel/images/logo-pg.png" alt=""/></figure>
      </li>
      <li class="col col-4">
        <figure><img src="http://geeklabel-compucorp.co.nf/themes/geeklabel/images/logo-vs.png" alt=""/></figure>
      </li>
      <li class="col col-4">
        <figure><img src="http://geeklabel-compucorp.co.nf/themes/geeklabel/images/logo-phse.png" alt=""/></figure>
      </li>
    </ul>

  </div>
<div class="slide animated fadeInUpShort large-screen-only">
<ul class="row ul-reset txt-center">
      <li class="col col-4">
        <figure><img src="http://geeklabel-compucorp.co.nf/themes/geeklabel/images/logo-pg.png" alt=""/></figure>
      </li>
      <li class="col col-4">
        <figure><img src="http://geeklabel-compucorp.co.nf/themes/geeklabel/images/logo-vs.png" alt=""/></figure>
      </li>
      <li class="col col-4">
        <figure><img src="http://geeklabel-compucorp.co.nf/themes/geeklabel/images/logo-phse.png" alt=""/></figure>
      </li>
    </ul>
</div>

<div class="slide animated fadeInUpShort mobile-only">
<ul class="row ul-reset txt-center">
      <li>
        <figure><img src="http://geeklabel-compucorp.co.nf/themes/geeklabel/images/logo-pg.png" alt=""/></figure>
      </li>
  </ul>
</div>
<div class="slide animated fadeInUpShort mobile-only">
<ul class="row ul-reset txt-center">
      <li>
        <figure><img src="http://geeklabel-compucorp.co.nf/themes/geeklabel/images/logo-vs.png" alt=""/></figure>
      </li>
  </ul>
</div>
<div class="slide animated fadeInUpShort mobile-only">
<ul class="row ul-reset txt-center">
      <li>
        <figure><img src="http://geeklabel-compucorp.co.nf/themes/geeklabel/images/logo-phse.png" alt=""/></figure>
      </li>
  </ul>
</div>
<a href="#seventhPage" class='nav-btn animated bounceInUp'></a>
  </section>


  <section class="section map-section">
    <h2 class="animated fadeInDownShort">How to find us</h2>
  <div id="map" class="animated fadeInUpShort"></div>
  <a href="#lastPage" class='nav-btn animated bounceInUp'></a>
  </section>

  <section class="section contact-section">
    <div class="container">
    <h2 class="animated fadeInDownShort">Contact</h2>
    <div class="contact-form animated fadeInUpShort">
      <input type="text" placeholder="Name"/>
      <input type="text" placeholder="Email"/>
      <textarea name="" placeholder="Message" id="" cols="30" rows="10"></textarea>
      <button class="btn btn-primary">Send Message!</button>
      <p class="txt-center">Or phone on: 01923 220121</p>
    </div>
    <a href="#firstPage" class='nav-btn animated bounceInUp'></a>
    </div>
  </section>

</div>


<script type="text/javascript" src="http://localhost/geek-label/themes/geeklabel/node_modules/fullpage.js/dist/jquery.fullpage.min.js?oxaziw"></script>


<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#fullpage').fullpage({

            anchors: ['firstPage', 'secondPage', 'thirdPage', 'fourthPage', 'fifthPage', 'sixthPage','seventhPage', 'lastPage'],
            menu: '#menu',
            css3: true,
            scrollingSpeed: 400
        });


    });
</script>
 <script>
// This example adds a marker to indicate the position of Bondi Beach in Sydney,
      // Australia.
      function initMap() {
        // Styles a map in night mode.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 51.4977836, lng: -0.1522502},
          zoom: 12,
          styles: [
            {
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#f5f5f5"
                }
              ]
            },
            {
              "elementType": "labels.icon",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#616161"
                }
              ]
            },
            {
              "elementType": "labels.text.stroke",
              "stylers": [
                {
                  "color": "#f5f5f5"
                }
              ]
            },
            {
              "featureType": "administrative.land_parcel",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#bdbdbd"
                }
              ]
            },
            {
              "featureType": "poi",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#eeeeee"
                }
              ]
            },
            {
              "featureType": "poi",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#757575"
                }
              ]
            },
            {
              "featureType": "poi.park",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#e5e5e5"
                }
              ]
            },
            {
              "featureType": "poi.park",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#9e9e9e"
                }
              ]
            },
            {
              "featureType": "road",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#ffffff"
                }
              ]
            },
            {
              "featureType": "road.arterial",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#757575"
                }
              ]
            },
            {
              "featureType": "road.highway",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#dadada"
                }
              ]
            },
            {
              "featureType": "road.highway",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#616161"
                }
              ]
            },
            {
              "featureType": "road.local",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#9e9e9e"
                }
              ]
            },
            {
              "featureType": "transit.line",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#e5e5e5"
                }
              ]
            },
            {
              "featureType": "transit.station",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#eeeeee"
                }
              ]
            },
            {
              "featureType": "water",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#c9c9c9"
                }
              ]
            },
            {
              "featureType": "water",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#9e9e9e"
                }
              ]
            }
          ]
        });

        

        var contentString = '<div id="content">'+

            '<div id="bodyContent">'+
            '<p><b>Geek Label</b></p>' +
            '<p>4th Floor </p>' +
            '<p>27 - 33 Bethnal Green Road</p>' +
            '<p>Shoreditch</p>' +
            '<p>London</p>' +
            '<p>E1 6LA</p>' +
            '</div>';

        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });

        var image = 'http://geeklabel-compucorp.co.nf/themes/geeklabel/images/map-marker.png';
        var beachMarker = new google.maps.Marker({
          position: {lat: 51.4977836, lng: -0.1522502},
          map: map,
          icon: image
        });
        infowindow.open(map, beachMarker);
        beachMarker.addListener('click', function() {
          
        });

      }
    </script>
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMXAD4SEPfMU1j8Ye51_7I8dxJQZ_pM94&callback=initMap">
    </script>