<?php

namespace Jackalope\Test;

use Jackalope\TestCase;

abstract class JackrabbitTestCase extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->config['url'] = $GLOBALS['jackrabbit.uri'];
    }
}
