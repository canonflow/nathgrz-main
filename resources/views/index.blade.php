@php
$experiences = [
    [
        "timeline" => "Aug 2024 - Sep 2024",
        "title" => "Full Stack Developer",
        "company" => "Industrial Games 32"
    ],
    [
        "timeline" => "Mar 2024 - Aug 2024",
        "title" => "Full Stack Developer",
        "company" => "MANIAC XIII"
    ],
    [
        "timeline" => "Oct 2023 - Feb 2024",
        "title" => "Full Stack Developer",
        "company" => "ILPC 2024"
    ],
    [
        "timeline" => "Jun 2023 - Aug 2023",
        "title" => "Backend Developer",
        "company" => "MANIAC XII"
    ],
];
@endphp

<!doctype html>
<html lang="en" data-theme="nord">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Nathan Garzya Santoso | Landing Page' }}</title>
    <link rel="icon" href="{{ asset('assets') }}/logo/logo.png" type="image/png">

    {{--  GSAP  --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    @vite(['resources/css/app.css', 'resources/js/typed.js'])
    <style>
        * {
            scroll-behavior: smooth;
        }

        *::-webkit-scrollbar {
            width: 0.5rem;
        }

        *::-webkit-scrollbar-track {
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            background-color: oklch(var(--b3));
            width: 1px;
        }

        *::-webkit-scrollbar-thumb {
            background-color: oklch(var(--p));
            outline: 1px solid slategrey;
            border-radius: 0.8rem;
        }

        .skill {
            cursor: pointer;
            transition: all 0.35s ease-in-out;
        }

        .skills:has(.skill:hover) > .skill:not(:hover) {
            opacity: 0.7;
        }

        .typed-cursor {
            margin-left: 0.25rem;
            font-size: 1.5rem;
        }

        @media (max-width: 1024px) {
            #themeControllers {
                width: 50%;
                justify-content: flex-end;
            }
        }

        @media (min-width: 1024px) {
            #themeController {
                flex-shrink: 0;
            }
        }
    </style>
</head>
<body>
    {{--  Navbar  --}}
    <navbar class="navbar bg-base-100">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
                </div>
                <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a href="#about" class="rounded">About</a></li>
                    <li><a href="#project" class="rounded">Project</a></li>
                    <li><a href="#experience" class="rounded">Experience</a></li>
                    <li><a href="#contact" class="rounded">Contact</a></li>
                </ul>
            </div>
            <a class="btn btn-ghost text-xl" href="/">
                <img src="{{ asset('assets') }}/logo/logo.png" alt="" class="w-7 rounded">
                nathgrz
            </a>
        </div>
        {{--    Theme Controller    --}}
        <div class="flex" id="themeControllers">
            <label class="flex cursor-pointer gap-2">
                <svg class="hidden lg:block" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"/><path d="M12 1v2M12 21v2M4.2 4.2l1.4 1.4M18.4 18.4l1.4 1.4M1 12h2M21 12h2M4.2 19.8l1.4-1.4M18.4 5.6l1.4-1.4"/></svg>
                <input type="checkbox" value="sunset" class="toggle theme-controller" id="themeController"/>
                <svg class="hidden lg:block" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
            </label>
        </div>
        <div class="navbar-end hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a href="#about" class="rounded">About</a></li>
                <li><a href="#project" class="rounded">Project</a></li>
                <li><a href="#experience" class="rounded">Experience</a></li>
                <li><a href="#contact" class="rounded">Contact</a></li>
            </ul>
        </div>
    </navbar>

    {{--  CONTENT  --}}
    <main class="p-10 mt-7 flex flex-col items-center justify-center gap-8">
        {{--    Introduction    --}}
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div class="flex flex-col items-start gap-2 select-none">
                <h1 class="text-5xl font-medium">Nathan Garzya<br/>Santoso</h1>
                <h2 class="text-2xl text-secondary font-light min-h-14" id="typing"></h2>
            </div>
            <p class="pt-8 lg:pt-0">
                <span class="text-2xl inline-block mb-2">Hi,</span> <br />
                "I'm Nathan Garzya Santoso. A computer science student who has interest on web development and machine learning with a passion for crafting engaging user experiences. Welcome to my portfolio."
            </p>
        </div>

        {{--    About    --}}
        <div class="bg-base-200 p-3 select-none w-full section">
            <div class="flex justify-center"><h2 class="text-4xl text-primary" id="about">About</h2></div>
            <div class="avatar flex flex-col justify-center items-center">
                <div class="w-4/5 lg:w-2/5 rounded">
                    <img src="{{ asset('assets') }}/foto/nathan 1.png" />
                </div>
                <p class="w-full lg:w-3/5 pt-6 text-justify">I am a Web Developer specialized in Full Stack Programming with one year experience in Web Development, which gives me an understanding of website structure and optimization requirements. I'm <span class="font-medium text-accent">passionate about crafting websites and developing robust web applications</span>. Equipped with problem-solving prowess and a knack for critical thinking, I am poised to make meaningful contributions to the ever-evolving tech landscape.</p>
            </div>
        </div>

        {{--    SKILLS    --}}
        <div class="p-3 section">
            <div class="flex justify-center"><h2 class="text-4xl text-primary" id="skill">Skill</h2></div>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-6 pt-6 skills">
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">HTML5</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">CSS3</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">Javascript</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">Typescript</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">Bootstrap</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">Tailwind</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">DaisyUI</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">PHP</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">Python</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">Numpy</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">Pandas</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">Matplotlib</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">Scikit Learn</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">OpenCV</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">C#</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">C++</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">Kotlin</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">Laravel</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">Git</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">NodeJS</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">ExpressJS</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">AdonisJS</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">SQL</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">Figma</div>
            </div>
        </div>

        {{--    Projects    --}}
        <div class="bg-base-200 p-3 select-none w-full section">
            <div class="flex justify-center"><h2 class="text-4xl text-primary" id="project">Project</h2></div>
            <p class="pt-6 flex justify-center">Currently, you can see all my projects on Github &nbsp; <a href="https://github.com/canonflow" target="_blank"><strong>@canonflow</strong></a></p>
        </div>

        {{--    Experiences    --}}
        <div class="p-3 select-none w-full section">
            <div class="flex justify-center"><h2 class="text-4xl text-primary" id="experience">Experience</h2></div>
            <ul class="timeline timeline-vertical">
                @foreach($experiences as $cnt => $experience)
                    <li class="h-44">
                        @if($cnt != 0) <hr class="bg-accent" /> @endif
                        <div class="timeline-start text-md lg:text-lg mr-4">{{ $experience['timeline'] }}</div>
                        <div class="timeline-middle badge badge-outline badge-accent badge-md py-4 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m6.75 7.5 3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0 0 21 18V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v12a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>
                        </div>
                        <div class="timeline-end timeline-box text-md lg:text-lg rounded-md ml-4">
                            <span class="text-secondary">{{ $experience['title'] }}</span>
                            <br />
                            <span class="inline-block mt-3 md:mt-2 font-light">{{ $experience['company'] }}</span>
                        </div>
                        @if($cnt < count($experiences) - 1) <hr class="bg-accent" /> @endif
                    </li>
                @endforeach
            </ul>
        </div>

        {{--    Contact    --}}
        <div class="bg-base-200 p-3 select-none w-full section">
            <div class="flex flex-col items-center justify-center">
                <h2 class="text-4xl text-primary" id="contact">Contact</h2>
                <p class="pt-3 text-lg">Feel free to contact me for any inquiries you may have!</p>
            </div>
            {{--      Links      --}}
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 pt-6">
                {{--  Github  --}}
                <a
                    href="https://github.com/canonflow"
                    target="_blank"
                    class="flex justify-center items-center gap-2 rounded bg-neutral text-neutral-content p-2 pointer"
                >
                    <span class="[&>svg]:h-5 [&>svg]:w-5">
                      <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="currentColor"
                          viewBox="0 0 496 512">
                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                        <path
                            d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
                      </svg>
                    </span>
                    Github
                </a>

                {{--  Linkedin  --}}
                <a
                    href="https://www.linkedin.com/in/nathan-garzya-santoso-3209bb212/"
                    target="_blank"
                    class="flex justify-center items-center gap-2 rounded bg-neutral text-neutral-content p-2 pointer"
                >
                    <span class="[&>svg]:h-5 [&>svg]:w-5 [&>svg]:fill-[#0077b5]">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                        <path d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z"></path>
                      </svg>
                    </span>
                    LinkedIn
                </a>

                {{--  Email  --}}
                <a
                    href="mailto:dev.nathangarzyasantoso@gmail.com"
                    target="_blank"
                    class="flex justify-center items-center gap-2 rounded bg-neutral text-neutral-content p-2 pointer"
                >
                    <span class="[&>svg]:h-5 [&>svg]:w-5 [&>svg]:fill-[#ea4335]">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512">
                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                        <path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path>
                      </svg>
                    </span>
                    Email
                </a>

                {{--  Instagram  --}}
                <a
                    href="https://www.instagram.com/nathgrz._"
                    target="_blank"
                    class="flex justify-center items-center gap-2 rounded bg-neutral text-neutral-content p-2 pointer"
                >
                    <span class="[&>svg]:h-5 [&>svg]:w-5 [&>svg]:fill-[#c13584]">
                      <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="currentColor"
                          viewBox="0 0 448 512">
                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                        <path
                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                      </svg>
                    </span>
                    Instagram
                </a>
            </div>
        </div>
    </main>

    <div class="divider"></div>

    <footer>
        <div class="flex flex-col items-center md:flex-row md:justify-between py-6 px-8 bg-warning text-warning-content">
            <p class="text-center">&copy; 2024 Nathan Garzya Santoso. All Rights Reserved.</p>
            <p class="mt-2 md:mt-0">dev.nathangarzyasantoso@gmail.com</p>
        </div>
    </footer>

    <script>
        const themeController = document.getElementById('themeController');
        window.onload = function () {
            themeController.checked = JSON.parse(localStorage.getItem('isDark'));
        }

        themeController.addEventListener('change', (e) => {
            localStorage.setItem('isDark', e.target.checked);
        })
    </script>

    {{--  Typed  --}}
    <script type="module">
        var typed = new Typed('#typing', {
            strings: ["Computer Science Student", "Full Stack Developer", "Machine Learning"],
            typeSpeed: 50,
            backSpeed: 50,
            loop: true,
            // backDelay: 2800,
            backDelay: 1500,
            showCursor: false,
        });
    </script>

    {{--  GSAP  --}}
    <script>
        const datas = gsap.utils.toArray('.section');
        datas.forEach(data => {
            const anim = gsap.fromTo(
                data,
                {
                    autoAlpha: 0,
                    y: 100,
                },
                {
                    duration: 0.75,
                    autoAlpha: 1,
                    y: 0,
                    x: 0,
                }
            );
            ScrollTrigger.create({
                trigger: data,
                animation: anim,
            });
        });
    </script>
</body>
</html>
