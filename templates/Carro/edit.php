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
            <?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $carro->id],
                ['confirm' => __('Deletar Item?', $carro->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar Carros'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="carro form content">
            <?= $this->Form->create($carro) ?>
            <fieldset>
                <legend><?= __('Editar Carro') ?></legend>
                <?php
                    echo $this->Form->control('marca');
                    echo $this->Form->control('nome');
                    echo $this->Form->control('modelo');
                    echo $this->Form->control('cor');
                    echo $this->Form->control('ano');
                    echo $this->Form->control('valor');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Atualizar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
