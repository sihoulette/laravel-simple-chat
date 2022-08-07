import auth from "../helpers/auth";

export default {
    mixins: [{
        name: "auth",
        methods: {
            $auth: () => auth
        }
    }]
}
