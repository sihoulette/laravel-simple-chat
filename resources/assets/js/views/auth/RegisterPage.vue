<template>
    <div class="container mx-auto px-4 h-full">
        <div class="flex content-center items-center justify-center h-screen">
            <div class="w-full lg:w-4/12 px-4">
                <div
                    class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0"
                >
                    <div class="flex-auto px-4 lg:px-10 py-10">
                        <form id="register" @submit.prevent="submitRegister">
                            <div class="relative w-full mb-3">
                                <label
                                    for="name"
                                    class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                >
                                    Name
                                </label>
                                <input
                                    id="name" type="text" name="name" v-model="form.name" placeholder="Name"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    :class="{ 'is-invalid': form.errors.has('name') }"
                                    @change="cleanError('name')"
                                />
                                <small v-if="form.errors.has('name')" class="text-red-400">
                                    {{ form.errors.get('name') }}
                                </small>
                            </div>

                            <div class="relative w-full mb-3">
                                <label
                                    for="email"
                                    class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                >
                                    Email
                                </label>
                                <input
                                    id="email" type="email" name="email" v-model="form.email" placeholder="Email"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    :class="{ 'is-invalid': form.errors.has('email') }"
                                    @change="cleanError('email')"
                                />
                                <small v-if="form.errors.has('email')" class="text-red-400">
                                    {{ form.errors.get('email') }}
                                </small>
                            </div>

                            <div class="relative w-full mb-3">
                                <label
                                    for="password"
                                    class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                >
                                    Password
                                </label>
                                <input
                                    id="password" type="password" name="password" v-model="form.password"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    placeholder="Password"
                                    @change="cleanError('password')"
                                />
                                <small v-if="form.errors.has('password')" class="text-red-400">
                                    {{ form.errors.get('password') }}
                                </small>
                            </div>

                            <div class="relative w-full mb-3">
                                <label
                                    for="password_confirmation"
                                    class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                >
                                    Confirm password
                                </label>
                                <input
                                    id="password_confirmation" type="password" name="password_confirmation"
                                    v-model="form.password_confirmation"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    placeholder="Password"
                                    @change="cleanError('password_confirmation')"
                                />
                                <small v-if="form.errors.has('password_confirmation')" class="text-red-400">
                                    {{ form.errors.get('password_confirmation') }}
                                </small>
                            </div>

                            <div>
                                <label class="inline-flex items-center cursor-pointer">
                                    <input
                                        id="customCheckLogin" type="checkbox" name="accept_rules" v-model="form.accept_rules"
                                        class="form-checkbox border-0 rounded text-blueGray-700 ml-1 w-5 h-5 ease-linear transition-all duration-150"
                                        @change="cleanError('accept_rules')"
                                    />
                                    <span class="ml-2 text-sm font-semibold text-blueGray-600">
                                        I agree with the
                                        <a href="javascript:void(0)" class="text-emerald-500">
                                            Privacy Policy
                                        </a>
                                    </span>
                                </label>
                                <small v-if="form.errors.has('accept_rules')" class="block w-full text-red-400">
                                    {{ form.errors.get('accept_rules') }}
                                </small>
                            </div>

                            <div class="text-center mt-6">
                                <button
                                    type="submit" form="register"
                                    class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                                >
                                    Create Account
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="flex flex-wrap mt-6 relative">
                    <div class="w-full text-center">
                        <router-link to="/login" class="text-blueGray-200">
                            <small>Already registered?</small>
                        </router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Form } from 'vform';

export default {
    name: "page-register",
    data() {
        return {
            form: new Form({
                name: '',
                email: '',
                password: '',
                password_confirmation: '',
                accept_rules: '',
                _method: 'PUT'
            })
        }
    },
    methods: {
        cleanError(name) {
            if (this.form.errors.has(name)) {
                this.form.errors.clear(name);
            }
        },
        submitRegister() {
            const that = this;
            that.form.post('/api/auth/register').then((resp) => {
                that.form.reset();
                if (typeof resp.data.success === 'boolean' && resp.data.success) {
                    that.$auth().login(resp.data.token, resp.data.user);

                    return that.$router.push({name: 'HomePage'});
                }

                return that.$router.push({name: 'LoginPage'});
            }, (err) => {
                if (typeof err.response.data.errors === 'object') {
                    that.form.errors.set(err.response.data.errors);
                }
            });
        },
    }
};
</script>
