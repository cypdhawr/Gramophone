<?php
/**
 **********************************************
 * formats/format-aside.php
 ********************************************** 
 *
 * Post format for an aside post.
 * 
 * @author
 * @copyright
 * @link
 * @todo
 * @license
 * @since
 * @version
**/
?>

<article>
  <h1><?php the_title(); ?></h1>

  <section>
    <?php the_content(); ?>
  </section>
</article>