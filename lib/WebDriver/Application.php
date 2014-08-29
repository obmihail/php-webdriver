<?php

namespace Webdriver;

final class Application extends AbstractWebDriver
{

	protected function methods()
    {
        return array(
            'launch' => array( 'POST' ),
            'close' => array( 'POST' ),
            'reset' => array( 'POST' ),
            'background' => array( 'POST' ),
            'end_test_coverage' => array( 'POST' ),
            'strings' => array( 'POST' ),
        );
    }

}