/**
 * general.js
 * 
 * @author jsmolka
 * @since 08.12.2013
 */
$(function ()
{
	$('#newBookForm').on('submit', function(e)
	{
		$.ajax(
		{
			type:		'post',
			url:		'index.php',
			data:		$('#newBookForm').serialize(),
			success:	data
		});
		e.preventDefault();
	});
});