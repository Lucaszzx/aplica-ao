<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CursosFixture
 */
class CursosFixture extends TestFixture
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
                'nome_curso' => 'Lorem ipsum dolor sit amet',
                'categorias_curso_id' => 1,
                'created' => '2023-08-22 10:37:52',
                'modified' => '2023-08-22 10:37:52',
            ],
        ];
        parent::init();
    }
}
