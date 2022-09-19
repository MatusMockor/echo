import './bootstrap';
import './libs/trix';
import {createApp} from "vue";
import FlashMessageAlert from "./components/admin/FlashMessageAlert.vue";
import CreateTeamForm from "./components/admin/CreateTeamForm.vue";

const app = createApp({});
app.component('FlashMessageAlert', FlashMessageAlert);
app.component('CreateTeamForm', CreateTeamForm)

app.mount('#app');
