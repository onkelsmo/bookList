<?php
/**
*
* Default Template 
*
* @author SmO
* @since 29.01.2013
*
**/ 
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