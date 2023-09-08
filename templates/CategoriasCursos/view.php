<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoriasCurso $categoriasCurso
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Categorias Curso'), ['action' => 'edit', $categoriasCurso->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Categorias Curso'), ['action' => 'delete', $categoriasCurso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoriasCurso->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Categorias Cursos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Categorias Curso'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categoriasCursos view content">
            <h3><?= h($categoriasCurso->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome Categoria') ?></th>
                    <td><?= h($categoriasCurso->nome_categoria) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($categoriasCurso->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($categoriasCurso->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($categoriasCurso->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
