=== Google Maps GPS Link ===
Contributors: jeffyen
Donate link: n/a
Tags: gps, maps, google
Requires at least: n/a
Tested up to: 2.7.1
Stable tag: trunk

Converts a properly formatted string with GPS coordinates in a post to a Google Maps link.


== Description ==

This plugin will replace -one- properly formatted string in a post with a Google Maps link to the included GPS coordinates. The map will load in a new window/tab at zoom level=14, normal map view.

I wrote this to use when posting from my Nokia N810 handheld with WordPy, making it very easy to add a Google Maps link to my current location without using the wp-admin site, which is slow and clumsy on the handheld's browser.

Features are minimal (only does the one thing, really), and usability could definitely use a bump. Even so, no additional development on this plugin is planned; I would suggest users looking for more comprehensive functionality take a look at WP Geo.

USAGE:
You will need three bits of info:
  A) GPS North-South coordinate
  B) GPS East-West coordinate
  C) Link text

Then, type that info using the following format into your post:

:gps:C::A::B:gps:

For example, if you wish to post a link to a map of GPS coordinates 32.970705,-116.955461 as reported by your GPS device/handheld/etc, simply type the following string into your post:

:gps:And this is an example link.::32.970705::-116.955461:gps:

And the plugin will convert that to the following markup when WordPress renders the post:

<a href='http://maps.google.com/maps?f=q&source=s_q&hl=en&z=14&geocode=&q=32.970705 ,+-116.955461' target='_blank'>And this is an example link.</a>


== Installation ==

1. Upload 'gmapgpslink.php' to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress


== Frequently Asked Questions ==

= What if I need something more powerful/functional/useful/pretty? =

I can't really help you with that. If you saw my code, you'd understand just how true that is. Feel free to build upon my paltry offering to the FOSS gods, or you might take a look at WP Geo.


== Screenshots ==


== Arbitrary section ==


== A brief Markdown Example ==