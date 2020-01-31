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
                        <li class="active"><?= $this->Html->link('Your Data', ['controller'=>'Users','action' => 'index']) ?></li>
                        <li><?= $this->Html->link('Tell Us About You', ['controller'=>'Mydetail','action' => 'index']) ?>
                        </li>
                        <li><?= $this->Html->link('Your Objective', ['controller'=>'Objective','action' => 'index']) ?>
                        </li>
                        <li><?= $this->Html->link('Your Education', ['controller'=>'Pendidikan','action' => 'index']) ?>
                        </li>
                        <li><?= $this->Html->link('Your Experiences', ['controller'=>'Pengalaman','action' => 'index']) ?>
                        </li>
                        <li><?= $this->Html->link('Your Skills', ['controller'=>'Kemampuan','action' => 'index']) ?>
                        </li>
                        <li><?= $this->Html->link('What Have You Done', ['controller'=>'Portofolio','action' => 'index']) ?>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-10">
                    <?= $this->Form->create($user) ?>
                    <fieldset>
                        <legend><?= __('Your Data') ?></legend>
                        <?php
                            echo $this->Form->control('usernmae');
                            // echo $this->Form->control('password');
                            echo $this->Form->control('realname');
                            echo $this->Form->control('photo');
                            echo $this->Form->control('tagline');
                        ?>
                    </fieldset>
                    <?= $this->Form->button(__('Submit')) ?>
                    <?= $this->Form->end() ?>
                </div>
                <div>

                </div>
            </div>
        </div>
