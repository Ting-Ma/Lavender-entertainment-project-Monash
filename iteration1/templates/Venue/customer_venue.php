<div class="container-fluid">
                    <?= $this->Flash->render() ?>

                    <div class="venue index content">
                        
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?= __('Venue') ?></h1>
                        <a href="<?= $this -> url->Build(['action' => 'add'])?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> New Venue</a>
                    </div>
                    
                        <?= $this->Form->create(null,['type'=>'get'])?> 
                        <?= $this->Form->control('key',['label'=>'Search','value'=>$this->request->getQuery('key')])?> 
                        <?= $this->Form->submit()?> 
                        <?= $this->Form->end()?> 
                        
                    
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th><?= $this->Paginator->sort('id') ?></th>
                                        <th><?= $this->Paginator->sort('name') ?></th>
                                        <th><?= $this->Paginator->sort('street') ?></th>
                                        <th><?= $this->Paginator->sort('suburb') ?></th>
                                        <th><?= $this->Paginator->sort('postcode') ?></th>
                                        <th><?= $this->Paginator->sort('facilities') ?></th>
                                        <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($venue as $venue): ?>
                                    <tr>
                                        <td><?= $this->Number->format($venue->id) ?></td>
                                        <td><?= h($venue->name) ?></td>
                                        <td><?= h($venue->street) ?></td>
                                        <td><?= h($venue->suburb) ?></td>
                                        <td><?= h($venue->postcode) ?></td>
                                        <td><?= h($venue->facilities) ?></td>
                                        <td class="actions">
                                            <?= $this->Html->link(__('View'), ['action' => 'view', $venue->id]) ?>
                                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $venue->id]) ?>
                                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $venue->id], ['confirm' => __('Are you sure you want to delete # {0}?', $venue->id)]) ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="paginator">
                            <ul class="pagination">
                                <?= $this->Paginator->first('<< ' . __('first')) ?>
                                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                                <?= $this->Paginator->numbers() ?>
                                <?= $this->Paginator->next(__('next') . ' >') ?>
                                <?= $this->Paginator->last(__('last') . ' >>') ?>
                            </ul>
                            <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
                        </div>
                    </div>
                    
                </div>