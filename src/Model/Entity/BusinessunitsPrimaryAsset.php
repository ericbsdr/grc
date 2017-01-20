<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BusinessunitsPrimaryAsset Entity
 *
 * @property int $primary_asset_id
 * @property int $businessunit_id
 *
 * @property \App\Model\Entity\PrimaryAsset $primary_asset
 * @property \App\Model\Entity\Businessunit $businessunit
 */
class BusinessunitsPrimaryAsset extends Entity
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
        'primary_asset_id' => false,
        'businessunit_id' => false
    ];
}
