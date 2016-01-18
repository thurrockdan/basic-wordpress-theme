<?php
/* Index page. */
get_template_part( 'includes/header' );
?>


    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <?php get_template_part('includes/nav'); ?>
        </div>
    </nav>

    <div class="container">
        <main role="main">

            <article role="article" id="content" tabindex="-1">

                <?php get_template_part('includes/loop'); ?>

            </article>

        </main>
    </div>


    <div class="container">
        <?php get_template_part('includes/footer'); ?>
    </div>
