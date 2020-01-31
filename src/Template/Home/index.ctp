<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
        <div class="card card-body ml-5 mr-5 mt-2 mb-2 isShadow" id="iscontenttext">
            <div class="col-lg-12">
                <a href="<?=$this->Url->build([
                "controller" => "Users",
                "action" => "index"]);?>" 
                class="btn  btn-warning bg-blue mb-2 text-white float-right isShadow contenttext">
                <i class='fa fa-edit'></i> Edit My CV</a>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <?php foreach ($User as $us){ ?>
                    <div class="isShadow img" style=" background-image:url('<?= $this->Url->image('Upload/'.$us->photo);?>') ">
                        <div class="sosmed-title isShadow">
                            <center>
                                <button class="btn btn-info isShadow" data-toggle="modal" data-target="#exampleModal">
                                    Are You Bored ? (Click Me)
                                </button>
                            </center>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12 text mt-3 d-block">
                            <?php 
                            $nU = 0;
                            foreach ($User as $u): ?>

                            <span class="frontText">I'M <span class="blue"><?= $u->realname?></span></span> &nbsp
                            <span class="subText"><?= $u->tagline?></span><br>
                            <?php 
                            $nU += 1;
                            endforeach; 
                            if ($nU == 0){
                                echo "<p>No Data<br></p>";
                            }
                            ?>

                            <hr>
                            <i class="text text-mute"><b class="fa fa-spinner blue"> </b> Who I am ?</i><br>

                            <?php 
                            $nD = 0;
                            foreach ($Detail as $d): ?>
                            <p class="contenttext"><?= $d->ket?></p>
                            <?php 
                            $nD +=1;
                            endforeach;
                            if ($nD == 0){
                                echo "<p>No Data<br></p>";
                            }
                            ?>


                            <i class="text text-mute blue contenttext"><b class=""> </b> OBJECTIVE</i>

                            <?php 
                                $nD = 0;
                                foreach ($Objective as $o): ?>
                            <p class="contenttext"><?= $o->ket?></p>
                            <?php 
                                $nD +=1;
                                endforeach;
                                if ($nD == 0){
                                    echo "<p>No Data<br></p>";
                                }
                                ?>
                            <hr>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <hr>
                <div class="col-lg-6  bor-r">
                    <i class="text text-mute"><b class="fa fa-spinner blue"> </b> My Educational History</i><br>
                    <table class="table">
                        <?php foreach ($Edu as $E) : ?>
                        <tr>
                            <td class="contenttext" style="width : 50%"><?= $E->ket?></td>
                            <td class="contenttext"><?= $E->tahun_in?></td>
                            <td class="contenttext" style="width : 5%">-</td>
                            <td class="contenttext"><?= $E->tahun_out?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                    <hr>
                </div>

                <div class="col-lg-6">
                    <i class="text text-mute"><b class="fa fa-spinner blue"> </b> My Experiences</i><br>
                    <table class="table table-condensed">
                        <?php foreach ($Exp as $Ex) : ?>
                        <tr>
                            <td class="contenttext" style="width : 50%"><?= $Ex->ket?></td>
                            <td class="contenttext"><?= $Ex->tahun_in?></td>
                            <td class="contenttext" style="width : 5%">-</td>
                            <td class="contenttext"><?= $Ex->tahun_out?></td>
                            <?php endforeach; ?>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-12  bor-r">
                    <i class="text text-mute"><b class="fa fa-spinner blue"> </b> My Rate</i><br>
                    <table class="table table-condensed">
                        <tr>
                            <?php foreach ($Skills as $S) : ?>
                            <td class="contenttext" style="width : 45%"><?= $S->ket; ?></td>
                            <td>
                                <?php 
                                    $nilai = $S->rate;
                                    for ($i = 0; $i < $nilai; $i++){
                                ?>
                                <i class="fa fa-star contenttext blue"></i>
                                <?php }?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <hr>
                    <div class="row">
                        <div class="col-lg-12">
                            <i class="text text-mute"><b class="fa fa-spinner blue"> </b> What I Have Done</i><br>
                        </div>
                    </div>
                    <div class="row">
                        <?php 
                        foreach($Porto as $P) { ?>
                        <div class="col-lg-4">
                            <div class="card mt-3 mb-2 bg-light isShadow" style="width: 17rem; height : 300px">
                                <?php echo $this->Html->image('git.png', ['alt' => 'GitLogo', ]);?>
                                <div class="card-body">
                                    <h5 class="card-title"><?= $P->judul?></h5>
                                    <p class="card-text contenttext"><?= $P->ket?><a href="<?= $P->link?>"
                                            class=" border">&nbspGO...</a></p>

                                </div>
                            </div>
                        </div>
                        <?php
                        } ?>

                        <div class="col-lg-12 mt-5 bg-dark p-3 isShadow" style="border-radius: 5000px">
                            <center>
                                <i class="contenttext text text-white">Gameloft Campus Internship &copy 2020</i>
                            </center>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>
    <div class="col-lg-1"></div>
</div>

<div class="modal fade bg-dark" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content isShadow">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Enjoy Your Time</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body isShadow">
                <div class="bg-dark">
                    <script src="https://cdn.htmlgames.com/embed.js?game=JungleJump&amp;&amp;bgcolor=black">
                    </script>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
