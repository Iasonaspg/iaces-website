<?php get_header(); ?>

<div class="slider">
    <span class="Previous arrow" onclick="startSlide(0)">&#10094;</span>
    <span class="Next arrow" onclick="startSlide(1)">&#10095;</span>
    
    <div class="slide img1"></div>

    <div class="slide img2"></div>

    <div class="slide img3"></div>

    <div id="Slidefooter">
        <span class="dot" onclick="currentSlide(0)"></span>
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
    </div>
</div>
<div class="smallScreen"></div>

<div id="infocont">
    <div>
        <i class="fas fa-info-circle"></i>
        <h2>Who we are</h2>
        <div>IACES was founded in September 1989 in Delft during the first Academic Congress of Civil Engineering Students. The major aim of IACES is the development of contacts between civil engineering students and students of relative sciences in the world. Nowadays IACES is present at more than 50 civil engineering Faculties through whole World, in the form of the Local Committees (LCs) or Contact Persons (CPs). The Local Committe of Thessaloniki (Aristotle University of Thessaloniki) was founded in November 2016 as an Observer Group and was recognised as a Local Committee in October 2017 during ACCESS'17 in Porto. Our goal as Local Committee is to organise local and international activities, such as seminars, training sessions, workshops, student exchanges, site visits and competitions, as well as generally discover and offer new opportunities and experiences to students from our University.</div>
    </div>
    <div>
        <i class="fas fa-user-plus"></i>
        <h2>Member's benefits</h2>
        <div class="listcont">
            <div data-aos="slide-left" data-aos-duration="1000" data-aos-delay="100" data-aos-once="true">
                <i class="fas fa-cog"></i>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, sapiente autem unde aspernatur ab cum velit ea accusantium neque magni.</div>
            </div>
            <div data-aos="slide-right" data-aos-duration="1000" data-aos-delay="400" data-aos-once="true">
                <i class="fas fa-cog"></i>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, sapiente autem unde aspernatur ab cum velit ea accusantium neque magni.</div>
            </div>
            <div data-aos="slide-left" data-aos-duration="1000" data-aos-delay="800" data-aos-once="true">
                <i class="fas fa-cog"></i>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, sapiente autem unde aspernatur ab cum velit ea accusantium neque magni.</div>
            </div>
            <div data-aos="slide-right" data-aos-duration="1000" data-aos-delay="1200" data-aos-once="true">
                <i class="fas fa-cog"></i>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, sapiente autem unde aspernatur ab cum velit ea accusantium neque magni.</div>
            </div>
        </div>
    </div>
    <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1800" data-aos-once="true">
        <i class="fas fa-users"></i>
        <h2>Join us!</h2>
        <div class="listcont">
            <div>
                <i class="fas fa-check"></i>
                <div>Come by a meeting.</div>
            </div>
            <div>
                <i class="fas fa-check"></i>
                <div>Contact us <a href="HTML/Contact.html">here</a>.</div>
            </div>
        </div>
    </div>
</div>
    
<?php get_footer(); ?>
