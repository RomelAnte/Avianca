<?php
/*
* Display Logo and contact details
*/
?>

<div class="headerbox">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 col-md-5 col-sm-5 align-self-center">
        <?php $adventure_travelling_logo_settings = get_theme_mod( 'adventure_travelling_logo_settings','Different Line');
        if($adventure_travelling_logo_settings == 'Different Line'){ ?>
          <div class="logo">
            <?php if( has_custom_logo() ) adventure_travelling_the_custom_logo(); ?>
            <?php if(get_theme_mod('adventure_travelling_site_title_text',true) == 1){ ?>
              <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php }?>
            <?php $adventure_travelling_description = get_bloginfo( 'description', 'display' );
            if ( $adventure_travelling_description || is_customize_preview() ) : ?>
              <?php if(get_theme_mod('adventure_travelling_site_tagline_text',false)){ ?>
                <p class="site-description"><?php echo esc_html($adventure_travelling_description); ?></p>
              <?php }?>
            <?php endif; ?>
          </div>
        <?php }else if($adventure_travelling_logo_settings == 'Same Line'){ ?>
          <div class="logo logo-same-line">
            <div class="row">
              <div class="col-lg-5 col-md-5 align-self-center">
                <?php if( has_custom_logo() ) adventure_travelling_the_custom_logo(); ?>
              </div>
              <div class="col-lg-7 col-md-7 align-self-center">
               <?php if(get_theme_mod('adventure_travelling_site_title_text',true) == 1){ ?>
                  <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php }?>
                <?php $adventure_travelling_description = get_bloginfo( 'description', 'display' );
                if ( $adventure_travelling_description || is_customize_preview() ) : ?>
                  <?php if(get_theme_mod('adventure_travelling_site_tagline_text',false)){ ?>
                    <p class="site-description"><?php echo esc_html($adventure_travelling_description); ?></p>
                  <?php }?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php }?>
      </div>
      <div class="col-lg-5 col-md-7 col-sm-7 align-self-center">
        <div class="row">
          <div class="email col-lg-6 col-md-6 col-sm-6 align-self-center">
            <?php if( get_theme_mod( 'adventure_travelling_mail_text' ) != '' || get_theme_mod( 'adventure_travelling_mail' ) != '') { ?>
              <div class="row">
                <div class="col-lg-3 col-md-3 align-self-center"><i class="<?php echo esc_attr(get_theme_mod('adventure_travelling_mail_icon','fas fa-envelope-open')); ?>"></i></div>
                <div class="col-lg-9 col-md-9 align-self-center">
                  <p class="infotext"><?php echo esc_html( get_theme_mod('adventure_travelling_mail_text','')); ?></p>
                  <p class="mb-0"><?php echo esc_html( get_theme_mod('adventure_travelling_mail','') ); ?></p>
                </div>
              </div>
            <?php } ?>
          </div>
          <div class="call col-lg-6 col-md-6 col-sm-6 align-self-center">
            <?php if( get_theme_mod( 'adventure_travelling_call_text' ) != '' || get_theme_mod( 'adventure_travelling_call' ) != '') { ?>
              <div class="row">
                <div class="col-lg-3 col-md-3 align-self-center"><i class="<?php echo esc_attr(get_theme_mod('adventure_travelling_call_icon','fas fa-phone')); ?>"></i></div>
                <div class="col-lg-9 col-md-9 align-self-center">
                  <p class="infotext"><?php echo esc_html( get_theme_mod('adventure_travelling_call_text','') ); ?></p>
                  <p class="mb-0"><?php echo esc_html( get_theme_mod('adventure_travelling_call','') ); ?></p>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>