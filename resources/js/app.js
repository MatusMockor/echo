import './bootstrap';
import './libs/trix';
import {createApp} from "vue";
import mitt from "mitt";
import FlashMessageAlert from "./components/admin/FlashMessageAlert.vue";
import CreateTeamForm from "./components/admin/CreateTeamForm.vue";
import EditTeamForm from "./components/admin/EditTeamForm.vue";

window.eventBus = mitt();

const app = createApp({});
app.component('FlashMessageAlert', FlashMessageAlert);
app.component('CreateTeamForm', CreateTeamForm);
app.component('EditTeamForm', EditTeamForm)

app.mount('#app');
