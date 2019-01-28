<?php get_header();
  /* Template name: strona kontaktowa */
  $meta = get_page_by_path('meta-pl');
  $facebook_icon = '<svg enable-background="new 0 0 56.693 56.693" height="56.693px" class="icon icon-facebook" id="Layer_1" version="1.1" viewBox="0 0 56.693 56.693" width="56.693px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M40.43,21.739h-7.645v-5.014c0-1.883,1.248-2.322,2.127-2.322c0.877,0,5.395,0,5.395,0V6.125l-7.43-0.029  c-8.248,0-10.125,6.174-10.125,10.125v5.518h-4.77v8.53h4.77c0,10.947,0,24.137,0,24.137h10.033c0,0,0-13.32,0-24.137h6.77  L40.43,21.739z"/></svg>';
  $phone_icon = '<svg class="icon icon-phone" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>';
  $search_icon = '<svg class="icon icon-search" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/><path d="M0 0h24v24H0z" fill="none"/></svg>';
  $location_icon = '<svg class="icon icon-location" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/><path d="M0 0h24v24H0z" fill="none"/></svg>';
  $mail_icon = '<svg class="icon icon-mail" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>';
  $spacer_icon = '<svg class="icon icon-spacer" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/><path d="M0 0h24v24H0z" fill="none"/></svg>';?>
  <section class="page-section page-contact">
    <header class="page-header">
      <h1><?php the_title(); ?></h1>
    </header>
    <section class="page-content">
      <div class="wrapper clearfix">
        <section class="contact-data">
          <h2>dane kontaktowe</h2>
          <?php the_field('contact-data');?>
        </section>
        <section class="contact-opening-hours">

          <h2>godziny owtarcia</h2>
          <?php
          if( have_rows('repeater-contact-opening-hours') ):
            echo '<table class="opening-hours"><tbody>';
            while ( have_rows('repeater-contact-opening-hours') ) : the_row();
              echo '<tr><th>';
              the_sub_field('repeater-contact-open-day');
              echo '</th><th>';
              the_sub_field('repeater-contact-open-hours');
              echo '</th></tr>';
            endwhile;
              echo '</tbody></table>';
          else:
          endif;
          ?>
        </section>
      </div>
      <h2>napisz do nas</h2>
      <?php echo do_shortcode('[wpforms id="261" title="false" description="false"]');?>
      </section>
      <!-- <h2>jesteśmy tutaj:</h2>
      <iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2434.1732632031753!2d16.892727315803118!3d52.40353597979231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470444d1ed5e8889%3A0x7e89f51137d681fd!2sEstime+Medycyna+Estetyczna+i+Stomatologia!5e0!3m2!1sen!2spl!4v1540207431998" width="1920" height="350" frameborder="0" style="border:0" allowfullscreen></iframe> -->
      <?php the_field('company-data');?>

    <?php if (have_posts()) : ?>

      <?php while (have_posts()) : the_post(); ?>

        <?php the_content();// Individual Post Styling ?>

      <?php endwhile; ?>

        <?php // Navigation ?>

      <?php else : ?>

        <?php // No Posts Found ?>

    <?php endif; ?>

    </section>
  </section>
<?php get_footer();?>
