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
			url:		'dataHandler.php',
			data:		$('#newBookForm').serialize(),
			success:	function(){alert("form submited");}
		});
		e.preventDefault();
	});
});