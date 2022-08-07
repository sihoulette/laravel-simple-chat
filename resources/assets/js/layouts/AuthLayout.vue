<template>
    <div>
        <main>
            <section class="absolute w-full h-full">
                <div
                    class="absolute top-0 w-full h-full bg-gray-900"
                    style="background-size: 100%; background-repeat: no-repeat;"
                    :style="{'background-image': 'url(' + authBg + ')'}"
                ></div>
            </section>
            <router-view />
        </main>
    </div>
</template>

<script>
import authBg from "../../img/auth_bg.png";

export default {
    name: "AuthLayout",
    data() {
        return {
            authBg,
        };
    }
};
</script>
