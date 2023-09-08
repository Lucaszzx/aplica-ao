<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Contact> $contacts
 */
?>
<div class="contacts index content">
    <?= $this->Html->link(__('Novo Contacto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Contactos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('first_name') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    <th><?= $this->Paginator->sort('phone_number') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('curso_id') ?></th>
                
                    
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contacts as $contact): ?>
                <tr>
                    <td><?= $this->Number->format($contact->id) ?></td>
                    <td><?= h($contact->first_name) ?></td>
                    <td><?= h($contact->last_name) ?></td>
                    <td><?= h($contact->phone_number) ?></td>
                    <td><?= h($contact->email) ?></td>
                    <td><?= h($contact->curso_id) ?></td>
                 
                    
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $contact->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $contact->id]) ?>
                        <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $contact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->id)]) ?>
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
        <p><?= $this->Paginator->counter(__('Página  {{page}} de {{pages}}')) ?></p>
    </div>
</div>
