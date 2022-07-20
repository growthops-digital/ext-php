<?php

namespace Growthops\Traits;

trait Composable
{
    public static function compose(?self $model = null): self
    {
        if (notNull($model)) {
            return $model;
        }

        return new self();
    }

    public function commit(): self
    {
        $this->save();

        return $this;
    }
}
