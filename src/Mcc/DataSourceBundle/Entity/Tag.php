<?php

namespace Mcc\DataSourceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tag
 *
 * @ORM\Table(name="tag")
 * @ORM\Entity(repositoryClass="Mcc\DataSourceBundle\Repository\TagRepository")
 */
class Tag
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime", nullable=true)
     */
    private $createdAt;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Tag
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Tag
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @var Command[]
     * @ORM\ManyToMany(targetEntity="Command", inversedBy="tags", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="command_id", referencedColumnName="id")
     */
    private $commands;

    /**
     * @return Command[]
     */
    public function getCommands()
    {
        return $this->commands;
    }

    /**
     * @param Command[] $commands
     */
    public function setCommands($commands)
    {
        $this->commands = $commands;
    }

    /** {@inheritdoc} */
    public function __toString()
    {
        return $this->name;
    }

    /**
     * @param Command $command
     * @return Tag
     */
    public function addCommand(Command $command)
    {
        $this->commands[] = $command;
        if (!$command->getTags()->contains($this)) {
            $command->addTag($this);
        }
        return $this;
    }

    public function removeCommand(Command $command) {
        if ($this->commands->contains($command)) {
            $this->commands->removeElement($command);
            $command->removeTag($this);
        }

        return $this;
    }



}

