<?php

/**
 * This file was automatically generated by k8s/api-generator 0.4.0 for API version v1.19.7
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\FlowControl\v1alpha1;

use K8s\Core\Annotation as Kubernetes;

/**
 * UserSubject holds detailed information for user-kind subject.
 */
class UserSubject
{
    /**
     * @Kubernetes\Attribute("name",isRequired=true)
     * @var string
     */
    protected $name;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * `name` is the username that matches, or "*" to match all usernames. Required.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * `name` is the username that matches, or "*" to match all usernames. Required.
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }
}