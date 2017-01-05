<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Control Entity
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $status
 * @property int $policy_id
 * @property int $project_id
 * @property string $audit_metric_description
 * @property string $audit_success_crtieria
 * @property int $audit_dates_id
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Policy $policy
 * @property \App\Model\Entity\AuditDate $audit_date
 */
class Control extends Entity
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
