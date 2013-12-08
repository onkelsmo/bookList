<?php
/**
*
* Template for new Book entry
*
* @author SmO
* @since 01.12.2013
*
**/
namespace bookList;
?>
<p>Neues Buch:</p>
<form action="#" type="post">
	<label for="<?php echo $this->_['title'] ?>"><?php echo $this->_['title'] ?></label>
	<input name="<?php echo $this->_['title'] ?>" type="text" />
	<br />
	<label for="<?php echo $this->_['author'] ?>"><?php echo $this->_['author'] ?></label>
	<input name="<?php echo $this->_['author'] ?>" type="text" />
	<br />
	<label for="<?php echo $this->_['isbn'] ?>"><?php echo $this->_['isbn'] ?></label>
	<input name="<?php echo $this->_['isbn'] ?>" type="text" />
	<br />
	<label for="<?php echo $this->_['genre'] ?>"><?php echo $this->_['genre'] ?></label>
	<input name="<?php echo $this->_['genre'] ?>" type="text" />
	<br />
	<label for="<?php echo $this->_['publisher'] ?>"><?php echo $this->_['publisher'] ?></label>
	<input name="<?php echo $this->_['publisher'] ?>" type="text" />
	<br />
	<label for="<?php echo $this->_['publication_date'] ?>"><?php echo $this->_['publication_date'] ?></label>
	<input name="<?php echo $this->_['publication_date'] ?>" type="text" />
	<br />
	<label for="<?php echo $this->_['owner'] ?>"><?php echo $this->_['owner'] ?></label>
	<input name="<?php echo $this->_['owner'] ?>" type="text" />
</form>
<a href="?view=list"><button>list</button></a>