import axios from "axios";
import auth from "./auth";
import router from "../router";

const apiConfig = {withCredentials: true};
const $api = axios.create(apiConfig);

// Start request to backend
$api.interceptors.request.use(config => {
    let authToken = auth.getToken();
    if (typeof authToken === 'string') {
        config.headers.Authorization = `Bearer ${authToken}`;
    }

    return config;
}, error => {
    // Frontend begin request error
    console.log(error);
});

// End request, response from backend
$api.interceptors.response.use(config => {
    let authToken = auth.getToken();
    if (typeof authToken === 'string') {
        config.headers.Authorization = `Bearer ${authToken}`;
    }

    return config;
}, error => {
    // Backend response error
    if (error.response.status === 401) {
        if (error.response.data.message) {
            let refreshToken = auth.getToken();
            if (typeof refreshToken === 'string') {
                // Refresh auth token
                return axios.post('api/auth/refresh', {}, {
                    headers: {
                        Authorization: `Bearer ${refreshToken}`
                    }
                }).then(resp => {
                    if (typeof resp.data === 'object') {
                        auth.setToken(resp.data);
                        // Refresh request with new auth token
                        error.config.headers.Authorization = `Bearer ${resp.data.access_token}`;

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
