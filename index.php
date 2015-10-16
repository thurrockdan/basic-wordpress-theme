<?php
/* Index page. */
get_template_part( 'header' );
?>
<div class="container">
    <header role="banner">


    </header>

    <nav role="navigation">

    </nav>

    <main role="main">

        <article role="article" id="content" tabindex="-1">

            <?php get_template_part('loop'); ?>

        </article>

    </main>

    <aside role="complementary">
        sidebar...
    </aside>

    <footer role="contentinfo">

        Copyright &copy; 2015 Website Name

    </footer>

</div>
<?php
get_template_part('footer');
?>