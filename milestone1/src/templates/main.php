<main>
        <div class="container d-flex d-wrap just_cont_sp_bt">
            <?php foreach ($db as $value) { ;?> 
                <div class="card d-flex fl_dir_col align_c">
                    <div class="img_card ">
                        <img src="<?php echo $value['poster']?>" alt="">
                    </div>
                    <div class="description_card">
                        <h4><?php echo $value['title']?></h4>
                        <h5><?php echo $value['author']?></h5>
                        <h6><?php echo $value['year']?></h6>
                    </div>
                </div>
            <?php }?>
        </div>
    </main>