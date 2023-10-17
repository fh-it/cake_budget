<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InviocesFixture
 */
class InviocesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'number' => 1,
                'vendor_id' => 1,
                'budget_id' => 1,
            ],
        ];
        parent::init();
    }
}
