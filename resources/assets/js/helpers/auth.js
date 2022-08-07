const $auth = {
    /**
     * Login User with token
     *
     * @param token {string}
     * @param user {Object}
     */
    login: (token, user) => {
        window.localStorage.setItem('token', token);
        window.localStorage.setItem('user', JSON.stringify(user));
    },

    /**
     * Check user credentials
     *
     * @returns {boolean}
     */
    checkLogin: () => {
        const token = window.localStorage.getItem('token'),
            user = JSON.parse(window.localStorage.getItem('user'));

        return typeof token === 'string' && token.length > 0
            && typeof user === 'object' && user.length > 0;
    },

    /**
     * User Data Object
     *
     * @returns {{}|null}
     */
    getUser: () => {
        return JSON.parse(window.localStorage.getItem('user'));
    },

    /**
     * User Auth Token
     *
     * @returns {string|null}
     */
    getToken: () => {
        return window.localStorage.getItem('token');
    },

    /**
     * Logout User
     */
    logout: () => {
        window.localStorage.removeItem('token');
        window.localStorage.removeItem('user');
    }
};

export default $auth;
