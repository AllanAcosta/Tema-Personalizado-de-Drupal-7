<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
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
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

<div id="page-wrapper">
  <div id="page">
    <div class="section clearfix">
      <?php include('header.php'); ?>

      <div class="masthead">
        <div class="container h-100">
          <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end">
     
              <h1 class="text-uppercase text-white font-weight-bold">
                <?php if ($page['main_slide_title']): ?>
                <?php print render($page['main_slide_title']); ?>
            
                <?php else: ?>
                Your Great Slide Title here
                <?php endif; ?>
              </h1>
              <hr class="divider my-4" />
            </div>
            <div class="col-lg-8 align-self-baseline">
              <div class="text-white-75 font-weight-light mb-5">
                <?php if ($page['main_slide_text']): ?>
                <?php print render($page['main_slide_text']); ?>
                <?php else: ?>
                Your great slide text here, describe the first paragraph of your website right here

                <?php endif; ?>
              </div>
              <div>
                <a href="#about">
                  <div class="btn btn-primary btn-xl js-scroll-trigger">
                    <?php if ($page['main_slide_button_text']): ?>
                    <?php print render($page['main_slide_button_text']); ?>
                    <?php else: ?>
                    You can edit the slide button text too!
                    <?php endif; ?>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="page-section bg-primary" id="about">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
              <h2 class="text-white mt-0">
                <?php if ($page['banner_title']): ?>
                <?php print render($page['banner_title']); ?>
                <?php else: ?>
                Your great banner title here
                <?php endif; ?>
              </h2>
              <hr class="divider light my-4" />
              <div class="text-white-50 mb-4">

                <?php if ($page['banner_text']): ?>
                <?php print render($page['banner_text']); ?>
                <?php else: ?>
                Your great banner text here, describe the first paragraph of your website right here
                <?php endif; ?>

              </div>
              <a href="#services">
                <div class="btn btn-light btn-xl js-scroll-trigger">
                  <?php if ($page['icons_banner_title']): ?>
                  <?php print render($page['icons_banner_title']); ?>
                  <?php else: ?>
                  You can edit the banner button text too!
                  <?php endif; ?>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="page-section" id="services">
        <div class="container">
          <h2 class="text-center mt-0">
            <?php if ($page['icons_banner_title']): ?>
            <?php print render($page['icons_banner_title']); ?>
            <?php else: ?>
            Your Icons Banner Title Here
            <?php endif; ?>
          </h2>
          <hr class="divider my-4" />
          <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
              <div class="mt-5">
                <i class="fas fa-4x fa-gem text-primary mb-4"></i>
                <h3 class="h4 mb-2">
                  <?php if ($page['banner_first_icon_title']): ?>
                  <?php print render($page['banner_first_icon_title']); ?>
                  <?php else: ?>
                  First Icon Title
                  <?php endif; ?>
                </h3>
                <p class="text-muted mb-0">
                  <?php if ($page['banner_first_icon_text']): ?>
                  <?php print render($page['banner_first_icon_text']); ?>
                  <?php else: ?>
                  First Icon Text Here
                  <?php endif; ?>
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
              <div class="mt-5">
                <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
                <h3 class="h4 mb-2">
                  <?php if ($page['banner_second_icon_title']): ?>
                  <?php print render($page['banner_second_icon_title']); ?>
                  <?php else: ?>
                  Second Icon Title
                  <?php endif; ?>
                </h3>
                <p class="text-muted mb-0">
                  <?php if ($page['banner_second_icon_text']): ?>
                  <?php print render($page['banner_second_icon_text']); ?>
                  <?php else: ?>
                  Second Icon Text Here
                  <?php endif; ?>
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
              <div class="mt-5">
                <i class="fas fa-4x fa-globe text-primary mb-4"></i>
                <h3 class="h4 mb-2">
                  <?php if ($page['banner_third_icon_title']): ?>
                  <?php print render($page['banner_third_icon_title']); ?>
                  <?php else: ?>
                  Third Icon Title
                  <?php endif; ?>
                </h3>
                <p class="text-muted mb-0">
                  <?php if ($page['banner_third_icon_text']): ?>
                  <?php print render($page['banner_third_icon_text']); ?>
                  <?php else: ?>
                  Third Icon Text Here
                  <?php endif; ?>
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
              <div class="mt-5">
                <i class="fas fa-4x fa-heart text-primary mb-4"></i>
                <h3 class="h4 mb-2">
                  <?php if ($page['banner_fourth_icon_title']): ?>
                  <?php print render($page['banner_fourth_icon_title']); ?>
                  <?php else: ?>
                  Fourth Icon Title
                  <?php endif; ?>
                </h3>
                <p class="text-muted mb-0">
                  <?php if ($page['banner_fourth_icon_text']): ?>
                  <?php print render($page['banner_fourth_icon_text']); ?>
                  <?php else: ?>
                  Fourth; Icon Text Here
                  <?php endif; ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Portfolio-->
      <div id="portfolio">
        <div class="container-fluid p-0">
          <div class="row no-gutters">
            <div class="col-lg-4 col-sm-6">
              <a class="portfolio-box" href="sites/all/themes/custom_theme/assets/img/portfolio/fullsize/1.jpg">
                <img class="img-fluid" src="sites/all/themes/custom_theme/assets/img/portfolio/thumbnails/1.jpg"
                  alt="..." />
                <div class="portfolio-box-caption">
                  <div class="project-category text-white-50">Category</div>
                  <div class="project-name">Project Name</div>
                </div>
              </a>
            </div>
            <div class="col-lg-4 col-sm-6">
              <a class="portfolio-box" href="sites/all/themes/custom_theme/assets/img/portfolio/fullsize/2.jpg">
                <img class="img-fluid" src="sites/all/themes/custom_theme/assets/img/portfolio/thumbnails/2.jpg"
                  alt="..." />
                <div class="portfolio-box-caption">
                  <div class="project-category text-white-50">Category</div>
                  <div class="project-name">Project Name</div>
                </div>
              </a>
            </div>
            <div class="col-lg-4 col-sm-6">
              <a class="portfolio-box" href="sites/all/themes/custom_theme/assets/img/portfolio/fullsize/3.jpg">
                <img class="img-fluid" src="sites/all/themes/custom_theme/assets/img/portfolio/thumbnails/3.jpg"
                  alt="..." />
                <div class="portfolio-box-caption">
                  <div class="project-category text-white-50">Category</div>
                  <div class="project-name">Project Name</div>
                </div>
              </a>
            </div>
            <div class="col-lg-4 col-sm-6">
              <a class="portfolio-box" href="sites/all/themes/custom_theme/assets/img/portfolio/fullsize/4.jpg">
                <img class="img-fluid" src="sites/all/themes/custom_theme/assets/img/portfolio/thumbnails/4.jpg"
                  alt="..." />
                <div class="portfolio-box-caption">
                  <div class="project-category text-white-50">Category</div>
                  <div class="project-name">Project Name</div>
                </div>
              </a>
            </div>
            <div class="col-lg-4 col-sm-6">
              <a class="portfolio-box" href="sites/all/themes/custom_theme/assets/img/portfolio/fullsize/5.jpg">
                <img class="img-fluid" src="sites/all/themes/custom_theme/assets/img/portfolio/thumbnails/5.jpg"
                  alt="..." />
                <div class="portfolio-box-caption">
                  <div class="project-category text-white-50">Category</div>
                  <div class="project-name">Project Name</div>
                </div>
              </a>
            </div>
            <div class="col-lg-4 col-sm-6">
              <a class="portfolio-box" href="sites/all/themes/custom_theme/assets/img/portfolio/fullsize/6.jpg">
                <img class="img-fluid" src="sites/all/themes/custom_theme/assets/img/portfolio/thumbnails/6.jpg"
                  alt="..." />
                <div class="portfolio-box-caption p-3">
                  <div class="project-category text-white-50">Category</div>
                  <div class="project-name">Project Name</div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      
     
      <div class="page-section bg-dark text-white">
        <div class="container text-center">
          <h2 class="mb-4">
            <?php if ($page['third_banner_title']): ?>
            <?php print render($page['third_banner_button_text']); ?>
            <?php else: ?>
            Your Third Banner Title Here
            <?php endif; ?>
          </h2>
          <a class="btn btn-light btn-xl" href="#">
            <?php if ($page['third_banner_title']): ?>
            <?php print render($page['third_banner_button_text']); ?>
            <?php else: ?>
            You can edit the banner button text too!
            <?php endif; ?>
          </a>
        </div>
      </div>
      <!-- Contact-->
      <div class="page-section" id="contact">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
              <h2 class="mt-0">
                <?php if ($page['contact_section_title']): ?>
                <?php print render($page['contact_section_title']); ?>
                <?php else: ?>
                Your Contact Section Title Here
                <?php endif; ?>
              </h2>
              <hr class="divider my-4" />
              <p class="text-muted mb-5">
              <?php if ($page['contact_section_text']): ?>
                <?php print render($page['contact_section_text']); ?>
                <?php else: ?>
                Your Contact Section Text Here
                <?php endif; ?>
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
              <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
              <div>
              <?php if ($page['contact_section_phone']): ?>
                <?php print render($page['contact_section_phone']); ?>
                <?php else: ?>
                  +1 (555) 123-4567
                <?php endif; ?>  
              </div>
            </div>
            <div class="col-lg-4 mr-auto text-center">
              <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
             
              <a class="d-block" href="mailto:contact@yourwebsite.com">
              <?php if ($page['contact_section_email']): ?>
                <?php print render($page['contact_section_email']); ?>
                <?php else: ?>
                  contact@yourwebsite.com
                <?php endif; ?>   
              </a>
            </div>
          </div>
        </div>
      </div>

      <?php if ($site_name || $site_slogan): ?>
      <div id="name-and-slogan">
        <?php if ($site_name): ?>
        <?php if ($title): ?>
        <div id="site-name"><strong>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"
              rel="home"><span><?php print $site_name; ?></span></a>
          </strong></div>
        <?php else: ?>
        <h1 id="site-name">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"
            rel="home"><span><?php print $site_name; ?></span></a>
        </h1>
        <?php endif; ?>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
        <div id="site-slogan"><?php print $site_slogan; ?></div>
        <?php endif; ?>
      </div> 
      <?php endif; ?>

      <?php print render($page['header']); ?>

    </div>


    <?php if ($main_menu || $secondary_menu): ?>
    <div id="navigation">
      <div class="section">

        <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Secondary menu'))); ?>
      </div>
    </div> 
    <?php endif; ?>

    <?php if ($breadcrumb): ?>
    <div id="breadcrumb"><?php print $breadcrumb; ?></div>
    <?php endif; ?>

    <?php print $messages; ?>

    <div id="main-wrapper">
      <div id="main" class="clearfix">

        <div id="content" class="column">
          <div class="section">
            <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div>
            <?php endif; ?>
            <a id="main-content"></a>
            <?php print render($title_prefix); ?>
            <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
            <?php print render($title_suffix); ?>
            <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
            <?php print render($page['help']); ?>
            <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>
            <?php print render($page['content']); ?>
            <?php print $feed_icons; ?>
          </div>
        </div>
      </div>
    </div> 
    <div id="footer">
      <div class="section">
        <?php include( 'footer.php')?>
        <?php print render($page['footer']); ?>

      </div>
    </div> <!-- /.section, /#footer -->

  </div>
</div> <!-- /#page, /#page-wrapper -->
