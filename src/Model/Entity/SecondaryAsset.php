<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SecondaryAsset Entity
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $owner
 * @property string $status
 * @property int $primary_asset_id
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property \Cake\I18n\Time $review
 *
 * @property \App\Model\Entity\PrimaryAsset $primary_asset
 */
class SecondaryAsset extends Entity
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
        '*' => true,
        'id' => false
    ];
}
