<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!-- col-video-6 -->
<div class="col-video-6 col-xs-12 col-sm-8 col-sm-offset-2">
    <div class="embed-responsive embed-responsive-16by9">
        <?php
        $url = get_field('video', $postId);

        $embed_code = wp_oembed_get($url);
        echo $embed_code;
        ?>
    </div>    

</div>
<!-- col-img-0 END -->

