<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.1 for API version v1.16.15
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
 * Adapts a Secret into a volume.
 *
 * The contents of the target Secret's Data field will be presented in a volume as files using the keys
 * in the Data field as the file names. Secret volumes support ownership management and SELinux
 * relabeling.
 */
class SecretVolumeSource
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
     * @Kubernetes\Attribute("optional")
     * @var bool|null
     */
    protected $optional = null;

    /**
     * @Kubernetes\Attribute("secretName")
     * @var string|null
     */
    protected $secretName = null;

    /**
     * @param int|null $defaultMode
     * @param iterable|KeyToPath[] $items
     * @param bool|null $optional
     * @param string|null $secretName
     */
    public function __construct(?int $defaultMode = null, iterable $items = [], ?bool $optional = null, ?string $secretName = null)
    {
        $this->defaultMode = $defaultMode;
        $this->items = new Collection($items);
        $this->optional = $optional;
        $this->secretName = $secretName;
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
     * If unspecified, each key-value pair in the Data field of the referenced Secret will be projected
     * into the volume as a file whose name is the key and content is the value. If specified, the listed
     * keys will be projected into the specified paths, and unlisted keys will not be present. If a key is
     * specified which is not present in the Secret, the volume setup will error unless it is marked
     * optional. Paths must be relative and may not contain the '..' path or start with '..'.
     *
     * @return iterable|KeyToPath[]
     */
    public function getItems(): ?iterable
    {
        return $this->items;
    }

    /**
     * If unspecified, each key-value pair in the Data field of the referenced Secret will be projected
     * into the volume as a file whose name is the key and content is the value. If specified, the listed
     * keys will be projected into the specified paths, and unlisted keys will not be present. If a key is
     * specified which is not present in the Secret, the volume setup will error unless it is marked
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
     * Specify whether the Secret or its keys must be defined
     */
    public function isOptional(): ?bool
    {
        return $this->optional;
    }

    /**
     * Specify whether the Secret or its keys must be defined
     *
     * @return static
     */
    public function setIsOptional(bool $optional)
    {
        $this->optional = $optional;

        return $this;
    }

    /**
     * Name of the secret in the pod's namespace to use. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#secret
     */
    public function getSecretName(): ?string
    {
        return $this->secretName;
    }

    /**
     * Name of the secret in the pod's namespace to use. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#secret
     *
     * @return static
     */
    public function setSecretName(string $secretName)
    {
        $this->secretName = $secretName;

        return $this;
    }
}
