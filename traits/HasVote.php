<?php

trait HasVote
{
    public $vote;

    public function setVote($vote)
    {
        $this->vote = $vote;
    }

    public function getVote()
    {
        return $this->vote;
    }
}
