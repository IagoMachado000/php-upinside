<?php

namespace Source\Related;

class User
{
    private $job;
    private $fn;
    private $ln;

    public function __construct($job, $fn, $ln)
    {
        $this->job = $job;        
        $this->fn = $fn;        
        $this->ln = $ln;        
    }

    public function getJob()
    {
        return $this->job;
    }

    public function getFN()
    {
        return $this->fn;
    }

    public function getLN()
    {
        return $this->ln;
    }
}