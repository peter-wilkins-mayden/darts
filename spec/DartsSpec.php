<?php

namespace spec;


use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DartsSpec extends ObjectBehavior
{

    function it_scores_501_if_no_darts_hit_board()
    {
        $this->score()->shouldBe(501);
    }
    function it_reduces_the_score_the_sum_of_three_darts()
    {
        $this->turn([2,1,1]);
        $this->score()->shouldBe(497);
    }
    function it_scores_a_perfect_leg()
    {
        $this->turn([60,60,60,60,60,60,60,57,24]);
        $this->score()->shouldBe(0);
    }
    function it_ignores_Darts_till_double_in()
    {
        $this->turn([11,60,60]);
        $this->score()->shouldBe(381);
    }
    function it_ignores_darts_that_bust()
    {
        $this->turn([60,60,60,60,60,60,60,57,30]);
        $this->score()->shouldBe(24);
    }
}
