const $auth = {
    getToken: function() {
        let token = null,
            tokenParams = localStorage.getItem('auth');
        if (typeof tokenParams === 'string') {
            tokenParams = JSON.parse(tokenParams);
            let rememberMe = tokenParams.remember_me,
                expireTime = parseInt(tokenParams.expires_in);
            if (rememberMe || Date.now() > expireTime) {
                token = tokenParams.access_token;
            }
        }
        return token;
    },
    setToken: function(data) {
        // Calc access token expire timestamp
        let expireTime = parseInt(data.expires_in);
        expireTime = Date.now() + expireTime + 1000;
        // Save access token params
        localStorage.setItem('auth', JSON.stringify({
            expires_in: expireTime,
            token_type: data.token_type,
            remember_me: data.remember_me,
            access_token: data.access_token
        }));
    },
};

export default $auth;
