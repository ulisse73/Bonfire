<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Authenticated Controller
 *
 * Provides a base class for all controllers that must check user login
 * status.
 *
 * @package    Bonfire\Core\Controllers
 * @category   Controllers
 * @author     Bonfire Dev Team
 * @link       http://guides.cibonfire.com/helpers/file_helpers.html
 *
 */
class Authenticated_Controller extends Base_Controller
{

    protected $require_authentication   = true;

	//--------------------------------------------------------------------

	/**
	 * Class constructor setup login restriction and load various libraries
	 *
	 */
	public function __construct()
	{
		parent::__construct();

		// Load additional libraries
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('', '');
		// $this->form_validation->CI =& $this;	// Hack to make it work properly with HMVC
	}//end construct()

	//--------------------------------------------------------------------

}

/* End of file Authenticated_Controller.php */
/* Location: ./application/core/Authenticated_Controller.php */