<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.22.12
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
 * Represents a projected volume source
 */
class ProjectedVolumeSource
{
    /**
     * @Kubernetes\Attribute("defaultMode")
     * @var int|null
     */
    protected $defaultMode = null;

    /**
     * @Kubernetes\Attribute("sources",type="collection",model=VolumeProjection::class)
     * @var iterable|VolumeProjection[]|null
     */
    protected $sources = null;

    /**
     * @param int|null $defaultMode
     * @param iterable|VolumeProjection[] $sources
     */
    public function __construct(?int $defaultMode = null, iterable $sources = [])
    {
        $this->defaultMode = $defaultMode;
        $this->sources = new Collection($sources);
    }

    /**
     * Mode bits used to set permissions on created files by default. Must be an octal value between 0000
     * and 0777 or a decimal value between 0 and 511. YAML accepts both octal and decimal values, JSON
     * requires decimal values for mode bits. Directories within the path are not affected by this setting.
     * This might be in conflict with other options that affect the file mode, like fsGroup, and the result
     * can be other mode bits set.
     */
    public function getDefaultMode(): ?int
    {
        return $this->defaultMode;
    }

    /**
     * Mode bits used to set permissions on created files by default. Must be an octal value between 0000
     * and 0777 or a decimal value between 0 and 511. YAML accepts both octal and decimal values, JSON
     * requires decimal values for mode bits. Directories within the path are not affected by this setting.
     * This might be in conflict with other options that affect the file mode, like fsGroup, and the result
     * can be other mode bits set.
     *
     * @return static
     */
    public function setDefaultMode(int $defaultMode)
    {
        $this->defaultMode = $defaultMode;

        return $this;
    }

    /**
     * list of volume projections
     *
     * @return iterable|VolumeProjection[]
     */
    public function getSources(): ?iterable
    {
        return $this->sources;
    }

    /**
     * list of volume projections
     *
     * @return static
     */
    public function setSources(iterable $sources)
    {
        $this->sources = $sources;

        return $this;
    }

    /**
     * @return static
     */
    public function addSources(VolumeProjection $source)
    {
        if (!$this->sources) {
            $this->sources = new Collection();
        }
        $this->sources[] = $source;

        return $this;
    }
}
