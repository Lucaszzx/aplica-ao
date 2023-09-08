<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\CategoriasCurso> $categoriasCursos
 */
?>
<div class="categoriasCursos index content">
    <?= $this->Html->link(__('Nova categoria de Curso'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Categorias Cursos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome_categoria') ?></th>
                   
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categoriasCursos as $categoriasCurso): ?>
                <tr>
                    <td><?= $this->Number->format($categoriasCurso->id) ?></td>
                    <td><?= h($categoriasCurso->nome_categoria) ?></td>
                  
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $categoriasCurso->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $categoriasCurso->id]) ?>
                        <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $categoriasCurso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoriasCurso->id)]) ?>
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
