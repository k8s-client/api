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

namespace K8s\Api\Model\Api\Core\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * NamespaceStatus is information about the current status of a Namespace.
 */
class NamespaceStatus
{
    /**
     * @Kubernetes\Attribute("phase")
     * @var string|null
     */
    protected $phase = null;

    /**
     * @param string|null $phase
     */
    public function __construct(?string $phase = null)
    {
        $this->phase = $phase;
    }

    /**
     * Phase is the current lifecycle phase of the namespace. More info:
     * https://kubernetes.io/docs/tasks/administer-cluster/namespaces/
     */
    public function getPhase(): ?string
    {
        return $this->phase;
    }

    /**
     * Phase is the current lifecycle phase of the namespace. More info:
     * https://kubernetes.io/docs/tasks/administer-cluster/namespaces/
     *
     * @return static
     */
    public function setPhase(string $phase)
    {
        $this->phase = $phase;

        return $this;
    }
}
