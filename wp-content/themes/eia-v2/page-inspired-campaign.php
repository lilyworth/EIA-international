<?php
/*

Template name: Inspired campaign

 */
 get_header(inspired); ?>

<div class="lwpagewrapper">
    <article class="lwhero">
        <div class="lwheroinner">
            <div id="lwmonthmod" class="lwrow">
                <div class="lwmodule">
                    <div class="lwmoduleinner">
                         <div class="lwmoduleheader">
                            <h3>Give £5 a month and help investigators undercover</h3>
                         </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/_/img/inspired/5-ask.jpg" alt="Caged tiger">
                        <p>£5 a month could help pay for digital voice recorder pens used to record meetings with wildlife criminals and corrupt officials.</p>
                    </div>
                </div>
                <div class="lwmodule lw_mob_hide">
                    <div class="lwmoduleinner">
                         <div class="lwmoduleheader">
                            <h3>Give £10 a month and help gather valuable evidence</h3>
                         </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/_/img/inspired/10-ask-monthly.jpg" alt="Dead elephant">
                        <p>£10 a month could help pay for photographic equipment such as memory cards that an investigator would need to document criminal activities.</p>
                    </div>
                </div>
                <div class="lwmodule lw_mob_hide">
                    <div class="lwmoduleinner">
                         <div class="lwmoduleheader">
                            <h3>Give £15 a month and help investigators on the front line</h3>
                         </div>
                         <img src="<?php echo get_template_directory_uri(); ?>/_/img/inspired/15-ask.jpg" alt="Using GPS">
                        <p>£15 a month could help pay for covert GPS systems that can help track illegal timber flows in real time.</p>
                    </div>
                </div>
            </div>
            <div id="lwsinglemod" class="lwrow lwhide">
                <div class="lwmodule">
                    <div class="lwmoduleinner">
                         <div class="lwmoduleheader">
                            <h3>£10 could pay for a memory card</h3>
                         </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/_/img/inspired/10-ask-single.jpg" alt="Man holding tiger skin">
                        <p>Investigators need photographic equipment to record illegal activity and present evidence of animal trading to international agencies.</p>
                    </div>
                </div>
                <div class="lwmodule lw_mob_hide">
                    <div class="lwmoduleinner">
                         <div class="lwmoduleheader">
                            <h3>£25 could buy a USB drive</h3>
                         </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/_/img/inspired/25-ask.jpg" alt="Filming">
                        <p>These are used to safely store and transport EIA reports and films that we use to lobby decision makers.</p>
                    </div>
                </div>
                <div class="lwmodule lw_mob_hide">
                    <div class="lwmoduleinner">
                         <div class="lwmoduleheader">
                            <h3>£50 could pay for a pair of&nbsp;binoculars</h3>
                         </div>
                         <img src="<?php echo get_template_directory_uri(); ?>/_/img/inspired/50-ask.jpg" alt="Logging">
                        <p>Often our investigators need to observe illegal activity such as logging from a safe distance, but still need to be able to recognise key perpetrators.</p>
                    </div>
                </div>
            </div>
            <div class="lwrow lwpadt20">
                <form id="inspired-recruit-form" action="https://eia-international.org/donate" method="get">
                    <div class="lwfreq">
                        <input type="radio" id="r1" name="frequency" value="monthly" checked="yes"><label id="lwr1">Monthly</label>
                        <!-- span below is purely to help with fluid rendering-->
                        <span class="lwrb_fullwidth"><input type="radio" id="r2" name="frequency" value="single"><label>Single</label></span>
                    </div>
                    <div id="lwmonthly">
                        <input type="radio" id="lw_amount1" name="monthly" value="£3">
                        <label for="lw_amount1"><span>£3</span></label>
                        
                        <input type="radio" id="lw_amount2" name="monthly" value="£5">
                        <label for="lw_amount2"><span>£5</span></label>
                        
                        <input type="radio" id="lw_amount3" name="monthly" value="£10" checked="yes">
                        <label for="lw_amount3"><span>£10</span></label>
                        
                        <input type="radio" id="lw_amount4" name="monthly" value="£15">
                        <label for="lw_amount4"><span>£15</span></label>

                    </div>
                    <div id="lwsingle" class="lwhide">
                        
                        <input type="radio" id="lw_amount5" name="single" value="£10" checked="yes">
                        <label for="lw_amount5"><span>£10</span></label>
                        
                        <input type="radio" id="lw_amount6" name="single" value="£25">
                        <label for="lw_amount6"><span>£25</span></label>
                        
                        <input type="radio" id="lw_amount7" name="single" value="£50">
                        <label for="lw_amount7"><span>£50</span></label>
                        
                        <input type="radio" id="lw_amount8" name="single" value="£100">
                        <label for="lw_amount8"><span>£100</span></label>
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
                <h2>Join EIA in the fight against wildlife crime</h2>
                <p class="lwstrong">Join us as we expose the criminals who threaten our planet.</p>
                <p>From deforestation and climate change to protecting endangered species and oceans, we’re committed to investigating and exposing any activity that harms our planet. But we need your help.</p>
                <p>Our investigators work in very challenging conditions to expose illegal practices – often providing valuable information to Interpol and customs agencies worldwide. But we rely on the generous support of the public. It costs between £10,000 and £20,000 to run a single investigation and, without the generosity of people who care about protecting our planet, criminal networks will continue to operate with impunity despite the damage they cause. So please, help us fight environmental and wildlife crime with a gift today.</p>
            </div>
            <div class="lw_subnav">
                <h3>On this page</h3>
                <ul>
                    <li><a href="#al1">Investigations</a></li>
                    <li><a href="#al2">Campaigning</a></li>
                    <li><a href="#sos">Punching above our weight</a></li>
                    <li><a href="#al4">Cooperation</a></li>
                    <li><a href="#al5">Global reach</a></li>
                </ul>
            </div>
        </div>
    </article>
    <article class="lw_two-tiles_dark1">
        <a id="al1"></a>
        <div class="lw_two-tiles_dark2" id="lw_investigations_img">
            <div class="lw_two-tiles_tile"><span class="lw_mob_hide">&nbsp;</span><img class="lw_mob_show" src="<?php echo get_template_directory_uri(); ?>/_/img/inspired/Investigations.jpg" alt="Collecting evidence of de-forestation"></div>
            <div class="lw_two-tiles_tile">
                <div class="lw_two-tiles_inner_l">
                    <h2>Investigations</h2>
                    <p>Diligent, carefully planned undercover investigations are at the heart of EIA’s work, taking us out to the front lines of environmental crime and returning with the credible intelligence and persuasive imagery needed to confirm the findings of our preliminary research and tip-offs from the field.</p>
                    <p>The more complex cases can see investigators setting up false front companies and produce well-researched fake identities, allowing them to infiltrate criminal organisations and get close to the key individuals involved.</p>
                    <a href="<?php echo get_page_link(1525); ?>" class="lwbtn">Help us investigate wildlife&nbsp;crime</a>
                </div>
            </div>
        </div>
    </article>
    <article class="lw_two-tiles_light1">
        <a id="al2"></a>
        <div class="lw_two-tiles_light2" id="lw_campaigning_img">
            <div class="lw_mobile_show lw_two-tiles_tile"><img class="lw_mob_show" src="<?php echo get_template_directory_uri(); ?>/_/img/inspired/Cooperation.jpg" alt="EIA Campaigning"></div>
            <div class="lw_two-tiles_tile2">
                <div class="lw_two-tiles_inner_r">
                    <h2>Campaigning</h2>
                    <p>The evidence sourced in the field is used by EIA to raise awareness and to advocate for meaningful change and policy reforms, lobbying those in power and producing authoritative reports and compelling short films.</p>
                    <p>We also identify and advocate solutions to the problems we expose, a major focus of which is the role played by consumer demand for products harming the environment, from illegal logging to supermarket refrigeration.</p>
                    <a href="<?php echo get_page_link(1525); ?>" class="lwbtn">Help us expose illegal&nbsp;threats</a>
                </div>
            </div>
            <div class="lw_mobile_hide lw_two-tiles_tile"><span class="lw_mob_hide">&nbsp;</span></div>
        </div>
        
    </article>   
    <article class="lwmain">
        <div class="lwrow lwpadtb60">
            <a id="sos"></a>
            <div class="lwgrid6">
                <h2>Punching above our weight</h2>
                <p class="lwstrong">Join us as we expose the criminals who threaten our planet.</p>
                <p>EIA is a small organisation making a big difference. We don’t have flashy offices or huge salaries but instead, we give great value for money by focusing our resources on the vital work which has made us one of the most effective conservation organisations in the world.</p>
                <p>To keep making a difference we rely on the generosity and vision of our supporters, who understand the importance of protecting our wildlife and our environment.</p>
            </div>
            <div class="lwspend">
                <h3>For every £1 given to EIA we spend:</h3>
                <div class="lwspend_pie"><img src="<?php echo get_template_directory_uri(); ?>/_/img/inspired/pie-chart.png" alt="pic chart showing spend"></div>
                <div class="lwspend_data">
                    <div class="lwspend_data_module_1">
                        <p>78p on investigating and campaigning for environmental protection</p>
                    </div>
                    <div class="lwspend_data_module_2">
                        <p>17p on overheads and running costs</p>
                    </div>
                    <div class="lwspend_data_module_3">
                        <p>5p on fundraising and communications</p>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <article class="lw_two-tiles_dark1">
        <a id="al4"></a>
        <div class="lw_two-tiles_dark2" id="lw_cooperation_img">
            <div class="lw_two-tiles_tile"><span class="lw_mob_hide">&nbsp;</span><img class="lw_mob_show" src="<?php echo get_template_directory_uri(); ?>/_/img/inspired/customs.jpg" alt="Customs checking imports"></div>
            <div class="lw_two-tiles_tile">
                <div class="lw_two-tiles_inner_l">
                    <h2>Cooperation</h2>
                    <p>EIA works closely with a number of other organisations, developing close partnerships with NGOs around the world as well as engaging with wildlife and customs enforcement agencies at national and international levels.</p>
                    <p>For example, we have provided hard intelligence to Interpol and the World Customs Organisation, while our bespoke training films on illegal trades are used by enforcement agencies worldwide. We also work with local communities, providing them with valuable training and empowering them to protect their environment.</p>
                    <a href="<?php echo get_page_link(1525); ?>" class="lwbtn">Help us empower local&nbsp;communities</a>
                </div>
            </div>
        </div>
    </article>
    <article class="lw_two-tiles_light1">
        <a id="al5"></a>
        <div class="lw_two-tiles_light2" id="lw_global_img">
            <div class="lw_mobile_show lw_two-tiles_tile"><img class="lw_mob_show" src="<?php echo get_template_directory_uri(); ?>/_/img/inspired/Tusks.jpg" alt="A pile of elephant tusks"></div>
            <div class="lw_two-tiles_tile2">
                <div class="lw_two-tiles_inner_r">
                    <h2>Global reach</h2>
                    <p>From uncovering criminal syndicates behind the decimation of elephant populations in Tanzania to exposing the illegal trade of animal parts and products in China, our commitment to protecting wildlife and the environment has no borders.</p>
                    <p>When we discover corruption, greed and exploitation that puts our natural world in jeopardy, we do everything we can to expose and report it to the relevant authorities.</p>
                    <a href="<?php echo get_page_link(1525); ?>" class="lwbtn">Send a gift today</a>
                </div>
            </div>
            <div class="lw_mobile_hide lw_two-tiles_tile"><span class="lw_mob_hide">&nbsp;</span></div>
        </div>
    </article>
</div>
<?php get_footer(inspired); ?>