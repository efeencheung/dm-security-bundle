<?php

/*
 * 基于MIT开源协议发布
 *
 * (c) Efeen Cheung <261969254@qq.com>
 *
 * 有事请联系QQ:261969254, 微信:efeencheung, Github:efeencheung
 */

namespace Dm\Bundle\SecurityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccessControl
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class AccessControl
{
    /**
     * ID
     *
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * 访问控制名称
     *
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * URI正则
     *
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;

    /**
     * IP
     *
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=255, nullable=TRUE)
     */
    private $ip;

    /**
     * HOST
     *
     * @var string
     *
     * @ORM\Column(name="host", type="string", length=255, nullable=TRUE)
     */
    private $host;

    /**
     * HTTP方法
     *
     * @var string
     *
     * @ORM\Column(name="methods", type="string", length=255, nullable=TRUE)
     */
    private $methods;

    /**
     * @ORM\ManyToMany(targetEntity="Role", inversedBy="accessControls")
     * @ORM\JoinTable(name="roles_accesscontrols")
     */
    private $roles;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return AccessControl
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return AccessControl
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return AccessControl
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set host
     *
     * @param string $host
     * @return AccessControl
     */
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Get host
     *
     * @return string 
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Set methods
     *
     * @param string $methods
     * @return AccessControl
     */
    public function setMethods($methods)
    {
        $this->methods = $methods;

        return $this;
    }

    /**
     * Get methods
     *
     * @return string 
     */
    public function getMethods()
    {
        return $this->methods;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->roles = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add roles
     *
     * @param \Dm\Bundle\SecurityBundle\Entity\Role $roles
     * @return AccessControl
     */
    public function addRole(\Dm\Bundle\SecurityBundle\Entity\Role $roles)
    {
        $this->roles[] = $roles;

        return $this;
    }

    /**
     * Remove roles
     *
     * @param \Dm\Bundle\SecurityBundle\Entity\Role $roles
     */
    public function removeRole(\Dm\Bundle\SecurityBundle\Entity\Role $roles)
    {
        $this->roles->removeElement($roles);
    }

    /**
     * Get roles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRoles()
    {
        return $this->roles;
    }
}
