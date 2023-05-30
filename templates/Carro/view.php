<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Carro $carro
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Editar Carro'), ['action' => 'edit', $carro->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Deletar Carro'), ['action' => 'delete', $carro->id], ['confirm' => __('Deletar Item?', $carro->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Carros'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Cadastrar Novo Carro'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="carro view content">
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($carro->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marca') ?></th>
                    <td><?= h($carro->marca) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($carro->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modelo') ?></th>
                    <td><?= h($carro->modelo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cor') ?></th>
                    <td><?= h($carro->cor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor') ?></th>
                    <td><?= $this->Number->format($carro->valor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ano') ?></th>
                    <td><?= h($carro->ano) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
