<?php

namespace RayRutjes\Domain\Specification;

use RayRutjes\Domain\Specification;

abstract class AbstractSpecification implements Specification
{
    /**
     * @param Specification $other
     *
     * @return AndSpecification
     */
    public function and_(Specification $other)
    {
        return new AndSpecification($this, $other);
    }

    /**
     * @param Specification $other
     *
     * @return OrSpecification
     */
    public function or_(Specification $other)
    {
        return new OrSpecification($this, $other);
    }

    /**
     * @return NotSpecification
     */
    public function not_()
    {
        return new NotSpecification($this);
    }
}
