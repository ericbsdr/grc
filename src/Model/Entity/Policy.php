<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Policy Entity
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $policy_status_id
 * @property int $project_id
 * @property \Cake\I18n\Time $next_review_date
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\PolicyStatus $policy_status
 * @property \App\Model\Entity\Project $project
 * @property \App\Model\Entity\Control[] $controls
 */
class Policy extends Entity
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
