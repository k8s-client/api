<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.1 for API version v1.13.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Extensions\v1beta1;

use K8s\Core\Annotation as Kubernetes;

/**
 * DEPRECATED. DeploymentRollback stores the information required to rollback a deployment.
 *
 * @Kubernetes\Kind("DeploymentRollback",group="extensions",version="v1beta1")
 */
class DeploymentRollback
{
    /**
     * @Kubernetes\Attribute("apiVersion")
     * @var string|null
     */
    protected $apiVersion = 'extensions/v1beta1';

    /**
     * @Kubernetes\Attribute("kind")
     * @var string|null
     */
    protected $kind = 'DeploymentRollback';

    /**
     * @Kubernetes\Attribute("name",isRequired=true)
     * @var string
     */
    protected $name;

    /**
     * @Kubernetes\Attribute("rollbackTo",type="model",model=RollbackConfig::class,isRequired=true)
     * @var RollbackConfig
     */
    protected $rollbackTo;

    /**
     * @Kubernetes\Attribute("updatedAnnotations")
     * @var string[]|null
     */
    protected $updatedAnnotations = null;

    /**
     * @param string $name
     * @param RollbackConfig $rollbackTo
     */
    public function __construct(string $name, RollbackConfig $rollbackTo)
    {
        $this->name = $name;
        $this->rollbackTo = $rollbackTo;
    }

    /**
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert
     * recognized schemas to the latest internal value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#resources
     */
    public function getApiVersion(): ?string
    {
        return $this->apiVersion;
    }

    /**
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert
     * recognized schemas to the latest internal value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#resources
     *
     * @return static
     */
    public function setApiVersion(string $apiVersion)
    {
        $this->apiVersion = $apiVersion;

        return $this;
    }

    /**
     * Kind is a string value representing the REST resource this object represents. Servers may infer this
     * from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }

    /**
     * Kind is a string value representing the REST resource this object represents. Servers may infer this
     * from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @return static
     */
    public function setKind(string $kind)
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * Required: This must match the Name of a deployment.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Required: This must match the Name of a deployment.
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * The config of this deployment rollback.
     */
    public function getRollbackTo(): RollbackConfig
    {
        return $this->rollbackTo;
    }

    /**
     * The config of this deployment rollback.
     *
     * @return static
     */
    public function setRollbackTo(RollbackConfig $rollbackTo)
    {
        $this->rollbackTo = $rollbackTo;

        return $this;
    }

    /**
     * The annotations to be updated to a deployment
     */
    public function getUpdatedAnnotations(): ?array
    {
        return $this->updatedAnnotations;
    }

    /**
     * The annotations to be updated to a deployment
     *
     * @return static
     */
    public function setUpdatedAnnotations(array $updatedAnnotations)
    {
        $this->updatedAnnotations = $updatedAnnotations;

        return $this;
    }
}
