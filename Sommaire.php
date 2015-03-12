<?php
/**
 * Plugin Sommaire
 *
 * @package	PLX
 * @version	1.0
 * @date	11/03/2015
 * @author	Cyril MAGUIRE
 **/
class Sommaire extends plxPlugin {

	public function __construct($default_lang) {
		# appel du constructeur de la classe plxPlugin (obligatoire)
		parent::__construct($default_lang);
		
		# Declaration d'un hook (existant ou nouveau)
		$this->addHook('ThemeEndBody','ThemeEndBody');		
	}
	
	# HOOKS
	public function onActivate(){
		if (!is_file(PLX_CONFIG_PATH.'plugins/Sommaire.site.css')) {
			plxUtils::write(file_get_contents(PLX_PLUGINS.'Sommaire/css/site.css'),PLX_ROOT.PLX_CONFIG_PATH.'plugins/Sommaire.site.css');
		}
	}
	public function ThemeEndBody(){
		echo "\t".'<script type="text/javascript">
				if(typeof(jQuery) === "undefined") {document.write(\'<script  type="text/javascript" src="'.PLX_PLUGINS.'Sommaire/js/jQuery.1.8.1.min.js"><\/script>\');}
			</script>'."\n";
		echo "\t".'<script type="text/javascript" src="'.PLX_PLUGINS.'Sommaire/js/Sommaire.js"></script>'."\n";
	}
}
?>
