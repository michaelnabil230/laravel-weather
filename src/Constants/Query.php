<?php

namespace MichaelNabil230\Weather\Constants;

trait Query
{
    public $query = [];

    public function query()
    {
        return $this->query;
    }

    public function withQuery(array $query)
    {
        $this->query = array_merge($this->query, $query);

        return $this;
    }
}
