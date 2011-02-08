<?php
//require_once 'PHPUnit/Extensions/SeleniumTestCase.php';
 
class ExampleTest extends PHPUnit_Extensions_SeleniumTestCase
{
    protected $captureScreenshotOnFailure = TRUE;
    protected $screenshotPath = '/var/www/localhost/htdocs/screenshots';
    protected $screenshotUrl = 'http://localhost/screenshots';
    
    function __construct($name = NULL, $data = array(), $browser = array()) {
        $this->screenshotPath = ROOT_PATH.'/screenshots';
        $this->screenshotUrl = 'file:/'.ROOT_PATH.'/screenshots';
        parent::__construct($name, $data, $browser);
    }
    
    protected function setUp()
    {
        $this->setBrowser('*firefox');
        $this->setBrowserUrl('http://www.google.com/');
    }
 
    public function testTitle()
    {
        $this->open('http://www.google.com/');
        $this->assertTitle('GoogleNotValid');
    }
}
?>