<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.1 for API version v1.13.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\AdmissionRegistration\v1alpha1;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * Initializer describes the name and the failure policy of an initializer, and what resources it
 * applies to.
 */
class Initializer
{
    /**
     * @Kubernetes\Attribute("name",isRequired=true)
     * @var string
     */
    protected $name;

    /**
     * @Kubernetes\Attribute("rules",type="collection",model=Rule::class)
     * @var iterable|Rule[]|null
     */
    protected $rules = null;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Name is the identifier of the initializer. It will be added to the object that needs to be
     * initialized. Name should be fully qualified, e.g., alwayspullimages.kubernetes.io, where
     * "alwayspullimages" is the name of the webhook, and kubernetes.io is the name of the organization.
     * Required
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name is the identifier of the initializer. It will be added to the object that needs to be
     * initialized. Name should be fully qualified, e.g., alwayspullimages.kubernetes.io, where
     * "alwayspullimages" is the name of the webhook, and kubernetes.io is the name of the organization.
     * Required
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Rules describes what resources/subresources the initializer cares about. The initializer cares about
     * an operation if it matches _any_ Rule. Rule.Resources must not include subresources.
     *
     * @return iterable|Rule[]
     */
    public function getRules(): ?iterable
    {
        return $this->rules;
    }

    /**
     * Rules describes what resources/subresources the initializer cares about. The initializer cares about
     * an operation if it matches _any_ Rule. Rule.Resources must not include subresources.
     *
     * @return static
     */
    public function setRules(iterable $rules)
    {
        $this->rules = $rules;

        return $this;
    }

    /**
     * @return static
     */
    public function addRules(Rule $rule)
    {
        if (!$this->rules) {
            $this->rules = new Collection();
        }
        $this->rules[] = $rule;

        return $this;
    }
}
