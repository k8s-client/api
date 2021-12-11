<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.22.4
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
 * EnvVar represents an environment variable present in a Container.
 */
class EnvVar
{
    /**
     * @Kubernetes\Attribute("name",isRequired=true)
     * @var string
     */
    protected $name;

    /**
     * @Kubernetes\Attribute("value")
     * @var string|null
     */
    protected $value = null;

    /**
     * @Kubernetes\Attribute("valueFrom",type="model",model=EnvVarSource::class)
     * @var EnvVarSource|null
     */
    protected $valueFrom = null;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Name of the environment variable. Must be a C_IDENTIFIER.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name of the environment variable. Must be a C_IDENTIFIER.
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Variable references $(VAR_NAME) are expanded using the previously defined environment variables in
     * the container and any service environment variables. If a variable cannot be resolved, the reference
     * in the input string will be unchanged. Double $$ are reduced to a single $, which allows for
     * escaping the $(VAR_NAME) syntax: i.e. "$$(VAR_NAME)" will produce the string literal "$(VAR_NAME)".
     * Escaped references will never be expanded, regardless of whether the variable exists or not.
     * Defaults to "".
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Variable references $(VAR_NAME) are expanded using the previously defined environment variables in
     * the container and any service environment variables. If a variable cannot be resolved, the reference
     * in the input string will be unchanged. Double $$ are reduced to a single $, which allows for
     * escaping the $(VAR_NAME) syntax: i.e. "$$(VAR_NAME)" will produce the string literal "$(VAR_NAME)".
     * Escaped references will never be expanded, regardless of whether the variable exists or not.
     * Defaults to "".
     *
     * @return static
     */
    public function setValue(string $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Source for the environment variable's value. Cannot be used if value is not empty.
     */
    public function getValueFrom(): ?EnvVarSource
    {
        return $this->valueFrom;
    }

    /**
     * Source for the environment variable's value. Cannot be used if value is not empty.
     *
     * @return static
     */
    public function setValueFrom(EnvVarSource $valueFrom)
    {
        $this->valueFrom = $valueFrom;

        return $this;
    }
}
