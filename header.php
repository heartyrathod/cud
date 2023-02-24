<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>



<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#ff0075" />
  <meta name="google-site-verification" content="QSsd_as7A5YeXj6Wnn5syhvF4AxkGRZe2SEHtL_uJoI" />
  <?php wp_head(); ?>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-254368187-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-254368187-1');
</script>
	
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [{
        "@type": "Organization",
        "name": "Creative UI Design LLC",
        "alternateName": "cud, creative ui design, CreativeUIDesign",
        "url": "https://www.creativeuidesign.com",
        "image": "https://creativeuidesign.com/wp-content/uploads/2023/01/cud-logo.webp",
        "email": "info@creativeuidesign.com",
        "telephone": "+1 (717) 343-0778",
        "priceRange": "$",
        "aggregateRating": {
          "@type": "AggregateRating",
          "ratingValue": "4.3",
          "reviewCount": "34"
        },
        "address": [{
          "@type": "PostalAddress",
          "streetAddress": "1 Airedale Pl",
          "addressLocality": "Shrewsbury",
          "addressRegion": "PA",
          "postalCode": "17361",
          "addressCountry": "USA"
        }],
        "member": [{
            "@type": "Organization"
          },
          {
            "@type": "Organization"
          }
        ],
        "alumni": [{
            "@type": "Person",
            "name": "Vishal Bhatt"
          },
          {
            "@type": "Person",
            "name": "Narendra Patel"
          }
        ],
        "sameAs": [
          "https://www.linkedin.com/company/creative-ui-design-llc/",
          "https://www.facebook.com/creativeuidesignllc",
          "https://www.instagram.com/creativeuidesignllc/"
        ],
        "openingHoursSpecification": {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": [
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday"
          ],
          "opens": "09:00",
          "closes": "18:00"
        },
        "hasOfferCatalog": {
          "@type": "OfferCatalog",
          "name": "Web & Mobile Development Services",
          "itemListElement": [{
              "@type": "OfferCatalog",
              "name": "Mobile App Development",
              "itemListElement": [{
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Flutter App Development"
                }
              }]
            },
            {
              "@type": "OfferCatalog",
              "name": "Web Development",
              "itemListElement": [{
                  "@type": "Offer",
                  "itemOffered": {
                    "@type": "Service",
                    "name": "Website Development"
                  }
                },
                {
                  "@type": "Offer",
                  "itemOffered": {
                    "@type": "Service",
                    "name": "Web App Developement"
                  }
                }
              ]
            },
            {
              "@type": "OfferCatalog",
              "name": "UI/UX Design",
              "itemListElement": [{
                  "@type": "Offer",
                  "itemOffered": {
                    "@type": "Service",
                    "name": "Web Design"
                  }
                },
                {
                  "@type": "Offer",
                  "itemOffered": {
                    "@type": "Service",
                    "name": "Mobile App Design"
                  }
                }
              ]
            },
            {
              "@type": "OfferCatalog",
              "name": "Marketing Services"
            }
          ]
        }
      }]
    }
  </script>
</head>

<body <?php body_class(); ?>>
  <header class="cud-header">
    <div class="cud-logo">
      <a href="<?php echo site_url(); ?>" title="Creative UI Design">

        <?php $custom_logo_id = get_theme_mod('custom_logo');
        $image = wp_get_attachment_image_src($custom_logo_id, 'full');
        ?>
        <img src="<?php echo $image[0]; ?>" alt="Creative UI Design" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" class="img-fluid">
      </a>
    </div>
    <?php
    echo wp_nav_menu(array(
      'menu'        => 'Main Menu',
      'menu_id'     => 'nav',
      'menu_class'  => 'cud-nav',
      'fallback_cb' => false,
      // 'depth'       => 1,
    ));
    ?>
    <div class="cud-actions">
      <a href="<?php echo get_theme_mod('kp_calendly_meeting_link', true); ?>" target="_blank" rel="noopener" class="cud-btn cud-btn-tertiary">Book Meeting</a>
      <span class="cud-menu-icon cud-trigger">
        <i class="cud-icon-menu"></i>
      </span>
    </div>
  </header>