<?php

class soapclientTest extends PHPUnit_Framework_TestCase
{
    public static function setUpBeforeClass() {
        jelix_init_test_env();
    }

    function testCall() {

        try {
            $profile = jProfiles::get("jsoapclient");
            if (!isset($profile['wsdl']) || $profile['wsdl'] == '') {
                $this->markTestSkipped('no wsdl specified in profile for jSoapClient. cannot test jSoapClient::get()');
                return;
            }
        }
        catch(Exception $e) {
            $this->markTestSkipped('no profile for jSoapClient. cannot test jSoapClient::get()');
            return;
        }

        $client = jSoapClient::get();

        $result =  $client->hello('Sylvain');
        $this->assertEquals("Hello Sylvain", $result);

        $result =  $client->__soapCall('hello', array('Sylvain'));
        $this->assertEquals("Hello Sylvain", $result);
    }

    function testRedirection() {
        try {
            $profile = jProfiles::get("jsoapclient");
            if (!isset($profile['wsdl']) || $profile['wsdl'] == '') {
                $this->markTestSkipped('no wsdl specified in profile for jSoapClient. cannot test jSoapClient::get()');
                return;
            }
        }
        catch(Exception $e) {
            $this->markTestSkipped('no profile for jSoapClient. cannot test jSoapClient::get()');
            return;
        }
        $client = jSoapClient::get();

        $result =  $client->redirecttohello('Sylvain');
        $this->markTestIncomplete('not found yet a good implementation for redirection with soap request');
        $this->assertEquals("Hello Sylvain", $result);
    }
}