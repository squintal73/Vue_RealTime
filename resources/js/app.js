require("./bootstrap");
window.Vue = require("vue").default;

import store from "./store/store";

Vue.component("chat", require("./components/chat.vue").default);
Vue.component("users", require("./components/users.vue").default);
Vue.component("messages", require("./components/messages.vue").default);

const app = new Vue({
    store,
    el: "#app",
});
