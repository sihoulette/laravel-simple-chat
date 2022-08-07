import api from "../helpers/api";

export default {
    mixins: [{
        name: "auth",
        methods: {
            $api: () => api
        }
    }]
}
