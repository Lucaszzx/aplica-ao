<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Curso> $cursos
 */
?>
<div class="cursos index content">
    <?= $this->Html->link(__('Novo Curso'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Cursos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome_curso') ?></th>
                    <th><?= $this->Paginator->sort('categorias_curso_id') ?></th>
                    
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cursos as $curso): ?>
                <tr>
                    <td><?= $this->Number->format($curso->id) ?></td>
                    <td><?= h($curso->nome_curso) ?></td>
                    <td><?= $curso->has('categorias_curso') ? $this->Html->link($curso->categorias_curso->id, ['controller' => 'CategoriasCursos', 'action' => 'view', $curso->categorias_curso->id]) : '' ?></td>
                 
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $curso->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $curso->id]) ?>
                        <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $curso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $curso->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primeira')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próxima') . ' >') ?>
            <?= $this->Paginator->last(__('Última') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}')) ?></p>
    </div>
</div>
