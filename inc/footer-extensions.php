<?php
/**
 * Actions, filters, and template tags for footer.php
 *
 * @package AgriFlex
 */


/**
 * Register action hook: agriflex_before_footer
 *
 * Located in footer.php, just after the opening footer tag
 *
 * @since AgriFlex 2.0
 */
function agriflex_before_footer() {

  do_action( 'agriflex_before_footer' );

} // agriflex_before_footer

/**
 * Register action hook: agriflex_footer
 *
 * Located in footer.php, inside the wrap div
 *
 * @since AgriFlex 2.0
 */
function agriflex_footer() {

  do_action( 'agriflex_footer' );

} // agriflex_footer

/**
 * Register action hook: agriflex_after_footer
 *
 * Located in footer.php, just before the closing footer tag
 *
 * @since AgriFlex 2.0
 */
function agriflex_after_footer() {

  do_action( 'agriflex_after_footer' );

} // agriflex_after_footer

/**
 * Determines which agency the site belongs to and builds
 * the required footer.
 *
 * @since AgriFlex 2.0
 */
function agriflex_show_footer() {

  do_action( 'footer_col_1' );

  do_action( 'footer_col_2' );

  do_action( 'footer_col_3' );

  do_action( 'footer_col_4' );

  do_action( 'footer_col_5' );

} // agriflex_show_footer
add_action( 'agriflex_footer', 'agriflex_show_footer' );

/**
 * Creates the default About footer panel
 *
 * Filter: agriflex_about
 *
 * @since AgriFlex 2.0
 */
function agriflex_about_footer() {

  $html = '<div id="about">';
  $html .= '<div class="about">';

  $about = '<h4>Texas A&amp;M AgriLife</h4>';
  $about .= '<a href="http://www.youtube.com/watch?v=df_SGBF4LK4"><img src="' . get_template_directory_uri() . '/img/about_video_multi.jpg?v=100" alt="link to AgriLife Solutions Video" /></a>';
  $about .= '<p>Solutions for a Changing World</p>';
  $about .= '<ul>';
  $about .= '<li><a href="http://agrilife.tamu.edu/about/vice-chancellor/">Office of the Vice Chancellor</a></li>';
  $about .= '<li><a href="http://agrilife.tamu.edu/about/">Services</a></li>';
  $about .= '<li><a href="http://aglscomplex.tamu.edu/">Agriculture &amp; Life Sciences Complex</a></li>';
  $about .= '<li><a href="http://agrilife.tamu.edu/agrilifecenter/">AgriLife Center</a></li>';
  $about .= '<li><a href="http://agrilifepeople.tamu.edu/">Employee Directory</a></li>';
  $about .= '</ul>';

  $html .= apply_filters( 'agriflex_about', $about );

  $html .= '</div><!-- .about -->';
  $html .= '</div><!-- #about -->	';

  echo $html;

} // agriflex_about_footer
add_action( 'footer_col_1', 'agriflex_about_footer', 10, 1 );

/**
 * Creates the default popular links footer panel
 *
 * Filter: footer_links
 *
 * @since AgriFlex 2.0
 */
function agriflex_popular_links() {

  $html = '<div id="popular-links">';
  $html .= '<div class="popular-links">';

  $links = '<h4>AgriLife Agencies</h4>';
  $links .= '<a href="http://aglifesciences.tamu.edu/"><img src="' . get_template_directory_uri() . '/img/agrilife-footer-logo.png?v=100" alt="Texas A and M AgriLife Logo" /></a>	';
  $links .= '<ul>';
  $links .= '<li><a href="http://agrilifeextension.tamu.edu/">Texas A&amp;M AgriLife Extension Service</a></li>';
  $links .= '<li><a href="http://agriliferesearch.tamu.edu/">Texas A&amp;M AgriLife Research</a></li>';
  $links .= '<li><a href="http://tamu.edu/">Texas A&amp;M University</a></li>';
  $links .= '<li><a href="http://aglifesciences.tamu.edu/">College of Agriculture and Life Sciences</a></li>';
  $links .= '<li><a href="http://vetmed.tamu.edu/">College of Veterinary Medicine (cooperative with AgriLife Extension &amp; Research)</a></li>';
  $links .= '<li><a href="http://tvmdl.tamu.edu/">Texas A&amp;M Veterinary Medical Diagnostic Laboratory</a></li>';
  $links .= '<li><a href="http://texasforestservice.tamu.edu/">Texas A&amp;M Forest Service</a></li>';
  $links .= '</ul>';

  $html .= apply_filters( 'footer_links', $links );

  $html .= '</div><!-- .popular-links -->';
  $html .= '</div><!-- #popular-links -->';

  echo $html;

} // agriflex_extension_links
add_action( 'footer_col_2', 'agriflex_popular_links', 10, 1 );

/**
 * Creates the default required links footer panel
 *
 * Filter: required_links_logo
 *
 * @since AgriFlex 2.0
 */
function agriflex_required_footer() {

  $html = '<div id="texas-a-m">';
  $html .= '<div class="texas-a-m">';
  $html .= '<h4>Required Links</h4>';

  $link_logo = '<a href="http://www.tamus.edu">';
  $link_logo .= '<img src="' . get_template_directory_uri() . '/img/texas-a-m-system.png?v=100" alt="Texas A&amp;M System image" />';
  $link_logo .= '</a>';

  $html .= apply_filters( 'required_links_logo', $link_logo );

  $html .= '<ul>';
  $html .= '<li><a href="http://agrilife.tamu.edu/required-links/compact/">Compact with Texans</a></li>';
  $html .= '<li><a href="http://agrilife.tamu.edu/required-links/privacy/">Privacy and Security</a></li>';
  $html .= '<li><a href="http://itaccessibility.tamu.edu/">Accessibility Policy</a></li>';
  $html .= '<li><a href="https://dir.texas.gov/resource-library-item/state-website-linking-privacy-policy">State Link Policy</a></li>';
  $html .= '<li><a href="http://www.tsl.state.tx.us/trail">Statewide Search</a></li>';
  $html .= '<li><a href="http://agrilifeas.tamu.edu/hr/diversity/equal-opportunity-educational-programs/">Equal Opportunity</a></li>';
  $html .= '<li><a href="http://veterans.tamu.edu/">Veterans Benefits</a></li>';
  $html .= '<li><a href="https://fch.tamu.edu/programs/military-programs/">Military Families</a></li>';
  $html .= '<li><a href="https://secure.ethicspoint.com/domain/media/en/gui/19681/">Risk, Fraud &amp; Misconduct Hotline</a></li>';
  $html .= '<li><a href="https://gov.texas.gov/organization/hsgd">Texas Homeland Security</a></li>';
  $html .= '<li><a href="http://veterans.portal.texas.gov/">Veteran&apos;s Portal</a></li>';
  $html .= '<li><a href="http://www.tamus.edu/finance/treasury-services/legislative-reports-and-investment-disclosures/">Financial Disclosures</a></li>'; // Just for main agency sites
  $html .= '<li class="last"><a href="http://agrilife.tamu.edu/required-links/orpi/">Open Records/Public Information</a></li>';
  $html .= '</ul>';
  $html .= '</div><!-- .texas-a-m -->';
  $html .= '</div><!-- #texas-a-m -->';

  echo $html;

} // agriflex_required_footer
add_action( 'footer_col_3', 'agriflex_required_footer', 10, 1 );

/**
 * Creates the contact panel on the default footer. Uses county_footer_contact
 * if the site is county or TCE only.
 *
 * @since AgriFlex 2.0
 */
function agriflex_contact_footer() {

    $options = of_get_option();
    $a = agriflex_agency();

    $html = '<div id="contact">';
    $html .= '<div class="contact">';
    $html .= '<h4>Contact</h4>';

    $mapaddress = $options['p-street-1'] . ' ';
    $mapaddress .= $options['p-street-2'] . ' ';
    $mapaddress .= $options['p-city'] . ', TX ';
    $mapaddress .= $options['p-zip'];

    // Checks to see if there's a map link override
    $map_link = ( $options['map-link'] == '' ? 'http://maps.google.com/?q=' . urlencode( $mapaddress ) . '&amp;markers=size:mid%7Ccolor:blue%7Clabel:Office&amp;sensor=false' : $options['map-link'] );

    $html .= '<img src="' . get_template_directory_uri() . '/img/contact-img.png?v=100" alt="Texas A&amp;M System image" />';
    $html .= '<ul>';
    $html .= '<a href="' . $map_link . '">';

    if ( ! empty( $options['p-street-1'] ) ) {
      $html .= '<li>' . $options['p-street-1'] . '<br />';
      if ( ! empty( $options['p-street-2'] ) ) {
        $html .= $options['p-street-2'] . '<br />';
      }
      $html .= $options['p-city'] . ', TX ' . $options['p-zip'] . '</li>';
    }
    $html .= '</a>';

    if ( ! empty( $options['m-street-1'] ) ) {
      $html .= '<li>' . $options['m-street-1'] . '<br />';
      if ( ! empty( $options['m-street-2'] ) ) {
        $html .= $options['m-street-2'] . '<br />';
      }
      $html .= $options['m-city'] . ', TX ' . $options['m-zip'] . '</li>';
    }

    if ( ! empty( $options['hours'] ) ) {
      $html .= '<li>' . $options['hours']. '</li>';
    }

    if ( ! empty( $options['email'] ) ) {
      $html .= '<li>';
      $html .= '<a href="' . obfuscate( 'mailto:' ) . obfuscate( $options['email'] ) . '">';
      $html .= obfuscate( $options['email'] );
      $html .= '</a>';
      $html .= '</li>';
    }

    if ( ! empty( $options['phone'] ) ) {
      $html .= '<li>';
      $html .= '<a href="tel:+1' . $options['phone'] . '">';
      $html .= 'Phone: ' . $options['phone'];
      $html .= '</a>';
      $html .= '</li>';
    }

    if ( ! empty( $options['fax'] ) ) {
      $html .= '<li>Fax: ' . $options['fax']. '</li>';
    }

    $html .= '</ul>';



    $html .= '</div><!-- .contact -->';
    $html .= '</div><!-- #contact -->';

    echo $html;

} // agriflex_contact_footer
add_action( 'footer_col_4', 'agriflex_contact_footer', 10, 1 );

/**
 * Creates the bookstore panel on the default footer
 *
 * @since AgriFlex 2.0
 */
function agriflex_bookstore_footer() {

  $html = '<div id="agrilife-bookstore">';
  $html .= '<div class="agrilife-bookstore">';
  $html .= '<h4>AgriLife Bookstore</h4>';
  $html .= '<a href="https://www.agrilifebookstore.org/">';
  $html .= '<img src="' . get_template_directory_uri() . '/img/bookstore-books.png?v=100" alt="AgriLife Bookstore image" />';
  $html .= '</a>';
  $html .= '<p>AgriLife Extension&apos;s online Bookstore offers educational information and resources related to our many areas of expertise and programming; from agriculture, horticulture, and natural resources to nutrition, wellness for families and youth, and much more.</p>';
  $html .= '</div><!-- .agrilife-bookstore -->';
  $html .= '</div><!-- #agrilife-bookstore -->';

  echo $html;

} // agriflex_bookstore_footer
add_action( 'footer_col_5', 'agriflex_bookstore_footer', 10, 1 );

/**
 * Sets up agriflex_footer for the minimal footer
 *
 * @since AgriFlex 2.0
 */
function agriflex_remove_footer_actions() {

  $min = of_get_option( 'minimal-footer' );
  $a = agriflex_agency();

  if ( $min ) {
    remove_action( 'agriflex_footer', 'agriflex_show_footer' );
    add_action( 'agriflex_footer', 'agriflex_minimal_footer' );
  }

} // agriflex_remove_footer_actions
add_action( 'init', 'agriflex_remove_footer_actions', 10 );

/**
 * Builds the minimal footer
 *
 * @since AgriFlex 2.0
 * @see agriflex_remove_footer_actions()
 * @return void
 */
function agriflex_minimal_footer() {

    $html = '<div class="fazd-footer">';
    $html .= '<ul>';
    $html .= '<li><a href="http://agrilife.tamu.edu/required-links/compact/">Compact with Texans</a></li>';
    $html .= '<li><a href="http://agrilife.tamu.edu/required-links/privacy/">Privacy and Security</a></li>';
    $html .= '<li><a href="http://itaccessibility.tamu.edu/">Accessibility Policy</a></li>';
    $html .= '<li><a href="https://dir.texas.gov/resource-library-item/state-website-linking-privacy-policy">State Link Policy</a></li>';
    $html .= '<li><a href="http://www.tsl.state.tx.us/trail">Statewide Search</a></li>';
    $html .= '<li><a href="http://agrilifeas.tamu.edu/hr/diversity/equal-opportunity-educational-programs/">Equal Opportunity</a></li>';
    $html .= '<li><a href="http://www.tamus.edu/veterans/">Veterans Benefits</a></li>';
    $html .= '<li><a href="https://fch.tamu.edu/programs/military-programs/">Military Families</a></li>';
    $html .= '<li><a href="https://secure.ethicspoint.com/domain/media/en/gui/19681/">Risk, Fraud &amp; Misconduct Hotline</a></li>';
    $html .= '<li><a href="https://gov.texas.gov/organization/hsgd">Texas Homeland Security</a></li>';
    $html .= '<li><a href="http://veterans.portal.texas.gov/">Veteran&apos;s Portal</a></li>';
    $html .= '<li><a href="http://www.tamus.edu/finance/treasury-services/legislative-reports-and-investment-disclosures/">Financial Disclosures</a></li>'; // Just for main agency sites
    $html .= '<li class="last"><a href="http://agrilife.tamu.edu/required-links/orpi/">Open Records/Public Information</a></li>';
    $html .= '</ul>';
    $html .= '</div><!-- .fazd-footer -->';

    echo $html;

} // agriflex_minimal_footer
