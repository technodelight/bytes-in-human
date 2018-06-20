<?php

namespace spec\Technodelight\BytesInHuman;

use Technodelight\BytesInHuman\BytesInHuman;
use PhpSpec\ObjectBehavior;

class BytesInHumanSpec extends ObjectBehavior
{
    function it_renders_bytes()
    {
        $this->beConstructedThrough('fromBytes', [1000]);
        $this->asString()->shouldReturn('1000B');
    }

    function it_renders_kilobytes()
    {
        $this->beConstructedThrough('fromBytes', [1024]);
        $this->asString()->shouldReturn('1.00K');
    }

    function it_renders_megs()
    {
        $this->beConstructedThrough('fromBytes', [pow(1024, 2)]);
        $this->asString()->shouldReturn('1.00M');
    }

    function it_renders_gigs()
    {
        $this->beConstructedThrough('fromBytes', [pow(1024, 3)]);
        $this->asString()->shouldReturn('1.00G');
    }
}
