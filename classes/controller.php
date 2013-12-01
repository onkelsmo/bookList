<?php
/**
*
* Controller kontrolliert, was angezeigt wird und was damit passiert. 
*
* @author SmO
* @since 29.01.2013
*
**/

class Controller
{
	private $request = null;
	private $template = '';
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
		$this->request = $request;
		$this->template = !empty($request['view']) ? $request['view'] : 'default';
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
				
			case 'default':
			default:
				$entries = Model::getEntries();
				$innerView->setTemplate('default');
				$innerView->assign('entries', $entries);
		}
		
		$this->view->setTemplate('theBlog');
		$this->view->assign('blog_titel', 'Der Titel des Blogs');
		$this->view->assign('blog_footer', 'Ein Blog von und mit MVC');
		$this->view->assign('blog_content', $innerView->loadTemplate());
		return $this->view->loadTemplate();
	}
}

?>