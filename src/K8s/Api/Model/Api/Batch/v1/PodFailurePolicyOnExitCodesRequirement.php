<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.25.4
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Batch\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * PodFailurePolicyOnExitCodesRequirement describes the requirement for handling a failed pod based on
 * its container exit codes. In particular, it lookups the .state.terminated.exitCode for each app
 * container and init container status, represented by the .status.containerStatuses and
 * .status.initContainerStatuses fields in the Pod status, respectively. Containers completed with
 * success (exit code 0) are excluded from the requirement check.
 */
class PodFailurePolicyOnExitCodesRequirement
{
    /**
     * @Kubernetes\Attribute("containerName")
     * @var string|null
     */
    protected $containerName = null;

    /**
     * @Kubernetes\Attribute("operator",isRequired=true)
     * @var string
     */
    protected $operator;

    /**
     * @Kubernetes\Attribute("values",isRequired=true)
     * @var int[]
     */
    protected $values;

    /**
     * @param string $operator
     * @param int[] $values
     */
    public function __construct(string $operator, array $values)
    {
        $this->operator = $operator;
        $this->values = $values;
    }

    /**
     * Restricts the check for exit codes to the container with the specified name. When null, the rule
     * applies to all containers. When specified, it should match one the container or initContainer names
     * in the pod template.
     */
    public function getContainerName(): ?string
    {
        return $this->containerName;
    }

    /**
     * Restricts the check for exit codes to the container with the specified name. When null, the rule
     * applies to all containers. When specified, it should match one the container or initContainer names
     * in the pod template.
     *
     * @return static
     */
    public function setContainerName(string $containerName)
    {
        $this->containerName = $containerName;

        return $this;
    }

    /**
     * Represents the relationship between the container exit code(s) and the specified values. Containers
     * completed with success (exit code 0) are excluded from the requirement check. Possible values are: -
     * In: the requirement is satisfied if at least one container exit code
     *   (might be multiple if there are multiple containers not restricted
     *   by the 'containerName' field) is in the set of specified values.
     * - NotIn: the requirement is satisfied if at least one container exit code
     *   (might be multiple if there are multiple containers not restricted
     *   by the 'containerName' field) is not in the set of specified values.
     * Additional values are considered to be added in the future. Clients should react to an unknown
     * operator by assuming the requirement is not satisfied.
     */
    public function getOperator(): string
    {
        return $this->operator;
    }

    /**
     * Represents the relationship between the container exit code(s) and the specified values. Containers
     * completed with success (exit code 0) are excluded from the requirement check. Possible values are: -
     * In: the requirement is satisfied if at least one container exit code
     *   (might be multiple if there are multiple containers not restricted
     *   by the 'containerName' field) is in the set of specified values.
     * - NotIn: the requirement is satisfied if at least one container exit code
     *   (might be multiple if there are multiple containers not restricted
     *   by the 'containerName' field) is not in the set of specified values.
     * Additional values are considered to be added in the future. Clients should react to an unknown
     * operator by assuming the requirement is not satisfied.
     *
     *
     *
     * @return static
     */
    public function setOperator(string $operator)
    {
        $this->operator = $operator;

        return $this;
    }

    /**
     * Specifies the set of values. Each returned container exit code (might be multiple in case of
     * multiple containers) is checked against this set of values with respect to the operator. The list of
     * values must be ordered and must not contain duplicates. Value '0' cannot be used for the In
     * operator. At least one element is required. At most 255 elements are allowed.
     */
    public function getValues(): array
    {
        return $this->values;
    }

    /**
     * Specifies the set of values. Each returned container exit code (might be multiple in case of
     * multiple containers) is checked against this set of values with respect to the operator. The list of
     * values must be ordered and must not contain duplicates. Value '0' cannot be used for the In
     * operator. At least one element is required. At most 255 elements are allowed.
     *
     * @return static
     */
    public function setValues(array $values)
    {
        $this->values = $values;

        return $this;
    }
}
