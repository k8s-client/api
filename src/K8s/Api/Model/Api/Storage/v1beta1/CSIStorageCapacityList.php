<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.21.11
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Storage\v1beta1;

use ArrayIterator;
use IteratorAggregate;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\ListMeta;
use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;
use Traversable;

/**
 * CSIStorageCapacityList is a collection of CSIStorageCapacity objects.
 *
 * @Kubernetes\Kind("CSIStorageCapacityList",group="storage.k8s.io",version="v1beta1")
 *
 * @implements \IteratorAggregate<int, CSIStorageCapacity>
 */
class CSIStorageCapacityList implements IteratorAggregate
{
    /**
     * @Kubernetes\Attribute("apiVersion")
     * @var string|null
     */
    protected $apiVersion = 'storage.k8s.io/v1beta1';

    /**
     * @Kubernetes\Attribute("items",type="collection",model=CSIStorageCapacity::class,isRequired=true)
     * @var iterable|CSIStorageCapacity[]
     */
    protected $items;

    /**
     * @Kubernetes\Attribute("kind")
     * @var string|null
     */
    protected $kind = 'CSIStorageCapacityList';

    /**
     * @Kubernetes\Attribute("metadata",type="model",model=ListMeta::class)
     * @var ListMeta|null
     */
    protected $metadata = null;

    /**
     * @param iterable|CSIStorageCapacity[] $items
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
     * remainingItemCount is the number of subsequent items in the list which are not included in this list
     * response. If the list request contained label or field selectors, then the number of remaining items
     * is unknown and the field will be left unset and omitted during serialization. If the list is
     * complete (either because it is not chunking or because this is the last chunk), then there are no
     * more remaining items and this field will be left unset and omitted during serialization. Servers
     * older than v1.15 do not set this field. The intended use of the remainingItemCount is *estimating*
     * the size of a collection. Clients should not rely on the remainingItemCount to be set or to be
     * exact.
     */
    public function getRemainingItemCount(): ?int
    {
        return $this->metadata->getRemainingItemCount();
    }

    /**
     * String that identifies the server's internal version of this object that can be used by clients to
     * determine when objects have changed. Value must be treated as opaque by clients and passed
     * unmodified back to the server. Populated by the system. Read-only. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#concurrency-control-and-consistency
     */
    public function getResourceVersion(): ?string
    {
        return $this->metadata->getResourceVersion();
    }

    /**
     * selfLink is a URL representing this object. Populated by the system. Read-only.
     *
     * DEPRECATED Kubernetes will stop propagating this field in 1.20 release and the field is planned to
     * be removed in 1.21 release.
     */
    public function getSelfLink(): ?string
    {
        return $this->metadata->getSelfLink();
    }

    /**
     * @return ArrayIterator|iterable|CSIStorageCapacity[]
     */
    public function getIterator(): Traversable
    {
        return new ArrayIterator(iterator_to_array($this->items));
    }

    /**
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert
     * recognized schemas to the latest internal value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     */
    public function getApiVersion(): ?string
    {
        return $this->apiVersion;
    }

    /**
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert
     * recognized schemas to the latest internal value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     *
     * @return static
     */
    public function setApiVersion(string $apiVersion)
    {
        $this->apiVersion = $apiVersion;

        return $this;
    }

    /**
     * Items is the list of CSIStorageCapacity objects.
     *
     * @return iterable|CSIStorageCapacity[]
     */
    public function getItems(): iterable
    {
        return $this->items;
    }

    /**
     * Items is the list of CSIStorageCapacity objects.
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
    public function addItems(CSIStorageCapacity $item)
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
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }

    /**
     * Kind is a string value representing the REST resource this object represents. Servers may infer this
     * from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     *
     * @return static
     */
    public function setKind(string $kind)
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * Standard list metadata More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     */
    public function getMetadata(): ?ListMeta
    {
        return $this->metadata;
    }

    /**
     * Standard list metadata More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     *
     * @return static
     */
    public function setMetadata(ListMeta $metadata)
    {
        $this->metadata = $metadata;

        return $this;
    }
}
