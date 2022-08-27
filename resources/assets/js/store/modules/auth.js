import Cookies from 'js-cookie';
import CookiesHelper from './../../helpers/cookie';

const SAVE_TOKEN = "SAVE_TOKEN";
const LOGIN_USER = "LOGIN_USER";
const LOGOUT_USER = "LOGOUT_USER";

export default {
    namespaced: true,
    state: {
        user: null,
        token: null,
    },
    getters: {
        getUser: (state, getters) => {
            let user = null;
            if (getters.getIsLogged) {
                user = state["auth/user"];
                if (typeof user !== 'object') {
                    user = Cookies.get('user');
                    if (typeof user === 'string') {
                        user = JSON.parse(user);
                    }
                }
            }

            return user;
        },
        getToken: (state, getters) => {
            let token = null;
            if (getters.getIsLogged) {
                token = state["auth/token"];
                if (typeof token !== 'object') {
                    token = Cookies.get('token');
                    if (typeof token === 'string') {
                        token = JSON.parse(token);
                    }
                }
            }

            return token;
        },
        getIsLogged: () => {
            let isLogged = false,
                tokenData = Cookies.get('token');
            if (typeof tokenData === 'string') {
                tokenData = JSON.parse(tokenData);
                isLogged = tokenData.expires_in > Date.now();
            }

            return isLogged;
        },
    },
    mutations: {
        [SAVE_TOKEN] (state, data) {
            if (typeof data.token === 'object') {
                let expiresDate = CookiesHelper.getExpiresDate(data.token.expires_in);
                if (expiresDate instanceof Date) {
                    data.token.expires_in = expiresDate.getMilliseconds();
                }

                // Write Token Cookie
                Cookies.set('token', JSON.stringify(data.token), {
                    path: '',
                    domain: CookiesHelper.getDomain(),
                    sameSite: 'lax',
                    expires: expiresDate
                });

                // Set state
                state.pending = false;
                state["auth/token"] = data.token;
            }
        },
        [LOGIN_USER] (state, data) {
            if (typeof data.user === 'object') {
                let expiresDate = CookiesHelper.getExpiresDate(data.token.expires_in);

                // Write User Cookie
                Cookies.set('user', JSON.stringify(data.user), {
                    path: '',
                    domain: CookiesHelper.getDomain(),
                    sameSite: 'lax',
                    expires: expiresDate
                });

                // Set state
                state.pending = false;
                state["auth/user"] = data.user;
            }
        },
        [LOGOUT_USER] (state) {
            state["auth/user"] = null;
            state["auth/token"] = null;

            // Delete Cookies
            Cookies.remove('user', { path: '' });
            Cookies.remove('token', { path: '' });
        },
    },
    actions: {
        login({ commit }, data) {
            commit(SAVE_TOKEN, data);
            commit(LOGIN_USER, data);
        },
        refresh({ commit }, data) {
            commit(SAVE_TOKEN, data);
        },
        logout({ commit }) {
            commit(LOGOUT_USER);
        }
    }
};
