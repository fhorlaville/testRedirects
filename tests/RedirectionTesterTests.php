<?php
/**
 * Created by PhpStorm.
 * User: fh
 * Date: 09/03/2016
 * Time: 15:40
 */

namespace FranckHorlaville\RedirectionTester;

require_once dirname(__FILE__) . '/../src/RedirectionTester.php';

class RedirectionTesterTests extends \PHPUnit_Framework_TestCase
{

    public function testSetup()
    {
        $app=new RedirectionTester();

        // Assert
        $this->assertNotNull($app, "app is null");
    }

}