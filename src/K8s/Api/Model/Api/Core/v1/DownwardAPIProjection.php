<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.21.14
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Core\v1;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * Represents downward API info for projecting into a projected volume. Note that this is identical to
 * a downwardAPI volume source without the default mode.
 */
class DownwardAPIProjection
{
    /**
     * @Kubernetes\Attribute("items",type="collection",model=DownwardAPIVolumeFile::class)
     * @var iterable|DownwardAPIVolumeFile[]|null
     */
    protected $items = null;

    /**
     * @param iterable|DownwardAPIVolumeFile[] $items
     */
    public function __construct(iterable $items = [])
    {
        $this->items = new Collection($items);
    }

    /**
     * Items is a list of DownwardAPIVolume file
     *
     * @return iterable|DownwardAPIVolumeFile[]
     */
    public function getItems(): ?iterable
    {
        return $this->items;
    }

    /**
     * Items is a list of DownwardAPIVolume file
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
    public function addItems(DownwardAPIVolumeFile $item)
    {
        if (!$this->items) {
            $this->items = new Collection();
        }
        $this->items[] = $item;

        return $this;
    }
}
