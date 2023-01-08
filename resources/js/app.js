import './bootstrap';
import './libs/trix';
import {createApp} from "vue";
import mitt from "mitt";
import FlashMessageAlert from "./components/admin/FlashMessageAlert.vue";
import TeamForm from "./components/admin/TeamForm.vue";
import GameResultForm from "./components/admin/GameResultForm.vue";

window.eventBus = mitt();

const app = createApp({});
app.component('FlashMessageAlert', FlashMessageAlert);
app.component('TeamForm', TeamForm);
app.component('GameResultForm', GameResultForm);

app.mount('#app');
