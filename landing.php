<?php get_header();
/* Template name: strona lądowania */
  $meta = get_page_by_path('meta-pl');
  $facebook_icon = '<svg enable-background="new 0 0 56.693 56.693" height="56.693px" class="icon icon-facebook" id="Layer_1" version="1.1" viewBox="0 0 56.693 56.693" width="56.693px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M40.43,21.739h-7.645v-5.014c0-1.883,1.248-2.322,2.127-2.322c0.877,0,5.395,0,5.395,0V6.125l-7.43-0.029  c-8.248,0-10.125,6.174-10.125,10.125v5.518h-4.77v8.53h4.77c0,10.947,0,24.137,0,24.137h10.033c0,0,0-13.32,0-24.137h6.77  L40.43,21.739z"/></svg>';
  $search_icon = '<svg class="icon icon-search" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/><path d="M0 0h24v24H0z" fill="none"/></svg>';
  $phone_icon = '<svg class="icon icon-phone" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>';
  $location_icon = '<svg class="icon icon-location" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/><path d="M0 0h24v24H0z" fill="none"/></svg>';
  $mail_icon = '<svg class="icon icon-mail" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>';
  $spacer_icon = '<svg class="icon icon-spacer" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/><path d="M0 0h24v24H0z" fill="none"/></svg>';?>
    <section class="main-section section-0 main-slider">
      <?php echo do_shortcode('[soliloquy id="7"]');?>
    </section>
    <section class="main-section section-1 highlight">
      <?php
      if( have_rows('repeater-highlight') ):
        while ( have_rows('repeater-highlight') ) : the_row();
          echo '<header><h2>';
          the_sub_field('single-highlight-header');
          echo '</h2>';
          //echo $spacer_icon;
          echo '</header>';?>
          <a href="<?php the_sub_field('single-highlight-url');?>"><img src=" <?php the_sub_field('single-highlight-content');?>" alt=" <?php the_sub_field('single-highlight-content-alt');?>"></a>
      <?php
        endwhile;
      else:
      endif;
      ?>
    </section>
    <section class="main-section section-3 services">
      <header class="services-header">
        <h2><?php the_field('services-header');?></h2>
        <?php the_field('services-content');?>
        <?php //echo $spacer_icon; ?>
      </header>
      <?php
        if( have_rows('repeater-services') ):
        echo '<div class="slider-3 slider-services slider-content">';
          while ( have_rows('repeater-services') ) : the_row();?>
            <a href="<?php the_sub_field('single-service-url');?>" class="slider-item single-service" style="background-image: url('<?php the_sub_field('single-service-img');?>')">
            <div><h5><?php the_sub_field('single-service-header');?></h5></div></a>
            <?php
          endwhile;
        echo '</div>';
        else:
        endif;
      ?>
    </section>
    <section class="main-section section-4 about-us">
      <a href="<?php the_field('about-us-url');?>" class="about-us-header">
        <h2><?php the_field('about-us-header');?></h2>
        <p><?php the_field('about-us-content');?></p>
        <footer class="read-more">czytaj więcej</footer>
        <?php //echo $spacer_icon; ?>
      </a>
      <?php
      if( have_rows('repeater-about-us') ):
        echo '<div class="clearfix about-us-wrapper">';
        while ( have_rows('repeater-about-us') ) : the_row();
          echo '<a class="single-about-us" href="';
          the_sub_field('single-about-us-url');
          echo '"><h2>';
          the_sub_field('single-about-us-header');
          echo '</h2>';?>
          <p><?php the_sub_field('single-about-us-content');?></p>

          <footer class="read-more">czytaj więcej</footer>
        </a>
          <?php
        endwhile;
        echo '</div>';
      else:
      endif;
      ?>
      <a href="<?php the_field('about-us-pricing-url');?>" class="about-us-pricing">
        <h2><?php the_field('about-us-pricing-header');?></h2>
        <p><?php the_field('about-us-pricing-content');?></p>
        <footer class="read-more">czytaj więcej</footer>
      </a>
    </section>
    <section class="main-section section-5 offers">
      <h2><?php the_field('offers-header');?></h2>
      <?php //echo $spacer_icon; ?>
      <?php
        if( have_rows('repeater-offers') ):
        echo '<div class="slider-5 slider-offers slider-content">';
          while ( have_rows('repeater-offers') ) : the_row();?>
            <a href="<?php the_sub_field('single-offer-url');?>" class="slider-item single-offer" style="background-image: url('<?php the_sub_field('single-offer-img');?>')">
            <div><h5><?php the_sub_field('single-offer');?></h5></div></a>
            <?php
          endwhile;
        echo '</div>';
        else:
        endif;
      ?>
    </section>
<?php get_footer();?>
