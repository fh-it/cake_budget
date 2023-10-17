<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InviocesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InviocesTable Test Case
 */
class InviocesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InviocesTable
     */
    protected $Invioces;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Invioces',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Invioces') ? [] : ['className' => InviocesTable::class];
        $this->Invioces = $this->getTableLocator()->get('Invioces', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Invioces);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\InviocesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
