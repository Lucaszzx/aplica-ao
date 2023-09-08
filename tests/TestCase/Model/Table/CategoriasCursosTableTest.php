<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategoriasCursosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategoriasCursosTable Test Case
 */
class CategoriasCursosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CategoriasCursosTable
     */
    protected $CategoriasCursos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.CategoriasCursos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CategoriasCursos') ? [] : ['className' => CategoriasCursosTable::class];
        $this->CategoriasCursos = $this->getTableLocator()->get('CategoriasCursos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CategoriasCursos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CategoriasCursosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
