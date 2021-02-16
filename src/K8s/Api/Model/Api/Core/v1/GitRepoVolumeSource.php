<?php

/**
 * This file was automatically generated by k8s/api-generator 0.10.0 for API version v1.13.12
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
 * Represents a volume that is populated with the contents of a git repository. Git repo volumes do not
 * support ownership management. Git repo volumes support SELinux relabeling.
 *
 * DEPRECATED: GitRepo is deprecated. To provision a container with a git repo, mount an EmptyDir into
 * an InitContainer that clones the repo using git, then mount the EmptyDir into the Pod's container.
 */
class GitRepoVolumeSource
{
    /**
     * @Kubernetes\Attribute("directory")
     * @var string|null
     */
    protected $directory = null;

    /**
     * @Kubernetes\Attribute("repository",isRequired=true)
     * @var string
     */
    protected $repository;

    /**
     * @Kubernetes\Attribute("revision")
     * @var string|null
     */
    protected $revision = null;

    /**
     * @param string $repository
     */
    public function __construct(string $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Target directory name. Must not contain or start with '..'.  If '.' is supplied, the volume
     * directory will be the git repository.  Otherwise, if specified, the volume will contain the git
     * repository in the subdirectory with the given name.
     */
    public function getDirectory(): ?string
    {
        return $this->directory;
    }

    /**
     * Target directory name. Must not contain or start with '..'.  If '.' is supplied, the volume
     * directory will be the git repository.  Otherwise, if specified, the volume will contain the git
     * repository in the subdirectory with the given name.
     *
     * @return static
     */
    public function setDirectory(string $directory)
    {
        $this->directory = $directory;

        return $this;
    }

    /**
     * Repository URL
     */
    public function getRepository(): string
    {
        return $this->repository;
    }

    /**
     * Repository URL
     *
     * @return static
     */
    public function setRepository(string $repository)
    {
        $this->repository = $repository;

        return $this;
    }

    /**
     * Commit hash for the specified revision.
     */
    public function getRevision(): ?string
    {
        return $this->revision;
    }

    /**
     * Commit hash for the specified revision.
     *
     * @return static
     */
    public function setRevision(string $revision)
    {
        $this->revision = $revision;

        return $this;
    }
}
