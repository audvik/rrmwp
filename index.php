<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>RRM Students Club</title>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/styles.css" />
    </head>

    <body>
        <!-- Nav Bar -->
        <nav class="relative container mx-auto p-6">
            <div class="flex items-center justify-between">
                <div class="pt-2">
                    <img src="<?php echo get_template_directory_uri();?>/img/logo.svg" alt="MainLogo" />
                </div>
                <div class="">
                    <ul class="space-x-6">
                        <li class="hidden md:inline">
                            <a href="#" class="hover:text-darkGrayishBlue"
                                >Pricing</a
                            >
                        </li>
                        <li class="hidden md:inline">
                            <a href="#" class="hover:text-darkGrayishBlue"
                                >Product</a
                            >
                        </li>
                        <li class="hidden md:inline">
                            <a href="#" class="hover:text-darkGrayishBlue"
                                >About Us</a
                            >
                        </li>
                        <li class="hidden md:inline">
                            <a href="#" class="hover:text-darkGrayishBlue"
                                >Careers</a
                            >
                        </li>
                        <li class="hidden md:inline">
                            <a href="#" class="hover:text-darkGrayishBlue"
                                >Community</a
                            >
                        </li>
                    </ul>
                </div>
                <div>
                    <a
                        href="#"
                        class="hidden text-white bg-brightRed pt-2 px-6 pb-3 md:block rounded-full hover:bg-brightRedLight"
                        >Get Started</a
                    >
                </div>
                <button
                    id="menu-btn"
                    class="block hamburger md:hidden focus:outline-none"
                >
                    <span class="hamburger-top"></span>
                    <span class="hamburger-middle"></span>
                    <span class="hamburger-bottom"></span>
                </button>
                <div class="md:hidden">
                    <div
                        id="menu"
                        class="absolute flex-col items-center hidden self-end py-8 mt-10 space-y-6 font-bold bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md"
                    >
                        <a href="#">Pricing</a>
                        <a href="#">Product</a>
                        <a href="#">About Us</a>
                        <a href="#">Careers</a>
                        <a href="#">Community</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Hero Section -->
        <section
            id="hero"
            class="container flex flex-col mx-auto p-6 md:flex-row items-center"
        >
            <div
                class="container md:w-1/2 flex flex-col order-2 md:order-1 mb-16 md:mb-32 justify-evenly"
            >
                <h1
                    class="max-w-md text-4xl md:text-5xl font-extrabold text-center md:text-left mb-12"
                >
                    RRM Campus IT Students Group
                </h1>
                <p
                    class="max-w-sm text-darkGrayishBlue text-center md:text-left mb-12"
                >
                    RRM Students Club makes it simple for software teams to plan day-to-day
                    tasks while keeping the larger team goals in view.
                </p>
                <div class="flex justify-center md:justify-start">
                    <a
                        href="#"
                        class="text-white bg-brightRed pt-2 pb-3 px-6 text-center rounded-full"
                        >Get Started</a
                    >
                </div>
            </div>
            <div class="container md:w-1/2 order-1 md:order-2 h-2/3">
                <img
                    class=""
                    src="<?php echo get_template_directory_uri();?>/img/illustration-intro.svg"
                    alt=""
                    srcset=""
                />
            </div>
        </section>
        <section
            id="features"
            class="container flex flex-col md:flex-row mx-auto p-6"
        >
            <div class="container flex flex-col md:w-1/2">
                <h2
                    class="font-bold max-w-md text-center md:text-left text-3xl md:text-4xl"
                >
                    What's different about RRM Students Club?
                </h2>
                <p
                    class="max-w-sm text-darkGrayishBlue text-center md:text-left mt-12"
                >
                    RRM Students Club provides all the functionality your team needs,
                    without the complexity. Our software is tailor-made for
                    modern digital product teams.
                </p>
            </div>
            <div
                class="container md:w-1/2 flex flex-col justify-center text-center md:text-left"
            >
                <div
                    class="flex flex-col md:flex-row space-x-6 justify-start mt-8 md:m-0"
                >
                    <div
                        class="flex items-center text-center md:text-start justify-start md:items-start space-x-2 md:space-x-0 mb-4 mx-auto bg-veryPaleRed md:bg-white"
                    >
                        <span
                            class="bg-brightRed text-white px-4 py-2 md:py-1 rounded-full"
                        >
                            01
                        </span>
                        <h3 class="inline-block md:hidden text-lg font-bold">
                            Track company-wide progress
                        </h3>
                    </div>
                    <div>
                        <h3 class="hidden md:block text-lg font-bold mb-4">
                            Track company-wide progress
                        </h3>
                        <p class="text-darkGrayishBlue leading-5 tracking-wide">
                            See how your day-to-day tasks fit into the wider
                            vision. Go from tracking progress at the milestone
                            level all the way down to the smallest of details.
                            Never lose sight of the bigger picture again.
                        </p>
                    </div>
                </div>
                <div
                    id="features-right-col-point-2"
                    class="flex flex-col md:flex-row space-x-6 justify-start mt-8"
                >
                    <div
                        class="flex items-center text-center md:text-start justify-start md:items-start space-x-2 md:space-x-0 mb-4 mx-auto bg-veryPaleRed md:bg-white"
                    >
                        <span
                            class="bg-brightRed text-white px-4 py-2 md:py-1 rounded-full"
                        >
                            02
                        </span>
                        <h3 class="inline-block md:hidden text-lg font-bold">
                            Advanced built-in reports
                        </h3>
                    </div>
                    <div>
                        <h3 class="hidden md:block text-lg font-bold mb-4">
                            Advanced built-in reports
                        </h3>
                        <p class="text-darkGrayishBlue leading-5 tracking-wide">
                            Set internal delivery estimates and track progress
                            toward company goals. Our customisable dashboard
                            helps you build out the reports you need to keep key
                            stakeholders informed.
                        </p>
                    </div>
                </div>
                <div
                    id="features-right-col-point-1"
                    class="flex flex-col md:flex-row space-x-6 justify-start mt-8"
                >
                    <div
                        class="flex items-center text-center md:text-start justify-start md:items-start space-x-2 md:space-x-0 mb-4 mx-auto bg-veryPaleRed md:bg-white"
                    >
                        <span
                            class="bg-brightRed text-white px-4 py-2 md:py-1 rounded-full"
                        >
                            03
                        </span>
                        <h3 class="inline-block md:hidden text-lg font-bold">
                            Everything you need in one place
                        </h3>
                    </div>
                    <div>
                        <h3 class="hidden md:block text-lg font-bold mb-4">
                            Everything you need in one place
                        </h3>
                        <p class="text-darkGrayishBlue leading-5 tracking-wide">
                            Stop jumping from one service to another to
                            communicate, store files, track tasks and share
                            documents. RRM Students Club offers an all-in-one team
                            productivity solution.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial Section -->
        <section
            id="testimonial"
            class="container mt-16 md:mt-32 flex flex-col mx-auto p-6 max-w-6xl px-5 text-center"
        >
            <div>
                <h2 class="text-4xl font-bold">
                    What's different about RRM Students Club?
                </h2>
            </div>
            <div class="mt-8 md:mt-24 flex flex-col md:flex-row md:space-x-6">
                <div
                    class="md:w-1/3 flex flex-col items-center p-6 space-y-6 bg-veryLightGray"
                >
                    <img
                        class="w-16 h-16 -mt-14"
                        src="<?php echo get_template_directory_uri();?>/img/avatar-anisha.png"
                        alt="Anisha Li"
                    />
                    <h5 class="text-lg font-bold">User 2</h5>
                    <p class="text-darkGrayishBlue">
                        “RRM Students Club has supercharged our team's workflow. The
                        ability to maintain visibility on larger milestones at
                        all times keeps everyone motivated.”
                    </p>
                </div>
                <div
                    class="hidden md:w-1/3 md:flex md:flex-col items-center p-6 space-y-6 bg-veryLightGray"
                >
                    <img
                        class="w-16 h-16 -mt-14"
                        src="<?php echo get_template_directory_uri();?>/img/avatar-ali.png"
                        alt="Ali Bravo"
                    />
                    <h5 class="text-lg font-bold">User 3</h5>
                    <p class="text-darkGrayishBlue">
                        “We have been able to cancel so many other subscriptions
                        since using RRM Students Club. There is no more cross-channel
                        confusion and everyone is much more focused.”
                    </p>
                </div>
                <div
                    class="hidden md:w-1/3 md:flex md:flex-col items-center p-6 space-y-6 bg-veryLightGray"
                >
                    <img
                        class="w-16 h-16 -mt-14"
                        src="<?php echo get_template_directory_uri();?>/img/avatar-richard.png"
                        alt="Richard Mathew"
                    />
                    <h5 class="text-lg font-bold">User 4</h5>
                    <p class="text-darkGrayishBlue">
                        “RRM Students Club has supercharged our team's workflow. The
                        ability to maintain visibility on larger milestones at
                        all times keeps everyone motivated.”
                    </p>
                </div>
            </div>
            <div class="md:my-16">
                <a
                    href="#"
                    class="text-white bg-brightRed pt-2 px-6 pb-3 rounded-full hover:bg-brightRedLight"
                    >Get Started</a
                >
            </div>
        </section>
        <!-- CTA Section -->
        <section id="cta" class="bg-brightRed">
            <div
                class="container flex flex-col md:flex-row text-center md:text-left mx-auto px-6 py-24 items-center justify-between space-y-12 md:space-y-0 md:py-12"
            >
                <h2
                    class="text-5xl md:text-4xl md:max-w-xl text-white font-bold"
                >
                    Simplify how your team works today
                </h2>
                <div class="">
                    <a
                        href="#"
                        class="text-brightRed bg-white pt-2 px-6 pb-3 rounded-full hover:bg-black"
                        >Get Started</a
                    >
                </div>
            </div>
        </section>
        <!-- Footer Section -->
        <footer class="bg-veryDarkBlue">
            <div
                class="container flex flex-col-reverse text-white text-center px-6 py-10 space-y-8 mx-auto md:flex-row md:space-y-0 justify-between"
            >
                <div
                    class="flex flex-col-reverse justify-around space-y-12 items-center md:space-y-0 md:flex-col md:items-start"
                >
                    <div class="mx-auto my-6 md:hidden">
                        Copyright © 2023, All Rights Reserved
                    </div>
                    <div class="mt-12">
                        <img src="<?php echo get_template_directory_uri();?>/img/logo-white.svg" class="h-8" alt="" />
                    </div>
                    <div class="flex justify-center space-x-4">
                        <img
                            src="<?php echo get_template_directory_uri();?>/img/icon-facebook.svg"
                            class="h-8"
                            alt=""
                        /><img
                            src="<?php echo get_template_directory_uri();?>/img/icon-youtube.svg"
                            class="h-8"
                            alt=""
                        /><img
                            src="<?php echo get_template_directory_uri();?>/img/icon-twitter.svg"
                            class="h-8"
                            alt=""
                        /><img
                            src="<?php echo get_template_directory_uri();?>/img/icon-pinterest.svg"
                            class="h-8"
                            alt=""
                        /><img
                            src="<?php echo get_template_directory_uri();?>/img/icon-instagram.svg"
                            class="h-8"
                            alt=""
                        />
                    </div>
                </div>
                <div class="flex justify-around space-x-32 mt-8">
                    <div class="text-left">
                        <ul>
                            <li>
                                <a href="#" class="hover:text-brightRed"
                                    >Home</a
                                >
                            </li>
                            <li class="mt-3">
                                <a href="#" class="hover:text-brightRed"
                                    >Pricing</a
                                >
                            </li>
                            <li class="mt-3">
                                <a href="#" class="hover:text-brightRed"
                                    >Products</a
                                >
                            </li>
                            <li class="mt-3">
                                <a href="#" class="hover:text-brightRed"
                                    >About</a
                                >
                            </li>
                        </ul>
                    </div>
                    <div class="text-left">
                        <ul>
                            <li>
                                <a href="#" class="hover:text-brightRed"
                                    >Careers</a
                                >
                            </li>
                            <li class="mt-3">
                                <a href="#" class="hover:text-brightRed"
                                    >Community</a
                                >
                            </li>
                            <li class="mt-3">
                                <a href="#" class="hover:text-brightRed"
                                    >Privacy Policy</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="flex flex-col justify-between">
                    <div class="flex space-x-3">
                        <input
                            type="email"
                            class="text-black flex-1 px-4 rounded-full focus:outline-none"
                            placeholder="Update your mailbox"
                        />
                        <button
                            class="bg-brightRed text-center text-white rounded-full px-6 py-2 hover:bg-brightRedLight focus:outline-none"
                        >
                            Go
                        </button>
                    </div>
                    <div class="hidden md:block mx-auto my-6">
                        Copyright © 2023, All Rights Reserved
                    </div>
                </div>
            </div>
        </footer>
        <script src="<?php echo get_template_directory_uri();?>/js/script.js"></script>
    </body>
</html>
