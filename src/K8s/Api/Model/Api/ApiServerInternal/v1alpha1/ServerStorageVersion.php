<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.22.16
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\ApiServerInternal\v1alpha1;

use K8s\Core\Annotation as Kubernetes;

/**
 * An API server instance reports the version it can decode and the version it encodes objects to when
 * persisting objects in the backend.
 */
class ServerStorageVersion
{
    /**
     * @Kubernetes\Attribute("apiServerID")
     * @var string|null
     */
    protected $apiServerID = null;

    /**
     * @Kubernetes\Attribute("decodableVersions")
     * @var string[]|null
     */
    protected $decodableVersions = null;

    /**
     * @Kubernetes\Attribute("encodingVersion")
     * @var string|null
     */
    protected $encodingVersion = null;

    /**
     * @param string|null $apiServerID
     * @param string[]|null $decodableVersions
     * @param string|null $encodingVersion
     */
    public function __construct(?string $apiServerID = null, ?array $decodableVersions = null, ?string $encodingVersion = null)
    {
        $this->apiServerID = $apiServerID;
        $this->decodableVersions = $decodableVersions;
        $this->encodingVersion = $encodingVersion;
    }

    /**
     * The ID of the reporting API server.
     */
    public function getApiServerID(): ?string
    {
        return $this->apiServerID;
    }

    /**
     * The ID of the reporting API server.
     *
     * @return static
     */
    public function setApiServerID(string $apiServerID)
    {
        $this->apiServerID = $apiServerID;

        return $this;
    }

    /**
     * The API server can decode objects encoded in these versions. The encodingVersion must be included in
     * the decodableVersions.
     */
    public function getDecodableVersions(): ?array
    {
        return $this->decodableVersions;
    }

    /**
     * The API server can decode objects encoded in these versions. The encodingVersion must be included in
     * the decodableVersions.
     *
     * @return static
     */
    public function setDecodableVersions(array $decodableVersions)
    {
        $this->decodableVersions = $decodableVersions;

        return $this;
    }

    /**
     * The API server encodes the object to this version when persisting it in the backend (e.g., etcd).
     */
    public function getEncodingVersion(): ?string
    {
        return $this->encodingVersion;
    }

    /**
     * The API server encodes the object to this version when persisting it in the backend (e.g., etcd).
     *
     * @return static
     */
    public function setEncodingVersion(string $encodingVersion)
    {
        $this->encodingVersion = $encodingVersion;

        return $this;
    }
}
