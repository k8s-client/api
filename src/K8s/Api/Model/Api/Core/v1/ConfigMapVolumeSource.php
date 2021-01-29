<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.0 for API version v1.18.15
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
 * Adapts a ConfigMap into a volume.
 *
 * The contents of the target ConfigMap's Data field will be presented in a volume as files using the
 * keys in the Data field as the file names, unless the items element is populated with specific
 * mappings of keys to paths. ConfigMap volumes support ownership management and SELinux relabeling.
 */
class ConfigMapVolumeSource
{
    /**
     * @Kubernetes\Attribute("defaultMode")
     * @var int|null
     */
    protected $defaultMode = null;

    /**
     * @Kubernetes\Attribute("items",type="collection",model=KeyToPath::class)
     * @var iterable|KeyToPath[]|null
     */
    protected $items = null;

    /**
     * @Kubernetes\Attribute("name")
     * @var string|null
     */
    protected $name = null;

    /**
     * @Kubernetes\Attribute("optional")
     * @var bool|null
     */
    protected $optional = null;

    /**
     * @param int|null $defaultMode
     * @param iterable|KeyToPath[] $items
     * @param string|null $name
     * @param bool|null $optional
     */
    public function __construct(?int $defaultMode = null, iterable $items = [], ?string $name = null, ?bool $optional = null)
    {
        $this->defaultMode = $defaultMode;
        $this->items = new Collection($items);
        $this->name = $name;
        $this->optional = $optional;
    }

    /**
     * Optional: mode bits to use on created files by default. Must be a value between 0 and 0777. Defaults
     * to 0644. Directories within the path are not affected by this setting. This might be in conflict
     * with other options that affect the file mode, like fsGroup, and the result can be other mode bits
     * set.
     */
    public function getDefaultMode(): ?int
    {
        return $this->defaultMode;
    }

    /**
     * Optional: mode bits to use on created files by default. Must be a value between 0 and 0777. Defaults
     * to 0644. Directories within the path are not affected by this setting. This might be in conflict
     * with other options that affect the file mode, like fsGroup, and the result can be other mode bits
     * set.
     *
     * @return static
     */
    public function setDefaultMode(int $defaultMode)
    {
        $this->defaultMode = $defaultMode;

        return $this;
    }

    /**
     * If unspecified, each key-value pair in the Data field of the referenced ConfigMap will be projected
     * into the volume as a file whose name is the key and content is the value. If specified, the listed
     * keys will be projected into the specified paths, and unlisted keys will not be present. If a key is
     * specified which is not present in the ConfigMap, the volume setup will error unless it is marked
     * optional. Paths must be relative and may not contain the '..' path or start with '..'.
     *
     * @return iterable|KeyToPath[]
     */
    public function getItems(): ?iterable
    {
        return $this->items;
    }

    /**
     * If unspecified, each key-value pair in the Data field of the referenced ConfigMap will be projected
     * into the volume as a file whose name is the key and content is the value. If specified, the listed
     * keys will be projected into the specified paths, and unlisted keys will not be present. If a key is
     * specified which is not present in the ConfigMap, the volume setup will error unless it is marked
     * optional. Paths must be relative and may not contain the '..' path or start with '..'.
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
    public function addItems(KeyToPath $item)
    {
        if (!$this->items) {
            $this->items = new Collection();
        }
        $this->items[] = $item;

        return $this;
    }

    /**
     * Name of the referent. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/names/#names
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of the referent. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/names/#names
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Specify whether the ConfigMap or its keys must be defined
     */
    public function isOptional(): ?bool
    {
        return $this->optional;
    }

    /**
     * Specify whether the ConfigMap or its keys must be defined
     *
     * @return static
     */
    public function setIsOptional(bool $optional)
    {
        $this->optional = $optional;

        return $this;
    }
}
