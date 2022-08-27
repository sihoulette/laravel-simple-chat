import axios from 'axios';

import store from './../store';
import router from "./../router";

import apiCfg from './../configs/api';

// Get user token data
const tokenData = store.getters["auth/getToken"];

// Create api instance
const $api = axios.create({ withCredentials: true });

// Start request to backend
$api.interceptors.request.use(config => {
    if (typeof tokenData === 'object') {
        /** @var tokenData.access_token {string} */
        config.headers.Authorization = `Bearer ${tokenData.access_token}`;
    }

    return config;
}, error => {
    // Frontend begin request error
    console.log(error);
});

// End request, response from backend
$api.interceptors.response.use(config => {
    if (typeof tokenData === 'object') {
        /** @var tokenData.access_token {string} */
        config.headers.Authorization = `Bearer ${tokenData.access_token}`;
    }

    return config;
}, error => {
    // Backend response error
    if (error.response.status === 401) {
        if (error.response.data.message) {
            /** @var tokenData.refresh_token {string} */
            if (typeof tokenData === 'object') {
                // Refresh auth token
                return axios.post(apiCfg.baseUrl + '/auth/refresh', {}, {
                    headers: {
                        Authorization: `Bearer ${tokenData.refresh_token}`
                    }
                }).then(resp => {
                    if (typeof resp.data === 'object') {
                        this.$store.dispatch('auth/refresh', {
                            token: resp.data.token
                        });
                        // Refresh request with new auth token
                        error.config.headers.Authorization = `Bearer ${resp.data.token.access_token}`;

                        return $api.request(error.config);
                    } else {
                        router.push({name: 'LoginPage'}).then(r => {});
                    }
                });
            } else {
                router.push({name: 'LoginPage'}).then(r => {});
            }
        } else {
            router.push({name: 'LoginPage'}).then(r => {});
        }
    }
});

export default $api;
