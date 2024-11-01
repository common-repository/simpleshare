=== SimpleShare ===

Contributors: bhadaway
Donate link: https://calmestghost.com/donate
Tags: social, sharing, social media, social media icons, social sharing, social buttons, facebook, twitter, email, print
Requires at least: 5.0
Tested up to: 6.3
Stable tag: 2023
License: GPL
License URI: https://www.gnu.org/licenses/gpl.html

Add stupidly simple social sharing buttons to your website.

== Description ==

Add stupidly simple social sharing buttons to your website.

Responsive and lightweight (no javascript; no tracking).

Automatically added to blog posts. Use the [simpleshare] shortcode for additional locations.

Supports sharing to:

* Facebook
* Twitter
* Email
* Print

Easy to style. Here's the default CSS for reference:

`.simpleshare, .simpleshare *{box-sizing:border-box !important;-webkit-tap-highlight-color:transparent !important;transition:all 0.5s ease !important;padding:0 !important;border:0 !important;margin:0 !important}
.simpleshare{font-size:0 !important;margin:30px 0 !important}
.simpleshare a{display:inline-block !important;width:25% !important;min-width:120px !important;font-family:arial !important;font-size:16px !important;color:#fff !important;text-align:center !important;text-decoration:none !important;text-shadow:none !important;line-height:0 !important;padding:15px 0 !important;background:#000 !important;box-shadow:none !important}
.simpleshare a.facebook{background:#3B5998 !important}
.simpleshare a.twitter{background:#1DA1F2 !important}
.simpleshare a.email{background:#222 !important}
.simpleshare a.print{background:#777 !important}
.simpleshare a:hover{opacity:0.8 !important}
.simpleshare .icon{display:inline-block !important;width:20px !important;height:20px !important}
.simpleshare .text{position:relative !important;top:-4px !important;margin-left:10px !important}
.widget-area .simpleshare a{min-width:0 !important}
.widget-area .simpleshare .text{display:none !important}
@media(max-width:576px){.simpleshare a{min-width:0 !important}.simpleshare .text{display:none !important}}`

== Installation ==

1. There are no settings to adjust. Simply use the `[simpleshare]` shortcode on any page, post, or text widget or in your theme code, use `<?php echo do_shortcode( '[simpleshare]' ); ?>`.