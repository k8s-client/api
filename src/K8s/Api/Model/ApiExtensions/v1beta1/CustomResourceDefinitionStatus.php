<?php

/**
 * This file was automatically generated by k8s/api-generator 0.10.0 for API version v1.15.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\ApiExtensions\v1beta1;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * CustomResourceDefinitionStatus indicates the state of the CustomResourceDefinition
 */
class CustomResourceDefinitionStatus
{
    /**
     * @Kubernetes\Attribute("acceptedNames",type="model",model=CustomResourceDefinitionNames::class,isRequired=true)
     * @var CustomResourceDefinitionNames
     */
    protected $acceptedNames;

    /**
     * @Kubernetes\Attribute("conditions",type="collection",model=CustomResourceDefinitionCondition::class,isRequired=true)
     * @var iterable|CustomResourceDefinitionCondition[]
     */
    protected $conditions;

    /**
     * @Kubernetes\Attribute("storedVersions",isRequired=true)
     * @var string[]
     */
    protected $storedVersions;

    /**
     * @param CustomResourceDefinitionNames $acceptedNames
     * @param iterable|CustomResourceDefinitionCondition[] $conditions
     * @param string[] $storedVersions
     */
    public function __construct(CustomResourceDefinitionNames $acceptedNames, iterable $conditions, array $storedVersions)
    {
        $this->acceptedNames = $acceptedNames;
        $this->conditions = new Collection($conditions);
        $this->storedVersions = $storedVersions;
    }

    /**
     * AcceptedNames are the names that are actually being used to serve discovery They may be different
     * than the names in spec.
     */
    public function getAcceptedNames(): CustomResourceDefinitionNames
    {
        return $this->acceptedNames;
    }

    /**
     * AcceptedNames are the names that are actually being used to serve discovery They may be different
     * than the names in spec.
     *
     * @return static
     */
    public function setAcceptedNames(CustomResourceDefinitionNames $acceptedNames)
    {
        $this->acceptedNames = $acceptedNames;

        return $this;
    }

    /**
     * Conditions indicate state for particular aspects of a CustomResourceDefinition
     *
     * @return iterable|CustomResourceDefinitionCondition[]
     */
    public function getConditions(): iterable
    {
        return $this->conditions;
    }

    /**
     * Conditions indicate state for particular aspects of a CustomResourceDefinition
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
    public function addConditions(CustomResourceDefinitionCondition $condition)
    {
        if (!$this->conditions) {
            $this->conditions = new Collection();
        }
        $this->conditions[] = $condition;

        return $this;
    }

    /**
     * StoredVersions are all versions of CustomResources that were ever persisted. Tracking these versions
     * allows a migration path for stored versions in etcd. The field is mutable so the migration
     * controller can first finish a migration to another version (i.e. that no old objects are left in the
     * storage), and then remove the rest of the versions from this list. None of the versions in this list
     * can be removed from the spec.Versions field.
     */
    public function getStoredVersions(): array
    {
        return $this->storedVersions;
    }

    /**
     * StoredVersions are all versions of CustomResources that were ever persisted. Tracking these versions
     * allows a migration path for stored versions in etcd. The field is mutable so the migration
     * controller can first finish a migration to another version (i.e. that no old objects are left in the
     * storage), and then remove the rest of the versions from this list. None of the versions in this list
     * can be removed from the spec.Versions field.
     *
     * @return static
     */
    public function setStoredVersions(array $storedVersions)
    {
        $this->storedVersions = $storedVersions;

        return $this;
    }
}
