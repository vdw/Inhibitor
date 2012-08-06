<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Errors extends CI_Controller {

	/**
	 * Parse error
	 *
	 * Produces a parse error
	 *
	 * @access	public
	 * @return	void
	 */
	public function error_1()
	{

		echo $x;

	}

	/**
	 * Fatal error
	 *
	 * Produces a fatal error
	 *
	 * @access	public
	 * @return	void
	 */
	public function error_2()
	{

		$this->doesnotexist();

	}

	/**
	 * Exception
	 *
	 * Produces an exception
	 *
	 * @access	public
	 * @return	void
	 */
	public function error_3()
	{

		return 1/0;

	}


}

/* End of file errors.php */
/* Location: ./application/errors.php */