<?php

namespace MichaelNabil230\Weather\Constants;

trait Query
{
    /**
     * @var array<array-key, mixed>
     */
    protected array $query = [];

    /**
     * @param  array<array-key, mixed>  $query
     */
    public function withQuery(array $query): self
    {
        $this->query = array_merge_recursive($this->query, $query);

        return $this;
    }
}
