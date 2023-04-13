<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.24.13
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\FlowControl\v1beta1;

use K8s\Core\Annotation as Kubernetes;

/**
 * GroupSubject holds detailed information for group-kind subject.
 */
class GroupSubject
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
     * name is the user group that matches, or "*" to match all user groups. See
     * https://github.com/kubernetes/apiserver/blob/master/pkg/authentication/user/user.go for some
     * well-known group names. Required.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * name is the user group that matches, or "*" to match all user groups. See
     * https://github.com/kubernetes/apiserver/blob/master/pkg/authentication/user/user.go for some
     * well-known group names. Required.
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }
}
