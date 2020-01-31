<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Portofolio Entity
 *
 * @property int $id
 * @property string $judul
 * @property string $ket
 * @property string $link
 * @property int $id_user
 */
class Portofolio extends Entity
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
        'judul' => true,
        'ket' => true,
        'link' => true,
        'id_user' => true,
    ];
}
