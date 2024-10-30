<?php
/*
	Plugin Name: 			Kevinjohn Gallagher: Pure Web Brilliant's Social Graph: Open Graph extras Extention
	Description: 			Adds personalised Open Graph tags that Facebook proposed, and constantly change their mind about supporting.
	Version: 				0.6
	Author: 				Kevinjohn Gallagher
	Author URI: 			http://kevinjohngallagher.com/
	
	Contributors:			kevinjohngallagher, purewebbrilliant 
	Donate link:			http://kevinjohngallagher.com/
	Tags: 					kevinjohn gallagher, pure web brilliant, framework, cms, facebook, opengraph, open graph, social, social media, app, page
	Requires at least:		3.0
	Tested up to: 			3.4
	Stable tag: 			0.6
*/
/**
 *
 *	Kevinjohn Gallagher: Pure Web Brilliant's Social Graph: Open Graph extras Extention
 * ==========================================================
 *
 *	Adds personalised Open Graph tags that Facebook proposed, and constantly change their mind about supporting.
 *
 *
 *	This program is free software; you can redistribute it and/or modify it under the terms of the GNU 
 *	General Public License as published by the Free Software Foundation; either version 3 of the License, 
 *	or (at your option) any later version.
 *
 * 	This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; 
 *	without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 *	See the GNU General Public License (http://www.gnu.org/licenses/gpl-3.0.txt) for more details.
 *
 *	You should have received a copy of the GNU General Public License along with this program.  
 * 	If not, see http://www.gnu.org/licenses/ or http://www.gnu.org/licenses/gpl-3.0.txt
 *
 *
 *	Copyright (C) 2008-2012 Kevinjohn Gallagher / http://www.kevinjohngallagher.com
 *
 *
 *	@package				Pure Web Brilliant
 *	@version 				0.6
 *	@author 				Kevinjohn Gallagher <wordpress@kevinjohngallagher.com>
 *	@copyright 				Copyright (c) 2012, Kevinjohn Gallagher
 *	@link 					http://kevinjohngallagher.com
 *	@license 				http://www.gnu.org/licenses/gpl-3.0.txt
 *
 *
 */


 	if ( ! defined( 'ABSPATH' ) )
 	{ 
 			die( 'Direct access not permitted.' ); 
 	}
 	
 	
 	

	define( '_kevinjohn_gallagher___social_graph_open_graph_extra_extention', '0.6' );



	if (class_exists('kevinjohn_gallagher')) 
	{
		
		
		class	kevinjohn_gallagher___social_graph_open_graph_extra_extention 
		extends kevinjohn_gallagher
		{
		
				/*
				**
				**		VARIABLES
				**
				*/
				const PM		=	'_kevinjohn_gallagher___social_graph_open_graph_extra_extention';
				
				var					$instance;
				var 				$plugin_name;
				var					$uniqueID;
				var					$plugin_dir;
				var					$plugin_url;
				var					$plugin_page_title; 
				var					$plugin_menu_title; 					
				var 				$plugin_slug;
				var 				$http_or_https;
				var 				$plugin_options;
				
				var 				$meta_array;
				var 				$post_type;

				

		
				/*
				**
				**		CONSTRUCT
				**
				*/
				public	function	__construct() 
				{
						$this->instance 								=	&$this;
						$this->plugin_dir								=	plugin_dir_path(__FILE__);	
						$this->plugin_url								=	plugin_dir_url(__FILE__);							
						$this->plugin_name								=	"Kevinjohn Gallagher: Pure Web Brilliant's Social Graph Facebook extention";
						
						
						add_action( 'init',									array( $this, 'init' ) );
						add_action( 'init',									array( $this, 'init_child' ) );
												
				}
				

				
				
				
				/*
				**
				**		INIT_CHILD
				**
				*/
			
				public function init_child() 
				{
						

						add_filter( 	'kjg_pwb_hook_child_settings_array__kevinjohn_gallagher___social_graph_control', 
										array(	
												$this, 
												'hook_into___kjg_pwb_hook_child_settings_array__kevinjohn_gallagher___social_graph_control'
											), 	
										100, 	
										1
									);



						add_filter( 	'kjg_pwb_hook_social_graph_data_get___kevinjohn_gallagher___social_graph_control', 
										array(	
												$this, 
												'hook_into___kjg_pwb_hook_social_graph_data_get___kevinjohn_gallagher___social_graph_control'
											), 	
										100, 	
										2
									);					


						add_filter( 	'kjg_pwb_hook_social_graph_data_set___kevinjohn_gallagher___social_graph_control', 
										array(	
												$this, 
												'hook_into___kjg_pwb_hook_social_graph_data_set___kevinjohn_gallagher___social_graph_control'
											), 	
										100, 	
										2
									);	


				}

						
										


				public 	function 	hook_into___kjg_pwb_hook_child_settings_array__kevinjohn_gallagher___social_graph_control($args)
				{


						$this->child_settings_array['open_graph_email'] = array(
																				'id'      		=> 	'open_graph_email',
																				'title'   		=> 	'E-mail',
																				'description'	=>	'',
																				'type'    		=>	'text',
																				'section' 		=>	'section_all',
																				'choices' 		=> 	array(),
																				'class'   		=> 	''
																			);	

						$this->child_settings_array['open_graph_fax'] = array(
																				'id'      		=> 	'open_graph_fax',
																				'title'   		=> 	'Fax',
																				'description'	=>	'',
																				'type'    		=>	'text',
																				'section' 		=>	'section_all',
																				'choices' 		=> 	array(),
																				'class'   		=> 	''
																			);	
																			
																			
						$this->child_settings_array['open_graph_phone'] = array(
																				'id'      		=> 	'open_graph_phone',
																				'title'   		=> 	'Phone number',
																				'description'	=>	'',
																				'type'    		=>	'text',
																				'section' 		=>	'section_all',
																				'choices' 		=> 	array(),
																				'class'   		=> 	''
																			);	

																			


						$this->child_settings_array['open_graph_street'] = array(
																				'id'      		=> 	'open_graph_street',
																				'title'   		=> 	'Street',
																				'description'	=>	'',
																				'type'    		=>	'text',
																				'section' 		=>	'section_all',
																				'choices' 		=> 	array(),
																				'class'   		=> 	''
																			);	



						$this->child_settings_array['open_graph_locality'] = array(
																				'id'      		=> 	'open_graph_locality',
																				'title'   		=> 	'Locality',
																				'description'	=>	'',
																				'type'    		=>	'text',
																				'section' 		=>	'section_all',
																				'choices' 		=> 	array(),
																				'class'   		=> 	''
																			);																				


						$this->child_settings_array['open_graph_region'] = array(
																				'id'      		=> 	'open_graph_region',
																				'title'   		=> 	'Region',
																				'description'	=>	'',
																				'type'    		=>	'text',
																				'section' 		=>	'section_all',
																				'choices' 		=> 	array(),
																				'class'   		=> 	''
																			);	
																			


						$this->child_settings_array['open_graph_country'] = array(
																				'id'      		=> 	'open_graph_country',
																				'title'   		=> 	'Country',
																				'description'	=>	'',
																				'type'    		=>	'text',
																				'section' 		=>	'section_all',
																				'choices' 		=> 	array(),
																				'class'   		=> 	''
																			);	
																			


						$this->child_settings_array['open_graph_post_code'] = array(
																				'id'      		=> 	'open_graph_post_code',
																				'title'   		=> 	'Post Code',
																				'description'	=>	'',
																				'type'    		=>	'text',
																				'section' 		=>	'section_all',
																				'choices' 		=> 	array(),
																				'class'   		=> 	''
																			);	
																			


						$this->child_settings_array['open_graph_long'] = array(
																				'id'      		=> 	'open_graph_long',
																				'title'   		=> 	'Longtitude',
																				'description'	=>	'',
																				'type'    		=>	'text',
																				'section' 		=>	'section_all',
																				'choices' 		=> 	array(),
																				'class'   		=> 	''
																			);	
																			


						$this->child_settings_array['open_graph_lat'] = array(
																				'id'      		=> 	'open_graph_lat',
																				'title'   		=> 	'Latitude',
																				'description'	=>	'',
																				'type'    		=>	'text',
																				'section' 		=>	'section_all',
																				'choices' 		=> 	array(),
																				'class'   		=> 	''
																			);	
																			
																			

																	
						
						$args 		= 	array_merge($args, $this->child_settings_array);
						
						
						return $args;
					
				}
				
				


				


				/**
				 *		
				 *		 
				 * 		
				 * 		
				 */
				 				
				public 		function  	define_page_open_graph_extra( $post , $parent )
				{					
						$parent->email 					= 			$parent->plugin_options['open_graph_email'];
						$parent->phone_number 			= 			$parent->plugin_options['open_graph_phone'];
						$parent->fax_number 			= 			$parent->plugin_options['open_graph_fax'];
						$parent->latitude 				= 			$parent->plugin_options['open_graph_lat'];
						$parent->longitude 				= 			$parent->plugin_options['open_graph_long'];
						$parent->street_address 		= 			$parent->plugin_options['open_graph_street'];
						$parent->locality 				= 			$parent->plugin_options['open_graph_locality'];
						$parent->region 				= 			$parent->plugin_options['open_graph_region'];
						$parent->country_name 			= 			$parent->plugin_options['open_graph_country'];
						$parent->postal_code 			= 			$parent->plugin_options['open_graph_post_code'];
									
				}				









				/**
				 *		
				 *		 
				 * 		
				 * 		
				 */
				 
				public 		function 	set_page_open_graph_extra( $post , $parent )
				{		
						
						$parent->add_meta_data_full('og:email',				 		$parent->email );
						$parent->add_meta_data_full('og:phone_number',				$parent->phone_number );
						$parent->add_meta_data_full('og:fax_number',				$parent->fax_number );
						$parent->add_meta_data_full('og:latitude',				 	$parent->latitude );
						$parent->add_meta_data_full('og:longitude',				 	$parent->longitude );
						$parent->add_meta_data_full('og:street_address',			$parent->street_address );
						$parent->add_meta_data_full('og:locality',				 	$parent->locality );
						$parent->add_meta_data_full('og:region',				 	$parent->region );
						$parent->add_meta_data_full('og:country_name',				$parent->country_name );
						$parent->add_meta_data_full('og:postal_code',				$parent->postal_code );
						
				}


				
				
				
				/**
				 *		Adds Open graph data to the HEAD.
				 *		 
				 * 		@param  	string $image_html
				 * 		@return		string
				 */
				
				
				public 	function 	hook_into___kjg_pwb_hook_social_graph_data_get___kevinjohn_gallagher___social_graph_control( $parent, $post )
				{
					
						$this->define_page_open_graph_extra( $post , $parent );
				}



				public 	function 	hook_into___kjg_pwb_hook_social_graph_data_set___kevinjohn_gallagher___social_graph_control( $parent, $post )
				{
					
						$this->set_page_open_graph_extra( $post , $parent );
						
				}



				
		
		}	//	class
		
	
		$kevinjohn_gallagher___social_graph_open_graph_extra_extention			=	new kevinjohn_gallagher___social_graph_open_graph_extra_extention();
		
	
	} else {
	

			function kevinjohn_gallagher___social_graph_open_graph_extra_extention___parent_needed()
			{
					echo	"<div id='message' class='error'>";
					
					echo	"<p>";
					echo	"<strong>Kevinjohn Gallagher: Social Graph facebook extension</strong> ";	
					echo	"requires the parent framework to be installed and activated";
					echo	"</p>";
			} 

			add_action('admin_footer', 'kevinjohn_gallagher___social_graph_open_graph_extra_extention___parent_needed');	
	
	}

