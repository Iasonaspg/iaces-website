<?php /* Template Name: team */

get_header(); ?>

<section id="sec1">
            <div id="teamwrap">
                    <h2>Our Team</h2>
                    <h3>2017-2018</h3>
            </div>
</section>

<section id="container">
    <div id="first" class="small opa">
        <div>
            <img class="hover" onmouseover="change(0)" onmouseout="reset(0)" src="<?php bloginfo('template_url');?>/SVGs/Junior/Icon_JuniorMember.svg" alt="Junior members avatar">
        </div>
        <div class="des1">
            <h3>Junior Members</h3>
        </div>
        <div class="des2">
            <h3>42</h3>
        </div>
    </div>
    <div class="small opa">
        <div>
            <img class="hover" onmouseover="change(1)" onmouseout="reset(1)" src="<?php bloginfo('template_url');?>/SVGs/Full/Icon_FullMember.svg" alt="Full members avatar">
        </div>
        <div class="des1">
                <h3>Full Members</h3>
        </div>
        <div class="des2">
            <h3>30</h3>
        </div>
    </div>
    <div class="small opa">
        <div>
            <img class="hover" onmouseover="change(2)" onmouseout="reset(2)" src="<?php bloginfo('template_url');?>/SVGs/Alumni/Icon_AlumniMember.svg" alt="Alumni members avatar">
        </div>
        <div class="des1">
                <h3>Alumni Members</h3>
        </div>
        <div class="des2">
            <h3>4</h3>
        </div>
    </div>

    <span class="hid animated zoomIn"></span>

    <div class="big opa">
        <div>
            <img class="hover" onmouseover="change(3)" onmouseout="reset(3)" src="<?php bloginfo('template_url');?>/SVGs/President/Icon_President.svg" alt="President avatar">
        </div>
        <div class="des1">
                <h3>Giannis Ouranos</h3>
        </div>
        <div class="des2">
            <h3>PRESIDENT</h3>
        </div>
    </div>
    <div class="big opa">
        <div>
            <img class="hover" onmouseover="change(4)" onmouseout="reset(4)" src="<?php bloginfo('template_url');?>/SVGs/Treasure/Icon_Treasurer.svg" alt="Treausurer avatar">
        </div>
        <div class="des1">
                <h3>Alexandros Chortis</h3>
        </div>
        <div class="des2">
            <h3>TREASURER</h3>
        </div>
    </div>
    <div class="big opa">
        <div>
            <img class="hover" onmouseover="change(5)" onmouseout="reset(5)" src="<?php bloginfo('template_url');?>/SVGs/Secretary/Icon_Secretary.svg" alt="Secretary avatar">
        </div>
        <div class="des1">
                <h3>Rafaelia Ampla</h3>
        </div>
        <div class="des2">
            <h3>SECRETARY</h3>
        </div>
    </div>
    <div class="big opa">
        <div>
            <img class="hover" onmouseover="change(6)" onmouseout="reset(6)" src="<?php bloginfo('template_url');?>/SVGs/VP_PR/Icon_VPforPR.svg" alt="VP for Public Relations avatar">
        </div>
        <div class="des1">
                <h3>Anastasia Florou</h3>
        </div>
        <div class="des2">
            <h3>VP of Public Relations</h3>
        </div>
    </div>
    <div class="big opa">
        <div>
            <img class="hover" onmouseover="change(7)" onmouseout="reset(7)" src="<?php bloginfo('template_url');?>/SVGs/VP_HR/Icon_VPforHR.svg" alt="VP for Human Resources avatar">
        </div>
        <div class="des1">
                <h3>Christos Lathourakis</h3>
        </div>
        <div class="des2">
            <h3>VP of Human Resources</h3>
        </div>
    </div>
    <div class="big opa">
        <div>
            <img class="hover" onmouseover="change(8)" onmouseout="reset(8)" src="<?php bloginfo('template_url');?>/SVGs/VP_CR/Icon_VPforCR.svg" alt="VP for Coorporate Relations avatar">
        </div>
        <div class="des1">
                <h3>Duri Zuzi</h3>
        </div>
        <div class="des2">
            <h3>VP of Coorporate Relations</h3>
        </div>
    </div>
</section>

<?php get_footer();