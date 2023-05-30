<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Carro Entity
 *
 * @property int $id
 * @property string $marca
 * @property string $nome
 * @property string $modelo
 * @property string $cor
 * @property \Cake\I18n\FrozenDate $ano
 * @property float $valor
 */
class Carro extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'marca' => true,
        'nome' => true,
        'modelo' => true,
        'cor' => true,
        'ano' => true,
        'valor' => true,
    ];
}
