<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.0 for API version v1.19.7
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Networking\v1beta1;

use K8s\Api\Model\Api\Core\v1\TypedLocalObjectReference;
use K8s\Core\Annotation as Kubernetes;

/**
 * IngressClassSpec provides information about the class of an Ingress.
 */
class IngressClassSpec
{
    /**
     * @Kubernetes\Attribute("controller")
     * @var string|null
     */
    protected $controller = null;

    /**
     * @Kubernetes\Attribute("parameters",type="model",model=TypedLocalObjectReference::class)
     * @var TypedLocalObjectReference|null
     */
    protected $parameters = null;

    /**
     * @param string|null $controller
     * @param TypedLocalObjectReference|null $parameters
     */
    public function __construct(?string $controller = null, ?TypedLocalObjectReference $parameters = null)
    {
        $this->controller = $controller;
        $this->parameters = $parameters;
    }

    /**
     * Controller refers to the name of the controller that should handle this class. This allows for
     * different "flavors" that are controlled by the same controller. For example, you may have different
     * Parameters for the same implementing controller. This should be specified as a domain-prefixed path
     * no more than 250 characters in length, e.g. "acme.io/ingress-controller". This field is immutable.
     */
    public function getController(): ?string
    {
        return $this->controller;
    }

    /**
     * Controller refers to the name of the controller that should handle this class. This allows for
     * different "flavors" that are controlled by the same controller. For example, you may have different
     * Parameters for the same implementing controller. This should be specified as a domain-prefixed path
     * no more than 250 characters in length, e.g. "acme.io/ingress-controller". This field is immutable.
     *
     * @return static
     */
    public function setController(string $controller)
    {
        $this->controller = $controller;

        return $this;
    }

    /**
     * Parameters is a link to a custom resource containing additional configuration for the controller.
     * This is optional if the controller does not require extra parameters.
     */
    public function getParameters(): ?TypedLocalObjectReference
    {
        return $this->parameters;
    }

    /**
     * Parameters is a link to a custom resource containing additional configuration for the controller.
     * This is optional if the controller does not require extra parameters.
     *
     * @return static
     */
    public function setParameters(TypedLocalObjectReference $parameters)
    {
        $this->parameters = $parameters;

        return $this;
    }
}