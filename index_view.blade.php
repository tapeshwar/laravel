<style>
    .dummy {
        margin-top: 100%;
    }

    .thumbnail {
        position: absolute;
        font-size: 20px;
        top: 15px;
        bottom: 0;
        left: 15px;
        right: 0;
        text-align: center;
        padding-top: calc(50% - 70px);
    }

    .thumbnail {
        display: block;
        margin-bottom: 20px;
        line-height: 1.42857143;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 4px;
        -webkit-transition: border .2s ease-in-out;
        -o-transition: border .2s ease-in-out;
        transition: border .2s ease-in-out;
    }
</style>



    <?php
    if (isset($_SESSION['project_key'])) {
        //pr($siteURL);
    ?>
<div class="row" style="margin:0;">
        <div class="col-md-3">
            <div class="dummy"></div>
            <a href="pages.php" class="thumbnail purple text-success"><i class="fa fa-edit"></i><br>
                Pages</a>
        </div>

        <div class="col-md-3">
            <div class="dummy"></div>
            <a href="showcase_set.php" class="thumbnail purple text-success"><i class="fa fa-film"></i><br>
                Showcase </a>
        </div>
        <div class="col-md-3">
            <div class="dummy"></div>
            <a href="gallery_set.php" class="thumbnail purple text-success"><i class="fa fa-object-group"></i><br>
                Gallery </a>
        </div>
        <div class="col-md-3">
            <div class="dummy"></div>
            <a href="slider_set.php" class="thumbnail purple text-success"><i class="fa fa-image"></i><br>
                Sliders </a>
        </div>
        <div class="col-md-3">
            <div class="dummy"></div>
            <a href="menus.php" class="thumbnail purple text-success"><i class="fa fa-list"></i><br>
                Menus </a>
        </div>
        <div class="col-md-3">
            <div class="dummy"></div>
            <a href="single_set.php" class="thumbnail purple text-success"><i class="fa fa-list-alt"></i><br>
                Single Set </a>
        </div>

        <div class="col-md-3">
            <div class="dummy"></div>
            <a href="media-files.php" class="thumbnail purple text-success"><i class="fa fa-folder"></i><br>
                Filemanager </a>
        </div>

        <div class="col-md-3">
            <div class="dummy"></div>
            <a href="site_setting.php" class="thumbnail purple text-success"><i class="fa fa-gears"></i><br>
                Site Settings </a>
        </div>
</div>

    <?php } else { ?>




        <div class="row" style="margin:0;">
        <div class="col-md-12" style="margin-bottom:15px;">
            <a href="javascript:void(0)" data-url="{{ url('projects/create_new_project') }}" class="btn btn-sm btn-flat btn-primary pull-right create_new_project">Create New Project</a>
        </div>

        <?php
        //echo '<pre>';
        //print_r($siteURL);die('test');
        foreach ($siteURL as $k => $v) {

            if (file_exists("images/" . $v['name'] . '.jpg')) {

        ?>

                <div class="col-md-3" style="border:solid thin #CCC; height:300px; text-align:center">
                    <form id="myform" action="{{ url('projects/enter') }}" method="post">

                        <h3 style="margin-top:20px"><?= $v['name'] ?></h3>

                        <div><img src="{{ asset('assets/images/sample-thumbnail.jpg') }}" class="img-responsive" style="width:100%;"></div>

                        <a href="<?= $v['domain'] ?>" target="_blank"><?= $v['domain'] ?></a>

                        <input type="hidden" name="projectkey" value="<?= $v['project_key'] ?>" />
                        <input type="hidden" name="projectname" value="<?= $v['name'] ?>" />
                        <input type="hidden" name="projectdomain" value="<?= $v['domain'] ?>" />
                        <br /><br />
                        <input type="submit" class="btn btn-success" name="enter_with_project" value="Proceed">
                    </form>
                </div>

            <?php

            } else {

                /* if (filter_var($v['domain'], FILTER_VALIDATE_URL)) {

                        $googlePagespeedData = file_get_contents("https://www.googleapis.com/pagespeedonline/v2/runPagespeed?url=$v[domain]&screenshot=true");

                        $googlePagespeedData = json_decode($googlePagespeedData, true);

                        
                        $screenshot = $googlePagespeedData['screenshot']['data'];
                        $screenshot = str_replace(array('_', '-'), array('/', '+'), $screenshot);


                        $imgBase64 = str_replace('data:image/jpeg;base64,', '', $screenshot);
                        $imgBase64 = str_replace(' ', '+', $imgBase64);
                        file_put_contents("images/" . $v['name'] . '.jpg', base64_decode($imgBase64));
                    } else {
                        echo 'Can not Capture Screenshot, because of Invalid Url';
                    } */
            ?>


                <div class="col-md-3" style="border:solid thin #CCC; height:300px; text-align:center">
                    <form id="myform" action="{{ url('projects/enter') }}" method="post">

                        <h3 style="margin-top:20px"><?= $v['name'] ?></h3>

                        <div><img src="{{ asset('assets/images/sample-thumbnail.jpg') }}" class="img-responsive" style="width:100%;"></div>

                        <a href="<?= $v['domain'] ?>" target="_blank"><?= $v['domain'] ?></a>

                        <input type="hidden" name="projectkey" value="<?= $v['project_key'] ?>" />
                        <input type="hidden" name="projectname" value="<?= $v['name'] ?>" />
                        <input type="hidden" name="projectdomain" value="<?= $v['domain'] ?>" />
                        <br /><br />
                        <button type="submit" class="btn btn-success btn-flat">Proceed <i class="fa  fa-long-arrow-right"></i></button>
                    </form>
                </div>

        <?php
            }
        }
        ?>
        </div>
        
    <?php } ?>


