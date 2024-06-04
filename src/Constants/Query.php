<?php

namespace MichaelNabil230\Weather\Constants;

trait Query
{
    /**
     * @var array<string, mixed>
     */
    protected array $query = [];

    /**
     * @param  array<string, mixed>  $query
     */
    public function withQuery(array $query): self
    {
        $this->query = array_merge_recursive($this->query, $query);

        return $this;
    }
}
