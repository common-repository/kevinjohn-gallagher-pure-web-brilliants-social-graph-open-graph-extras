=== Pure Web Brilliant's Social Graph: Open Graph extras Extention ===
	Contributors:			kevinjohngallagher, purewebbrilliant 
	Donate link:			http://kevinjohngallagher.com/
	Tags: 					kevinjohn gallagher, pure web brilliant, framework, cms, facebook, opengraph, open graph, social, social media, app, page
	Requires at least:		3.0
	Tested up to: 			3.4
	Stable tag: 			0.6



Adds personalised Open Graph tags that Facebook proposed, and constantly change their mind about supporting.



== Description ==

Adds the following tags to your header for better connection to facebook...


* og:email
* og:phone_number
* og:fax_number
* og:latitude
* og:longitude
* og:street-address
* og:locality
* og:region
* og:country-name
* og:postal-code


The following tags were proposed and validated by Facebook in 2010: https://developers.facebook.com/docs/opengraphprotocol/

Sadly there is NO information as to why or when they were removed from http://opengraphprotocol.org , and http://www.ogp.me/ is returning a server error ( "Heroku | No such app" ).

Paul Tarjan, Software Engineer @ Facebook for the Open Graph protocol is on record as having said: 
> "Those properties are deprecated. If major players in the locality space need markup, ogp will create a location (or place or some name like that) namespace and move the properties into there" 


This is an extension for the Pure Web Brilliant: Social Graph control plugin ( http://wordpress.org/extend/plugins/kevinjohn-gallagher-pure-web-brilliants-social-graph-control/ )





== Installation ==

1. Upload `kevinjohn_gallagher___social_graph_output` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress



== Frequently Asked Questions ==

= I am seeing "… requires the parent framework to be installed and activated" =

This program is part of the Pure Web Brilliant family, and requires the parent framework to be installed and activated.
You can find that at: http://wordpress.org/extend/plugins/kevinjohn-gallagher-pure-web-brilliants-base-framework/

= I am seeing "… requires the parent Control ( Pure Web Brilliant: Social Graph control ) to be installed and activated" =

This plugin is an extension for the Pure Web Brilliant: Social Graph control plugin.
It can be found at http://wordpress.org/extend/plugins/kevinjohn-gallagher-pure-web-brilliants-social-graph-control/

= So are these tags useful or not ? =

I don't know. They 100% do no harm, and they allow your website to have its information presented and searchable in a meaningful and semantic way.
I personally use them on my sites.


== Changelog ==



= 0.6 =
* Updated security check

= 0.5 =
* Publish to WP.org repository.
* og:email
* og:phone_number
* og:fax_number
* og:latitude
* og:longitude
* og:street-address
* og:locality
* og:region
* og:country-name
* og:postal-code

* Added hook: _child_settings_array__kevinjohn_gallagher___social_graph_control
* Added hook: _social_graph_data_get___kevinjohn_gallagher___social_graph_control
* Added hook: _social_graph_data_set___kevinjohn_gallagher___social_graph_control
* Fixed a number of $this to $parent options to de-duplicate code.
* Correctly referenced the Parent/Control plug-ins options in get_options(), and not added additional data to the database  
* Setarated GET and SET methods for data storage.





== Upgrade Notice ==

= 0.5 =
* Initial upgrade to public / GPL compatible version.



== Arbitrary section ==


**Kevinjohn Gallagher:** [Kevinjohn Gallagher](http://kevinjohngallagher.com/ "Kevinjohn Gallagher .com")

**Agency:** [Pure Web Brilliant](http://purewebbrilliant.com/ "Pure Web Brilliant")

Framework release blog post: [Pure Web Brilliant’s plugin framework released](http://kevinjohngallagher.com/2012/05/pure-web-brilliants-plugin-framework-released/ "Pure Web Brilliant’s plugin framework released")

> " I want to go on record thanking my colleagues and many of our current & past clients, who were (mostly) happy to negotiate changes in the licence of our past work so that we could make it open source. "

* Package:						Pure Web Brilliant
* Version:						2.0.1
* Author:						Kevinjohn Gallagher <framework@KevinjohnGallagher.com>
* Copyright:					Copyright (c) 2012, Kevinjohn Gallagher
* Link:							http://KevinjohnGallagher.com
* Licence:						http://www.gnu.org/licenses/gpl-3.0.txt
