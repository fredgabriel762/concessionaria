<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Carro> $carro
 */
?>

<style>
    body{
        background-color: grey;
    }
</style>

<div class="carro index content">
<a href="http://localhost/agence_concessionaria/" class="button">Página Inicial</a>
    <?= $this->Html->link(__('Cadastrar Novo Carro'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Carros') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('marca') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('modelo') ?></th>
                    <th><?= $this->Paginator->sort('cor') ?></th>
                    <th><?= $this->Paginator->sort('ano') ?></th>
                    <th><?= $this->Paginator->sort('valor') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($carro as $carro): ?>
                <tr>
                    <td><?= h($carro->marca) ?></td>
                    <td><?= h($carro->nome) ?></td>
                    <td><?= h($carro->modelo) ?></td>
                    <td><?= h($carro->cor) ?></td>
                    <td><?= h($carro->ano) ?></td>
                    <td><?= $this->Number->format($carro->valor) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $carro->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $carro->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $carro->id], ['confirm' => __('Deletar Item?', $carro->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próximo') . ' >') ?>
            <?= $this->Paginator->last(__('Último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}')) ?></p>
    </div>
</div>