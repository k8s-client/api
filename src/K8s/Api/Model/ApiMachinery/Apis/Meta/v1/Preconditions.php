<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.22.6
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\ApiMachinery\Apis\Meta\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * Preconditions must be fulfilled before an operation (update, delete, etc.) is carried out.
 */
class Preconditions
{
    /**
     * @Kubernetes\Attribute("resourceVersion")
     * @var string|null
     */
    protected $resourceVersion = null;

    /**
     * @Kubernetes\Attribute("uid")
     * @var string|null
     */
    protected $uid = null;

    /**
     * @param string|null $resourceVersion
     * @param string|null $uid
     */
    public function __construct(?string $resourceVersion = null, ?string $uid = null)
    {
        $this->resourceVersion = $resourceVersion;
        $this->uid = $uid;
    }

    /**
     * Specifies the target ResourceVersion
     */
    public function getResourceVersion(): ?string
    {
        return $this->resourceVersion;
    }

    /**
     * Specifies the target ResourceVersion
     *
     * @return static
     */
    public function setResourceVersion(string $resourceVersion)
    {
        $this->resourceVersion = $resourceVersion;

        return $this;
    }

    /**
     * Specifies the target UID.
     */
    public function getUid(): ?string
    {
        return $this->uid;
    }

    /**
     * Specifies the target UID.
     *
     * @return static
     */
    public function setUid(string $uid)
    {
        $this->uid = $uid;

        return $this;
    }
}
