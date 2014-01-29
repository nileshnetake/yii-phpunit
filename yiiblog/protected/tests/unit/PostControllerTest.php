<?php
class PostControllerTest extends CTestCase {

    public function testHelloworld() 	{
        $val=true;
        //$this->assertTrue($val);

        $this->assertEquals("helloworld", $this->helloWorld());
    }

}
