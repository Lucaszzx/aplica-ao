<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Curso $curso
 * @var string[]|\Cake\Collection\CollectionInterface $categoriasCursos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $curso->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $curso->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Cursos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cursos form content">
            <?= $this->Form->create($curso) ?>
            <fieldset>
                <legend><?= __('Edit Curso') ?></legend>
                <?php
                    echo $this->Form->control('nome_curso');
                    echo $this->Form->control('categorias_curso_id', ['options' => $categoriasCursos]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
