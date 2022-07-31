import axios from "axios";

export default {
    state: {
        messages: {},
        users: {},
    },
    mutatios: {},
    actions: {
        storeMessage(content, params) {
            return axios
                .post("chat/message", params)
                .then((response) => console.log(response))
                .catch(() => console.log("error"))
        },
    },
    getters: {},
};
