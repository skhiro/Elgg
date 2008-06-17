<?php

	/**
	 * Elgg profile plugin language pack
	 * 
	 * @package ElggProfile
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Ben Werdmuller <ben@curverider.co.uk>
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.com/
	 */

	$english = array(
	
		/**
		 * Menu items and titles
		 */
	
			'profile' => "Profile",
			'profile:yours' => "Your profile",
			'profile:user' => "%s's profile",
	
			'profile:edit' => "Edit profile",
			'profile:editicon' => "Change your profile picture",
	
			'profile:aboutme' => "About me", 
			'profile:description' => "About me", 
			'profile:location' => "Location",
			'profile:skills' => "Skills",  
			'profile:interests' => "Interests", 
			'profile:contactemail' => "Contact email",
			'profile:phone' => "Telephone",
			'profile:mobile' => "Mobile phone",
			'profile:website' => "Website",

		/**
		 * Status messages
		 */
	
			'profile:saved' => "Your profile was successfully saved.",
			'profile:icon:uploaded' => "Your profile icon was successfully uploaded.",
	
		/**
		 * Error messages
		 */
	
			'profile:noaccess' => "You do not have permission to edit this profile.",
			'profile:notfound' => "Sorry; we could not find the specified profile.",
			'profile:cantedit' => "Sorry; you do not have permission to edit this profile.",
			'profile:icon:notfound' => "Sorry; there was a problem uploading your profile icon.",
	
	);
					
	add_translation("en",$english);

?>