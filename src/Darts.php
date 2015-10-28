<?php

class Darts
{

    protected $score = 501;

    public function score()
    {
        return $this->score;
    }

    public function turn($darts)
    {
        while($darts[0] % 2 != 0){
            array_shift($darts);
        }
        $totalDarts = array_sum($darts);
        if($this->score - $totalDarts < 0){
            $totalDarts -= array_pop($darts);
        }
        $this->score -= $totalDarts;
    }


}
