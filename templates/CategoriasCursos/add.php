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
            <?= $this->Html->link(__('List Categorias Cursos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categoriasCursos form content">
            <?= $this->Form->create($categoriasCurso) ?>
            <fieldset>
                <legend><?= __('Adicionar Categoria de Curso') ?></legend>
                <?php
                    echo $this->Form->control('nome_categoria');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
