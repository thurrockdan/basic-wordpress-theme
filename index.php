<?php
/* Index page. */
get_template_part( 'includes/header' );
?>
<div class="container-fluid">
    <header role="banner">


    </header>

    <nav role="navigation">
        <?php get_template_part('includes/nav'); ?>
    </nav>

    <main role="main">

        <article role="article" id="content" tabindex="-1">

            <?php get_template_part('includes/loop'); ?>

        </article>

    </main>


</div>

    <footer role="contentinfo">

        Copyright &copy; 2015 Website Name

    </footer>
<?php
get_template_part('includes/footer');
?>