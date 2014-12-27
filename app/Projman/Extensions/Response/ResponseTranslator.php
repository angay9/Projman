<?php

namespace Projman\Extensions\Response;
use \Request;
use \Response;
use \Route;
use \View;

class ResponseTranslator implements RepsonseTranslatorInterface {

	public function send ($viewName, $data = null) {
		
		if (Request::ajax()) {
			return Response::json($data);
		}		
		return View::make($viewName)->with($data);
	}
	
}