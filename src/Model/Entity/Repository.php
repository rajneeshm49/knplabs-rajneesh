<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Repository Entity
 *
 * @property int $id
 * @property string $name
 * @property string $full_name
 * @property int $size
 * @property \Cake\I18n\FrozenDate $updated_at
 * @property string $git_url
 */
class Repository extends Entity
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
        'name' => true,
        'full_name' => true,
        'size' => true,
        'updated_at' => true,
        'git_url' => true
    ];
}
