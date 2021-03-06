<?php
/**
*
* Controller kontrolliert, was angezeigt wird und was damit passiert. 
*
* @author SmO
* @since 01.12.2013
*
**/
namespace bookList;

class Controller
{
	private $request = null;
	private $template = '';
	private $model = null;
	private $view = null;
	
	/**
	 * 
	 * Konstruktor erstellt den Controller
	 * 
	 * @param Array $request Array aus $_GET und $_POST
	 */
	public function __construct($request)
	{
		$this->view = new View();
		//$this->request = $request;
		$this->setRequest($request);		
		$this->template = !empty($request['view']) ? $request['view'] : 'default';
		
		dump($request['newBook']);
	}
	
	private function setRequest($request)
	{
		if (empty($request['newBook']))
		{
			echo "XXX";
		}
		/*
		if (isset($request['Titel']) &&
			isset($request['Autor']) &&
			isset($request['ISBN']) &&
			isset($request['Genre']) &&
		 	isset($request['Verlag']) &&
		 	isset($request['Veröffentlichungsdatum']) &&
		 	isset($request['Besitzer']))
		{
			//TODO: Save Data to Database
		}
		*/
		
		$this->request = $request;
	}
	
	/**
	 * 
	 * Methode zum Anzeigen des Content
	 * 
	 * @return string Content der Application
	 */
	public function display()
	{
		$innerView = new View();
		
		switch ($this->template)
		{
			case 'entry':
				$innerView->setTemplate('entry');
				$entryId = $this->request['id'];
				$entry = Model::getEntry($entryId);
				$innerView->assign('titel', $entry['titel']);
				$innerView->assign('content', $entry['content']);
				break;
				
			case 'new':
				$innerView->setTemplate('new');
				$innerView->assign('title', 'Titel');
				$innerView->assign('author', 'Autor');
				$innerView->assign('isbn', 'ISBN');
				$innerView->assign('genre', 'Genre');
				$innerView->assign('publisher', 'Verlag');
				$innerView->assign('publication_date', 'Ver&ouml;ffentlichungsdatum');
				$innerView->assign('owner', 'Besitzer');	
				$innerView->assign('save', 'Speichern');
				break;
			
			case 'default':
			default:
				$entries = Model::getEntries();
				$innerView->setTemplate('list');
				$innerView->assign('entries', $entries);
		}
		
		$this->view->setTemplate('wrapper');
		$this->view->assign('jQuery_lib', 'js/jQuery-1.10.2.min.js');
		$this->view->assign('jQuery_own', 'js/general.js');
		$this->view->assign('title', 'B&uuml;cherliste');
		$this->view->assign('header', 'B&uuml;cherliste');
		$this->view->assign('content', $innerView->loadTemplate());
		$this->view->assign('footer', '&copy; Jan Smolka 12.2013');
		return $this->view->loadTemplate();
	}
}

?>