<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}
//phpinfo();
class Twig
{
	private $CI;
	private $_twig;
	private $_template_dir;
	private $cache_dir;
	
	/**
	 * Constructor
	 *
	 */
	function __construct()
	{
	    $this->CI =& get_instance();
	    $this->CI->config->load('twig');
	    
	    ini_set('include_path',
		ini_get('include_path') . PATH_SEPARATOR . APPPATH . 'libraries/Twig');
		require_once (string) "Autoloader" . '.php';
		log_message('debug', "Twig Autoloader Loaded");
		
		Twig_Autoloader::register();

		$this->_template_dir = $this->CI->config->item('template_dir');
		$this->_cache_dir = $this->CI->config->item('cache_dir');

		$loader = new Twig_Loader_Filesystem($this->_template_dir, $this->_cache_dir);

		$twig_env_options = array(
			'auto_reload' => true,
            'debug'=>TRUE,
			'cache' => $this->_cache_dir,
		);
        $this->_twig = new Twig_Environment($loader,$twig_env_options);
        $this->_twig->addExtension(new Twig_Extension_Debug());
		if(isset($this->CI->session)){
			$this->_twig->addGlobal("session", $this->CI->session);
		}
	
		$this->ci_function_init('base_url', 'base_url');
		$this->ci_function_init('site_url', 'site_url');
		$this->ci_function_init('current_url', 'current_url');
		$this->ci_function_init('uri_string', 'uri_string');
		$this->ci_function_init('form_input', 'form_input');
        $this->ci_function_init('lang', 'lang');
		$this->ci_function_init('form_hidden', 'form_hidden');
		$this->ci_function_init('form_submit', 'form_submit');
		
		
		
	}
	public function ci_function_init($twig_name, $callable)
	{
	   $this->_twig->addFunction(
		 new Twig_SimpleFunction($twig_name, $callable)//, array('is_safe' => array('html')))
	   );
	}

	public function render($template, $data = array(), $returnhtml = false) {	    
        $template = $this->_twig->loadTemplate($template);
        if($returnhtml)
            return $template->render($data);
        else
	    	$this->CI->output->append_output($template->render($data));
        //return $template->render($data);
	}
}

?>