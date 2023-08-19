<?php
get_header();?>

<main class="p-6 mx-auto pt-10 lg:pt-0 lg:max-w-[900px] max-w-[100vw]">
            
  <main class="pt-24 md:flex md:justify-center">
    <article class="prose prose-lg max-w-[750px] prose-img:mx-auto">
      <img alt="Demo Post 3" class="w-full mb-6" width="750" height="422" src="<?php echo the_post_thumbnail_url();?>" loading="lazy" decoding="async">
      <h1 class="title my-2 text-4xl font-bold"><?php the_title();?></h1>
      <time>Date</time>
      <br>
      <div class="badge badge-secondary my-1">Category</div>
      
      <div class="divider my-2"></div>
      <?php the_content();?>

    </article>
  </main>

          </main>

<?php
get_footer();?>