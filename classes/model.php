<?php
/**
*
* Klasse fuer den Datenzugriff
*
* @author SmO
* @since 28.01.2013
*
**/
class Model
{
	// Eintraege eines Blogs als zwei dimensionales Array
	private static $entries = array
	(
		array("id"=>"0", "titel"=>"Eintrag 1", "content"=>"Ich bin der erste Eintrag"),
		array("id"=>"1", "titel"=>"Eintrag 2", "content"=>"Ich bin der zweite Eintrag"),
		array("id"=>"2", "titel"=>"Eintrag 3", "content"=>"Ich bin der dritte Eintrag")		
	);
	
	/**
	 * Gibt alle Eintraege des Blogs zuruek
	 *
	 * return array Array von Blogeintraegen 
	 *
	 */	
	public static function getEntries()
	{
		return self::$entries;
	}
	
	/**
	 * Gibt einen bestimmten Eintrag zurueck
	 * 
	 * @param int $id ID des gesuchten Eintrags
	 * @return Array Array das einen Eintrag repraesentiert, bzw 'null' wenn dieser nicht existiert
	 */
	public static function getEntry($id)
	{
		if(array_key_exists($id, self::$entries))
		{
			return self::$entries[$id];
		}
		else
		{
			return null;
		}
	}
}
?>