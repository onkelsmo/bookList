<?php
/**
*
* Default Template 
*
* @author SmO
* @since 01.12.2013
*
**/ 
namespace bookList;

foreach ($this->_['entries'] as $entry)
{
	?>
	<h2>
		<a href="?view=entry&id=<?php echo $entry['id']; ?>">
			<?php echo $entry['titel']; ?>
		</a>
	</h2>
	<p>
		<?php echo $entry['content']; ?>
	</p>
	<?php 
}
?>