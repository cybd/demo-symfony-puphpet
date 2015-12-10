<?php
/**
 * Created by PhpStorm.
 * User: sergeimatros
 * Date: 12/10/15
 * Time: 2:47 PM
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\CommentBundle\Entity\Comment as BaseComment;

/**
 * @ORM\Entity
 * @ORM\ChangeTrackingPolicy("DEFERRED_EXPLICIT")
 * Class Comment
 * @package AppBundle\Entity
 */
class Comment extends BaseComment
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var Thread
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Thread")
     */
    protected $thread;

}