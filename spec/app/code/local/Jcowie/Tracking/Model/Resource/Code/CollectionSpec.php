<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class Jcowie_Tracking_Model_Resource_Code_CollectionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Jcowie_Tracking_Model_Resource_Code_Collection');
    }
}
