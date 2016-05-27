<?php
class SeleniumTestCase extends PHPUnit_Extensions_Selenium2TestCase
{
    protected $baseUrl = 'http://selenium-research.dev';

    protected function setUp()
    {
        $this->setBrowser('firefox');
        $this->setBrowserUrl($this->baseUrl);
    }

    protected function visit($path)
    {
        $this->url($path);

        return $this;
    }

    public function type($value, $name)
    {
        $this->byName($name)->value($value);

        return $this;
    }

    public function press($text)
    {
        $this->byXPath("//button[contains(text(), '{$text}')]")
             ->click();

        return $this;
    }

    protected function see($text, $tag = 'body')
    {
        $this->assertContains($text, $this->byTag($tag)->text());

        return $this;
    }

    protected function seePageIs($path)
    {
        $this->assertEquals($this->baseUrl . $path, $this->url());
    }

    protected function hold($seconds)
    {
        sleep($seconds);

        return $this;
    }

}
