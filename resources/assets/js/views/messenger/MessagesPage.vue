<template>
    <div class="chat-header flex justify-between items-center w-auto px-4 py-1.5 bg-white border-b border-grey-lighter ">
        <div class="header-contact flex p-2">
            <span class="contact__avatar w-8 h-8 flex-no-shrink mr-2 bg-green bg-center bg-no-repeat bg-cover rounded-full" style="background-image: url(https://images.unsplash.com/photo-1488426862026-3ee34a7d66df?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=d5849d81af587a09dbcf3f11f6fa122f);"></span>
            <div class="contact__content w-full text-sm">
                <div class="contact__name flex justify-between w-full text-black leading-none font-semibold">
                    Theresita Swann
                </div>
                <p class="contact__message text-grey-dark">
                    last seen recently
                </p>
            </div>
        </div>
        <div class="header-actions flex items-center">
            <svg class="block w-4 h-4 text-blue fill-current cursor-pointer" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="icon-shape"> <path d="M11.1735916,16.8264084 C7.57463481,15.3079672 4.69203285,12.4253652 3.17359164,8.82640836 L5.29408795,6.70591205 C5.68612671,6.31387329 6,5.55641359 6,5.00922203 L6,0.990777969 C6,0.45097518 5.55237094,3.33066907e-16 5.00019251,3.33066907e-16 L1.65110039,3.33066907e-16 L1.00214643,8.96910337e-16 C0.448676237,1.13735153e-15 -1.05725384e-09,0.445916468 -7.33736e-10,1.00108627 C-7.33736e-10,1.00108627 -3.44283713e-14,1.97634814 -3.44283713e-14,3 C-3.44283713e-14,12.3888407 7.61115925,20 17,20 C18.0236519,20 18.9989137,20 18.9989137,20 C19.5517984,20 20,19.5565264 20,18.9978536 L20,18.3488996 L20,14.9998075 C20,14.4476291 19.5490248,14 19.009222,14 L14.990778,14 C14.4435864,14 13.6861267,14.3138733 13.2940879,14.7059121 L11.1735916,16.8264084 Z" id="Combined-Shape"></path> </g> </g> </svg>
            <svg class="block w-4 h-4 ml-6 text-blue fill-current cursor-pointer" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="icon-shape"> <path d="M12.9056439,14.3198574 C11.5509601,15.3729184 9.84871145,16 8,16 C3.581722,16 0,12.418278 0,8 C0,3.581722 3.581722,0 8,0 C12.418278,0 16,3.581722 16,8 C16,9.84871145 15.3729184,11.5509601 14.3198574,12.9056439 L19.6568542,18.2426407 L18.2426407,19.6568542 L12.9056439,14.3198574 Z M8,14 C11.3137085,14 14,11.3137085 14,8 C14,4.6862915 11.3137085,2 8,2 C4.6862915,2 2,4.6862915 2,8 C2,11.3137085 4.6862915,14 8,14 Z" id="Combined-Shape"></path> </g> </g> </svg>
            <svg class="block w-6 h-6 ml-6 text-blue fill-current cursor-pointer" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="icon-shape"> <path d="M4,12 C5.1045695,12 6,11.1045695 6,10 C6,8.8954305 5.1045695,8 4,8 C2.8954305,8 2,8.8954305 2,10 C2,11.1045695 2.8954305,12 4,12 Z M10,12 C11.1045695,12 12,11.1045695 12,10 C12,8.8954305 11.1045695,8 10,8 C8.8954305,8 8,8.8954305 8,10 C8,11.1045695 8.8954305,12 10,12 Z M16,12 C17.1045695,12 18,11.1045695 18,10 C18,8.8954305 17.1045695,8 16,8 C14.8954305,8 14,8.8954305 14,10 C14,11.1045695 14.8954305,12 16,12 Z" id="Combined-Shape"></path> </g> </g> </svg>
        </div>
    </div>
    <div class="chat-messages h-[calc(100%-8.55rem)]">
        <div class="contact message flex px-4 py-2">
            <span class="contact__avatar w-8 h-8 ml-2 flex flex-no-shrink justify-center items-center bg-purple bg-center bg-no-repeat bg-cover text-sm text-white font-semibold uppercase text-center rounded-full" style="">EJ</span>
            <div class="contact__content w-full pl-2 text-sm">
                <div class="contact__name flex justify-between w-full font-medium text-blue leading-none">
                    EJ
                    <span class="text-xs font-normal text-grey-darker">
                <svg class="inline-block w-3 w-3 text-blue fill-current" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="icon-shape"> <polygon id="Path-126" points="0 11 2 9 7 14 18 3 20 5 7 18"></polygon> </g> </g> </svg>
                <svg class="inline-block w-3 w-3 text-blue fill-current -ml-2 mr-1" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="icon-shape"> <polygon id="Path-126" points="0 11 2 9 7 14 18 3 20 5 7 18"></polygon> </g> </g> </svg>
                14:23
              </span>
                </div>
                <p class="contact__message text-grey-darkest">
                    Those are beautiful!
                </p>
            </div>
        </div>

        <div class="contact message flex px-4 py-2">
            <span class="contact__avatar w-8 h-8 ml-2 flex flex-no-shrink justify-center items-center bg-green bg-center bg-no-repeat bg-cover text-xl text-white font-semibold uppercase text-center rounded-full" style="background-image: url(https://images.unsplash.com/photo-1488426862026-3ee34a7d66df?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=d5849d81af587a09dbcf3f11f6fa122f);"></span>
            <div class="contact__content w-full pl-2 text-sm">
                <div class="contact__name flex justify-between w-full font-medium text-blue leading-none">
                    Theresita Swann
                    <span class="text-xs font-normal text-grey-darker">
                15:35</span>
                </div>
                <p class="contact__message pr-10 text-grey-darkest">
                    Have you seen Sjabloon? It's a Ruby on Rails application template that helps with all the mundane stuff you have to for every web app.
                </p>
            </div>
        </div>

        <div class="contact message flex px-4 py-2">
            <span class="contact__avatar w-8 h-8 ml-2 flex flex-no-shrink justify-center items-center bg-purple bg-center bg-no-repeat bg-cover text-sm text-white font-semibold uppercase text-center rounded-full" style="">EJ</span>
            <div class="contact__content w-full pl-2 text-sm">
                <div class="contact__name flex justify-between w-full font-medium text-blue leading-none">
                    EJ
                    <span class="text-xs font-normal text-grey-darker">
                <svg class="inline-block w-3 w-3 text-blue fill-current" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="icon-shape"> <polygon id="Path-126" points="0 11 2 9 7 14 18 3 20 5 7 18"></polygon> </g> </g> </svg>
                <svg class="inline-block w-3 w-3 text-blue fill-current -ml-2 mr-1" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="icon-shape"> <polygon id="Path-126" points="0 11 2 9 7 14 18 3 20 5 7 18"></polygon> </g> </g> </svg>
                14:23
              </span>
                </div>
                <p class="contact__message text-grey-darkest">
                    No, I haven't.
                </p>
            </div>
        </div>

        <div class="messages-divider py-1 px-2 bg-grey-lighter text-xs leading-none text-grey-dark text-center">Unread messages</div>

        <div class="contact message flex px-4 py-2">
            <span class="contact__avatar w-8 h-8 ml-2 flex flex-no-shrink justify-center items-center bg-green bg-center bg-no-repeat bg-cover text-xl text-white font-semibold uppercase text-center rounded-full" style="background-image: url(https://images.unsplash.com/photo-1488426862026-3ee34a7d66df?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=d5849d81af587a09dbcf3f11f6fa122f);"></span>
            <div class="contact__content w-full pl-2 text-sm">
                <div class="contact__name flex justify-between w-full font-medium text-blue leading-none">
                    Theresita Swann
                    <span class="text-xs font-normal text-grey-darker">
                15:35
              </span>
                </div>
                <p class="contact__message text-grey-darkest">
                    Check it @ <a href="https://www.getsjabloon.com" class="" target="_blank">https://www.getsjabloon.com</a> ❤️❤️❤️
                </p>
                <blockquote class="message-unfurl pl-2 border-l-2 border-blue">
                    <p>Sjabloon. Flying start for Ruby on Rails makers.</p>
                </blockquote>
            </div>
        </div>

        <div class="contact message flex px-4 py-2">
            <span class="contact__avatar w-8 h-8 ml-2 flex flex-no-shrink justify-center items-center bg-green bg-center bg-no-repeat bg-cover text-xl text-white font-semibold uppercase text-center rounded-full" style="background-image: url(https://images.unsplash.com/photo-1488426862026-3ee34a7d66df?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=d5849d81af587a09dbcf3f11f6fa122f);"></span>
            <div class="contact__content w-full pl-2 text-sm">
                <div class="contact__name flex justify-between w-full font-medium text-blue leading-none">
                    Theresita Swann
                    <span class="text-xs font-normal text-grey-darker">
                15:35
              </span>
                </div>
                <p class="contact__message pr-10 text-grey-darkest">
                    It does a lot of setup and config for you, like modern front end, authentication with Devise, transactional email template design and many UI components built with Tailwind CSS.
                </p>
            </div>
        </div>
    </div>






    <div class="new-message absolute pin-b flex w-full py-4 bg-white border-t border-grey-lighter">
        <svg class="block w-6 h-6 ml-6 text-grey fill-current cursor-pointer" style="transform: rotate(-45deg)" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="icon-shape"> <path d="M15,3 L7,3 C3.13400675,3 0,6.13400675 0,10 C0,13.8659932 3.13400675,17 7,17 L15,17 L15,15 L9.44949137,15 L7,15 C4.23857625,15 2,12.7614237 2,10 C2,7.23857625 4.23857625,5 7,5 L9.44949137,5 L12.9998169,5 L15,5 C16.6568542,5 18,6.34314575 18,8 C18,9.65685425 16.6568542,11 15,11 L12.9998169,11 L8.41464715,11 L7,11 C6.44771525,11 6,10.5522847 6,10 C6,9.44771525 6.44771525,9 7,9 L8.41464715,9 L15,9 L15,7 L7,7 C5.34314575,7 4,8.34314575 4,10 C4,11.6568542 5.34314575,13 7,13 L15,13 C17.7614237,13 20,10.7614237 20,8 C20,5.23857625 17.7614237,3 15,3 Z" id="Combined-Shape"></path> </g> </g> </svg>
        <textarea rows="1" class="flex flex-grow flex-no-shrink ml-6 text-sm leading-none outline-none" placeholder="Write a message…"></textarea>
        <svg class="block w-6 h-6 ml-6 text-grey fill-current cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zM6.5 9a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm7 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm2.16 3a6 6 0 0 1-11.32 0h11.32z"></path></svg>
        <svg class="block w-6 h-6 ml-6 mr-6 text-grey fill-current cursor-pointer" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="icon-shape"> <path d="M9,18 L9,16.9379599 C5.05368842,16.4447356 2,13.0713165 2,9 L4,9 L4,9.00181488 C4,12.3172241 6.6862915,15 10,15 C13.3069658,15 16,12.314521 16,9.00181488 L16,9 L18,9 C18,13.0790094 14.9395595,16.4450043 11,16.9378859 L11,18 L14,18 L14,20 L6,20 L6,18 L9,18 L9,18 Z M6,4.00650452 C6,1.79377317 7.79535615,0 10,0 C12.209139,0 14,1.79394555 14,4.00650452 L14,8.99349548 C14,11.2062268 12.2046438,13 10,13 C7.790861,13 6,11.2060545 6,8.99349548 L6,4.00650452 L6,4.00650452 Z" id="Combined-Shape"></path> </g> </g> </svg>
    </div>
</template>

<script>
export default {
    name: "HomePage"
}
</script>
