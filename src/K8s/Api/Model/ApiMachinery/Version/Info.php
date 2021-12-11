<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.15.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\ApiMachinery\Version;

use K8s\Core\Annotation as Kubernetes;

/**
 * Info contains versioning information. how we'll want to distribute that information.
 */
class Info
{
    /**
     * @Kubernetes\Attribute("buildDate",isRequired=true)
     * @var string
     */
    protected $buildDate;

    /**
     * @Kubernetes\Attribute("compiler",isRequired=true)
     * @var string
     */
    protected $compiler;

    /**
     * @Kubernetes\Attribute("gitCommit",isRequired=true)
     * @var string
     */
    protected $gitCommit;

    /**
     * @Kubernetes\Attribute("gitTreeState",isRequired=true)
     * @var string
     */
    protected $gitTreeState;

    /**
     * @Kubernetes\Attribute("gitVersion",isRequired=true)
     * @var string
     */
    protected $gitVersion;

    /**
     * @Kubernetes\Attribute("goVersion",isRequired=true)
     * @var string
     */
    protected $goVersion;

    /**
     * @Kubernetes\Attribute("major",isRequired=true)
     * @var string
     */
    protected $major;

    /**
     * @Kubernetes\Attribute("minor",isRequired=true)
     * @var string
     */
    protected $minor;

    /**
     * @Kubernetes\Attribute("platform",isRequired=true)
     * @var string
     */
    protected $platform;

    /**
     * @param string $buildDate
     * @param string $compiler
     * @param string $gitCommit
     * @param string $gitTreeState
     * @param string $gitVersion
     * @param string $goVersion
     * @param string $major
     * @param string $minor
     * @param string $platform
     */
    public function __construct(
        string $buildDate,
        string $compiler,
        string $gitCommit,
        string $gitTreeState,
        string $gitVersion,
        string $goVersion,
        string $major,
        string $minor,
        string $platform
    ) {
        $this->buildDate = $buildDate;
        $this->compiler = $compiler;
        $this->gitCommit = $gitCommit;
        $this->gitTreeState = $gitTreeState;
        $this->gitVersion = $gitVersion;
        $this->goVersion = $goVersion;
        $this->major = $major;
        $this->minor = $minor;
        $this->platform = $platform;
    }

    public function getBuildDate(): string
    {
        return $this->buildDate;
    }

    /**
     * @return static
     */
    public function setBuildDate(string $buildDate)
    {
        $this->buildDate = $buildDate;

        return $this;
    }

    public function getCompiler(): string
    {
        return $this->compiler;
    }

    /**
     * @return static
     */
    public function setCompiler(string $compiler)
    {
        $this->compiler = $compiler;

        return $this;
    }

    public function getGitCommit(): string
    {
        return $this->gitCommit;
    }

    /**
     * @return static
     */
    public function setGitCommit(string $gitCommit)
    {
        $this->gitCommit = $gitCommit;

        return $this;
    }

    public function getGitTreeState(): string
    {
        return $this->gitTreeState;
    }

    /**
     * @return static
     */
    public function setGitTreeState(string $gitTreeState)
    {
        $this->gitTreeState = $gitTreeState;

        return $this;
    }

    public function getGitVersion(): string
    {
        return $this->gitVersion;
    }

    /**
     * @return static
     */
    public function setGitVersion(string $gitVersion)
    {
        $this->gitVersion = $gitVersion;

        return $this;
    }

    public function getGoVersion(): string
    {
        return $this->goVersion;
    }

    /**
     * @return static
     */
    public function setGoVersion(string $goVersion)
    {
        $this->goVersion = $goVersion;

        return $this;
    }

    public function getMajor(): string
    {
        return $this->major;
    }

    /**
     * @return static
     */
    public function setMajor(string $major)
    {
        $this->major = $major;

        return $this;
    }

    public function getMinor(): string
    {
        return $this->minor;
    }

    /**
     * @return static
     */
    public function setMinor(string $minor)
    {
        $this->minor = $minor;

        return $this;
    }

    public function getPlatform(): string
    {
        return $this->platform;
    }

    /**
     * @return static
     */
    public function setPlatform(string $platform)
    {
        $this->platform = $platform;

        return $this;
    }
}
