<!DOCTYPE html>
<html lang="fa"dir='rtl'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه شخصی محمد منتظمی</title>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/tailwind.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/font.css">
    <link rel="icon" type="image/png" href="assets/img/logo1.webp">
</head>
<style>
    html {
        scroll-behavior: smooth;
    }
    .card {
    --x: 50%;
    --y: 50%;

    position: relative;
    border-radius: 24px;
    overflow: hidden;
    background-color:var(--color-gray-2);
    }

    .card::before {
    content: "";
    position: absolute;
    inset: 0;
    border-radius: inherit;
    padding: 3px;

    background: radial-gradient(
        400px circle at var(--x) var(--y),
        var(--color-primary-3rd),
        transparent 80%
    );

    -webkit-mask:
        linear-gradient(#fff 0 0) content-box,
        linear-gradient(#fff 0 0);

    -webkit-mask-composite: xor;
    mask-composite: exclude;

    pointer-events: none;

    opacity: 0;
    transition: opacity 0.35s ease;
    }

    .card:hover::before {
    opacity: 1;
    }

/*/////////////////////////////////////////// دیویژن های معلق */

    .my-container {
        display: flex;
        flex-direction: column;
        gap: 30px;
        align-items: center;
        padding: 40px 20px;
        position: relative;
        min-height: 100vh;
    }

    .my-box {
        
        position: relative;
        z-index: 2;
        background: transparent;
        backdrop-filter: blur(60px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
    }

    .my-box:hover {
        transform: scale(1.03);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
    }

    .my-floating {
        position: absolute;
        border-radius: 16px;
        background: rgb(74, 62, 36);
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        font-size: 16px;
        font-weight: bold;
        border: 1px solid rgba(255, 255, 255, 0.15);
        z-index: 1;
        pointer-events: none;
        transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        opacity: 1;
    }
         /* نیاز به نگاه کردن          */
    .dot.active {
        transform: scale(1.3);
        border-radius: 20px;
    }
    .dot.active > .dotChild {
        transform: scale(1.0);
    }


    /* ===== انیمیشن حرکت افقی ===== */
@keyframes scrollHorizontal {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }  /* نصف عرض کل محتوا */
}
    



/* خود نویس */


    .typewriter-box {
        display: flex;
        gap: 5px;
    }

    .typewriter-text {
        display: inline;
    }

    /* مکان‌نما */
    .cursor {
        display: inline-block;
        width: 2px;
        height: 40px;
        background-color: var(--color-white);
        animation: blink 0.8s step-end infinite;
    }

    @keyframes blink {
        0%, 100% { opacity: 1; }
        50% { opacity: 0; }
    }
/* 
    @media (min-width:450px){
        .number_header{
            display: block;
        }
        .picture_number_header{
            justify-content: space-between;
        }

    } */



/* ============================================
   اسکرول بار لوکس و مدرن - اعمال روی کل سایت
   ============================================ */

/* عرض و ارتفاع اسکرول بار */
::-webkit-scrollbar {
    width: 10px;
    height: 10px;
}

/* پس‌زمینه اسکرول بار (شیار) */
::-webkit-scrollbar-track {
    background: rgba(255, 255, 255, 0.02);
    border-radius: 20px;
    margin: 4px;
    backdrop-filter: blur(10px);
}

/* دستگیره اسکرول بار */
::-webkit-scrollbar-thumb {
    background: linear-gradient(
        180deg,
        var(--color-primary-3rd) 0%,
        rgba(253, 196, 72, 0.6) 50%,
        rgba(253, 196, 72, 0.2) 100%
    );
    border-radius: 20px;
    border: 2px solid rgba(255, 255, 255, 0.05);
    background-clip: padding-box;
    box-shadow: 
        inset 0 0 6px rgba(253, 196, 72, 0.3),
        0 0 8px rgba(253, 196, 72, 0.15);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

/* حالت هاور روی دستگیره */
::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(
        180deg,
        var(--color-primary-3rd) 0%,
        var(--color-primary-3rd) 60%,
        rgba(253, 196, 72, 0.5) 100%
    );
    box-shadow: 
        inset 0 0 10px rgba(253, 196, 72, 0.5),
        0 0 14px var(--color-primary-3rd),
        0 0 24px rgba(253, 196, 72, 0.4);
    border-color: rgba(253, 196, 72, 0.2);
}

/* حالت کلیک روی دستگیره */
::-webkit-scrollbar-thumb:active {
    background: var(--color-primary-3rd);
    box-shadow: 
        0 0 20px var(--color-primary-3rd),
        0 0 40px rgba(253, 196, 72, 0.5);
}

/* گوشه پایین (جایی که دو اسکرول بار به هم می‌رسن) */
::-webkit-scrollbar-corner {
    background: transparent;
}

/* ============================================
   پشتیبانی از فایرفاکس
   ============================================ */
* {
    scrollbar-width: thin;
    scrollbar-color: var(--color-primary-3rd) rgba(255, 255, 255, 0.02);
}

/* ============================================
   اسکرول نرم برای کل سایت
   ============================================ */
html {
    scroll-behavior: smooth;
}

/* ============================================
   انیمیشن ملایم برای اسکرول بار (اختیاری)
   ============================================ */
::-webkit-scrollbar-thumb {
    animation: scrollGlow 3s ease-in-out infinite alternate;
}

@keyframes scrollGlow {
    0% {
        box-shadow: 
            inset 0 0 6px rgba(253, 196, 72, 0.3),
            0 0 6px rgba(253, 196, 72, 0.1);
    }
    100% {
        box-shadow: 
            inset 0 0 10px rgba(253, 196, 72, 0.5),
            0 0 12px rgba(253, 196, 72, 0.3);
    }
}




</style>


 
<body class='max-w-[2560px] bg-[var(--color-secondary)] overflow-x-hidden select-none'>
<main id="main_div" class="w-12/12 relative mb-20">
        <!-- <div class='fixed top-0 w-full z-10 translate-x-[100%] transition-all duration-300 ' id="burger_menu">
            <div class='absolute w-full h-dvh bg-gray-900/50 translate-x-[100%] transition-all duration-600 z-8' onclick="burger_menu_function('close')"></div>
            <div class='absolute w-[320px] h-full bg-[var(--color-dark)] translate-x-[100%] transition-all duration-800 z-9'>
                <div class='w-11/12 mx-auto flex flex-col gap-10'>
                    <div class='w-full flex justify-between text-center items-center mt-5'>
                        <div onclick="burger_menu_function('close')" class='size-10 bg-black transition-all duration-300 hover:bg-[var(--color-primary-3rd)] rounded-full flex items-center justify-center'> 
                            <svg fill="#ffffff" class='size-4' version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 460.775 460.775" xml:space="preserve"><path d="M285.08,230.397L456.218,59.27c6.076-6.077,6.076-15.911,0-21.986L423.511,4.565c-2.913-2.911-6.866-4.55-10.992-4.55c-4.127,0-8.08,1.639-10.993,4.55l-171.138,171.14L59.25,4.565c-2.913-2.911-6.866-4.55-10.993-4.55c-4.126,0-8.08,1.639-10.992,4.55L4.558,37.284c-6.077,6.075-6.077,15.909,0,21.986l171.138,171.128L4.575,401.505c-6.074,6.077-6.074,15.911,0,21.986l32.709,32.719c2.911,2.911,6.865,4.55,10.992,4.55c4.127,0,8.08-1.639,10.994-4.55l171.117-171.12l171.118,171.12c2.913,2.911,6.866,4.55,10.993,4.55c4.128,0,8.081-1.639,10.992-4.55l32.709-32.719c6.074-6.075,6.074-15.909,0-21.986L285.08,230.397z"/></svg>
                        </div>
                        <img src="assets/img/resome4.webp" alt="">
                    </div>
                    <ul class='w-full flex flex-col text-[var(--color-body)] font-bold'>
                        <li class='flex py-1 items-center border-t-1 border-b-1 border-[var(--color-border)]'>
                            <a href="" class='w-full'>خانه</a>
                        </li>
                        <li class='flex py-1 items-center border-t-1 border-b-1 border-[var(--color-border)]'>
                            <a href="" class='w-full'>درباره من</a>
                        </li>
                        <li class='flex flex-col gap-2 py-1 items-center border-t-1 border-b-1 border-[var(--color-border)] overflow-hidden' onclick="dropdown(this)">
                            <div class='w-full flex justify-between'>
                                <span> سرویس ها </span>
                                <svg class='w-4 fill-[var(--color-white)] transition-all duration-400' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"/></svg>
                            </div>
                            <ul class='w-full h-0 flex flex-col mr-7 gap-1 transition-all duration-400'>
                                <li>
                                    <a href=""> منتظمی 1 2 3 </a>
                                </li>
                                <li>
                                    <a href=""> منتظمی 1 2 3 </a>
                                </li>
                                <li>
                                    <a href=""> منتظمی 1 2 3 </a>
                                </li>
                            </ul>
                        </li>
                        <li class='flex flex-col gap-2 py-1 items-center border-t-1 border-b-1 border-[var(--color-border)] overflow-hidden' onclick="dropdown(this)">
                            <div class='w-full flex justify-between'>
                                <span> وبلاگ ها </span>
                                <svg class='w-4 fill-[var(--color-white)] transition-all duration-400' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"/></svg>
                            </div>
                            <ul class='w-full h-0 flex flex-col mr-7 gap-1 transition-all duration-400'>
                                <li>
                                    <a href=""> منتظمی 1 2 3 </a>
                                </li>
                                <li>
                                    <a href=""> منتظمی 1 2 3 </a>
                                </li>
                                <li>
                                    <a href=""> منتظمی 1 2 3 </a>
                                </li>
                            </ul>
                        </li>
                        <li class='flex flex-col gap-2 py-1 items-center border-t-1 border-b-1 border-[var(--color-border)] overflow-hidden' onclick="dropdown(this)">
                            <div class='w-full flex justify-between'>
                                <span> پروژه ها </span>
                                <svg class='w-4 fill-[var(--color-white)] transition-all duration-400' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"/></svg>
                            </div>
                            <ul class='w-full h-0 flex flex-col mr-7 gap-1 transition-all duration-400'>
                                <li>
                                    <a href=""> منتظمی 1 2 3 </a>
                                </li>
                                <li>
                                    <a href=""> منتظمی 1 2 3 </a>
                                </li>
                                <li>
                                    <a href=""> منتظمی 1 2 3 </a>
                                </li>
                            </ul>
                        </li>
                        <li class='flex py-1 items-center border-t-1 border-b-1 border-[var(--color-border)]'>
                            <a href="" class='w-full'>ارتباط</a>
                        </li>
                    </ul>
                    <div class=' flex flex-col gap-4'>
                        <span class='font-bold text-base text-[var(--color-white)]'>منو در شبکه های اجتماعی دنبال کنید</span>
                        <div class='flex gap-3 items-center'>
                            <a href="https://github.com/montazami-dev" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-gray-2)] z-1'>
                                <svg class='w-6 fill-[var(--color-white)] z-3' viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>github [#142]</title><desc>Created with Sketch.</desc><defs></defs><g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd"><g id="Dribbble-Light-Preview" transform="translate(-140.000000, -7559.000000)"><g id="icons" transform="translate(56.000000, 160.000000)"><path d="M94,7399 C99.523,7399 104,7403.59 104,7409.253 C104,7413.782 101.138,7417.624 97.167,7418.981 C96.66,7419.082 96.48,7418.762 96.48,7418.489 C96.48,7418.151 96.492,7417.047 96.492,7415.675 C96.492,7414.719 96.172,7414.095 95.813,7413.777 C98.04,7413.523 100.38,7412.656 100.38,7408.718 C100.38,7407.598 99.992,7406.684 99.35,7405.966 C99.454,7405.707 99.797,7404.664 99.252,7403.252 C99.252,7403.252 98.414,7402.977 96.505,7404.303 C95.706,7404.076 94.85,7403.962 94,7403.958 C93.15,7403.962 92.295,7404.076 91.497,7404.303 C89.586,7402.977 88.746,7403.252 88.746,7403.252 C88.203,7404.664 88.546,7405.707 88.649,7405.966 C88.01,7406.684 87.619,7407.598 87.619,7408.718 C87.619,7412.646 89.954,7413.526 92.175,7413.785 C91.889,7414.041 91.63,7414.493 91.54,7415.156 C90.97,7415.418 89.522,7415.871 88.63,7414.304 C88.63,7414.304 88.101,7413.319 87.097,7413.247 C87.097,7413.247 86.122,7413.234 87.029,7413.87 C87.029,7413.87 87.684,7414.185 88.139,7415.37 C88.139,7415.37 88.726,7417.2 91.508,7416.58 C91.513,7417.437 91.522,7418.245 91.522,7418.489 C91.522,7418.76 91.338,7419.077 90.839,7418.982 C86.865,7417.627 84,7413.783 84,7409.253 C84,7403.59 88.478,7399 94,7399" id="github-[#142]"></path></g></g></g></svg>
                                <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full z-2'></div>
                            </a>
                            <a href="https://instagram.com/montazami_dev" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-gray-2)] z-1'>
                                <svg class='w-10 fill-[var(--color-white)] z-3' viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M15.5 5H9.5C7.29086 5 5.5 6.79086 5.5 9V15C5.5 17.2091 7.29086 19 9.5 19H15.5C17.7091 19 19.5 17.2091 19.5 15V9C19.5 6.79086 17.7091 5 15.5 5Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 15C10.8431 15 9.5 13.6569 9.5 12C9.5 10.3431 10.8431 9 12.5 9C14.1569 9 15.5 10.3431 15.5 12C15.5 12.7956 15.1839 13.5587 14.6213 14.1213C14.0587 14.6839 13.2956 15 12.5 15Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><rect x="15.5" y="9" width="2" height="2" rx="1" transform="rotate(-90 15.5 9)" fill="#ffffff"/><rect x="16" y="8.5" width="1" height="1" rx="0.5" transform="rotate(-90 16 8.5)" stroke="#000000" stroke-linecap="round"/></svg>
                                <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full z-2'></div>
                            </a>
                            <a href="#" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-gray-2)] z-1'>
                                <svg class='w-7 fill-[var(--color-white)] z-3' viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.5 8C7.32843 8 8 7.32843 8 6.5C8 5.67157 7.32843 5 6.5 5C5.67157 5 5 5.67157 5 6.5C5 7.32843 5.67157 8 6.5 8Z"/><path d="M5 10C5 9.44772 5.44772 9 6 9H7C7.55228 9 8 9.44771 8 10V18C8 18.5523 7.55228 19 7 19H6C5.44772 19 5 18.5523 5 18V10Z" /><path d="M11 19H12C12.5523 19 13 18.5523 13 18V13.5C13 12 16 11 16 13V18.0004C16 18.5527 16.4477 19 17 19H18C18.5523 19 19 18.5523 19 18V12C19 10 17.5 9 15.5 9C13.5 9 13 10.5 13 10.5V10C13 9.44771 12.5523 9 12 9H11C10.4477 9 10 9.44772 10 10V18C10 18.5523 10.4477 19 11 19Z" /></svg>
                                <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full z-2'></div>
                            </a>
                            <a href="#" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-gray-2)] z-1'>
                                <svg class='w-7 fill-[var(--color-white)] z-3' viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M 26.070313 3.996094 C 25.734375 4.011719 25.417969 4.109375 25.136719 4.21875 L 25.132813 4.21875 C 24.847656 4.332031 23.492188 4.902344 21.433594 5.765625 C 19.375 6.632813 16.703125 7.757813 14.050781 8.875 C 8.753906 11.105469 3.546875 13.300781 3.546875 13.300781 L 3.609375 13.277344 C 3.609375 13.277344 3.25 13.394531 2.875 13.652344 C 2.683594 13.777344 2.472656 13.949219 2.289063 14.21875 C 2.105469 14.488281 1.957031 14.902344 2.011719 15.328125 C 2.101563 16.050781 2.570313 16.484375 2.90625 16.722656 C 3.246094 16.964844 3.570313 17.078125 3.570313 17.078125 L 3.578125 17.078125 L 8.460938 18.722656 C 8.679688 19.425781 9.949219 23.597656 10.253906 24.558594 C 10.433594 25.132813 10.609375 25.492188 10.828125 25.765625 C 10.933594 25.90625 11.058594 26.023438 11.207031 26.117188 C 11.265625 26.152344 11.328125 26.179688 11.390625 26.203125 C 11.410156 26.214844 11.429688 26.21875 11.453125 26.222656 L 11.402344 26.210938 C 11.417969 26.214844 11.429688 26.226563 11.441406 26.230469 C 11.480469 26.242188 11.507813 26.246094 11.558594 26.253906 C 12.332031 26.488281 12.953125 26.007813 12.953125 26.007813 L 12.988281 25.980469 L 15.871094 23.355469 L 20.703125 27.0625 L 20.8125 27.109375 C 21.820313 27.550781 22.839844 27.304688 23.378906 26.871094 C 23.921875 26.433594 24.132813 25.875 24.132813 25.875 L 24.167969 25.785156 L 27.902344 6.65625 C 28.007813 6.183594 28.035156 5.742188 27.917969 5.3125 C 27.800781 4.882813 27.5 4.480469 27.136719 4.265625 C 26.769531 4.046875 26.40625 3.980469 26.070313 3.996094 Z M 25.96875 6.046875 C 25.964844 6.109375 25.976563 6.101563 25.949219 6.222656 L 25.949219 6.234375 L 22.25 25.164063 C 22.234375 25.191406 22.207031 25.25 22.132813 25.308594 C 22.054688 25.371094 21.992188 25.410156 21.667969 25.28125 L 15.757813 20.75 L 12.1875 24.003906 L 12.9375 19.214844 C 12.9375 19.214844 22.195313 10.585938 22.59375 10.214844 C 22.992188 9.84375 22.859375 9.765625 22.859375 9.765625 C 22.886719 9.3125 22.257813 9.632813 22.257813 9.632813 L 10.082031 17.175781 L 10.078125 17.15625 L 4.242188 15.191406 L 4.242188 15.1875 C 4.238281 15.1875 4.230469 15.183594 4.226563 15.183594 C 4.230469 15.183594 4.257813 15.171875 4.257813 15.171875 L 4.289063 15.15625 L 4.320313 15.144531 C 4.320313 15.144531 9.53125 12.949219 14.828125 10.71875 C 17.480469 9.601563 20.152344 8.476563 22.207031 7.609375 C 24.261719 6.746094 25.78125 6.113281 25.867188 6.078125 C 25.949219 6.046875 25.910156 6.046875 25.96875 6.046875 Z"/></svg>
                                <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full z-2'></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <header class='w-11/12 mx-auto flex flex-col gap-5 mb-10'>
            <!-- fixed top-0 w-11/12 -->
            <nav class='w-full flex justify-between text-center items-center pt-2 relative z-8'>
                
                <!-- منوی همبرگری (موبایل) -->
                <div onclick="burger_menu_function('open')" class='lg:hidden group size-10 rounded-full overflow-hidden flex flex-col p-[10px] justify-between rotate-180 items-center cursor-pointer border-2 border-[var(--color-primary-3rd)] z-20 relative'>
                    <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] left-0 right-0 top-0 bottom-0 rounded-full scale-100 duration-300 transition-all group-hover:scale-50 opacity-100 group-hover:opacity-0 z-0'></div>
                    <span class='w-full bg-[var(--color-white)] h-[3px] rounded-xl group-hover:bg-[var(--color-primary-3rd)] transition-all duration-300 group-hover:ml-0 ml-1 z-10'></span>
                    <span class='w-full bg-[var(--color-white)] h-[3px] rounded-xl group-hover:bg-[var(--color-primary-3rd)] transition-all duration-300 group-hover:mr-0 mr-1 z-10'></span>
                    <span class='w-full bg-[var(--color-white)] h-[3px] rounded-xl group-hover:bg-[var(--color-primary-3rd)] transition-all duration-300 group-hover:ml-0 ml-1 z-10'></span>
                </div>

                <!-- لوگو -->
                <a href="#" class='flex-shrink-0'>
                    <img src="assets/img/logo2.webp" alt="محمد منتظمی" class='w-60'>
                </a>

                <!-- لینک‌های دسکتاپ -->
                <ul class='hidden lg:flex items-center gap-8 text-sm font-medium'>
                    <li>
                        <a href="#about" class='text-[var(--color-gray)] hover:text-[var(--color-primary-3rd)] transition-all duration-300 relative group'>
                            درباره من
                            <span class='absolute -bottom-1 left-0 w-0 h-[2px] bg-[var(--color-primary-3rd)] group-hover:w-full transition-all duration-500'></span>
                        </a>
                    </li>
                    <li>
                        <a href="#services" class='text-[var(--color-gray)] hover:text-[var(--color-primary-3rd)] transition-all duration-300 relative group'>
                            خدمات
                            <span class='absolute -bottom-1 left-0 w-0 h-[2px] bg-[var(--color-primary-3rd)] group-hover:w-full transition-all duration-500'></span>
                        </a>
                    </li>
                    <li>
                        <a href="#portfolio" class='text-[var(--color-gray)] hover:text-[var(--color-primary-3rd)] transition-all duration-300 relative group'>
                            نمونه کارها
                            <span class='absolute -bottom-1 left-0 w-0 h-[2px] bg-[var(--color-primary-3rd)] group-hover:w-full transition-all duration-500'></span>
                        </a>
                    </li>
                    <li>
                        <a href="#skills" class='text-[var(--color-gray)] hover:text-[var(--color-primary-3rd)] transition-all duration-300 relative group'>
                            مهارت‌ها
                            <span class='absolute -bottom-1 left-0 w-0 h-[2px] bg-[var(--color-primary-3rd)] group-hover:w-full transition-all duration-500'></span>
                        </a>
                    </li>
                    <li>
                        <a href="#team" class='text-[var(--color-gray)] hover:text-[var(--color-primary-3rd)] transition-all duration-300 relative group'>
                            هم‌تیمی‌ها
                            <span class='absolute -bottom-1 left-0 w-0 h-[2px] bg-[var(--color-primary-3rd)] group-hover:w-full transition-all duration-500'></span>
                        </a>
                    </li>
                    <li>
                        <a href="#contact" class='px-5 py-2 bg-[var(--color-primary-3rd)] text-[var(--color-white)] font-bold rounded-full transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:shadow-[var(--color-primary-3rd)]/30'>
                            ارتباط با من
                        </a>
                    </li>
                </ul>

                <!-- دکمه تماس (موبایل) -->
                <a href="tel:09995186884" class='lg:hidden flex items-center justify-center w-10 h-10 rounded-full border-2 border-[var(--color-primary-3rd)] transition-all duration-300 hover:bg-[var(--color-primary-3rd)] hover:scale-105'>
                    <svg class='w-5 fill-[var(--color-primary-3rd)] group-hover:fill-white transition-all duration-300' viewBox="0 0 24 24">
                        <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                    </svg>
                </a>

            </nav>

            <!-- ====== منوی موبایل (اسلاید شونده) ====== -->
            <div id="mobileMenu" class='fixed top-0 left-0 w-full h-screen bg-[var(--color-black)]/95 backdrop-blur-2xl z-40 -translate-x-full transition-all duration-500 ease-[cubic-bezier(0.34,1.56,0.64,1)] lg:hidden'>
                
                <!-- دکمه بستن -->
                <div class='flex justify-end p-5'>
                    <button onclick="burger_menu_function('close')" class='group size-10 rounded-full flex items-center justify-center border-2 border-[var(--color-primary-3rd)] hover:bg-[var(--color-primary-3rd)] transition-all duration-300'>
                        <svg class='w-6 fill-[var(--color-white)] group-hover:fill-black transition-all duration-300' viewBox="0 0 24 24">
                            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
                        </svg>
                    </button>
                </div>

                <!-- لینک‌های منو -->
                <ul class='flex flex-col items-center justify-center gap-8 h-[70vh] text-xl font-bold'>
                    <li>
                        <a href="#about" onclick="burger_menu_function('close')" class='text-[var(--color-white)] hover:text-[var(--color-primary-3rd)] transition-all duration-300 relative group'>
                            درباره من
                            <span class='absolute -bottom-1 left-0 w-0 h-[2px] bg-[var(--color-primary-3rd)] group-hover:w-full transition-all duration-500'></span>
                        </a>
                    </li>
                    <li>
                        <a href="#services" onclick="burger_menu_function('close')" class='text-[var(--color-white)] hover:text-[var(--color-primary-3rd)] transition-all duration-300 relative group'>
                            خدمات
                            <span class='absolute -bottom-1 left-0 w-0 h-[2px] bg-[var(--color-primary-3rd)] group-hover:w-full transition-all duration-500'></span>
                        </a>
                    </li>
                    <li>
                        <a href="#portfolio" onclick="burger_menu_function('close')" class='text-[var(--color-white)] hover:text-[var(--color-primary-3rd)] transition-all duration-300 relative group'>
                            نمونه کارها
                            <span class='absolute -bottom-1 left-0 w-0 h-[2px] bg-[var(--color-primary-3rd)] group-hover:w-full transition-all duration-500'></span>
                        </a>
                    </li>
                    <li>
                        <a href="#testimonials" onclick="burger_menu_function('close')" class='text-[var(--color-white)] hover:text-[var(--color-primary-3rd)] transition-all duration-300 relative group'>
                            نظرات
                            <span class='absolute -bottom-1 left-0 w-0 h-[2px] bg-[var(--color-primary-3rd)] group-hover:w-full transition-all duration-500'></span>
                        </a>
                    </li>
                    <li>
                        <a href="#skills" onclick="burger_menu_function('close')" class='text-[var(--color-white)] hover:text-[var(--color-primary-3rd)] transition-all duration-300 relative group'>
                            مهارت‌ها
                            <span class='absolute -bottom-1 left-0 w-0 h-[2px] bg-[var(--color-primary-3rd)] group-hover:w-full transition-all duration-500'></span>
                        </a>
                    </li>
                    <li>
                        <a href="#team" onclick="burger_menu_function('close')" class='text-[var(--color-white)] hover:text-[var(--color-primary-3rd)] transition-all duration-300 relative group'>
                            هم‌تیمی‌ها
                            <span class='absolute -bottom-1 left-0 w-0 h-[2px] bg-[var(--color-primary-3rd)] group-hover:w-full transition-all duration-500'></span>
                        </a>
                    </li>
                    <li>
                        <a href="#contact" onclick="burger_menu_function('close')" class='px-8 py-3 bg-[var(--color-primary-3rd)] text-black font-bold rounded-full transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:shadow-[var(--color-primary-3rd)]/30'>
                            ارتباط با من
                        </a>
                    </li>
                </ul>

                <!-- شبکه‌های اجتماعی در منو -->
                <div class='absolute bottom-10 left-0 right-0 flex justify-center gap-4'>
                    <a href="#" class='w-10 h-10 rounded-full border border-[var(--color-border)] flex items-center justify-center hover:border-[var(--color-primary-3rd)] hover:bg-[var(--color-primary-3rd)] transition-all duration-300'>
                        <svg class='w-5 fill-[var(--color-white)]' viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12 0 5.302 3.438 9.8 8.205 11.387.6.113.82-.26.82-.58 0-.287-.01-1.05-.015-2.06-3.338.726-4.042-1.416-4.042-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.09-.745.083-.73.083-.73 1.205.085 1.838 1.237 1.838 1.237 1.07 1.834 2.807 1.304 3.492.997.108-.775.418-1.305.762-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.468-2.38 1.235-3.22-.123-.3-.535-1.52.117-3.16 0 0 1.008-.322 3.3 1.23.96-.267 1.98-.4 3-.405 1.02.005 2.04.138 3 .405 2.29-1.552 3.297-1.23 3.297-1.23.653 1.64.24 2.86.118 3.16.768.84 1.233 1.91 1.233 3.22 0 4.61-2.804 5.62-5.476 5.92.43.37.824 1.102.824 2.22 0 1.602-.015 2.894-.015 3.287 0 .322.216.695.825.578C20.565 21.795 24 17.3 24 12c0-6.627-5.373-12-12-12z"/></svg>
                    </a>
                    <a href="#" class='w-10 h-10 rounded-full border border-[var(--color-border)] flex items-center justify-center hover:border-[var(--color-primary-3rd)] hover:bg-[var(--color-primary-3rd)] transition-all duration-300'>
                        <svg class='w-5 fill-[var(--color-white)]' viewBox="0 0 24 24"><path d="M23.953 4.57c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/></svg>
                    </a>
                    <a href="#" class='w-10 h-10 rounded-full border border-[var(--color-border)] flex items-center justify-center hover:border-[var(--color-primary-3rd)] hover:bg-[var(--color-primary-3rd)] transition-all duration-300'>
                        <svg class='w-5 fill-[var(--color-white)]' viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                    </a>
                    <a href="#" class='w-10 h-10 rounded-full border border-[var(--color-border)] flex items-center justify-center hover:border-[var(--color-primary-3rd)] hover:bg-[var(--color-primary-3rd)] transition-all duration-300'>
                        <svg class='w-5 fill-[var(--color-white)]' viewBox="0 0 24 24"><path d="M23.498 6.186c-.83.368-1.72.617-2.656.729 1.18-.708 2.085-1.826 2.512-3.157-.933.554-1.965.956-3.065 1.174-.881-.938-2.134-1.522-3.523-1.522-2.664 0-4.823 2.159-4.823 4.823 0 .377.043.744.125 1.096C7.853 9.063 4.197 7.506 1.64 4.995c-.416.714-.654 1.543-.654 2.426 0 1.672.852 3.147 2.145 4.009-.787-.025-1.526-.24-2.173-.6v.061c0 2.334 1.66 4.281 3.865 4.724-.404.109-.829.167-1.267.167-.31 0-.611-.03-.914-.089.619 1.933 2.416 3.341 4.544 3.381-1.665 1.307-3.765 2.085-6.046 2.085-.393 0-.78-.023-1.161-.068 2.153 1.38 4.715 2.187 7.466 2.187 8.956 0 13.855-7.42 13.855-13.855 0-.21 0-.42-.015-.63.954-.688 1.779-1.546 2.435-2.524z"/></svg>
                    </a>
                </div>

            </div>


            <div class='relative flex md:flex-row flex-col gap-2'>
                <div class='min-w-4/12 hidden lg:flex flex-col gap-4 mt-20'>
                    <div class="text-start">                        
                        <div class="typewriter-box sm:text-3xl text-2xl font-bold">
                            <span id="" class='typewriter-text text-[var(--color-primary-3rd)]'></span>
                            <span class="cursor "></span>
                        </div>
                    </div>
                    <h1 class='text-[var(--color-white)] font-bold text-[4.5vw]'> محمد منتظمی </h1>
                    <p class=' text-[var(--color-body)] leading-loose'> 
                    برنامه‌نویس بک‌اند با بیش از ۳ سال تجربه در توسعه وب. 
                        اهل آذربایجان شرقی هستم و عاشق کدنویسی و حل چالش‌های پیچیده. 
                        در تیم‌های حرفه‌ای کار می‌کنم و به دنبال خلق راهکارهای نوآورانه و کارآمد هستم. 
                        تخصص من در زمینه‌های Laravel، PHP  است.
                        همیشه به یادگیری و به‌روزرسانی مهارت‌هایم پایبند هستم و از همکاری با تیم‌های خلاق لذت می‌برم.
                    </p>
                    <a href="#portfolio" class='group relative w-55 bg-[var(--color-primary-3rd)] flex items-center text-center justify-center lg:py-5 py-3 px-4 rounded-full cursor-pointer'>
                        <svg class='absolute right-0 w-4 fill-[var(--color-white)] duration-500 group-hover:-translate-x-5 group-hover:opacity-100 opacity-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z"/></svg>
                        <span class='text-sm text-[var(--color-white)] transition-all duration-400 translate-x-2 group-hover:-translate-x-5'>مشاهده نمونه کارها</span>
                        <svg class='absolute left-2 w-4 fill-[var(--color-white)] transition-all duration-200 group-hover:-translate-x-4 group-hover:opacity-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z"/></svg>
                    </a> 
                </div>
                <img src="assets/img/resome3.webp" alt="" class='rotate-y-180 absolute lg:w-5/12 w-11/12 -top-15 left-0 -z-1'>
                <img class="lg:min-w-8/12 lg:translate-x-30 opacity-90" src="assets/img/team_picture/montazami6.webp" alt="" style="mask-image: linear-gradient(to bottom, black 65%, transparent 100%); -webkit-mask-image: linear-gradient(to bottom, black 65%, transparent 100%);"/>
                <div class='absolute top-0 left-5 text-[var(--color-white)] font-bold hidden lg:flex flex-col gap-8 mt-20 '>
                    <div class='flex gap-3 text-center items-center'>
                        <span class='text-8xl font-bold text-[var(--color-white)] text-center flex items-center gap-2'> 3 <span class='text-5xl'>+</span> </span>
                        <span class='text-2xl font-bold text-[var(--color-white)]'> سال <br> تجربه </span>
                    </div>
                    <div class=' flex flex-col gap-4'>
                        <span class='font-bold text-base text-[var(--color-white)]'>منو در شبکه های اجتماعی دنبال کنید</span>
                        <div class='flex gap-3 items-center'>
                            <a href="https://github.com/montazami-dev" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-black)]'>
                                <svg class='w-6 fill-[var(--color-white)]' viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>github [#142]</title><desc>Created with Sketch.</desc><defs></defs><g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd"><g id="Dribbble-Light-Preview" transform="translate(-140.000000, -7559.000000)"><g id="icons" transform="translate(56.000000, 160.000000)"><path d="M94,7399 C99.523,7399 104,7403.59 104,7409.253 C104,7413.782 101.138,7417.624 97.167,7418.981 C96.66,7419.082 96.48,7418.762 96.48,7418.489 C96.48,7418.151 96.492,7417.047 96.492,7415.675 C96.492,7414.719 96.172,7414.095 95.813,7413.777 C98.04,7413.523 100.38,7412.656 100.38,7408.718 C100.38,7407.598 99.992,7406.684 99.35,7405.966 C99.454,7405.707 99.797,7404.664 99.252,7403.252 C99.252,7403.252 98.414,7402.977 96.505,7404.303 C95.706,7404.076 94.85,7403.962 94,7403.958 C93.15,7403.962 92.295,7404.076 91.497,7404.303 C89.586,7402.977 88.746,7403.252 88.746,7403.252 C88.203,7404.664 88.546,7405.707 88.649,7405.966 C88.01,7406.684 87.619,7407.598 87.619,7408.718 C87.619,7412.646 89.954,7413.526 92.175,7413.785 C91.889,7414.041 91.63,7414.493 91.54,7415.156 C90.97,7415.418 89.522,7415.871 88.63,7414.304 C88.63,7414.304 88.101,7413.319 87.097,7413.247 C87.097,7413.247 86.122,7413.234 87.029,7413.87 C87.029,7413.87 87.684,7414.185 88.139,7415.37 C88.139,7415.37 88.726,7417.2 91.508,7416.58 C91.513,7417.437 91.522,7418.245 91.522,7418.489 C91.522,7418.76 91.338,7419.077 90.839,7418.982 C86.865,7417.627 84,7413.783 84,7409.253 C84,7403.59 88.478,7399 94,7399" id="github-[#142]"></path></g></g></g></svg>
                                <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full -z-1'></div>
                            </a>
                            <a href="https://instagram.com/montazami_dev" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-black)]'>
                                <svg class='w-10 fill-[var(--color-white)]' viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M15.5 5H9.5C7.29086 5 5.5 6.79086 5.5 9V15C5.5 17.2091 7.29086 19 9.5 19H15.5C17.7091 19 19.5 17.2091 19.5 15V9C19.5 6.79086 17.7091 5 15.5 5Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 15C10.8431 15 9.5 13.6569 9.5 12C9.5 10.3431 10.8431 9 12.5 9C14.1569 9 15.5 10.3431 15.5 12C15.5 12.7956 15.1839 13.5587 14.6213 14.1213C14.0587 14.6839 13.2956 15 12.5 15Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><rect x="15.5" y="9" width="2" height="2" rx="1" transform="rotate(-90 15.5 9)" fill="#ffffff"/><rect x="16" y="8.5" width="1" height="1" rx="0.5" transform="rotate(-90 16 8.5)" stroke="#000000" stroke-linecap="round"/></svg>
                                <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full -z-1'></div>
                            </a>
                            <a href="https://www.linkedin.com/in/محمد-منتظمی-8106a544a?utm_source=share_via&utm_content=profile&utm_medium=member_android" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-black)]'>
                                <svg class='w-7 fill-[var(--color-white)]' viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.5 8C7.32843 8 8 7.32843 8 6.5C8 5.67157 7.32843 5 6.5 5C5.67157 5 5 5.67157 5 6.5C5 7.32843 5.67157 8 6.5 8Z"/><path d="M5 10C5 9.44772 5.44772 9 6 9H7C7.55228 9 8 9.44771 8 10V18C8 18.5523 7.55228 19 7 19H6C5.44772 19 5 18.5523 5 18V10Z" /><path d="M11 19H12C12.5523 19 13 18.5523 13 18V13.5C13 12 16 11 16 13V18.0004C16 18.5527 16.4477 19 17 19H18C18.5523 19 19 18.5523 19 18V12C19 10 17.5 9 15.5 9C13.5 9 13 10.5 13 10.5V10C13 9.44771 12.5523 9 12 9H11C10.4477 9 10 9.44772 10 10V18C10 18.5523 10.4477 19 11 19Z" /></svg>
                                <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full -z-1'></div>
                            </a>
                            <a href="https://t.me/montazami_dev" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-black)]'>
                                <svg class='w-7 fill-[var(--color-white)]' viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M 26.070313 3.996094 C 25.734375 4.011719 25.417969 4.109375 25.136719 4.21875 L 25.132813 4.21875 C 24.847656 4.332031 23.492188 4.902344 21.433594 5.765625 C 19.375 6.632813 16.703125 7.757813 14.050781 8.875 C 8.753906 11.105469 3.546875 13.300781 3.546875 13.300781 L 3.609375 13.277344 C 3.609375 13.277344 3.25 13.394531 2.875 13.652344 C 2.683594 13.777344 2.472656 13.949219 2.289063 14.21875 C 2.105469 14.488281 1.957031 14.902344 2.011719 15.328125 C 2.101563 16.050781 2.570313 16.484375 2.90625 16.722656 C 3.246094 16.964844 3.570313 17.078125 3.570313 17.078125 L 3.578125 17.078125 L 8.460938 18.722656 C 8.679688 19.425781 9.949219 23.597656 10.253906 24.558594 C 10.433594 25.132813 10.609375 25.492188 10.828125 25.765625 C 10.933594 25.90625 11.058594 26.023438 11.207031 26.117188 C 11.265625 26.152344 11.328125 26.179688 11.390625 26.203125 C 11.410156 26.214844 11.429688 26.21875 11.453125 26.222656 L 11.402344 26.210938 C 11.417969 26.214844 11.429688 26.226563 11.441406 26.230469 C 11.480469 26.242188 11.507813 26.246094 11.558594 26.253906 C 12.332031 26.488281 12.953125 26.007813 12.953125 26.007813 L 12.988281 25.980469 L 15.871094 23.355469 L 20.703125 27.0625 L 20.8125 27.109375 C 21.820313 27.550781 22.839844 27.304688 23.378906 26.871094 C 23.921875 26.433594 24.132813 25.875 24.132813 25.875 L 24.167969 25.785156 L 27.902344 6.65625 C 28.007813 6.183594 28.035156 5.742188 27.917969 5.3125 C 27.800781 4.882813 27.5 4.480469 27.136719 4.265625 C 26.769531 4.046875 26.40625 3.980469 26.070313 3.996094 Z M 25.96875 6.046875 C 25.964844 6.109375 25.976563 6.101563 25.949219 6.222656 L 25.949219 6.234375 L 22.25 25.164063 C 22.234375 25.191406 22.207031 25.25 22.132813 25.308594 C 22.054688 25.371094 21.992188 25.410156 21.667969 25.28125 L 15.757813 20.75 L 12.1875 24.003906 L 12.9375 19.214844 C 12.9375 19.214844 22.195313 10.585938 22.59375 10.214844 C 22.992188 9.84375 22.859375 9.765625 22.859375 9.765625 C 22.886719 9.3125 22.257813 9.632813 22.257813 9.632813 L 10.082031 17.175781 L 10.078125 17.15625 L 4.242188 15.191406 L 4.242188 15.1875 C 4.238281 15.1875 4.230469 15.183594 4.226563 15.183594 C 4.230469 15.183594 4.257813 15.171875 4.257813 15.171875 L 4.289063 15.15625 L 4.320313 15.144531 C 4.320313 15.144531 9.53125 12.949219 14.828125 10.71875 C 17.480469 9.601563 20.152344 8.476563 22.207031 7.609375 C 24.261719 6.746094 25.78125 6.113281 25.867188 6.078125 C 25.949219 6.046875 25.910156 6.046875 25.96875 6.046875 Z"/></svg>
                                <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full -z-1'></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            

            <div class='lg:hidden flex md:flex-row flex-col md:gap-10 gap-4'>

                <div class='w-full md:w-1/2 flex flex-col gap-4'>
                    <div class="text-start items-center justify-center">                        
                        <div class="typewriter-box sm:text-4xl text-2xl font-bold">
                            <span id="" class='typewriter-text text-[var(--color-primary-3rd)]'></span>
                            <span class="cursor "></span>
                        </div>
                    </div>
                    <h1 class='text-[var(--color-white)] font-bold md:text-[7vw] text-4xl'> محمد منتظمی </h1>
                    <p class=' text-[var(--color-body)] leading-loose'> 
                    برنامه‌نویس بک‌اند با بیش از ۳ سال تجربه در توسعه وب. 
                        اهل آذربایجان شرقی هستم و عاشق کدنویسی و حل چالش‌های پیچیده. 
                        در تیم‌های حرفه‌ای کار می‌کنم و به دنبال خلق راهکارهای نوآورانه و کارآمد هستم. 
                        تخصص من در زمینه‌های Laravel، PHP  است . 
                        همیشه به یادگیری و به‌روزرسانی مهارت‌هایم پایبند هستم و از همکاری با تیم‌های خلاق لذت می‌برم.
                    </p>
                    <div class='group relative w-55 bg-[var(--color-primary-3rd)] flex items-center text-center justify-center lg:py-5 py-3 px-4 rounded-full cursor-pointer'>
                        <svg class='absolute right-0 w-4 fill-[var(--color-white)] duration-500 group-hover:-translate-x-5 group-hover:opacity-100 opacity-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z"/></svg>
                        <span class='tetext-sm text-[var(--color-white)] transition-all duration-400 translate-x-2 group-hover:-translate-x-5'>مشاهده نمونه کارها</span>
                        <svg class='absolute left-2 w-4 fill-[var(--color-white)] transition-all duration-200 group-hover:-translate-x-4 group-hover:opacity-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z"/></svg>
                    </div> 
                </div>
                <div class='w-full md:w-1/2 flex flex-col justify-center items-center gap-10'>
                    
                    <div class='hidden md:flex gap-3 text-center items-center md:mt-20'>
                        <span class='text-8xl font-bold text-[var(--color-white)] text-center flex items-center gap-2'> 3 <span class='text-5xl'>+</span> </span>
                        <span class='text-2xl font-bold text-[var(--color-white)]'> سال <br> تجربه </span>
                    </div>
                    <div class=' flex flex-col gap-4 mt-6 '>
                        <span class='font-bold text-base text-[var(--color-white)]'>منو در شبکه های اجتماعی دنبال کنید</span>
                        <div class='flex gap-3 items-center justify-center'>
                            <a href="https://github.com/montazami-dev" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-black)]'>
                                <svg class='w-6 fill-[var(--color-white)]' viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>github [#142]</title><desc>Created with Sketch.</desc><defs></defs><g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd"><g id="Dribbble-Light-Preview" transform="translate(-140.000000, -7559.000000)"><g id="icons" transform="translate(56.000000, 160.000000)"><path d="M94,7399 C99.523,7399 104,7403.59 104,7409.253 C104,7413.782 101.138,7417.624 97.167,7418.981 C96.66,7419.082 96.48,7418.762 96.48,7418.489 C96.48,7418.151 96.492,7417.047 96.492,7415.675 C96.492,7414.719 96.172,7414.095 95.813,7413.777 C98.04,7413.523 100.38,7412.656 100.38,7408.718 C100.38,7407.598 99.992,7406.684 99.35,7405.966 C99.454,7405.707 99.797,7404.664 99.252,7403.252 C99.252,7403.252 98.414,7402.977 96.505,7404.303 C95.706,7404.076 94.85,7403.962 94,7403.958 C93.15,7403.962 92.295,7404.076 91.497,7404.303 C89.586,7402.977 88.746,7403.252 88.746,7403.252 C88.203,7404.664 88.546,7405.707 88.649,7405.966 C88.01,7406.684 87.619,7407.598 87.619,7408.718 C87.619,7412.646 89.954,7413.526 92.175,7413.785 C91.889,7414.041 91.63,7414.493 91.54,7415.156 C90.97,7415.418 89.522,7415.871 88.63,7414.304 C88.63,7414.304 88.101,7413.319 87.097,7413.247 C87.097,7413.247 86.122,7413.234 87.029,7413.87 C87.029,7413.87 87.684,7414.185 88.139,7415.37 C88.139,7415.37 88.726,7417.2 91.508,7416.58 C91.513,7417.437 91.522,7418.245 91.522,7418.489 C91.522,7418.76 91.338,7419.077 90.839,7418.982 C86.865,7417.627 84,7413.783 84,7409.253 C84,7403.59 88.478,7399 94,7399" id="github-[#142]"></path></g></g></g></svg>
                                <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full -z-1'></div>
                            </a>
                            <a href="https://instagram.com/montazami_dev" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-black)]'>
                                <svg class='w-10 fill-[var(--color-white)]' viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M15.5 5H9.5C7.29086 5 5.5 6.79086 5.5 9V15C5.5 17.2091 7.29086 19 9.5 19H15.5C17.7091 19 19.5 17.2091 19.5 15V9C19.5 6.79086 17.7091 5 15.5 5Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 15C10.8431 15 9.5 13.6569 9.5 12C9.5 10.3431 10.8431 9 12.5 9C14.1569 9 15.5 10.3431 15.5 12C15.5 12.7956 15.1839 13.5587 14.6213 14.1213C14.0587 14.6839 13.2956 15 12.5 15Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><rect x="15.5" y="9" width="2" height="2" rx="1" transform="rotate(-90 15.5 9)" fill="#ffffff"/><rect x="16" y="8.5" width="1" height="1" rx="0.5" transform="rotate(-90 16 8.5)" stroke="#000000" stroke-linecap="round"/></svg>
                                <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full -z-1'></div>
                            </a>
                            <a href="https://www.linkedin.com/in/محمد-منتظمی-8106a544a?utm_source=share_via&utm_content=profile&utm_medium=member_android" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-black)]'>
                                <svg class='w-7 fill-[var(--color-white)]' viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.5 8C7.32843 8 8 7.32843 8 6.5C8 5.67157 7.32843 5 6.5 5C5.67157 5 5 5.67157 5 6.5C5 7.32843 5.67157 8 6.5 8Z"/><path d="M5 10C5 9.44772 5.44772 9 6 9H7C7.55228 9 8 9.44771 8 10V18C8 18.5523 7.55228 19 7 19H6C5.44772 19 5 18.5523 5 18V10Z" /><path d="M11 19H12C12.5523 19 13 18.5523 13 18V13.5C13 12 16 11 16 13V18.0004C16 18.5527 16.4477 19 17 19H18C18.5523 19 19 18.5523 19 18V12C19 10 17.5 9 15.5 9C13.5 9 13 10.5 13 10.5V10C13 9.44771 12.5523 9 12 9H11C10.4477 9 10 9.44772 10 10V18C10 18.5523 10.4477 19 11 19Z" /></svg>
                                <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full -z-1'></div>
                            </a>
                            <a href="https://t.me/montazami_dev" class='relative group rounded-full size-10 flex justify-center items-center overflow-hidden cursor-pointer bg-[var(--color-black)]'>
                                <svg class='w-7 fill-[var(--color-white)]' viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M 26.070313 3.996094 C 25.734375 4.011719 25.417969 4.109375 25.136719 4.21875 L 25.132813 4.21875 C 24.847656 4.332031 23.492188 4.902344 21.433594 5.765625 C 19.375 6.632813 16.703125 7.757813 14.050781 8.875 C 8.753906 11.105469 3.546875 13.300781 3.546875 13.300781 L 3.609375 13.277344 C 3.609375 13.277344 3.25 13.394531 2.875 13.652344 C 2.683594 13.777344 2.472656 13.949219 2.289063 14.21875 C 2.105469 14.488281 1.957031 14.902344 2.011719 15.328125 C 2.101563 16.050781 2.570313 16.484375 2.90625 16.722656 C 3.246094 16.964844 3.570313 17.078125 3.570313 17.078125 L 3.578125 17.078125 L 8.460938 18.722656 C 8.679688 19.425781 9.949219 23.597656 10.253906 24.558594 C 10.433594 25.132813 10.609375 25.492188 10.828125 25.765625 C 10.933594 25.90625 11.058594 26.023438 11.207031 26.117188 C 11.265625 26.152344 11.328125 26.179688 11.390625 26.203125 C 11.410156 26.214844 11.429688 26.21875 11.453125 26.222656 L 11.402344 26.210938 C 11.417969 26.214844 11.429688 26.226563 11.441406 26.230469 C 11.480469 26.242188 11.507813 26.246094 11.558594 26.253906 C 12.332031 26.488281 12.953125 26.007813 12.953125 26.007813 L 12.988281 25.980469 L 15.871094 23.355469 L 20.703125 27.0625 L 20.8125 27.109375 C 21.820313 27.550781 22.839844 27.304688 23.378906 26.871094 C 23.921875 26.433594 24.132813 25.875 24.132813 25.875 L 24.167969 25.785156 L 27.902344 6.65625 C 28.007813 6.183594 28.035156 5.742188 27.917969 5.3125 C 27.800781 4.882813 27.5 4.480469 27.136719 4.265625 C 26.769531 4.046875 26.40625 3.980469 26.070313 3.996094 Z M 25.96875 6.046875 C 25.964844 6.109375 25.976563 6.101563 25.949219 6.222656 L 25.949219 6.234375 L 22.25 25.164063 C 22.234375 25.191406 22.207031 25.25 22.132813 25.308594 C 22.054688 25.371094 21.992188 25.410156 21.667969 25.28125 L 15.757813 20.75 L 12.1875 24.003906 L 12.9375 19.214844 C 12.9375 19.214844 22.195313 10.585938 22.59375 10.214844 C 22.992188 9.84375 22.859375 9.765625 22.859375 9.765625 C 22.886719 9.3125 22.257813 9.632813 22.257813 9.632813 L 10.082031 17.175781 L 10.078125 17.15625 L 4.242188 15.191406 L 4.242188 15.1875 C 4.238281 15.1875 4.230469 15.183594 4.226563 15.183594 C 4.230469 15.183594 4.257813 15.171875 4.257813 15.171875 L 4.289063 15.15625 L 4.320313 15.144531 C 4.320313 15.144531 9.53125 12.949219 14.828125 10.71875 C 17.480469 9.601563 20.152344 8.476563 22.207031 7.609375 C 24.261719 6.746094 25.78125 6.113281 25.867188 6.078125 C 25.949219 6.046875 25.910156 6.046875 25.96875 6.046875 Z"/></svg>
                                <div class='absolute w-full h-full bg-[var(--color-primary-3rd)] top-0 bottom-0 right-0 left-0 scale-0 group-hover:scale-100 duration-300 transition-all rounded-full -z-1'></div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
            

    </main>




    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script>

        let elements = document.querySelectorAll('.typewriter-text');
        elements.forEach((element, index) => {
            new Typewriter(element, {
                strings: [
                    'برنامه نویس',
                    'طراحی وب حرفه‌ای',
                    'مشاوره کسب و کار',
                ],
                autoStart: true,
                loop: true,
                delay: 75,
                deleteSpeed: 40,
                pauseFor: 2000,
                cursor: '',
                startDelay: index * 500
            });
        });
        // new Typewriter('#typewriter-text', {
        //     strings: [
        //         'برنامه نویس',
        //         'طراحی وب حرفه‌ای',
        //         'مشاوره کسب و کار',
        //     ],
        //     autoStart: true,
        //     loop: true,
        //     delay: 75,          // سرعت تایپ
        //     deleteSpeed: 40,    // سرعت پاک کردن
        //     pauseFor: 2000,     // مکث بین متن‌ها (میلی‌ثانیه)
        //     cursor: ''          // کرسر رو خودمون ساختیم
        // });


</script>



<!-- ====== جاوااسکریپت منو ====== -->
<script>
function burger_menu_function(action) {
    const menu = document.getElementById('mobileMenu');
    const body = document.body;
    
    if (action === 'open') {
        menu.classList.remove('-translate-x-full');
        menu.classList.add('translate-x-0');
        body.style.overflow = 'hidden';
    } else if (action === 'close') {
        menu.classList.remove('translate-x-0');
        menu.classList.add('-translate-x-full');
        body.style.overflow = 'auto';
    }
}

// بستن منو با کلیک روی لینک‌ها (برای اطمینان)
document.addEventListener('DOMContentLoaded', function() {
    const menuLinks = document.querySelectorAll('#mobileMenu a');
    menuLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (window.innerWidth < 1024) {
                burger_menu_function('close');
            }
        });
    });
});
</script>




 