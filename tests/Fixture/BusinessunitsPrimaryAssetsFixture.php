<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BusinessunitsPrimaryAssetsFixture
 *
 */
class BusinessunitsPrimaryAssetsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'primary_asset_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'businessunit_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'businessunit_key' => ['type' => 'index', 'columns' => ['businessunit_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['primary_asset_id', 'businessunit_id'], 'length' => []],
            'businessunits_primary_assets_ibfk_1' => ['type' => 'foreign', 'columns' => ['businessunit_id'], 'references' => ['businessunits', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'businessunits_primary_assets_ibfk_2' => ['type' => 'foreign', 'columns' => ['primary_asset_id'], 'references' => ['primary_assets', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'primary_asset_id' => 1,
            'businessunit_id' => 1
        ],
    ];
}
