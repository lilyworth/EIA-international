<?php
/*

Template name: Inspired campaign

 */
 get_header(inspired); ?>

<div class="lwpagewrapper">
    <article style="background:url('<?php the_field('hero_image'); ?>') no-repeat center fixed; background-size: cover; padding:58px 0 20px 0;">
        <div class="lwheroinner">
            <div id="lwmonthmod" class="lwrow">
                <div class="lwmodule">
                    <div class="lwmoduleinner">
                         <div class="lwmoduleheader">
                            <h3><?php the_field('pricepoint_1_header'); ?></h3>
                         </div>
                            <img src="<?php the_field('pricepoint_1_image'); ?>" alt="<?php the_field('pricepoint_1_image_alt'); ?>">            
                        <p><?php the_field('pricepoint_1_copy'); ?></p>
                    </div>
                </div>
                <div class="lwmodule lw_mob_hide">
                    <div class="lwmoduleinner">
                         <div class="lwmoduleheader">
                            <h3><?php the_field('pricepoint_2_header'); ?></h3>
                         </div>
                         <img src="<?php the_field('pricepoint_2_image'); ?>" alt="<?php the_field('pricepoint_2_image_alt'); ?>">        
                        <p><?php the_field('pricepoint_2_copy'); ?></p>
                    </div>
                </div>
                <div class="lwmodule lw_mob_hide">
                    <div class="lwmoduleinner">
                         <div class="lwmoduleheader">
                            <h3><?php the_field('pricepoint_3_header'); ?></h3>
                         </div>
                         <img src="<?php the_field('pricepoint_3_image'); ?>" alt="<?php the_field('pricepoint_3_image_alt'); ?>">       
                        <p><?php the_field('pricepoint_3_copy'); ?></p>
                    </div>
                </div>
            </div>
            <div class="lwrow lwpadt20">
                <form id="inspired-campaign-form" action="https://eia-international.org/donate" method="get">
                    <div id="lwamounts">
                        <input type="radio" id="lw_amount1" name="monthly" value="<?php the_field('amount_1'); ?>">
                        <label for="lw_amount1"><span><?php the_field('amount_1'); ?></span></label>
                        
                        <input type="radio" id="lw_amount2" name="monthly" value="<?php the_field('amount_2'); ?>" checked="yes">
                        <label for="lw_amount2"><span><?php the_field('amount_2'); ?></span></label>
                        
                        <input type="radio" id="lw_amount3" name="monthly" value="<?php the_field('amount_3'); ?>">
                        <label for="lw_amount3"><span><?php the_field('amount_3'); ?></span></label>
                        
                        <input type="radio" id="lw_amount4" name="monthly" value="<?php the_field('amount_4'); ?>">
                        <label for="lw_amount4"><span><?php the_field('amount_4'); ?></span></label>
                    </div>
                    <div class="lwother">
                        <div class="lwtxtfield">
                            <div class="lwpound">£</div>
                            <input type="text" id="other" name="other amount" placeholder="Other">
                        </div>
                        <input type="submit" id="donate" name="donate" value="Donate" class="lwbtn">
                    </div>
                </form>
            </div>
        </div>
    </article>
    <article class="lwmain">
        <div class="lwrow lwpadtb40">
            <div class="lw_intro_content">
                <h2><?php the_field('section_1_headline'); ?></h2>
                <?php the_field('section_1_content'); ?>
                <p>Need to add video</p>
            </div>
            <div class="lw_subnav">
                <h3>On this page</h3>
                <ul>
                    <li><a href="#al1"><?php the_field('anchor_1'); ?></a></li>
                    <li><a href="#al2"><?php the_field('anchor_2'); ?></a></li>
                    <li><a href="#al3"><?php the_field('anchor_3'); ?></a></li>
                    <li><a href="#al4"><?php the_field('anchor_4'); ?></a></li>
                    <li><a href="#al5"><?php the_field('anchor_5'); ?></a></li>
                </ul>
            </div>
        </div>
    </article>
    <article class="lw_two-tiles_dark1">
        <a id="al1"></a>
        <div class="lw_two-tiles_dark2 lwbgimg" style="background:url('<?php the_field('section_2_image') ?>') no-repeat @grey;">
            <div class="lw_two-tiles_tile"><span class="lw_mob_hide">&nbsp;</span><img class="lw_mob_show" src="<?php the_field('section_2_image'); ?>" alt="<?php the_field('section_2_image_alt'); ?>"></div>
            <div class="lw_two-tiles_tile">
                <div class="lw_two-tiles_inner_l">
                    <h2><?php the_field('section_2_headline'); ?></h2>
                    <?php the_field('section_2_content'); ?>
                    <a href="<?php the_field('section_2_url'); ?>" class="lwbtn"><?php the_field('section_2_cta'); ?></a>
                </div>
            </div>
        </div>
    </article>
    <article class="lw_two-tiles_light1">
        <a id="al2"></a>
        <div class="lw_two-tiles_light2 lwbgimg" style="background:url('<?php the_field('section_3_image'); ?>') no-repeat @grey;">
            <div class="lw_mobile_show lw_two-tiles_tile"><img class="lw_mob_show" src="<?php the_field('section_3_image') ?>" alt="<?php the_field('section_3_image_alt'); ?>"></div>
            <div class="lw_two-tiles_tile2">
                <div class="lw_two-tiles_inner_r">
                    <h2><?php the_field('section_3_headline'); ?></h2>
                    <?php the_field('section_3_content'); ?>
                    <a href="<?php the_field('section_3_url'); ?>" class="lwbtn"><?php the_field('section_3_cta'); ?></a>
                </div>
            </div>
            <div class="lw_mobile_hide lw_two-tiles_tile"><span class="lw_mob_hide">&nbsp;</span></div>
        </div>
        
    </article>   
    <article class="lwmain">
        <div class="lwrow lwpadtb60">
            <a id="al3"></a>
            <div class="lwgrid12">
                <h2 style="text-align:center">Equipment</h2>
                <p>To be developed</p>
            </div>
        </div>
    </article>
    <article class="lw_two-tiles_dark1">
        <a id="al4"></a>
        <div class="lw_two-tiles_dark2 lwbgimg" style="background:url('<?php the_field('section_5_image'); ?>') no-repeat @grey;">
            <div class="lw_two-tiles_tile"><span class="lw_mob_hide">&nbsp;</span><img class="lw_mob_show" src="<?php the_field('section_5_image'); ?>" alt="<?php the_field('section_5_image_alt'); ?>"></div>
            <div class="lw_two-tiles_tile">
                <div class="lw_two-tiles_inner_l">
                    <h2><?php the_field('section_5_headline'); ?></h2>
                    <?php the_field('section_5_content'); ?>
                    <a href="<?php the_field('section_5_url'); ?>" class="lwbtn"><?php the_field('section_5_cta'); ?></a>
                </div>
            </div>
        </div>
    </article>
    <article class="lw_two-tiles_light1">
        <a id="al5"></a>
        <div class="lw_two-tiles_light2 lwbgimg" style="background:url('<?php the_field('section_6_image'); ?>') no-repeat @grey;">
            <div class="lw_mobile_show lw_two-tiles_tile"><img class="lw_mob_show" src="<?php the_field('section_6_image') ?>" alt="<?php the_field('section_6_image_alt'); ?>"></div>
            <div class="lw_two-tiles_tile2">
                <div class="lw_two-tiles_inner_r">
                    <h2><?php the_field('section_6_headline'); ?></h2>
                    <?php the_field('section_6_content'); ?>
                    <a href="<?php the_field('section_6_url'); ?>" class="lwbtn"><?php the_field('section_6_cta'); ?></a>
                </div>
            </div>
            <div class="lw_mobile_hide lw_two-tiles_tile"><span class="lw_mob_hide">&nbsp;</span></div>
        </div>
    </article>
</div>
<?php get_footer(inspired); ?>