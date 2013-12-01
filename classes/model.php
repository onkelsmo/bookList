<?php
/**
*
* Klasse fuer den Datenzugriff
*
* @author SmO
* @since 01.12.2013
*
**/
namespace bookList;

class Model
{
	private static $entries = array();
		
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