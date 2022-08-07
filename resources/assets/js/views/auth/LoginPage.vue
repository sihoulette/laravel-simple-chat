<template>
    <div class="container mx-auto px-4 h-full">
        <div class="flex content-center items-center justify-center h-screen">
            <div class="w-full lg:w-4/12 px-4">
                <div
                    class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0"
                >
                    <div class="flex-auto px-4 lg:px-10 py-10">
                        <form id="login" @submit.prevent="submitLogin">
                            <div class="relative w-full mb-3">
                                <label
                                    for="email"
                                    class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                >
                                    Email
                                </label>
                                <input
                                    id="email" type="email" name="email" v-model="form.email" placeholder="Email"
                                    class="border-0 px-3 py-3 placeholder-slate-300 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    @change="cleanError('email')"
                                />
                                <small v-if="form.errors.has('email')" class="text-red-400">
                                    {{ form.errors.get('email') }}
                                </small>
                            </div>

                            <div class="relative w-full mb-3">
                                <label
                                    for="password"
                                    class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                    @change="cleanError('password')"
                                >
                                    Password
                                </label>
                                <input
                                    id="password" type="password" name="password" v-model="form.password"
                                    placeholder="Password"
                                    class="border-0 px-3 py-3 placeholder-slate-300 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                />
                                <small v-if="form.errors.has('password')" class="text-red-400">
                                    {{ form.errors.get('password') }}
                                </small>
                            </div>
                            <div>
                                <label class="inline-flex items-center cursor-pointer">
                                    <input
                                        id="customCheckLogin"
                                        type="checkbox" name="remember" v-model="form.remember"
                                        class="form-checkbox border-0 rounded text-slate-700 ml-1 w-5 h-5 ease-linear transition-all duration-150"
                                    />
                                    <span class="ml-2 text-sm font-semibold text-slate-600">
                                        Remember me
                                    </span>
                                </label>
                            </div>

                            <div class="text-center mt-6">
                                <button
                                    type="submit" form="login"
                                    class="bg-slate-800 text-white active:bg-slate-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                                >
                                    Sign In
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="flex flex-wrap mt-6 relative">
                    <div class="w-1/2">
                        <router-link to="/forgot" class="text-slate-200">
                            <small>Forgot password?</small>
                        </router-link>
                    </div>
                    <div class="w-1/2 text-right">
                        <router-link to="/register" class="text-slate-200">
                            <small>Create new account</small>
                        </router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Form } from "vform";

export default {
    name: "LoginPage",
    data() {
        return {
            form: new Form({
                email: '',
                password: '',
                remember: ''
            })
        }
    },
    methods: {
        cleanError(name) {
            if (this.form.errors.has(name)) {
                this.form.errors.clear(name);
            }
        },
        submitLogin() {
            const that = this;
            that.form.post('/api/auth/login').then((resp) => {
                that.form.reset();
                if (typeof resp.data.success === 'boolean' && resp.data.success) {
                    that.$auth().login(resp.data.token, resp.data.user);

                    return that.$router.push({name: 'HomePage'});
                }
            }, (err) => {
                if (typeof err.response.data.errors === 'object') {
                    that.form.errors.set(err.response.data.errors);
                }
            });
        },
    }
};
</script>
