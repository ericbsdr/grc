<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AssetClassification Entity
 *
 * @property int $id
 * @property string $name
 * @property string $criteria
 * @property int $asset_classification_type_id
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\AssetClassificationType $asset_classification_type
 * @property \App\Model\Entity\AssetClassificationsAsset[] $asset_classifications_assets
 */
class AssetClassification extends Entity
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
