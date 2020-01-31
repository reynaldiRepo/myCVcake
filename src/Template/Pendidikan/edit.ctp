

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
                        <li  class="active"><?= $this->Html->link('Your Education', ['controller'=>'Pendidikan','action' => 'index']) ?>
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
                    <h3><?= __('Education') ?></h3>

                    <?= $this->Html->link('Back', ['controller'=>'Pendidikan','action' => 'index'], ['class'=>'btn btn-info isShadow']) ?>
                    <br>
                    <?= $this->Form->create($pendidikan) ?>
                    <fieldset>
                        <legend><?= __('Add Pendidikan') ?></legend>
                        <?php
                            echo $this->Form->control('ket', ['type'=>'text', 'label'=>'Your Institution']);
                        ?>
                        <div class="input select required">
                            <label for="tahun_in">Year IN</label>
                            <select name = "tahun_in">
                            <?php for ($i = 1900; $i < 2100; $i++){ ?>
                            <option value="<?= $i?>" <?php if($i == $pendidikan->tahun_in){echo "selected";}?> ><?= $i?></option>
                            <?php }?>
                            </select>
                        </div>

                        <div class="input select required">
                            <label for="tahun_in" selected>Year Out</label>
                            <select name = "tahun_out">
                            <option value="ongoing">ongoing</option>
                            <?php for ($i = 1900; $i < 2100; $i++){ ?>
                            <option value="<?= $i?>"  <?php if($i == $pendidikan->tahun_out){echo "selected";}?>><?= $i?></option>
                            <?php }?>
                            </select>
                        </div>
                        <?php echo $this->Form->control('id_user', ['hidden'=>'true', 'label'=>false, 'value'=>'3']);?>
                    </fieldset>
                    <?= $this->Form->button(__('Submit')) ?>
                    <?= $this->Form->end() ?>
                </div>
                <div>

                </div>
            </div>
        </div>
