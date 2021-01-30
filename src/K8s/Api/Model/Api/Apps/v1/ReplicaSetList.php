<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.0 for API version v1.13.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Apps\v1;

use ArrayIterator;
use IteratorAggregate;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\ListMeta;
use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * ReplicaSetList is a collection of ReplicaSets.
 *
 * @Kubernetes\Kind("ReplicaSetList",group="apps",version="v1")
 *
 * @implements \IteratorAggregate<int, ReplicaSet>
 */
class ReplicaSetList implements IteratorAggregate
{
    /**
     * @Kubernetes\Attribute("apiVersion")
     * @var string|null
     */
    protected $apiVersion = 'apps/v1';

    /**
     * @Kubernetes\Attribute("items",type="collection",model=ReplicaSet::class,isRequired=true)
     * @var iterable|ReplicaSet[]
     */
    protected $items;

    /**
     * @Kubernetes\Attribute("kind")
     * @var string|null
     */
    protected $kind = 'ReplicaSetList';

    /**
     * @Kubernetes\Attribute("metadata",type="model",model=ListMeta::class)
     * @var ListMeta|null
     */
    protected $metadata = null;

    /**
     * @param iterable|ReplicaSet[] $items
     */
    public function __construct(iterable $items)
    {
        $this->items = new Collection($items);
    }

    /**
     * continue may be set if the user set a limit on the number of items returned, and indicates that the
     * server has more data available. The value is opaque and may be used to issue another request to the
     * endpoint that served this list to retrieve the next set of available objects. Continuing a
     * consistent list may not be possible if the server configuration has changed or more than a few
     * minutes have passed. The resourceVersion field returned when using this continue value will be
     * identical to the value in the first response, unless you have received this token from an error
     * message.
     */
    public function getContinue(): ?string
    {
        return $this->metadata->getContinue();
    }

    /**
     * String that identifies the server's internal version of this object that can be used by clients to
     * determine when objects have changed. Value must be treated as opaque by clients and passed
     * unmodified back to the server. Populated by the system. Read-only. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#concurrency-control-and-consistency
     */
    public function getResourceVersion(): ?string
    {
        return $this->metadata->getResourceVersion();
    }

    /**
     * selfLink is a URL representing this object. Populated by the system. Read-only.
     */
    public function getSelfLink(): ?string
    {
        return $this->metadata->getSelfLink();
    }

    /**
     * @return ArrayIterator|iterable|ReplicaSet[]
     */
    public function getIterator()
    {
        return new ArrayIterator(iterator_to_array($this->items));
    }

    /**
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert
     * recognized schemas to the latest internal value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#resources
     */
    public function getApiVersion(): ?string
    {
        return $this->apiVersion;
    }

    /**
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert
     * recognized schemas to the latest internal value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#resources
     *
     * @return static
     */
    public function setApiVersion(string $apiVersion)
    {
        $this->apiVersion = $apiVersion;

        return $this;
    }

    /**
     * List of ReplicaSets. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/replicationcontroller
     *
     * @return iterable|ReplicaSet[]
     */
    public function getItems(): iterable
    {
        return $this->items;
    }

    /**
     * List of ReplicaSets. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/replicationcontroller
     *
     * @return static
     */
    public function setItems(iterable $items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @return static
     */
    public function addItems(ReplicaSet $item)
    {
        if (!$this->items) {
            $this->items = new Collection();
        }
        $this->items[] = $item;

        return $this;
    }

    /**
     * Kind is a string value representing the REST resource this object represents. Servers may infer this
     * from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }

    /**
     * Kind is a string value representing the REST resource this object represents. Servers may infer this
     * from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @return static
     */
    public function setKind(string $kind)
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * Standard list metadata. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     */
    public function getMetadata(): ?ListMeta
    {
        return $this->metadata;
    }

    /**
     * Standard list metadata. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @return static
     */
    public function setMetadata(ListMeta $metadata)
    {
        $this->metadata = $metadata;

        return $this;
    }
}
