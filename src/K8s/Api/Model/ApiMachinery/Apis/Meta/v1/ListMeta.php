<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.1 for API version v1.11.10
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
 * ListMeta describes metadata that synthetic resources must have, including lists and various status
 * objects. A resource may have only one of {ObjectMeta, ListMeta}.
 */
class ListMeta
{
    /**
     * @Kubernetes\Attribute("continue")
     * @var string|null
     */
    protected $continue = null;

    /**
     * @Kubernetes\Attribute("resourceVersion")
     * @var string|null
     */
    protected $resourceVersion = null;

    /**
     * @Kubernetes\Attribute("selfLink")
     * @var string|null
     */
    protected $selfLink = null;

    /**
     * @param string|null $continue
     * @param string|null $resourceVersion
     * @param string|null $selfLink
     */
    public function __construct(?string $continue = null, ?string $resourceVersion = null, ?string $selfLink = null)
    {
        $this->continue = $continue;
        $this->resourceVersion = $resourceVersion;
        $this->selfLink = $selfLink;
    }

    /**
     * continue may be set if the user set a limit on the number of items returned, and indicates that the
     * server has more data available. The value is opaque and may be used to issue another request to the
     * endpoint that served this list to retrieve the next set of available objects. Continuing a list may
     * not be possible if the server configuration has changed or more than a few minutes have passed. The
     * resourceVersion field returned when using this continue value will be identical to the value in the
     * first response.
     */
    public function getContinue(): ?string
    {
        return $this->continue;
    }

    /**
     * continue may be set if the user set a limit on the number of items returned, and indicates that the
     * server has more data available. The value is opaque and may be used to issue another request to the
     * endpoint that served this list to retrieve the next set of available objects. Continuing a list may
     * not be possible if the server configuration has changed or more than a few minutes have passed. The
     * resourceVersion field returned when using this continue value will be identical to the value in the
     * first response.
     *
     * @return static
     */
    public function setContinue(string $continue)
    {
        $this->continue = $continue;

        return $this;
    }

    /**
     * String that identifies the server's internal version of this object that can be used by clients to
     * determine when objects have changed. Value must be treated as opaque by clients and passed
     * unmodified back to the server. Populated by the system. Read-only. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#concurrency-control-and-consistency
     */
    public function getResourceVersion(): ?string
    {
        return $this->resourceVersion;
    }

    /**
     * selfLink is a URL representing this object. Populated by the system. Read-only.
     */
    public function getSelfLink(): ?string
    {
        return $this->selfLink;
    }
}
