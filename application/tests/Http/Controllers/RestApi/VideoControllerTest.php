<?php

class VideoControllerTest  extends TestCase
{
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Laravel 5');
    }
}
