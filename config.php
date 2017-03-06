<?php
	
	/** o nome do banco **/
	define('DB_NAME','venon');

	/** usuario do banco **/
	define('DB_USER','brunoromeiro');

	/** senha do banco de dados **/
	define('DB_PASSWORD','marynei2012'); 

	/** nome do host de banco de dados **/
	define('DB_HOST','mysql857.umbler.com');

	/** caminho absoluto para pasta do sistema **/
	if(!defined('ABSPATH'))
		define('ABSPATH', dirname(__FILE__).'/');

	/** caminho no server para o sistema **/
	if(!defined('BASEURL'))
		define('BASEURL','/crud-bootstrap-php/');

	/** caminho do arquivo de banco de dados **/
	if(!defined('DBAPI'))
		define('DBAPI', ABSPATH . '/inc/database.php');

	/** caminho dos templates de header e footer **/
	define('HEADER_TEMPLATE',ABSPATH . 'inc/header.php');
	define('FOOTER_TEMPLATE',ABSPATH . 'inc/footer.php');
?>