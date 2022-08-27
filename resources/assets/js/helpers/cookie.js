export default {
    getDomain: () => {
        return window.location.hostname;
    },
    getExpiresDate: (seconds) => {
        let expiresDate = null;
        /** @var data.token.expires_in */
        if (typeof seconds === 'number') {
            seconds = Date.now() + (seconds * 1000);
            expiresDate = new Date(seconds);
        }

        return expiresDate;
    }
};
