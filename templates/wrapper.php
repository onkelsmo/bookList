<?php
/**
*
* Aeu�eres Template
*
* @author SmO
* @since 01.12.2013
*
**/
namespace bookList;
?>
<!Doctype html>
<html>
	<head>
		<title><?php echo $this->_['title']; ?></title>
		<script type="text/javascript" src="<?php echo $this->_['jQuery_lib'] ?>" ></script>
		<script type="text/javascript" src="<?php echo $this->_['jQuery_own'] ?>" ></script>
	</head>
	<body>
		<div class="header"><?php echo $this->_['header']; ?></div>
		<div class="content"><?php echo $this->_['content']; ?></div>
		<div class="footer"><?php echo $this->_['footer']; ?></div>
	</body>
</html>