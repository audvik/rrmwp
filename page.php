<?php
get_header();?>

<div class="md:flex md:justify-center">
<main class="p-6 pt-10 lg:max-w-[900px] max-w-[100vw]">
            
  <div class="pb-12 mt-5">
    <div class="text-xl py-1">_</div>
    <div class="text-3xl py-3 font-bold"><?php the_title();?></div>
    <div class="py-2">
      <?php the_content();?>
    </div>
  </div>

  <div>
    <div class="text-3xl w-full font-bold mb-2">Recent Projects &lt;/&gt;</div>
  </div>

    <div class="rounded-lg bg-base-100 hover:shadow-xl transition ease-in-out hover:scale-[102%]">
    <a href="/project-6">
        <div class="hero-content flex-col md:flex-row">
        <img alt="Demo Project 1" class="max-w-full md:max-w-[13rem] rounded-lg" width="750" height="422" src="<?php echo get_template_directory_uri();?>/img/post-img.png" loading="lazy" decoding="async">
        <div class="grow w-full">
            <h1 class="text-xl font-bold">
            Demo Project 1
            <div class="badge badge-secondary mx-2">NEW</div>
            </h1>
            <p class="py-1 text-1xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div class="card-actions justify-end">
            
            </div>
        </div>
        </div>
    </a>
    </div>
    <div class="divider my-0"></div>
    <div class="rounded-lg bg-base-100 hover:shadow-xl transition ease-in-out hover:scale-[102%]">
    <a href="/project-5">
        <div class="hero-content flex-col md:flex-row">
        <img alt="Demo Project 2" class="max-w-full md:max-w-[13rem] rounded-lg" width="750" height="422" src="<?php echo get_template_directory_uri();?>/img/post-img.png" loading="lazy" decoding="async">
        <div class="grow w-full">
            <h1 class="text-xl font-bold">
            Demo Project 2
            
            </h1>
            <p class="py-1 text-1xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div class="card-actions justify-end">
            
            </div>
        </div>
        </div>
    </a>
    </div>
    <div class="divider my-0"></div>
    <div class="rounded-lg bg-base-100 hover:shadow-xl transition ease-in-out hover:scale-[102%]">
    <a href="/project-4">
        <div class="hero-content flex-col md:flex-row">
        <img alt="Demo Project 3" class="max-w-full md:max-w-[13rem] rounded-lg" width="750" height="422" src="<?php echo get_template_directory_uri();?>/img/post-img.png" loading="lazy" decoding="async">
        <div class="grow w-full">
            <h1 class="text-xl font-bold">
            Demo Project 3
            <div class="badge badge-secondary mx-2">FOSS</div>
            </h1>
            <p class="py-1 text-1xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div class="card-actions justify-end">
            
            </div>
        </div>
        </div>
    </a>
    </div>

    <div>
        <div class="text-3xl w-full font-bold mb-5 mt-10">Upcoming Projects</div>
    </div>

    
    <div class="rounded-lg bg-base-100 hover:shadow-xl transition ease-in-out hover:scale-[102%]">
    <a href="/project-1">
        <div class="hero-content flex-col md:flex-row">
        <img alt="Demo Post 3" class="max-w-full md:max-w-[13rem] rounded-lg" width="750" height="422" src="<?php echo get_template_directory_uri();?>/img/post-img.png" loading="lazy" decoding="async">
        <div class="grow w-full">
            <h1 class="text-xl font-bold">
            Demo Post 3
            <div class="badge badge-secondary mx-2">Demo badge</div>
            </h1>
            <p class="py-1 text-1xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div class="card-actions justify-end">
            
            </div>
        </div>
        </div>
    </a>
    </div>
            <div class="divider my-0"></div>
        
    <div class="rounded-lg bg-base-100 hover:shadow-xl transition ease-in-out hover:scale-[102%]">
    <a href="/project-3">
        <div class="hero-content flex-col md:flex-row">
        <img alt="Demo Post 2" class="max-w-full md:max-w-[13rem] rounded-lg" width="750" height="422" src="<?php echo get_template_directory_uri();?>/img/post-img.png" loading="lazy" decoding="async">
        <div class="grow w-full">
            <h1 class="text-xl font-bold">
            Demo Post 2
            
            </h1>
            <p class="py-1 text-1xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div class="card-actions justify-end">
            
            </div>
        </div>
        </div>
    </a>
    </div>
            <div class="divider my-0"></div>
        
    <div class="rounded-lg bg-base-100 hover:shadow-xl transition ease-in-out hover:scale-[102%]">
    <a href="/project-2">
        <div class="hero-content flex-col md:flex-row">
        <img alt="Demo Post 1" class="max-w-full md:max-w-[13rem] rounded-lg" width="750" height="422" src="<?php echo get_template_directory_uri();?>/img/post-img.png" loading="lazy" decoding="async">
        <div class="grow w-full">
            <h1 class="text-xl font-bold">
            Demo Post 1
            
            </h1>
            <p class="py-1 text-1xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div class="card-actions justify-end">
            
            </div>
        </div>
        </div>
    </a>
    </div>
        <div class="divider my-0"></div>
      
</main>
</div>
<?php
get_footer();?>