<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PrimaryAssetClassificationsAsset Entity
 *
 * @property int $id
 * @property int $asset_classification_id
 * @property int $primary_asset_id
 *
 * @property \App\Model\Entity\AssetClassification $asset_classification
 * @property \App\Model\Entity\PrimaryAsset $primary_asset
 */
class PrimaryAssetClassificationsAsset extends Entity
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
