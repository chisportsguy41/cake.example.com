<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Comment Entity
 *
 * @property string $id
 * @property string|null $title
 * @property string|null $body
 * @property string|null $user_id
 * @property string|null $post_id
 * @property \Cake\I18n\FrozenTime|null $created
 *
 * @property \CakeDC\Users\Model\Entity\User $user
 * @property \App\Model\Entity\Post $post
 */
class Comment extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'title' => true,
        'body' => true,
        'user_id' => true,
        'post_id' => true,
        'created' => true,
        'user' => true,
        'post' => true
    ];
}
