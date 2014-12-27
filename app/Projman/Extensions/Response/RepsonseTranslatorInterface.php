<?php
namespace Projman\Extensions\Response;

interface RepsonseTranslatorInterface {

	public function send ($viewName, $data = null);

}