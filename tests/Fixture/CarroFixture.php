<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CarroFixture
 */
class CarroFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'carro';
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
                'marca' => 'Lorem ipsum dolor sit amet',
                'nome' => 'Lorem ipsum dolor sit amet',
                'modelo' => 'Lorem ipsum dolor sit amet',
                'cor' => 'Lorem ipsum dolor sit amet',
                'ano' => '2023-05-29',
                'valor' => 1,
            ],
        ];
        parent::init();
    }
}
