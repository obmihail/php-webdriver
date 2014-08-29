<?php

namespace Webdriver;

include_once "Device.php";
include_once "Application.php";

final class Appium extends AbstractWebDriver
{

	protected function methods()
    {
        return array();
    }

	private $Application = null;
	private $Device = null;

	public function device()
	{
		return new Device( $this->url.'/device' );
	}

	public function app()
	{
		return new Application( $this->url.'/app' );
	}


	public function element( Element $element )
	{
		return new AppiumElement( $this->url.'/element'.'/'.$element->getID() );
	}

}