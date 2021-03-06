<?php
	require_once 'global/module.class.php';

	class Module404 extends Module
	{
		public function __construct($core)
		{
			parent::__construct($core);
		}
		
		public function execute()
		{
			header('HTTP/1.0 404 Not Found');
			
		    $this->core->setPage('Erreur 404', $this->core->getBaseURL().'error/404');
			
			return true;
		}
		
		public function display()
		{
			?>
			<h1>Erreur 404</h1>
			<div class="message error">
				La page que vous recherchez n'existe pas. 
				<a href="<?php echo $this->core->getBaseURL(); ?>">Aller à l'accueil</a>
			</div>
			<?php
		}
	}
?>
