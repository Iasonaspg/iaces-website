<?php /* Template Name: contact */ 

get_header(); ?>

<section>
<div class="wrapanimate">
    <h1 id="animate">Contact Us</h1>
</div>
<div class="container">
    <div class="information">
        <ul id="information-list">
            <li><i class="fa fa-home"></i> Auth, Faculty Of Engineering</li>
            <li><i class="fa fa-phone"></i> 2310231023</li>
            <li><i class="fa fa-envelope"></i> iaces.thessaloniki@gmail.com</li>
        </ul>
    </div>

    <div class="form-wrap">
        <form action="../PHP/contact.php" method="POST">
            <p>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="val1">
                <span class="req1">Required</span>
            </p>
            <p>
                <label for="email">Email Address</label>
                <input type="text" name="email" id="email" class="val2">
                <span class="req2">Required</span>
                <span class="invalmail">Enter valid email address</span>
            </p>
            <p>
                <label for="telephone">Mobile Number</label>
                <input type="text" name="telephone" id="telephone" maxlength="10">
            </p>
            <p class="full">
                <label for="message">Message</label>
                <textarea name="message" id="message" class="val3" maxlength="1000"></textarea>
                <span class="req3">Required</span>
            </p>
            <p class="flexy">
                <button>SUBMIT</button>
            </p>
        </form>
    </div>
</div>
</section>

<?php get_footer(); ?>