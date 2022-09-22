<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.24.6
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\ApiServerInternal\v1alpha1;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * API server instances report the versions they can decode and the version they encode objects to when
 * persisting objects in the backend.
 */
class StorageVersionStatus
{
    /**
     * @Kubernetes\Attribute("commonEncodingVersion")
     * @var string|null
     */
    protected $commonEncodingVersion = null;

    /**
     * @Kubernetes\Attribute("conditions",type="collection",model=StorageVersionCondition::class)
     * @var iterable|StorageVersionCondition[]|null
     */
    protected $conditions = null;

    /**
     * @Kubernetes\Attribute("storageVersions",type="collection",model=ServerStorageVersion::class)
     * @var iterable|ServerStorageVersion[]|null
     */
    protected $storageVersions = null;

    /**
     * @param string|null $commonEncodingVersion
     * @param iterable|StorageVersionCondition[] $conditions
     * @param iterable|ServerStorageVersion[] $storageVersions
     */
    public function __construct(?string $commonEncodingVersion = null, iterable $conditions = [], iterable $storageVersions = [])
    {
        $this->commonEncodingVersion = $commonEncodingVersion;
        $this->conditions = new Collection($conditions);
        $this->storageVersions = new Collection($storageVersions);
    }

    /**
     * If all API server instances agree on the same encoding storage version, then this field is set to
     * that version. Otherwise this field is left empty. API servers should finish updating its
     * storageVersionStatus entry before serving write operations, so that this field will be in sync with
     * the reality.
     */
    public function getCommonEncodingVersion(): ?string
    {
        return $this->commonEncodingVersion;
    }

    /**
     * If all API server instances agree on the same encoding storage version, then this field is set to
     * that version. Otherwise this field is left empty. API servers should finish updating its
     * storageVersionStatus entry before serving write operations, so that this field will be in sync with
     * the reality.
     *
     * @return static
     */
    public function setCommonEncodingVersion(string $commonEncodingVersion)
    {
        $this->commonEncodingVersion = $commonEncodingVersion;

        return $this;
    }

    /**
     * The latest available observations of the storageVersion's state.
     *
     * @return iterable|StorageVersionCondition[]
     */
    public function getConditions(): ?iterable
    {
        return $this->conditions;
    }

    /**
     * The latest available observations of the storageVersion's state.
     *
     * @return static
     */
    public function setConditions(iterable $conditions)
    {
        $this->conditions = $conditions;

        return $this;
    }

    /**
     * @return static
     */
    public function addConditions(StorageVersionCondition $condition)
    {
        if (!$this->conditions) {
            $this->conditions = new Collection();
        }
        $this->conditions[] = $condition;

        return $this;
    }

    /**
     * The reported versions per API server instance.
     *
     * @return iterable|ServerStorageVersion[]
     */
    public function getStorageVersions(): ?iterable
    {
        return $this->storageVersions;
    }

    /**
     * The reported versions per API server instance.
     *
     * @return static
     */
    public function setStorageVersions(iterable $storageVersions)
    {
        $this->storageVersions = $storageVersions;

        return $this;
    }

    /**
     * @return static
     */
    public function addStorageVersions(ServerStorageVersion $storageVersion)
    {
        if (!$this->storageVersions) {
            $this->storageVersions = new Collection();
        }
        $this->storageVersions[] = $storageVersion;

        return $this;
    }
}
