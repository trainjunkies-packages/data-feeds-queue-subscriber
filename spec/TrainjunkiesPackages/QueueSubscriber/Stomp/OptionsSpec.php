<?php

namespace spec\TrainjunkiesPackages\QueueSubscriber\Stomp;

use TrainjunkiesPackages\QueueSubscriber\Stomp\Options;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use TrainjunkiesPackages\QueueSubscriber\Stomp\OptionsBuilder;

class OptionsSpec extends ObjectBehavior
{
    const HOST = 'activemq';

    function it_is_initializable()
    {
        $builder = new OptionsBuilder();
        $builder->host = self::HOST;

        $this->beConstructedFromBuilder($builder);
        $this->shouldHaveType(Options::class);

        $this->host()->shouldBe(self::HOST);
    }
}
