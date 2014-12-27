<?php

class BaseController extends Controller {

	protected $_responseTranslator;

	public function __construct ()
	{
		
		$this->_responseTranslator = App::make('responseTranslator');
	}
	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
