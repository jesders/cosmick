<?php
/* Template Name: Homepage Template */
get_header();
?>

<section class="hero">
    <div class="slider">
        <div class="slide" style="background-image:url('<?php the_field('slide1_image'); ?>');"></div>
        <div class="slide" style="background-image:url('<?php the_field('slide2_image'); ?>');"></div>
        <div class="slide" style="background-image:url('<?php the_field('slide3_image'); ?>');"></div>
        <div class="slide" style="background-image:url('<?php the_field('slide4_image'); ?>');"></div>
    </div>
    <div class="contain">
        <div class="row">
            <div class="block form">
                <?php the_field('form_text'); ?>
                <form>
                    <input type="date" name="start_date">
                    <input type="date" name="end_date">
                    <input type="number" name="number_passengers" placeholder="Number of Passengers" min="0" max="8">
                    <input type="submit" class="button" value="Submit">
                </form>
                <a class="button">Book Your Cruise</a>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>