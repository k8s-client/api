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

namespace K8s\Api\Model\Api\Apps\v1beta1;

use K8s\Core\Annotation as Kubernetes;

/**
 * DEPRECATED.
 */
class RollbackConfig
{
    /**
     * @Kubernetes\Attribute("revision")
     * @var int|null
     */
    protected $revision = null;

    /**
     * @param int|null $revision
     */
    public function __construct(?int $revision = null)
    {
        $this->revision = $revision;
    }

    /**
     * The revision to rollback to. If set to 0, rollback to the last revision.
     */
    public function getRevision(): ?int
    {
        return $this->revision;
    }

    /**
     * The revision to rollback to. If set to 0, rollback to the last revision.
     *
     * @return static
     */
    public function setRevision(int $revision)
    {
        $this->revision = $revision;

        return $this;
    }
}
