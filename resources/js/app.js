import './bootstrap';
import {createApp} from "vue";
import FlashMessageAlert from "./components/admin/FlashMessageAlert.vue";

const app = createApp({});
app.component('FlashMessageAlert', FlashMessageAlert);

app.mount('#app');
