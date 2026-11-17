<?php 
include('header.php')
?>

        <style>
            /* پرسپکتیو ۳D */
        .perspective-1000 {
            perspective: 1000px;
        }

        /* ترنزیشن‌های اضافی */
        .duration-800 {
            transition-duration: 800ms;
        }
        .delay-200 {
            transition-delay: 200ms;
        }
        </style>
        <!-- استایل‌های اضافی برای انیمیشن -->
        <style>
        @keyframes spin-slow {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        .animate-spin-slow {
            animation: spin-slow 8s linear infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 0.2; }
            50% { opacity: 0.4; }
        }
        .animate-pulse {
            animation: pulse 2s ease-in-out infinite;
        }
        </style>

        <!-- <div id="about" class='hidden relative w-11/12 lg:flex lg:flex-row flex-col mx-auto mb-15 mt-10'>

            <div class='flex flex-col gap-10 w-full lg:w-1/2 relative'>
            
            <div class='absolute -top-5 right-0 w-20 h-[2px] bg-gradient-to-l from-[var(--color-primary-3rd)] to-transparent'></div>

            <div class='w-full flex flex-col gap-4'>
                
                <div class='flex items-center gap-3'>
                    <span class='w-8 h-[2px] bg-[var(--color-primary-3rd)]'></span>
                    <span class='text-[var(--color-primary-3rd)] font-bold text-sm tracking-[3px] uppercase'>
                        درباره من
                    </span>
                    <span class='w-8 h-[2px] bg-[var(--color-primary-3rd)]/30'></span>
                </div>
                
                <h2 class='text-[var(--color-heading)] text-[4.5vw] md:text-[3.5vw] lg:text-[2.2vw] font-bold leading-[1.3]'>
                   توسعه‌دهنده بک‌اند و متخصص لاراول
                    <br>
                    <span class='text-[var(--color-primary-3rd)] relative inline-block'>
                        یک بک‌اند قوی
                        <svg class='absolute -bottom-1 left-0 w-full h-1 fill-[var(--color-primary-3rd)]/20' viewBox="0 0 200 4">
                            <path d="M0 2 Q50 0 100 2 Q150 4 200 2" stroke="var(--color-primary-3rd)" stroke-width="2" fill="none" opacity="0.3"/>
                        </svg>
                    </span>
                    قرار دارد
                </h2>
                
                <p class='text-[var(--color-gray)] text-sm md:text-base leading-[1.9] max-w-xl'>
                    من به عنوان یک توسعه‌دهنده بک‌اند، بر طراحی و پیاده‌سازی 
                    <span class='text-[var(--color-white)] font-medium'>APIهای قدرتمند</span>، 
                    <span class='text-[var(--color-white)] font-medium'>معماری دیتابیس</span> و 
                    <span class='text-[var(--color-white)] font-medium'>منطق سمت سرور</span> 
                    تمرکز دارم تا زیرساخت‌های مطمئن و کارآمدی برای کسب‌وکارها فراهم کنم.
                </p>
            </div>

            <div class='grid grid-cols-1 sm:grid-cols-2 gap-4 w-full'>
                
                <div class='group relative bg-inherit rounded-2xl p-6 transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl hover:shadow-[var(--color-primary-3rd)]/5 border border-[var(--color-border)] hover:border-[var(--color-primary-3rd)]/30 overflow-hidden'>
                    
                    <div class='absolute inset-0 bg-gradient-to-br from-[var(--color-primary-3rd)]/5 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-700'></div>
                    <div class='absolute -right-10 -top-10 w-32 h-32 rounded-full bg-[var(--color-primary-3rd)]/5 blur-2xl group-hover:scale-150 transition-all duration-1000'></div>
                    
                    <div class='relative w-14 h-14 rounded-2xl bg-gradient-to-br from-[var(--color-primary-3rd)]/20 to-[var(--color-primary-3rd)]/5 flex items-center justify-center mb-4 group-hover:scale-110 transition-all duration-500 border border-[var(--color-primary-3rd)]/10 group-hover:border-[var(--color-primary-3rd)]/30'>
                        <svg class='w-7 fill-[var(--color-primary-3rd)]' viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_2_5820)">
                                <path d="M9.55221 23.3711C9.44111 23.3711 9.33455 23.327 9.25593 23.2484L3.03913 17.0314C2.87548 16.8678 2.87548 16.6025 3.03913 16.4389L15.745 3.73325C15.8236 3.65465 15.9301 3.61053 16.0412 3.61053H20.2377C20.4691 3.61053 20.6566 3.79809 20.6566 4.02951V8.61441C20.6566 8.72552 20.6125 8.83212 20.534 8.91067L10.8201 18.6246C10.6564 18.7882 10.3912 18.7882 10.2275 18.6246C10.0639 18.4609 10.0639 18.1957 10.2275 18.0321L19.8187 8.44088V4.44848H16.2148L3.92788 16.7351L9.55221 22.3596L23.0826 8.82943V1.46685H14.457C13.8224 2.07536 10.8093 4.96356 7.80056 7.83377C0.93904 14.3793 0.794266 14.4518 0.688466 14.5046C0.481546 14.6081 0.229853 14.5243 0.126346 14.3174C0.0293863 14.1234 0.0969463 13.8901 0.276213 13.7764C0.795546 13.3746 8.75208 5.77781 13.9986 0.74552C14.0766 0.670706 14.1805 0.628906 14.2886 0.628906H23.5015C23.7329 0.628906 23.9205 0.81648 23.9205 1.04789V9.00301C23.9205 9.11408 23.8763 9.22068 23.7978 9.29924L9.84845 23.2484C9.76988 23.327 9.66333 23.3711 9.55221 23.3711Z" fill="white"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_2_5820">
                                    <rect width="24" height="24" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>

                    <div class='absolute top-4 right-4 text-5xl font-bold text-[var(--color-primary-3rd)]/5 select-none'>
                        ۰۱
                    </div>

                    <h3 class='text-base font-bold text-[var(--color-white)] mb-2 group-hover:text-[var(--color-primary-3rd)] transition-all duration-300'>
                        معماری مقیاس‌پذیر
                    </h3>

                    <p class='text-[var(--color-gray)] text-xs leading-relaxed'>
                        طراحی سیستم‌هایی که با رشد کسب‌وکار شما، بدون افت عملکرد، توسعه پیدا کنند.
                    </p>

                    <div class='absolute bottom-0 left-0 right-0 h-[2px] bg-gradient-to-r from-[var(--color-primary-3rd)]/0 via-[var(--color-primary-3rd)]/20 to-[var(--color-primary-3rd)]/0 scale-x-0 group-hover:scale-x-100 transition-all duration-700'></div>
                </div>

                <div class='group relative bg-inherit rounded-2xl p-6 transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl hover:shadow-[var(--color-primary-3rd)]/5 border border-[var(--color-border)] hover:border-[var(--color-primary-3rd)]/30 overflow-hidden'>
                    
                    <div class='absolute inset-0 bg-gradient-to-br from-[var(--color-primary-3rd)]/5 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-700'></div>
                    <div class='absolute -right-10 -top-10 w-32 h-32 rounded-full bg-[var(--color-primary-3rd)]/5 blur-2xl group-hover:scale-150 transition-all duration-1000'></div>
                    
                    <div class='relative w-14 h-14 rounded-2xl bg-gradient-to-br from-[var(--color-primary-3rd)]/20 to-[var(--color-primary-3rd)]/5 flex items-center justify-center mb-4 group-hover:scale-110 transition-all duration-500 border border-[var(--color-primary-3rd)]/10 group-hover:border-[var(--color-primary-3rd)]/30'>
                        <svg class='w-7 fill-[var(--color-primary-3rd)]' viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_2_5831)">
                                <path d="M23.5877 5.21054C23.3425 4.03692 22.9949 2.87579 22.5459 1.73311C22.5207 1.66894 22.4966 1.60451 22.4707 1.54038C22.2059 0.902525 21.6232 0.457031 21.0537 0.457031C20.9472 0.457031 20.8435 0.472978 20.7476 0.503578C19.6197 0.856791 18.4951 1.28494 17.4074 1.69899C15.0261 2.60567 12.5637 3.54312 10.0022 3.70438C9.70858 3.72343 9.44644 3.81962 9.24194 3.96768C9.06978 3.82982 8.85454 3.74683 8.62055 3.74683H3.38811C2.82668 3.74683 2.36995 4.21975 2.36995 4.80104V6.65607C2.303 6.64252 2.23384 6.6352 2.16298 6.6352H1.15271C0.575282 6.6352 0.105469 7.10812 0.105469 7.68942V11.1767C0.105469 11.758 0.575282 12.2309 1.15271 12.2309H2.16296C2.23383 12.2309 2.30299 12.2236 2.36994 12.21V14.0652C2.36994 14.6465 2.82667 15.1194 3.3881 15.1194H4.63083L9.01498 22.7219C9.30788 23.23 9.85442 23.5455 10.4413 23.5455C10.7283 23.5455 11.0121 23.4695 11.262 23.3254C12.0476 22.8722 12.3183 21.8642 11.8653 21.0784L8.42871 15.1194H8.62056C8.85468 15.1194 9.06991 15.0363 9.24214 14.8983C9.44671 15.0464 9.70907 15.1426 10.003 15.1618C12.5635 15.3229 15.0258 16.2604 17.4069 17.167C18.4947 17.5812 19.6195 18.0094 20.7456 18.362C20.8435 18.3932 20.9472 18.409 21.0536 18.409C21.623 18.409 22.2057 17.9636 22.4722 17.3219C22.4977 17.2589 22.5214 17.1956 22.5462 17.1324C22.9948 15.9915 23.3422 14.8312 23.5872 13.6581C23.7891 12.3866 23.8972 10.9394 23.8972 9.43302C23.8972 7.92764 23.7892 6.4814 23.5877 5.21054ZM2.16298 11.3906H1.15271C1.03864 11.3906 0.945789 11.2947 0.945789 11.1767V7.68942C0.945789 7.57148 1.03864 7.47552 1.15271 7.47552H2.16296C2.27708 7.47552 2.36994 7.57148 2.36994 7.68942V11.1767C2.36994 11.2947 2.2771 11.3906 2.16298 11.3906ZM11.1373 21.4982C11.3589 21.8826 11.2265 22.3757 10.8422 22.5974C10.7198 22.6679 10.5812 22.7052 10.4413 22.7052C10.1539 22.7052 9.88632 22.5508 9.74295 22.3022L5.6009 15.1194H7.45868L11.1373 21.4982ZM8.62055 14.2791H7.94406H6.97402H5.1163H4.14626H3.38811C3.2917 14.2791 3.21027 14.1811 3.21027 14.0652V11.1767V7.68942V4.80104C3.21027 4.68311 3.29004 4.58715 3.38811 4.58715H8.62056C8.71875 4.58715 8.79859 4.6831 8.79859 4.80104V14.0652C8.79858 14.1831 8.71874 14.2791 8.62055 14.2791ZM17.7059 16.3817C15.2662 15.4528 12.7434 14.4923 10.0567 14.3232C9.8055 14.3068 9.63891 14.1678 9.63891 14.0828V14.0652V4.80104V4.78328C9.63891 4.6984 9.80543 4.55926 10.0558 4.54302C12.7436 4.37379 15.2666 3.4133 17.7064 2.48435C18.4542 2.19971 19.2197 1.90886 19.9883 1.64127C19.7103 2.08827 19.4642 2.70451 19.2516 3.48856C19.0497 4.23287 18.8909 5.09126 18.7782 6.02203C18.744 6.30398 18.7141 6.59231 18.6887 6.88662C18.6184 7.70039 18.5815 8.55654 18.5815 9.43303C18.5815 10.3096 18.6184 11.1658 18.6887 11.9796C18.7141 12.2739 18.7441 12.5623 18.7782 12.8442C18.8909 13.7749 19.0497 14.6332 19.2516 15.3776C19.4642 16.1617 19.7104 16.778 19.9884 17.225C19.22 16.9576 18.4541 16.6666 17.7059 16.3817ZM19.4218 9.43302C19.4218 8.57763 19.4578 7.74399 19.526 6.9536C20.304 7.26731 20.874 8.25968 20.874 9.43307C20.874 10.6064 20.304 11.5988 19.5261 11.9125C19.4578 11.1222 19.4218 10.2885 19.4218 9.43302ZM22.7524 13.5616C22.6599 14.137 22.5475 14.6733 22.4161 15.1577C22.2116 15.9118 21.9942 16.4142 21.7979 16.7389C21.5605 17.1316 21.354 17.2642 21.2394 17.2642C21.0299 17.2642 20.5145 16.8239 20.0626 15.1577C19.8725 14.4568 19.7223 13.6474 19.6149 12.7675C20.8162 12.4156 21.7143 11.0547 21.7143 9.43307C21.7143 7.81146 20.8161 6.45056 19.6149 6.09874C19.7223 5.21878 19.8725 4.4093 20.0626 3.70848C20.5145 2.04214 21.03 1.60192 21.2394 1.60192C21.354 1.60192 21.5603 1.7344 21.7976 2.1269C21.994 2.45158 22.2116 2.95403 22.4161 3.70848C22.5479 4.19452 22.6606 4.73286 22.7533 5.31046C23.3388 8.04646 23.3384 10.8269 22.7524 13.5616Z" fill="white"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_2_5831">
                                    <rect width="24" height="24" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>

                    <div class='absolute top-4 right-4 text-5xl font-bold text-[var(--color-primary-3rd)]/5 select-none'>
                        ۰۲
                    </div>

                    <h3 class='text-base font-bold text-[var(--color-white)] mb-2 group-hover:text-[var(--color-primary-3rd)] transition-all duration-300'>
                        امنیت و عملکرد
                    </h3>

                    <p class='text-[var(--color-gray)] text-xs leading-relaxed'>
                        پیاده‌سازی لایه‌های امنیتی و بهینه‌سازی کوئری‌ها برای پاسخ‌دهی سریع و حفاظت از داده‌ها.
                    </p>

                    <div class='absolute bottom-0 left-0 right-0 h-[2px] bg-gradient-to-r from-[var(--color-primary-3rd)]/0 via-[var(--color-primary-3rd)]/20 to-[var(--color-primary-3rd)]/0 scale-x-0 group-hover:scale-x-100 transition-all duration-700'></div>
                </div>

            </div>

            <div class='group relative w-55 bg-[var(--color-primary-3rd)] flex items-center text-center justify-center lg:py-5 py-3 px-4 rounded-full cursor-pointer'>
                <svg class='absolute right-0 w-4 fill-[var(--color-white)] duration-500 group-hover:-translate-x-5 group-hover:opacity-100 opacity-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z"/></svg>
                <span class='text-sm text-[var(--color-white)] transition-all duration-400 translate-x-2 group-hover:-translate-x-5 font-bold'> درباره من بیشتر بدانید </span>
                <svg class='absolute left-2 w-4 fill-[var(--color-white)] transition-all duration-200 group-hover:-translate-x-4 group-hover:opacity-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z"/></svg>
            </div>

        </div> -->
        <div id="about" class='hidden relative w-11/12 lg:flex lg:flex-row flex-col mx-auto mb-15 my-10 '>

            <div class='flex flex-col gap-10 w-full lg:w-1/2 relative'>
            
            <div class='absolute -top-5 right-0 w-20 h-[2px] bg-gradient-to-l from-[var(--color-primary-3rd)] to-transparent'></div>

            <div class='w-full flex flex-col gap-4'>
                
                <div class='flex items-center gap-3'>
                    <span class='w-8 h-[2px] bg-[var(--color-primary-3rd)]'></span>
                    <span class='text-[var(--color-primary-3rd)] font-bold text-sm tracking-[3px] uppercase'>
                        درباره من
                    </span>
                    <span class='w-8 h-[2px] bg-[var(--color-primary-3rd)]/30'></span>
                </div>
                
                <h2 class='text-[var(--color-heading)] text-[4.5vw] md:text-[3.5vw] lg:text-[2.2vw] font-bold leading-[1.3]'>
                    توسعه‌دهنده بک‌اند و متخصص لاراول
                    <br>
                    <span class='text-[var(--color-primary-3rd)] relative inline-block'>
                        با تمرکز روی کد تمیز
                        <svg class='absolute -bottom-1 left-0 w-full h-1 fill-[var(--color-primary-3rd)]/20' viewBox="0 0 200 4">
                            <path d="M0 2 Q50 0 100 2 Q150 4 200 2" stroke="var(--color-primary-3rd)" stroke-width="2" fill="none" opacity="0.3"/>
                        </svg>
                    </span>
                    و معماری اصولی
                </h2>
                
                <p class='text-[var(--color-gray)] text-sm md:text-base leading-[1.9] max-w-xl'>
                    <!-- من یه برنامه‌نویس بک‌اندم که با LARAVEL و PHP کار می‌کنم. تمرکزم روی منطق سمت سرور و پایگاه داده‌ست. چون فرانت‌اند رو هم با TAILWIND CSS و HTML بلدم، کل پروژه رو از صفر تا صد خودم هندل می‌کنم. معمولاً به صورت تیمی کار می‌کنم و هماهنگی با بقیه اعضای تیم برام خیلی مهمه. -->
                     من یه برنامه‌نویس بک‌اند کارم که با PHP , LARAVEL کار می‌کنم. فرانت‌اند رو هم با TAILWIND , CSS , JS  و بلدم . ارائه خدمات و پروژه به صورت تیمی ، با کیفیت ، سریع و مقرون به‌صرفه می‌باشد
.                </p>

            </div>

            <div class='grid grid-cols-1 sm:grid-cols-2 gap-4 w-full'>
                
                <div class='group relative bg-inherit rounded-2xl p-6 transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl hover:shadow-[var(--color-primary-3rd)]/5 border border-[var(--color-border)] hover:border-[var(--color-primary-3rd)]/30 overflow-hidden'>
                    
                    <div class='absolute inset-0 bg-gradient-to-br from-[var(--color-primary-3rd)]/5 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-700'></div>
                    <div class='absolute -right-10 -top-10 w-32 h-32 rounded-full bg-[var(--color-primary-3rd)]/5 blur-2xl group-hover:scale-150 transition-all duration-1000'></div>
                    
                    <div class='relative w-14 h-14 rounded-2xl bg-gradient-to-br from-[var(--color-primary-3rd)]/20 to-[var(--color-primary-3rd)]/5 flex items-center justify-center mb-4 group-hover:scale-110 transition-all duration-500 border border-[var(--color-primary-3rd)]/10 group-hover:border-[var(--color-primary-3rd)]/30'>
                        <svg class='w-7 fill-[var(--color-primary-3rd)]' viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_2_5820)">
                                <path d="M9.55221 23.3711C9.44111 23.3711 9.33455 23.327 9.25593 23.2484L3.03913 17.0314C2.87548 16.8678 2.87548 16.6025 3.03913 16.4389L15.745 3.73325C15.8236 3.65465 15.9301 3.61053 16.0412 3.61053H20.2377C20.4691 3.61053 20.6566 3.79809 20.6566 4.02951V8.61441C20.6566 8.72552 20.6125 8.83212 20.534 8.91067L10.8201 18.6246C10.6564 18.7882 10.3912 18.7882 10.2275 18.6246C10.0639 18.4609 10.0639 18.1957 10.2275 18.0321L19.8187 8.44088V4.44848H16.2148L3.92788 16.7351L9.55221 22.3596L23.0826 8.82943V1.46685H14.457C13.8224 2.07536 10.8093 4.96356 7.80056 7.83377C0.93904 14.3793 0.794266 14.4518 0.688466 14.5046C0.481546 14.6081 0.229853 14.5243 0.126346 14.3174C0.0293863 14.1234 0.0969463 13.8901 0.276213 13.7764C0.795546 13.3746 8.75208 5.77781 13.9986 0.74552C14.0766 0.670706 14.1805 0.628906 14.2886 0.628906H23.5015C23.7329 0.628906 23.9205 0.81648 23.9205 1.04789V9.00301C23.9205 9.11408 23.8763 9.22068 23.7978 9.29924L9.84845 23.2484C9.76988 23.327 9.66333 23.3711 9.55221 23.3711Z" fill="white"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_2_5820">
                                    <rect width="24" height="24" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>

                    <div class='absolute top-4 right-4 text-5xl font-bold text-[var(--color-primary-3rd)]/5 select-none'>
                        ۰۱
                    </div>

                    <h3 class='text-base font-bold text-[var(--color-white)] mb-2 group-hover:text-[var(--color-primary-3rd)] transition-all duration-300'>
                        کد تمیز و قابل توسعه
                    </h3>

                    <p class='text-[var(--color-gray)] text-xs leading-relaxed'>
                        کدی می‌نویسم که بعداً خودم یا بقیه راحت باهاش کار کنن. ساختار پروژه رو طوری می‌چینم که با بزرگ شدن کسب‌وکار، سیستم از هم نپاشه و تیم بتونه راحت روش کار کنه.
                    </p>

                    <div class='absolute bottom-0 left-0 right-0 h-[2px] bg-gradient-to-r from-[var(--color-primary-3rd)]/0 via-[var(--color-primary-3rd)]/20 to-[var(--color-primary-3rd)]/0 scale-x-0 group-hover:scale-x-100 transition-all duration-700'></div>
                </div>

                <div class='group relative bg-inherit rounded-2xl p-6 transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl hover:shadow-[var(--color-primary-3rd)]/5 border border-[var(--color-border)] hover:border-[var(--color-primary-3rd)]/30 overflow-hidden'>
                    
                    <div class='absolute inset-0 bg-gradient-to-br from-[var(--color-primary-3rd)]/5 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-700'></div>
                    <div class='absolute -right-10 -top-10 w-32 h-32 rounded-full bg-[var(--color-primary-3rd)]/5 blur-2xl group-hover:scale-150 transition-all duration-1000'></div>
                    
                    <div class='relative w-14 h-14 rounded-2xl bg-gradient-to-br from-[var(--color-primary-3rd)]/20 to-[var(--color-primary-3rd)]/5 flex items-center justify-center mb-4 group-hover:scale-110 transition-all duration-500 border border-[var(--color-primary-3rd)]/10 group-hover:border-[var(--color-primary-3rd)]/30'>
                        <svg class='w-7 fill-[var(--color-primary-3rd)]' viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_2_5831)">
                                <path d="M23.5877 5.21054C23.3425 4.03692 22.9949 2.87579 22.5459 1.73311C22.5207 1.66894 22.4966 1.60451 22.4707 1.54038C22.2059 0.902525 21.6232 0.457031 21.0537 0.457031C20.9472 0.457031 20.8435 0.472978 20.7476 0.503578C19.6197 0.856791 18.4951 1.28494 17.4074 1.69899C15.0261 2.60567 12.5637 3.54312 10.0022 3.70438C9.70858 3.72343 9.44644 3.81962 9.24194 3.96768C9.06978 3.82982 8.85454 3.74683 8.62055 3.74683H3.38811C2.82668 3.74683 2.36995 4.21975 2.36995 4.80104V6.65607C2.303 6.64252 2.23384 6.6352 2.16298 6.6352H1.15271C0.575282 6.6352 0.105469 7.10812 0.105469 7.68942V11.1767C0.105469 11.758 0.575282 12.2309 1.15271 12.2309H2.16296C2.23383 12.2309 2.30299 12.2236 2.36994 12.21V14.0652C2.36994 14.6465 2.82667 15.1194 3.3881 15.1194H4.63083L9.01498 22.7219C9.30788 23.23 9.85442 23.5455 10.4413 23.5455C10.7283 23.5455 11.0121 23.4695 11.262 23.3254C12.0476 22.8722 12.3183 21.8642 11.8653 21.0784L8.42871 15.1194H8.62056C8.85468 15.1194 9.06991 15.0363 9.24214 14.8983C9.44671 15.0464 9.70907 15.1426 10.003 15.1618C12.5635 15.3229 15.0258 16.2604 17.4069 17.167C18.4947 17.5812 19.6195 18.0094 20.7456 18.362C20.8435 18.3932 20.9472 18.409 21.0536 18.409C21.623 18.409 22.2057 17.9636 22.4722 17.3219C22.4977 17.2589 22.5214 17.1956 22.5462 17.1324C22.9948 15.9915 23.3422 14.8312 23.5872 13.6581C23.7891 12.3866 23.8972 10.9394 23.8972 9.43302C23.8972 7.92764 23.7892 6.4814 23.5877 5.21054ZM2.16298 11.3906H1.15271C1.03864 11.3906 0.945789 11.2947 0.945789 11.1767V7.68942C0.945789 7.57148 1.03864 7.47552 1.15271 7.47552H2.16296C2.27708 7.47552 2.36994 7.57148 2.36994 7.68942V11.1767C2.36994 11.2947 2.2771 11.3906 2.16298 11.3906ZM11.1373 21.4982C11.3589 21.8826 11.2265 22.3757 10.8422 22.5974C10.7198 22.6679 10.5812 22.7052 10.4413 22.7052C10.1539 22.7052 9.88632 22.5508 9.74295 22.3022L5.6009 15.1194H7.45868L11.1373 21.4982ZM8.62055 14.2791H7.94406H6.97402H5.1163H4.14626H3.38811C3.2917 14.2791 3.21027 14.1811 3.21027 14.0652V11.1767V7.68942V4.80104C3.21027 4.68311 3.29004 4.58715 3.38811 4.58715H8.62056C8.71875 4.58715 8.79859 4.6831 8.79859 4.80104V14.0652C8.79858 14.1831 8.71874 14.2791 8.62055 14.2791ZM17.7059 16.3817C15.2662 15.4528 12.7434 14.4923 10.0567 14.3232C9.8055 14.3068 9.63891 14.1678 9.63891 14.0828V14.0652V4.80104V4.78328C9.63891 4.6984 9.80543 4.55926 10.0558 4.54302C12.7436 4.37379 15.2666 3.4133 17.7064 2.48435C18.4542 2.19971 19.2197 1.90886 19.9883 1.64127C19.7103 2.08827 19.4642 2.70451 19.2516 3.48856C19.0497 4.23287 18.8909 5.09126 18.7782 6.02203C18.744 6.30398 18.7141 6.59231 18.6887 6.88662C18.6184 7.70039 18.5815 8.55654 18.5815 9.43303C18.5815 10.3096 18.6184 11.1658 18.6887 11.9796C18.7141 12.2739 18.7441 12.5623 18.7782 12.8442C18.8909 13.7749 19.0497 14.6332 19.2516 15.3776C19.4642 16.1617 19.7104 16.778 19.9884 17.225C19.22 16.9576 18.4541 16.6666 17.7059 16.3817ZM19.4218 9.43302C19.4218 8.57763 19.4578 7.74399 19.526 6.9536C20.304 7.26731 20.874 8.25968 20.874 9.43307C20.874 10.6064 20.304 11.5988 19.5261 11.9125C19.4578 11.1222 19.4218 10.2885 19.4218 9.43302ZM22.7524 13.5616C22.6599 14.137 22.5475 14.6733 22.4161 15.1577C22.2116 15.9118 21.9942 16.4142 21.7979 16.7389C21.5605 17.1316 21.354 17.2642 21.2394 17.2642C21.0299 17.2642 20.5145 16.8239 20.0626 15.1577C19.8725 14.4568 19.7223 13.6474 19.6149 12.7675C20.8162 12.4156 21.7143 11.0547 21.7143 9.43307C21.7143 7.81146 20.8161 6.45056 19.6149 6.09874C19.7223 5.21878 19.8725 4.4093 20.0626 3.70848C20.5145 2.04214 21.03 1.60192 21.2394 1.60192C21.354 1.60192 21.5603 1.7344 21.7976 2.1269C21.994 2.45158 22.2116 2.95403 22.4161 3.70848C22.5479 4.19452 22.6606 4.73286 22.7533 5.31046C23.3388 8.04646 23.3384 10.8269 22.7524 13.5616Z" fill="white"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_2_5831">
                                    <rect width="24" height="24" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>

                    <div class='absolute top-4 right-4 text-5xl font-bold text-[var(--color-primary-3rd)]/5 select-none'>
                        ۰۲
                    </div>

                    <h3 class='text-base font-bold text-[var(--color-white)] mb-2 group-hover:text-[var(--color-primary-3rd)] transition-all duration-300'>
                        <!-- تسلط به بک‌اند و فرانت‌اند -->
                         مشاوره کسب و کار آنلاین
                    </h3>

                    <p class='text-[var(--color-gray)] text-xs leading-relaxed'>
                        <!-- تخصص اصلیم سمت سرور و کار با لاراوله. فرانت‌اند رو هم با تیلویند و اچ‌تی‌ام‌ال می‌بندم تا خروجی دقیقاً همون چیزی باشه که مدنظره. توی تیم هم هماهنگی و تحویل کار سر وقت برام اولویته. -->
                        یکی دیگه از مهارت های اصلیم مشاوره کسب و کار و سافت اسکیله.
                    </p>

                    <div class='absolute bottom-0 left-0 right-0 h-[2px] bg-gradient-to-r from-[var(--color-primary-3rd)]/0 via-[var(--color-primary-3rd)]/20 to-[var(--color-primary-3rd)]/0 scale-x-0 group-hover:scale-x-100 transition-all duration-700'></div>
                </div>

            </div>

            <!-- <div class='group relative w-55 bg-[var(--color-primary-3rd)] flex items-center text-center justify-center lg:py-5 py-3 px-4 rounded-full cursor-pointer'>
                <svg class='absolute right-0 w-4 fill-[var(--color-white)] duration-500 group-hover:-translate-x-5 group-hover:opacity-100 opacity-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z"/></svg>
                <span class='text-sm text-[var(--color-white)] transition-all duration-400 translate-x-2 group-hover:-translate-x-5 font-bold'> درباره من بیشتر بدانید </span>
                <svg class='absolute left-2 w-4 fill-[var(--color-white)] transition-all duration-200 group-hover:-translate-x-4 group-hover:opacity-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z"/></svg>
            </div> -->

        </div>

        <div class='relative flex flex-col gap-5 w-1/2 mr-40 '>
            
            <div class='absolute size-100 rounded-full bg-[var(--color-primary-3rd)] -left-0  bottom-0 opacity-80 -z-1 blur-xs' style="background: linear-gradient(180deg, #FF014F 36%, rgba(0, 0, 0, 1) 83%);"></div>
            <div class='relative w-9/12 rounded-xl flex flex-col gap-3 text-center items-center justify-evenly backdrop-blur-3xl py-20 px-8 border-[0.5px] border-[#ffffff0d] bg-[var(--color-black)]' style="box-shadow:15px 26.023px 50px 0px rgba(253, 196, 72,0.04)">
                <span class='max-w-1/2 justify-start text-4xl lg:text-8xl font-bold text-[var(--color-white)] flex items-center text-center gap-2'> 3  <span class='text-5xl'>+</span> </span>
                <span class='max-w-1/2 justify-start text-2xl lg:text-3xl font-bold text-[var(--color-white)]'> سال  تجربه </span>
            </div>

            <div class='w-9/12 flex gap-9 py-5 px-4  justify-center items-center rounded-xl backdrop-blur-3xl border-[0.5px] border-[#ffffff0d] bg-[var(--color-black)]' style='box-shadow:15px 26.023px 50px 0px rgba(253, 196, 72,0.04);'>
                <div class='size-30 flex justify-center items-center rounded-full border-4 border-[var(--color-border)] p-2 ml-5'>
                    <svg class='w-full opacity-70' viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="style=fill"><g id="web"><g id="Vector"><path d="M15.3222 10.383C15.3796 10.9457 15.4125 11.4903 15.4125 12C15.4125 12.9541 15.2972 14.0315 15.1208 15.1208C14.0315 15.2972 12.9541 15.4125 12 15.4125C11.0502 15.4125 9.97313 15.2975 8.87911 15.1205C8.70281 14.0312 8.5875 12.954 8.5875 12C8.5875 11.4905 8.62039 10.9458 8.67789 10.383C9.82608 10.5668 10.9715 10.6875 12 10.6875C13.0286 10.6875 14.174 10.5668 15.3222 10.383Z" fill="var(--color-primary-3rd)"/><path d="M16.8752 10.0994C16.9462 10.7579 16.9875 11.399 16.9875 12C16.9875 12.8769 16.8997 13.8389 16.7599 14.8153C18.7425 14.4016 20.575 13.8731 21.5567 13.5722C21.8739 13.475 21.9986 13.4363 22.1658 13.3694C22.2494 13.336 22.326 13.302 22.4259 13.2543C22.4748 12.843 22.5 12.4244 22.5 12C22.5 10.878 22.324 9.79714 21.9982 8.78346L21.9133 8.81017C20.8868 9.12245 18.9652 9.6745 16.8752 10.0994Z" fill="var(--color-primary-3rd)"/><path d="M21.4017 7.31948C20.3698 7.63221 18.579 8.14039 16.6599 8.53603C16.2178 5.84926 15.443 3.16951 15.0702 1.95598C17.8422 2.80227 20.1273 4.76467 21.4017 7.31948Z" fill="var(--color-primary-3rd)"/><path d="M15.1117 8.82229C14.0253 8.99781 12.9513 9.1125 12 9.1125C11.0487 9.1125 9.97477 8.99781 8.88843 8.8223C9.30471 6.28005 10.0478 3.68306 10.4278 2.44333C10.525 2.12606 10.5637 2.00144 10.6306 1.83418C10.664 1.75062 10.698 1.67398 10.7457 1.57414C11.157 1.52518 11.5756 1.5 12 1.5C12.4434 1.5 12.8803 1.52748 13.3093 1.58083C13.3184 1.61564 13.3268 1.64679 13.3351 1.67626C13.3597 1.76333 13.3982 1.8857 13.4628 2.09104L13.4696 2.11261C13.7935 3.14223 14.6519 6.01401 15.1117 8.82229Z" fill="var(--color-primary-3rd)"/><path d="M7.34004 8.536C7.7801 5.86107 8.54986 3.19576 8.92192 1.98181L8.92983 1.95597C6.15777 2.80225 3.8727 4.76465 2.59835 7.31946C3.63018 7.63219 5.42095 8.14036 7.34004 8.536Z" fill="var(--color-primary-3rd)"/><path d="M2.00184 8.78345C1.67598 9.79714 1.5 10.878 1.5 12C1.5 12.4389 1.52693 12.8715 1.57923 13.2963L1.74471 13.3515L1.74603 13.3519L1.74765 13.3525L1.74879 13.3528C1.80205 13.3705 3.36305 13.886 5.41878 14.3975C5.99886 14.5418 6.61307 14.6844 7.24006 14.8151C7.10025 13.8388 7.0125 12.8769 7.0125 12C7.0125 11.3988 7.05374 10.7577 7.12472 10.0994C5.03428 9.67436 3.11218 9.12212 2.08597 8.80989L2.07883 8.80771L2.00184 8.78345Z" fill="var(--color-primary-3rd)"/><path d="M12 16.9875C12.8769 16.9875 13.8389 16.8997 14.8153 16.7599C14.4016 18.7425 13.8731 20.575 13.5722 21.5566C13.475 21.8739 13.4363 21.9985 13.3694 22.1658C13.336 22.2494 13.302 22.326 13.2543 22.4259C12.843 22.4748 12.4244 22.5 12 22.5C11.5756 22.5 11.157 22.4748 10.7457 22.4259C10.698 22.326 10.664 22.2494 10.6306 22.1658C10.5637 21.9986 10.525 21.8739 10.4278 21.5567C10.1269 20.5751 9.59846 18.7427 9.18478 16.7603C10.1579 16.8996 11.1201 16.9875 12 16.9875Z" fill="var(--color-primary-3rd)"/><path d="M5.0385 15.9259C3.73853 15.6024 2.63135 15.2775 1.95597 15.0702C2.97258 18.4002 5.59982 21.0274 8.92983 22.044L8.92192 22.0182C8.59705 20.9582 7.96897 18.7917 7.52191 16.4784C6.6525 16.3103 5.80722 16.1171 5.0385 15.9259Z" fill="var(--color-primary-3rd)"/><path d="M22.0182 15.0781C20.9582 15.403 18.7915 16.0311 16.4781 16.4781C16.0311 18.7915 15.403 20.9581 15.0781 22.0182L15.0702 22.044C18.4002 21.0274 21.0274 18.4002 22.044 15.0702L22.0182 15.0781Z" fill="var(--color-primary-3rd)"/><path d="M1.6103 13.323C1.64665 13.3277 1.67628 13.3327 1.68611 13.3349C1.69472 13.337 1.70821 13.3406 1.7131 13.3419L1.72391 13.345L1.72973 13.3468L1.73585 13.3487L1.74098 13.3503C1.7381 13.3494 1.67976 13.3348 1.6103 13.323Z" fill="var(--color-primary-3rd)"/></g></g></g></svg>
                </div>
                <div class='flex flex-col gap-4 text-center items-center'>
                    <span class='text-[var(--color-white)] text-md lg:text-xl font-bold'>توسعه‌دهنده بک‌اند</span>
                    <span class='text-[var(--color-heading)] text-sm '> 5+ پروژه </span>
                </div>
            </div>
        </div>



        </div>


        <div class='lg:hidden relative w-11/12 flex flex-col gap-4 mx-auto mb-15 '>

            <div class='absolute size-70 rounded-full -left-5 sm:left-10 top-30 opacity-80 -z-1 blur-xs' style="background: linear-gradient(180deg, #FF014F 36%, rgba(0, 0, 0, 1) 83%);"></div>
            <div class='w-full md:w-8/12 mx-auto rounded-xl flex flex-col gap-3 text-center items-center justify-evenly bg-inherit backdrop-blur-3xl py-10 px-8 border-[0.5px] border-[#ffffff0d]' style="box-shadow:15px 26.023px 50px 0px rgba(253, 196, 72,0.04)">
                <span class='text-5xl sm:text-5xl font-bold text-[var(--color-white)] flex gap-2 text-center items-center'> 3 <span class='text-3xl'>+</span> </span>
                <span class='text-xl sm:text-2xl font-bold text-[var(--color-white)]'> سال  تجربه </span>
            </div>

            <div class='w-full md:w-8/12 mx-auto flex gap-9 py-5 px-4  justify-center items-center rounded-xl backdrop-blur-[35px] border-1 border-gray-900 bg-[var(--color-black)]'style='box-shadow: 15px 26.023px 50px 0px rgba(253, 196, 72, 0.04);'>
                <div class='flex flex-col gap-4 text-center items-center'>
                    <span class='text-[var(--color-white)] text-xl sm:text-2xl md:text-xl font-bold'>توسعه‌دهنده بک‌اند</span>
                    <span class='text-[var(--color-heading)] text-md sm:text-lg md:text-lg '> 5+ پروژه </span>
                </div>
                <div class='size-15 flex justify-center items-center rounded-full border-4 border-[var(--color-border)] p-1 ml-5'>
                    <svg class='w-full opacity-70' viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="style=fill"><g id="web"><g id="Vector"><path d="M15.3222 10.383C15.3796 10.9457 15.4125 11.4903 15.4125 12C15.4125 12.9541 15.2972 14.0315 15.1208 15.1208C14.0315 15.2972 12.9541 15.4125 12 15.4125C11.0502 15.4125 9.97313 15.2975 8.87911 15.1205C8.70281 14.0312 8.5875 12.954 8.5875 12C8.5875 11.4905 8.62039 10.9458 8.67789 10.383C9.82608 10.5668 10.9715 10.6875 12 10.6875C13.0286 10.6875 14.174 10.5668 15.3222 10.383Z" fill="var(--color-primary-3rd)"/><path d="M16.8752 10.0994C16.9462 10.7579 16.9875 11.399 16.9875 12C16.9875 12.8769 16.8997 13.8389 16.7599 14.8153C18.7425 14.4016 20.575 13.8731 21.5567 13.5722C21.8739 13.475 21.9986 13.4363 22.1658 13.3694C22.2494 13.336 22.326 13.302 22.4259 13.2543C22.4748 12.843 22.5 12.4244 22.5 12C22.5 10.878 22.324 9.79714 21.9982 8.78346L21.9133 8.81017C20.8868 9.12245 18.9652 9.6745 16.8752 10.0994Z" fill="var(--color-primary-3rd)"/><path d="M21.4017 7.31948C20.3698 7.63221 18.579 8.14039 16.6599 8.53603C16.2178 5.84926 15.443 3.16951 15.0702 1.95598C17.8422 2.80227 20.1273 4.76467 21.4017 7.31948Z" fill="var(--color-primary-3rd)"/><path d="M15.1117 8.82229C14.0253 8.99781 12.9513 9.1125 12 9.1125C11.0487 9.1125 9.97477 8.99781 8.88843 8.8223C9.30471 6.28005 10.0478 3.68306 10.4278 2.44333C10.525 2.12606 10.5637 2.00144 10.6306 1.83418C10.664 1.75062 10.698 1.67398 10.7457 1.57414C11.157 1.52518 11.5756 1.5 12 1.5C12.4434 1.5 12.8803 1.52748 13.3093 1.58083C13.3184 1.61564 13.3268 1.64679 13.3351 1.67626C13.3597 1.76333 13.3982 1.8857 13.4628 2.09104L13.4696 2.11261C13.7935 3.14223 14.6519 6.01401 15.1117 8.82229Z" fill="var(--color-primary-3rd)"/><path d="M7.34004 8.536C7.7801 5.86107 8.54986 3.19576 8.92192 1.98181L8.92983 1.95597C6.15777 2.80225 3.8727 4.76465 2.59835 7.31946C3.63018 7.63219 5.42095 8.14036 7.34004 8.536Z" fill="var(--color-primary-3rd)"/><path d="M2.00184 8.78345C1.67598 9.79714 1.5 10.878 1.5 12C1.5 12.4389 1.52693 12.8715 1.57923 13.2963L1.74471 13.3515L1.74603 13.3519L1.74765 13.3525L1.74879 13.3528C1.80205 13.3705 3.36305 13.886 5.41878 14.3975C5.99886 14.5418 6.61307 14.6844 7.24006 14.8151C7.10025 13.8388 7.0125 12.8769 7.0125 12C7.0125 11.3988 7.05374 10.7577 7.12472 10.0994C5.03428 9.67436 3.11218 9.12212 2.08597 8.80989L2.07883 8.80771L2.00184 8.78345Z" fill="var(--color-primary-3rd)"/><path d="M12 16.9875C12.8769 16.9875 13.8389 16.8997 14.8153 16.7599C14.4016 18.7425 13.8731 20.575 13.5722 21.5566C13.475 21.8739 13.4363 21.9985 13.3694 22.1658C13.336 22.2494 13.302 22.326 13.2543 22.4259C12.843 22.4748 12.4244 22.5 12 22.5C11.5756 22.5 11.157 22.4748 10.7457 22.4259C10.698 22.326 10.664 22.2494 10.6306 22.1658C10.5637 21.9986 10.525 21.8739 10.4278 21.5567C10.1269 20.5751 9.59846 18.7427 9.18478 16.7603C10.1579 16.8996 11.1201 16.9875 12 16.9875Z" fill="var(--color-primary-3rd)"/><path d="M5.0385 15.9259C3.73853 15.6024 2.63135 15.2775 1.95597 15.0702C2.97258 18.4002 5.59982 21.0274 8.92983 22.044L8.92192 22.0182C8.59705 20.9582 7.96897 18.7917 7.52191 16.4784C6.6525 16.3103 5.80722 16.1171 5.0385 15.9259Z" fill="var(--color-primary-3rd)"/><path d="M22.0182 15.0781C20.9582 15.403 18.7915 16.0311 16.4781 16.4781C16.0311 18.7915 15.403 20.9581 15.0781 22.0182L15.0702 22.044C18.4002 21.0274 21.0274 18.4002 22.044 15.0702L22.0182 15.0781Z" fill="var(--color-primary-3rd)"/><path d="M1.6103 13.323C1.64665 13.3277 1.67628 13.3327 1.68611 13.3349C1.69472 13.337 1.70821 13.3406 1.7131 13.3419L1.72391 13.345L1.72973 13.3468L1.73585 13.3487L1.74098 13.3503C1.7381 13.3494 1.67976 13.3348 1.6103 13.323Z" fill="var(--color-primary-3rd)"/></g></g></g></svg>
                </div>
            </div>


            <div class='w-full flex flex-col gap-6 relative'>
                
                <div class='absolute -top-3 right-0 w-12 h-[2px] bg-gradient-to-l from-[var(--color-primary-3rd)] to-transparent'></div>

                <div class='w-full flex flex-col gap-3'>
                    
                    <div class='flex items-center gap-2'>
                        <span class='w-6 h-[2px] bg-[var(--color-primary-3rd)]'></span>
                        <span class='text-[var(--color-primary-3rd)] font-bold text-xs tracking-[2px] uppercase'>
                            درباره من
                        </span>
                        <span class='w-6 h-[2px] bg-[var(--color-primary-3rd)]/30'></span>
                    </div>
                    
                    <h2 class='text-[var(--color-heading)] text-[5vw] sm:text-[4vw] font-bold leading-[1.3]'>
                        توسعه‌دهنده بک‌اند و متخصص لاراول
                        <br>
                        <span class='text-[var(--color-primary-3rd)] relative inline-block'>
                            با تمرکز روی کد تمیز
                            <svg class='absolute -bottom-1 left-0 w-full h-1 fill-[var(--color-primary-3rd)]/20' viewBox="0 0 200 4">
                                <path d="M0 2 Q50 0 100 2 Q150 4 200 2" stroke="var(--color-primary-3rd)" stroke-width="2" fill="none" opacity="0.3"/>
                            </svg>
                        </span>
                        و معماری اصولی
                    </h2>
                    
                    <p class='text-[var(--color-gray)] text-xs sm:text-sm leading-[1.9]'>
                        من یه برنامه‌نویس بک‌اند کارم که با PHP , LARAVEL کار می‌کنم. فرانت‌اند رو هم با TAILWIND , CSS , JS  و بلدم . ارائه خدمات و پروژه به صورت تیمی ، با کیفیت ، سریع و مقرون به‌صرفه می‌باشد
                    </p>
                </div>

                <div class='w-full flex flex-col gap-4'>
                    
                    <div class='group relative bg-inherit rounded-2xl p-5 transition-all duration-500 hover:-translate-y-1 hover:shadow-2xl hover:shadow-[var(--color-primary-3rd)]/5 border border-[var(--color-border)] hover:border-[var(--color-primary-3rd)]/30 overflow-hidden'>
                        
                        <div class='absolute inset-0 bg-gradient-to-br from-[var(--color-primary-3rd)]/5 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-700'></div>
                        <div class='absolute -right-10 -top-10 w-28 h-28 rounded-full bg-[var(--color-primary-3rd)]/5 blur-2xl group-hover:scale-150 transition-all duration-1000'></div>
                        
                        <div class='flex gap-3 items-center'>
                            <div class='relative w-12 h-12 rounded-xl bg-gradient-to-br from-[var(--color-primary-3rd)]/20 to-[var(--color-primary-3rd)]/5 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-all duration-500 border border-[var(--color-primary-3rd)]/10 group-hover:border-[var(--color-primary-3rd)]/30'>
                                <svg class='w-6 fill-[var(--color-primary-3rd)]' viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2_5820)">
                                        <path d="M9.55221 23.3711C9.44111 23.3711 9.33455 23.327 9.25593 23.2484L3.03913 17.0314C2.87548 16.8678 2.87548 16.6025 3.03913 16.4389L15.745 3.73325C15.8236 3.65465 15.9301 3.61053 16.0412 3.61053H20.2377C20.4691 3.61053 20.6566 3.79809 20.6566 4.02951V8.61441C20.6566 8.72552 20.6125 8.83212 20.534 8.91067L10.8201 18.6246C10.6564 18.7882 10.3912 18.7882 10.2275 18.6246C10.0639 18.4609 10.0639 18.1957 10.2275 18.0321L19.8187 8.44088V4.44848H16.2148L3.92788 16.7351L9.55221 22.3596L23.0826 8.82943V1.46685H14.457C13.8224 2.07536 10.8093 4.96356 7.80056 7.83377C0.93904 14.3793 0.794266 14.4518 0.688466 14.5046C0.481546 14.6081 0.229853 14.5243 0.126346 14.3174C0.0293863 14.1234 0.0969463 13.8901 0.276213 13.7764C0.795546 13.3746 8.75208 5.77781 13.9986 0.74552C14.0766 0.670706 14.1805 0.628906 14.2886 0.628906H23.5015C23.7329 0.628906 23.9205 0.81648 23.9205 1.04789V9.00301C23.9205 9.11408 23.8763 9.22068 23.7978 9.29924L9.84845 23.2484C9.76988 23.327 9.66333 23.3711 9.55221 23.3711Z" fill="white"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2_5820">
                                            <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            
                            <h3 class='text-sm font-bold text-[var(--color-white)] group-hover:text-[var(--color-primary-3rd)] transition-all duration-300'>
                                کد تمیز و قابل توسعه

                            </h3>
                            
                        </div>
                        
                        <p class='text-[var(--color-gray)] text-xs leading-relaxed mt-2 pr-2'>
                            کدی می‌نویسم که بعداً خودم یا بقیه راحت باهاش کار کنن. ساختار پروژه رو طوری می‌چینم که با بزرگ شدن کسب‌وکار، سیستم از هم نپاشه و تیم بتونه راحت روش کار کنه.

                        </p>
                        
                        <div class='absolute bottom-0 left-0 right-0 h-[2px] bg-gradient-to-r from-[var(--color-primary-3rd)]/0 via-[var(--color-primary-3rd)]/20 to-[var(--color-primary-3rd)]/0 scale-x-0 group-hover:scale-x-100 transition-all duration-700'></div>
                    </div>

                    <div class='group relative bg-[var(--color-gray-2)] rounded-2xl p-5 transition-all duration-500 hover:-translate-y-1 hover:shadow-2xl hover:shadow-[var(--color-primary-3rd)]/5 border border-[var(--color-border)] hover:border-[var(--color-primary-3rd)]/30 overflow-hidden'>
                        
                        <div class='absolute inset-0 bg-gradient-to-br from-[var(--color-primary-3rd)]/5 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-700'></div>
                        <div class='absolute -right-10 -top-10 w-28 h-28 rounded-full bg-[var(--color-primary-3rd)]/5 blur-2xl group-hover:scale-150 transition-all duration-1000'></div>
                        
                        <div class='flex gap-3 items-center'>
                            <div class='relative w-12 h-12 rounded-xl bg-gradient-to-br from-[var(--color-primary-3rd)]/20 to-[var(--color-primary-3rd)]/5 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-all duration-500 border border-[var(--color-primary-3rd)]/10 group-hover:border-[var(--color-primary-3rd)]/30'>
                                <svg class='w-6 fill-[var(--color-primary-3rd)]' viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2_5831)">
                                        <path d="M23.5877 5.21054C23.3425 4.03692 22.9949 2.87579 22.5459 1.73311C22.5207 1.66894 22.4966 1.60451 22.4707 1.54038C22.2059 0.902525 21.6232 0.457031 21.0537 0.457031C20.9472 0.457031 20.8435 0.472978 20.7476 0.503578C19.6197 0.856791 18.4951 1.28494 17.4074 1.69899C15.0261 2.60567 12.5637 3.54312 10.0022 3.70438C9.70858 3.72343 9.44644 3.81962 9.24194 3.96768C9.06978 3.82982 8.85454 3.74683 8.62055 3.74683H3.38811C2.82668 3.74683 2.36995 4.21975 2.36995 4.80104V6.65607C2.303 6.64252 2.23384 6.6352 2.16298 6.6352H1.15271C0.575282 6.6352 0.105469 7.10812 0.105469 7.68942V11.1767C0.105469 11.758 0.575282 12.2309 1.15271 12.2309H2.16296C2.23383 12.2309 2.30299 12.2236 2.36994 12.21V14.0652C2.36994 14.6465 2.82667 15.1194 3.3881 15.1194H4.63083L9.01498 22.7219C9.30788 23.23 9.85442 23.5455 10.4413 23.5455C10.7283 23.5455 11.0121 23.4695 11.262 23.3254C12.0476 22.8722 12.3183 21.8642 11.8653 21.0784L8.42871 15.1194H8.62056C8.85468 15.1194 9.06991 15.0363 9.24214 14.8983C9.44671 15.0464 9.70907 15.1426 10.003 15.1618C12.5635 15.3229 15.0258 16.2604 17.4069 17.167C18.4947 17.5812 19.6195 18.0094 20.7456 18.362C20.8435 18.3932 20.9472 18.409 21.0536 18.409C21.623 18.409 22.2057 17.9636 22.4722 17.3219C22.4977 17.2589 22.5214 17.1956 22.5462 17.1324C22.9948 15.9915 23.3422 14.8312 23.5872 13.6581C23.7891 12.3866 23.8972 10.9394 23.8972 9.43302C23.8972 7.92764 23.7892 6.4814 23.5877 5.21054ZM2.16298 11.3906H1.15271C1.03864 11.3906 0.945789 11.2947 0.945789 11.1767V7.68942C0.945789 7.57148 1.03864 7.47552 1.15271 7.47552H2.16296C2.27708 7.47552 2.36994 7.57148 2.36994 7.68942V11.1767C2.36994 11.2947 2.2771 11.3906 2.16298 11.3906ZM11.1373 21.4982C11.3589 21.8826 11.2265 22.3757 10.8422 22.5974C10.7198 22.6679 10.5812 22.7052 10.4413 22.7052C10.1539 22.7052 9.88632 22.5508 9.74295 22.3022L5.6009 15.1194H7.45868L11.1373 21.4982ZM8.62055 14.2791H7.94406H6.97402H5.1163H4.14626H3.38811C3.2917 14.2791 3.21027 14.1811 3.21027 14.0652V11.1767V7.68942V4.80104C3.21027 4.68311 3.29004 4.58715 3.38811 4.58715H8.62056C8.71875 4.58715 8.79859 4.6831 8.79859 4.80104V14.0652C8.79858 14.1831 8.71874 14.2791 8.62055 14.2791ZM17.7059 16.3817C15.2662 15.4528 12.7434 14.4923 10.0567 14.3232C9.8055 14.3068 9.63891 14.1678 9.63891 14.0828V14.0652V4.80104V4.78328C9.63891 4.6984 9.80543 4.55926 10.0558 4.54302C12.7436 4.37379 15.2666 3.4133 17.7064 2.48435C18.4542 2.19971 19.2197 1.90886 19.9883 1.64127C19.7103 2.08827 19.4642 2.70451 19.2516 3.48856C19.0497 4.23287 18.8909 5.09126 18.7782 6.02203C18.744 6.30398 18.7141 6.59231 18.6887 6.88662C18.6184 7.70039 18.5815 8.55654 18.5815 9.43303C18.5815 10.3096 18.6184 11.1658 18.6887 11.9796C18.7141 12.2739 18.7441 12.5623 18.7782 12.8442C18.8909 13.7749 19.0497 14.6332 19.2516 15.3776C19.4642 16.1617 19.7104 16.778 19.9884 17.225C19.22 16.9576 18.4541 16.6666 17.7059 16.3817ZM19.4218 9.43302C19.4218 8.57763 19.4578 7.74399 19.526 6.9536C20.304 7.26731 20.874 8.25968 20.874 9.43307C20.874 10.6064 20.304 11.5988 19.5261 11.9125C19.4578 11.1222 19.4218 10.2885 19.4218 9.43302ZM22.7524 13.5616C22.6599 14.137 22.5475 14.6733 22.4161 15.1577C22.2116 15.9118 21.9942 16.4142 21.7979 16.7389C21.5605 17.1316 21.354 17.2642 21.2394 17.2642C21.0299 17.2642 20.5145 16.8239 20.0626 15.1577C19.8725 14.4568 19.7223 13.6474 19.6149 12.7675C20.8162 12.4156 21.7143 11.0547 21.7143 9.43307C21.7143 7.81146 20.8161 6.45056 19.6149 6.09874C19.7223 5.21878 19.8725 4.4093 20.0626 3.70848C20.5145 2.04214 21.03 1.60192 21.2394 1.60192C21.354 1.60192 21.5603 1.7344 21.7976 2.1269C21.994 2.45158 22.2116 2.95403 22.4161 3.70848C22.5479 4.19452 22.6606 4.73286 22.7533 5.31046C23.3388 8.04646 23.3384 10.8269 22.7524 13.5616Z" fill="white"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2_5831">
                                            <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            
                            <h3 class='text-sm font-bold text-[var(--color-white)] group-hover:text-[var(--color-primary-3rd)] transition-all duration-300'>
                                مشاوره کسب و کار آنلاین

                            </h3>
                            
                        </div>
                        
                        <p class='text-[var(--color-gray)] text-xs leading-relaxed mt-2 pr-2'>
                        یکی دیگه از مهارت های اصلیم مشاوره کسب و کار و سافت اسکیله.

                        </p>
                        
                        <div class='absolute bottom-0 left-0 right-0 h-[2px] bg-gradient-to-r from-[var(--color-primary-3rd)]/0 via-[var(--color-primary-3rd)]/20 to-[var(--color-primary-3rd)]/0 scale-x-0 group-hover:scale-x-100 transition-all duration-700'></div>
                    </div>

                </div>

                <div class='relative w-full mt-2'>
                    <a href='#' class='group relative inline-flex items-center justify-center w-full gap-3 bg-gradient-to-r from-[var(--color-primary-3rd)] to-[var(--color-primary-3rd)]/80 text-[var(--color-white)] font-bold px-6 py-3.5 rounded-full overflow-hidden transition-all duration-500 hover:scale-[1.02] hover:shadow-2xl hover:shadow-[var(--color-primary-3rd)]/30'>
                        
                        <span class='relative z-10 text-xs tracking-wide'>
                            درباره من بیشتر بدانید
                        </span>
                        
                        <svg class='relative z-10 w-3.5 fill-[var(--color-white)] transition-all duration-500 group-hover:translate-x-1' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z"/>
                        </svg>
                        
                        <div class='absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent -translate-x-full group-hover:translate-x-full transition-all duration-1000'></div>
                        
                        <span class='absolute -top-1 -right-1 w-2.5 h-2.5 rounded-full bg-white/20 animate-pulse'></span>
                        <span class='absolute -bottom-1 -left-1 w-2 h-2 rounded-full bg-white/10 animate-pulse delay-700'></span>
                    </a>
                </div>

            </div>
        </div>

        
        <!-- ====== بخش خدمات من (نسخه حرفه‌ای) ====== -->

        <div id="services" class="w-11/12 mx-auto flex flex-col gap-5 mb-15 relative">
            

            <div class="relative z-10 w-full flex flex-col gap-3 justify-center text-center">
                <span class="text-[var(--color-primary-3rd)] font-bold text-base tracking-wider uppercase">
                    خدمات من
                </span>
                <h2 class="text-[var(--color-heading)] text-[4vw] md:text-[3vw] lg:text-[2.5vw] font-bold leading-tight">
                    چه خدماتی ارائه می‌دهم
                </h2>
                <p class="text-[var(--color-gray)] text-sm max-w-2xl mx-auto">
                    ترکیبی از تخصص فنی و دانش کسب‌وکار برای رشد و توسعه کسب‌وکار شما
                </p>
            </div>

            <div class="relative z-10 grid grid-cols-1 sm:grid-cols-3 gap-4 mt-2">
                
                <div class="group bg-[var(--color-gray-2)] border border-[var(--color-border)] rounded-2xl p-5 text-center transition-all duration-500 hover:-translate-y-2 hover:border-[var(--color-primary-3rd)] hover:shadow-xl hover:shadow-[var(--color-primary-3rd)]/5">
                    <div class="relative w-14 h-14 mx-auto mb-3 rounded-full bg-[var(--color-primary-3rd)]/10 flex items-center justify-center group-hover:bg-[var(--color-primary-3rd)]/20 transition-all duration-500">
                        <svg class="w-7 fill-[var(--color-primary-3rd)]" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/>
                        </svg>
                    </div>
                    <h4 class="text-base font-bold text-[var(--color-white)] group-hover:text-[var(--color-primary-3rd)] transition-all duration-300">
                        سرعت بالا
                    </h4>
                    <p class="text-xs text-[var(--color-gray)] mt-1 leading-relaxed">
                        تحویل پروژه‌ها در کوتاه‌ترین زمان ممکن بدون افت کیفیت
                    </p>
                </div>

                <div class="group bg-[var(--color-gray-2)] border border-[var(--color-border)] rounded-2xl p-5 text-center transition-all duration-500 hover:-translate-y-2 hover:border-[var(--color-primary-3rd)] hover:shadow-xl hover:shadow-[var(--color-primary-3rd)]/5">
                    <div class="relative w-14 h-14 mx-auto mb-3 rounded-full bg-[var(--color-primary-3rd)]/10 flex items-center justify-center group-hover:bg-[var(--color-primary-3rd)]/20 transition-all duration-500">
                        <svg class="w-7 fill-[var(--color-primary-3rd)]" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                        </svg>
                    </div>
                    <h4 class="text-base font-bold text-[var(--color-white)] group-hover:text-[var(--color-primary-3rd)] transition-all duration-300">
                        کیفیت عالی
                    </h4>
                    <p class="text-xs text-[var(--color-gray)] mt-1 leading-relaxed">
                        کدهای تمیز، استاندارد و بهینه با بالاترین کیفیت ممکن
                    </p>
                </div>

                <div class="group bg-[var(--color-gray-2)] border border-[var(--color-border)] rounded-2xl p-5 text-center transition-all duration-500 hover:-translate-y-2 hover:border-[var(--color-primary-3rd)] hover:shadow-xl hover:shadow-[var(--color-primary-3rd)]/5">
                    <div class="relative w-14 h-14 mx-auto mb-3 rounded-full bg-[var(--color-primary-3rd)]/10 flex items-center justify-center group-hover:bg-[var(--color-primary-3rd)]/20 transition-all duration-500">
                        <svg class="w-7 fill-[var(--color-primary-3rd)]" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"/>
                        </svg>
                    </div>
                    <h4 class="text-base font-bold text-[var(--color-white)] group-hover:text-[var(--color-primary-3rd)] transition-all duration-300">
                        هزینه مناسب
                    </h4>
                    <p class="text-xs text-[var(--color-gray)] mt-1 leading-relaxed">
                        ارائه خدمات با کیفیت بالا و قیمت‌های کاملاً مقرون‌به‌صرفه
                    </p>
                </div>

            </div>

            <div class="relative z-10 grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">

                <div class="group relative bg-[var(--color-gray-2)] border border-[var(--color-border)] rounded-2xl p-6 transition-all duration-500 hover:-translate-y-2 hover:border-[var(--color-primary-3rd)] hover:shadow-2xl hover:shadow-[var(--color-primary-3rd)]/10 overflow-hidden">
                    
                    
                    <div class="absolute top-4 right-4 text-6xl font-bold text-[var(--color-primary-3rd)]/5 group-hover:text-[var(--color-primary-3rd)]/10 transition-all duration-500 select-none">
                        ۰۱
                    </div>

                    <div class="absolute top-4 left-4 flex items-center gap-1.5 bg-[var(--color-primary-3rd)]/10 px-2.5 py-1 rounded-full border border-[var(--color-primary-3rd)]/20">
                        <svg class="w-3 fill-[var(--color-primary-3rd)]" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <span class="text-[8px] text-[var(--color-primary-3rd)] font-bold">کیفیت عالی</span>
                    </div>

                    <div class="relative w-16 h-16 rounded-2xl bg-[var(--color-primary-3rd)]/10 flex items-center justify-center mb-5 group-hover:bg-[var(--color-primary-3rd)]/20 transition-all duration-500 mt-6">
                        <svg class="w-8 fill-[var(--color-primary-3rd)]" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                        </svg>
                    </div>

                    <h3 class="text-xl font-bold text-[var(--color-white)] mb-2 group-hover:text-[var(--color-primary-3rd)] transition-all duration-300">
                        طراحی وب‌سایت
                    </h3>
                    
                    <p class="text-sm text-[var(--color-gray)] leading-relaxed">
                        طراحی و پیاده‌سازی کامل وب‌سایت‌های حرفه‌ای از صفر تا صد، شامل بک‌اند و فرانت‌اند
                    </p>

                    <div class="flex flex-wrap gap-2 mt-4">
                        <span class="text-[10px] px-3 py-1 rounded-full bg-[var(--color-primary-3rd)]/10 text-[var(--color-primary-3rd)] border border-[var(--color-primary-3rd)]/20">
                            بک‌اند
                        </span>
                        <span class="text-[10px] px-3 py-1 rounded-full bg-[var(--color-primary-3rd)]/10 text-[var(--color-primary-3rd)] border border-[var(--color-primary-3rd)]/20">
                            فرانت‌اند
                        </span>
                        <span class="text-[10px] px-3 py-1 rounded-full bg-[var(--color-primary-3rd)]/10 text-[var(--color-primary-3rd)] border border-[var(--color-primary-3rd)]/20">
                            Laravel
                        </span>
                        <span class="text-[10px] px-3 py-1 rounded-full bg-[var(--color-primary-3rd)]/10 text-[var(--color-primary-3rd)] border border-[var(--color-primary-3rd)]/20">
                            Tailwind
                        </span>
                    </div>
                </div>

                <div class="group relative bg-[var(--color-gray-2)] border border-[var(--color-border)] rounded-2xl p-6 transition-all duration-500 hover:-translate-y-2 hover:border-[var(--color-primary-3rd)] hover:shadow-2xl hover:shadow-[var(--color-primary-3rd)]/10 overflow-hidden">
                    
                    
                    <div class="absolute top-4 right-4 text-6xl font-bold text-[var(--color-primary-3rd)]/5 group-hover:text-[var(--color-primary-3rd)]/10 transition-all duration-500 select-none">
                        ۰۲
                    </div>

                    <div class="absolute top-4 left-4 flex items-center gap-1.5 bg-[var(--color-primary-3rd)]/10 px-2.5 py-1 rounded-full border border-[var(--color-primary-3rd)]/20">
                        <svg class="w-3 fill-[var(--color-primary-3rd)]" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/></svg>
                        <span class="text-[8px] text-[var(--color-primary-3rd)] font-bold">سرعت بالا</span>
                    </div>

                    <div class="relative w-16 h-16 rounded-2xl bg-[var(--color-primary-3rd)]/10 flex items-center justify-center mb-5 group-hover:bg-[var(--color-primary-3rd)]/20 transition-all duration-500 mt-6">
                        <svg class="w-8 fill-[var(--color-primary-3rd)]" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/>
                        </svg>
                    </div>

                    <h3 class="text-xl font-bold text-[var(--color-white)] mb-2 group-hover:text-[var(--color-primary-3rd)] transition-all duration-300">
                        مشاوره کسب‌وکار
                    </h3>
                    
                    <p class="text-sm text-[var(--color-gray)] leading-relaxed">
                        ارائه راهکارهای استراتژیک برای رشد کسب‌وکار، دیجیتال‌سازی و بهینه‌سازی فرآیندهای فروش
                    </p>

                    <div class="flex flex-wrap gap-2 mt-4">
                        <span class="text-[10px] px-3 py-1 rounded-full bg-[var(--color-primary-3rd)]/10 text-[var(--color-primary-3rd)] border border-[var(--color-primary-3rd)]/20">
                            قیف فروش
                        </span>
                        <span class="text-[10px] px-3 py-1 rounded-full bg-[var(--color-primary-3rd)]/10 text-[var(--color-primary-3rd)] border border-[var(--color-primary-3rd)]/20">
                            استراتژی
                        </span>
                        <span class="text-[10px] px-3 py-1 rounded-full bg-[var(--color-primary-3rd)]/10 text-[var(--color-primary-3rd)] border border-[var(--color-primary-3rd)]/20">
                            تعیین مسیر فروش
                        </span>
                        <span class="text-[10px] px-3 py-1 rounded-full bg-[var(--color-primary-3rd)]/10 text-[var(--color-primary-3rd)] border border-[var(--color-primary-3rd)]/20">
                            دیجیتال‌سازی
                        </span>
                        <span class="text-[10px] px-3 py-1 rounded-full bg-[var(--color-primary-3rd)]/10 text-[var(--color-primary-3rd)] border border-[var(--color-primary-3rd)]/20">
                            فروش
                        </span>
                        <span class="text-[10px] px-3 py-1 rounded-full bg-[var(--color-primary-3rd)]/10 text-[var(--color-primary-3rd)] border border-[var(--color-primary-3rd)]/20">
                            افزایش درآمد
                        </span>
                        <span class="text-[10px] px-3 py-1 rounded-full bg-[var(--color-primary-3rd)]/10 text-[var(--color-primary-3rd)] border border-[var(--color-primary-3rd)]/20">
                            رشد
                        </span>
                    </div>
                </div>

            </div>


            <div class="relative z-10 flex justify-center mt-4">
                <a href="tel:09995186884" class="group relative bg-gradient-to-r from-[var(--color-primary-3rd)] to-[var(--color-primary-3rd)]/80 text-[var(--color-white)] font-bold px-10 py-4 rounded-full overflow-hidden transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:shadow-[var(--color-primary-3rd)]/30">
                    <span class="relative z-10 flex items-center gap-3 text-base">
                        <svg class="w-5 fill-current" viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                        درخواست مشاوره رایگان
                    </span>
                    <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent -translate-x-full group-hover:translate-x-full transition-all duration-1000"></div>
                </a>
            </div>

        </div>


        <!-- ====== پایان بخش خدمات ====== -->
<!--  -->
<!--  -->
        <!-- <div id="portfolio" class='w-11/12 mx-auto flex flex-col gap-5 mb-15'>
            <div class='w-full flex flex-col gap-5 justify-center text-center'>
                <span class='text-[var(--color-primary-3rd)] font-bold text-base'> آخرین نمونه کارها </span>
                <h2 class='text-[var(--color-heading)] text-[4vw] md:text-[3vw] lg:text-[2vw] font-bold'> پیاده‌سازی سیستم‌های قدرتمند و قابل اعتماد </h2>
                <p class='text-[var(--color-gray)] text-sm'> هر پروژه‌ای که توسعه می‌دهم، بر اساس اصول معماری تمیز (Clean Architecture) و با تمرکز بر امنیت، کارایی و قابلیت نگهداری بالا طراحی شده است. </p>
            </div>
            <div class='w-full mx-auto flex flex-wrap gap-3 items-center justify-center'>
                <span onclick="show_portofilos()" class='Portfolios py-3 sm:px-5 px-3 cursor-pointer flex text-center items-center text-[var(--color-white)] rounded-3xl bg-[var(--color-gray-2)] shadow-md shadow-gray-800 border-2 border-[var(--color-primary-3rd)] transition-all duration-400'> همه </span>
                <span onclick="show_portofilos()" class='Portfolios py-3 sm:px-5 px-3 cursor-pointer flex text-center items-center text-[var(--color-white)] rounded-3xl bg-[var(--color-gray-2)] shadow-md shadow-gray-800 border-2 border-[var(--color-primary-3rd)] transition-all duration-400'> فروشگاهی </span>
                <span onclick="show_portofilos()" class='Portfolios py-3 sm:px-5 px-3 cursor-pointer flex text-center items-center text-[var(--color-white)] rounded-3xl bg-[var(--color-gray-2)] shadow-md shadow-gray-800 border-2 border-[var(--color-primary-3rd)] transition-all duration-400'> شرکتی </span>
                <span onclick="show_portofilos()" class='Portfolios py-3 sm:px-5 px-3 cursor-pointer flex text-center items-center text-[var(--color-white)] rounded-3xl bg-[var(--color-gray-2)] shadow-md shadow-gray-800 border-2 border-[var(--color-primary-3rd)] transition-all duration-400'> رزومه ای </span>
            </div>
            <div class="h-[50%] hidden md:grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4 overflow-hidden">
                <div class='min-w-full h-60 flex flex-col gap-3'>
                    <div class='relative group/card w-[100%] h-[100%] rounded-2xl object-cover overflow-hidden'>
                        <img class='z-1 object-cover w-full h-full' src="assets/img/caffegreen.webp" alt="">
                        <div class='absolute w-full h-full top-0 transition-all duration-600 opacity-0 group-hover/card:opacity-100 z-1' style="background: linear-gradient(0deg,rgba(0, 0, 0, 0.9) 0%, rgba(253, 196, 72, 0.9) 100%);"></div>
                        <div class='absolute -bottom-5 w-full flex justify-between items-center text-[var(--color-white)] py-2 px-3 transition-all duration-400 opacity-0 group-hover/card:bottom-0 group-hover/card:opacity-100 z-3'>
                            <a href="https://caffegreen.com/" class='group relative size-11 rounded-xl flex border-2 border-[var(--color-white)] transition-all duration-700 hover:bg-[var(--color-primary-3rd)] hover:border-[var(--color-primary-3rd)] overflow-hidden'>
                                <svg class='absolute top-[10px] left-3 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-10 group-hover:-translate-y-10' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                                <svg class='absolute top-[40px] right-10 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-7 group-hover:-translate-y-7' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                            </a>
                            <div class='flex flex-col gap-4 text-left mb-4'>
                                <span class='text-base'> کافه گرین  </span>
                                <a href="https://caffegreen.com/" class='text-xl font-bold transition-all duration-500 hover:text-[var(--color-primary-3rd)]'> منو و خدمات آنلاین </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='min-w-full h-60 flex flex-col gap-3'>
                    <div class='relative group/card w-[100%] h-[100%] rounded-2xl object-cover overflow-hidden'>
                        <img class='z-1 object-cover w-full h-full' src="assets/img/mrsimy.webp" alt="">
                        <div class='absolute w-full h-full top-0 transition-all duration-600 opacity-0 group-hover/card:opacity-100 z-1' style="background: linear-gradient(0deg,rgba(0, 0, 0, 0.9) 0%, rgba(253, 196, 72, 0.9) 100%);"></div>
                        <div class='absolute -bottom-5 w-full flex justify-between items-center text-[var(--color-white)] py-2 px-3 transition-all duration-400 opacity-0 group-hover/card:bottom-0 group-hover/card:opacity-100 z-3'>
                            <a href="https://mrshimy.ir/" class='group relative size-11 rounded-xl flex border-2 border-[var(--color-white)] transition-all duration-700 hover:bg-[var(--color-primary-3rd)] hover:border-[var(--color-primary-3rd)] overflow-hidden'>
                                <svg class='absolute top-[10px] left-3 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-10 group-hover:-translate-y-10' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                                <svg class='absolute top-[40px] right-10 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-7 group-hover:-translate-y-7' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                            </a>
                            <div class='flex flex-col gap-4 text-left mb-4'>
                                <span class='text-base'> سایت مستر شیمی </span>
                                <a href="https://mrshimy.ir/" class='text-xl font-bold transition-all duration-500 hover:text-[var(--color-primary-3rd)]'> سایت تخصصی آموزش شیمی  </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='min-w-full h-60 flex flex-col gap-3'>
                    <div class='relative group/card w-[100%] h-[100%] rounded-2xl object-cover overflow-hidden'>
                        <img class='z-1 object-cover w-full h-full' src="assets/img/vafadarteb.webp" alt="">
                        <div class='absolute w-full h-full top-0 transition-all duration-600 opacity-0 group-hover/card:opacity-100 z-1' style="background: linear-gradient(0deg,rgba(0, 0, 0, 0.9) 0%, rgba(253, 196, 72, 0.9) 100%);"></div>
                        <div class='absolute -bottom-5 w-full flex justify-between items-center text-[var(--color-white)] py-2 px-3 transition-all duration-400 opacity-0 group-hover/card:bottom-0 group-hover/card:opacity-100 z-3'>
                            <a href="https://vafadarteb.com/" class='group relative size-11 rounded-xl flex border-2 border-[var(--color-white)] transition-all duration-700 hover:bg-[var(--color-primary-3rd)] hover:border-[var(--color-primary-3rd)] overflow-hidden'>
                                <svg class='absolute top-[10px] left-3 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-10 group-hover:-translate-y-10' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                                <svg class='absolute top-[40px] right-10 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-7 group-hover:-translate-y-7' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                            </a>
                            <div class='flex flex-col gap-4 text-left mb-4'>
                                <span class='text-base'> سایت تجهیزات پزشکی وفادار </span>
                                <a href="https://vafadarteb.com/" class='text-xl font-bold transition-all duration-500 hover:text-[var(--color-primary-3rd)]'> سایت فروشگاهی وفادار طب  </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='min-w-full h-60 flex flex-col gap-3'>
                    <div class='relative group/card w-[100%] h-[100%] rounded-2xl object-cover overflow-hidden'>
                        <img class='z-1 object-cover w-full h-full' src="assets/img/ringa.webp" alt="">
                        <div class='absolute w-full h-full top-0 transition-all duration-600 opacity-0 group-hover/card:opacity-100 z-1' style="background: linear-gradient(0deg,rgba(0, 0, 0, 0.9) 0%, rgba(253, 196, 72, 0.9) 100%);"></div>
                        <div class='absolute -bottom-5 w-full flex justify-between items-center text-[var(--color-white)] py-2 px-3 transition-all duration-400 opacity-0 group-hover/card:bottom-0 group-hover/card:opacity-100 z-3'>
                            <a href="https://ringaa.ir/" class='group relative size-11 rounded-xl flex border-2 border-[var(--color-white)] transition-all duration-700 hover:bg-[var(--color-primary-3rd)] hover:border-[var(--color-primary-3rd)] overflow-hidden'>
                                <svg class='absolute top-[10px] left-3 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-10 group-hover:-translate-y-10' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                                <svg class='absolute top-[40px] right-10 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-7 group-hover:-translate-y-7' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                            </a>
                            <div class='flex flex-col gap-4 text-left mb-4'>
                                <span class='text-base'> سوپر اپلیکیشن رینگا </span>
                                <a href="https://ringaa.ir/" class='text-xl font-bold transition-all duration-500 hover:text-[var(--color-primary-3rd)]'> پلتفرم چند منظوره برای کسب‌وکار ها </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='min-w-full h-60 flex flex-col gap-3'>
                    <div class='relative group/card w-[100%] h-[100%] rounded-2xl object-cover overflow-hidden'>
                        <img class='z-1 object-cover w-full h-full' src="assets/img/rinTeach.webp" alt="">
                        <div class='absolute w-full h-full top-0 transition-all duration-600 opacity-0 group-hover/card:opacity-100 z-1' style="background: linear-gradient(0deg,rgba(0, 0, 0, 0.9) 0%, rgba(253, 196, 72, 0.9) 100%);"></div>
                        <div class='absolute -bottom-5 w-full flex justify-between items-center text-[var(--color-white)] py-2 px-3 transition-all duration-400 opacity-0 group-hover/card:bottom-0 group-hover/card:opacity-100 z-3'>
                            <a href='https://rinteach.ir/' class='group relative size-11 rounded-xl flex border-2 border-[var(--color-white)] transition-all duration-700 hover:bg-[var(--color-primary-3rd)] hover:border-[var(--color-primary-3rd)] overflow-hidden'>
                                <svg class='absolute top-[10px] left-3 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-10 group-hover:-translate-y-10' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                                <svg class='absolute top-[40px] right-10 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-7 group-hover:-translate-y-7' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                            </a>
                            <div class='flex flex-col gap-4 text-left mb-4'>
                                <span class='text-base'> رین تیچ </span>
                                <a href="https://rinteach.ir/" class='text-xl font-bold transition-all duration-500 hover:text-[var(--color-primary-3rd)]'> خدمات تخصصی ویژه آموزشگاه ها</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='min-w-full h-60 flex flex-col gap-3'>
                    <div class='relative group/card w-[100%] h-[100%] rounded-2xl object-cover overflow-hidden'>
                        <img class='z-1 object-cover w-full h-full' src="assets/img/shahkarpng.webp" alt="">
                        <div class='absolute w-full h-full top-0 transition-all duration-600 opacity-0 group-hover/card:opacity-100 z-1' style="background: linear-gradient(0deg,rgba(0, 0, 0, 0.9) 0%, rgba(253, 196, 72, 0.9) 100%);"></div>
                        <div class='absolute -bottom-5 w-full flex justify-between items-center text-[var(--color-white)] py-2 px-3 transition-all duration-400 opacity-0 group-hover/card:bottom-0 group-hover/card:opacity-100 z-3'>
                            <a href="https://shahkar.art/" class='group relative size-11 rounded-xl flex border-2 border-[var(--color-white)] transition-all duration-700 hover:bg-[var(--color-primary-3rd)] hover:border-[var(--color-primary-3rd)] overflow-hidden'>
                                <svg class='absolute top-[10px] left-3 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-10 group-hover:-translate-y-10' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                                <svg class='absolute top-[40px] right-10 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-7 group-hover:-translate-y-7' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                            </a>
                            <div class='flex flex-col gap-4 text-left mb-4'>
                                <span class='text-base'> وبسایت برای چاپخانه </span>
                                <a href="https://shahkar.art/" class='text-xl font-bold transition-all duration-500 hover:text-[var(--color-primary-3rd)]'> وب سایت چاپخانه و ثبت سفارش </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='min-w-full h-60 flex flex-col gap-3'>
                    <div class='relative group/card w-[100%] h-[100%] rounded-2xl object-cover overflow-hidden'>
                        <img class='z-1 object-cover w-full h-full' src="assets/img/taskup.webp" alt="">
                        <div class='absolute w-full h-full top-0 transition-all duration-600 opacity-0 group-hover/card:opacity-100 z-1' style="background: linear-gradient(0deg,rgba(0, 0, 0, 0.9) 0%, rgba(253, 196, 72, 0.9) 100%);"></div>
                        <div class='absolute -bottom-5 w-full flex justify-between items-center text-[var(--color-white)] py-2 px-3 transition-all duration-400 opacity-0 group-hover/card:bottom-0 group-hover/card:opacity-100 z-3'>
                            <a href='https://taskbonab.ir/' class='group relative size-11 rounded-xl flex border-2 border-[var(--color-white)] transition-all duration-700 hover:bg-[var(--color-primary-3rd)] hover:border-[var(--color-primary-3rd)] overflow-hidden'>
                                <svg class='absolute top-[10px] left-3 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-10 group-hover:-translate-y-10' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                                <svg class='absolute top-[40px] right-10 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-7 group-hover:-translate-y-7' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                            </a>
                            <div class='flex flex-col gap-4 text-left mb-4'>
                                <span class='text-base'> تسک بناب </span>
                                <a href='https://taskbonab.ir/' class='text-xl font-bold transition-all duration-500 hover:text-[var(--color-primary-3rd)]'> سامانه جامع ارتباط اساتید و دانشجویان دانشگاه بناب </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='min-w-full h-60 flex flex-col gap-3'>
                    <div class='relative group/card w-[100%] h-[100%] rounded-2xl object-cover overflow-hidden'>
                        <img class='z-1 object-cover w-full h-full' src="assets/img/technoneon.webp" alt="">
                        <div class='absolute w-full h-full top-0 transition-all duration-600 opacity-0 group-hover/card:opacity-100 z-1' style="background: linear-gradient(0deg,rgba(0, 0, 0, 0.9) 0%, rgba(253, 196, 72, 0.9) 100%);"></div>
                        <div class='absolute -bottom-5 w-full flex justify-between items-center text-[var(--color-white)] py-2 px-3 transition-all duration-400 opacity-0 group-hover/card:bottom-0 group-hover/card:opacity-100 z-3'>
                            <a href="https://technoneon.com/" class='group relative size-11 rounded-xl flex border-2 border-[var(--color-white)] transition-all duration-700 hover:bg-[var(--color-primary-3rd)] hover:border-[var(--color-primary-3rd)] overflow-hidden'>
                                <svg class='absolute top-[10px] left-3 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-10 group-hover:-translate-y-10' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                                <svg class='absolute top-[40px] right-10 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-7 group-hover:-translate-y-7' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                            </a>
                            <div class='flex flex-col gap-4 text-left mb-4'>
                                <span class='text-base'> تکنو نعون</span>
                                <a href="https://technoneon.com/" class='text-xl font-bold transition-all duration-500 hover:text-[var(--color-primary-3rd)]'> فروشگاه تخصصی تجهیزات و قطعات گیمینگ </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-[50%] md:hidden flex gap-4 overflow-x-auto">
                <div class='max-w-2/3 min-w-2/3 sm:min-w-1/2 flex flex-col gap-3'>
                    <div class='relative group/card w-[100%] h-[100%] rounded-2xl object-cover overflow-hidden'>
                        <img class='z-1 object-cover w-full h-full' src="assets/img/caffegreen.webp" alt="">
                        <div class='absolute w-full h-full top-0 transition-all duration-600 z-1' style="background: linear-gradient(0deg,rgba(0, 0, 0, 0.9) 0%, rgba(253, 196, 72, 0.5) 100%);"></div>
                        <div class='absolute bottom-0 w-full flex justify-between items-center text-[var(--color-white)] py-2 px-3 transition-all duration-400 z-3'>
                            <a href="https://caffegreen.com/" class='group relative size-10 sm:size-11 rounded-xl flex border-2 border-[var(--color-white)] transition-all duration-700 hover:bg-[var(--color-primary-3rd)] hover:border-[var(--color-primary-3rd)] overflow-hidden'>
                                <svg class='absolute top-[7px] sm:top-[10px] left-3 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-10 group-hover:-translate-y-10' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                                <svg class='absolute top-[39px] sm:top-[40px] right-10 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-7 group-hover:-translate-y-7' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                            </a>
                            <div class='flex flex-col gap-4 text-left mb-4'>
                                <span class='text-xs sm:text-base'> کافه گرین  </span>
                                <a href="https://caffegreen.com/" class='text-xs sm:text-xl font-bold transition-all duration-500 hover:text-[var(--color-primary-3rd)]'> منو و خدمات آنلاین </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='max-w-2/3 min-w-2/3 sm:min-w-1/2 flex flex-col gap-3'>
                    <div class='relative group/card w-[100%] h-[100%] rounded-2xl object-cover overflow-hidden'>
                        <img class='z-1 object-cover w-full h-full' src="assets/img/mrsimy.webp" alt="">
                        <div class='absolute w-full h-full top-0 transition-all duration-600 z-1' style="background: linear-gradient(0deg,rgba(0, 0, 0, 0.9) 0%, rgba(253, 196, 72, 0.5) 100%);"></div>
                        <div class='absolute bottom-0 w-full flex justify-between items-center text-[var(--color-white)] py-2 px-3 transition-all duration-400 z-3'>
                            <a href="https://mrshimy.ir/" class='group relative size-10 sm:size-11 rounded-xl flex border-2 border-[var(--color-white)] transition-all duration-700 hover:bg-[var(--color-primary-3rd)] hover:border-[var(--color-primary-3rd)] overflow-hidden'>
                                <svg class='absolute top-[7px] sm:top-[10px] left-3 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-10 group-hover:-translate-y-10' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                                <svg class='absolute top-[39px] sm:top-[40px] right-10 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-7 group-hover:-translate-y-7' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                            </a>
                            <div class='flex flex-col gap-4 text-left mb-4'>
                                <span class='text-xs sm:text-base'> سایت مستر شیمی  </span>
                                <a href="https://mrshimy.ir/" class='text-xs sm:text-xl font-bold transition-all duration-500 hover:text-[var(--color-primary-3rd)]'>  سایت تخصصی آموزش شیمی </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='max-w-2/3 min-w-2/3 sm:min-w-1/2 flex flex-col gap-3'>
                    <div class='relative group/card w-[100%] h-[100%] rounded-2xl object-cover overflow-hidden'>
                        <img class='z-1 object-cover w-full h-full' src="assets/img/ringa.webp" alt="">
                        <div class='absolute w-full h-full top-0 transition-all duration-600 z-1' style="background: linear-gradient(0deg,rgba(0, 0, 0, 0.9) 0%, rgba(253, 196, 72, 0.5) 100%);"></div>
                        <div class='absolute bottom-0 w-full flex justify-between items-center text-[var(--color-white)] py-2 px-3 transition-all duration-400 z-3'>
                            <a href="https://ringaa.ir/" class='group relative size-10 sm:size-11 rounded-xl flex border-2 border-[var(--color-white)] transition-all duration-700 hover:bg-[var(--color-primary-3rd)] hover:border-[var(--color-primary-3rd)] overflow-hidden'>
                                <svg class='absolute top-[7px] sm:top-[10px] left-3 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-10 group-hover:-translate-y-10' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                                <svg class='absolute top-[39px] sm:top-[40px] right-10 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-7 group-hover:-translate-y-7' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                            </a>
                            <div class='flex flex-col gap-4 text-left mb-4'>
                                <span class='text-xs sm:text-base'> سوپر اپلیکیشن رینگا  </span>
                                <a href="https://ringaa.ir/" class='text-xs sm:text-xl font-bold transition-all duration-500 hover:text-[var(--color-primary-3rd)]'> پلتفرم چند منظوره برای کسب‌وکار ها </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='max-w-2/3 min-w-2/3 sm:min-w-1/2 flex flex-col gap-3'>
                    <div class='relative group/card w-[100%] h-[100%] rounded-2xl object-cover overflow-hidden'>
                        <img class='z-1 object-cover w-full h-full' src="assets/img/rinTeach.webp" alt="">
                        <div class='absolute w-full h-full top-0 transition-all duration-600 z-1' style="background: linear-gradient(0deg,rgba(0, 0, 0, 0.9) 0%, rgba(253, 196, 72, 0.5) 100%);"></div>
                        <div class='absolute bottom-0 w-full flex justify-between items-center text-[var(--color-white)] py-2 px-3 transition-all duration-400 z-3'>
                            <a href="https://rinteach.ir/" class='group relative size-10 sm:size-11 rounded-xl flex border-2 border-[var(--color-white)] transition-all duration-700 hover:bg-[var(--color-primary-3rd)] hover:border-[var(--color-primary-3rd)] overflow-hidden'>
                                <svg class='absolute top-[7px] sm:top-[10px] left-3 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-10 group-hover:-translate-y-10' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                                <svg class='absolute top-[39px] sm:top-[40px] right-10 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-7 group-hover:-translate-y-7' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                            </a>
                            <div class='flex flex-col gap-4 text-left mb-4'>
                                <span class='text-xs sm:text-base'> رین تیچ  </span>
                                <a href="https://rinteach.ir/" class='text-xs sm:text-xl font-bold transition-all duration-500 hover:text-[var(--color-primary-3rd)]'>خدمات تخصصی ویژه آموزشگاه ها</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='max-w-2/3 min-w-2/3 sm:min-w-1/2 flex flex-col gap-3'>
                    <div class='relative group/card w-[100%] h-[100%] rounded-2xl object-cover overflow-hidden'>
                        <img class='z-1 object-cover w-full h-full' src="assets/img/shahkarpng.webp" alt="">
                        <div class='absolute w-full h-full top-0 transition-all duration-600 z-1' style="background: linear-gradient(0deg,rgba(0, 0, 0, 0.9) 0%, rgba(253, 196, 72, 0.5) 100%);"></div>
                        <div class='absolute bottom-0 w-full flex justify-between items-center text-[var(--color-white)] py-2 px-3 transition-all duration-400 z-3'>
                            <a href="https://shahkar.art/" class='group relative size-10 sm:size-11 rounded-xl flex border-2 border-[var(--color-white)] transition-all duration-700 hover:bg-[var(--color-primary-3rd)] hover:border-[var(--color-primary-3rd)] overflow-hidden'>
                                <svg class='absolute top-[7px] sm:top-[10px] left-3 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-10 group-hover:-translate-y-10' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                                <svg class='absolute top-[39px] sm:top-[40px] right-10 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-7 group-hover:-translate-y-7' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                            </a>
                            <div class='flex flex-col gap-4 text-left mb-4'>
                                <span class='text-xs sm:text-base'> وبسایت برای چاپخانه  </span>
                                <a href="https://shahkar.art/" class='text-xs sm:text-xl font-bold transition-all duration-500 hover:text-[var(--color-primary-3rd)]'> وبسایت برای چاپخانه وثبت سفارش</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='max-w-2/3 min-w-2/3 sm:min-w-1/2 flex flex-col gap-3'>
                    <div class='relative group/card w-[100%] h-[100%] rounded-2xl object-cover overflow-hidden'>
                        <img class='z-1 object-cover w-full h-full' src="assets/img/taskup.webp" alt="">
                        <div class='absolute w-full h-full top-0 transition-all duration-600 z-1' style="background: linear-gradient(0deg,rgba(0, 0, 0, 0.9) 0%, rgba(253, 196, 72, 0.5) 100%);"></div>
                        <div class='absolute bottom-0 w-full flex justify-between items-center text-[var(--color-white)] py-2 px-3 transition-all duration-400 z-3'>
                            <a href="https://taskbonab.ir/" class='group relative size-10 sm:size-11 rounded-xl flex border-2 border-[var(--color-white)] transition-all duration-700 hover:bg-[var(--color-primary-3rd)] hover:border-[var(--color-primary-3rd)] overflow-hidden'>
                                <svg class='absolute top-[7px] sm:top-[10px] left-3 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-10 group-hover:-translate-y-10' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                                <svg class='absolute top-[39px] sm:top-[40px] right-10 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-7 group-hover:-translate-y-7' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                            </a>
                            <div class='flex flex-col gap-4 text-left mb-4'>
                                <span class='text-xs sm:text-base'> تسک بناب  </span>
                                <a href="https://taskbonab.ir/" class='text-xs sm:text-xl font-bold transition-all duration-500 hover:text-[var(--color-primary-3rd)]'> سامانه جامع ارتباط اساتید دانشگاه بناب </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='max-w-2/3 min-w-2/3 sm:min-w-1/2 flex flex-col gap-3'>
                    <div class='relative group/card w-[100%] h-[100%] rounded-2xl object-cover overflow-hidden'>
                        <img class='z-1 object-cover w-full h-full' src="assets/img/technoneon.webp" alt="">
                        <div class='absolute w-full h-full top-0 transition-all duration-600 z-1' style="background: linear-gradient(0deg,rgba(0, 0, 0, 0.9) 0%, rgba(253, 196, 72, 0.5) 100%);"></div>
                        <div class='absolute bottom-0 w-full flex justify-between items-center text-[var(--color-white)] py-2 px-3 transition-all duration-400 z-3'>
                            <a href="https://technoneon.com/" class='group relative size-10 sm:size-11 rounded-xl flex border-2 border-[var(--color-white)] transition-all duration-700 hover:bg-[var(--color-primary-3rd)] hover:border-[var(--color-primary-3rd)] overflow-hidden'>
                                <svg class='absolute top-[7px] sm:top-[10px] left-3 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-10 group-hover:-translate-y-10' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                                <svg class='absolute top-[39px] sm:top-[40px] right-10 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-7 group-hover:-translate-y-7' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                            </a>
                            <div class='flex flex-col gap-4 text-left mb-4'>
                                <span class='text-xs sm:text-base'> تکنو نعون </span>
                                <a href="https://technoneon.com/" class='text-xs sm:text-xl font-bold transition-all duration-500 hover:text-[var(--color-primary-3rd)]'> فروشگاه تخصصی تجهیزات و قطعات گیمینگ </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
<!--  -->
<!--  -->
<!--  -->

        <div id="portfolio" class='w-11/12 mx-auto flex flex-col gap-5 mb-15'>
            <div class='w-full flex flex-col gap-5 justify-center text-center'>
                <span class='text-[var(--color-primary-3rd)] font-bold text-base'> آخرین نمونه کارها </span>
                <h2 class='text-[var(--color-heading)] text-[4vw] md:text-[3vw] lg:text-[2vw] font-bold'> پیاده‌سازی سیستم‌های قدرتمند و قابل اعتماد </h2>
                <p class='text-[var(--color-gray)] text-sm'> هر پروژه‌ای که توسعه می‌دهم، بر اساس اصول معماری تمیز (Clean Architecture) و با تمرکز بر امنیت، کارایی و قابلیت نگهداری بالا طراحی شده است. </p>
            </div>
            <div class='w-full mx-auto flex flex-wrap gap-3 items-center justify-center'>
                <span data-filter="all" class='Portfolios py-3 sm:px-5 px-3 cursor-pointer flex text-center items-center text-[var(--color-white)] rounded-3xl bg-[var(--color-primary-3rd)] shadow-md shadow-gray-800 border-2 border-[var(--color-primary-3rd)] transition-all duration-400'> همه </span>
                <span data-filter="shop" class='Portfolios py-3 sm:px-5 px-3 cursor-pointer flex text-center items-center text-[var(--color-white)] rounded-3xl bg-[var(--color-gray-2)] shadow-md shadow-gray-800 border-2 border-[var(--color-primary-3rd)] transition-all duration-400'> فروشگاهی </span>
                <span data-filter="company" class='Portfolios py-3 sm:px-5 px-3 cursor-pointer flex text-center items-center text-[var(--color-white)] rounded-3xl bg-[var(--color-gray-2)] shadow-md shadow-gray-800 border-2 border-[var(--color-primary-3rd)] transition-all duration-400'> شرکتی </span>
                <span data-filter="resume" class='Portfolios py-3 sm:px-5 px-3 cursor-pointer flex text-center items-center text-[var(--color-white)] rounded-3xl bg-[var(--color-gray-2)] shadow-md shadow-gray-800 border-2 border-[var(--color-primary-3rd)] transition-all duration-400'> رزومه ای </span>
            </div>
            <div class="h-[50%] hidden md:grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4 overflow-hidden">
                <div class='portfolio-item shop min-w-full h-60 flex flex-col gap-3'>
                    <div class='relative group/card w-[100%] h-[100%] rounded-2xl object-cover overflow-hidden'>
                        <img class='z-1 object-cover w-full h-full' src="assets/img/caffegreen.webp" alt="">
                        <div class='absolute w-full h-full top-0 transition-all duration-600 opacity-0 group-hover/card:opacity-80 z-1' style="background:  linear-gradient(0deg,rgba(0, 0, 0, 1) 30%, rgba(0, 0, 0, 0) 70%)"></div>
                        <div class='absolute -bottom-5 w-full flex justify-between items-center text-[var(--color-white)] py-2 px-3 transition-all duration-400 opacity-0 group-hover/card:bottom-0 group-hover/card:opacity-100 z-3'>
                            <a href="https://caffegreen.com/" class='group relative size-11 rounded-xl flex border-2 border-[var(--color-white)] transition-all duration-700 hover:bg-[var(--color-primary-3rd)] hover:border-[var(--color-primary-3rd)] overflow-hidden'>
                                <svg class='absolute top-[10px] left-3 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-10 group-hover:-translate-y-10' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                                <svg class='absolute top-[40px] right-10 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-7 group-hover:-translate-y-7' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                            </a>
                            <div class='flex flex-col gap-4 text-left mb-4'>
                                <span class='text-base'> کافه گرین  </span>
                                <a href="https://caffegreen.com/" class='text-xl font-bold transition-all duration-500 hover:text-[var(--color-primary-3rd)]'> منو و خدمات آنلاین </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='portfolio-item resume min-w-full h-60 flex flex-col gap-3'>
                    <div class='relative group/card w-[100%] h-[100%] rounded-2xl object-cover overflow-hidden'>
                        <img class='z-1 object-cover w-full h-full' src="assets/img/mrsimy.webp" alt="">
                        <div class='absolute w-full h-full top-0 transition-all duration-600 opacity-0 group-hover/card:opacity-80 z-1' style="background:  linear-gradient(0deg,rgba(0, 0, 0, 1) 30%, rgba(0, 0, 0, 0) 70%)"></div>
                        <div class='absolute -bottom-5 w-full flex justify-between items-center text-[var(--color-white)] py-2 px-3 transition-all duration-400 opacity-0 group-hover/card:bottom-0 group-hover/card:opacity-100 z-3'>
                            <a href="https://mrshimy.ir/" class='group relative size-11 rounded-xl flex border-2 border-[var(--color-white)] transition-all duration-700 hover:bg-[var(--color-primary-3rd)] hover:border-[var(--color-primary-3rd)] overflow-hidden'>
                                <svg class='absolute top-[10px] left-3 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-10 group-hover:-translate-y-10' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                                <svg class='absolute top-[40px] right-10 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-7 group-hover:-translate-y-7' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                            </a>
                            <div class='flex flex-col gap-4 text-left mb-4'>
                                <span class='text-base'> سایت مستر شیمی </span>
                                <a href="https://mrshimy.ir/" class='text-xl font-bold transition-all duration-500 hover:text-[var(--color-primary-3rd)]'> سایت تخصصی آموزش شیمی  </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='portfolio-item shop min-w-full h-60 flex flex-col gap-3'>
                    <div class='relative group/card w-[100%] h-[100%] rounded-2xl object-cover overflow-hidden'>
                        <img class='z-1 object-cover w-full h-full' src="assets/img/vafadarteb.webp" alt="">
                        <div class='absolute w-full h-full top-0 transition-all duration-600 opacity-0 group-hover/card:opacity-80 z-1' style="background:  linear-gradient(0deg,rgba(0, 0, 0, 1) 30%, rgba(0, 0, 0, 0) 70%)"></div>
                        <div class='absolute -bottom-5 w-full flex justify-between items-center text-[var(--color-white)] py-2 px-3 transition-all duration-400 opacity-0 group-hover/card:bottom-0 group-hover/card:opacity-100 z-3'>
                            <a href="https://vafadarteb.com/" class='group relative size-11 rounded-xl flex border-2 border-[var(--color-white)] transition-all duration-700 hover:bg-[var(--color-primary-3rd)] hover:border-[var(--color-primary-3rd)] overflow-hidden'>
                                <svg class='absolute top-[10px] left-3 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-10 group-hover:-translate-y-10' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                                <svg class='absolute top-[40px] right-10 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-7 group-hover:-translate-y-7' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                            </a>
                            <div class='flex flex-col gap-4 text-left mb-4'>
                                <span class='text-base'> سایت تجهیزات پزشکی وفادار </span>
                                <a href="https://vafadarteb.com/" class='text-xl font-bold transition-all duration-500 hover:text-[var(--color-primary-3rd)]'> سایت فروشگاهی وفادار طب  </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='portfolio-item company min-w-full h-60 flex flex-col gap-3'>
                    <div class='relative group/card w-[100%] h-[100%] rounded-2xl object-cover overflow-hidden'>
                        <img class='z-1 object-cover w-full h-full' src="assets/img/ringa.webp" alt="">
                        <div class='absolute w-full h-full top-0 transition-all duration-600 opacity-0 group-hover/card:opacity-80 z-1' style="background:  linear-gradient(0deg,rgba(0, 0, 0, 1) 30%, rgba(0, 0, 0, 0) 70%)"></div>
                        <div class='absolute -bottom-5 w-full flex justify-between items-center text-[var(--color-white)] py-2 px-3 transition-all duration-400 opacity-0 group-hover/card:bottom-0 group-hover/card:opacity-100 z-3'>
                            <a href="https://rinso.ir/" class='group relative size-11 rounded-xl flex border-2 border-[var(--color-white)] transition-all duration-700 hover:bg-[var(--color-primary-3rd)] hover:border-[var(--color-primary-3rd)] overflow-hidden'>
                                <svg class='absolute top-[10px] left-3 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-10 group-hover:-translate-y-10' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                                <svg class='absolute top-[40px] right-10 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-7 group-hover:-translate-y-7' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                            </a>
                            <div class='flex flex-col gap-4 text-left mb-4'>
                                <span class='text-base'> سوپر اپلیکیشن رینسو </span>
                                <a href="https://rinso.ir/" class='text-xl font-bold transition-all duration-500 hover:text-[var(--color-primary-3rd)]'> پلتفرم چند منظوره برای کسب‌وکار ها </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='portfolio-item company min-w-full h-60 flex flex-col gap-3'>
                    <div class='relative group/card w-[100%] h-[100%] rounded-2xl object-cover overflow-hidden'>
                        <img class='z-1 object-cover w-full h-full' src="assets/img/rinTeach.webp" alt="">
                        <div class='absolute w-full h-full top-0 transition-all duration-600 opacity-0 group-hover/card:opacity-80 z-1' style="background:  linear-gradient(0deg,rgba(0, 0, 0, 1) 30%, rgba(0, 0, 0, 0) 70%)"></div>
                        <div class='absolute -bottom-5 w-full flex justify-between items-center text-[var(--color-white)] py-2 px-3 transition-all duration-400 opacity-0 group-hover/card:bottom-0 group-hover/card:opacity-100 z-3'>
                            <a href='https://rinteach.ir/' class='group relative size-11 rounded-xl flex border-2 border-[var(--color-white)] transition-all duration-700 hover:bg-[var(--color-primary-3rd)] hover:border-[var(--color-primary-3rd)] overflow-hidden'>
                                <svg class='absolute top-[10px] left-3 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-10 group-hover:-translate-y-10' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                                <svg class='absolute top-[40px] right-10 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-7 group-hover:-translate-y-7' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                            </a>
                            <div class='flex flex-col gap-4 text-left mb-4'>
                                <span class='text-base'> رین تیچ </span>
                                <a href="https://rinteach.ir/" class='text-xl font-bold transition-all duration-500 hover:text-[var(--color-primary-3rd)]'> خدمات تخصصی ویژه آموزشگاه ها</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='portfolio-item company min-w-full h-60 flex flex-col gap-3'>
                    <div class='relative group/card w-[100%] h-[100%] rounded-2xl object-cover overflow-hidden'>
                        <img class='z-1 object-cover w-full h-full' src="assets/img/shahkarpng.webp" alt="">
                        <div class='absolute w-full h-full top-0 transition-all duration-600 opacity-0 group-hover/card:opacity-80 z-1' style="background:  linear-gradient(0deg,rgba(0, 0, 0, 1) 30%, rgba(0, 0, 0, 0) 70%)"></div>
                        <div class='absolute -bottom-5 w-full flex justify-between items-center text-[var(--color-white)] py-2 px-3 transition-all duration-400 opacity-0 group-hover/card:bottom-0 group-hover/card:opacity-100 z-3'>
                            <a href="https://shahkar.art/" class='group relative size-11 rounded-xl flex border-2 border-[var(--color-white)] transition-all duration-700 hover:bg-[var(--color-primary-3rd)] hover:border-[var(--color-primary-3rd)] overflow-hidden'>
                                <svg class='absolute top-[10px] left-3 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-10 group-hover:-translate-y-10' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                                <svg class='absolute top-[40px] right-10 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-7 group-hover:-translate-y-7' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                            </a>
                            <div class='flex flex-col gap-4 text-left mb-4'>
                                <span class='text-base'> وبسایت برای چاپخانه </span>
                                <a href="https://shahkar.art/" class='text-xl font-bold transition-all duration-500 hover:text-[var(--color-primary-3rd)]'> وب سایت چاپخانه و ثبت سفارش </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='portfolio-item company min-w-full h-60 flex flex-col gap-3'>
                    <div class='relative group/card w-[100%] h-[100%] rounded-2xl object-cover overflow-hidden'>
                        <img class='z-1 object-cover w-full h-full' src="assets/img/taskup.webp" alt="">
                        <div class='absolute w-full h-full top-0 transition-all duration-600 opacity-0 group-hover/card:opacity-80 z-1' style="background:  linear-gradient(0deg,rgba(0, 0, 0, 1) 30%, rgba(0, 0, 0, 0) 70%)"></div>
                        <div class='absolute -bottom-5 w-full flex justify-between items-center text-[var(--color-white)] py-2 px-3 transition-all duration-400 opacity-0 group-hover/card:bottom-0 group-hover/card:opacity-100 z-3'>
                            <a href='https://taskbonab.ir/' class='group relative size-11 rounded-xl flex border-2 border-[var(--color-white)] transition-all duration-700 hover:bg-[var(--color-primary-3rd)] hover:border-[var(--color-primary-3rd)] overflow-hidden'>
                                <svg class='absolute top-[10px] left-3 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-10 group-hover:-translate-y-10' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                                <svg class='absolute top-[40px] right-10 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-7 group-hover:-translate-y-7' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                            </a>
                            <div class='flex flex-col gap-4 text-left mb-4'>
                                <span class='text-base'> تسک بناب </span>
                                <a href='https://taskbonab.ir/' class='text-xl font-bold transition-all duration-500 hover:text-[var(--color-primary-3rd)]'> سامانه جامع ارتباط اساتید و دانشجویان دانشگاه بناب </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='portfolio-item shop min-w-full h-60 flex flex-col gap-3'>
                    <div class='relative group/card w-[100%] h-[100%] rounded-2xl object-cover overflow-hidden'>
                        <img class='z-1 object-cover w-full h-full' src="assets/img/technoneon.webp" alt="">
                        <div class='absolute w-full h-full top-0 transition-all duration-600 opacity-0 group-hover/card:opacity-80 z-1' style="background:  linear-gradient(0deg,rgba(0, 0, 0, 1) 30%, rgba(0, 0, 0, 0) 70%)"></div>
                        <div class='absolute -bottom-5 w-full flex justify-between items-center text-[var(--color-white)] py-2 px-3 transition-all duration-400 opacity-0 group-hover/card:bottom-0 group-hover/card:opacity-100 z-3'>
                            <a href="https://technoneon.com/" class='group relative size-11 rounded-xl flex border-2 border-[var(--color-white)] transition-all duration-700 hover:bg-[var(--color-primary-3rd)] hover:border-[var(--color-primary-3rd)] overflow-hidden'>
                                <svg class='absolute top-[10px] left-3 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-10 group-hover:-translate-y-10' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                                <svg class='absolute top-[40px] right-10 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-7 group-hover:-translate-y-7' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                            </a>
                            <div class='flex flex-col gap-4 text-left mb-4'>
                                <span class='text-base'> تکنو نعون</span>
                                <a href="https://technoneon.com/" class='text-xl font-bold transition-all duration-500 hover:text-[var(--color-primary-3rd)]'> فروشگاه تخصصی تجهیزات و قطعات گیمینگ </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-[50%] md:hidden flex gap-4 overflow-x-auto">
                <div class='portfolio-item shop max-w-2/3 min-w-2/3 sm:min-w-1/2 flex flex-col gap-3'>
                    <div class='relative group/card w-[100%] h-[100%] rounded-2xl object-cover overflow-hidden'>
                        <img class='z-1 object-cover w-full h-full' src="assets/img/caffegreen.webp" alt="">
                        <div class='absolute w-full h-full top-0 transition-all duration-80 z-1 opacity-60' style="background: linear-gradient(0deg,rgba(0, 0, 0, 1) 30%, rgba(0, 0, 0, 0) 70%);"></div>
                        <div class='absolute bottom-0 w-full flex justify-between items-center text-[var(--color-white)] py-2 px-3 transition-all duration-400 z-3'>
                            <a href="https://caffegreen.com/" class='group relative size-10 sm:size-11 rounded-xl flex border-2 border-[var(--color-white)] transition-all duration-700 hover:bg-[var(--color-primary-3rd)] hover:border-[var(--color-primary-3rd)] overflow-hidden'>
                                <svg class='absolute top-[7px] sm:top-[10px] left-3 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-10 group-hover:-translate-y-10' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                                <svg class='absolute top-[39px] sm:top-[40px] right-10 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-7 group-hover:-translate-y-7' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                            </a>
                            <div class='flex flex-col gap-4 text-left mb-4'>
                                <span class='text-xs sm:text-base'> کافه گرین  </span>
                                <a href="https://caffegreen.com/" class='text-xs sm:text-xl font-bold transition-all duration-500 hover:text-[var(--color-primary-3rd)]'> منو و خدمات آنلاین </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='portfolio-item resume max-w-2/3 min-w-2/3 sm:min-w-1/2 flex flex-col gap-3'>
                    <div class='relative group/card w-[100%] h-[100%] rounded-2xl object-cover overflow-hidden'>
                        <img class='z-1 object-cover w-full h-full' src="assets/img/mrsimy.webp" alt="">
                        <div class='absolute w-full h-full top-0 transition-all duration-80 z-1 opacity-80' style="background:  linear-gradient(0deg,rgba(0, 0, 0, 1) 30%, rgba(0, 0, 0, 0) 70%);"></div>
                        <div class='absolute bottom-0 w-full flex justify-between items-center text-[var(--color-white)] py-2 px-3 transition-all duration-400 z-3'>
                            <a href="https://mrshimy.ir/" class='group relative size-10 sm:size-11 rounded-xl flex border-2 border-[var(--color-white)] transition-all duration-700 hover:bg-[var(--color-primary-3rd)] hover:border-[var(--color-primary-3rd)] overflow-hidden'>
                                <svg class='absolute top-[7px] sm:top-[10px] left-3 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-10 group-hover:-translate-y-10' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                                <svg class='absolute top-[39px] sm:top-[40px] right-10 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-7 group-hover:-translate-y-7' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                            </a>
                            <div class='flex flex-col gap-4 text-left mb-4'>
                                <span class='text-xs sm:text-base'> سایت مستر شیمی  </span>
                                <a href="https://mrshimy.ir/" class='text-xs sm:text-xl font-bold transition-all duration-500 hover:text-[var(--color-primary-3rd)]'>  سایت تخصصی آموزش شیمی </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='portfolio-item company max-w-2/3 min-w-2/3 sm:min-w-1/2 flex flex-col gap-3'>
                    <div class='relative group/card w-[100%] h-[100%] rounded-2xl object-cover overflow-hidden'>
                        <img class='z-1 object-cover w-full h-full' src="assets/img/ringa.webp" alt="">
                        <div class='absolute w-full h-full top-0 transition-all duration-80 z-1 opacity-80' style="background:  linear-gradient(0deg,rgba(0, 0, 0, 1) 30%, rgba(0, 0, 0, 0) 70%);"></div>
                        <div class='absolute bottom-0 w-full flex justify-between items-center text-[var(--color-white)] py-2 px-3 transition-all duration-400 z-3'>
                            <a href="https://rinso.ir/" class='group relative size-10 sm:size-11 rounded-xl flex border-2 border-[var(--color-white)] transition-all duration-700 hover:bg-[var(--color-primary-3rd)] hover:border-[var(--color-primary-3rd)] overflow-hidden'>
                                <svg class='absolute top-[7px] sm:top-[10px] left-3 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-10 group-hover:-translate-y-10' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                                <svg class='absolute top-[39px] sm:top-[40px] right-10 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-7 group-hover:-translate-y-7' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                            </a>
                            <div class='flex flex-col gap-4 text-left mb-4'>
                                <span class='text-xs sm:text-base'> سوپر اپلیکیشن رینسو  </span>
                                <a href="https://rinso.ir/" class='text-xs sm:text-xl font-bold transition-all duration-500 hover:text-[var(--color-primary-3rd)]'> پلتفرم چند منظوره برای کسب‌وکار ها </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='portfolio-item company max-w-2/3 min-w-2/3 sm:min-w-1/2 flex flex-col gap-3'>
                    <div class='relative group/card w-[100%] h-[100%] rounded-2xl object-cover overflow-hidden'>
                        <img class='z-1 object-cover w-full h-full' src="assets/img/rinTeach.webp" alt="">
                        <div class='absolute w-full h-full top-0 transition-all duration-80 z-1 opacity-80' style="background:  linear-gradient(0deg,rgba(0, 0, 0, 1) 30%, rgba(0, 0, 0, 0) 70%);"></div>
                        <div class='absolute bottom-0 w-full flex justify-between items-center text-[var(--color-white)] py-2 px-3 transition-all duration-400 z-3'>
                            <a href="https://rinteach.ir/" class='group relative size-10 sm:size-11 rounded-xl flex border-2 border-[var(--color-white)] transition-all duration-700 hover:bg-[var(--color-primary-3rd)] hover:border-[var(--color-primary-3rd)] overflow-hidden'>
                                <svg class='absolute top-[7px] sm:top-[10px] left-3 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-10 group-hover:-translate-y-10' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                                <svg class='absolute top-[39px] sm:top-[40px] right-10 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-7 group-hover:-translate-y-7' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                            </a>
                            <div class='flex flex-col gap-4 text-left mb-4'>
                                <span class='text-xs sm:text-base'> رین تیچ  </span>
                                <a href="https://rinteach.ir/" class='text-xs sm:text-xl font-bold transition-all duration-500 hover:text-[var(--color-primary-3rd)]'>خدمات تخصصی ویژه آموزشگاه ها</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='portfolio-item company max-w-2/3 min-w-2/3 sm:min-w-1/2 flex flex-col gap-3'>
                    <div class='relative group/card w-[100%] h-[100%] rounded-2xl object-cover overflow-hidden'>
                        <img class='z-1 object-cover w-full h-full' src="assets/img/shahkarpng.webp" alt="">
                        <div class='absolute w-full h-full top-0 transition-all duration-80 z-1 opacity-80' style="background:  linear-gradient(0deg,rgba(0, 0, 0, 1) 30%, rgba(0, 0, 0, 0) 70%);"></div>
                        <div class='absolute bottom-0 w-full flex justify-between items-center text-[var(--color-white)] py-2 px-3 transition-all duration-400 z-3'>
                            <a href="https://shahkar.art/" class='group relative size-10 sm:size-11 rounded-xl flex border-2 border-[var(--color-white)] transition-all duration-700 hover:bg-[var(--color-primary-3rd)] hover:border-[var(--color-primary-3rd)] overflow-hidden'>
                                <svg class='absolute top-[7px] sm:top-[10px] left-3 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-10 group-hover:-translate-y-10' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                                <svg class='absolute top-[39px] sm:top-[40px] right-10 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-7 group-hover:-translate-y-7' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                            </a>
                            <div class='flex flex-col gap-4 text-left mb-4'>
                                <span class='text-xs sm:text-base'> وبسایت برای چاپخانه  </span>
                                <a href="https://shahkar.art/" class='text-xs sm:text-xl font-bold transition-all duration-500 hover:text-[var(--color-primary-3rd)]'> وبسایت برای چاپخانه وثبت سفارش</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='portfolio-item company max-w-2/3 min-w-2/3 sm:min-w-1/2 flex flex-col gap-3'>
                    <div class='relative group/card w-[100%] h-[100%] rounded-2xl object-cover overflow-hidden'>
                        <img class='z-1 object-cover w-full h-full' src="assets/img/taskup.webp" alt="">
                        <div class='absolute w-full h-full top-0 transition-all duration-80 z-1 opacity-80' style="background:  linear-gradient(0deg,rgba(0, 0, 0, 1) 30%, rgba(0, 0, 0, 0) 70%);"></div>
                        <div class='absolute bottom-0 w-full flex justify-between items-center text-[var(--color-white)] py-2 px-3 transition-all duration-400 z-3'>
                            <a href="https://taskbonab.ir/" class='group relative size-10 sm:size-11 rounded-xl flex border-2 border-[var(--color-white)] transition-all duration-700 hover:bg-[var(--color-primary-3rd)] hover:border-[var(--color-primary-3rd)] overflow-hidden'>
                                <svg class='absolute top-[7px] sm:top-[10px] left-3 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-10 group-hover:-translate-y-10' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                                <svg class='absolute top-[39px] sm:top-[40px] right-10 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-7 group-hover:-translate-y-7' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                            </a>
                            <div class='flex flex-col gap-4 text-left mb-4'>
                                <span class='text-xs sm:text-base'> تسک بناب  </span>
                                <a href="https://taskbonab.ir/" class='text-xs sm:text-xl font-bold transition-all duration-500 hover:text-[var(--color-primary-3rd)]'> سامانه جامع ارتباط اساتید دانشگاه بناب </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='portfolio-item shop max-w-2/3 min-w-2/3 sm:min-w-1/2 flex flex-col gap-3'>
                    <div class='relative group/card w-[100%] h-[100%] rounded-2xl object-cover overflow-hidden'>
                        <img class='z-1 object-cover w-full h-full' src="assets/img/technoneon.webp" alt="">
                        <div class='absolute w-full h-full top-0 transition-all duration-80 z-1 opacity-80' style="background:  linear-gradient(0deg,rgba(0, 0, 0, 1) 30%, rgba(0, 0, 0, 0) 70%);"></div>
                        <div class='absolute bottom-0 w-full flex justify-between items-center text-[var(--color-white)] py-2 px-3 transition-all duration-400 z-3'>
                            <a href="https://technoneon.com/" class='group relative size-10 sm:size-11 rounded-xl flex border-2 border-[var(--color-white)] transition-all duration-700 hover:bg-[var(--color-primary-3rd)] hover:border-[var(--color-primary-3rd)] overflow-hidden'>
                                <svg class='absolute top-[7px] sm:top-[10px] left-3 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-10 group-hover:-translate-y-10' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                                <svg class='absolute top-[39px] sm:top-[40px] right-10 rotate-45 w-4 fill-[var(--color-white)] transition-all duration-400 group-hover:translate-x-7 group-hover:-translate-y-7' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M209.4 39.4C204.8 34.7 198.6 32 192 32s-12.8 2.7-17.4 7.4l-168 176c-9.2 9.6-8.8 24.8 .8 33.9s24.8 8.8 33.9-.8L168 115.9V456c0 13.3 10.7 24 24 24s24-10.7 24-24V115.9L342.6 248.6c9.2 9.6 24.3 9.9 33.9 .8s9.9-24.3 .8-33.9l-168-176z"/></svg>
                            </a>
                            <div class='flex flex-col gap-4 text-left mb-4'>
                                <span class='text-xs sm:text-base'> تکنو نعون </span>
                                <a href="https://technoneon.com/" class='text-xs sm:text-xl font-bold transition-all duration-500 hover:text-[var(--color-primary-3rd)]'> فروشگاه تخصصی تجهیزات و قطعات گیمینگ </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




<!--         
        <div class='w-11/12 mx-auto'>
            <div class='w-full flex flex-col gap-5'>
                <span class='text-[var(--color-primary-3rd)] font-bold text-base'> تخصص من </span>
                <h2 class='text-[var(--color-heading)] text-[4vw] md:text-[3vw] lg:text-[2vw] font-bold'> ساختارهای قدرتمند، بهترین عملکرد را برای سیستم‌های شما به ارمغان می‌آورند </h2>
                <p class='text-[var(--color-gray)] text-sm'> با تکیه بر دانش عمیق در معماری نرم‌افزار، دیتابیس و طراحی API، سیستم‌هایی می‌سازم که هم پایدار و هم مقیاس‌پذیر هستند. </p>
            </div>
        </div>


        <div class="my-container" id="container">
            <div class="my-box w-full rounded-2xl flex flex-col text-[var(--color-white)] justify-between py-10 items-center text-center " data-index="0">
                <div class='flex flex-col justify-center items-center gap-7'>
                    <div class='size-15 bg-[var(--color-gray-2)] rounded-full flex justify-center items-center p-3'>
                        <svg class='w-11/12' viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M44.1041 39.9311H36.0101V21.3364H39.863C40.299 21.3364 40.6523 20.983 40.6523 20.5471V17.8211H44.1911H44.1933C44.6292 17.8211 44.9826 17.4677 44.9826 17.0318C44.9826 16.7558 44.841 16.5129 44.6265 16.3718L22.9701 0.211344C22.6899 0.00246876 22.306 0.00246876 22.0259 0.211344L0.33291 16.3992C0.0603851 16.6026 -0.0512899 16.9577 0.0558851 17.2805C0.16301 17.6032 0.464935 17.8211 0.804985 17.8211H4.34371V20.5471C4.34371 20.9831 4.69708 21.3364 5.13301 21.3364H8.98588V39.9311H0.892085C0.456135 39.9311 0.102785 40.2843 0.102785 40.7204V44.159C0.102785 44.5948 0.456135 44.9483 0.892085 44.9483H44.1041C44.54 44.9483 44.8934 44.5948 44.8934 44.159V40.7204C44.8934 40.2843 44.54 39.9311 44.1041 39.9311ZM22.4979 1.82882L41.8136 16.2425H3.18243L22.4979 1.82882ZM32.5716 39.9044V21.6803H34.4315V39.9044H32.5716ZM30.9931 39.9311H25.0066V21.3364H30.9931V39.9311ZM21.5679 21.6803V39.9044H23.428V21.6803H21.5679ZM5.92228 17.8978H39.0738V19.7578H5.92228V17.8978ZM12.4245 21.6803V39.9044H10.5645V21.6803H12.4245ZM14.0031 21.3364H19.9893V39.931H14.0031V21.3364ZM43.3148 43.3697H1.68136V41.5097H43.3148V43.3697Z" fill="white"/></svg>
                    </div>
                    <h3 class='text-2xl font-bold'> PHP / Laravel </h3>
                </div>
                <div class='my-10 size-21 rounded-full border-1 border-[var(--color-white)] flex text-center items-center justify-center bg-transparent '>
                    <span class='font-bold text-[var(--color-white)]'> ۹۰% </span>
                </div>
                <p class='text-base w-10/12'>
                    تسلط کامل بر فریمورک Laravel و زبان PHP برای پیاده‌سازی سیستم‌های پیچیده، APIهای RESTful و معماری MVC.
                </p>
            </div>
            <div class="my-box w-full rounded-2xl flex flex-col text-[var(--color-white)] justify-between py-10 items-center text-center " data-index="1">
                <div class='flex flex-col justify-center items-center gap-7'>
                    <div class='size-15 bg-[var(--color-gray-2)] rounded-full flex justify-center items-center p-3'>
                        <svg class='w-11/12' viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_2_5215)"><path d="M42.8975 0.117188H2.10504C1.00891 0.117188 0.117188 1.00881 0.117188 2.10471V42.8975C0.117188 43.9934 1.00891 44.8851 2.10504 44.8851H42.8975C43.9934 44.8851 44.885 43.9934 44.885 42.8975V2.10471C44.885 1.00881 43.9934 0.117188 42.8975 0.117188ZM42.8975 43.3131H2.10504C1.87574 43.3131 1.68921 43.1266 1.68921 42.8975V37.9673L16.3923 23.2642L30.6771 37.5492C30.8306 37.7026 31.0317 37.7794 31.2329 37.7794C31.434 37.7794 31.6353 37.7026 31.7888 37.5492C32.0957 37.2422 32.0957 36.7445 31.7888 36.4375L16.9481 21.5968C16.7946 21.4433 16.5934 21.3666 16.3923 21.3666C16.1911 21.3666 15.99 21.4433 15.8365 21.5968L1.68921 35.744V2.10471C1.68921 1.87564 1.87574 1.68924 2.10504 1.68924H42.8975C43.1266 1.68924 43.313 1.87564 43.313 2.10471V35.4229L29.487 21.5968C29.4294 21.5393 29.3652 21.4926 29.2967 21.4565C29.0002 21.3006 28.6247 21.3474 28.3753 21.5968L25.2875 24.6849C24.9806 24.9918 24.9806 25.4894 25.2876 25.7965C25.441 25.9499 25.6422 26.0266 25.8433 26.0266C26.0444 26.0266 26.2456 25.9499 26.3991 25.7963L28.9311 23.2643L43.2159 37.5492C43.2464 37.5796 43.2792 37.6062 43.313 37.6306V42.8975C43.313 43.1266 43.1266 43.3131 42.8975 43.3131Z" fill="white"/><path d="M27.2219 14.0056C27.2219 11.5643 25.2359 9.57812 22.7946 9.57812C20.3533 9.57812 18.3672 11.5643 18.3672 14.0056C18.3672 16.4469 20.3533 18.433 22.7946 18.433C25.2358 18.433 27.2219 16.4469 27.2219 14.0056ZM22.7946 16.861C21.2201 16.861 19.9392 15.5801 19.9392 14.0056C19.9392 12.4311 21.2201 11.1502 22.7946 11.1502C24.369 11.1502 25.6499 12.4311 25.6499 14.0056C25.6499 15.5801 24.369 16.861 22.7946 16.861Z" fill="white"/></g><defs><clipPath id="clip0_2_5215"><rect width="45" height="45" fill="white"/></clipPath></defs></svg>
                    </div>
                    <h3 class='text-2xl font-bold'> MySQL / PostgreSQL </h3>
                </div>
                <div class='my-10 size-21 rounded-full border-1 border-[var(--color-white)] flex text-center items-center justify-center bg-transparent '>
                    <span class='font-bold text-[var(--color-white)]'> ۸۵% </span>
                </div>
                <p class='text-base w-10/12'>
                    طراحی دیتابیس‌های رابطه‌ای بهینه، نوشتن کوئری‌های پیچیده، ایندکس‌گذاری و بهینه‌سازی عملکرد برای حجم بالای داده.
                </p>
            </div>
            <div class="my-box w-full rounded-2xl flex flex-col text-[var(--color-white)] justify-between py-10 items-center text-center " data-index="2">
                <div class='flex flex-col justify-center items-center gap-7'>
                    <div class='size-15 bg-[var(--color-gray-2)] rounded-full flex justify-center items-center p-3'>
                        <svg class='w-11/12' viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M29.6376 38.6691H15.36C14.9281 38.6691 14.5781 38.3191 14.5781 37.8873C14.5781 37.4555 14.9281 37.1055 15.36 37.1055H29.6376C30.0694 37.1055 30.4194 37.4555 30.4194 37.8873C30.4194 38.3191 30.0694 38.6691 29.6376 38.6691Z" fill="white"/><path d="M39.532 4.77091H26.2825V2.39559C26.2825 1.22544 25.3305 0.273438 24.1603 0.273438H20.8375C19.6674 0.273438 18.7154 1.22544 18.7154 2.39559V4.77089H5.4659C4.29573 4.77089 3.34375 5.72289 3.34375 6.89304V42.6047C3.34375 43.7749 4.29575 44.7269 5.4659 44.7269H39.532C40.7021 44.7269 41.6541 43.7749 41.6541 42.6047V6.89306C41.6541 5.72289 40.7021 4.77091 39.532 4.77091ZM20.2791 2.39559C20.2791 2.08766 20.5296 1.83711 20.8375 1.83711H24.1603C24.4682 1.83711 24.7188 2.08766 24.7188 2.39559V4.77089V6.33456V9.54386C24.7188 9.85176 24.4683 10.1023 24.1603 10.1023H20.8375C20.5296 10.1023 20.2791 9.85179 20.2791 9.54386V6.33459V4.77091V2.39559ZM40.0904 42.6048C40.0904 42.9127 39.8399 43.1632 39.532 43.1632H5.4659C5.15798 43.1632 4.90742 42.9127 4.90742 42.6048V6.89306C4.90742 6.58514 5.15798 6.33459 5.4659 6.33459H18.7154V9.54389C18.7154 10.714 19.6674 11.666 20.8375 11.666H24.1604C25.3305 11.666 26.2825 10.714 26.2825 9.54389V6.33459H39.532C39.8399 6.33459 40.0905 6.58514 40.0905 6.89306L40.0904 42.6048Z" fill="white"/><path d="M24.3938 29.048V28.8588C25.8403 28.1971 26.8656 26.8253 27.0888 25.2545C27.6987 25.0333 28.1287 24.4441 28.1287 23.777C28.1287 23.2027 27.8185 22.6887 27.3384 22.4145C27.3883 22.2581 27.4294 22.1003 27.461 21.9428C27.7164 20.676 27.4254 19.3813 26.6416 18.2971C25.8705 17.2305 24.7114 16.495 23.3779 16.226C23.0192 16.1538 22.6536 16.1172 22.2911 16.1172C21.1473 16.1172 20.0314 16.486 19.1488 17.1557C18.24 17.8453 17.6185 18.8251 17.3988 19.9145C17.2322 20.7406 17.3002 21.5927 17.5947 22.3922C17.0956 22.6605 16.7651 23.1878 16.7651 23.7772C16.7651 24.4531 17.2016 25.0443 17.8205 25.2604C18.0498 26.8686 19.1085 28.2534 20.6026 28.8988V29.0481C17.4992 29.7511 15.3594 32.0724 15.3594 34.7849V35.5094H18.0603V35.5081H18.3602V35.5094H29.637V34.7849C29.637 32.0723 27.4972 29.7511 24.3938 29.048ZM22.2911 17.5661C22.5572 17.5661 22.8266 17.5932 23.0917 17.6464C24.0666 17.8432 24.9103 18.3757 25.4673 19.1462C25.9867 19.8643 26.1959 20.709 26.0622 21.538C25.3493 21.2052 24.4121 20.8534 23.4263 20.7184C21.5733 20.4651 21.5436 20.3789 21.4333 20.0587L21.0794 19.0349L20.2657 19.755C20.1791 19.8311 19.5234 20.4075 18.7668 21.0345C18.7459 20.7563 18.7633 20.4775 18.8192 20.2007C19.127 18.6741 20.5871 17.5661 22.2911 17.5661ZM19.2212 22.5351C19.7293 22.124 20.2313 21.6995 20.5945 21.388C21.098 21.8421 21.8829 21.9698 23.2298 22.154C24.1434 22.279 25.0393 22.6448 25.6874 22.9662V24.5989C25.6874 26.3818 24.2372 27.832 22.4545 27.832C20.6715 27.832 19.2213 26.3817 19.2213 24.5989V22.5351H19.2212ZM22.0515 29.2631C22.351 29.2896 22.6488 29.2864 22.9448 29.2552V29.7025L22.497 29.9508L22.0515 29.7033V29.2631ZM16.8823 34.0596C17.215 32.437 18.6397 31.0882 20.6026 30.5419V30.5559L22.4957 31.6077L24.3938 30.5564V30.5419C26.3569 31.0882 27.7818 32.4373 28.1141 34.0602L18.3544 34.059V34.0595L16.8823 34.0596Z" fill="white"/></svg>
                    </div>
                    <h3 class='text-2xl font-bold'> RESTful API / GraphQL </h3>
                </div>
                <div class='my-10 size-21 rounded-full border-1 border-[var(--color-white)] flex text-center items-center justify-center bg-transparent '>
                    <span class='font-bold text-[var(--color-white)]'> ۸۰% </span>
                </div>
                <p class='text-base w-10/12'>
                    طراحی و پیاده‌سازی APIهای استاندارد با استفاده از REST و GraphQL، همراه با مستندسازی کامل و تست‌نویسی.
                </p>
            </div>
            <div class="my-floating" id="floating"></div>

        </div> -->


    <div id="testimonials" class='w-11/12 mx-auto flex flex-col gap-5 justify-center text-center mb-15'>
        <span class='text-[var(--color-primary-3rd)] font-bold text-base'> نظرات هم تیمی ها </span>
        <h2 class='text-[var(--color-heading)] text-[4vw] md:text-[3vw] lg:text-[2vw] font-bold'> نظرات هم تیمی ها درباره همکاری با من </h2>
        <p class='text-[var(--color-gray)] text-sm'> نظرات هم تیمی ها قبلی، نشان‌دهنده تعهد من به کیفیت کد، امنیت و تحویل به‌موقع پروژه‌های بک‌اند است. </p>
    </div>
    <div class=' w-11/12 mx-auto flex flex-col gap-5 overflow-hidden mb-15'>
        <div class='slides-wrapper flex transition-transform duration-500 ease-in-out '>

            <div class='slide relative min-w-full bg-[var(--color-gray-2)] border-1 border-[var(--color-border)] p-5 rounded-xl flex flex-col gap-3 cursor-grab'>
                <div class='absolute -top-9 left-7 size-20 p-5 rounded-full border-1 border-[var(--color-border)] bg-[var(--color-gray-2)] flex justify-center items-center'>
                    <svg class='w-full' viewBox="0 0 47 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.021 39.9987C8.10999 39.9955 5.31917 38.8377 3.2608 36.7793C1.20243 34.7209 0.0446391 31.9301 0.0414441 29.0191V28.9642C0.0414441 28.9279 0.03675 28.8736 0.0327265 28.8019C-0.192591 24.8146 0.45922 14.049 11.3516 0.254317C11.4497 0.130424 11.5884 0.0451546 11.7432 0.0135496C11.898 -0.0180553 12.059 0.00603505 12.1978 0.0815711C12.3366 0.157107 12.4443 0.279236 12.5019 0.426413C12.5594 0.57359 12.5631 0.73636 12.5123 0.88601C12.4815 0.97721 9.50477 9.894 11.5387 18.053C14.4034 18.1875 17.1018 19.4374 19.0568 21.5356C21.0119 23.6338 22.0684 26.4137 22.0004 29.2807C21.9324 32.1478 20.7454 34.8745 18.6931 36.8776C16.6408 38.8808 13.8861 40.0015 11.0183 40L11.021 39.9987ZM1.38262 29.0574C1.39004 30.962 1.96162 32.8218 3.0252 34.4019C4.08877 35.9819 5.59666 37.2115 7.35847 37.9352C9.12029 38.659 11.0571 38.8445 12.9242 38.4684C14.7914 38.0922 16.5053 37.1713 17.8495 35.8219C19.1937 34.4725 20.1079 32.755 20.4768 30.8864C20.8456 29.0178 20.6526 27.0817 19.922 25.3228C19.1914 23.5638 17.956 22.0607 16.3718 21.0032C14.7876 19.9458 12.9256 19.3815 11.021 19.3815C10.8741 19.3814 10.7313 19.3332 10.6145 19.2441C10.4978 19.1551 10.4134 19.0302 10.3745 18.8886C8.83217 13.2758 9.58859 7.38802 10.3551 3.81513C1.71523 15.9179 1.17272 25.1559 1.37457 28.7268C1.38368 28.8367 1.38637 28.9471 1.38262 29.0574ZM35.9574 39.9987C33.0464 39.9955 30.2556 38.8377 28.1972 36.7793C26.1389 34.7209 24.9811 31.9301 24.9779 29.0191V28.9642C24.9779 28.9279 24.9732 28.8736 24.9692 28.8019C24.7439 24.8146 25.3957 14.049 36.288 0.254317C36.3861 0.130424 36.5248 0.0451546 36.6796 0.0135496C36.8345 -0.0180553 36.9955 0.00603505 37.1343 0.0815711C37.2731 0.157107 37.3808 0.279236 37.4383 0.426413C37.4958 0.57359 37.4996 0.73636 37.4488 0.88601C37.4179 0.97721 34.4412 9.894 36.4751 18.053C39.3398 18.1875 42.0382 19.4374 43.9933 21.5356C45.9483 23.6338 47.0049 26.4137 46.9369 29.2807C46.8689 32.1478 45.6818 34.8745 43.6295 36.8776C41.5772 38.8808 38.8226 40.0015 35.9547 40L35.9574 39.9987ZM26.3191 29.0574C26.3265 30.962 26.8981 32.8218 27.9616 34.4019C29.0252 35.9819 30.5331 37.2115 32.2949 37.9352C34.0567 38.659 35.9935 38.8445 37.8607 38.4684C39.7278 38.0922 41.4417 37.1713 42.7859 35.8219C44.1301 34.4725 45.0443 32.755 45.4132 30.8864C45.7821 29.0178 45.589 27.0817 44.8584 25.3228C44.1278 23.5638 42.8925 22.0607 41.3083 21.0032C39.7241 19.9458 37.8621 19.3815 35.9574 19.3815C35.8106 19.3814 35.6678 19.3332 35.551 19.2441C35.4342 19.1551 35.3499 19.0302 35.311 18.8886C33.7686 13.2758 34.525 7.38802 35.2915 3.81513C26.6517 15.9179 26.1085 25.1559 26.3103 28.7268C26.3197 28.8367 26.3226 28.9471 26.3191 29.0574Z" fill="#ffffff"/></svg>
                </div>
                <div class='flex flex-col gap-4 mt-10'>
                    <div class='w-full flex gap-5 items-center justify-center'>
                        <div class='size-15 rounded-full overflow-hidden'>
                            <img class='w-full rounded-full object-cover' src="assets/img/team_picture/amir.webp" alt="">
                        </div>
                        <div class='flex flex-col gap-4'>
                            <h3 class='font-bold text-xl text-[var(--color-white)]'> امیر رحمتی </h3>
                            <p class='text-[var(--color-gray)]'> برنامه نویس فول استک</p>
                        </div>
                    </div>
                    <div class='flex gap-1 items-center justify-start'>
                        <svg class="size-6 fill-yellow-400 stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round"viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                        <svg class="size-6 fill-yellow-400 stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round"viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                        <svg class="size-6 fill-yellow-400 stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round"viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                        <svg class="size-6 fill-yellow-400 stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round"viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                        <svg class="size-6 fill-yellow-400 stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round"viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                    </div>
                </div>
                <p class='w-11/12 text-[var(--color-white)]'>
                    "اگه بخوام یه کلمه برای توصیف محمد بگم، می‌گم «متعهد». همیشه به قول‌هاش پایبنده، به موقع تحویل میده و کدهایی که می‌نویسه قابل‌اعتماد و خواناست. توی جمع ۲۵ نفره‌ی ما، قطعاً یکی از تأثیرگذارترین افراد بود."
                </p>
            </div>
            <div class='slide relative min-w-full bg-[var(--color-gray-2)] border-1 border-[var(--color-border)] p-5 rounded-xl flex flex-col gap-3 cursor-grab'>
                <div class='absolute -top-9 left-7 size-20 p-5 rounded-full border-1 border-[var(--color-border)] bg-[var(--color-gray-2)] flex justify-center items-center'>
                    <svg class='w-full' viewBox="0 0 47 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.021 39.9987C8.10999 39.9955 5.31917 38.8377 3.2608 36.7793C1.20243 34.7209 0.0446391 31.9301 0.0414441 29.0191V28.9642C0.0414441 28.9279 0.03675 28.8736 0.0327265 28.8019C-0.192591 24.8146 0.45922 14.049 11.3516 0.254317C11.4497 0.130424 11.5884 0.0451546 11.7432 0.0135496C11.898 -0.0180553 12.059 0.00603505 12.1978 0.0815711C12.3366 0.157107 12.4443 0.279236 12.5019 0.426413C12.5594 0.57359 12.5631 0.73636 12.5123 0.88601C12.4815 0.97721 9.50477 9.894 11.5387 18.053C14.4034 18.1875 17.1018 19.4374 19.0568 21.5356C21.0119 23.6338 22.0684 26.4137 22.0004 29.2807C21.9324 32.1478 20.7454 34.8745 18.6931 36.8776C16.6408 38.8808 13.8861 40.0015 11.0183 40L11.021 39.9987ZM1.38262 29.0574C1.39004 30.962 1.96162 32.8218 3.0252 34.4019C4.08877 35.9819 5.59666 37.2115 7.35847 37.9352C9.12029 38.659 11.0571 38.8445 12.9242 38.4684C14.7914 38.0922 16.5053 37.1713 17.8495 35.8219C19.1937 34.4725 20.1079 32.755 20.4768 30.8864C20.8456 29.0178 20.6526 27.0817 19.922 25.3228C19.1914 23.5638 17.956 22.0607 16.3718 21.0032C14.7876 19.9458 12.9256 19.3815 11.021 19.3815C10.8741 19.3814 10.7313 19.3332 10.6145 19.2441C10.4978 19.1551 10.4134 19.0302 10.3745 18.8886C8.83217 13.2758 9.58859 7.38802 10.3551 3.81513C1.71523 15.9179 1.17272 25.1559 1.37457 28.7268C1.38368 28.8367 1.38637 28.9471 1.38262 29.0574ZM35.9574 39.9987C33.0464 39.9955 30.2556 38.8377 28.1972 36.7793C26.1389 34.7209 24.9811 31.9301 24.9779 29.0191V28.9642C24.9779 28.9279 24.9732 28.8736 24.9692 28.8019C24.7439 24.8146 25.3957 14.049 36.288 0.254317C36.3861 0.130424 36.5248 0.0451546 36.6796 0.0135496C36.8345 -0.0180553 36.9955 0.00603505 37.1343 0.0815711C37.2731 0.157107 37.3808 0.279236 37.4383 0.426413C37.4958 0.57359 37.4996 0.73636 37.4488 0.88601C37.4179 0.97721 34.4412 9.894 36.4751 18.053C39.3398 18.1875 42.0382 19.4374 43.9933 21.5356C45.9483 23.6338 47.0049 26.4137 46.9369 29.2807C46.8689 32.1478 45.6818 34.8745 43.6295 36.8776C41.5772 38.8808 38.8226 40.0015 35.9547 40L35.9574 39.9987ZM26.3191 29.0574C26.3265 30.962 26.8981 32.8218 27.9616 34.4019C29.0252 35.9819 30.5331 37.2115 32.2949 37.9352C34.0567 38.659 35.9935 38.8445 37.8607 38.4684C39.7278 38.0922 41.4417 37.1713 42.7859 35.8219C44.1301 34.4725 45.0443 32.755 45.4132 30.8864C45.7821 29.0178 45.589 27.0817 44.8584 25.3228C44.1278 23.5638 42.8925 22.0607 41.3083 21.0032C39.7241 19.9458 37.8621 19.3815 35.9574 19.3815C35.8106 19.3814 35.6678 19.3332 35.551 19.2441C35.4342 19.1551 35.3499 19.0302 35.311 18.8886C33.7686 13.2758 34.525 7.38802 35.2915 3.81513C26.6517 15.9179 26.1085 25.1559 26.3103 28.7268C26.3197 28.8367 26.3226 28.9471 26.3191 29.0574Z" fill="#ffffff"/></svg>
                </div>
                <div class='flex flex-col gap-4 mt-10'>
                    <div class='w-full flex gap-5 items-center justify-center'>
                        <div class='size-15 rounded-full overflow-hidden'>
                            <img class='w-full rounded-full object-cover' src="assets/img/team_picture/nasiri.webp" alt="">
                        </div>
                        <div class='flex flex-col gap-4'>
                            <h3 class='font-bold text-xl text-[var(--color-white)]'> سروین نصیری </h3>
                            <p class='text-[var(--color-gray)]'> برنامه نویس فول استک</p>
                        </div>
                    </div>
                    <div class='flex gap-1 items-center justify-start'>
                        <svg class="size-6 fill-yellow-400 stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round"viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                        <svg class="size-6 fill-yellow-400 stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round"viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                        <svg class="size-6 fill-yellow-400 stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round"viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                        <svg class="size-6 fill-yellow-400 stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round"viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                        <svg class="size-6 fill-yellow-400 stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round"viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                    </div>
                </div>
                <p class='w-11/12 text-[var(--color-white)]'>
                    "با محمد توی چند پروژه همکاری داشتم. چیزی که خیلی برام جذاب بود، دقتش به جزئیات و تواناییش در تبدیل طراحی‌ها به کدهای تمیز و کارآمد بود. همیشه با انرژی مثبت و خوش‌برخوردش مواجه شدم."
                </p>
            </div>
            <div class='slide relative min-w-full bg-[var(--color-gray-2)] border-1 border-[var(--color-border)] p-5 rounded-xl flex flex-col gap-3 cursor-grab'>
                <div class='absolute -top-9 left-7 size-20 p-5 rounded-full border-1 border-[var(--color-border)] bg-[var(--color-gray-2)] flex justify-center items-center'>
                    <svg class='w-full' viewBox="0 0 47 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.021 39.9987C8.10999 39.9955 5.31917 38.8377 3.2608 36.7793C1.20243 34.7209 0.0446391 31.9301 0.0414441 29.0191V28.9642C0.0414441 28.9279 0.03675 28.8736 0.0327265 28.8019C-0.192591 24.8146 0.45922 14.049 11.3516 0.254317C11.4497 0.130424 11.5884 0.0451546 11.7432 0.0135496C11.898 -0.0180553 12.059 0.00603505 12.1978 0.0815711C12.3366 0.157107 12.4443 0.279236 12.5019 0.426413C12.5594 0.57359 12.5631 0.73636 12.5123 0.88601C12.4815 0.97721 9.50477 9.894 11.5387 18.053C14.4034 18.1875 17.1018 19.4374 19.0568 21.5356C21.0119 23.6338 22.0684 26.4137 22.0004 29.2807C21.9324 32.1478 20.7454 34.8745 18.6931 36.8776C16.6408 38.8808 13.8861 40.0015 11.0183 40L11.021 39.9987ZM1.38262 29.0574C1.39004 30.962 1.96162 32.8218 3.0252 34.4019C4.08877 35.9819 5.59666 37.2115 7.35847 37.9352C9.12029 38.659 11.0571 38.8445 12.9242 38.4684C14.7914 38.0922 16.5053 37.1713 17.8495 35.8219C19.1937 34.4725 20.1079 32.755 20.4768 30.8864C20.8456 29.0178 20.6526 27.0817 19.922 25.3228C19.1914 23.5638 17.956 22.0607 16.3718 21.0032C14.7876 19.9458 12.9256 19.3815 11.021 19.3815C10.8741 19.3814 10.7313 19.3332 10.6145 19.2441C10.4978 19.1551 10.4134 19.0302 10.3745 18.8886C8.83217 13.2758 9.58859 7.38802 10.3551 3.81513C1.71523 15.9179 1.17272 25.1559 1.37457 28.7268C1.38368 28.8367 1.38637 28.9471 1.38262 29.0574ZM35.9574 39.9987C33.0464 39.9955 30.2556 38.8377 28.1972 36.7793C26.1389 34.7209 24.9811 31.9301 24.9779 29.0191V28.9642C24.9779 28.9279 24.9732 28.8736 24.9692 28.8019C24.7439 24.8146 25.3957 14.049 36.288 0.254317C36.3861 0.130424 36.5248 0.0451546 36.6796 0.0135496C36.8345 -0.0180553 36.9955 0.00603505 37.1343 0.0815711C37.2731 0.157107 37.3808 0.279236 37.4383 0.426413C37.4958 0.57359 37.4996 0.73636 37.4488 0.88601C37.4179 0.97721 34.4412 9.894 36.4751 18.053C39.3398 18.1875 42.0382 19.4374 43.9933 21.5356C45.9483 23.6338 47.0049 26.4137 46.9369 29.2807C46.8689 32.1478 45.6818 34.8745 43.6295 36.8776C41.5772 38.8808 38.8226 40.0015 35.9547 40L35.9574 39.9987ZM26.3191 29.0574C26.3265 30.962 26.8981 32.8218 27.9616 34.4019C29.0252 35.9819 30.5331 37.2115 32.2949 37.9352C34.0567 38.659 35.9935 38.8445 37.8607 38.4684C39.7278 38.0922 41.4417 37.1713 42.7859 35.8219C44.1301 34.4725 45.0443 32.755 45.4132 30.8864C45.7821 29.0178 45.589 27.0817 44.8584 25.3228C44.1278 23.5638 42.8925 22.0607 41.3083 21.0032C39.7241 19.9458 37.8621 19.3815 35.9574 19.3815C35.8106 19.3814 35.6678 19.3332 35.551 19.2441C35.4342 19.1551 35.3499 19.0302 35.311 18.8886C33.7686 13.2758 34.525 7.38802 35.2915 3.81513C26.6517 15.9179 26.1085 25.1559 26.3103 28.7268C26.3197 28.8367 26.3226 28.9471 26.3191 29.0574Z" fill="#ffffff"/></svg>
                </div>
                <div class='flex flex-col gap-4 mt-10'>
                    <div class='w-full flex gap-5 items-center justify-center'>
                        <div class='size-15 rounded-full overflow-hidden'>
                            <img class='w-full rounded-full object-cover' src="assets/img/team_picture/olyafam.webp" alt="">
                        </div>
                        <div class='flex flex-col gap-4'>
                            <h3 class='font-bold text-xl text-[var(--color-white)]'> محمد رضا علیافام </h3>
                            <p class='text-[var(--color-gray)]'> برنامه نویس فول استک</p>
                        </div>
                    </div>
                    <div class='flex gap-1 items-center justify-start'>
                        <svg class="size-6 fill-yellow-400 stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round"viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                        <svg class="size-6 fill-yellow-400 stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round"viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                        <svg class="size-6 fill-yellow-400 stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round"viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                        <svg class="size-6 fill-yellow-400 stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round"viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                        <svg class="size-6 fill-yellow-400 stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round"viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                    </div>
                </div>
                <p class='w-11/12 text-[var(--color-white)]'>
                "محمد از معدود افرادی‌ست که هم مهارت فنی بالا داره و هم ارتباطات عالی. توی شرایط سخت پروژه، خونسردیش رو حفظ می‌کنه و با راهکارهای خلاقانه به کمک تیم میاد. به شدت پیشنهاد می‌کنم با این پسر فوق‌العاده کار کنید."
                </p>
            </div>
            <div class='slide relative min-w-full bg-[var(--color-gray-2)] border-1 border-[var(--color-border)] p-5 rounded-xl flex flex-col gap-3 cursor-grab'>
                <div class='absolute -top-9 left-7 size-20 p-5 rounded-full border-1 border-[var(--color-border)] bg-[var(--color-gray-2)] flex justify-center items-center'>
                    <svg class='w-full' viewBox="0 0 47 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.021 39.9987C8.10999 39.9955 5.31917 38.8377 3.2608 36.7793C1.20243 34.7209 0.0446391 31.9301 0.0414441 29.0191V28.9642C0.0414441 28.9279 0.03675 28.8736 0.0327265 28.8019C-0.192591 24.8146 0.45922 14.049 11.3516 0.254317C11.4497 0.130424 11.5884 0.0451546 11.7432 0.0135496C11.898 -0.0180553 12.059 0.00603505 12.1978 0.0815711C12.3366 0.157107 12.4443 0.279236 12.5019 0.426413C12.5594 0.57359 12.5631 0.73636 12.5123 0.88601C12.4815 0.97721 9.50477 9.894 11.5387 18.053C14.4034 18.1875 17.1018 19.4374 19.0568 21.5356C21.0119 23.6338 22.0684 26.4137 22.0004 29.2807C21.9324 32.1478 20.7454 34.8745 18.6931 36.8776C16.6408 38.8808 13.8861 40.0015 11.0183 40L11.021 39.9987ZM1.38262 29.0574C1.39004 30.962 1.96162 32.8218 3.0252 34.4019C4.08877 35.9819 5.59666 37.2115 7.35847 37.9352C9.12029 38.659 11.0571 38.8445 12.9242 38.4684C14.7914 38.0922 16.5053 37.1713 17.8495 35.8219C19.1937 34.4725 20.1079 32.755 20.4768 30.8864C20.8456 29.0178 20.6526 27.0817 19.922 25.3228C19.1914 23.5638 17.956 22.0607 16.3718 21.0032C14.7876 19.9458 12.9256 19.3815 11.021 19.3815C10.8741 19.3814 10.7313 19.3332 10.6145 19.2441C10.4978 19.1551 10.4134 19.0302 10.3745 18.8886C8.83217 13.2758 9.58859 7.38802 10.3551 3.81513C1.71523 15.9179 1.17272 25.1559 1.37457 28.7268C1.38368 28.8367 1.38637 28.9471 1.38262 29.0574ZM35.9574 39.9987C33.0464 39.9955 30.2556 38.8377 28.1972 36.7793C26.1389 34.7209 24.9811 31.9301 24.9779 29.0191V28.9642C24.9779 28.9279 24.9732 28.8736 24.9692 28.8019C24.7439 24.8146 25.3957 14.049 36.288 0.254317C36.3861 0.130424 36.5248 0.0451546 36.6796 0.0135496C36.8345 -0.0180553 36.9955 0.00603505 37.1343 0.0815711C37.2731 0.157107 37.3808 0.279236 37.4383 0.426413C37.4958 0.57359 37.4996 0.73636 37.4488 0.88601C37.4179 0.97721 34.4412 9.894 36.4751 18.053C39.3398 18.1875 42.0382 19.4374 43.9933 21.5356C45.9483 23.6338 47.0049 26.4137 46.9369 29.2807C46.8689 32.1478 45.6818 34.8745 43.6295 36.8776C41.5772 38.8808 38.8226 40.0015 35.9547 40L35.9574 39.9987ZM26.3191 29.0574C26.3265 30.962 26.8981 32.8218 27.9616 34.4019C29.0252 35.9819 30.5331 37.2115 32.2949 37.9352C34.0567 38.659 35.9935 38.8445 37.8607 38.4684C39.7278 38.0922 41.4417 37.1713 42.7859 35.8219C44.1301 34.4725 45.0443 32.755 45.4132 30.8864C45.7821 29.0178 45.589 27.0817 44.8584 25.3228C44.1278 23.5638 42.8925 22.0607 41.3083 21.0032C39.7241 19.9458 37.8621 19.3815 35.9574 19.3815C35.8106 19.3814 35.6678 19.3332 35.551 19.2441C35.4342 19.1551 35.3499 19.0302 35.311 18.8886C33.7686 13.2758 34.525 7.38802 35.2915 3.81513C26.6517 15.9179 26.1085 25.1559 26.3103 28.7268C26.3197 28.8367 26.3226 28.9471 26.3191 29.0574Z" fill="#ffffff"/></svg>
                </div>
                <div class='flex flex-col gap-4 mt-10'>
                    <div class='w-full flex gap-5 items-center justify-center'>
                        <div class='size-15 rounded-full overflow-hidden'>
                            <img class='w-full rounded-full' src="assets/img/team_picture/asadi.webp" alt="">
                        </div>
                        <div class='flex flex-col gap-4'>
                            <h3 class='font-bold text-xl text-[var(--color-white)]'> امیر اسدی</h3>
                            <p class='text-[var(--color-gray)]'> توسعه‌دهنده فول‌استک </p>
                        </div>
                    </div>
                    <div class='flex gap-1 items-center justify-start'>
                        <svg class="size-6 fill-yellow-400 stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round"viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                        <svg class="size-6 fill-yellow-400 stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round"viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                        <svg class="size-6 fill-yellow-400 stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round"viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                        <svg class="size-6 fill-yellow-400 stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round"viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                        <svg class="size-6 fill-yellow-400 stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round"viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                    </div>
                </div>
                <p class='w-11/12 text-[var(--color-white)]'>
                "محمد یکی از بهترین هم‌تیمی‌هایی بود که تا حالا داشتم. تعهدش به کار واقعاً تحسین‌برانگیزه. علاوه بر مهارت فنی، روحیه‌ی تیمی‌اش باعث میشه کار کردن باهاش لذت‌بخش باشه."
                </p>
            </div>
            <div class='slide relative min-w-full bg-[var(--color-gray-2)] border-1 border-[var(--color-border)] p-5 rounded-xl flex flex-col gap-3 cursor-grab'>
                <div class='absolute -top-9 left-7 size-20 p-5 rounded-full border-1 border-[var(--color-border)] bg-[var(--color-gray-2)] flex justify-center items-center'>
                    <svg class='w-full' viewBox="0 0 47 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.021 39.9987C8.10999 39.9955 5.31917 38.8377 3.2608 36.7793C1.20243 34.7209 0.0446391 31.9301 0.0414441 29.0191V28.9642C0.0414441 28.9279 0.03675 28.8736 0.0327265 28.8019C-0.192591 24.8146 0.45922 14.049 11.3516 0.254317C11.4497 0.130424 11.5884 0.0451546 11.7432 0.0135496C11.898 -0.0180553 12.059 0.00603505 12.1978 0.0815711C12.3366 0.157107 12.4443 0.279236 12.5019 0.426413C12.5594 0.57359 12.5631 0.73636 12.5123 0.88601C12.4815 0.97721 9.50477 9.894 11.5387 18.053C14.4034 18.1875 17.1018 19.4374 19.0568 21.5356C21.0119 23.6338 22.0684 26.4137 22.0004 29.2807C21.9324 32.1478 20.7454 34.8745 18.6931 36.8776C16.6408 38.8808 13.8861 40.0015 11.0183 40L11.021 39.9987ZM1.38262 29.0574C1.39004 30.962 1.96162 32.8218 3.0252 34.4019C4.08877 35.9819 5.59666 37.2115 7.35847 37.9352C9.12029 38.659 11.0571 38.8445 12.9242 38.4684C14.7914 38.0922 16.5053 37.1713 17.8495 35.8219C19.1937 34.4725 20.1079 32.755 20.4768 30.8864C20.8456 29.0178 20.6526 27.0817 19.922 25.3228C19.1914 23.5638 17.956 22.0607 16.3718 21.0032C14.7876 19.9458 12.9256 19.3815 11.021 19.3815C10.8741 19.3814 10.7313 19.3332 10.6145 19.2441C10.4978 19.1551 10.4134 19.0302 10.3745 18.8886C8.83217 13.2758 9.58859 7.38802 10.3551 3.81513C1.71523 15.9179 1.17272 25.1559 1.37457 28.7268C1.38368 28.8367 1.38637 28.9471 1.38262 29.0574ZM35.9574 39.9987C33.0464 39.9955 30.2556 38.8377 28.1972 36.7793C26.1389 34.7209 24.9811 31.9301 24.9779 29.0191V28.9642C24.9779 28.9279 24.9732 28.8736 24.9692 28.8019C24.7439 24.8146 25.3957 14.049 36.288 0.254317C36.3861 0.130424 36.5248 0.0451546 36.6796 0.0135496C36.8345 -0.0180553 36.9955 0.00603505 37.1343 0.0815711C37.2731 0.157107 37.3808 0.279236 37.4383 0.426413C37.4958 0.57359 37.4996 0.73636 37.4488 0.88601C37.4179 0.97721 34.4412 9.894 36.4751 18.053C39.3398 18.1875 42.0382 19.4374 43.9933 21.5356C45.9483 23.6338 47.0049 26.4137 46.9369 29.2807C46.8689 32.1478 45.6818 34.8745 43.6295 36.8776C41.5772 38.8808 38.8226 40.0015 35.9547 40L35.9574 39.9987ZM26.3191 29.0574C26.3265 30.962 26.8981 32.8218 27.9616 34.4019C29.0252 35.9819 30.5331 37.2115 32.2949 37.9352C34.0567 38.659 35.9935 38.8445 37.8607 38.4684C39.7278 38.0922 41.4417 37.1713 42.7859 35.8219C44.1301 34.4725 45.0443 32.755 45.4132 30.8864C45.7821 29.0178 45.589 27.0817 44.8584 25.3228C44.1278 23.5638 42.8925 22.0607 41.3083 21.0032C39.7241 19.9458 37.8621 19.3815 35.9574 19.3815C35.8106 19.3814 35.6678 19.3332 35.551 19.2441C35.4342 19.1551 35.3499 19.0302 35.311 18.8886C33.7686 13.2758 34.525 7.38802 35.2915 3.81513C26.6517 15.9179 26.1085 25.1559 26.3103 28.7268C26.3197 28.8367 26.3226 28.9471 26.3191 29.0574Z" fill="#ffffff"/></svg>
                </div>
                <div class='flex flex-col gap-4 mt-10'>
                    <div class='w-full flex gap-5 items-center justify-center'>
                        <div class='size-15 rounded-full overflow-hidden'>
                            <img class='w-full rounded-full' src="assets/img/team_picture/mahdi.webp" alt="">
                        </div>
                        <div class='flex flex-col gap-4'>
                            <h3 class='font-bold text-xl text-[var(--color-white)]'> محمد مهدی بندعلی </h3>
                            <p class='text-[var(--color-gray)]'> توسعه‌دهنده فرانت اند </p>
                        </div>
                    </div>
                    <div class='flex gap-1 items-center justify-start'>
                        <svg class="size-6 fill-yellow-400 stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round"viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                        <svg class="size-6 fill-yellow-400 stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round"viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                        <svg class="size-6 fill-yellow-400 stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round"viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                        <svg class="size-6 fill-yellow-400 stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round"viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                        <svg class="size-6 fill-yellow-400 stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round"viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                    </div>
                </div>
                <p class='w-11/12 text-[var(--color-white)]'>
                "محمد یکی از بهترین هم‌تیمی‌هایی بود که تا حالا داشتم. تعهدش به کار واقعاً عالیه. علاوه بر مهارت فنی،خیلی فعال و کارش درسته."
                </p>
            </div>
            <div class='slide relative min-w-full bg-[var(--color-gray-2)] border-1 border-[var(--color-border)] p-5 rounded-xl flex flex-col gap-3 cursor-grab'>
                <div class='absolute -top-9 left-7 size-20 p-5 rounded-full border-1 border-[var(--color-border)] bg-[var(--color-gray-2)] flex justify-center items-center'>
                    <svg class='w-full' viewBox="0 0 47 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.021 39.9987C8.10999 39.9955 5.31917 38.8377 3.2608 36.7793C1.20243 34.7209 0.0446391 31.9301 0.0414441 29.0191V28.9642C0.0414441 28.9279 0.03675 28.8736 0.0327265 28.8019C-0.192591 24.8146 0.45922 14.049 11.3516 0.254317C11.4497 0.130424 11.5884 0.0451546 11.7432 0.0135496C11.898 -0.0180553 12.059 0.00603505 12.1978 0.0815711C12.3366 0.157107 12.4443 0.279236 12.5019 0.426413C12.5594 0.57359 12.5631 0.73636 12.5123 0.88601C12.4815 0.97721 9.50477 9.894 11.5387 18.053C14.4034 18.1875 17.1018 19.4374 19.0568 21.5356C21.0119 23.6338 22.0684 26.4137 22.0004 29.2807C21.9324 32.1478 20.7454 34.8745 18.6931 36.8776C16.6408 38.8808 13.8861 40.0015 11.0183 40L11.021 39.9987ZM1.38262 29.0574C1.39004 30.962 1.96162 32.8218 3.0252 34.4019C4.08877 35.9819 5.59666 37.2115 7.35847 37.9352C9.12029 38.659 11.0571 38.8445 12.9242 38.4684C14.7914 38.0922 16.5053 37.1713 17.8495 35.8219C19.1937 34.4725 20.1079 32.755 20.4768 30.8864C20.8456 29.0178 20.6526 27.0817 19.922 25.3228C19.1914 23.5638 17.956 22.0607 16.3718 21.0032C14.7876 19.9458 12.9256 19.3815 11.021 19.3815C10.8741 19.3814 10.7313 19.3332 10.6145 19.2441C10.4978 19.1551 10.4134 19.0302 10.3745 18.8886C8.83217 13.2758 9.58859 7.38802 10.3551 3.81513C1.71523 15.9179 1.17272 25.1559 1.37457 28.7268C1.38368 28.8367 1.38637 28.9471 1.38262 29.0574ZM35.9574 39.9987C33.0464 39.9955 30.2556 38.8377 28.1972 36.7793C26.1389 34.7209 24.9811 31.9301 24.9779 29.0191V28.9642C24.9779 28.9279 24.9732 28.8736 24.9692 28.8019C24.7439 24.8146 25.3957 14.049 36.288 0.254317C36.3861 0.130424 36.5248 0.0451546 36.6796 0.0135496C36.8345 -0.0180553 36.9955 0.00603505 37.1343 0.0815711C37.2731 0.157107 37.3808 0.279236 37.4383 0.426413C37.4958 0.57359 37.4996 0.73636 37.4488 0.88601C37.4179 0.97721 34.4412 9.894 36.4751 18.053C39.3398 18.1875 42.0382 19.4374 43.9933 21.5356C45.9483 23.6338 47.0049 26.4137 46.9369 29.2807C46.8689 32.1478 45.6818 34.8745 43.6295 36.8776C41.5772 38.8808 38.8226 40.0015 35.9547 40L35.9574 39.9987ZM26.3191 29.0574C26.3265 30.962 26.8981 32.8218 27.9616 34.4019C29.0252 35.9819 30.5331 37.2115 32.2949 37.9352C34.0567 38.659 35.9935 38.8445 37.8607 38.4684C39.7278 38.0922 41.4417 37.1713 42.7859 35.8219C44.1301 34.4725 45.0443 32.755 45.4132 30.8864C45.7821 29.0178 45.589 27.0817 44.8584 25.3228C44.1278 23.5638 42.8925 22.0607 41.3083 21.0032C39.7241 19.9458 37.8621 19.3815 35.9574 19.3815C35.8106 19.3814 35.6678 19.3332 35.551 19.2441C35.4342 19.1551 35.3499 19.0302 35.311 18.8886C33.7686 13.2758 34.525 7.38802 35.2915 3.81513C26.6517 15.9179 26.1085 25.1559 26.3103 28.7268C26.3197 28.8367 26.3226 28.9471 26.3191 29.0574Z" fill="#ffffff"/></svg>
                </div>
                <div class='flex flex-col gap-4 mt-10'>
                    <div class='w-full flex gap-5 items-center justify-center'>
                        <div class='size-15 rounded-full overflow-hidden'>
                            <img class='w-full rounded-full object-cover ' src="assets/img/team_picture/hossein.webp" alt="">
                        </div>
                        <div class='flex flex-col gap-4'>
                            <h3 class='font-bold text-xl text-[var(--color-white)]'>حسین آبیاری</h3>
                            <p class='text-[var(--color-gray)]'> برنامه نویس و طراح وبسایت</p>
                        </div>
                    </div>
                    <div class='flex gap-1 items-center justify-start'>
                        <svg class="size-6 fill-yellow-400 stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round"viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                        <svg class="size-6 fill-yellow-400 stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round"viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                        <svg class="size-6 fill-yellow-400 stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round"viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                        <svg class="size-6 fill-yellow-400 stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round"viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                        <svg class="size-6 fill-yellow-400 stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round"viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                    </div>
                </div>
                <p class='w-11/12 text-[var(--color-white)]'>
    
                "سیستم CRM که محمد پیاده‌سازی کرد، مدیریت مشتریان ما را متحول کرد. فوق‌العاده حرفه‌ای و  دقیق. بدون شک یکی از بهترین همکاری‌های من بود."
                </p>
            </div>
            <div class='slide relative min-w-full bg-[var(--color-gray-2)] border-1 border-[var(--color-border)] p-5 rounded-xl flex flex-col gap-3 cursor-grab'>
                <div class='absolute -top-9 left-7 size-20 p-5 rounded-full border-1 border-[var(--color-border)] bg-[var(--color-gray-2)] flex justify-center items-center'>
                    <svg class='w-full' viewBox="0 0 47 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.021 39.9987C8.10999 39.9955 5.31917 38.8377 3.2608 36.7793C1.20243 34.7209 0.0446391 31.9301 0.0414441 29.0191V28.9642C0.0414441 28.9279 0.03675 28.8736 0.0327265 28.8019C-0.192591 24.8146 0.45922 14.049 11.3516 0.254317C11.4497 0.130424 11.5884 0.0451546 11.7432 0.0135496C11.898 -0.0180553 12.059 0.00603505 12.1978 0.0815711C12.3366 0.157107 12.4443 0.279236 12.5019 0.426413C12.5594 0.57359 12.5631 0.73636 12.5123 0.88601C12.4815 0.97721 9.50477 9.894 11.5387 18.053C14.4034 18.1875 17.1018 19.4374 19.0568 21.5356C21.0119 23.6338 22.0684 26.4137 22.0004 29.2807C21.9324 32.1478 20.7454 34.8745 18.6931 36.8776C16.6408 38.8808 13.8861 40.0015 11.0183 40L11.021 39.9987ZM1.38262 29.0574C1.39004 30.962 1.96162 32.8218 3.0252 34.4019C4.08877 35.9819 5.59666 37.2115 7.35847 37.9352C9.12029 38.659 11.0571 38.8445 12.9242 38.4684C14.7914 38.0922 16.5053 37.1713 17.8495 35.8219C19.1937 34.4725 20.1079 32.755 20.4768 30.8864C20.8456 29.0178 20.6526 27.0817 19.922 25.3228C19.1914 23.5638 17.956 22.0607 16.3718 21.0032C14.7876 19.9458 12.9256 19.3815 11.021 19.3815C10.8741 19.3814 10.7313 19.3332 10.6145 19.2441C10.4978 19.1551 10.4134 19.0302 10.3745 18.8886C8.83217 13.2758 9.58859 7.38802 10.3551 3.81513C1.71523 15.9179 1.17272 25.1559 1.37457 28.7268C1.38368 28.8367 1.38637 28.9471 1.38262 29.0574ZM35.9574 39.9987C33.0464 39.9955 30.2556 38.8377 28.1972 36.7793C26.1389 34.7209 24.9811 31.9301 24.9779 29.0191V28.9642C24.9779 28.9279 24.9732 28.8736 24.9692 28.8019C24.7439 24.8146 25.3957 14.049 36.288 0.254317C36.3861 0.130424 36.5248 0.0451546 36.6796 0.0135496C36.8345 -0.0180553 36.9955 0.00603505 37.1343 0.0815711C37.2731 0.157107 37.3808 0.279236 37.4383 0.426413C37.4958 0.57359 37.4996 0.73636 37.4488 0.88601C37.4179 0.97721 34.4412 9.894 36.4751 18.053C39.3398 18.1875 42.0382 19.4374 43.9933 21.5356C45.9483 23.6338 47.0049 26.4137 46.9369 29.2807C46.8689 32.1478 45.6818 34.8745 43.6295 36.8776C41.5772 38.8808 38.8226 40.0015 35.9547 40L35.9574 39.9987ZM26.3191 29.0574C26.3265 30.962 26.8981 32.8218 27.9616 34.4019C29.0252 35.9819 30.5331 37.2115 32.2949 37.9352C34.0567 38.659 35.9935 38.8445 37.8607 38.4684C39.7278 38.0922 41.4417 37.1713 42.7859 35.8219C44.1301 34.4725 45.0443 32.755 45.4132 30.8864C45.7821 29.0178 45.589 27.0817 44.8584 25.3228C44.1278 23.5638 42.8925 22.0607 41.3083 21.0032C39.7241 19.9458 37.8621 19.3815 35.9574 19.3815C35.8106 19.3814 35.6678 19.3332 35.551 19.2441C35.4342 19.1551 35.3499 19.0302 35.311 18.8886C33.7686 13.2758 34.525 7.38802 35.2915 3.81513C26.6517 15.9179 26.1085 25.1559 26.3103 28.7268C26.3197 28.8367 26.3226 28.9471 26.3191 29.0574Z" fill="#ffffff"/></svg>
                </div>
                <div class='flex flex-col gap-4 mt-10'>
                    <div class='w-full flex gap-5 items-center justify-center'>
                        <div class='size-15 rounded-full overflow-hidden'>
                            <img class='w-full rounded-full object-cover ' src="assets/img/team_picture/eftekhari.webp" alt="">
                        </div>
                        <div class='flex flex-col gap-4'>
                            <h3 class='font-bold text-xl text-[var(--color-white)]'> محمد افتخاری </h3>
                            <p class='text-[var(--color-gray)]'> برنامه نویس فول استک </p>
                        </div>
                    </div>
                    <div class='flex gap-1 items-center justify-start'>
                        <svg class="size-6 fill-yellow-400 stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round"viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                        <svg class="size-6 fill-yellow-400 stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round"viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                        <svg class="size-6 fill-yellow-400 stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round"viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                        <svg class="size-6 fill-yellow-400 stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round"viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                        <svg class="size-6 fill-yellow-400 stroke-black stroke-1 stroke-linejoin-round stroke-linecap-round"viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                    </div>
                </div>
                <p class='w-11/12 text-[var(--color-white)]'>

                "محمد از معدود افرادی‌ست که هم مهارت فنی بالا داره و هم دیدگاه استراتژیک. توی شرایط سخت  پروژه، خونسردیش رو حفظ می‌کنه و با راهکارهای خلاقانه به کمک تیم میاد."
                            
                </p>
            </div>

        </div>

        <div class="indicators flex justify-center gap-3 py-5">
            <span class="dot w-3.5 h-3.5 bg-[var(--color-primary-3rd)] border-gray-700 rounded-full transition-all duration-400 cursor-pointer flex justify-center items-center">
            </span>
            <span class="dot w-3.5 h-3.5 bg-[var(--color-primary-3rd)] border-gray-700 rounded-full transition-all duration-400 cursor-pointer flex justify-center items-center">
            </span>
            <span class="dot w-3.5 h-3.5 bg-[var(--color-primary-3rd)] border-gray-700 rounded-full transition-all duration-400 cursor-pointer flex justify-center items-center">
            </span>
            <span class="dot w-3.5 h-3.5 bg-[var(--color-primary-3rd)] border-gray-700 rounded-full transition-all duration-400 cursor-pointer flex justify-center items-center">
            </span>
            <span class="dot w-3.5 h-3.5 bg-[var(--color-primary-3rd)] border-gray-700 rounded-full transition-all duration-400 cursor-pointer flex justify-center items-center">
            </span>
            <span class="dot w-3.5 h-3.5 bg-[var(--color-primary-3rd)] border-gray-700 rounded-full transition-all duration-400 cursor-pointer flex justify-center items-center">
            </span>
            <span class="dot w-3.5 h-3.5 bg-[var(--color-primary-3rd)] border-gray-700 rounded-full transition-all duration-400 cursor-pointer flex justify-center items-center">
            </span>
        </div>
    </div>

<div id="skills" class='w-11/12 mx-auto flex flex-col gap-5 mb-15'>
        <div class='w-full flex flex-col gap-3 justify-center text-center md:text-start'>
            <span class='text-[var(--color-primary-3rd)] font-bold text-base'> مهارت های من </span>
            <h2 class='text-[var(--color-heading)] text-[4vw] md:text-[3vw] lg:text-[2vw] font-bold'> تخصص‌های فنی من </h2>
            <p class='text-[var(--color-gray)] text-lg'> ابزارها و تکنولوژی‌هایی که هر روز باهاشون کار می‌کنم و پروژه‌های واقعی رو باهاشون جلو می‌برم. </p>
        </div>
        <div class='w-full lg:flex lg:flex-row lg:overflow-x-auto gap-2'>
            <div class='min-w-2/12 flex flex-col gap-4'>
                <div class=" w-full rounded-2xl flex flex-col gap-5 text-[var(--color-white)] justify-between py-10 items-center text-center border-1 border-gray-800" data-index="2">
                    <div class='flex flex-col justify-center items-center gap-7'>
                        <div class='size-15 bg-[var(--color-gray-2)] rounded-full flex justify-center items-center p-1 border-1 border-[var(--color-border)]'>
                            <svg class='w-full' viewBox="-4 0 264 264" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid"><g><path d="M255.855641,59.619717 C255.950565,59.9710596 256,60.3333149 256,60.6972536 L256,117.265345 C256,118.743206 255.209409,120.108149 253.927418,120.843385 L206.448786,148.178786 L206.448786,202.359798 C206.448786,203.834322 205.665123,205.195421 204.386515,205.937838 L105.27893,262.990563 C105.05208,263.119455 104.804608,263.201946 104.557135,263.289593 C104.464333,263.320527 104.376687,263.377239 104.278729,263.403017 C103.585929,263.58546 102.857701,263.58546 102.164901,263.403017 C102.051476,263.372083 101.948363,263.310215 101.840093,263.26897 C101.613244,263.186479 101.376082,263.1143 101.159544,262.990563 L2.07258227,205.937838 C0.7913718,205.201819 0,203.837372 0,202.359798 L0,32.6555248 C0,32.2843161 0.0515567729,31.9234187 0.144358964,31.5728326 C0.175293028,31.454252 0.24747251,31.3459828 0.288717928,31.2274022 C0.366053087,31.0108638 0.438232569,30.7891697 0.55165747,30.5880982 C0.628992629,30.4540506 0.742417529,30.3457814 0.83521972,30.2220451 C0.953800298,30.0570635 1.06206952,29.8869261 1.20127281,29.7425672 C1.31985339,29.6239866 1.4745237,29.5363401 1.60857131,29.4332265 C1.75808595,29.3094903 1.89213356,29.1754427 2.06227091,29.0774848 L2.06742659,29.0774848 L51.6134853,0.551122364 C52.8901903,-0.183535768 54.4613221,-0.183535768 55.7380271,0.551122364 L105.284086,29.0774848 L105.294397,29.0774848 C105.459379,29.1805983 105.598582,29.3094903 105.748097,29.4280708 C105.882144,29.5311844 106.031659,29.6239866 106.15024,29.7374115 C106.294599,29.8869261 106.397712,30.0570635 106.521448,30.2220451 C106.609095,30.3457814 106.727676,30.4540506 106.799855,30.5880982 C106.918436,30.7943253 106.985459,31.0108638 107.06795,31.2274022 C107.109196,31.3459828 107.181375,31.454252 107.212309,31.5779883 C107.307234,31.9293308 107.355765,32.2915861 107.356668,32.6555248 L107.356668,138.651094 L148.643332,114.878266 L148.643332,60.6920979 C148.643332,60.3312005 148.694889,59.9651474 148.787691,59.619717 C148.823781,59.4959808 148.890804,59.3877116 148.93205,59.269131 C149.014541,59.0525925 149.08672,58.8308984 149.200145,58.629827 C149.27748,58.4957794 149.390905,58.3875102 149.478552,58.2637739 C149.602288,58.0987922 149.705401,57.9286549 149.84976,57.7842959 C149.968341,57.6657153 150.117856,57.5780688 150.251903,57.4749553 C150.406573,57.351219 150.540621,57.2171714 150.705603,57.1192136 L150.710758,57.1192136 L200.261973,28.5928511 C201.538395,27.8571345 203.110093,27.8571345 204.386515,28.5928511 L253.932573,57.1192136 C254.107866,57.2223271 254.241914,57.351219 254.396584,57.4697996 C254.525476,57.5729132 254.674991,57.6657153 254.793572,57.7791402 C254.93793,57.9286549 255.041044,58.0987922 255.16478,58.2637739 C255.257582,58.3875102 255.371007,58.4957794 255.443187,58.629827 C255.561767,58.8308984 255.628791,59.0525925 255.711282,59.269131 C255.757683,59.3877116 255.824707,59.4959808 255.855641,59.619717 Z M247.740605,114.878266 L247.740605,67.8378666 L230.402062,77.8192579 L206.448786,91.6106946 L206.448786,138.651094 L247.745761,114.878266 L247.740605,114.878266 Z M198.194546,199.97272 L198.194546,152.901386 L174.633101,166.357704 L107.351512,204.757188 L107.351512,252.27191 L198.194546,199.97272 Z M8.25939501,39.7961379 L8.25939501,199.97272 L99.0921175,252.266755 L99.0921175,204.762344 L51.6392637,177.906421 L51.6237967,177.89611 L51.603174,177.885798 C51.443348,177.792996 51.3093004,177.658949 51.1597857,177.545524 C51.0308938,177.44241 50.8813791,177.359919 50.7679542,177.246494 L50.7576429,177.231027 C50.6235953,177.102135 50.5307931,176.942309 50.4173682,176.79795 C50.3142546,176.658747 50.1905184,176.540167 50.1080276,176.395808 L50.1028719,176.380341 C50.0100697,176.22567 49.9533572,176.040066 49.8863334,175.864773 C49.8193096,175.710103 49.7316631,175.565744 49.6904177,175.400762 L49.6904177,175.395606 C49.6388609,175.19969 49.6285496,174.993463 49.6079269,174.792392 C49.5873041,174.637722 49.5460587,174.483051 49.5460587,174.328381 L49.5460587,174.31807 L49.5460587,63.5689658 L25.5979377,49.7723734 L8.25939501,39.8012935 L8.25939501,39.7961379 Z M53.6809119,8.89300821 L12.3994039,32.6555248 L53.6706006,56.4180414 L94.9469529,32.6503692 L53.6706006,8.89300821 L53.6809119,8.89300821 Z M75.1491521,157.19091 L99.0972731,143.404629 L99.0972731,39.7961379 L81.7587304,49.7775291 L57.8054537,63.5689658 L57.8054537,167.177457 L75.1491521,157.19091 Z M202.324244,36.934737 L161.047891,60.6972536 L202.324244,84.4597702 L243.59544,60.6920979 L202.324244,36.934737 Z M198.194546,91.6106946 L174.24127,77.8192579 L156.902727,67.8378666 L156.902727,114.878266 L180.850848,128.664547 L198.194546,138.651094 L198.194546,91.6106946 Z M103.216659,197.616575 L163.759778,163.052915 L194.023603,145.781396 L152.778185,122.034346 L105.289242,149.374903 L62.0073307,174.292291 L103.216659,197.616575 Z" fill="#FF2D20"></path></g></svg>
                            <svg  class='w-full' viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="16" cy="16" r="14" fill="#8892BF"/><path d="M14.4392 10H16.1192L15.6444 12.5242H17.154C17.9819 12.5419 18.5986 12.7269 19.0045 13.0793C19.4184 13.4316 19.5402 14.1014 19.3698 15.0881L18.5541 19.4889H16.8497L17.6288 15.2863C17.7099 14.8457 17.6856 14.533 17.5558 14.348C17.426 14.163 17.146 14.0705 16.7158 14.0705L15.3644 14.0573L14.3661 19.4889H12.6861L14.4392 10Z" fill="white"/><path fill-rule="evenodd" clip-rule="evenodd" d="M6.74092 12.5243H10.0036C10.9612 12.533 11.6552 12.8327 12.0854 13.4229C12.5156 14.0132 12.6576 14.8193 12.5115 15.8414C12.4548 16.3085 12.3289 16.7665 12.1341 17.2159C11.9474 17.6652 11.6878 18.0704 11.355 18.4317C10.9491 18.8898 10.5149 19.1805 10.0523 19.304C9.58969 19.4274 9.11076 19.489 8.61575 19.489H7.15484L6.69222 22H5L6.74092 12.5243ZM7.43485 17.9956L8.16287 14.0441H8.40879C8.49815 14.0441 8.5914 14.0396 8.6888 14.0309C9.33817 14.0221 9.87774 14.0882 10.308 14.2291C10.7462 14.37 10.8923 14.9031 10.7462 15.8282C10.5678 16.9296 10.2186 17.5727 9.69926 17.7577C9.1799 17.934 8.53053 18.0176 7.75138 18.0088H7.58094C7.53224 18.0088 7.48355 18.0043 7.43485 17.9956Z" fill="white"/><path fill-rule="evenodd" clip-rule="evenodd" d="M24.4365 12.5243H21.1738L19.4329 22H21.1251L21.5878 19.489H23.0487C23.5437 19.489 24.0226 19.4274 24.4852 19.304C24.9479 19.1805 25.382 18.8898 25.7879 18.4317C26.1207 18.0704 26.3803 17.6652 26.567 17.2159C26.7618 16.7665 26.8877 16.3085 26.9444 15.8414C27.0905 14.8193 26.9486 14.0132 26.5183 13.4229C26.0881 12.8327 25.3942 12.533 24.4365 12.5243ZM22.5958 14.0441L21.8678 17.9956C21.9165 18.0043 21.9652 18.0088 22.0139 18.0088H22.1843C22.9635 18.0176 23.6128 17.934 24.1322 17.7577C24.6515 17.5727 25.0007 16.9296 25.1792 15.8282C25.3253 14.9031 25.1792 14.37 24.7409 14.2291C24.3107 14.0882 23.7711 14.0221 23.1217 14.0309C23.0243 14.0396 22.9311 14.0441 22.8417 14.0441H22.5958Z" fill="white"/></svg>           
                            
                        </div>
                        <h3 class='text-2xl font-bold'>PHP/ Laravel</h3>
                    </div>
                    <p class='text-base w-10/12'>
                        فریم‌ورک اصلی من برای توسعه بک‌اند. با LARAVEL / PHP پروژه‌هایی می‌سازم که هم عملکرد خوبی داشته باشن و هم در آینده به‌راحتی بشه گسترششون داد. همیشه سعی می‌کنم کدها تمیز، قابل فهم و اصولی باشن.                    </p>
                </div>
            </div>
            <div class='min-w-2/12 flex flex-col gap-4'>
                <div class=" w-full rounded-2xl flex flex-col gap-5 text-[var(--color-white)] justify-between py-10 items-center text-center border-1 border-gray-800" data-index="2">
                    <div class='flex flex-col justify-center items-center gap-7'>
                        <div class='size-15 bg-[var(--color-gray-2)] rounded-full flex justify-center items-center p-3 border-1 border-[var(--color-border)]'>
                            <svg class='w-full' viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="2" y="2" width="28" height="28" fill="#FFCA28"/><path d="M19 25.2879L21.0615 23.9237C21.2231 24.4313 22.2462 25.6368 23.5385 25.6368C24.8308 25.6368 25.4308 24.931 25.4308 24.463C25.4308 23.1878 24.1112 22.7382 23.4774 22.5223C23.374 22.4871 23.289 22.4581 23.2308 22.4328C23.2009 22.4198 23.1558 22.4025 23.0979 22.3804C22.393 22.1111 19.7923 21.1175 19.7923 18.2373C19.7923 15.065 22.8538 14.7002 23.5462 14.7002C23.9991 14.7002 26.1769 14.7557 27.2615 16.7939L25.2615 18.1898C24.8231 17.3015 24.0946 17.0081 23.6462 17.0081C22.5385 17.0081 22.3077 17.8201 22.3077 18.1898C22.3077 19.227 23.5112 19.6919 24.5273 20.0844C24.7932 20.1871 25.0462 20.2848 25.2615 20.3866C26.3692 20.91 28 21.7666 28 24.463C28 25.8136 26.8672 28.0002 24.0154 28.0002C20.1846 28.0002 19.1692 25.7003 19 25.2879Z" fill="#3E3E3E"/><path d="M9 25.5587L11.1487 24.1953C11.317 24.7026 11.9713 25.638 12.9205 25.638C13.8698 25.638 14.3557 24.663 14.3557 24.1953V15.0002H16.9982V24.1953C17.041 25.4636 16.3376 28.0002 13.2332 28.0002C10.379 28.0002 9.19242 26.3039 9 25.5587Z" fill="#3E3E3E"/></svg>
                        </div>
                        <h3 class='text-2xl font-bold'> js </h3>
                    </div>
                    <p class='text-base w-10/12'>
                        با جاوااسکریپت به صفحات جان می‌بخشم؛ از تعاملات ساده و روان گرفته تا رفتارهای پویا که تجربه کاربر رو نرم و لذت‌بخش می‌کنه.
                    </p>
                </div>0
            </div>
            <div class='min-w-2/12 flex flex-col gap-4'>
                <div class=" w-full rounded-2xl flex flex-col gap-5 text-[var(--color-white)] justify-between py-10 items-center text-center border-1 border-gray-800" data-index="2">
                    <div class='flex flex-col justify-center items-center gap-7'>
                        <div class='size-15 bg-[var(--color-gray-2)] rounded-full flex justify-center items-center p-3 border-1 border-[var(--color-border)]'>
                            <svg class='w-full' viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title>file_type_tailwind</title><path d="M9,13.7q1.4-5.6,7-5.6c5.6,0,6.3,4.2,9.1,4.9q2.8.7,4.9-2.1-1.4,5.6-7,5.6c-5.6,0-6.3-4.2-9.1-4.9Q11.1,10.9,9,13.7ZM2,22.1q1.4-5.6,7-5.6c5.6,0,6.3,4.2,9.1,4.9q2.8.7,4.9-2.1-1.4,5.6-7,5.6c-5.6,0-6.3-4.2-9.1-4.9Q4.1,19.3,2,22.1Z" style="fill:#44a8b3"></path></g></svg>
                        </div>
                        <h3 class='text-2xl font-bold'> tailwind / html / css </h3>
                    </div>
                    <p class='text-base w-10/12'>
                        با HTML و CSS ظاهر صفحات سایت رو طراحی می‌کنم و با استفاده از Tailwind، بخش‌های مختلف رابط کاربری رو پیاده‌سازی می‌کنم تا صفحات زیبا، منظم و واکنش‌گرا باشن.                    </p>
                </div>
            </div>

        </div>
    </div>

    <!-- قسمت پکیج ها  -->
    <!-- <div class='w-11/12 mx-auto py-10 mb-15'>
        
        <div class='w-11/12 mx-auto flex flex-col gap-5 justify-center text-center py-20'>
            <span class='text-[var(--color-primary-3rd)] font-bold text-base'> طرح قیمت من </span>
            <h2 class='text-[var(--color-heading)] text-[4vw] md:text-[3vw] lg:text-[2vw] font-bold'> انتخاب بهترین پکیج برای شروع همکاری </h2>
        </div>
        <div class='w-full grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4'>
            <div class="card w-full rounded-2xl flex flex-col text-[var(--color-white)] justify-between py-10 items-center text-center " data-index="2">
                <div class='flex flex-col justify-center items-center gap-7'>
                    <div class='size-15 bg-[var(--color-gray-2)] rounded-full flex justify-center items-center p-3'>
                        <svg class='w-11/12 fill-[var(--color-primary-3rd)]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M0 185.8c0-6.4 1.6-12.7 4.7-18.3L82.4 25C90.8 9.6 106.9 0 124.5 0h391c17.6 0 33.7 9.6 42.1 25l77.7 142.4c3.1 5.6 4.7 11.9 4.7 18.3c0 21.1-17.1 38.2-38.2 38.2H576V488c0 13.3-10.7 24-24 24s-24-10.7-24-24V224H384V472c0 22.1-17.9 40-40 40H104c-22.1 0-40-17.9-40-40V224H38.2C17.1 224 0 206.9 0 185.8zM112 224v96H336V224H112zM515.5 48l-391 0L54.7 176H585.3L515.5 48zM112 464H336V368H112v96z"/></svg>
                    </div>
                    <h3 class='text-2xl font-bold'> پکیج پایه API </h3>
                </div>
                <ul class='w-full flex flex-col gap-3 pt-5'>
                    <li class='w-full flex gap-2 items-center text-center justify-center'>
                        <svg class='size-5 ' viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="var(--color-white)"/><path d="M10.5795 15.5801C10.3795 15.5801 10.1895 15.5001 10.0495 15.3601L7.21945 12.5301C6.92945 12.2401 6.92945 11.7601 7.21945 11.4701C7.50945 11.1801 7.98945 11.1801 8.27945 11.4701L10.5795 13.7701L15.7195 8.6301C16.0095 8.3401 16.4895 8.3401 16.7795 8.6301C17.0695 8.9201 17.0695 9.4001 16.7795 9.6901L11.1095 15.3601C10.9695 15.5001 10.7795 15.5801 10.5795 15.5801Z" fill="#000000"/></svg>
                        <span class='text-white'> پیاده‌سازی RESTful API </span>    
                    </li>
                    <li class='w-full flex gap-2 items-center text-center justify-center'>
                        <svg class='size-5 ' viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="var(--color-white)"/><path d="M10.5795 15.5801C10.3795 15.5801 10.1895 15.5001 10.0495 15.3601L7.21945 12.5301C6.92945 12.2401 6.92945 11.7601 7.21945 11.4701C7.50945 11.1801 7.98945 11.1801 8.27945 11.4701L10.5795 13.7701L15.7195 8.6301C16.0095 8.3401 16.4895 8.3401 16.7795 8.6301C17.0695 8.9201 17.0695 9.4001 16.7795 9.6901L11.1095 15.3601C10.9695 15.5001 10.7795 15.5801 10.5795 15.5801Z" fill="#000000"/></svg>
                        <span class='text-white'> طراحی دیتابیس اولیه </span>    
                    </li>
                    <li class='w-full flex gap-2 items-center text-center justify-center'>
                        <svg class='size-5 ' viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="var(--color-white)"/><path d="M10.5795 15.5801C10.3795 15.5801 10.1895 15.5001 10.0495 15.3601L7.21945 12.5301C6.92945 12.2401 6.92945 11.7601 7.21945 11.4701C7.50945 11.1801 7.98945 11.1801 8.27945 11.4701L10.5795 13.7701L15.7195 8.6301C16.0095 8.3401 16.4895 8.3401 16.7795 8.6301C17.0695 8.9201 17.0695 9.4001 16.7795 9.6901L11.1095 15.3601C10.9695 15.5001 10.7795 15.5801 10.5795 15.5801Z" fill="#000000"/></svg>
                        <span class='text-white'> مستندسازی با Swagger </span>    
                    </li>
                    <li class='w-full flex gap-2 items-center text-center justify-center'>
                        <svg class='size-5 ' viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="var(--color-white)"/><path d="M10.5795 15.5801C10.3795 15.5801 10.1895 15.5001 10.0495 15.3601L7.21945 12.5301C6.92945 12.2401 6.92945 11.7601 7.21945 11.4701C7.50945 11.1801 7.98945 11.1801 8.27945 11.4701L10.5795 13.7701L15.7195 8.6301C16.0095 8.3401 16.4895 8.3401 16.7795 8.6301C17.0695 8.9201 17.0695 9.4001 16.7795 9.6901L11.1095 15.3601C10.9695 15.5001 10.7795 15.5801 10.5795 15.5801Z" fill="#000000"/></svg>
                        <span class='text-white'> امنیت پایه (JWT) </span>    
                    </li>
                </ul>

                <div class='w-11/12 h-[2px] bg-[var(--color-gray)] opacity-30 my-5'></div>
                <div class='flex flex-col gap-4 justify-center text-center items-center'>
                    <h3 class='font-bold text-4xl'> ۴,۵۰۰,۰۰۰ ریال </h3>
                    <p class='font-bold text-2xl'> پرداخت ماهانه </p>
                    <div class='group relative w-30 bg-[var(--color-primary-3rd)] flex items-center text-center justify-center py-2 px-4 rounded-full cursor-pointer'>
                        <svg class='absolute right-0 w-4 fill-[var(--color-white)] duration-500 group-hover:-translate-x-5 group-hover:opacity-100 opacity-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z"/></svg>
                        <span class='text-base text-[var(--color-white)] transition-all duration-400 translate-x-2 group-hover:-translate-x-5 font-bold'> برو بریم </span>
                        <svg class='absolute left-2 w-4 fill-[var(--color-white)] transition-all duration-200 group-hover:-translate-x-4 group-hover:opacity-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z"/></svg>
                    </div>
                </div>
            </div>
            <div class="card w-full rounded-2xl flex flex-col text-[var(--color-white)] justify-between py-10 items-center text-center " data-index="2">
                <div class='flex flex-col justify-center items-center gap-7'>
                    <div class='size-15 bg-[var(--color-gray-2)] rounded-full flex justify-center items-center p-3'>
                        <svg class='w-11/12 fill-[var(--color-primary-3rd)]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>
                    </div>
                    <h3 class='text-2xl font-bold'> پکیج کامل سیستم </h3>
                </div>
                <ul class='w-full flex flex-col gap-3 pt-5'>
                    <li class='w-full flex gap-2 items-center text-center justify-center'>
                        <svg class='size-5 ' viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="var(--color-white)"/><path d="M10.5795 15.5801C10.3795 15.5801 10.1895 15.5001 10.0495 15.3601L7.21945 12.5301C6.92945 12.2401 6.92945 11.7601 7.21945 11.4701C7.50945 11.1801 7.98945 11.1801 8.27945 11.4701L10.5795 13.7701L15.7195 8.6301C16.0095 8.3401 16.4895 8.3401 16.7795 8.6301C17.0695 8.9201 17.0695 9.4001 16.7795 9.6901L11.1095 15.3601C10.9695 15.5001 10.7795 15.5801 10.5795 15.5801Z" fill="#000000"/></svg>
                        <span class='text-white'> API + مدیریت کاربران </span>    
                    </li>
                    <li class='w-full flex gap-2 items-center text-center justify-center'>
                        <svg class='size-5 ' viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="var(--color-white)"/><path d="M10.5795 15.5801C10.3795 15.5801 10.1895 15.5001 10.0495 15.3601L7.21945 12.5301C6.92945 12.2401 6.92945 11.7601 7.21945 11.4701C7.50945 11.1801 7.98945 11.1801 8.27945 11.4701L10.5795 13.7701L15.7195 8.6301C16.0095 8.3401 16.4895 8.3401 16.7795 8.6301C17.0695 8.9201 17.0695 9.4001 16.7795 9.6901L11.1095 15.3601C10.9695 15.5001 10.7795 15.5801 10.5795 15.5801Z" fill="#000000"/></svg>
                        <span class='text-white'> طراحی دیتابیس پیشرفته </span>    
                    </li>
                    <li class='w-full flex gap-2 items-center text-center justify-center'>
                        <svg class='size-5 ' viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="var(--color-white)"/><path d="M10.5795 15.5801C10.3795 15.5801 10.1895 15.5001 10.0495 15.3601L7.21945 12.5301C6.92945 12.2401 6.92945 11.7601 7.21945 11.4701C7.50945 11.1801 7.98945 11.1801 8.27945 11.4701L10.5795 13.7701L15.7195 8.6301C16.0095 8.3401 16.4895 8.3401 16.7795 8.6301C17.0695 8.9201 17.0695 9.4001 16.7795 9.6901L11.1095 15.3601C10.9695 15.5001 10.7795 15.5801 10.5795 15.5801Z" fill="#000000"/></svg>
                        <span class='text-white'> تست نویسی (PHPUnit) </span>    
                    </li>
                    <li class='w-full flex gap-2 items-center text-center justify-center'>
                        <svg class='size-5 ' viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="var(--color-white)"/><path d="M10.5795 15.5801C10.3795 15.5801 10.1895 15.5001 10.0495 15.3601L7.21945 12.5301C6.92945 12.2401 6.92945 11.7601 7.21945 11.4701C7.50945 11.1801 7.98945 11.1801 8.27945 11.4701L10.5795 13.7701L15.7195 8.6301C16.0095 8.3401 16.4895 8.3401 16.7795 8.6301C17.0695 8.9201 17.0695 9.4001 16.7795 9.6901L11.1095 15.3601C10.9695 15.5001 10.7795 15.5801 10.5795 15.5801Z" fill="#000000"/></svg>
                        <span class='text-white'> پشتیبانی یک ماهه </span>    
                    </li>
                </ul>

                <div class='w-11/12 h-[2px] bg-[var(--color-gray)] opacity-30 my-5'></div>
                <div class='flex flex-col gap-4 justify-center text-center items-center'>
                    <h3 class='font-bold text-4xl'> ۷,۵۰۰,۰۰۰ ریال </h3>
                    <p class='font-bold text-2xl'> پرداخت ماهانه </p>
                    <div class='group relative w-30 bg-[var(--color-primary-3rd)] flex items-center text-center justify-center py-2 px-4 rounded-full cursor-pointer'>
                        <svg class='absolute right-0 w-4 fill-[var(--color-white)] duration-500 group-hover:-translate-x-5 group-hover:opacity-100 opacity-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z"/></svg>
                        <span class='text-base text-[var(--color-white)] transition-all duration-400 translate-x-2 group-hover:-translate-x-5 font-bold'> برو بریم </span>
                        <svg class='absolute left-2 w-4 fill-[var(--color-white)] transition-all duration-200 group-hover:-translate-x-4 group-hover:opacity-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z"/></svg>
                    </div>
                </div>
            </div>
            <div class="card w-full rounded-2xl flex flex-col text-[var(--color-white)] justify-between py-10 items-center text-center " data-index="2">
                <div class='flex flex-col justify-center items-center gap-7'>
                    <div class='size-15 bg-[var(--color-gray-2)] rounded-full flex justify-center items-center p-3'>
                        <svg class='w-11/12 fill-[var(--color-primary-3rd)]' viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11 20H21V10C21 8.89543 20.1046 8 19 8H15M11 16H11.01M17 16H17.01M7 16H7.01M11 12H11.01M17 12H17.01M7 12H7.01M11 8H11.01M7 8H7.01M15 20V6C15 4.89543 14.1046 4 13 4H5C3.89543 4 3 4.89543 3 6V20H15Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                    <h3 class='text-2xl font-bold'> معماری پیشرفته </h3>
                </div>
                <ul class='w-full flex flex-col gap-3 pt-5'>
                    <li class='w-full flex gap-2 items-center text-center justify-center'>
                        <svg class='size-5 ' viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="var(--color-white)"/><path d="M10.5795 15.5801C10.3795 15.5801 10.1895 15.5001 10.0495 15.3601L7.21945 12.5301C6.92945 12.2401 6.92945 11.7601 7.21945 11.4701C7.50945 11.1801 7.98945 11.1801 8.27945 11.4701L10.5795 13.7701L15.7195 8.6301C16.0095 8.3401 16.4895 8.3401 16.7795 8.6301C17.0695 8.9201 17.0695 9.4001 16.7795 9.6901L11.1095 15.3601C10.9695 15.5001 10.7795 15.5801 10.5795 15.5801Z" fill="#000000"/></svg>
                        <span class='text-white'> معماری Microservices </span>    
                    </li>
                    <li class='w-full flex gap-2 items-center text-center justify-center'>
                        <svg class='size-5 ' viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="var(--color-white)"/><path d="M10.5795 15.5801C10.3795 15.5801 10.1895 15.5001 10.0495 15.3601L7.21945 12.5301C6.92945 12.2401 6.92945 11.7601 7.21945 11.4701C7.50945 11.1801 7.98945 11.1801 8.27945 11.4701L10.5795 13.7701L15.7195 8.6301C16.0095 8.3401 16.4895 8.3401 16.7795 8.6301C17.0695 8.9201 17.0695 9.4001 16.7795 9.6901L11.1095 15.3601C10.9695 15.5001 10.7795 15.5801 10.5795 15.5801Z" fill="#000000"/></svg>
                        <span class='text-white'> Redis / Queue </span>    
                    </li>
                    <li class='w-full flex gap-2 items-center text-center justify-center'>
                        <svg class='size-5 ' viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="var(--color-white)"/><path d="M10.5795 15.5801C10.3795 15.5801 10.1895 15.5001 10.0495 15.3601L7.21945 12.5301C6.92945 12.2401 6.92945 11.7601 7.21945 11.4701C7.50945 11.1801 7.98945 11.1801 8.27945 11.4701L10.5795 13.7701L15.7195 8.6301C16.0095 8.3401 16.4895 8.3401 16.7795 8.6301C17.0695 8.9201 17.0695 9.4001 16.7795 9.6901L11.1095 15.3601C10.9695 15.5001 10.7795 15.5801 10.5795 15.5801Z" fill="#000000"/></svg>
                        <span class='text-white'> امنیت سطح بالا </span>    
                    </li>
                    <li class='w-full flex gap-2 items-center text-center justify-center'>
                        <svg class='size-5 ' viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="var(--color-white)"/><path d="M10.5795 15.5801C10.3795 15.5801 10.1895 15.5001 10.0495 15.3601L7.21945 12.5301C6.92945 12.2401 6.92945 11.7601 7.21945 11.4701C7.50945 11.1801 7.98945 11.1801 8.27945 11.4701L10.5795 13.7701L15.7195 8.6301C16.0095 8.3401 16.4895 8.3401 16.7795 8.6301C17.0695 8.9201 17.0695 9.4001 16.7795 9.6901L11.1095 15.3601C10.9695 15.5001 10.7795 15.5801 10.5795 15.5801Z" fill="#000000"/></svg>
                        <span class='text-white'> پشتیبانی ۳ ماهه </span>    
                    </li>
                </ul>

                <div class='w-11/12 h-[2px] bg-[var(--color-gray)] opacity-30 my-5'></div>
                <div class='flex flex-col gap-4 justify-center text-center items-center'>
                    <h3 class='font-bold text-4xl'> ۱۲,۰۰۰,۰۰۰ ریال </h3>
                    <p class='font-bold text-2xl'> پرداخت ماهانه </p>
                    <div class='group relative w-30 bg-[var(--color-primary-3rd)] flex items-center text-center justify-center py-2 px-4 rounded-full cursor-pointer'>
                        <svg class='absolute right-0 w-4 fill-[var(--color-white)] duration-500 group-hover:-translate-x-5 group-hover:opacity-100 opacity-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z"/></svg>
                        <span class='text-base text-[var(--color-white)] transition-all duration-400 translate-x-2 group-hover:-translate-x-5 font-bold'> برو بریم </span>
                        <svg class='absolute left-2 w-4 fill-[var(--color-white)] transition-all duration-200 group-hover:-translate-x-4 group-hover:opacity-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z"/></svg>
                    </div>
                </div>
            </div>
        </div>
        <div class='w-full flex justify-center items-center py-10'>
            <div class='group relative w-55 bg-[var(--color-primary-3rd)] flex items-center text-center justify-center lg:py-3 py-3 px-4 rounded-full cursor-pointer'>
                <svg class='absolute right-0 w-4 fill-[var(--color-white)] duration-500 group-hover:-translate-x-5 group-hover:opacity-100 opacity-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z"/></svg>
                <span class='text-sm text-[var(--color-white)] transition-all duration-400 translate-x-2 group-hover:-translate-x-5 font-bold'> مشاهده همه طرح ها </span>
                <svg class='absolute left-2 w-4 fill-[var(--color-white)] transition-all duration-200 group-hover:-translate-x-4 group-hover:opacity-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z"/></svg>
            </div>
        </div>

    </div> -->



<div id="team" class="w-11/12 mx-auto flex flex-col gap-5 mb-15">
    <div class="w-full flex flex-col gap-3 justify-center text-center">
        <span class="text-[var(--color-primary-3rd)] font-bold text-base">
            هم‌تیمی‌های من
        </span>
        <h2 class="text-[var(--color-heading)] text-[4vw] md:text-[3vw] lg:text-[2vw] font-bold">
            تیمی که با هم به کمک هم ساختیم
        </h2>
        <p class="text-[var(--color-gray)] text-sm max-w-2xl mx-auto">
            هم‌تیمی‌های من، سرمایه‌های اصلی این مسیر هستند. هرکدام با تخصص و انرژی خود،
            به رشد و کیفیت کارها کمک می‌کنند.
        </p>
    </div>

    <div class="w-full overflow-x-auto overflow-y-hidden pb-4" style="scrollbar-width: thin; scrollbar-color: var(--color-primary-3rd) transparent;">
        
        <div class="flex gap-5 w-max py-2">


            <div class="card bg-[var(--color-gray-2)] border border-[var(--color-border)] rounded-2xl p-5 flex flex-col items-center text-center transition-all duration-300 hover:scale-[1.02] hover:border-[var(--color-primary-3rd)] w-[220px] sm:w-[240px] flex-shrink-0">
                <a href="" class="w-24 h-24 rounded-full overflow-hidden border-4 border-[var(--color-primary-3rd)] mb-4">
                    <img class="w-full h-full object-cover" src="assets/img/team_picture/asadi.webp" alt="">
                </a>
                <h3 class="text-lg font-bold text-[var(--color-white)]"> امیر اسدی </h3>
                <p class="text-sm text-[var(--color-gray)]">طراح وبسایت فول استک</p>

                <div class='flex gap-3 items-center'>
                    <a href="https://github.com/amir-asadi-dev" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-gray-2)] z-1'>
                        <svg class='w-6 fill-[var(--color-white)] z-3' viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>github [#142]</title><desc>Created with Sketch.</desc><defs></defs><g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd"><g id="Dribbble-Light-Preview" transform="translate(-140.000000, -7559.000000)"><g id="icons" transform="translate(56.000000, 160.000000)"><path d="M94,7399 C99.523,7399 104,7403.59 104,7409.253 C104,7413.782 101.138,7417.624 97.167,7418.981 C96.66,7419.082 96.48,7418.762 96.48,7418.489 C96.48,7418.151 96.492,7417.047 96.492,7415.675 C96.492,7414.719 96.172,7414.095 95.813,7413.777 C98.04,7413.523 100.38,7412.656 100.38,7408.718 C100.38,7407.598 99.992,7406.684 99.35,7405.966 C99.454,7405.707 99.797,7404.664 99.252,7403.252 C99.252,7403.252 98.414,7402.977 96.505,7404.303 C95.706,7404.076 94.85,7403.962 94,7403.958 C93.15,7403.962 92.295,7404.076 91.497,7404.303 C89.586,7402.977 88.746,7403.252 88.746,7403.252 C88.203,7404.664 88.546,7405.707 88.649,7405.966 C88.01,7406.684 87.619,7407.598 87.619,7408.718 C87.619,7412.646 89.954,7413.526 92.175,7413.785 C91.889,7414.041 91.63,7414.493 91.54,7415.156 C90.97,7415.418 89.522,7415.871 88.63,7414.304 C88.63,7414.304 88.101,7413.319 87.097,7413.247 C87.097,7413.247 86.122,7413.234 87.029,7413.87 C87.029,7413.87 87.684,7414.185 88.139,7415.37 C88.139,7415.37 88.726,7417.2 91.508,7416.58 C91.513,7417.437 91.522,7418.245 91.522,7418.489 C91.522,7418.76 91.338,7419.077 90.839,7418.982 C86.865,7417.627 84,7413.783 84,7409.253 C84,7403.59 88.478,7399 94,7399" id="github-[#142]"></path></g></g></g></svg>
                        <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full z-2'></div>
                    </a>
                    <a href="#" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-gray-2)] z-1'>
                        <svg class='w-7 fill-[var(--color-white)] z-3' viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.5 8C7.32843 8 8 7.32843 8 6.5C8 5.67157 7.32843 5 6.5 5C5.67157 5 5 5.67157 5 6.5C5 7.32843 5.67157 8 6.5 8Z"/><path d="M5 10C5 9.44772 5.44772 9 6 9H7C7.55228 9 8 9.44771 8 10V18C8 18.5523 7.55228 19 7 19H6C5.44772 19 5 18.5523 5 18V10Z" /><path d="M11 19H12C12.5523 19 13 18.5523 13 18V13.5C13 12 16 11 16 13V18.0004C16 18.5527 16.4477 19 17 19H18C18.5523 19 19 18.5523 19 18V12C19 10 17.5 9 15.5 9C13.5 9 13 10.5 13 10.5V10C13 9.44771 12.5523 9 12 9H11C10.4477 9 10 9.44772 10 10V18C10 18.5523 10.4477 19 11 19Z" /></svg>
                        <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full z-2'></div>
                    </a>
                    <a href="https://asadi-dev.ir" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-gray-2)] z-1'>
                        <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full z-2'></div>
                        <svg class='w-7 fill-[var(--color-white)] z-3' version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" ><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css">  </style> <g> <path class="st0" d="M276.239,252.183c-6.37,2.127-13.165,3.308-20.239,3.308c-7.074,0-13.87-1.181-20.24-3.308 c-46.272,7.599-70.489,41.608-70.489,82.877H256h90.728C346.728,293.791,322.515,259.782,276.239,252.183z"></path> <path class="st0" d="M256,240.788c27.43,0,49.658-22.24,49.658-49.666v-14.087c0-27.426-22.228-49.659-49.658-49.659 c-27.43,0-49.658,22.233-49.658,49.659v14.087C206.342,218.548,228.57,240.788,256,240.788z"></path> <path class="st0" d="M378.4,0H133.582C86.234,0,47.7,38.542,47.7,85.899v340.22C47.7,473.476,86.234,512,133.582,512h205.695 h13.175l9.318-9.301l93.229-93.229l9.301-9.31v-13.174V85.899C464.3,38.542,425.766,0,378.4,0z M432.497,386.985H384.35 c-24.882,0-45.074,20.183-45.074,45.073v48.139H133.582c-29.866,0-54.078-24.221-54.078-54.078V85.899 c0-29.874,24.212-54.096,54.078-54.096H378.4c29.876,0,54.096,24.222,54.096,54.096V386.985z"></path> </g> </g></svg>
                    </a>
                </div>
            </div>
            
            <div class="card bg-[var(--color-gray-2)] border border-[var(--color-border)] rounded-2xl p-5 flex flex-col items-center text-center transition-all duration-300 hover:scale-[1.02] hover:border-[var(--color-primary-3rd)] w-[220px] sm:w-[240px] flex-shrink-0">
                <a href="" class="w-24 h-24 rounded-full overflow-hidden border-4 border-[var(--color-primary-3rd)] mb-4">
                    <img class="w-full h-full object-cover" src="assets/img/team_picture/eftekhari.webp" alt="">
                </a>
                <h3 class="text-lg font-bold text-[var(--color-white)]"> محمد افتخاری </h3>
                <p class="text-sm text-[var(--color-gray)]">توسعه‌دهنده فول استک</p>

                <div class='flex gap-3 items-center'>
                    <a href="https://github.com/mohammad-eft" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-gray-2)] z-1'>
                        <svg class='w-6 fill-[var(--color-white)] z-3' viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>github [#142]</title><desc>Created with Sketch.</desc><defs></defs><g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd"><g id="Dribbble-Light-Preview" transform="translate(-140.000000, -7559.000000)"><g id="icons" transform="translate(56.000000, 160.000000)"><path d="M94,7399 C99.523,7399 104,7403.59 104,7409.253 C104,7413.782 101.138,7417.624 97.167,7418.981 C96.66,7419.082 96.48,7418.762 96.48,7418.489 C96.48,7418.151 96.492,7417.047 96.492,7415.675 C96.492,7414.719 96.172,7414.095 95.813,7413.777 C98.04,7413.523 100.38,7412.656 100.38,7408.718 C100.38,7407.598 99.992,7406.684 99.35,7405.966 C99.454,7405.707 99.797,7404.664 99.252,7403.252 C99.252,7403.252 98.414,7402.977 96.505,7404.303 C95.706,7404.076 94.85,7403.962 94,7403.958 C93.15,7403.962 92.295,7404.076 91.497,7404.303 C89.586,7402.977 88.746,7403.252 88.746,7403.252 C88.203,7404.664 88.546,7405.707 88.649,7405.966 C88.01,7406.684 87.619,7407.598 87.619,7408.718 C87.619,7412.646 89.954,7413.526 92.175,7413.785 C91.889,7414.041 91.63,7414.493 91.54,7415.156 C90.97,7415.418 89.522,7415.871 88.63,7414.304 C88.63,7414.304 88.101,7413.319 87.097,7413.247 C87.097,7413.247 86.122,7413.234 87.029,7413.87 C87.029,7413.87 87.684,7414.185 88.139,7415.37 C88.139,7415.37 88.726,7417.2 91.508,7416.58 C91.513,7417.437 91.522,7418.245 91.522,7418.489 C91.522,7418.76 91.338,7419.077 90.839,7418.982 C86.865,7417.627 84,7413.783 84,7409.253 C84,7403.59 88.478,7399 94,7399" id="github-[#142]"></path></g></g></g></svg>
                        <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full z-2'></div>
                    </a>

                    <a href="#" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-gray-2)] z-1'>
                        <svg class='w-7 fill-[var(--color-white)] z-3' viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.5 8C7.32843 8 8 7.32843 8 6.5C8 5.67157 7.32843 5 6.5 5C5.67157 5 5 5.67157 5 6.5C5 7.32843 5.67157 8 6.5 8Z"/><path d="M5 10C5 9.44772 5.44772 9 6 9H7C7.55228 9 8 9.44771 8 10V18C8 18.5523 7.55228 19 7 19H6C5.44772 19 5 18.5523 5 18V10Z" /><path d="M11 19H12C12.5523 19 13 18.5523 13 18V13.5C13 12 16 11 16 13V18.0004C16 18.5527 16.4477 19 17 19H18C18.5523 19 19 18.5523 19 18V12C19 10 17.5 9 15.5 9C13.5 9 13 10.5 13 10.5V10C13 9.44771 12.5523 9 12 9H11C10.4477 9 10 9.44772 10 10V18C10 18.5523 10.4477 19 11 19Z" /></svg>
                        <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full z-2'></div>
                    </a>
                    <a href="https://mreftekhari.ir" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-gray-2)] z-1'>
                        <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full z-2'></div>
                        <svg class='w-7 fill-[var(--color-white)] z-3' version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" ><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css">  </style> <g> <path class="st0" d="M276.239,252.183c-6.37,2.127-13.165,3.308-20.239,3.308c-7.074,0-13.87-1.181-20.24-3.308 c-46.272,7.599-70.489,41.608-70.489,82.877H256h90.728C346.728,293.791,322.515,259.782,276.239,252.183z"></path> <path class="st0" d="M256,240.788c27.43,0,49.658-22.24,49.658-49.666v-14.087c0-27.426-22.228-49.659-49.658-49.659 c-27.43,0-49.658,22.233-49.658,49.659v14.087C206.342,218.548,228.57,240.788,256,240.788z"></path> <path class="st0" d="M378.4,0H133.582C86.234,0,47.7,38.542,47.7,85.899v340.22C47.7,473.476,86.234,512,133.582,512h205.695 h13.175l9.318-9.301l93.229-93.229l9.301-9.31v-13.174V85.899C464.3,38.542,425.766,0,378.4,0z M432.497,386.985H384.35 c-24.882,0-45.074,20.183-45.074,45.073v48.139H133.582c-29.866,0-54.078-24.221-54.078-54.078V85.899 c0-29.874,24.212-54.096,54.078-54.096H378.4c29.876,0,54.096,24.222,54.096,54.096V386.985z"></path> </g> </g></svg>
                    </a>
   
                </div>
            </div>
            <div class="card bg-[var(--color-gray-2)] border border-[var(--color-border)] rounded-2xl p-5 flex flex-col items-center text-center transition-all duration-300 hover:scale-[1.02] hover:border-[var(--color-primary-3rd)] w-[220px] sm:w-[240px] flex-shrink-0">
                <a href="" class="w-24 h-24 rounded-full overflow-hidden border-4 border-[var(--color-primary-3rd)] mb-4">
                    <img class="w-full h-full object-cover" src="assets/img/team_picture/nasiri.webp" alt="">
                </a>
                <h3 class="text-lg font-bold text-[var(--color-white)]"> سروین نصیری </h3>
                <p class="text-sm text-[var(--color-gray)]">طراح وبسایت فول استک</p>

                <div class='flex gap-3 items-center'>
                    <a href="https://github.com/servin-dev" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-gray-2)] z-1'>
                        <svg class='w-6 fill-[var(--color-white)] z-3' viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>github [#142]</title><desc>Created with Sketch.</desc><defs></defs><g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd"><g id="Dribbble-Light-Preview" transform="translate(-140.000000, -7559.000000)"><g id="icons" transform="translate(56.000000, 160.000000)"><path d="M94,7399 C99.523,7399 104,7403.59 104,7409.253 C104,7413.782 101.138,7417.624 97.167,7418.981 C96.66,7419.082 96.48,7418.762 96.48,7418.489 C96.48,7418.151 96.492,7417.047 96.492,7415.675 C96.492,7414.719 96.172,7414.095 95.813,7413.777 C98.04,7413.523 100.38,7412.656 100.38,7408.718 C100.38,7407.598 99.992,7406.684 99.35,7405.966 C99.454,7405.707 99.797,7404.664 99.252,7403.252 C99.252,7403.252 98.414,7402.977 96.505,7404.303 C95.706,7404.076 94.85,7403.962 94,7403.958 C93.15,7403.962 92.295,7404.076 91.497,7404.303 C89.586,7402.977 88.746,7403.252 88.746,7403.252 C88.203,7404.664 88.546,7405.707 88.649,7405.966 C88.01,7406.684 87.619,7407.598 87.619,7408.718 C87.619,7412.646 89.954,7413.526 92.175,7413.785 C91.889,7414.041 91.63,7414.493 91.54,7415.156 C90.97,7415.418 89.522,7415.871 88.63,7414.304 C88.63,7414.304 88.101,7413.319 87.097,7413.247 C87.097,7413.247 86.122,7413.234 87.029,7413.87 C87.029,7413.87 87.684,7414.185 88.139,7415.37 C88.139,7415.37 88.726,7417.2 91.508,7416.58 C91.513,7417.437 91.522,7418.245 91.522,7418.489 C91.522,7418.76 91.338,7419.077 90.839,7418.982 C86.865,7417.627 84,7413.783 84,7409.253 C84,7403.59 88.478,7399 94,7399" id="github-[#142]"></path></g></g></g></svg>
                        <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full z-2'></div>
                    </a>
                    <a href="#" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-gray-2)] z-1'>
                        <svg class='w-7 fill-[var(--color-white)] z-3' viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.5 8C7.32843 8 8 7.32843 8 6.5C8 5.67157 7.32843 5 6.5 5C5.67157 5 5 5.67157 5 6.5C5 7.32843 5.67157 8 6.5 8Z"/><path d="M5 10C5 9.44772 5.44772 9 6 9H7C7.55228 9 8 9.44771 8 10V18C8 18.5523 7.55228 19 7 19H6C5.44772 19 5 18.5523 5 18V10Z" /><path d="M11 19H12C12.5523 19 13 18.5523 13 18V13.5C13 12 16 11 16 13V18.0004C16 18.5527 16.4477 19 17 19H18C18.5523 19 19 18.5523 19 18V12C19 10 17.5 9 15.5 9C13.5 9 13 10.5 13 10.5V10C13 9.44771 12.5523 9 12 9H11C10.4477 9 10 9.44772 10 10V18C10 18.5523 10.4477 19 11 19Z" /></svg>
                        <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full z-2'></div>
                    </a>
                    <a href="https://servinnasiri.ir" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-gray-2)] z-1'>
                        <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full z-2'></div>
                        <svg class='w-7 fill-[var(--color-white)] z-3' version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" ><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css">  </style> <g> <path class="st0" d="M276.239,252.183c-6.37,2.127-13.165,3.308-20.239,3.308c-7.074,0-13.87-1.181-20.24-3.308 c-46.272,7.599-70.489,41.608-70.489,82.877H256h90.728C346.728,293.791,322.515,259.782,276.239,252.183z"></path> <path class="st0" d="M256,240.788c27.43,0,49.658-22.24,49.658-49.666v-14.087c0-27.426-22.228-49.659-49.658-49.659 c-27.43,0-49.658,22.233-49.658,49.659v14.087C206.342,218.548,228.57,240.788,256,240.788z"></path> <path class="st0" d="M378.4,0H133.582C86.234,0,47.7,38.542,47.7,85.899v340.22C47.7,473.476,86.234,512,133.582,512h205.695 h13.175l9.318-9.301l93.229-93.229l9.301-9.31v-13.174V85.899C464.3,38.542,425.766,0,378.4,0z M432.497,386.985H384.35 c-24.882,0-45.074,20.183-45.074,45.073v48.139H133.582c-29.866,0-54.078-24.221-54.078-54.078V85.899 c0-29.874,24.212-54.096,54.078-54.096H378.4c29.876,0,54.096,24.222,54.096,54.096V386.985z"></path> </g> </g></svg>
                    </a>
                </div>
            </div>
            <div class="card bg-[var(--color-gray-2)] border border-[var(--color-border)] rounded-2xl p-5 flex flex-col items-center text-center transition-all duration-300 hover:scale-[1.02] hover:border-[var(--color-primary-3rd)] w-[220px] sm:w-[240px] flex-shrink-0">
                <a href="" class="w-24 h-24 rounded-full overflow-hidden border-4 border-[var(--color-primary-3rd)] mb-4">
                    <img class="w-full h-full object-cover" src="assets/img/team_picture/hossein.webp" alt="">
                </a>
                <h3 class="text-lg font-bold text-[var(--color-white)]"> حسین آبیاری </h3>
                <p class="text-sm text-[var(--color-gray)]">توسعه‌دهنده بک‌اند</p>

                <div class='flex gap-3 items-center'>
                    <a href="https://github.com/hossein-dev2025" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-gray-2)] z-1'>
                        <svg class='w-6 fill-[var(--color-white)] z-3' viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>github [#142]</title><desc>Created with Sketch.</desc><defs></defs><g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd"><g id="Dribbble-Light-Preview" transform="translate(-140.000000, -7559.000000)"><g id="icons" transform="translate(56.000000, 160.000000)"><path d="M94,7399 C99.523,7399 104,7403.59 104,7409.253 C104,7413.782 101.138,7417.624 97.167,7418.981 C96.66,7419.082 96.48,7418.762 96.48,7418.489 C96.48,7418.151 96.492,7417.047 96.492,7415.675 C96.492,7414.719 96.172,7414.095 95.813,7413.777 C98.04,7413.523 100.38,7412.656 100.38,7408.718 C100.38,7407.598 99.992,7406.684 99.35,7405.966 C99.454,7405.707 99.797,7404.664 99.252,7403.252 C99.252,7403.252 98.414,7402.977 96.505,7404.303 C95.706,7404.076 94.85,7403.962 94,7403.958 C93.15,7403.962 92.295,7404.076 91.497,7404.303 C89.586,7402.977 88.746,7403.252 88.746,7403.252 C88.203,7404.664 88.546,7405.707 88.649,7405.966 C88.01,7406.684 87.619,7407.598 87.619,7408.718 C87.619,7412.646 89.954,7413.526 92.175,7413.785 C91.889,7414.041 91.63,7414.493 91.54,7415.156 C90.97,7415.418 89.522,7415.871 88.63,7414.304 C88.63,7414.304 88.101,7413.319 87.097,7413.247 C87.097,7413.247 86.122,7413.234 87.029,7413.87 C87.029,7413.87 87.684,7414.185 88.139,7415.37 C88.139,7415.37 88.726,7417.2 91.508,7416.58 C91.513,7417.437 91.522,7418.245 91.522,7418.489 C91.522,7418.76 91.338,7419.077 90.839,7418.982 C86.865,7417.627 84,7413.783 84,7409.253 C84,7403.59 88.478,7399 94,7399" id="github-[#142]"></path></g></g></g></svg>
                        <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full z-2'></div>
                    </a>
                    <a href="#" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-gray-2)] z-1'>
                        <svg class='w-7 fill-[var(--color-white)] z-3' viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.5 8C7.32843 8 8 7.32843 8 6.5C8 5.67157 7.32843 5 6.5 5C5.67157 5 5 5.67157 5 6.5C5 7.32843 5.67157 8 6.5 8Z"/><path d="M5 10C5 9.44772 5.44772 9 6 9H7C7.55228 9 8 9.44771 8 10V18C8 18.5523 7.55228 19 7 19H6C5.44772 19 5 18.5523 5 18V10Z" /><path d="M11 19H12C12.5523 19 13 18.5523 13 18V13.5C13 12 16 11 16 13V18.0004C16 18.5527 16.4477 19 17 19H18C18.5523 19 19 18.5523 19 18V12C19 10 17.5 9 15.5 9C13.5 9 13 10.5 13 10.5V10C13 9.44771 12.5523 9 12 9H11C10.4477 9 10 9.44772 10 10V18C10 18.5523 10.4477 19 11 19Z" /></svg>
                        <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full z-2'></div>
                    </a>
                    <a href="https://hosseinabyare.ir" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-gray-2)] z-1'>
                        <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full z-2'></div>
                        <svg class='w-7 fill-[var(--color-white)] z-3' version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" ><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css">  </style> <g> <path class="st0" d="M276.239,252.183c-6.37,2.127-13.165,3.308-20.239,3.308c-7.074,0-13.87-1.181-20.24-3.308 c-46.272,7.599-70.489,41.608-70.489,82.877H256h90.728C346.728,293.791,322.515,259.782,276.239,252.183z"></path> <path class="st0" d="M256,240.788c27.43,0,49.658-22.24,49.658-49.666v-14.087c0-27.426-22.228-49.659-49.658-49.659 c-27.43,0-49.658,22.233-49.658,49.659v14.087C206.342,218.548,228.57,240.788,256,240.788z"></path> <path class="st0" d="M378.4,0H133.582C86.234,0,47.7,38.542,47.7,85.899v340.22C47.7,473.476,86.234,512,133.582,512h205.695 h13.175l9.318-9.301l93.229-93.229l9.301-9.31v-13.174V85.899C464.3,38.542,425.766,0,378.4,0z M432.497,386.985H384.35 c-24.882,0-45.074,20.183-45.074,45.073v48.139H133.582c-29.866,0-54.078-24.221-54.078-54.078V85.899 c0-29.874,24.212-54.096,54.078-54.096H378.4c29.876,0,54.096,24.222,54.096,54.096V386.985z"></path> </g> </g></svg>
                    </a>
                </div>
            </div>
            <div class="card bg-[var(--color-gray-2)] border border-[var(--color-border)] rounded-2xl p-5 flex flex-col items-center text-center transition-all duration-300 hover:scale-[1.02] hover:border-[var(--color-primary-3rd)] w-[220px] sm:w-[240px] flex-shrink-0">
                <a href="" class="w-24 h-24 rounded-full overflow-hidden border-4 border-[var(--color-primary-3rd)] mb-4">
                    <img class="w-full h-full object-cover" src="assets/img/team_picture/khodagolipoor.webp" alt="">
                </a>
                <h3 class="text-lg font-bold text-[var(--color-white)]"> آیلار خداقلی پور </h3>
                <p class="text-sm text-[var(--color-gray)]">طراح وبسایت فول استک</p>

                <div class='flex gap-3 items-center'>
                    <a href="https://github.com/aylar04" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-gray-2)] z-1'>
                        <svg class='w-6 fill-[var(--color-white)] z-3' viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>github [#142]</title><desc>Created with Sketch.</desc><defs></defs><g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd"><g id="Dribbble-Light-Preview" transform="translate(-140.000000, -7559.000000)"><g id="icons" transform="translate(56.000000, 160.000000)"><path d="M94,7399 C99.523,7399 104,7403.59 104,7409.253 C104,7413.782 101.138,7417.624 97.167,7418.981 C96.66,7419.082 96.48,7418.762 96.48,7418.489 C96.48,7418.151 96.492,7417.047 96.492,7415.675 C96.492,7414.719 96.172,7414.095 95.813,7413.777 C98.04,7413.523 100.38,7412.656 100.38,7408.718 C100.38,7407.598 99.992,7406.684 99.35,7405.966 C99.454,7405.707 99.797,7404.664 99.252,7403.252 C99.252,7403.252 98.414,7402.977 96.505,7404.303 C95.706,7404.076 94.85,7403.962 94,7403.958 C93.15,7403.962 92.295,7404.076 91.497,7404.303 C89.586,7402.977 88.746,7403.252 88.746,7403.252 C88.203,7404.664 88.546,7405.707 88.649,7405.966 C88.01,7406.684 87.619,7407.598 87.619,7408.718 C87.619,7412.646 89.954,7413.526 92.175,7413.785 C91.889,7414.041 91.63,7414.493 91.54,7415.156 C90.97,7415.418 89.522,7415.871 88.63,7414.304 C88.63,7414.304 88.101,7413.319 87.097,7413.247 C87.097,7413.247 86.122,7413.234 87.029,7413.87 C87.029,7413.87 87.684,7414.185 88.139,7415.37 C88.139,7415.37 88.726,7417.2 91.508,7416.58 C91.513,7417.437 91.522,7418.245 91.522,7418.489 C91.522,7418.76 91.338,7419.077 90.839,7418.982 C86.865,7417.627 84,7413.783 84,7409.253 C84,7403.59 88.478,7399 94,7399" id="github-[#142]"></path></g></g></g></svg>
                        <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full z-2'></div>
                    </a>
                    <a href="#" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-gray-2)] z-1'>
                        <svg class='w-7 fill-[var(--color-white)] z-3' viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.5 8C7.32843 8 8 7.32843 8 6.5C8 5.67157 7.32843 5 6.5 5C5.67157 5 5 5.67157 5 6.5C5 7.32843 5.67157 8 6.5 8Z"/><path d="M5 10C5 9.44772 5.44772 9 6 9H7C7.55228 9 8 9.44771 8 10V18C8 18.5523 7.55228 19 7 19H6C5.44772 19 5 18.5523 5 18V10Z" /><path d="M11 19H12C12.5523 19 13 18.5523 13 18V13.5C13 12 16 11 16 13V18.0004C16 18.5527 16.4477 19 17 19H18C18.5523 19 19 18.5523 19 18V12C19 10 17.5 9 15.5 9C13.5 9 13 10.5 13 10.5V10C13 9.44771 12.5523 9 12 9H11C10.4477 9 10 9.44772 10 10V18C10 18.5523 10.4477 19 11 19Z" /></svg>
                        <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full z-2'></div>
                    </a>
                    <a href="https://aylardev.ir" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-gray-2)] z-1'>
                        <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full z-2'></div>
                        <svg class='w-7 fill-[var(--color-white)] z-3' version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" ><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css">  </style> <g> <path class="st0" d="M276.239,252.183c-6.37,2.127-13.165,3.308-20.239,3.308c-7.074,0-13.87-1.181-20.24-3.308 c-46.272,7.599-70.489,41.608-70.489,82.877H256h90.728C346.728,293.791,322.515,259.782,276.239,252.183z"></path> <path class="st0" d="M256,240.788c27.43,0,49.658-22.24,49.658-49.666v-14.087c0-27.426-22.228-49.659-49.658-49.659 c-27.43,0-49.658,22.233-49.658,49.659v14.087C206.342,218.548,228.57,240.788,256,240.788z"></path> <path class="st0" d="M378.4,0H133.582C86.234,0,47.7,38.542,47.7,85.899v340.22C47.7,473.476,86.234,512,133.582,512h205.695 h13.175l9.318-9.301l93.229-93.229l9.301-9.31v-13.174V85.899C464.3,38.542,425.766,0,378.4,0z M432.497,386.985H384.35 c-24.882,0-45.074,20.183-45.074,45.073v48.139H133.582c-29.866,0-54.078-24.221-54.078-54.078V85.899 c0-29.874,24.212-54.096,54.078-54.096H378.4c29.876,0,54.096,24.222,54.096,54.096V386.985z"></path> </g> </g></svg>
                    </a>
                </div>
            </div>
            <div class="card bg-[var(--color-gray-2)] border border-[var(--color-border)] rounded-2xl p-5 flex flex-col items-center text-center transition-all duration-300 hover:scale-[1.02] hover:border-[var(--color-primary-3rd)] w-[220px] sm:w-[240px] flex-shrink-0">
                <a href="" class="w-24 h-24 rounded-full overflow-hidden border-4 border-[var(--color-primary-3rd)] mb-4">
                    <img class="w-full h-full object-cover" src="assets/img/team_picture/mahdi.webp" alt="">
                </a>
                <h3 class="text-lg font-bold text-[var(--color-white)]"> محمد مهدی بندعلی </h3>
                <p class="text-sm text-[var(--color-gray)]"> توسعه دهنده فرانت اند </p>

                <div class='flex gap-3 items-center'>
                    <a href="https://github.com/mohammadmahdibandali" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-gray-2)] z-1'>
                        <svg class='w-6 fill-[var(--color-white)] z-3' viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>github [#142]</title><desc>Created with Sketch.</desc><defs></defs><g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd"><g id="Dribbble-Light-Preview" transform="translate(-140.000000, -7559.000000)"><g id="icons" transform="translate(56.000000, 160.000000)"><path d="M94,7399 C99.523,7399 104,7403.59 104,7409.253 C104,7413.782 101.138,7417.624 97.167,7418.981 C96.66,7419.082 96.48,7418.762 96.48,7418.489 C96.48,7418.151 96.492,7417.047 96.492,7415.675 C96.492,7414.719 96.172,7414.095 95.813,7413.777 C98.04,7413.523 100.38,7412.656 100.38,7408.718 C100.38,7407.598 99.992,7406.684 99.35,7405.966 C99.454,7405.707 99.797,7404.664 99.252,7403.252 C99.252,7403.252 98.414,7402.977 96.505,7404.303 C95.706,7404.076 94.85,7403.962 94,7403.958 C93.15,7403.962 92.295,7404.076 91.497,7404.303 C89.586,7402.977 88.746,7403.252 88.746,7403.252 C88.203,7404.664 88.546,7405.707 88.649,7405.966 C88.01,7406.684 87.619,7407.598 87.619,7408.718 C87.619,7412.646 89.954,7413.526 92.175,7413.785 C91.889,7414.041 91.63,7414.493 91.54,7415.156 C90.97,7415.418 89.522,7415.871 88.63,7414.304 C88.63,7414.304 88.101,7413.319 87.097,7413.247 C87.097,7413.247 86.122,7413.234 87.029,7413.87 C87.029,7413.87 87.684,7414.185 88.139,7415.37 C88.139,7415.37 88.726,7417.2 91.508,7416.58 C91.513,7417.437 91.522,7418.245 91.522,7418.489 C91.522,7418.76 91.338,7419.077 90.839,7418.982 C86.865,7417.627 84,7413.783 84,7409.253 C84,7403.59 88.478,7399 94,7399" id="github-[#142]"></path></g></g></g></svg>
                        <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full z-2'></div>
                    </a>
                    <a href="#" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-gray-2)] z-1'>
                        <svg class='w-7 fill-[var(--color-white)] z-3' viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.5 8C7.32843 8 8 7.32843 8 6.5C8 5.67157 7.32843 5 6.5 5C5.67157 5 5 5.67157 5 6.5C5 7.32843 5.67157 8 6.5 8Z"/><path d="M5 10C5 9.44772 5.44772 9 6 9H7C7.55228 9 8 9.44771 8 10V18C8 18.5523 7.55228 19 7 19H6C5.44772 19 5 18.5523 5 18V10Z" /><path d="M11 19H12C12.5523 19 13 18.5523 13 18V13.5C13 12 16 11 16 13V18.0004C16 18.5527 16.4477 19 17 19H18C18.5523 19 19 18.5523 19 18V12C19 10 17.5 9 15.5 9C13.5 9 13 10.5 13 10.5V10C13 9.44771 12.5523 9 12 9H11C10.4477 9 10 9.44772 10 10V18C10 18.5523 10.4477 19 11 19Z" /></svg>
                        <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full z-2'></div>
                    </a>
                    <a href="https://mahdi-web.ir" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-gray-2)] z-1'>
                        <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full z-2'></div>
                        <svg class='w-7 fill-[var(--color-white)] z-3' version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" ><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css">  </style> <g> <path class="st0" d="M276.239,252.183c-6.37,2.127-13.165,3.308-20.239,3.308c-7.074,0-13.87-1.181-20.24-3.308 c-46.272,7.599-70.489,41.608-70.489,82.877H256h90.728C346.728,293.791,322.515,259.782,276.239,252.183z"></path> <path class="st0" d="M256,240.788c27.43,0,49.658-22.24,49.658-49.666v-14.087c0-27.426-22.228-49.659-49.658-49.659 c-27.43,0-49.658,22.233-49.658,49.659v14.087C206.342,218.548,228.57,240.788,256,240.788z"></path> <path class="st0" d="M378.4,0H133.582C86.234,0,47.7,38.542,47.7,85.899v340.22C47.7,473.476,86.234,512,133.582,512h205.695 h13.175l9.318-9.301l93.229-93.229l9.301-9.31v-13.174V85.899C464.3,38.542,425.766,0,378.4,0z M432.497,386.985H384.35 c-24.882,0-45.074,20.183-45.074,45.073v48.139H133.582c-29.866,0-54.078-24.221-54.078-54.078V85.899 c0-29.874,24.212-54.096,54.078-54.096H378.4c29.876,0,54.096,24.222,54.096,54.096V386.985z"></path> </g> </g></svg>
                    </a>

                </div>
            </div>
            <div class="card bg-[var(--color-gray-2)] border border-[var(--color-border)] rounded-2xl p-5 flex flex-col items-center text-center transition-all duration-300 hover:scale-[1.02] hover:border-[var(--color-primary-3rd)] w-[220px] sm:w-[240px] flex-shrink-0">
                <a href="" class="w-24 h-24 rounded-full overflow-hidden border-4 border-[var(--color-primary-3rd)] mb-4">
                    <img class="w-full h-full object-cover" src="assets/img/team_picture/olyafam.webp" alt="">
                </a>
                <h3 class="text-lg font-bold text-[var(--color-white)]"> محمدرضا علیافام </h3>
                <p class="text-sm text-[var(--color-gray)]">طراح وبسایت فول استک</p>

                <div class='flex gap-3 items-center'>
                    <a href="https://github.com/MrOlyafam" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-gray-2)] z-1'>
                        <svg class='w-6 fill-[var(--color-white)] z-3' viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>github [#142]</title><desc>Created with Sketch.</desc><defs></defs><g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd"><g id="Dribbble-Light-Preview" transform="translate(-140.000000, -7559.000000)"><g id="icons" transform="translate(56.000000, 160.000000)"><path d="M94,7399 C99.523,7399 104,7403.59 104,7409.253 C104,7413.782 101.138,7417.624 97.167,7418.981 C96.66,7419.082 96.48,7418.762 96.48,7418.489 C96.48,7418.151 96.492,7417.047 96.492,7415.675 C96.492,7414.719 96.172,7414.095 95.813,7413.777 C98.04,7413.523 100.38,7412.656 100.38,7408.718 C100.38,7407.598 99.992,7406.684 99.35,7405.966 C99.454,7405.707 99.797,7404.664 99.252,7403.252 C99.252,7403.252 98.414,7402.977 96.505,7404.303 C95.706,7404.076 94.85,7403.962 94,7403.958 C93.15,7403.962 92.295,7404.076 91.497,7404.303 C89.586,7402.977 88.746,7403.252 88.746,7403.252 C88.203,7404.664 88.546,7405.707 88.649,7405.966 C88.01,7406.684 87.619,7407.598 87.619,7408.718 C87.619,7412.646 89.954,7413.526 92.175,7413.785 C91.889,7414.041 91.63,7414.493 91.54,7415.156 C90.97,7415.418 89.522,7415.871 88.63,7414.304 C88.63,7414.304 88.101,7413.319 87.097,7413.247 C87.097,7413.247 86.122,7413.234 87.029,7413.87 C87.029,7413.87 87.684,7414.185 88.139,7415.37 C88.139,7415.37 88.726,7417.2 91.508,7416.58 C91.513,7417.437 91.522,7418.245 91.522,7418.489 C91.522,7418.76 91.338,7419.077 90.839,7418.982 C86.865,7417.627 84,7413.783 84,7409.253 C84,7403.59 88.478,7399 94,7399" id="github-[#142]"></path></g></g></g></svg>
                        <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full z-2'></div>
                    </a>
                    <a href="#" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-gray-2)] z-1'>
                        <svg class='w-7 fill-[var(--color-white)] z-3' viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.5 8C7.32843 8 8 7.32843 8 6.5C8 5.67157 7.32843 5 6.5 5C5.67157 5 5 5.67157 5 6.5C5 7.32843 5.67157 8 6.5 8Z"/><path d="M5 10C5 9.44772 5.44772 9 6 9H7C7.55228 9 8 9.44771 8 10V18C8 18.5523 7.55228 19 7 19H6C5.44772 19 5 18.5523 5 18V10Z" /><path d="M11 19H12C12.5523 19 13 18.5523 13 18V13.5C13 12 16 11 16 13V18.0004C16 18.5527 16.4477 19 17 19H18C18.5523 19 19 18.5523 19 18V12C19 10 17.5 9 15.5 9C13.5 9 13 10.5 13 10.5V10C13 9.44771 12.5523 9 12 9H11C10.4477 9 10 9.44772 10 10V18C10 18.5523 10.4477 19 11 19Z" /></svg>
                        <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full z-2'></div>
                    </a>
                    <a href="https://mrolyafam.ir" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-gray-2)] z-1'>
                        <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full z-2'></div>
                        <svg class='w-7 fill-[var(--color-white)] z-3' version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" ><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css">  </style> <g> <path class="st0" d="M276.239,252.183c-6.37,2.127-13.165,3.308-20.239,3.308c-7.074,0-13.87-1.181-20.24-3.308 c-46.272,7.599-70.489,41.608-70.489,82.877H256h90.728C346.728,293.791,322.515,259.782,276.239,252.183z"></path> <path class="st0" d="M256,240.788c27.43,0,49.658-22.24,49.658-49.666v-14.087c0-27.426-22.228-49.659-49.658-49.659 c-27.43,0-49.658,22.233-49.658,49.659v14.087C206.342,218.548,228.57,240.788,256,240.788z"></path> <path class="st0" d="M378.4,0H133.582C86.234,0,47.7,38.542,47.7,85.899v340.22C47.7,473.476,86.234,512,133.582,512h205.695 h13.175l9.318-9.301l93.229-93.229l9.301-9.31v-13.174V85.899C464.3,38.542,425.766,0,378.4,0z M432.497,386.985H384.35 c-24.882,0-45.074,20.183-45.074,45.073v48.139H133.582c-29.866,0-54.078-24.221-54.078-54.078V85.899 c0-29.874,24.212-54.096,54.078-54.096H378.4c29.876,0,54.096,24.222,54.096,54.096V386.985z"></path> </g> </g></svg>
                    </a>
                </div>
            </div>
            <div class="card bg-[var(--color-gray-2)] border border-[var(--color-border)] rounded-2xl p-5 flex flex-col items-center text-center transition-all duration-300 hover:scale-[1.02] hover:border-[var(--color-primary-3rd)] w-[220px] sm:w-[240px] flex-shrink-0">
                <a href="" class="w-24 h-24 rounded-full overflow-hidden border-4 border-[var(--color-primary-3rd)] mb-4">
                    <img class="w-full h-full object-cover" src="assets/img/team_picture/sobhan2.webp" alt="">
                </a>
                <h3 class="text-lg font-bold text-[var(--color-white)]"> سبحان علیزاده </h3>
                <p class="text-sm text-[var(--color-gray)]">طراح وبسایت فول استک</p>

                <div class='flex gap-3 items-center'>
                    <a href="https://github.com/sobhan-alizadeh" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-gray-2)] z-1'>
                        <svg class='w-6 fill-[var(--color-white)] z-3' viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>github [#142]</title><desc>Created with Sketch.</desc><defs></defs><g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd"><g id="Dribbble-Light-Preview" transform="translate(-140.000000, -7559.000000)"><g id="icons" transform="translate(56.000000, 160.000000)"><path d="M94,7399 C99.523,7399 104,7403.59 104,7409.253 C104,7413.782 101.138,7417.624 97.167,7418.981 C96.66,7419.082 96.48,7418.762 96.48,7418.489 C96.48,7418.151 96.492,7417.047 96.492,7415.675 C96.492,7414.719 96.172,7414.095 95.813,7413.777 C98.04,7413.523 100.38,7412.656 100.38,7408.718 C100.38,7407.598 99.992,7406.684 99.35,7405.966 C99.454,7405.707 99.797,7404.664 99.252,7403.252 C99.252,7403.252 98.414,7402.977 96.505,7404.303 C95.706,7404.076 94.85,7403.962 94,7403.958 C93.15,7403.962 92.295,7404.076 91.497,7404.303 C89.586,7402.977 88.746,7403.252 88.746,7403.252 C88.203,7404.664 88.546,7405.707 88.649,7405.966 C88.01,7406.684 87.619,7407.598 87.619,7408.718 C87.619,7412.646 89.954,7413.526 92.175,7413.785 C91.889,7414.041 91.63,7414.493 91.54,7415.156 C90.97,7415.418 89.522,7415.871 88.63,7414.304 C88.63,7414.304 88.101,7413.319 87.097,7413.247 C87.097,7413.247 86.122,7413.234 87.029,7413.87 C87.029,7413.87 87.684,7414.185 88.139,7415.37 C88.139,7415.37 88.726,7417.2 91.508,7416.58 C91.513,7417.437 91.522,7418.245 91.522,7418.489 C91.522,7418.76 91.338,7419.077 90.839,7418.982 C86.865,7417.627 84,7413.783 84,7409.253 C84,7403.59 88.478,7399 94,7399" id="github-[#142]"></path></g></g></g></svg>
                        <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full z-2'></div>
                    </a>
                    <a href="#" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-gray-2)] z-1'>
                        <svg class='w-7 fill-[var(--color-white)] z-3' viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.5 8C7.32843 8 8 7.32843 8 6.5C8 5.67157 7.32843 5 6.5 5C5.67157 5 5 5.67157 5 6.5C5 7.32843 5.67157 8 6.5 8Z"/><path d="M5 10C5 9.44772 5.44772 9 6 9H7C7.55228 9 8 9.44771 8 10V18C8 18.5523 7.55228 19 7 19H6C5.44772 19 5 18.5523 5 18V10Z" /><path d="M11 19H12C12.5523 19 13 18.5523 13 18V13.5C13 12 16 11 16 13V18.0004C16 18.5527 16.4477 19 17 19H18C18.5523 19 19 18.5523 19 18V12C19 10 17.5 9 15.5 9C13.5 9 13 10.5 13 10.5V10C13 9.44771 12.5523 9 12 9H11C10.4477 9 10 9.44772 10 10V18C10 18.5523 10.4477 19 11 19Z" /></svg>
                        <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full z-2'></div>
                    </a>
                    <a href="https://sobhan-web.ir" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-gray-2)] z-1'>
                        <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full z-2'></div>
                        <svg class='w-7 fill-[var(--color-white)] z-3' version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" ><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css">  </style> <g> <path class="st0" d="M276.239,252.183c-6.37,2.127-13.165,3.308-20.239,3.308c-7.074,0-13.87-1.181-20.24-3.308 c-46.272,7.599-70.489,41.608-70.489,82.877H256h90.728C346.728,293.791,322.515,259.782,276.239,252.183z"></path> <path class="st0" d="M256,240.788c27.43,0,49.658-22.24,49.658-49.666v-14.087c0-27.426-22.228-49.659-49.658-49.659 c-27.43,0-49.658,22.233-49.658,49.659v14.087C206.342,218.548,228.57,240.788,256,240.788z"></path> <path class="st0" d="M378.4,0H133.582C86.234,0,47.7,38.542,47.7,85.899v340.22C47.7,473.476,86.234,512,133.582,512h205.695 h13.175l9.318-9.301l93.229-93.229l9.301-9.31v-13.174V85.899C464.3,38.542,425.766,0,378.4,0z M432.497,386.985H384.35 c-24.882,0-45.074,20.183-45.074,45.073v48.139H133.582c-29.866,0-54.078-24.221-54.078-54.078V85.899 c0-29.874,24.212-54.096,54.078-54.096H378.4c29.876,0,54.096,24.222,54.096,54.096V386.985z"></path> </g> </g></svg>
                    </a>
                </div>
            </div>
            <div class="card bg-[var(--color-gray-2)] border border-[var(--color-border)] rounded-2xl p-5 flex flex-col items-center text-center transition-all duration-300 hover:scale-[1.02] hover:border-[var(--color-primary-3rd)] w-[220px] sm:w-[240px] flex-shrink-0">
                <a href="" class="w-24 h-24 rounded-full overflow-hidden border-4 border-[var(--color-primary-3rd)] mb-4">
                    <img class="w-full h-full object-cover" src="assets/img/team_picture/najafi.webp" alt="">
                </a>
                <h3 class="text-lg font-bold text-[var(--color-white)]"> معصومه نجفی </h3>
                <p class="text-sm text-[var(--color-gray)]">طراح وبسایت فول استک</p>

                <div class='flex gap-3 items-center'>
                    <a href="" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-gray-2)] z-1'>
                        <svg class='w-6 fill-[var(--color-white)] z-3' viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>github [#142]</title><desc>Created with Sketch.</desc><defs></defs><g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd"><g id="Dribbble-Light-Preview" transform="translate(-140.000000, -7559.000000)"><g id="icons" transform="translate(56.000000, 160.000000)"><path d="M94,7399 C99.523,7399 104,7403.59 104,7409.253 C104,7413.782 101.138,7417.624 97.167,7418.981 C96.66,7419.082 96.48,7418.762 96.48,7418.489 C96.48,7418.151 96.492,7417.047 96.492,7415.675 C96.492,7414.719 96.172,7414.095 95.813,7413.777 C98.04,7413.523 100.38,7412.656 100.38,7408.718 C100.38,7407.598 99.992,7406.684 99.35,7405.966 C99.454,7405.707 99.797,7404.664 99.252,7403.252 C99.252,7403.252 98.414,7402.977 96.505,7404.303 C95.706,7404.076 94.85,7403.962 94,7403.958 C93.15,7403.962 92.295,7404.076 91.497,7404.303 C89.586,7402.977 88.746,7403.252 88.746,7403.252 C88.203,7404.664 88.546,7405.707 88.649,7405.966 C88.01,7406.684 87.619,7407.598 87.619,7408.718 C87.619,7412.646 89.954,7413.526 92.175,7413.785 C91.889,7414.041 91.63,7414.493 91.54,7415.156 C90.97,7415.418 89.522,7415.871 88.63,7414.304 C88.63,7414.304 88.101,7413.319 87.097,7413.247 C87.097,7413.247 86.122,7413.234 87.029,7413.87 C87.029,7413.87 87.684,7414.185 88.139,7415.37 C88.139,7415.37 88.726,7417.2 91.508,7416.58 C91.513,7417.437 91.522,7418.245 91.522,7418.489 C91.522,7418.76 91.338,7419.077 90.839,7418.982 C86.865,7417.627 84,7413.783 84,7409.253 C84,7403.59 88.478,7399 94,7399" id="github-[#142]"></path></g></g></g></svg>
                        <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full z-2'></div>
                    </a>
                    <a href="#" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-gray-2)] z-1'>
                        <svg class='w-7 fill-[var(--color-white)] z-3' viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.5 8C7.32843 8 8 7.32843 8 6.5C8 5.67157 7.32843 5 6.5 5C5.67157 5 5 5.67157 5 6.5C5 7.32843 5.67157 8 6.5 8Z"/><path d="M5 10C5 9.44772 5.44772 9 6 9H7C7.55228 9 8 9.44771 8 10V18C8 18.5523 7.55228 19 7 19H6C5.44772 19 5 18.5523 5 18V10Z" /><path d="M11 19H12C12.5523 19 13 18.5523 13 18V13.5C13 12 16 11 16 13V18.0004C16 18.5527 16.4477 19 17 19H18C18.5523 19 19 18.5523 19 18V12C19 10 17.5 9 15.5 9C13.5 9 13 10.5 13 10.5V10C13 9.44771 12.5523 9 12 9H11C10.4477 9 10 9.44772 10 10V18C10 18.5523 10.4477 19 11 19Z" /></svg>
                        <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full z-2'></div>
                    </a>
                    <a href="https://najafi-dev.ir" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-gray-2)] z-1'>
                        <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full z-2'></div>
                        <svg class='w-7 fill-[var(--color-white)] z-3' version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" ><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css">  </style> <g> <path class="st0" d="M276.239,252.183c-6.37,2.127-13.165,3.308-20.239,3.308c-7.074,0-13.87-1.181-20.24-3.308 c-46.272,7.599-70.489,41.608-70.489,82.877H256h90.728C346.728,293.791,322.515,259.782,276.239,252.183z"></path> <path class="st0" d="M256,240.788c27.43,0,49.658-22.24,49.658-49.666v-14.087c0-27.426-22.228-49.659-49.658-49.659 c-27.43,0-49.658,22.233-49.658,49.659v14.087C206.342,218.548,228.57,240.788,256,240.788z"></path> <path class="st0" d="M378.4,0H133.582C86.234,0,47.7,38.542,47.7,85.899v340.22C47.7,473.476,86.234,512,133.582,512h205.695 h13.175l9.318-9.301l93.229-93.229l9.301-9.31v-13.174V85.899C464.3,38.542,425.766,0,378.4,0z M432.497,386.985H384.35 c-24.882,0-45.074,20.183-45.074,45.073v48.139H133.582c-29.866,0-54.078-24.221-54.078-54.078V85.899 c0-29.874,24.212-54.096,54.078-54.096H378.4c29.876,0,54.096,24.222,54.096,54.096V386.985z"></path> </g> </g></svg>
                    </a>
                </div>
            </div>
            <div class="card bg-[var(--color-gray-2)] border border-[var(--color-border)] rounded-2xl p-5 flex flex-col items-center text-center transition-all duration-300 hover:scale-[1.02] hover:border-[var(--color-primary-3rd)] w-[220px] sm:w-[240px] flex-shrink-0">
                <a href="" class="w-24 h-24 rounded-full overflow-hidden border-4 border-[var(--color-primary-3rd)] mb-4">
                    <img class="w-full h-full object-cover" src="assets/img/team_picture/amir.webp" alt="">
                </a>
                <h3 class="text-lg font-bold text-[var(--color-white)]">امیر رحمتی</h3>
                <p class="text-sm text-[var(--color-gray)]">توسعه‌دهنده فول‌استک</p>

                <div class='flex gap-3 items-center'>
                    <a href="https://github.com/amirRahmati1387" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-gray-2)] z-1'>
                        <svg class='w-6 fill-[var(--color-white)] z-3' viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>github [#142]</title><desc>Created with Sketch.</desc><defs></defs><g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd"><g id="Dribbble-Light-Preview" transform="translate(-140.000000, -7559.000000)"><g id="icons" transform="translate(56.000000, 160.000000)"><path d="M94,7399 C99.523,7399 104,7403.59 104,7409.253 C104,7413.782 101.138,7417.624 97.167,7418.981 C96.66,7419.082 96.48,7418.762 96.48,7418.489 C96.48,7418.151 96.492,7417.047 96.492,7415.675 C96.492,7414.719 96.172,7414.095 95.813,7413.777 C98.04,7413.523 100.38,7412.656 100.38,7408.718 C100.38,7407.598 99.992,7406.684 99.35,7405.966 C99.454,7405.707 99.797,7404.664 99.252,7403.252 C99.252,7403.252 98.414,7402.977 96.505,7404.303 C95.706,7404.076 94.85,7403.962 94,7403.958 C93.15,7403.962 92.295,7404.076 91.497,7404.303 C89.586,7402.977 88.746,7403.252 88.746,7403.252 C88.203,7404.664 88.546,7405.707 88.649,7405.966 C88.01,7406.684 87.619,7407.598 87.619,7408.718 C87.619,7412.646 89.954,7413.526 92.175,7413.785 C91.889,7414.041 91.63,7414.493 91.54,7415.156 C90.97,7415.418 89.522,7415.871 88.63,7414.304 C88.63,7414.304 88.101,7413.319 87.097,7413.247 C87.097,7413.247 86.122,7413.234 87.029,7413.87 C87.029,7413.87 87.684,7414.185 88.139,7415.37 C88.139,7415.37 88.726,7417.2 91.508,7416.58 C91.513,7417.437 91.522,7418.245 91.522,7418.489 C91.522,7418.76 91.338,7419.077 90.839,7418.982 C86.865,7417.627 84,7413.783 84,7409.253 C84,7403.59 88.478,7399 94,7399" id="github-[#142]"></path></g></g></g></svg>
                        <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full z-2'></div>
                    </a>
                    <a href="#" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-gray-2)] z-1'>
                        <svg class='w-7 fill-[var(--color-white)] z-3' viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.5 8C7.32843 8 8 7.32843 8 6.5C8 5.67157 7.32843 5 6.5 5C5.67157 5 5 5.67157 5 6.5C5 7.32843 5.67157 8 6.5 8Z"/><path d="M5 10C5 9.44772 5.44772 9 6 9H7C7.55228 9 8 9.44771 8 10V18C8 18.5523 7.55228 19 7 19H6C5.44772 19 5 18.5523 5 18V10Z" /><path d="M11 19H12C12.5523 19 13 18.5523 13 18V13.5C13 12 16 11 16 13V18.0004C16 18.5527 16.4477 19 17 19H18C18.5523 19 19 18.5523 19 18V12C19 10 17.5 9 15.5 9C13.5 9 13 10.5 13 10.5V10C13 9.44771 12.5523 9 12 9H11C10.4477 9 10 9.44772 10 10V18C10 18.5523 10.4477 19 11 19Z" /></svg>
                        <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full z-2'></div>
                    </a>
                    <a href="https://rahmati-dev.ir/" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-gray-2)] z-1'>
                        <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full z-2'></div>
                        <svg class='w-7 fill-[var(--color-white)] z-3' version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" ><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css">  </style> <g> <path class="st0" d="M276.239,252.183c-6.37,2.127-13.165,3.308-20.239,3.308c-7.074,0-13.87-1.181-20.24-3.308 c-46.272,7.599-70.489,41.608-70.489,82.877H256h90.728C346.728,293.791,322.515,259.782,276.239,252.183z"></path> <path class="st0" d="M256,240.788c27.43,0,49.658-22.24,49.658-49.666v-14.087c0-27.426-22.228-49.659-49.658-49.659 c-27.43,0-49.658,22.233-49.658,49.659v14.087C206.342,218.548,228.57,240.788,256,240.788z"></path> <path class="st0" d="M378.4,0H133.582C86.234,0,47.7,38.542,47.7,85.899v340.22C47.7,473.476,86.234,512,133.582,512h205.695 h13.175l9.318-9.301l93.229-93.229l9.301-9.31v-13.174V85.899C464.3,38.542,425.766,0,378.4,0z M432.497,386.985H384.35 c-24.882,0-45.074,20.183-45.074,45.073v48.139H133.582c-29.866,0-54.078-24.221-54.078-54.078V85.899 c0-29.874,24.212-54.096,54.078-54.096H378.4c29.876,0,54.096,24.222,54.096,54.096V386.985z"></path> </g> </g></svg>
                    </a>
                </div>
            </div>
            <div class="card bg-[var(--color-gray-2)] border border-[var(--color-border)] rounded-2xl p-5 flex flex-col items-center text-center transition-all duration-300 hover:scale-[1.02] hover:border-[var(--color-primary-3rd)] w-[220px] sm:w-[240px] flex-shrink-0">
                <a href="" class="w-24 h-24 rounded-full overflow-hidden border-4 border-[var(--color-primary-3rd)] mb-4">
                    <img class="w-full h-full object-cover" src="assets/img/team_picture/aliasgari.webp" alt="">
                </a>
                <h3 class="text-lg font-bold text-[var(--color-white)]"> فائزه علی عسگری </h3>
                <p class="text-sm text-[var(--color-gray)]">طراح وبسایت فول استک</p>

                <div class='flex gap-3 items-center'>
                    <a href="#" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-gray-2)] z-1'>
                        <svg class='w-6 fill-[var(--color-white)] z-3' viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>github [#142]</title><desc>Created with Sketch.</desc><defs></defs><g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd"><g id="Dribbble-Light-Preview" transform="translate(-140.000000, -7559.000000)"><g id="icons" transform="translate(56.000000, 160.000000)"><path d="M94,7399 C99.523,7399 104,7403.59 104,7409.253 C104,7413.782 101.138,7417.624 97.167,7418.981 C96.66,7419.082 96.48,7418.762 96.48,7418.489 C96.48,7418.151 96.492,7417.047 96.492,7415.675 C96.492,7414.719 96.172,7414.095 95.813,7413.777 C98.04,7413.523 100.38,7412.656 100.38,7408.718 C100.38,7407.598 99.992,7406.684 99.35,7405.966 C99.454,7405.707 99.797,7404.664 99.252,7403.252 C99.252,7403.252 98.414,7402.977 96.505,7404.303 C95.706,7404.076 94.85,7403.962 94,7403.958 C93.15,7403.962 92.295,7404.076 91.497,7404.303 C89.586,7402.977 88.746,7403.252 88.746,7403.252 C88.203,7404.664 88.546,7405.707 88.649,7405.966 C88.01,7406.684 87.619,7407.598 87.619,7408.718 C87.619,7412.646 89.954,7413.526 92.175,7413.785 C91.889,7414.041 91.63,7414.493 91.54,7415.156 C90.97,7415.418 89.522,7415.871 88.63,7414.304 C88.63,7414.304 88.101,7413.319 87.097,7413.247 C87.097,7413.247 86.122,7413.234 87.029,7413.87 C87.029,7413.87 87.684,7414.185 88.139,7415.37 C88.139,7415.37 88.726,7417.2 91.508,7416.58 C91.513,7417.437 91.522,7418.245 91.522,7418.489 C91.522,7418.76 91.338,7419.077 90.839,7418.982 C86.865,7417.627 84,7413.783 84,7409.253 C84,7403.59 88.478,7399 94,7399" id="github-[#142]"></path></g></g></g></svg>
                        <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full z-2'></div>
                    </a>
                    <a href="#" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-gray-2)] z-1'>
                        <svg class='w-7 fill-[var(--color-white)] z-3' viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.5 8C7.32843 8 8 7.32843 8 6.5C8 5.67157 7.32843 5 6.5 5C5.67157 5 5 5.67157 5 6.5C5 7.32843 5.67157 8 6.5 8Z"/><path d="M5 10C5 9.44772 5.44772 9 6 9H7C7.55228 9 8 9.44771 8 10V18C8 18.5523 7.55228 19 7 19H6C5.44772 19 5 18.5523 5 18V10Z" /><path d="M11 19H12C12.5523 19 13 18.5523 13 18V13.5C13 12 16 11 16 13V18.0004C16 18.5527 16.4477 19 17 19H18C18.5523 19 19 18.5523 19 18V12C19 10 17.5 9 15.5 9C13.5 9 13 10.5 13 10.5V10C13 9.44771 12.5523 9 12 9H11C10.4477 9 10 9.44772 10 10V18C10 18.5523 10.4477 19 11 19Z" /></svg>
                        <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full z-2'></div>
                    </a>
                    <a href="#" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-gray-2)] z-1'>
                        <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full z-2'></div>
                        <svg class='w-7 fill-[var(--color-white)] z-3' version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" ><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css">  </style> <g> <path class="st0" d="M276.239,252.183c-6.37,2.127-13.165,3.308-20.239,3.308c-7.074,0-13.87-1.181-20.24-3.308 c-46.272,7.599-70.489,41.608-70.489,82.877H256h90.728C346.728,293.791,322.515,259.782,276.239,252.183z"></path> <path class="st0" d="M256,240.788c27.43,0,49.658-22.24,49.658-49.666v-14.087c0-27.426-22.228-49.659-49.658-49.659 c-27.43,0-49.658,22.233-49.658,49.659v14.087C206.342,218.548,228.57,240.788,256,240.788z"></path> <path class="st0" d="M378.4,0H133.582C86.234,0,47.7,38.542,47.7,85.899v340.22C47.7,473.476,86.234,512,133.582,512h205.695 h13.175l9.318-9.301l93.229-93.229l9.301-9.31v-13.174V85.899C464.3,38.542,425.766,0,378.4,0z M432.497,386.985H384.35 c-24.882,0-45.074,20.183-45.074,45.073v48.139H133.582c-29.866,0-54.078-24.221-54.078-54.078V85.899 c0-29.874,24.212-54.096,54.078-54.096H378.4c29.876,0,54.096,24.222,54.096,54.096V386.985z"></path> </g> </g></svg>
                    </a>
                </div>
            </div>

        </div>
    </div>

</div>

    <!-- قسمت ارتباط با من با فرم نیاز به بک اند -->
    <!-- <div class='card w-11/12 mx-auto flex flex-col gap-3 px-5 py-10 mb-15'>
        <div class='flex lg:flex-row flex-col gap-8'>
            <div class='w-full flex flex-col gap-4 justify-center'>
                <h3 class='w-9/12 lg:text-3xl text-2xl font-bold text-[var(--color-white)] lg:leading-20'> بیایید زیرساخت دیجیتال شما را متحول کنیم </h3>
                <div class='flex gap-2'>
                    <div class='min-w-13 p-1 rounded-full border-1 border-[var(--color-border)] flex justify-center items-center '>
                        <svg class='size-7'viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title></title> <g id="Complete"> <g id="mail"> <g> <polyline fill="none" points="4 8.2 12 14.1 20 8.2" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polyline> <rect fill="none" height="14" rx="2" ry="2" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="18" x="3" y="6.5"></rect> </g> </g> </g> </g></svg>                </div>
                    <div class='flex flex-col gap-2 justify-center overflow-x-auto' style="scrollbar-width:none;">
                        <h4 class='text-[var(--color-gray)] lg:text-xl'> ایمیل </h4>
                        <div class='group flex flex-col'>
                            <a href="mailto:montazami.dev@gmail.com" class='text-xs text-[var(--color-white)] group-hover:text-[var(--color-primary-3rd)] transition-all duration-700 lg:text-lg' > montazami.dev@gmail.com </a>
                            <span class='h-[2px] w-0 bg-[var(--color-white)] group-hover:w-full group-hover:bg-[var(--color-primary-3rd)] transition-all duration-500'></span>
                        </div>
                    </div>
                </div>
                <div class='flex gap-2'>
                    <div class='min-w-13 p-1 rounded-full border-1 border-[var(--color-border)] flex justify-center items-center '>
                        <svg class='size-7' viewBox="0 0 24 24" fill="white" xmlns="http://www.w3.org/2000/svg"><path d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>  
                    <div class='flex flex-col gap-2 justify-center overflow-x-auto' style="scrollbar-width:none;">
                        <h4 class='text-[var(--color-gray)] lg:text-xl'> آدرس </h4>
                        <div class='group flex flex-col'>
                            <a href="#" class='text-[var(--color-white)] group-hover:text-[var(--color-primary-3rd)] transition-all duration-700 lg:text-lg' > تبریز، عجب‌شیر </a>
                            <span class='h-[2px] w-0 bg-[var(--color-white)] group-hover:w-full group-hover:bg-[var(--color-primary-3rd)] transition-all duration-500'></span>
                        </div>
                    </div>
                </div>
                <div class='flex gap-2'>
                    <div class='min-w-13 p-1 rounded-full border-1 border-[var(--color-border)] flex justify-center items-center '>
                        <svg class='size-7' viewBox="0 0 24 24" fill="var(--color-white)" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 2C13.5 2 15.8335 2.21213 18.8033 5.18198C21.7731 8.15183 21.9853 10.4853 21.9853 10.4853" stroke="var(--color-white)" stroke-width="1.5" stroke-linecap="round"/><path d="M14.207 5.53564C14.207 5.53564 15.197 5.81849 16.6819 7.30341C18.1668 8.78834 18.4497 9.77829 18.4497 9.77829" stroke="var(--color-white)" stroke-width="1.5" stroke-linecap="round"/><path d="M15.1007 15.0272L14.5569 14.5107L15.1007 15.0272ZM15.5562 14.5477L16.1 15.0642H16.1L15.5562 14.5477ZM17.9728 14.2123L17.5987 14.8623H17.5987L17.9728 14.2123ZM19.8833 15.312L19.5092 15.962L19.8833 15.312ZM20.4217 18.7584L20.9655 19.2749L20.4217 18.7584ZM19.0011 20.254L18.4573 19.7375L19.0011 20.254ZM17.6763 20.9631L17.7499 21.7095L17.6763 20.9631ZM7.81536 16.4752L8.35915 15.9587L7.81536 16.4752ZM3.00289 6.96594L2.25397 7.00613L2.25397 7.00613L3.00289 6.96594ZM9.47752 8.50311L10.0213 9.01963H10.0213L9.47752 8.50311ZM9.63424 5.6931L10.2466 5.26012L9.63424 5.6931ZM8.37326 3.90961L7.76086 4.3426V4.3426L8.37326 3.90961ZM5.26145 3.60864L5.80524 4.12516L5.26145 3.60864ZM3.69185 5.26114L3.14806 4.74462L3.14806 4.74462L3.69185 5.26114ZM11.0631 13.0559L11.6069 12.5394L11.0631 13.0559ZM15.6445 15.5437L16.1 15.0642L15.0124 14.0312L14.5569 14.5107L15.6445 15.5437ZM17.5987 14.8623L19.5092 15.962L20.2575 14.662L18.347 13.5623L17.5987 14.8623ZM19.8779 18.2419L18.4573 19.7375L19.5449 20.7705L20.9655 19.2749L19.8779 18.2419ZM17.6026 20.2167C16.1676 20.3584 12.4233 20.2375 8.35915 15.9587L7.27157 16.9917C11.7009 21.655 15.9261 21.8895 17.7499 21.7095L17.6026 20.2167ZM8.35915 15.9587C4.48303 11.8778 3.83285 8.43556 3.75181 6.92574L2.25397 7.00613C2.35322 8.85536 3.1384 12.6403 7.27157 16.9917L8.35915 15.9587ZM9.7345 9.32159L10.0213 9.01963L8.93372 7.9866L8.64691 8.28856L9.7345 9.32159ZM10.2466 5.26012L8.98565 3.47663L7.76086 4.3426L9.02185 6.12608L10.2466 5.26012ZM4.71766 3.09213L3.14806 4.74462L4.23564 5.77765L5.80524 4.12516L4.71766 3.09213ZM9.1907 8.80507C8.64691 8.28856 8.64622 8.28929 8.64552 8.29002C8.64528 8.29028 8.64458 8.29102 8.64411 8.29152C8.64316 8.29254 8.64219 8.29357 8.64121 8.29463C8.63924 8.29675 8.6372 8.29896 8.6351 8.30127C8.63091 8.30588 8.62646 8.31087 8.62178 8.31625C8.61243 8.32701 8.60215 8.33931 8.59116 8.3532C8.56918 8.38098 8.54431 8.41512 8.51822 8.45588C8.46591 8.53764 8.40917 8.64531 8.36112 8.78033C8.26342 9.0549 8.21018 9.4185 8.27671 9.87257C8.40742 10.7647 8.99198 11.9644 10.5193 13.5724L11.6069 12.5394C10.1793 11.0363 9.82761 10.1106 9.76086 9.65511C9.72866 9.43536 9.76138 9.31957 9.77432 9.28321C9.78159 9.26277 9.78635 9.25709 9.78169 9.26437C9.77944 9.26789 9.77494 9.27451 9.76738 9.28407C9.76359 9.28885 9.75904 9.29437 9.7536 9.30063C9.75088 9.30375 9.74793 9.30706 9.74476 9.31056C9.74317 9.31231 9.74152 9.3141 9.73981 9.31594C9.73896 9.31686 9.73809 9.31779 9.7372 9.31873C9.73676 9.3192 9.73608 9.31992 9.73586 9.32015C9.73518 9.32087 9.7345 9.32159 9.1907 8.80507ZM10.5193 13.5724C12.0422 15.1757 13.1923 15.806 14.0698 15.9485C14.5201 16.0216 14.8846 15.9632 15.1606 15.8544C15.2955 15.8012 15.4022 15.7387 15.4823 15.6819C15.5223 15.6535 15.5556 15.6266 15.5824 15.6031C15.5959 15.5913 15.6077 15.5803 15.618 15.5703C15.6232 15.5654 15.628 15.5606 15.6324 15.5562C15.6346 15.554 15.6367 15.5518 15.6387 15.5497C15.6397 15.5487 15.6407 15.5477 15.6417 15.5467C15.6422 15.5462 15.6429 15.5454 15.6431 15.5452C15.6438 15.5444 15.6445 15.5437 15.1007 15.0272C14.5569 14.5107 14.5576 14.51 14.5583 14.5093C14.5585 14.509 14.5592 14.5083 14.5596 14.5078C14.5605 14.5069 14.5614 14.506 14.5623 14.5051C14.5641 14.5033 14.5658 14.5015 14.5674 14.4998C14.5708 14.4965 14.574 14.4933 14.577 14.4904C14.583 14.4846 14.5885 14.4796 14.5933 14.4754C14.6028 14.467 14.6099 14.4616 14.6145 14.4584C14.6239 14.4517 14.6229 14.454 14.6102 14.459C14.5909 14.4666 14.5 14.4987 14.3103 14.4679C13.9077 14.4025 13.0391 14.0472 11.6069 12.5394L10.5193 13.5724ZM8.98565 3.47663C7.97206 2.04305 5.94384 1.80119 4.71766 3.09213L5.80524 4.12516C6.32808 3.57471 7.24851 3.61795 7.76086 4.3426L8.98565 3.47663ZM3.75181 6.92574C3.73038 6.52644 3.90425 6.12654 4.23564 5.77765L3.14806 4.74462C2.61221 5.30877 2.20493 6.09246 2.25397 7.00613L3.75181 6.92574ZM18.4573 19.7375C18.1783 20.0313 17.8864 20.1887 17.6026 20.2167L17.7499 21.7095C18.497 21.6357 19.1016 21.2373 19.5449 20.7705L18.4573 19.7375ZM10.0213 9.01963C10.9889 8.00095 11.0574 6.40678 10.2466 5.26012L9.02185 6.12608C9.44399 6.72315 9.37926 7.51753 8.93372 7.9866L10.0213 9.01963ZM19.5092 15.962C20.33 16.4345 20.4907 17.5968 19.8779 18.2419L20.9655 19.2749C22.2704 17.901 21.8904 15.6019 20.2575 14.662L19.5092 15.962ZM16.1 15.0642C16.4854 14.6584 17.086 14.5672 17.5987 14.8623L18.347 13.5623C17.2485 12.93 15.8861 13.1113 15.0124 14.0312L16.1 15.0642Z" fill="var(--color-white)"/></svg>    
                    </div>  
                    <div class='flex flex-col gap-2 justify-center overflow-x-auto' style="scrollbar-width:none;">
                        <h4 class='text-[var(--color-gray)] lg:text-xl'> شماره تلفن </h4>
                        
                        <div class='group flex flex-col'>
                            <a href="tel:09995186884" class='text-xs text-[var(--color-white)] group-hover:text-[var(--color-primary-3rd)] transition-all duration-700 lg:text-lg' > 09995186884 </a>
                            <span class='h-[2px] w-0 bg-[var(--color-white)] group-hover:w-full group-hover:bg-[var(--color-primary-3rd)] transition-all duration-500'></span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class='w-full flex flex-col gap-4'>
                <h3 class='w-9/12 text-xl lg:text-3xl font-bold text-[var(--color-white)]' > با من در ارتباط باشید </h3>
                <form action="#" class='w-11/12 grid lg:grid-cols-2 grid-cols-1 gap-2'>

                    <div class='w-full h-20 relative col-span-1'>
                        <input type="text" name="name" class='inputs w-full rounded-xl h-full text-white border-gray-600 outline-none border-2 p-2 active:border-[var(--color-primary-3rd)] transition-all duration-700 z-2'>
                        <span class='spans absolute top-5 right-6 text-white transition-all duration-700 z-1'> نام و نام خانوادگی </span>
                    </div>

                    <div class='w-full h-20 relative lg:col-span-1'>
                        <input type="tell" name="phoneNumber" class='inputs w-full rounded-xl h-full text-white border-gray-600 outline-none border-2 p-2 active:border-[var(--color-primary-3rd)] transition-all duration-700 z-2'>
                        <span class='spans absolute top-5 right-6 text-white transition-all duration-700 z-1'> شماره مویایل </span>
                    </div>

                    <div class='w-full h-20 relative lg:col-span-1'>
                        <input type="text" name="email" class='inputs w-full rounded-xl h-full text-white border-gray-600 outline-none border-2 p-2 active:border-[var(--color-primary-3rd)] transition-all duration-700 z-2'>
                        <span class='spans absolute top-5 right-6 text-white transition-all duration-700 z-1'> ایمیل </span>
                    </div>

                    <div class='w-full h-20 relative lg:col-span-1'>
                        <input type="text" name="subject" class='inputs w-full rounded-xl h-full text-white border-gray-600 outline-none border-2 p-2 active:border-[var(--color-primary-3rd)] transition-all duration-700 z-2'>
                        <span class='spans absolute top-5 right-6 text-white transition-all duration-700 z-1'> عنوان </span>
                    </div>

                    <div class='w-full h-40 relative lg:col-span-2'>
                        <textarea name="message" class='inputs w-full rounded-xl h-full text-white border-gray-600 outline-none border-2 p-2 active:border-[var(--color-primary-3rd)] transition-all duration-700 z-2' style=" resize: none;"></textarea>
                        <span class='spans absolute top-5 right-6 text-white transition-all duration-700 z-1'> پیام شما </span>
                    </div>
                    <button class='group relative w-full bg-[var(--color-primary-3rd)] flex items-center text-center justify-center py-4 px-4 rounded-full cursor-pointer lg:col-span-2'>
                        <svg class='absolute right-0 w-4 fill-[var(--color-white)] duration-500 group-hover:-translate-x-5 group-hover:opacity-100 opacity-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z"/></svg>
                        <span class='text-base text-[var(--color-white)] transition-all duration-400 translate-x-2 group-hover:-translate-x-5 font-bold'> ارسال پیام </span>
                        <svg class='absolute left-2 w-4 fill-[var(--color-white)] transition-all duration-200 group-hover:-translate-x-4 group-hover:opacity-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z"/></svg>
                    </button>
                </form>
            </div>
        </div>
    </div> -->

    
<!-- ============================================ -->
<!-- ====== بخش ارتباط با من (نسخه حرفه‌ای با کپی) ====== -->
<!-- ============================================ -->

    <div id="contact" class="w-11/12 mx-auto mb-15 relative">
        
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] rounded-full bg-[var(--color-primary-3rd)] opacity-5 blur-3xl pointer-events-none"></div>

        <div class="relative z-10 w-full flex flex-col gap-3 justify-center text-center mb-8">
            <h2 class="text-[var(--color-heading)] text-[5vw] md:text-[3vw] lg:text-[2.5vw] font-bold leading-tight">
                بیایید <span class="text-[var(--color-primary-3rd)]">با هم</span> بسازیم
            </h2>
            <p class="text-[var(--color-gray)] text-sm max-w-2xl mx-auto">
                برای همکاری، مشاوره یا هر سوالی، خوشحال می‌شم از شما بشنوم. 
                راه‌های ارتباطی زیر همیشه در دسترس هستند.
            </p>
        </div>

        <div class="relative z-10 bg-[var(--color-gray-2)]/50 backdrop-blur-xl border border-[var(--color-border)] rounded-3xl p-6 md:p-10 shadow-2xl" 
            style="box-shadow: 0 25px 50px -12px rgba(253, 196, 72, 0.15);">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                <div class="group relative bg-[var(--color-black)]/40 rounded-2xl p-6 text-center transition-all duration-500 hover:-translate-y-2 hover:bg-[var(--color-black)]/60 border border-transparent hover:border-[var(--color-primary-3rd)]/30">
                    
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-[var(--color-primary-3rd)]/5 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-700"></div>
                    
                    <div class="relative w-20 h-20 mx-auto mb-4">
                        <div class="absolute inset-0 rounded-full bg-gradient-to-br from-[var(--color-primary-3rd)] to-[var(--color-primary-3rd)]/20 animate-pulse opacity-20"></div>
                        <div class="relative w-full h-full rounded-full bg-gradient-to-br from-[var(--color-primary-3rd)]/20 to-[var(--color-primary-3rd)]/5 flex items-center justify-center border border-[var(--color-primary-3rd)]/20 group-hover:border-[var(--color-primary-3rd)]/50 transition-all duration-500">
                            <svg class="w-8 fill-[var(--color-primary-3rd)]" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                            </svg>
                        </div>
                        <div class="absolute -inset-1 rounded-full border-2 border-dashed border-[var(--color-primary-3rd)]/20 animate-spin-slow"></div>
                    </div>

                    <h3 class="text-sm font-bold text-[var(--color-white)] mb-1">تماس تلفنی</h3>
                    <p class="text-[10px] text-[var(--color-gray)] mb-3">پاسخگویی ۹ صبح تا 5 عصر</p>
                    
                    <a  href="tel:09995186884" class="text-xl font-bold text-[var(--color-white)] group-hover:text-[var(--color-primary-3rd)] transition-all duration-300 block">
                        0999-518-6884
                    </a>
                    
                </div>

                <div class="group relative bg-[var(--color-black)]/40 rounded-2xl p-6 text-center transition-all duration-500 hover:-translate-y-2 hover:bg-[var(--color-black)]/60 border border-transparent hover:border-[var(--color-primary-3rd)]/30">
                    
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-[var(--color-primary-3rd)]/5 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-700"></div>
                    
                    <div class="relative w-20 h-20 mx-auto mb-4">
                        <div class="absolute inset-0 rounded-full bg-gradient-to-br from-[var(--color-primary-3rd)] to-[var(--color-primary-3rd)]/20 animate-pulse opacity-20"></div>
                        <div class="relative w-full h-full rounded-full bg-gradient-to-br from-[var(--color-primary-3rd)]/20 to-[var(--color-primary-3rd)]/5 flex items-center justify-center border border-[var(--color-primary-3rd)]/20 group-hover:border-[var(--color-primary-3rd)]/50 transition-all duration-500">
                            <svg class="w-8 fill-[var(--color-primary-3rd)]" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                            </svg>
                        </div>
                        <div class="absolute -inset-1 rounded-full border-2 border-dashed border-[var(--color-primary-3rd)]/20 animate-spin-slow"></div>
                    </div>

                    <h3 class="text-sm font-bold text-[var(--color-white)] mb-1">ایمیل</h3>
                    <p class="text-[10px] text-[var(--color-gray)] mb-3">پاسخگویی 9 صبح تا 5 عصر</p>
                    
                    <a href="mailto:montazami.dev@gmail.com" class="text-xl font-bold text-[var(--color-white)] group-hover:text-[var(--color-primary-3rd)] transition-all duration-300 block break-all">
                        montazami.dev@gmail.com
                    </a>
                    
                </div>

                <div class="group relative bg-[var(--color-black)]/40 rounded-2xl p-6 text-center transition-all duration-500 hover:-translate-y-2 hover:bg-[var(--color-black)]/60 border border-transparent hover:border-[var(--color-primary-3rd)]/30">
                    
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-[var(--color-primary-3rd)]/5 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-700"></div>
                    
                    <div class="relative w-20 h-20 mx-auto mb-4">
                        <div class="absolute inset-0 rounded-full bg-gradient-to-br from-[var(--color-primary-3rd)] to-[var(--color-primary-3rd)]/20 animate-pulse opacity-20"></div>
                        <div class="relative w-full h-full rounded-full bg-gradient-to-br from-[var(--color-primary-3rd)]/20 to-[var(--color-primary-3rd)]/5 flex items-center justify-center border border-[var(--color-primary-3rd)]/20 group-hover:border-[var(--color-primary-3rd)]/50 transition-all duration-500">
                            <svg class="w-8 fill-[var(--color-primary-3rd)]" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                            </svg>
                        </div>
                        <div class="absolute -inset-1 rounded-full border-2 border-dashed border-[var(--color-primary-3rd)]/20 animate-spin-slow"></div>
                    </div>

                    <h3 class="text-sm font-bold text-[var(--color-white)] mb-1">آدرس</h3>
                    <p class="text-[10px] text-[var(--color-gray)] mb-3">ایران، آذربایجان شرقی</p>
                    
                    <span class="text-base font-bold text-[var(--color-white)] block">
                        تبریز، عجب‌شیر
                    </span>
                
                </div>

                <div class="group relative bg-[var(--color-black)]/40 rounded-2xl p-6 text-center transition-all duration-500 hover:-translate-y-2 hover:bg-[var(--color-black)]/60 border border-transparent hover:border-[var(--color-primary-3rd)]/30">
                    
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-[var(--color-primary-3rd)]/5 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-700"></div>
                    
                    <div class="relative w-20 h-20 mx-auto mb-4">
                        <div class="absolute inset-0 rounded-full bg-gradient-to-br from-[var(--color-primary-3rd)] to-[var(--color-primary-3rd)]/20 animate-pulse opacity-20"></div>
                        <div class="relative w-full h-full rounded-full bg-gradient-to-br from-[var(--color-primary-3rd)]/20 to-[var(--color-primary-3rd)]/5 flex items-center justify-center border border-[var(--color-primary-3rd)]/20 group-hover:border-[var(--color-primary-3rd)]/50 transition-all duration-500">
                            <svg class="w-8 fill-[var(--color-primary-3rd)]" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95z"/>
                            </svg>
                        </div>
                        <div class="absolute -inset-1 rounded-full border-2 border-dashed border-[var(--color-primary-3rd)]/20 animate-spin-slow"></div>
                    </div>

                    <h3 class="text-sm font-bold text-[var(--color-white)] mb-1">شبکه‌های اجتماعی</h3>
                    <p class="text-[10px] text-[var(--color-gray)] mb-4">در شبکه‌های اجتماعی دنبال کنید</p>
                    
                    <div class="flex gap-3 items-center justify-center">
                        <a href="https://github.com/montazami-dev" class="group/social relative w-12 h-12 rounded-full flex items-center justify-center border border-[var(--color-border)] hover:border-[var(--color-primary-3rd)] bg-[var(--color-black)]/30 hover:bg-[var(--color-primary-3rd)]/20 transition-all duration-300 hover:scale-110">
                            <svg class="w-5 fill-[var(--color-white)] group-hover/social:fill-[var(--color-primary-3rd)] transition-all" viewBox="0 0 24 24">
                                <path d="M12 0c-6.627 0-12 5.373-12 12 0 5.302 3.438 9.8 8.205 11.387.6.113.82-.26.82-.58 0-.287-.01-1.05-.015-2.06-3.338.726-4.042-1.416-4.042-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.09-.745.083-.73.083-.73 1.205.085 1.838 1.237 1.838 1.237 1.07 1.834 2.807 1.304 3.492.997.108-.775.418-1.305.762-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.468-2.38 1.235-3.22-.123-.3-.535-1.52.117-3.16 0 0 1.008-.322 3.3 1.23.96-.267 1.98-.4 3-.405 1.02.005 2.04.138 3 .405 2.29-1.552 3.297-1.23 3.297-1.23.653 1.64.24 2.86.118 3.16.768.84 1.233 1.91 1.233 3.22 0 4.61-2.804 5.62-5.476 5.92.43.37.824 1.102.824 2.22 0 1.602-.015 2.894-.015 3.287 0 .322.216.695.825.578C20.565 21.795 24 17.3 24 12c0-6.627-5.373-12-12-12z"/>
                            </svg>
                            <span class="absolute -top-1 -right-1 w-2 h-2 rounded-full bg-[var(--color-primary-3rd)] opacity-0 group-hover/social:opacity-100 transition-all"></span>
                        </a>
                        <a href="https://instagram.com/montazami_dev" class="group/social relative w-12 h-12 rounded-full flex items-center justify-center border border-[var(--color-border)] hover:border-[var(--color-primary-3rd)] bg-[var(--color-black)]/30 hover:bg-[var(--color-primary-3rd)]/20 transition-all duration-300 hover:scale-110">
                            <svg class="w-5 fill-[var(--color-white)] group-hover/social:fill-[var(--color-primary-3rd)] transition-all" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                            </svg>
                            <span class="absolute -top-1 -right-1 w-2 h-2 rounded-full bg-[var(--color-primary-3rd)] opacity-0 group-hover/social:opacity-100 transition-all"></span>
                        </a>
                        <a href="https://t.me/montazami_dev" target="_blank" rel="noopener noreferrer" class="group/social relative w-12 h-12 rounded-full flex items-center justify-center border border-[var(--color-border)] hover:border-[var(--color-primary-3rd)] bg-[var(--color-black)]/30 hover:bg-[var(--color-primary-3rd)]/20 transition-all duration-300 hover:scale-110">
                            <svg class="w-5 fill-[var(--color-white)] group-hover/social:fill-[var(--color-primary-3rd)] transition-all"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M23.95 2.45 20.4 21.1c-.27 1.32-1.02 1.65-2.07 1.03l-5.72-4.22-2.76 2.66c-.3.3-.55.55-1.12.55l.4-5.82L19.7 5.85c.45-.4-.1-.62-.7-.22L5.8 13.9.15 12.13c-1.23-.39-1.25-1.23.26-1.83L22.5 1.9c1.02-.38 1.92.25 1.45.55z"/>
                            </svg>
                            <span class="absolute -top-1 -right-1 w-2 h-2 rounded-full bg-[var(--color-primary-3rd)] opacity-0 group-hover/social:opacity-100 transition-all"></span>
                        </a>
                    </div>
                </div>

            </div>

            <div class="relative my-8">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-[var(--color-border)]"></div>
                </div>
                <div class="relative flex justify-center">
                    <span class="bg-[var(--color-gray-2)] px-4 text-xs text-[var(--color-gray)]">یا</span>
                </div>
            </div>

            <div class="flex flex-col lg:flex-row items-center justify-between gap-6">
                
                <div class="flex flex-wrap items-center justify-center gap-8 lg:gap-12">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-[var(--color-primary-3rd)]">۳+</div>
                        <div class="text-xs text-[var(--color-gray)]">سال تجربه</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-[var(--color-primary-3rd)]">5+</div>
                        <div class="text-xs text-[var(--color-gray)]">پروژه موفق</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-[var(--color-primary-3rd)]">89%</div>
                        <div class="text-xs text-[var(--color-gray)]">رضایت مشتری</div>
                    </div>
                </div>

                <a href="tel:09995186884" class="group relative bg-gradient-to-r from-[var(--color-primary-3rd)] to-[var(--color-primary-3rd)]/80 text-[var(--color-white)] font-bold px-8 py-4 rounded-full overflow-hidden transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:shadow-[var(--color-primary-3rd)]/20 whitespace-nowrap">
                    <span class="relative z-10 flex items-center gap-3">
                        <svg class="w-5 fill-current" viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                        همین حالا تماس بگیرید
                    </span>
                    <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent -translate-x-full group-hover:translate-x-full transition-all duration-1000"></div>
                </a>

            </div>

        </div>

    </div>




    <!-- قسمت مقالات نیاز به ب -->
    <!-- <div class='w-11/12 mx-auto flex flex-col gap-4 '>
        <div class='w-11/12 mx-auto flex flex-col gap-5 justify-center text-center py-20'>
            <span class='text-[var(--color-primary-3rd)] font-bold text-base'>  آخرین مقالات </span>
            <h2 class='text-[var(--color-heading)] text-[4vw] md:text-[3vw] lg:text-[2vw] font-bold'> مطالعه آخرین مقاله‌های حوزه بک‌اند و معماری سیستم </h2>
        </div>
        <div class='grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-3 mb-15'>

            <div class='card flex flex-col gap-7 pb-5 overflow-hidden'>
                <a href="#" class="relative w-full h-50 overflow-hidden rounded-2xl group perspective-1000">
                    <div class="w-full h-full relative transform-gpu transition-all duration-800 ease-[cubic-bezier(0.34,1.56,0.64,1)] group-hover:scale-105 group-hover:rotate-y-4 group-hover:rotate-x-[-3deg]">
                        <div class="absolute inset-0 bg-[url('assets/img/resome11.webp')] bg-cover bg-center bg-no-repeat transition-all duration-700 group-hover:brightness-105 group-hover:saturate-110"></div>
                        <div class="absolute inset-0 transition-all duration-700 bg-gradient-to-t from-black/70 via-black/20 to-transparent group-hover:from-black/40 group-hover:via-black/10"></div>
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-all duration-700 bg-gradient-to-br from-white/5 via-white/10 to-transparent"></div>
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-30 transition-opacity duration-700 bg-[repeating-linear-gradient(45deg,transparent,transparent_8px,rgba(255,255,255,0.03)_8px,rgba(255,255,255,0.03)_9px)]"></div>
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-all duration-700 shadow-[inset_0_0_30px_rgba(0,0,0,0.3)]"></div>
                        <div class="absolute bottom-4 left-4 opacity-0 group-hover:opacity-100 transition-all duration-700 delay-200 px-3 py-1.5 bg-[var(--color-primary-3rd)]/70 backdrop-blur-sm rounded-md border border-white/5 transform translate-y-3 group-hover:translate-y-0">
                            <span class="text-white/80 text-[10px] font-bold tracking-[2px] uppercase">article</span>
                        </div>
                    </div>
                    
                    <div class='absolute group-hover:bg-[var(--color-primary-3rd)]/80 duration-1000 -left-2 top-0 w-20 h-10 rounded-xl bg-[#141414cc]/90 flex items-center text-end px-2'> 
                        <span class='font-bold text-white'> ۱۲ دی </span>
                    </div>
                </a>
                
                <div class='flex flex-col gap-4 px-3'>
                    <div class='flex gap-4 items-center'>
                        <a href="#" class='flex gap-1'>
                            <svg class='w-4 fill-[var(--color-gray)]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>
                            <span class='text-[var(--color-gray)]'> محمد </span>
                        </a>
                        
                        <a href="#" class='flex gap-1 items-center'>
                            <svg class='w-4 fill-[var(--color-gray)]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M202.7 288H352c17.7 0 32-14.3 32-32V64c0-17.7-14.3-32-32-32H64C46.3 32 32 46.3 32 32V256c0 17.7 14.3 32 32 32H96c17.7 0 32 14.3 32 32v16l55.5-41.6c5.5-4.2 12.3-6.4 19.2-6.4zM352 320H202.7l-81.1 60.8c-4.8 3.6-11.3 4.2-16.8 1.5s-8.8-8.2-8.8-14.3V352 320H64c-35.3 0-64-28.7-64-64V64C0 28.7 28.7 0 64 0H352c35.3 0 64 28.7 64 64V256c0 35.3-28.7 64-64 64zM320 448c-35.3 0-64-28.7-64-64V352h32v32c0 17.7 14.3 32 32 32H437.3c6.9 0 13.7 2.2 19.2 6.4L512 464V448c0-17.7 14.3-32 32-32h32c17.7 0 32-14.3 32-32V192c0-17.7-14.3-32-32-32H448V128H576c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H544v32 16c0 6.1-3.4 11.6-8.8 14.3s-11.9 2.1-16.8-1.5L437.3 448H320z"/></svg>
                            <div class='flex'>
                                <span class='text-[var(--color-gray)]'> نظرات </span>
                                <span class='text-[var(--color-gray)]'> (۲۲) </span>
                            </div>
                        </a>
                    </div>
                    <a href="#" class='text-[var(--color-white)] hover:text-[var(--color-primary-3rd)] duration-600 font-bold text-xl'>
                        ۵ راهکار برای بهینه‌سازی کوئری‌های دیتابیس در پروژه‌های بزرگ
                    </a>
                    <a href="#" class='group relative w-30 bg-inherit hover:bg-[var(--color-primary-3rd)] duration-600 flex items-center text-center justify-center py-4 border-3 border-[var(--color-border)] rounded-full cursor-pointer mt-5'>
                        <svg class='absolute right-0 w-3 fill-[var(--color-gray)] group-hover:fill-[var(--color-white)] duration-500 group-hover:-translate-x-5 group-hover:opacity-100 opacity-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z"/></svg>
                        <span class='text-xs text-[var(--color-gray)] group-hover:text-[var(--color-white)] transition-all duration-400 translate-x-2 group-hover:-translate-x-5 font-bold'> بیشتر بخوانید </span>
                        <svg class='absolute left-2 w-3 fill-[var(--color-gray)] group-hover:fill-[var(--color-white)] transition-all duration-200 group-hover:-translate-x-4 group-hover:opacity-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z"/></svg>
                    </a>
                </div>
            </div>
    
            <div class='card flex flex-col gap-4 md:justify-between pb-5 overflow-hidden'>
                <a href="#" class="relative w-full h-50 overflow-hidden rounded-2xl group perspective-1000">
                    <div class="w-full h-full relative transform-gpu transition-all duration-800 ease-[cubic-bezier(0.34,1.56,0.64,1)] group-hover:scale-105 group-hover:rotate-y-4 group-hover:rotate-x-[-3deg]">
                        <div class="absolute inset-0 bg-[url('assets/img/resome12.webp')] bg-cover bg-center bg-no-repeat transition-all duration-700 group-hover:brightness-105 group-hover:saturate-110"></div>
                        <div class="absolute inset-0 transition-all duration-700 bg-gradient-to-t from-black/70 via-black/20 to-transparent group-hover:from-black/40 group-hover:via-black/10"></div>
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-all duration-700 bg-gradient-to-br from-white/5 via-white/10 to-transparent"></div>
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-30 transition-opacity duration-700 bg-[repeating-linear-gradient(45deg,transparent,transparent_8px,rgba(255,255,255,0.03)_8px,rgba(255,255,255,0.03)_9px)]"></div>
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-all duration-700 shadow-[inset_0_0_30px_rgba(0,0,0,0.3)]"></div>
                        <div class="absolute bottom-4 left-4 opacity-0 group-hover:opacity-100 transition-all duration-700 delay-200 px-3 py-1.5 bg-[var(--color-primary-3rd)]/70 backdrop-blur-sm rounded-md border border-white/5 transform translate-y-3 group-hover:translate-y-0">
                            <span class="text-white/80 text-[10px] font-bold tracking-[2px] uppercase">article</span>
                        </div>
                    </div>
                    
                    <div class='absolute group-hover:bg-[var(--color-primary-3rd)]/80 duration-1000 -left-2 top-0 w-20 h-10 rounded-xl bg-[#141414cc]/90 flex items-center text-end px-2'> 
                        <span class='font-bold text-white'> ۱۸ بهمن </span>
                    </div>
                </a>
                
                <div class='flex flex-col gap-4 px-3'>
                    <div class='flex gap-4 items-center'>
                        <a href="#" class='flex gap-1'>
                            <svg class='w-4 fill-[var(--color-gray)]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>
                            <span class='text-[var(--color-gray)]'> سارا </span>
                        </a>
                        
                        <a href="#" class='flex gap-1 items-center'>
                            <svg class='w-4 fill-[var(--color-gray)]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M202.7 288H352c17.7 0 32-14.3 32-32V64c0-17.7-14.3-32-32-32H64C46.3 32 32 46.3 32 32V256c0 17.7 14.3 32 32 32H96c17.7 0 32 14.3 32 32v16l55.5-41.6c5.5-4.2 12.3-6.4 19.2-6.4zM352 320H202.7l-81.1 60.8c-4.8 3.6-11.3 4.2-16.8 1.5s-8.8-8.2-8.8-14.3V352 320H64c-35.3 0-64-28.7-64-64V64C0 28.7 28.7 0 64 0H352c35.3 0 64 28.7 64 64V256c0 35.3-28.7 64-64 64zM320 448c-35.3 0-64-28.7-64-64V352h32v32c0 17.7 14.3 32 32 32H437.3c6.9 0 13.7 2.2 19.2 6.4L512 464V448c0-17.7 14.3-32 32-32h32c17.7 0 32-14.3 32-32V192c0-17.7-14.3-32-32-32H448V128H576c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H544v32 16c0 6.1-3.4 11.6-8.8 14.3s-11.9 2.1-16.8-1.5L437.3 448H320z"/></svg>
                            <div class='flex'>
                                <span class='text-[var(--color-gray)]'> نظرات </span>
                                <span class='text-[var(--color-gray)]'> (۱۸) </span>
                            </div>
                        </a>
                    </div>
                    <a href="#" class='text-[var(--color-white)] hover:text-[var(--color-primary-3rd)] duration-600 font-bold text-lg'>
                        معماری میکروسرویس‌ها در Laravel و نحوه پیاده‌سازی آن
                    </a>
                    <a href="#" class='group relative w-30 bg-inherit hover:bg-[var(--color-primary-3rd)] duration-600 flex items-center text-center justify-center py-4 border-3 border-[var(--color-border)] rounded-full cursor-pointer mt-5'>
                        <svg class='absolute right-0 w-3 fill-[var(--color-gray)] group-hover:fill-[var(--color-white)] duration-500 group-hover:-translate-x-5 group-hover:opacity-100 opacity-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z"/></svg>
                        <span class='text-xs text-[var(--color-gray)] group-hover:text-[var(--color-white)] transition-all duration-400 translate-x-2 group-hover:-translate-x-5 font-bold'> بیشتر بخوانید </span>
                        <svg class='absolute left-2 w-3 fill-[var(--color-gray)] group-hover:fill-[var(--color-white)] transition-all duration-200 group-hover:-translate-x-4 group-hover:opacity-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z"/></svg>
                    </a>
                </div>
            </div>
    
            <div class='card flex flex-col gap-4 pb-5 overflow-hidden'>
                <a href="#" class="relative w-full h-50 overflow-hidden rounded-2xl group perspective-1000">
                    <div class="w-full h-full relative transform-gpu transition-all duration-800 ease-[cubic-bezier(0.34,1.56,0.64,1)] group-hover:scale-105 group-hover:rotate-y-4 group-hover:rotate-x-[-3deg]">
                        <div class="absolute inset-0 bg-[url('assets/img/resome13.webp')] bg-cover bg-center bg-no-repeat transition-all duration-700 group-hover:brightness-105 group-hover:saturate-110"></div>
                        <div class="absolute inset-0 transition-all duration-700 bg-gradient-to-t from-black/70 via-black/20 to-transparent group-hover:from-black/40 group-hover:via-black/10"></div>
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-all duration-700 bg-gradient-to-br from-white/5 via-white/10 to-transparent"></div>
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-30 transition-opacity duration-700 bg-[repeating-linear-gradient(45deg,transparent,transparent_8px,rgba(255,255,255,0.03)_8px,rgba(255,255,255,0.03)_9px)]"></div>
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-all duration-700 shadow-[inset_0_0_30px_rgba(0,0,0,0.3)]"></div>
                        <div class="absolute bottom-4 left-4 opacity-0 group-hover:opacity-100 transition-all duration-700 delay-200 px-3 py-1.5 bg-[var(--color-primary-3rd)]/70 backdrop-blur-sm rounded-md border border-white/5 transform translate-y-3 group-hover:translate-y-0">
                            <span class="text-white/80 text-[10px] font-bold tracking-[2px] uppercase">article</span>
                        </div>
                    </div>
                    
                    <div class='absolute group-hover:bg-[var(--color-primary-3rd)]/80 duration-1000 -left-2 top-0 w-20 h-10 rounded-xl bg-[#141414cc]/90 flex items-center text-end px-2'> 
                        <span class='font-bold text-white'> ۲۵ دی </span>
                    </div>
                </a>
                
                <div class='flex flex-col gap-4 px-3'>
                    <div class='flex gap-4 items-center'>
                        <a href="#" class='flex gap-1'>
                            <svg class='w-4 fill-[var(--color-gray)]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>
                            <span class='text-[var(--color-gray)]'> علی </span>
                        </a>
                        
                        <a href="#" class='flex gap-1 items-center'>
                            <svg class='w-4 fill-[var(--color-gray)]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M202.7 288H352c17.7 0 32-14.3 32-32V64c0-17.7-14.3-32-32-32H64C46.3 32 32 46.3 32 32V256c0 17.7 14.3 32 32 32H96c17.7 0 32 14.3 32 32v16l55.5-41.6c5.5-4.2 12.3-6.4 19.2-6.4zM352 320H202.7l-81.1 60.8c-4.8 3.6-11.3 4.2-16.8 1.5s-8.8-8.2-8.8-14.3V352 320H64c-35.3 0-64-28.7-64-64V64C0 28.7 28.7 0 64 0H352c35.3 0 64 28.7 64 64V256c0 35.3-28.7 64-64 64zM320 448c-35.3 0-64-28.7-64-64V352h32v32c0 17.7 14.3 32 32 32H437.3c6.9 0 13.7 2.2 19.2 6.4L512 464V448c0-17.7 14.3-32 32-32h32c17.7 0 32-14.3 32-32V192c0-17.7-14.3-32-32-32H448V128H576c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H544v32 16c0 6.1-3.4 11.6-8.8 14.3s-11.9 2.1-16.8-1.5L437.3 448H320z"/></svg>
                            <div class='flex'>
                                <span class='text-[var(--color-gray)]'> نظرات </span>
                                <span class='text-[var(--color-gray)]'> (۳۰) </span>
                            </div>
                        </a>
                    </div>
                    <a href="#" class='text-[var(--color-white)] hover:text-[var(--color-primary-3rd)] duration-600 font-bold text-lg'>
                        راهنمای انتخاب بین REST و GraphQL برای پروژه‌های جدید
                    </a>
                    <a href="#" class='group relative w-30 bg-inherit hover:bg-[var(--color-primary-3rd)] duration-600 flex items-center text-center justify-center py-4 border-3 border-[var(--color-border)] rounded-full cursor-pointer mt-5'>
                        <svg class='absolute right-0 w-3 fill-[var(--color-gray)] group-hover:fill-[var(--color-white)] duration-500 group-hover:-translate-x-5 group-hover:opacity-100 opacity-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z"/></svg>
                        <span class='text-xs text-[var(--color-gray)] group-hover:text-[var(--color-white)] transition-all duration-400 translate-x-2 group-hover:-translate-x-5 font-bold'> بیشتر بخوانید </span>
                        <svg class='absolute left-2 w-3 fill-[var(--color-gray)] group-hover:fill-[var(--color-white)] transition-all duration-200 group-hover:-translate-x-4 group-hover:opacity-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z"/></svg>
                    </a>
                </div>
            </div>
        </div>

    </div> -->

<?php 
include('footer.php')
?>