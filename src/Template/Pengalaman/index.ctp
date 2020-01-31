<div class="row">
    <div class="col-lg-12">
        <div class="card card-body ml-5 mr-5 mt-2 mb-2 isShadow" id="iscontenttext">
            <div class="col-lg-12">
                <a href="login.php"
                    class="btn  btn-warning bg-danger mb-2 text-white float-right isShadow contenttext"><i
                        class='fa fa-sign-out'></i> Log Out</a>
                <a href="login.php"
                    class="btn  btn-warning bg-blue mb-2 text-white float-right isShadow contenttext mr-2"><i
                        class='fa fa-eye'></i> View My CV</a>
            </div>
            <div class="row">
                <div class="col-lg-2 bor-r ">
                    <ul class="side-nav">
                        <li class="heading"><?= __('Manage Your Data') ?></li>
                        <li><?= $this->Html->link('Your Data', ['controller'=>'Users','action' => 'index']) ?></li>
                        <li><?= $this->Html->link('Tell Us About You', ['controller'=>'Mydetail','action' => 'index']) ?>
                        </li>
                        <li>
                            <?= $this->Html->link('Your Objective', ['controller'=>'Objective','action' => 'index']) ?>
                        </li>
                        <li>
                            <?= $this->Html->link('Your Education', ['controller'=>'Pendidikan','action' => 'index']) ?>
                        </li>
                        <li class="active"><?= $this->Html->link('Your Experiences', ['controller'=>'Pengalaman','action' => 'index']) ?>
                        </li>
                        <li><?= $this->Html->link('Your Skills', ['controller'=>'Kemampuan','action' => 'index']) ?>
                        </li>
                        <li><?= $this->Html->link('What Have You Done', ['controller'=>'Portofolio','action' => 'index']) ?>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-10">
                    <h3><?= __('Experiences') ?></h3>
                    <?= $this->Html->link('Add Your Experiences', ['controller'=>'Pengalaman','action' => 'add'], ['class'=>'btn btn-info isShadow']) ?>
                    <br><br>
                    <table cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col" style="width:40%"><?= $this->Paginator->sort('Activity') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Year In') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Year Out') ?></th>
                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pengalaman as $pengalaman): ?>
                            <tr>
                                <td><?= h($pengalaman->ket) ?></td>
                                <td><?= h($pengalaman->tahun_in) ?></td>
                                <td><?= h($pengalaman->tahun_out) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pengalaman->id]) ?> &nbsp
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pengalaman->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pengalaman->id)]) ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="paginator">
                        <ul class="pagination">
                            <?= $this->Paginator->first('<< ' . __('first')) ?>
                            <?= $this->Paginator->prev('< ' . __('previous')) ?>
                            <?= $this->Paginator->numbers() ?>
                            <?= $this->Paginator->next(__('next') . ' >') ?>
                            <?= $this->Paginator->last(__('last') . ' >>') ?>
                        </ul>
                        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?>
                        </p>
                    </div>
                </div>
                <div>

                </div>
            </div>
        </div>
