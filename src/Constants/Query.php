<?php

namespace MichaelNabil230\Weather\Constants;

trait Query
{
    private array $query = [];

    public function query(): array
    {
        return $this->query;
    }

    public function withQuery(array $query): self
    {
        $this->query = array_merge_recursive($this->query, $query);

        return $this;
    }
}
