<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupMember
 *
 * @ORM\Table(name="group_member", uniqueConstraints={@ORM\UniqueConstraint(name="group_member_group_id_member_id_key", columns={"group_id", "member_id"})}, indexes={@ORM\Index(name="IDX_A36222A8FE54D947", columns={"group_id"}), @ORM\Index(name="IDX_A36222A87597D3FE", columns={"member_id"})})
 * @ORM\Entity
 */
class GroupMember
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="group_member_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetimetz", nullable=false, options={"default"="now()"})
     */
    private $createdAt = 'now()';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetimetz", nullable=true)
     */
    private $updatedAt;

    /**
     * @var \Groups
     *
     * @ORM\ManyToOne(targetEntity="Groups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="group_id", referencedColumnName="id")
     * })
     */
    private $group;

    /**
     * @var \Members
     *
     * @ORM\ManyToOne(targetEntity="Members")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="member_id", referencedColumnName="id")
     * })
     */
    private $member;


}
