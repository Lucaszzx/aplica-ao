<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CategoriasCursosFixture
 */
class CategoriasCursosFixture extends TestFixture
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
                'nome_categoria' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-08-22 09:50:52',
                'modified' => '2023-08-22 09:50:52',
            ],
        ];
        parent::init();
    }
}
