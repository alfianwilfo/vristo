<template>
    <div>
        <section class="bg-black-light/10 bg-[url(/assets/images/hero-bg.png)] bg-fixed bg-center bg-repeat px-4">
            <div class="flex flex-col items-center justify-between gap-4 pt-10 md:flex-row lg:gap-7">
                <div class="mr-auto hidden w-full max-w-sm md:block">
                    <img src="/assets/images/vristo-bg-banner2.png" class="h-full w-full object-cover" alt="" />
                </div>
                <div class="mx-auto flex-none space-y-8 text-center md:w-[400px] lg:w-[580px]">
                    <h2 class="text-2xl font-bold leading-normal lg:text-4xl">
                        <span class="text-primary">16 in 1 Bundle</span> <br />
                        <span class="text-success">Multipurpose Tailwind CSS Admin Template</span>
                    </h2>

                    <p class="leading-normal text-black-light">
                        Modern, light weight, developer friendly, Highly customizable Multipurpose Tailwind CSS Admin Template built with
                    </p>
                    <p class="mx-auto !mt-3 text-lg font-semibold text-primary">
                        HTML 5, Angular Js, ReactJS, VueJS, NextJS, NuxtJs, PHP, Laravel, React + Laravel, Vue + Laravel, CakePHP, Codeigniter, Symfony, DJango,
                        Ruby On Rails, AdonisJS
                    </p>
                </div>
                <div class="ml-auto hidden w-full max-w-sm md:block">
                    <img src="/assets/images/vristo-bg-banner1.png" class="h-full w-full object-cover" alt="" />
                </div>
            </div>
            <div class="pt-10 pb-10 text-center">
                <div>
                    <NuxtLink :to="{ hash: '#demos' }" class="btn btn-success"> View Demos</NuxtLink>
                </div>
                <div class="text-gray m-5 flex flex-wrap justify-center gap-5 font-semibold opacity-40">
                    <div class="flex items-center gap-1">
                        <span class="opacity-70">
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 2V18M12 22V18M12 18L15 21M12 18L9 21M15 3L12 6L9 3"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                                <path
                                    d="M3.33978 7.00042L6.80389 9.00042M6.80389 9.00042L17.1962 15.0004M6.80389 9.00042L5.70581 4.90234M6.80389 9.00042L2.70581 10.0985M17.1962 15.0004L20.6603 17.0004M17.1962 15.0004L21.2943 13.9023M17.1962 15.0004L18.2943 19.0985"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                                <path
                                    d="M20.66 7.00042L17.1959 9.00042M17.1959 9.00042L6.80364 15.0004M17.1959 9.00042L18.294 4.90234M17.1959 9.00042L21.294 10.0985M6.80364 15.0004L3.33954 17.0004M6.80364 15.0004L2.70557 13.9023M6.80364 15.0004L5.70557 19.0985"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                            </svg>
                        </span>
                        <p>Built with Tailwind css</p>
                    </div>
                    <div class="flex items-center gap-1">
                        <span class="opacity-70">
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 2V18M12 22V18M12 18L15 21M12 18L9 21M15 3L12 6L9 3"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                                <path
                                    d="M3.33978 7.00042L6.80389 9.00042M6.80389 9.00042L17.1962 15.0004M6.80389 9.00042L5.70581 4.90234M6.80389 9.00042L2.70581 10.0985M17.1962 15.0004L20.6603 17.0004M17.1962 15.0004L21.2943 13.9023M17.1962 15.0004L18.2943 19.0985"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                                <path
                                    d="M20.66 7.00042L17.1959 9.00042M17.1959 9.00042L6.80364 15.0004M17.1959 9.00042L18.294 4.90234M17.1959 9.00042L21.294 10.0985M6.80364 15.0004L3.33954 17.0004M6.80364 15.0004L2.70557 13.9023M6.80364 15.0004L5.70557 19.0985"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                            </svg>
                        </span>
                        <p>I18n Multilingual Support</p>
                    </div>
                    <div class="flex items-center gap-1">
                        <span class="opacity-70">
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 2V18M12 22V18M12 18L15 21M12 18L9 21M15 3L12 6L9 3"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                                <path
                                    d="M3.33978 7.00042L6.80389 9.00042M6.80389 9.00042L17.1962 15.0004M6.80389 9.00042L5.70581 4.90234M6.80389 9.00042L2.70581 10.0985M17.1962 15.0004L20.6603 17.0004M17.1962 15.0004L21.2943 13.9023M17.1962 15.0004L18.2943 19.0985"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                                <path
                                    d="M20.66 7.00042L17.1959 9.00042M17.1959 9.00042L6.80364 15.0004M17.1959 9.00042L18.294 4.90234M17.1959 9.00042L21.294 10.0985M6.80364 15.0004L3.33954 17.0004M6.80364 15.0004L2.70557 13.9023M6.80364 15.0004L5.70557 19.0985"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                            </svg>
                        </span>
                        <p>Lifetime Free Updates</p>
                    </div>
                    <div class="flex items-center gap-1">
                        <span class="opacity-70">
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 2V18M12 22V18M12 18L15 21M12 18L9 21M15 3L12 6L9 3"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                                <path
                                    d="M3.33978 7.00042L6.80389 9.00042M6.80389 9.00042L17.1962 15.0004M6.80389 9.00042L5.70581 4.90234M6.80389 9.00042L2.70581 10.0985M17.1962 15.0004L20.6603 17.0004M17.1962 15.0004L21.2943 13.9023M17.1962 15.0004L18.2943 19.0985"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                                <path
                                    d="M20.66 7.00042L17.1959 9.00042M17.1959 9.00042L6.80364 15.0004M17.1959 9.00042L18.294 4.90234M17.1959 9.00042L21.294 10.0985M6.80364 15.0004L3.33954 17.0004M6.80364 15.0004L2.70557 13.9023M6.80364 15.0004L5.70557 19.0985"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                            </svg>
                        </span>
                        <p>Easy to use and Clean code</p>
                    </div>
                    <div class="flex items-center gap-1">
                        <span class="opacity-70">
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 2V18M12 22V18M12 18L15 21M12 18L9 21M15 3L12 6L9 3"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                                <path
                                    d="M3.33978 7.00042L6.80389 9.00042M6.80389 9.00042L17.1962 15.0004M6.80389 9.00042L5.70581 4.90234M6.80389 9.00042L2.70581 10.0985M17.1962 15.0004L20.6603 17.0004M17.1962 15.0004L21.2943 13.9023M17.1962 15.0004L18.2943 19.0985"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                                <path
                                    d="M20.66 7.00042L17.1959 9.00042M17.1959 9.00042L6.80364 15.0004M17.1959 9.00042L18.294 4.90234M17.1959 9.00042L21.294 10.0985M6.80364 15.0004L3.33954 17.0004M6.80364 15.0004L2.70557 13.9023M6.80364 15.0004L5.70557 19.0985"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                            </svg>
                        </span>
                        <p>and many more...</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-success/[0.02] py-10 lg:py-24">
            <div class="container">
                <div class="mx-auto space-y-6 text-center">
                    <h2 class="text-2xl font-bold leading-normal lg:text-4xl">
                        <span class="text-success">Vristo – Multipurpose Tailwind CSS Admin Template </span>
                    </h2>

                    <p>
                        Vristo is an admin dashboard template built with Tailwind CSS, HTML 5, Angular, ReactJS, VueJS, NextJS, NuxtJs, PHP, Laravel, React + Laravel,
                        Vue + Laravel, CakePHP, Codeigniter, Symfony, DJango, Ruby On Rails, AdonisJS.
                    </p>
                    <p>
                        Design, Customize and Manage Your Web App with Ease - Vristo focuses on the ease of use and flexibility of the Multipurpose Tailwind CSS
                        Admin Template. With its intuitive design, customizable components, and powerful management tools, this template makes it easy to create
                        and manage complex web applications with minimal effort
                    </p>
                </div>

                <div class="mt-12 flex items-center justify-center gap-2">
                    <a href="https://1.envato.market/Jzb2Vq" target="_blank" class="btn">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z"
                                stroke="currentColor"
                                stroke-width="1.5"
                            />
                            <path
                                d="M16.5 18.0001C17.3284 18.0001 18 18.6716 18 19.5001C18 20.3285 17.3284 21.0001 16.5 21.0001C15.6716 21.0001 15 20.3285 15 19.5001C15 18.6716 15.6716 18.0001 16.5 18.0001Z"
                                stroke="currentColor"
                                stroke-width="1.5"
                            />
                            <path d="M11 9H8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                            <path
                                d="M2 3L2.26491 3.0883C3.58495 3.52832 4.24497 3.74832 4.62248 4.2721C5 4.79587 5 5.49159 5 6.88304V9.5C5 12.3284 5 13.7426 5.87868 14.6213C6.75736 15.5 8.17157 15.5 11 15.5H13M19 15.5H17"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                            />
                            <path
                                d="M5 6H8M5.5 13H16.0218C16.9812 13 17.4609 13 17.8366 12.7523C18.2123 12.5045 18.4013 12.0636 18.7792 11.1818L19.2078 10.1818C20.0173 8.29294 20.4221 7.34853 19.9775 6.67426C19.5328 6 18.5054 6 16.4504 6H12"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                            />
                        </svg>
                        <span class="hidden md:block">Purchase Now</span>
                    </a>
                    <NuxtLink to="/documentation" target="_blank" class="btn">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.5 12L14.5 7M19.5 12L14.5 17M19.5 12L13 12M9.5 12C7.83333 12 4.5 13 4.5 17"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>

                        <span class="hidden md:block">Documentation</span>
                    </NuxtLink>
                    <NuxtLink to="/documentation/support" target="_blank" class="btn btn-success">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15.1008 15.0272L15.6446 15.5437V15.5437L15.1008 15.0272ZM15.5562 14.5477L15.0124 14.0312V14.0312L15.5562 14.5477ZM17.9729 14.2123L17.5987 14.8623H17.5987L17.9729 14.2123ZM19.8834 15.312L19.5092 15.962L19.8834 15.312ZM20.4217 18.7584L20.9655 19.275L20.9655 19.2749L20.4217 18.7584ZM19.0012 20.254L18.4574 19.7375L19.0012 20.254ZM17.6763 20.9631L17.75 21.7095L17.6763 20.9631ZM7.8154 16.4752L8.3592 15.9587L7.8154 16.4752ZM3.75185 6.92574C3.72965 6.51212 3.37635 6.19481 2.96273 6.21701C2.54911 6.23921 2.23181 6.59252 2.25401 7.00613L3.75185 6.92574ZM9.19075 8.80507L9.73454 9.32159L9.19075 8.80507ZM9.47756 8.50311L10.0214 9.01963L9.47756 8.50311ZM9.63428 5.6931L10.2467 5.26012L9.63428 5.6931ZM8.3733 3.90961L7.7609 4.3426V4.3426L8.3733 3.90961ZM4.7177 3.09213C4.43244 3.39246 4.44465 3.86717 4.74498 4.15244C5.04531 4.4377 5.52002 4.42549 5.80529 4.12516L4.7177 3.09213ZM11.0632 13.0559L11.607 12.5394L11.0632 13.0559ZM10.6641 19.8123C11.0148 20.0327 11.4778 19.9271 11.6982 19.5764C11.9186 19.2257 11.8129 18.7627 11.4622 18.5423L10.6641 19.8123ZM15.113 20.0584C14.7076 19.9735 14.3101 20.2334 14.2252 20.6388C14.1403 21.0442 14.4001 21.4417 14.8056 21.5266L15.113 20.0584ZM15.6446 15.5437L16.1 15.0642L15.0124 14.0312L14.557 14.5107L15.6446 15.5437ZM17.5987 14.8623L19.5092 15.962L20.2575 14.662L18.347 13.5623L17.5987 14.8623ZM19.8779 18.2419L18.4574 19.7375L19.545 20.7705L20.9655 19.275L19.8779 18.2419ZM8.3592 15.9587C4.48307 11.8778 3.83289 8.43556 3.75185 6.92574L2.25401 7.00613C2.35326 8.85536 3.13844 12.6403 7.27161 16.9917L8.3592 15.9587ZM9.73454 9.32159L10.0214 9.01963L8.93377 7.9866L8.64695 8.28856L9.73454 9.32159ZM10.2467 5.26012L8.98569 3.47663L7.7609 4.3426L9.02189 6.12608L10.2467 5.26012ZM9.19075 8.80507C8.64695 8.28856 8.64626 8.28929 8.64556 8.29002C8.64533 8.29028 8.64463 8.29102 8.64415 8.29152C8.6432 8.29254 8.64223 8.29357 8.64125 8.29463C8.63928 8.29675 8.63724 8.29896 8.63515 8.30127C8.63095 8.30588 8.6265 8.31087 8.62182 8.31625C8.61247 8.32701 8.60219 8.33931 8.5912 8.3532C8.56922 8.38098 8.54435 8.41511 8.51826 8.45588C8.46595 8.53764 8.40921 8.64531 8.36117 8.78033C8.26346 9.0549 8.21022 9.4185 8.27675 9.87257C8.40746 10.7647 8.99202 11.9644 10.5194 13.5724L11.607 12.5394C10.1793 11.0363 9.82765 10.1106 9.7609 9.65511C9.72871 9.43536 9.76142 9.31957 9.77436 9.28321C9.78163 9.26277 9.78639 9.25709 9.78174 9.26437C9.77948 9.26789 9.77498 9.27451 9.76742 9.28407C9.76363 9.28885 9.75908 9.29437 9.75364 9.30063C9.75092 9.30375 9.74798 9.30706 9.7448 9.31056C9.74321 9.31231 9.74156 9.3141 9.73985 9.31594C9.739 9.31686 9.73813 9.31779 9.73724 9.31873C9.7368 9.3192 9.73612 9.31992 9.7359 9.32015C9.73522 9.32087 9.73454 9.32159 9.19075 8.80507ZM10.5194 13.5724C12.0422 15.1757 13.1924 15.806 14.0699 15.9485C14.5201 16.0216 14.8846 15.9632 15.1606 15.8544C15.2955 15.8012 15.4023 15.7387 15.4824 15.6819C15.5223 15.6535 15.5556 15.6266 15.5825 15.6031C15.5959 15.5913 15.6078 15.5803 15.6181 15.5703C15.6233 15.5654 15.628 15.5606 15.6324 15.5562C15.6346 15.554 15.6368 15.5518 15.6388 15.5497C15.6398 15.5487 15.6408 15.5477 15.6417 15.5467C15.6422 15.5462 15.6429 15.5454 15.6432 15.5452C15.6439 15.5444 15.6446 15.5437 15.1008 15.0272C14.557 14.5107 14.5577 14.51 14.5583 14.5093C14.5586 14.509 14.5592 14.5083 14.5597 14.5078C14.5606 14.5069 14.5615 14.506 14.5623 14.5051C14.5641 14.5033 14.5658 14.5015 14.5675 14.4998C14.5708 14.4965 14.574 14.4933 14.577 14.4904C14.5831 14.4846 14.5885 14.4796 14.5933 14.4754C14.6029 14.467 14.61 14.4616 14.6146 14.4584C14.6239 14.4517 14.623 14.454 14.6102 14.459C14.5909 14.4666 14.5001 14.4987 14.3103 14.4679C13.9078 14.4025 13.0391 14.0472 11.607 12.5394L10.5194 13.5724ZM8.98569 3.47663C7.9721 2.04305 5.94388 1.80119 4.7177 3.09213L5.80529 4.12516C6.32812 3.57471 7.24855 3.61795 7.7609 4.3426L8.98569 3.47663ZM18.4574 19.7375C18.1783 20.0313 17.8864 20.1887 17.6026 20.2167L17.75 21.7095C18.497 21.6357 19.1016 21.2373 19.545 20.7705L18.4574 19.7375ZM10.0214 9.01963C10.9889 8.00095 11.0574 6.40678 10.2467 5.26012L9.02189 6.12608C9.44404 6.72315 9.3793 7.51753 8.93377 7.9866L10.0214 9.01963ZM19.5092 15.962C20.3301 16.4345 20.4907 17.5968 19.8779 18.2419L20.9655 19.2749C22.2705 17.901 21.8904 15.6019 20.2575 14.662L19.5092 15.962ZM16.1 15.0642C16.4854 14.6584 17.086 14.5672 17.5987 14.8623L18.347 13.5623C17.2485 12.93 15.8862 13.1113 15.0124 14.0312L16.1 15.0642ZM11.4622 18.5423C10.4785 17.9241 9.43149 17.0876 8.3592 15.9587L7.27161 16.9917C8.42564 18.2067 9.56897 19.1241 10.6641 19.8123L11.4622 18.5423ZM17.6026 20.2167C17.0561 20.2707 16.1912 20.2842 15.113 20.0584L14.8056 21.5266C16.0541 21.788 17.0742 21.7762 17.75 21.7095L17.6026 20.2167Z"
                                fill="currentColor"
                            />
                        </svg>

                        <span class="hidden md:block">Contact US</span>
                    </NuxtLink>
                </div>

                <div class="mt-12 flex flex-wrap justify-center gap-5">
                    <div class="w-full max-w-[120px] flex-none rounded border border-dashed border-primary/50 p-4 text-center duration-300 hover:bg-primary/20">
                        <div class="mb-2"><img src="/assets/images/tailwindcss.svg" alt="" class="mx-auto h-14 w-14" /></div>
                        <h3 class="font-semibold">Tailwindcss</h3>
                    </div>

                    <div class="w-full max-w-[120px] flex-none rounded border border-dashed border-primary/50 p-4 text-center duration-300 hover:bg-primary/20">
                        <div class="mb-2"><img src="/assets/images/angular.svg" alt="" class="mx-auto h-14 w-14" /></div>
                        <h3 class="font-semibold">Angular</h3>
                    </div>

                    <div class="w-full max-w-[120px] flex-none rounded border border-dashed border-primary/50 p-4 text-center duration-300 hover:bg-primary/20">
                        <div class="mb-2"><img src="/assets/images/html.svg" alt="" class="mx-auto h-14 w-14" /></div>
                        <h3 class="font-semibold">HTML</h3>
                    </div>

                    <div class="w-full max-w-[120px] flex-none rounded border border-dashed border-primary/50 p-4 text-center duration-300 hover:bg-primary/20">
                        <div class="mb-2"><img src="/assets/images/reactjs.svg" alt="" class="mx-auto h-14 w-14" /></div>
                        <h3 class="font-semibold">React</h3>
                    </div>

                    <div class="w-full max-w-[120px] flex-none rounded border border-dashed border-primary/50 p-4 text-center duration-300 hover:bg-primary/20">
                        <div class="mb-2"><img src="/assets/images/nextjs.svg" alt="" class="mx-auto h-14 w-14" /></div>
                        <h3 class="font-semibold">Next</h3>
                    </div>

                    <div class="w-full max-w-[120px] flex-none rounded border border-dashed border-primary/50 p-4 text-center duration-300 hover:bg-primary/20">
                        <div class="mb-2"><img src="/assets/images/vuejs.svg" alt="" class="mx-auto h-14 w-14" /></div>
                        <h3 class="font-semibold">Vue</h3>
                    </div>

                    <div class="w-full max-w-[120px] flex-none rounded border border-dashed border-primary/50 p-4 text-center duration-300 hover:bg-primary/20">
                        <div class="mb-2"><img src="/assets/images/nuxtjs.svg" alt="" class="mx-auto h-14 w-14" /></div>
                        <h3 class="font-semibold">Nuxt</h3>
                    </div>

                    <div class="w-full max-w-[120px] flex-none rounded border border-dashed border-primary/50 p-4 text-center duration-300 hover:bg-primary/20">
                        <div class="mb-2"><img src="/assets/images/php.svg" alt="" class="mx-auto h-14 w-14" /></div>
                        <h3 class="font-semibold">PHP</h3>
                    </div>

                    <div class="w-full max-w-[120px] flex-none rounded border border-dashed border-primary/50 p-4 text-center duration-300 hover:bg-primary/20">
                        <div class="mb-2"><img src="/assets/images/laravel.svg" alt="" class="mx-auto h-14 w-14" /></div>
                        <h3 class="font-semibold">Laravel</h3>
                    </div>

                    <div class="w-full max-w-[120px] flex-none rounded border border-dashed border-primary/50 p-4 text-center duration-300 hover:bg-primary/20">
                        <div class="mb-2"><img src="/assets/images/cakephp.svg" alt="" class="mx-auto h-14 w-14" /></div>
                        <h3 class="font-semibold">CakePHP</h3>
                    </div>

                    <div class="w-full max-w-[120px] flex-none rounded border border-dashed border-primary/50 p-4 text-center duration-300 hover:bg-primary/20">
                        <div class="mb-2"><img src="/assets/images/codeigniter.svg" alt="" class="mx-auto h-14 w-14" /></div>
                        <h3 class="font-semibold">Codeigniter</h3>
                    </div>

                    <div class="w-full max-w-[120px] flex-none rounded border border-dashed border-primary/50 p-4 text-center duration-300 hover:bg-primary/20">
                        <div class="mb-2"><img src="/assets/images/symfony.svg" alt="" class="mx-auto h-14 w-14" /></div>
                        <h3 class="font-semibold">Symfony</h3>
                    </div>

                    <div class="w-full max-w-[120px] flex-none rounded border border-dashed border-primary/50 p-4 text-center duration-300 hover:bg-primary/20">
                        <div class="mb-2"><img src="/assets/images/django.svg" alt="" class="mx-auto h-14 w-14" /></div>
                        <h3 class="font-semibold">Django</h3>
                    </div>

                    <div class="w-full max-w-[120px] flex-none rounded border border-dashed border-primary/50 p-4 text-center duration-300 hover:bg-primary/20">
                        <div class="mb-2"><img src="/assets/images/ruby.svg" alt="" class="mx-auto h-14 w-14" /></div>
                        <h3 class="font-semibold">Ruby</h3>
                    </div>

                    <div class="w-full max-w-[120px] flex-none rounded border border-dashed border-primary/50 p-4 text-center duration-300 hover:bg-primary/20">
                        <div class="mb-2"><img src="/assets/images/adonis.svg" alt="" class="mx-auto h-14 w-14" /></div>
                        <h3 class="font-semibold">Adonis</h3>
                    </div>

                    <div class="w-full max-w-max flex-none rounded border border-dashed border-primary/50 p-4 text-center duration-300 hover:bg-primary/20">
                        <div class="mb-2 flex items-center gap-2">
                            <div><img src="/assets/images/reactjs.svg" alt="" class="mx-auto h-14 w-14" /></div>
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_486_115)">
                                    <path
                                        d="M7 2.91669V11.0834"
                                        stroke="url(#paint0_linear_486_115)"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        d="M2.91675 7H11.0834"
                                        stroke="url(#paint1_linear_486_115)"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_486_115" x1="7.5" y1="2.91669" x2="7.5" y2="11.0834" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#DD0031" />
                                        <stop offset="1" stop-color="#4361EE" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_486_115" x1="2" y1="7" x2="12" y2="7" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#DD0031" />
                                        <stop offset="1" stop-color="#4361EE" />
                                    </linearGradient>
                                    <clipPath id="clip0_486_115">
                                        <rect width="14" height="14" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <div><img src="/assets/images/laravel.svg" alt="" class="mx-auto h-14 w-14" /></div>
                        </div>
                        <h3 class="font-semibold">React + Laravel</h3>
                    </div>

                    <div class="w-full max-w-max flex-none rounded border border-dashed border-primary/50 p-4 text-center duration-300 hover:bg-primary/20">
                        <div class="mb-2 flex items-center gap-2">
                            <div><img src="/assets/images/vuejs.svg" alt="" class="mx-auto h-14 w-14" /></div>
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_486_115)">
                                    <path
                                        d="M7 2.91669V11.0834"
                                        stroke="url(#paint0_linear_486_115)"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        d="M2.91675 7H11.0834"
                                        stroke="url(#paint1_linear_486_115)"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_486_115" x1="7.5" y1="2.91669" x2="7.5" y2="11.0834" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#DD0031" />
                                        <stop offset="1" stop-color="#4361EE" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_486_115" x1="2" y1="7" x2="12" y2="7" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#DD0031" />
                                        <stop offset="1" stop-color="#4361EE" />
                                    </linearGradient>
                                    <clipPath id="clip0_486_115">
                                        <rect width="14" height="14" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <div><img src="/assets/images/laravel.svg" alt="" class="mx-auto h-14 w-14" /></div>
                        </div>
                        <h3 class="font-semibold">Vue + Laravel</h3>
                    </div>

                    <div class="w-full max-w-[120px] flex-none rounded border border-dashed border-primary/50 p-4 text-center duration-300 hover:bg-primary/20">
                        <div class="mb-2"><img src="/assets/images/alpine.svg" alt="" class="mx-auto h-14 w-14" /></div>
                        <h3 class="font-semibold">Alpine</h3>
                    </div>

                    <div class="w-full max-w-[120px] flex-none rounded border border-dashed border-primary/50 p-4 text-center duration-300 hover:bg-primary/20">
                        <div class="mb-2"><img src="/assets/images/vitejs.svg" alt="" class="mx-auto h-14 w-14" /></div>
                        <h3 class="font-semibold">Vite</h3>
                    </div>

                    <div class="w-full max-w-[120px] flex-none rounded border border-dashed border-primary/50 p-4 text-center duration-300 hover:bg-primary/20">
                        <div class="mb-2"><img src="/assets/images/figma.svg" alt="" class="mx-auto h-14 w-14" /></div>
                        <h3 class="font-semibold">figma</h3>
                    </div>
                </div>
            </div>
        </section>

        <section id="demos" class="bg-[#0E1726] py-10 lg:py-24">
            <div class="container">
                <div class="mx-auto text-center text-white">
                    <h2 class="mb-4 text-2xl font-bold lg:text-4xl">Clean Code and Modern Responsive demos</h2>
                    <p class="text-black-light">
                        Our Admin template contains collection of well-designed demos that will save your lot of time and effort by not having to start from
                        scratch.
                    </p>
                </div>
            </div>

            <div class="px-10 py-10">
                <div class="flex">
                    <div class="mx-auto flex gap-5 overflow-auto whitespace-nowrap pb-5 font-semibold text-white">
                        <button
                            type="button"
                            class="btn btn-white-outline"
                            :class="{ 'bg-white text-black': activeTab === 'html' }"
                            @click="setActiveTab('html')"
                        >
                            HTML
                        </button>

                        <button
                            type="button"
                            class="btn btn-white-outline"
                            :class="{ 'bg-white text-black': activeTab === 'angular' }"
                            @click="setActiveTab('angular')"
                        >
                            Angular
                        </button>

                        <button
                            type="button"
                            class="btn btn-white-outline"
                            :class="{ 'bg-white text-black': activeTab === 'react' }"
                            @click="setActiveTab('react')"
                        >
                            ReactJs
                        </button>

                        <button
                            type="button"
                            class="btn btn-white-outline"
                            :class="{ 'bg-white text-black': activeTab === 'vue' }"
                            @click="setActiveTab('vue')"
                        >
                            VueJs
                        </button>

                        <button
                            type="button"
                            class="btn btn-white-outline"
                            :class="{ 'bg-white text-black': activeTab === 'next' }"
                            @click="setActiveTab('next')"
                        >
                            NextJs
                        </button>

                        <button
                            type="button"
                            class="btn btn-white-outline"
                            :class="{ 'bg-white text-black': activeTab === 'nuxt' }"
                            @click="setActiveTab('nuxt')"
                        >
                            NuxtJs
                        </button>

                        <button
                            type="button"
                            class="btn btn-white-outline"
                            :class="{ 'bg-white text-black': activeTab === 'php' }"
                            @click="setActiveTab('php')"
                        >
                            PHP
                        </button>

                        <button
                            type="button"
                            class="btn btn-white-outline"
                            :class="{ 'bg-white text-black': activeTab === 'laravel' }"
                            @click="setActiveTab('laravel')"
                        >
                            Laravel
                        </button>

                        <button
                            type="button"
                            class="btn btn-white-outline"
                            :class="{ 'bg-white text-black': activeTab === 'react-laravel' }"
                            @click="setActiveTab('react-laravel')"
                        >
                            React + Laravel
                        </button>

                        <button
                            type="button"
                            class="btn btn-white-outline"
                            :class="{ 'bg-white text-black': activeTab === 'vue-laravel' }"
                            @click="setActiveTab('vue-laravel')"
                        >
                            Vue + Laravel
                        </button>

                        <button
                            type="button"
                            class="btn btn-white-outline"
                            :class="{ 'bg-white text-black': activeTab === 'cakephp' }"
                            @click="setActiveTab('cakephp')"
                        >
                            CakePHP
                        </button>

                        <button
                            type="button"
                            class="btn btn-white-outline"
                            :class="{ 'bg-white text-black': activeTab === 'codeigniter' }"
                            @click="setActiveTab('codeigniter')"
                        >
                            CodeIgniter
                        </button>

                        <button
                            type="button"
                            class="btn btn-white-outline"
                            :class="{ 'bg-white text-black': activeTab === 'symfony' }"
                            @click="setActiveTab('symfony')"
                        >
                            Symfony
                        </button>

                        <button
                            type="button"
                            class="btn btn-white-outline"
                            :class="{ 'bg-white text-black': activeTab === 'django' }"
                            @click="setActiveTab('django')"
                        >
                            DJango
                        </button>

                        <button
                            type="button"
                            class="btn btn-white-outline"
                            :class="{ 'bg-white text-black': activeTab === 'ruby' }"
                            @click="setActiveTab('ruby')"
                        >
                            Ruby
                        </button>

                        <button
                            type="button"
                            class="btn btn-white-outline"
                            :class="{ 'bg-white text-black': activeTab === 'adonisjs' }"
                            @click="setActiveTab('adonisjs')"
                        >
                            AdonisJS
                        </button>
                    </div>
                </div>

                <div class="mt-7 grid gap-14 text-white sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-20">
                    <template v-if="showTabLoader">
                        <div v-for="i in 17" class="group">
                            <div class="relative">
                                <div class="h-[250px] animate-pulse overflow-hidden rounded-md border border-black-light/30 bg-black-light/30"></div>
                                <div class="absolute left-1/2 -bottom-5 flex w-max -translate-x-1/2 items-center gap-2 space-x-2 text-center">
                                    <div class="h-[42px] min-w-[90px] animate-pulse rounded-md bg-black-light/30"></div>
                                    <div class="h-[42px] min-w-[90px] animate-pulse rounded-md bg-black-light/30"></div>
                                </div>
                            </div>
                            <div class="mx-auto mt-10 h-7 w-4/5 animate-pulse rounded-md bg-black-light/30"></div>
                        </div>
                    </template>

                    <template v-else>
                        <div class="group">
                            <div class="relative">
                                <a
                                    :href="`${getUrl()}/demo-prepare.html?direction=ltr&menu=vertical&layout=full&semidark=false&theme=light&navbar=navbar-sticky`"
                                    target="_blank"
                                    class="block h-[250px] overflow-hidden rounded-md border border-black-light/30"
                                >
                                    <img
                                        src="/assets/images/img1.png"
                                        alt=""
                                        class="h-full w-full object-cover object-top duration-500 group-hover:scale-110"
                                    />
                                </a>
                                <div class="absolute left-1/2 -bottom-5 w-max -translate-x-1/2 space-x-2 text-center">
                                    <a
                                        :href="`${getUrl()}/demo-prepare.html?direction=ltr&menu=vertical&layout=full&semidark=false&theme=light&navbar=navbar-sticky`"
                                        target="_blank"
                                        class="btn min-w-[90px] justify-center font-bold"
                                        >LTR</a
                                    >
                                    <a
                                        :href="`${getUrl()}/demo-prepare.html?direction=rtl&menu=vertical&layout=full&semidark=false&theme=light&navbar=navbar-sticky`"
                                        target="_blank"
                                        class="btn btn-success min-w-[90px] justify-center font-bold"
                                        >RTL</a
                                    >
                                </div>
                            </div>
                            <h3 class="mt-10 text-center text-xl font-bold">Vertical Light Theme</h3>
                        </div>

                        <div class="group">
                            <div class="relative">
                                <a
                                    :href="`${getUrl()}/demo-prepare.html?direction=ltr&menu=vertical&layout=full&semidark=false&theme=dark&navbar=navbar-sticky`"
                                    target="_blank"
                                    class="block h-[250px] overflow-hidden rounded-md border border-black-light/30"
                                >
                                    <img
                                        src="/assets/images/img7.png"
                                        alt=""
                                        class="h-full w-full object-cover object-top duration-500 group-hover:scale-110"
                                    />
                                </a>
                                <div class="absolute left-1/2 -bottom-5 w-max -translate-x-1/2 space-x-2 text-center">
                                    <a
                                        :href="`${getUrl()}/demo-prepare.html?direction=ltr&menu=vertical&layout=full&semidark=false&theme=dark&navbar=navbar-sticky`"
                                        target="_blank"
                                        class="btn min-w-[90px] justify-center font-bold"
                                        >LTR</a
                                    >
                                    <a
                                        :href="`${getUrl()}/demo-prepare.html?direction=rtl&menu=vertical&layout=full&semidark=false&theme=dark&navbar=navbar-sticky`"
                                        target="_blank"
                                        class="btn btn-success min-w-[90px] justify-center font-bold"
                                        >RTL</a
                                    >
                                </div>
                            </div>
                            <h3 class="mt-10 text-center text-xl font-bold">Vertical Dark Theme</h3>
                        </div>

                        <div class="group">
                            <div class="relative">
                                <a
                                    :href="`${getUrl()}/demo-prepare.html?direction=ltr&menu=collapsible-vertical&layout=full&semidark=false&theme=light&navbar=navbar-sticky`"
                                    target="_blank"
                                    class="block h-[250px] overflow-hidden rounded-md border border-black-light/30"
                                >
                                    <img
                                        src="/assets/images/img3.png"
                                        alt=""
                                        class="h-full w-full object-cover object-top duration-500 group-hover:scale-110"
                                    />
                                </a>
                                <div class="absolute left-1/2 -bottom-5 w-max -translate-x-1/2 space-x-2 text-center">
                                    <a
                                        :href="`${getUrl()}/demo-prepare.html?direction=ltr&menu=collapsible-vertical&layout=full&semidark=false&theme=light&navbar=navbar-sticky`"
                                        target="_blank"
                                        class="btn min-w-[90px] justify-center font-bold"
                                        >LTR</a
                                    >
                                    <a
                                        :href="`${getUrl()}/demo-prepare.html?direction=rtl&menu=collapsible-vertical&layout=full&semidark=false&theme=light&navbar=navbar-sticky`"
                                        target="_blank"
                                        class="btn btn-success min-w-[90px] justify-center font-bold"
                                        >RTL</a
                                    >
                                </div>
                            </div>
                            <h3 class="mt-10 text-center text-xl font-bold">Collapsible Light Theme</h3>
                        </div>

                        <div class="group">
                            <div class="relative">
                                <a
                                    :href="`${getUrl()}/demo-prepare.html?direction=ltr&menu=collapsible-vertical&layout=full&semidark=false&theme=dark&navbar=navbar-sticky`"
                                    target="_blank"
                                    class="block h-[250px] overflow-hidden rounded-md border border-black-light/30"
                                >
                                    <img
                                        src="/assets/images/img6.png"
                                        alt=""
                                        class="h-full w-full object-cover object-top duration-500 group-hover:scale-110"
                                    />
                                </a>
                                <div class="absolute left-1/2 -bottom-5 w-max -translate-x-1/2 space-x-2 text-center">
                                    <a
                                        :href="`${getUrl()}/demo-prepare.html?direction=ltr&menu=collapsible-vertical&layout=full&semidark=false&theme=dark&navbar=navbar-sticky`"
                                        target="_blank"
                                        class="btn min-w-[90px] justify-center font-bold"
                                        >LTR</a
                                    >
                                    <a
                                        :href="`${getUrl()}/demo-prepare.html?direction=rtl&menu=collapsible-vertical&layout=full&semidark=false&theme=dark&navbar=navbar-sticky`"
                                        target="_blank"
                                        class="btn btn-success min-w-[90px] justify-center font-bold"
                                        >RTL</a
                                    >
                                </div>
                            </div>
                            <h3 class="mt-10 text-center text-xl font-bold">Collapsible Dark Theme</h3>
                        </div>

                        <div class="group">
                            <div class="relative">
                                <a
                                    :href="`${getUrl()}/demo-prepare.html?direction=ltr&menu=horizontal&layout=full&semidark=false&theme=light&navbar=navbar-sticky`"
                                    target="_blank"
                                    class="block h-[250px] overflow-hidden rounded-md border border-black-light/30"
                                >
                                    <img
                                        src="/assets/images/img2.png"
                                        alt=""
                                        class="h-full w-full object-cover object-top duration-500 group-hover:scale-110"
                                    />
                                </a>
                                <div class="absolute left-1/2 -bottom-5 w-max -translate-x-1/2 space-x-2 text-center">
                                    <a
                                        :href="`${getUrl()}/demo-prepare.html?direction=ltr&menu=horizontal&layout=full&semidark=false&theme=light&navbar=navbar-sticky`"
                                        target="_blank"
                                        class="btn min-w-[90px] justify-center font-bold"
                                        >LTR</a
                                    >
                                    <a
                                        :href="`${getUrl()}/demo-prepare.html?direction=rtl&menu=horizontal&layout=full&semidark=false&theme=light&navbar=navbar-sticky`"
                                        target="_blank"
                                        class="btn btn-success min-w-[90px] justify-center font-bold"
                                        >RTL</a
                                    >
                                </div>
                            </div>
                            <h3 class="mt-10 text-center text-xl font-bold">Horizontal Light Theme</h3>
                        </div>

                        <div class="group">
                            <div class="relative">
                                <a
                                    :href="`${getUrl()}/demo-prepare.html?direction=ltr&menu=horizontal&layout=full&semidark=false&theme=dark&navbar=navbar-sticky`"
                                    target="_blank"
                                    class="block h-[250px] overflow-hidden rounded-md border border-black-light/30"
                                >
                                    <img
                                        src="/assets/images/img5.png"
                                        alt=""
                                        class="h-full w-full object-cover object-top duration-500 group-hover:scale-110"
                                    />
                                </a>
                                <div class="absolute left-1/2 -bottom-5 w-max -translate-x-1/2 space-x-2 text-center">
                                    <a
                                        :href="`${getUrl()}/demo-prepare.html?direction=ltr&menu=horizontal&layout=full&semidark=false&theme=dark&navbar=navbar-sticky`"
                                        target="_blank"
                                        class="btn min-w-[90px] justify-center font-bold"
                                        >LTR</a
                                    >
                                    <a
                                        :href="`${getUrl()}/demo-prepare.html?direction=rtl&menu=horizontal&layout=full&semidark=false&theme=dark&navbar=navbar-sticky`"
                                        target="_blank"
                                        class="btn btn-success min-w-[90px] justify-center font-bold"
                                        >RTL</a
                                    >
                                </div>
                            </div>
                            <h3 class="mt-10 text-center text-xl font-bold">Horizontal Dark Theme</h3>
                        </div>

                        <div class="group">
                            <div class="relative">
                                <a
                                    :href="`${getUrl()}/demo-prepare.html?direction=ltr&menu=vertical&layout=full&semidark=true&theme=light&navbar=navbar-sticky`"
                                    target="_blank"
                                    class="block h-[250px] overflow-hidden rounded-md border border-black-light/30"
                                >
                                    <img
                                        src="/assets/images/img4.png"
                                        alt=""
                                        class="h-full w-full object-cover object-top duration-500 group-hover:scale-110"
                                    />
                                </a>
                                <div class="absolute left-1/2 -bottom-5 w-max -translate-x-1/2 space-x-2 text-center">
                                    <a
                                        :href="`${getUrl()}/demo-prepare.html?direction=ltr&menu=vertical&layout=full&semidark=true&theme=light&navbar=navbar-sticky`"
                                        target="_blank"
                                        class="btn min-w-[90px] justify-center font-bold"
                                        >LTR</a
                                    >
                                    <a
                                        :href="`${getUrl()}/demo-prepare.html?direction=rtl&menu=vertical&layout=full&semidark=true&theme=light&navbar=navbar-sticky`"
                                        target="_blank"
                                        class="btn btn-success min-w-[90px] justify-center font-bold"
                                        >RTL</a
                                    >
                                </div>
                            </div>
                            <h3 class="mt-10 text-center text-xl font-bold">Semi Dark Vertical Layout</h3>
                        </div>

                        <div class="group">
                            <div class="relative">
                                <a
                                    :href="`${getUrl()}/demo-prepare.html?direction=ltr&menu=collapsible-vertical&layout=full&semidark=true&theme=light&navbar=navbar-sticky`"
                                    target="_blank"
                                    class="block h-[250px] overflow-hidden rounded-md border border-black-light/30"
                                >
                                    <img
                                        src="/assets/images/img11.png"
                                        alt=""
                                        class="h-full w-full object-cover object-top duration-500 group-hover:scale-110"
                                    />
                                </a>
                                <div class="absolute left-1/2 -bottom-5 w-max -translate-x-1/2 space-x-2 text-center">
                                    <a
                                        :href="`${getUrl()}/demo-prepare.html?direction=ltr&menu=collapsible-vertical&layout=full&semidark=true&theme=light&navbar=navbar-sticky`"
                                        target="_blank"
                                        class="btn min-w-[90px] justify-center font-bold"
                                        >LTR</a
                                    >
                                    <a
                                        :href="`${getUrl()}/demo-prepare.html?direction=rtl&menu=collapsible-vertical&layout=full&semidark=true&theme=light&navbar=navbar-sticky`"
                                        target="_blank"
                                        class="btn btn-success min-w-[90px] justify-center font-bold"
                                        >RTL</a
                                    >
                                </div>
                            </div>
                            <h3 class="mt-10 text-center text-xl font-bold">Semi Dark Collapsible Layout</h3>
                        </div>

                        <div class="group">
                            <div class="relative">
                                <a
                                    :href="`${getUrl()}/demo-prepare.html?direction=ltr&menu=horizontal&layout=full&semidark=true&theme=light&navbar=navbar-sticky`"
                                    target="_blank"
                                    class="block h-[250px] overflow-hidden rounded-md border border-black-light/30"
                                >
                                    <img
                                        src="/assets/images/img8.png"
                                        alt=""
                                        class="h-full w-full object-cover object-top duration-500 group-hover:scale-110"
                                    />
                                </a>
                                <div class="absolute left-1/2 -bottom-5 w-max -translate-x-1/2 space-x-2 text-center">
                                    <a
                                        :href="`${getUrl()}/demo-prepare.html?direction=ltr&menu=horizontal&layout=full&semidark=true&theme=light&navbar=navbar-sticky`"
                                        target="_blank"
                                        class="btn min-w-[90px] justify-center font-bold"
                                        >LTR</a
                                    >
                                    <a
                                        :href="`${getUrl()}/demo-prepare.html?direction=rtl&menu=horizontal&layout=full&semidark=true&theme=light&navbar=navbar-sticky`"
                                        target="_blank"
                                        class="btn btn-success min-w-[90px] justify-center font-bold"
                                        >RTL</a
                                    >
                                </div>
                            </div>
                            <h3 class="mt-10 text-center text-xl font-bold">Semi Dark Horizontal Layout</h3>
                        </div>

                        <div class="group">
                            <div class="relative">
                                <a
                                    :href="`${getUrl()}/demo-prepare.html?direction=ltr&menu=vertical&layout=boxed-layout&semidark=false&theme=light&navbar=navbar-sticky`"
                                    target="_blank"
                                    class="block h-[250px] overflow-hidden rounded-md border border-black-light/30"
                                >
                                    <img
                                        src="/assets/images/img10.png"
                                        alt=""
                                        class="h-full w-full object-cover object-top duration-500 group-hover:scale-110"
                                    />
                                </a>
                                <div class="absolute left-1/2 -bottom-5 w-max -translate-x-1/2 space-x-2 text-center">
                                    <a
                                        :href="`${getUrl()}/demo-prepare.html?direction=ltr&menu=vertical&layout=boxed-layout&semidark=false&theme=light&navbar=navbar-sticky`"
                                        target="_blank"
                                        class="btn min-w-[90px] justify-center font-bold"
                                        >LTR</a
                                    >
                                    <a
                                        :href="`${getUrl()}/demo-prepare.html?direction=rtl&menu=vertical&layout=boxed-layout&semidark=false&theme=light&navbar=navbar-sticky`"
                                        target="_blank"
                                        class="btn btn-success min-w-[90px] justify-center font-bold"
                                        >RTL</a
                                    >
                                </div>
                            </div>
                            <h3 class="mt-10 text-center text-xl font-bold">Box Light Theme</h3>
                        </div>

                        <div class="group">
                            <div class="relative">
                                <a
                                    :href="`${getUrl()}/demo-prepare.html?direction=ltr&menu=vertical&layout=boxed-layout&semidark=false&theme=dark&navbar=navbar-sticky`"
                                    target="_blank"
                                    class="block h-[250px] overflow-hidden rounded-md border border-black-light/30"
                                >
                                    <img
                                        src="/assets/images/img9.png"
                                        alt=""
                                        class="h-full w-full object-cover object-top duration-500 group-hover:scale-110"
                                    />
                                </a>
                                <div class="absolute left-1/2 -bottom-5 w-max -translate-x-1/2 space-x-2 text-center">
                                    <a
                                        :href="`${getUrl()}/demo-prepare.html?direction=ltr&menu=vertical&layout=boxed-layout&semidark=false&theme=dark&navbar=navbar-sticky`"
                                        target="_blank"
                                        class="btn min-w-[90px] justify-center font-bold"
                                        >LTR</a
                                    >
                                    <a
                                        :href="`${getUrl()}/demo-prepare.html?direction=rtl&menu=vertical&layout=boxed-layout&semidark=false&theme=dark&navbar=navbar-sticky`"
                                        target="_blank"
                                        class="btn btn-success min-w-[90px] justify-center font-bold"
                                        >RTL</a
                                    >
                                </div>
                            </div>
                            <h3 class="mt-10 text-center text-xl font-bold">Box Dark Theme</h3>
                        </div>

                        <div class="group">
                            <div class="relative">
                                <a
                                    :href="`${getUrl()}/demo-prepare.html?direction=ltr&menu=vertical&layout=full&semidark=false&theme=light&navbar=navbar-static`"
                                    target="_blank"
                                    class="block h-[250px] overflow-hidden rounded-md border border-black-light/30"
                                >
                                    <img
                                        src="/assets/images/img12.png"
                                        alt=""
                                        class="h-full w-full object-cover object-top duration-500 group-hover:scale-110"
                                    />
                                </a>
                                <div class="absolute left-1/2 -bottom-5 w-max -translate-x-1/2 space-x-2 text-center">
                                    <a
                                        :href="`${getUrl()}/demo-prepare.html?direction=ltr&menu=vertical&layout=full&semidark=false&theme=light&navbar=navbar-static`"
                                        target="_blank"
                                        class="btn min-w-[90px] justify-center font-bold"
                                        >LTR</a
                                    >
                                    <a
                                        :href="`${getUrl()}/demo-prepare.html?direction=rtl&menu=vertical&layout=full&semidark=false&theme=light&navbar=navbar-static`"
                                        target="_blank"
                                        class="btn btn-success min-w-[90px] justify-center font-bold"
                                        >RTL</a
                                    >
                                </div>
                            </div>
                            <h3 class="mt-10 text-center text-xl font-bold">Static Header Light Theme</h3>
                        </div>

                        <div class="group">
                            <div class="relative">
                                <a
                                    :href="`${getUrl()}/demo-prepare.html?direction=ltr&menu=vertical&layout=full&semidark=false&theme=dark&navbar=navbar-static`"
                                    target="_blank"
                                    class="block h-[250px] overflow-hidden rounded-md border border-black-light/30"
                                >
                                    <img
                                        src="/assets/images/img14.png"
                                        alt=""
                                        class="h-full w-full object-cover object-top duration-500 group-hover:scale-110"
                                    />
                                </a>
                                <div class="absolute left-1/2 -bottom-5 w-max -translate-x-1/2 space-x-2 text-center">
                                    <a
                                        :href="`${getUrl()}/demo-prepare.html?direction=ltr&menu=vertical&layout=full&semidark=false&theme=dark&navbar=navbar-static`"
                                        target="_blank"
                                        class="btn min-w-[90px] justify-center font-bold"
                                        >LTR</a
                                    >
                                    <a
                                        :href="`${getUrl()}/demo-prepare.html?direction=rtl&menu=vertical&layout=full&semidark=false&theme=dark&navbar=navbar-static`"
                                        target="_blank"
                                        class="btn btn-success min-w-[90px] justify-center font-bold"
                                        >RTL</a
                                    >
                                </div>
                            </div>
                            <h3 class="mt-10 text-center text-xl font-bold">Static Header Dark Theme</h3>
                        </div>

                        <div class="group">
                            <div class="relative">
                                <a
                                    :href="`${getUrl()}/demo-prepare.html?direction=ltr&menu=vertical&layout=full&semidark=false&theme=light&navbar=navbar-floating`"
                                    target="_blank"
                                    class="block h-[250px] overflow-hidden rounded-md border border-black-light/30"
                                >
                                    <img
                                        src="/assets/images/img13.png"
                                        alt=""
                                        class="h-full w-full object-cover object-top duration-500 group-hover:scale-110"
                                    />
                                </a>
                                <div class="absolute left-1/2 -bottom-5 w-max -translate-x-1/2 space-x-2 text-center">
                                    <a
                                        :href="`${getUrl()}/demo-prepare.html?direction=ltr&menu=vertical&layout=full&semidark=false&theme=light&navbar=navbar-floating`"
                                        target="_blank"
                                        class="btn min-w-[90px] justify-center font-bold"
                                        >LTR</a
                                    >
                                    <a
                                        :href="`${getUrl()}/demo-prepare.html?direction=rtl&menu=vertical&layout=full&semidark=false&theme=light&navbar=navbar-floating`"
                                        target="_blank"
                                        class="btn btn-success min-w-[90px] justify-center font-bold"
                                        >RTL</a
                                    >
                                </div>
                            </div>
                            <h3 class="mt-10 text-center text-xl font-bold">Floating Header Light Theme</h3>
                        </div>

                        <div class="group">
                            <div class="relative">
                                <a
                                    :href="`${getUrl()}/demo-prepare.html?direction=ltr&menu=vertical&layout=full&semidark=false&theme=dark&navbar=navbar-floating`"
                                    target="_blank"
                                    class="block h-[250px] overflow-hidden rounded-md border border-black-light/30"
                                >
                                    <img
                                        src="/assets/images/img15.png"
                                        alt=""
                                        class="h-full w-full object-cover object-top duration-500 group-hover:scale-110"
                                    />
                                </a>
                                <div class="absolute left-1/2 -bottom-5 w-max -translate-x-1/2 space-x-2 text-center">
                                    <a
                                        :href="`${getUrl()}/demo-prepare.html?direction=ltr&menu=vertical&layout=full&semidark=false&theme=dark&navbar=navbar-floating`"
                                        target="_blank"
                                        class="btn min-w-[90px] justify-center font-bold"
                                        >LTR</a
                                    >
                                    <a
                                        :href="`${getUrl()}/demo-prepare.html?direction=rtl&menu=vertical&layout=full&semidark=false&theme=dark&navbar=navbar-floating`"
                                        target="_blank"
                                        class="btn btn-success min-w-[90px] justify-center font-bold"
                                        >RTL</a
                                    >
                                </div>
                            </div>
                            <h3 class="mt-10 text-center text-xl font-bold">Floating Header Dark Theme</h3>
                        </div>

                        <div class="group">
                            <div class="relative">
                                <a
                                    :href="`${getUrl()}/demo-prepare.html?direction=ltr&menu=vertical&layout=full&semidark=false&theme=light&navbar=navbar-sticky`"
                                    target="_blank"
                                    class="block h-[250px] overflow-hidden rounded-md border border-black-light/30"
                                >
                                    <img
                                        src="/assets/images/img12.png"
                                        alt=""
                                        class="h-full w-full object-cover object-top duration-500 group-hover:scale-110"
                                    />
                                </a>
                                <div class="absolute left-1/2 -bottom-5 w-max -translate-x-1/2 space-x-2 text-center">
                                    <a
                                        :href="`${getUrl()}/demo-prepare.html?direction=ltr&menu=vertical&layout=full&semidark=false&theme=light&navbar=navbar-sticky`"
                                        target="_blank"
                                        class="btn min-w-[90px] justify-center font-bold"
                                        >LTR</a
                                    >
                                    <a
                                        :href="`${getUrl()}/demo-prepare.html?direction=rtl&menu=vertical&layout=full&semidark=false&theme=light&navbar=navbar-sticky`"
                                        target="_blank"
                                        class="btn btn-success min-w-[90px] justify-center font-bold"
                                        >RTL</a
                                    >
                                </div>
                            </div>
                            <h3 class="mt-10 text-center text-xl font-bold">Sticky Header Light Theme</h3>
                        </div>

                        <div class="group">
                            <div class="relative">
                                <a
                                    :href="`${getUrl()}/demo-prepare.html?direction=ltr&menu=vertical&layout=full&semidark=false&theme=dark&navbar=navbar-sticky`"
                                    target="_blank"
                                    class="block h-[250px] overflow-hidden rounded-md border border-black-light/30"
                                >
                                    <img
                                        src="/assets/images/img14.png"
                                        alt=""
                                        class="h-full w-full object-cover object-top duration-500 group-hover:scale-110"
                                    />
                                </a>
                                <div class="absolute left-1/2 -bottom-5 w-max -translate-x-1/2 space-x-2 text-center">
                                    <a
                                        :href="`${getUrl()}/demo-prepare.html?direction=ltr&menu=vertical&layout=full&semidark=false&theme=dark&navbar=navbar-sticky`"
                                        target="_blank"
                                        class="btn min-w-[90px] justify-center font-bold"
                                        >LTR</a
                                    >
                                    <a
                                        :href="`${getUrl()}/demo-prepare.html?direction=rtl&menu=vertical&layout=full&semidark=false&theme=dark&navbar=navbar-sticky`"
                                        target="_blank"
                                        class="btn btn-success min-w-[90px] justify-center font-bold"
                                        >RTL</a
                                    >
                                </div>
                            </div>
                            <h3 class="mt-10 text-center text-xl font-bold">Sticky Header Dark Theme</h3>
                        </div>
                    </template>
                </div>
            </div>
        </section>

        <section class="py-10 lg:py-24">
            <div class="container">
                <div class="mx-auto max-w-[600px] text-center">
                    <img src="/assets/images/logo.svg" alt="" class="mx-auto mb-5" />
                    <h2 class="text-2xl font-bold text-primary lg:text-4xl">Save your time and money by choosing VRISTO for your website.</h2>
                </div>

                <div class="mx-auto mt-8 grid grid-cols-2 gap-5 text-center lg:mt-12 lg:grid-cols-4">
                    <div class="rounded-md border border-dashed border-black-light/30 px-4 py-5 duration-300 hover:border-success/50 hover:bg-success/20">
                        <count-up class="mb-2 text-2xl font-bold lg:text-4xl" :startVal="0" :end-val="10" :duration="10" :options="{ suffix: '+' }"></count-up>
                        <p class="text-lg font-semibold text-success">Different Layouts</p>
                    </div>

                    <div class="rounded-md border border-dashed border-black-light/30 px-4 py-5 duration-300 hover:border-success/50 hover:bg-success/20">
                        <count-up class="mb-2 text-2xl font-bold lg:text-4xl" :startVal="0" :end-val="15" :duration="10" :options="{ suffix: '+' }"></count-up>
                        <p class="text-lg font-semibold text-success">Multi Languages</p>
                    </div>

                    <div class="rounded-md border border-dashed border-black-light/30 px-4 py-5 duration-300 hover:border-success/50 hover:bg-success/20">
                        <count-up class="mb-2 text-2xl font-bold lg:text-4xl" :startVal="0" :end-val="99" :duration="10" :options="{ suffix: '+' }"></count-up>
                        <p class="text-lg font-semibold text-success">Pages & Components</p>
                    </div>

                    <div class="rounded-md border border-dashed border-black-light/30 px-4 py-5 duration-300 hover:border-success/50 hover:bg-success/20">
                        <count-up
                            class="mb-2 text-2xl font-bold lg:text-4xl"
                            :startVal="0"
                            :end-val="9"
                            :duration="10"
                            :options="{ suffix: '+', prefix: '0' }"
                        ></count-up>
                        <p class="text-lg font-semibold text-success">Apps</p>
                    </div>
                </div>
            </div>

            <div class="mx-auto mt-10 w-full max-w-[1400px] lg:mt-24">
                <div class="text-center text-2xl font-bold leading-normal text-success lg:text-4xl">Top 9+ Predefined Apps</div>
                <div class="mt-8 rounded-md bg-[#4361ee]/5 py-8 lg:mt-12 lg:px-7 lg:py-20 xl:px-14">
                    <div class="container flex flex-col items-center justify-between gap-10 md:flex-row xl:gap-20">
                        <div class="relative flex-1">
                            <div class="h-[230px] overflow-hidden shadow-[6px_6px_0_1px_rgba(116,126,209,0.3)] lg:h-[300px] xl:h-[400px]">
                                <img src="/assets/images/chat-light.png" alt="" class="h-full w-full object-cover object-top" />
                            </div>
                        </div>

                        <div class="flex-1 space-y-5 text-center md:text-left">
                            <h2 class="text-2xl font-bold text-primary lg:text-4xl">Chat</h2>
                            <p class="text-black-light">
                                Realtime Chat App - Instant messaging and communication platform for fast and secure data transmission
                            </p>
                            <p class="text-black-light">A dynamic tool that enables you two create Messaging, Calling and Video chat applications.</p>
                            <a :href="`${getUrl()}/${activeTab === 'html' ?'apps-chat.html' : 'apps/chat'}`" target="_blank" class="btn">View Demo</a>
                        </div>
                    </div>
                </div>

                <div class="mt-8 rounded-md bg-[#805dca]/5 py-8 lg:mt-12 lg:px-7 lg:py-20 xl:px-14">
                    <div class="container flex flex-col items-center justify-between gap-10 md:flex-row xl:gap-20">
                        <div class="relative flex-1 md:order-2">
                            <div class="h-[230px] overflow-hidden shadow-[-6px_6px_0_1px_rgba(71,190,125,0.3)] lg:h-[300px] xl:h-[400px]">
                                <img src="/assets/images/mailbox-light.png" alt="" class="h-full w-full object-cover object-top" />
                            </div>
                        </div>

                        <div class="flex-1 space-y-5 text-center md:text-left">
                            <h2 class="text-2xl font-bold text-success lg:text-4xl">Mailbox</h2>
                            <p class="text-black-light">
                                Mailbox App - Communicate more effectively and efficiently with intuitive email organization and management features in a
                                Mailbox app.
                            </p>
                            <p class="text-black-light">Orgainze, Save and Arrange your mails with mailbox application.</p>
                            <a :href="`${getUrl()}/${activeTab === 'html' ?'apps-mailbox.html' : 'apps/mailbox'}`" target="_blank" class="btn btn-success">View Demo</a>
                        </div>
                    </div>
                </div>

                <div class="mt-8 rounded-md bg-[#00ab55]/5 py-8 lg:mt-12 lg:px-7 lg:py-20 xl:px-14">
                    <div class="container flex flex-col items-center justify-between gap-10 md:flex-row xl:gap-20">
                        <div class="relative flex-1">
                            <div class="h-[230px] overflow-hidden shadow-[6px_6px_0_1px_rgba(116,126,209,0.3)] lg:h-[300px] xl:h-[400px]">
                                <img src="/assets/images/todo-light.png" alt="" class="h-full w-full object-cover object-top" />
                            </div>
                        </div>

                        <div class="flex-1 space-y-5 text-center md:text-left">
                            <h2 class="text-2xl font-bold text-primary lg:text-4xl">Todo List</h2>
                            <p class="text-black-light">
                                Todo List App - Stay organized and increase your productivity with a simple and intuitive task management tool.
                            </p>
                            <p class="text-black-light">
                                Manage and Organize your tasks for everyday use and keep track of your daily tasks, deadlines, and goals with a feature-rich
                                Todo List app..
                            </p>
                            <a :href="`${getUrl()}/${activeTab === 'html' ?'apps-todolist.html' : 'apps/todolist'}`" target="_blank" class="btn">View Demo</a>
                        </div>
                    </div>
                </div>

                <div class="mt-8 rounded-md bg-[#e7515a]/5 py-8 lg:mt-12 lg:px-7 lg:py-20 xl:px-14">
                    <div class="container flex flex-col items-center justify-between gap-10 md:flex-row xl:gap-20">
                        <div class="relative flex-1 md:order-2">
                            <div class="h-[230px] overflow-hidden shadow-[-6px_6px_0_1px_rgba(71,190,125,0.3)] lg:h-[300px] xl:h-[400px]">
                                <img src="/assets/images/notes-light.png" alt="" class="h-full w-full object-cover object-top" />
                            </div>
                        </div>

                        <div class="flex-1 space-y-5 text-center md:text-left">
                            <h2 class="text-2xl font-bold text-success lg:text-4xl">Notes</h2>
                            <p class="text-black-light">
                                Notes app - Create and manage your notes, lists, and reminders in one place with a feature-rich notes app
                            </p>
                            <p class="text-black-light">A simple yet useful notes application for creating Reminders, Memos, Checklist etc.</p>
                            <a :href="`${getUrl()}/${activeTab === 'html' ?'apps-notes.html' : 'apps/notes'}`" target="_blank" class="btn btn-success">View Demo</a>
                        </div>
                    </div>
                </div>

                <div class="mt-8 rounded-md bg-[#e2a03f]/5 py-8 lg:mt-12 lg:px-7 lg:py-20 xl:px-14">
                    <div class="container flex flex-col items-center justify-between gap-10 md:flex-row xl:gap-20">
                        <div class="relative flex-1">
                            <div class="h-[230px] overflow-hidden shadow-[6px_6px_0_1px_rgba(116,126,209,0.3)] lg:h-[300px] xl:h-[400px]">
                                <img src="/assets/images/scrumboard-light.png" alt="" class="h-full w-full object-cover object-top" />
                            </div>
                        </div>

                        <div class="flex-1 space-y-5 text-center md:text-left">
                            <h2 class="text-2xl font-bold text-primary lg:text-4xl">Scrumboard</h2>
                            <p class="text-black-light">
                                Scrumboard APP - Visualize and manage your team's workflow with a flexible and collaborative project management tool.
                            </p>
                            <p class="text-black-light">Scrumboard helps in assigining task to your team and checking their progress.</p>
                            <a :href="`${getUrl()}/${activeTab === 'html' ?'apps-scrumboard.html' : 'apps/scrumboard'}`" target="_blank" class="btn">View Demo</a>
                        </div>
                    </div>
                </div>

                <div class="mt-8 rounded-md bg-[#2196f3]/5 py-8 lg:mt-12 lg:px-7 lg:py-20 xl:px-14">
                    <div class="container flex flex-col items-center justify-between gap-10 md:flex-row xl:gap-20">
                        <div class="relative flex-1 md:order-2">
                            <div class="h-[230px] overflow-hidden shadow-[-6px_6px_0_1px_rgba(71,190,125,0.3)] lg:h-[300px] xl:h-[400px]">
                                <img src="/assets/images/contact-light.png" alt="" class="h-full w-full object-cover object-top" />
                            </div>
                        </div>

                        <div class="flex-1 space-y-5 text-center md:text-left">
                            <h2 class="text-2xl font-bold text-success lg:text-4xl">Contacts</h2>
                            <p class="text-black-light">
                                Contacts App - Manage and organize your contacts in one place with a simple and intuitive contact management tool.
                            </p>
                            <p class="text-black-light">Create and Manage your Customers/Team address book with ease.</p>
                            <a :href="`${getUrl()}/${activeTab === 'html' ?'apps-contacts.html' : 'apps/contacts'}`" target="_blank" class="btn btn-success">View Demo</a>
                        </div>
                    </div>
                </div>

                <div class="mt-8 rounded-md bg-[#3b3f5c]/5 py-8 lg:mt-12 lg:px-7 lg:py-20 xl:px-14">
                    <div class="container flex flex-col items-center justify-between gap-10 md:flex-row xl:gap-20">
                        <div class="relative flex-1">
                            <div class="h-[230px] overflow-hidden shadow-[6px_6px_0_1px_rgba(116,126,209,0.3)] lg:h-[300px] xl:h-[400px]">
                                <img src="/assets/images/invoice-light.png" alt="" class="h-full w-full object-cover object-top" />
                            </div>
                        </div>

                        <div class="flex-1 space-y-5 text-center md:text-left">
                            <h2 class="text-2xl font-bold text-primary lg:text-4xl">Invoice</h2>
                            <p class="text-black-light">
                                Invoice App - Create and manage professional invoices and billing statements with a simple and intuitive invoicing tool.
                            </p>
                            <p class="text-black-light">Fast and Responsive application for managing all invoices at one place.</p>
                            <a :href="`${getUrl()}/${activeTab === 'html' ?'apps-invoice-list.html' : 'apps/invoice/list'}`" target="_blank" class="btn">View Demo</a>
                        </div>
                    </div>
                </div>

                <div class="mt-8 rounded-md bg-primary/5 py-8 lg:mt-12 lg:px-7 lg:py-20 xl:px-14">
                    <div class="container flex flex-col items-center justify-between gap-10 md:flex-row xl:gap-20">
                        <div class="relative flex-1 md:order-2">
                            <div class="h-[230px] overflow-hidden shadow-[-6px_6px_0_1px_rgba(71,190,125,0.3)] lg:h-[300px] xl:h-[400px]">
                                <img src="/assets/images/calendar-light.png" alt="" class="h-full w-full object-cover object-top" />
                            </div>
                        </div>

                        <div class="flex-1 space-y-5 text-center md:text-left">
                            <h2 class="text-2xl font-bold text-success lg:text-4xl">Calendar</h2>
                            <p class="text-black-light">Calendar App - Plan and organize your schedule with a simple and intuitive calendar tool.</p>
                            <p class="text-black-light">Keep track of your appointments, events, and deadlines with a feature-rich calendar app.</p>
                            <a :href="`${getUrl()}/${activeTab === 'html' ?'apps-calendar.html' : 'apps/calendar'}`" target="_blank" class="btn btn-success">View Demo</a>
                        </div>
                    </div>
                </div>

                <div class="mt-8 rounded-md bg-black-light/5 py-8 lg:mt-12 lg:px-7 lg:py-20 xl:px-14">
                    <div class="container flex flex-col items-center justify-between gap-10 md:flex-row xl:gap-20">
                        <div class="relative flex-1">
                            <div class="h-[230px] overflow-hidden shadow-[6px_6px_0_1px_rgba(116,126,209,0.3)] lg:h-[300px] xl:h-[400px]">
                                <img src="/assets/images/profile-light.png" alt="" class="h-full w-full object-cover object-top" />
                            </div>
                        </div>

                        <div class="flex-1 space-y-5 text-center md:text-left">
                            <h2 class="text-2xl font-bold text-primary lg:text-4xl">User Profile</h2>
                            <p class="text-black-light">
                                User Profile App - Create and manage your user profile and preferences in one place with a simple and intuitive user management
                                tool.
                            </p>
                            <p class="text-black-light">Customize your user settings and preferences for a more personalized and efficient user experience.</p>
                            <a :href="`${getUrl()}/${activeTab === 'html' ?'users-profile.html' : 'users/profile'}`" target="_blank" class="btn">View Demo</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script lang="ts" setup>
    import { ref, onMounted } from 'vue';
    import CountUp from 'vue-countup-v3';
    const activeTab = ref('');
    const siteUrl = 'https://html.vristo.sbthemes.com';
    const otherDemos = ['php', 'laravel', 'cakephp', 'codeigniter', 'symfony', 'django', 'ruby', 'adonisjs', 'react-laravel', 'vue-laravel'];
    const showTabLoader = ref(true);

    onMounted(() => {
        setActiveTab('html');
    });

    const getUrl = () => {
        if (activeTab.value === 'html' || otherDemos.includes(activeTab.value)) {
            return siteUrl;
        } else if (activeTab.value === 'angular') {
            return 'https://angular.vristo.sbthemes.com';
        } else if (activeTab.value === 'vue' || activeTab.value === 'nuxt') {
            return 'https://vue.vristo.sbthemes.com';
        } else if (activeTab.value === 'react' || activeTab.value === 'next') {
            return 'https://react.vristo.sbthemes.com';
        }
    };

    const setActiveTab = (tab: string) => {
        if (activeTab.value !== tab) {
            showTabLoader.value = true;
            activeTab.value = tab;
            setTimeout(() => {
                showTabLoader.value = false;
            }, 200);
        }
    };
</script>
