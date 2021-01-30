<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.1 for API version v1.13.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\ApiMachinery\Apis\Meta\v1;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * Initializers tracks the progress of initialization.
 */
class Initializers
{
    /**
     * @Kubernetes\Attribute("pending",type="collection",model=Initializer::class,isRequired=true)
     * @var iterable|Initializer[]
     */
    protected $pending;

    /**
     * @Kubernetes\Attribute("result",type="model",model=Status::class)
     * @var Status|null
     */
    protected $result = null;

    /**
     * @param iterable|Initializer[] $pending
     */
    public function __construct(iterable $pending)
    {
        $this->pending = new Collection($pending);
    }

    /**
     * Pending is a list of initializers that must execute in order before this object is visible. When the
     * last pending initializer is removed, and no failing result is set, the initializers struct will be
     * set to nil and the object is considered as initialized and visible to all clients.
     *
     * @return iterable|Initializer[]
     */
    public function getPending(): iterable
    {
        return $this->pending;
    }

    /**
     * Pending is a list of initializers that must execute in order before this object is visible. When the
     * last pending initializer is removed, and no failing result is set, the initializers struct will be
     * set to nil and the object is considered as initialized and visible to all clients.
     *
     * @return static
     */
    public function setPending(iterable $pending)
    {
        $this->pending = $pending;

        return $this;
    }

    /**
     * @return static
     */
    public function addPending(Initializer $pending)
    {
        if (!$this->pending) {
            $this->pending = new Collection();
        }
        $this->pending[] = $pending;

        return $this;
    }

    /**
     * If result is set with the Failure field, the object will be persisted to storage and then deleted,
     * ensuring that other clients can observe the deletion.
     */
    public function getResult(): ?Status
    {
        return $this->result;
    }

    /**
     * If result is set with the Failure field, the object will be persisted to storage and then deleted,
     * ensuring that other clients can observe the deletion.
     *
     * @return static
     */
    public function setResult(Status $result)
    {
        $this->result = $result;

        return $this;
    }
}
