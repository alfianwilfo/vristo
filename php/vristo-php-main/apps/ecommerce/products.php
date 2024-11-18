<?php
include '../../header-main.php';
?>

<div x-data="products">
    <script src="/assets/js/simple-datatables.js"></script>
    <div class="flex gap-5 relative xl:h-[calc(100vh_-_150px)] h-full sm:min-h-0" :class="{'min-h-[999px]' : isShowChatMenu}">
        <div class="perfect-scrollbar panel p-4 flex-none overflow-x-hidden max-w-xs w-full absolute xl:relative z-10 space-y-4 h-full hidden xl:block" :class="isShowChatMenu && '!block'">
            <div class="flex items-center justify-between">
                <h4 class="text-xl font-semibold">Filters</h4>
                <button type="button" class="text-primary font-medium">Clear All</button>
            </div>
            <div class="h-px w-full border-b border-[#e0e6ed] dark:border-[#1b2e4b]"></div>
            <div>
                <h6 class="text-base font-bold pb-5">Products</h6>
                <ul class="space-y-1.5">
                    <li>
                        <a href="javascript:" class="inline-flex items-center gap-1">
                            <input type="checkbox" id="fashion" class="form-checkbox" />
                            <label for="fashion" class="mb-0 cursor-pointer">Fashion</label>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="inline-flex items-center gap-1">
                            <input type="checkbox" id="electronics" class="form-checkbox" />
                            <label for="electronics" class="mb-0 cursor-pointer">Electronics</label>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="inline-flex items-center gap-1">
                            <input type="checkbox" id="kids" class="form-checkbox" />
                            <label for="kids" class="mb-0 cursor-pointer">Kids</label>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="inline-flex items-center gap-1">
                            <input type="checkbox" id="grocery" class="form-checkbox" />
                            <label for="grocery" class="mb-0 cursor-pointer">Grocery</label>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="inline-flex items-center gap-1">
                            <input type="checkbox" id="kitchen" class="form-checkbox" />
                            <label for="kitchen" class="mb-0 cursor-pointer">Kitchen</label>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="inline-flex items-center gap-1">
                            <input type="checkbox" id="furniture" class="form-checkbox" />
                            <label for="furniture" class="mb-0 cursor-pointer">Furniture</label>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="inline-flex items-center gap-1">
                            <input type="checkbox" id="watches" class="form-checkbox" />
                            <label for="watches" class="mb-0 cursor-pointer">Watches</label>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="h-px w-full border-b border-[#e0e6ed] dark:border-[#1b2e4b]"></div>
            <div>
                <h6 class="text-base font-bold pb-5">Price</h6>
                <div>
                    <input type="range" class="w-full py-2.5" min="0" max="100" x-model="slider3" />
                    <div class="font-bold"> <span x-text="slider3" class="inline-block py-1 px-2 rounded text-primary border border-white-light dark:border-dark"></span> <span>%</span></div>
                </div>
            </div>
            <div class="h-px w-full border-b border-[#e0e6ed] dark:border-[#1b2e4b]">
            </div>
            <div>
                <h6 class="text-base font-bold pb-5">Brands</h6>
                <ul class="space-y-1.5">
                    <li>
                        <a href="javascript:" class="inline-flex items-center gap-1">
                            <input type="checkbox" id="boat" class="form-checkbox" />
                            <label for="boat" class="mb-0 cursor-pointer">Boat</label>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="inline-flex items-center gap-1">
                            <input type="checkbox" id="apple" class="form-checkbox" />
                            <label for="apple" class="mb-0 cursor-pointer">Apple</label>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="inline-flex items-center gap-1">
                            <input type="checkbox" id="oneplus" class="form-checkbox" />
                            <label for="oneplus" class="mb-0 cursor-pointer">Oneplus</label>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="inline-flex items-center gap-1">
                            <input type="checkbox" id="redmi" class="form-checkbox" />
                            <label for="redmi" class="mb-0 cursor-pointer">Redmi</label>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="inline-flex items-center gap-1">
                            <input type="checkbox" id="samsung" class="form-checkbox" />
                            <label for="samsung" class="mb-0 cursor-pointer">Samsung</label>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="inline-flex items-center gap-1">
                            <input type="checkbox" id="oppo" class="form-checkbox" />
                            <label for="oppo" class="mb-0 cursor-pointer">Oppo</label>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="h-px w-full border-b border-[#e0e6ed] dark:border-[#1b2e4b]"></div>
            <div>
                <h6 class="text-base font-bold pb-5">Discount</h6>
                <ul class="space-y-1.5">
                    <li>
                        <a href="javascript:" class="inline-flex items-center gap-1">
                            <input type="checkbox" id="50%" class="form-checkbox" />
                            <label for="50%" class="mb-0 cursor-pointer">50% or more</label>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="inline-flex items-center gap-1">
                            <input type="checkbox" id="40%" class="form-checkbox" />
                            <label for="40%" class="mb-0 cursor-pointer">40% or more</label>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="inline-flex items-center gap-1">
                            <input type="checkbox" id="30%" class="form-checkbox" />
                            <label for="30%" class="mb-0 cursor-pointer">30% or more</label>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="inline-flex items-center gap-1">
                            <input type="checkbox" id="20%" class="form-checkbox" />
                            <label for="20%" class="mb-0 cursor-pointer">20% or more</label>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="inline-flex items-center gap-1">
                            <input type="checkbox" id="10%" class="form-checkbox" />
                            <label for="10%" class="mb-0 cursor-pointer">10% or more</label>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="inline-flex items-center gap-1">
                            <input type="checkbox" id="less-than-10%" class="form-checkbox" />
                            <label for="less-than-10%" class="mb-0 cursor-pointer">Less than 10%</label>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="h-px w-full border-b border-[#e0e6ed] dark:border-[#1b2e4b]"></div>
            <div>
                <h6 class="text-base font-bold pb-5">Rating</h6>
                <ul class="space-y-1.5">
                    <li>
                        <a href="javascript:" class="inline-flex items-center gap-1">
                            <input type="checkbox" id="4star" class="form-checkbox" />
                            <label for="4star" class="mb-0 flex items-center">
                                <div class="flex gap-0.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffc107" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" fill="#ffc107" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffc107" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" fill="#ffc107" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffc107" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" fill="#ffc107" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffc107" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" fill="#ffc107" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#E0E6ED" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" fill="#E0E6ED" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                    </svg>
                                </div>
                                <span>&nbsp; & Above</span>
                            </label>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="inline-flex items-center gap-1">
                            <input type="checkbox" id="3star" class="form-checkbox" />
                            <label for="3star" class="mb-0 flex items-center">
                                <div class="flex gap-0.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffc107" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" fill="#ffc107" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffc107" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" fill="#ffc107" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffc107" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" fill="#ffc107" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#E0E6ED" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" fill="#E0E6ED" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#E0E6ED" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" fill="#E0E6ED" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                    </svg>
                                </div>
                                <span>&nbsp; & Above</span>
                            </label>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="inline-flex items-center gap-1">
                            <input type="checkbox" id="2star" class="form-checkbox" />
                            <label for="2star" class="mb-0 flex items-center">
                                <div class="flex gap-0.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffc107" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" fill="#ffc107" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffc107" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" fill="#ffc107" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#E0E6ED" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" fill="#E0E6ED" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#E0E6ED" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" fill="#E0E6ED" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#E0E6ED" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" fill="#E0E6ED" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                    </svg>
                                </div>
                                <span>&nbsp; & Above</span>
                            </label>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="inline-flex items-center gap-1">
                            <input type="checkbox" id="1star" class="form-checkbox" />
                            <label for="1star" class="mb-0 flex items-center">
                                <div class="flex gap-0.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffc107" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" fill="#ffc107" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#E0E6ED" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" fill="#E0E6ED" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#E0E6ED" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" fill="#E0E6ED" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#E0E6ED" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" fill="#E0E6ED" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#E0E6ED" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" fill="#E0E6ED" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                    </svg>
                                </div>
                                <span>&nbsp; & Above</span>
                            </label>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="bg-black/60 z-[5] w-full h-full absolute rounded-md hidden" :class="isShowChatMenu && '!block xl:!hidden'" @click="isShowChatMenu = !isShowChatMenu"></div>
        <div class="panel flex-1 overflow-y-auto">
            <div class="sm:absolute sm:top-5 ltr:sm:left-5 rtl:sm:right-5 mb-5">
                <div class="flex items-center justify-between relative gap-4">
                    <button type="button" class="xl:hidden hover:text-primary" @click="isShowChatMenu = !isShowChatMenu">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
                            <path d="M20 7L4 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                            <path opacity="0.5" d="M20 12L4 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                            <path d="M20 17L4 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                        </svg>
                    </button>
                    <a href="/apps/ecommerce/add-product.php" class="btn btn-primary gap-2 px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                        Add New </a>
                </div>
            </div>
            <div class="product-table">
                <table id="myTable" class="whitespace-nowrap"></table>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener("alpine:init", () => {
        Alpine.data("products", () => ({
            slider3: '0',
            isShowChatMenu: false,
            selectedRows: [],
            items: [{
                    id: '1',
                    title: 'Wireless Bluetooth Headphones',
                    stock: 120,
                    price: 89.99,
                    rating: 4.5,
                    published_date: '15 Mar 2022',
                    action: 1,
                },
                {
                    id: '2',
                    title: 'Smart Watch with Heart Rate Monitor',
                    stock: 50,
                    price: 149.99,
                    rating: 4.2,
                    published_date: '20 Mar 2022',
                    action: 2,
                },
                {
                    id: '3',
                    title: 'Compact Digital Camera',
                    stock: 80,
                    price: 219.99,
                    rating: 4.7,
                    published_date: '25 Mar 2022',
                    action: 3,
                },
                {
                    id: '4',
                    title: 'Wireless Gaming Mouse',
                    stock: 40,
                    price: 69.99,
                    rating: 4.1,
                    published_date: '01 Apr 2022',
                    action: 4,
                },
                {
                    id: '5',
                    title: 'Portable Bluetooth Speaker',
                    stock: 100,
                    price: 49.99,
                    rating: 4.3,
                    published_date: '05 Apr 2022',
                    action: 5,
                },
                {
                    id: '6',
                    title: 'Wireless Charger',
                    stock: 150,
                    price: 29.99,
                    rating: 4.6,
                    published_date: '10 Apr 2022',
                    action: 6,
                },
                {
                    id: '7',
                    title: 'Fitness Tracker',
                    stock: 60,
                    price: 79.99,
                    rating: 4.4,
                    published_date: '15 Apr 2022',
                    action: 7,
                },
                {
                    id: '8',
                    title: 'External Hard Drive',
                    stock: 90,
                    price: 129.99,
                    rating: 4.8,
                    published_date: '20 Apr 2022',
                    action: 8,
                },
                {
                    id: '9',
                    title: 'Smart Home Security Camera',
                    stock: 30,
                    price: 199.99,
                    rating: 4.0,
                    published_date: '25 Apr 2022',
                    action: 9,
                },
                {
                    id: '10',
                    title: 'Wireless Keyboard and Mouse Combo',
                    stock: 70,
                    price: 59.99,
                    rating: 4.2,
                    published_date: '01 May 2022',
                    action: 10,
                },
                {
                    id: '11',
                    title: 'High-Speed Blender',
                    stock: 20,
                    price: 179.99,
                    rating: 4.9,
                    published_date: '05 May 2022',
                    action: 11,
                },
                {
                    id: '12',
                    title: 'Electric Toothbrush',
                    stock: 100,
                    price: 39.99,
                    rating: 4.5,
                    published_date: '10 May 2022',
                    action: 12,
                },
            ],
            searchText: '',
            datatable: null,
            dataArr: [],

            init() {
                this.setTableData();
                this.initializeTable();
                this.$watch('items', value => {
                    this.datatable.destroy()
                    this.setTableData();
                    this.initializeTable();
                });
                this.$watch('selectedRows', value => {
                    this.datatable.destroy()
                    this.setTableData();
                    this.initializeTable();
                });
            },

            initializeTable() {
                this.datatable = new simpleDatatables.DataTable('#myTable', {
                    data: {
                        headings: [
                            '<input type="checkbox" class="form-checkbox" :checked="checkAllCheckbox" :value="checkAllCheckbox" @change="checkAll($event.target.checked)"/>',
                            "Product",
                            "Stock",
                            "Price",
                            "Rating",
                            "published",
                            "Actions",
                        ],
                        data: this.dataArr
                    },
                    perPage: 9,
                    perPageSelect: [10, 20, 30],
                    columns: [{
                            select: 0,
                            sortable: false,
                            render: function(data, cell, row) {
                                return `<input type="checkbox" class="form-checkbox mt-1" :id="'chk' + ${data}" :value="(${data})" x-model.number="selectedRows" />`;
                            }
                        },
                        {
                            select: 1,
                            render: function(data, cell, row) {
                                return `<div class="flex items-center gap-2"><div class="p-px bg-white-dark/30 rounded w-max"><img class="h-8 w-8 rounded object-cover" src="/assets/images/product/product-${row.dataIndex + 1}.jpg" /></div><div><a href="/apps/ecommerce/product-details.php" class="font-semibold text-primary hover:underline line-clamp-1 whitespace-normal">${data}</a><div><span class="font-semibold">Category: </span><span>Electronics</span></div></div></div>`;
                            }
                        },
                        {
                            select: 2,
                            render: function(data, cell, row) {
                                return '<div class="font-semibold">' + data + '</div>';
                            }
                        },
                        {
                            select: 3,
                            render: function(data, cell, row) {
                                return '<div class="font-semibold">$' + data + '</div>';
                            }
                        },
                        {
                            select: 4,
                            render: function(data, cell, row) {
                                return '<div class="font-semibold inline-flex gap-1 items-center"><span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffc107" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" fill="#ffc107" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" /></svg></span>' + data + '</div>';
                            }
                        },
                        {
                            select: 5,
                            render: function(data, cell, row) {
                                return '<div class="font-semibold">' + data + '</div>';
                            },
                        },
                        {
                            select: 6,
                            sortable: false,
                            render: function(data, cell, row) {
                                return `<div class="flex gap-4 items-center">
                                            <a href="/apps/ecommerce/add-product.php" class="hover:text-info">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5">
                                                    <path
                                                        opacity="0.5"
                                                        d="M22 10.5V12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2H13.5"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                    ></path>
                                                    <path
                                                        d="M17.3009 2.80624L16.652 3.45506L10.6872 9.41993C10.2832 9.82394 10.0812 10.0259 9.90743 10.2487C9.70249 10.5114 9.52679 10.7957 9.38344 11.0965C9.26191 11.3515 9.17157 11.6225 8.99089 12.1646L8.41242 13.9L8.03811 15.0229C7.9492 15.2897 8.01862 15.5837 8.21744 15.7826C8.41626 15.9814 8.71035 16.0508 8.97709 15.9619L10.1 15.5876L11.8354 15.0091C12.3775 14.8284 12.6485 14.7381 12.9035 14.6166C13.2043 14.4732 13.4886 14.2975 13.7513 14.0926C13.9741 13.9188 14.1761 13.7168 14.5801 13.3128L20.5449 7.34795L21.1938 6.69914C22.2687 5.62415 22.2687 3.88124 21.1938 2.80624C20.1188 1.73125 18.3759 1.73125 17.3009 2.80624Z"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                    ></path>
                                                    <path
                                                        opacity="0.5"
                                                        d="M16.6522 3.45508C16.6522 3.45508 16.7333 4.83381 17.9499 6.05034C19.1664 7.26687 20.5451 7.34797 20.5451 7.34797M10.1002 15.5876L8.4126 13.9"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                    ></path>
                                                </svg>
                                            </a>
                                            <a href="/apps/ecommerce/product-details.php" class="hover:text-primary">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                                    <path
                                                        opacity="0.5"
                                                        d="M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                    ></path>
                                                    <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" stroke="currentColor" stroke-width="1.5"></path>
                                                </svg>
                                            </a>
                                            <button type="button" class="hover:text-danger" @click="deleteRow(${data})">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                                    <path d="M20.5001 6H3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                                    <path
                                                        d="M18.8334 8.5L18.3735 15.3991C18.1965 18.054 18.108 19.3815 17.243 20.1907C16.378 21 15.0476 21 12.3868 21H11.6134C8.9526 21 7.6222 21 6.75719 20.1907C5.89218 19.3815 5.80368 18.054 5.62669 15.3991L5.16675 8.5"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                    ></path>
                                                    <path opacity="0.5" d="M9.5 11L10 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                                    <path opacity="0.5" d="M14.5 11L14 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                                    <path
                                                        opacity="0.5"
                                                        d="M6.5 6C6.55588 6 6.58382 6 6.60915 5.99936C7.43259 5.97849 8.15902 5.45491 8.43922 4.68032C8.44784 4.65649 8.45667 4.62999 8.47434 4.57697L8.57143 4.28571C8.65431 4.03708 8.69575 3.91276 8.75071 3.8072C8.97001 3.38607 9.37574 3.09364 9.84461 3.01877C9.96213 3 10.0932 3 10.3553 3H13.6447C13.9068 3 14.0379 3 14.1554 3.01877C14.6243 3.09364 15.03 3.38607 15.2493 3.8072C15.3043 3.91276 15.3457 4.03708 15.4286 4.28571L15.5257 4.57697C15.5433 4.62992 15.5522 4.65651 15.5608 4.68032C15.841 5.45491 16.5674 5.97849 17.3909 5.99936C17.4162 6 17.4441 6 17.5 6"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                    ></path>
                                                </svg>
                                            </button>
                                        </div>`;
                            }
                        }
                    ],
                    firstLast: true,
                    firstText: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M13 19L7 12L13 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path opacity="0.5" d="M16.9998 19L10.9998 12L16.9998 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>',
                    lastText: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M11 19L17 12L11 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path opacity="0.5" d="M6.99976 19L12.9998 12L6.99976 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>',
                    prevText: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M15 5L9 12L15 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>',
                    nextText: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>',
                    labels: {
                        perPage: "<span class='ml-2'>{select}</span>",
                        noRows: "No data available",
                    },
                    layout: {
                        top: "{search}",
                        bottom: "{info}{select}{pager}",
                    },
                });
            },

            checkAllCheckbox() {
                if (this.items.length && this.selectedRows.length === this.items.length) {
                    return true;
                } else {
                    return false;
                }
            },

            checkAll(isChecked) {
                if (isChecked) {
                    this.selectedRows = this.items.map((d) => {
                        return d.id;
                    });
                } else {
                    this.selectedRows = [];
                }
            },

            setTableData() {
                this.dataArr = [];
                for (let i = 0; i < this.items.length; i++) {
                    this.dataArr[i] = [];
                    for (let p in this.items[i]) {
                        if (this.items[i].hasOwnProperty(p)) {
                            this.dataArr[i].push(this.items[i][p]);
                        }
                    }
                }
            },

            searchInvoice() {
                return this.items.filter((d) =>
                    (d.invoice && d.invoice.toLowerCase().includes(this.searchText)) ||
                    (d.name && d.name.toLowerCase().includes(this.searchText)) ||
                    (d.email && d.email.toLowerCase().includes(this.searchText)) ||
                    (d.date && d.date.toLowerCase().includes(this.searchText)) ||
                    (d.amount && d.amount.toLowerCase().includes(this.searchText)) ||
                    (d.status && d.status.toLowerCase().includes(this.searchText))
                );
            },

            deleteRow(item) {
                if (confirm('Are you sure want to delete selected row ?')) {
                    if (item) {
                        this.items = this.items.filter((d) => d.id != item);
                        this.selectedRows = [];
                    } else {
                        this.items = this.items.filter((d) => !this.selectedRows.includes(d.id));
                        this.selectedRows = [];
                    }
                }
            },
        }));
    });
</script>

<style scoped>
    /* range picker */
    input[type=range] {
        -webkit-appearance: none;
    }

    input[type=range]::-webkit-slider-runnable-track {
        width: 100%;
        height: 8px;
        background: #dee2e6;
        border: none;
        border-radius: 3px;
    }

    input[type=range]::-webkit-slider-thumb {
        -webkit-appearance: none;
        border: none;
        height: 16px;
        width: 16px;
        border-radius: 50%;
        background: #4361ee;
        margin-top: -4px;
    }

    .dark input[type=range]::-webkit-slider-runnable-track {
        background: #1b2e4b;
    }

    .dark input[type=range] {
        background-color: transparent;
    }

    input[type=range]:focus {
        outline: none;
    }

    input[type=range]:active::-webkit-slider-thumb {
        background: #4361eec2;
        cursor: pointer;
    }

    @media only screen and (max-width: 639px) {

        .product-table .dataTable-search,
        .product-table .dataTable-search .dataTable-input {
            width: 100%;
        }
    }
</style>

<?php include '../../footer-main.php'; ?>
