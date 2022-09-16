<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.22.14
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Core\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * Maps a string key to a path within a volume.
 */
class KeyToPath
{
    /**
     * @Kubernetes\Attribute("key",isRequired=true)
     * @var string
     */
    protected $key;

    /**
     * @Kubernetes\Attribute("mode")
     * @var int|null
     */
    protected $mode = null;

    /**
     * @Kubernetes\Attribute("path",isRequired=true)
     * @var string
     */
    protected $path;

    /**
     * @param string $key
     * @param string $path
     */
    public function __construct(string $key, string $path)
    {
        $this->key = $key;
        $this->path = $path;
    }

    /**
     * The key to project.
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * The key to project.
     *
     * @return static
     */
    public function setKey(string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Optional: mode bits used to set permissions on this file. Must be an octal value between 0000 and
     * 0777 or a decimal value between 0 and 511. YAML accepts both octal and decimal values, JSON requires
     * decimal values for mode bits. If not specified, the volume defaultMode will be used. This might be
     * in conflict with other options that affect the file mode, like fsGroup, and the result can be other
     * mode bits set.
     */
    public function getMode(): ?int
    {
        return $this->mode;
    }

    /**
     * Optional: mode bits used to set permissions on this file. Must be an octal value between 0000 and
     * 0777 or a decimal value between 0 and 511. YAML accepts both octal and decimal values, JSON requires
     * decimal values for mode bits. If not specified, the volume defaultMode will be used. This might be
     * in conflict with other options that affect the file mode, like fsGroup, and the result can be other
     * mode bits set.
     *
     * @return static
     */
    public function setMode(int $mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * The relative path of the file to map the key to. May not be an absolute path. May not contain the
     * path element '..'. May not start with the string '..'.
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * The relative path of the file to map the key to. May not be an absolute path. May not contain the
     * path element '..'. May not start with the string '..'.
     *
     * @return static
     */
    public function setPath(string $path)
    {
        $this->path = $path;

        return $this;
    }
}
