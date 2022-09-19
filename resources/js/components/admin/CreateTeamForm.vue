<template>
  <form class="forms-sample mb-5" method="post" :action="sendFormRoute">
    <div class="form-group">
      <input type="text"
             class="form-control"
             placeholder="Name of section"
             name="sectionName"
             v-model="sectionName"
             autofocus
      >
    </div>
    <button @click.prevent="sendForm"
            class="btn btn-primary mr-2">
      Submit
    </button>
    <a :href="routeBack" class="btn btn-light">Cancel</a>
  </form>

  <flash-message-alert v-if="flashMessage"
                       :message="flashMessage"
                       :type="flashMessageType"

  />
</template>

<script>
import flashMessageAlert from "./FlashMessageAlert.vue";

export default {
  name: "CreateTeamForm",

  props: {
    routeBack: {
      type: String,
      default: '/'
    },
    sendFormRoute: {
      type: String,
      default: ''
    },
  },
  data() {
    return {
      sectionName: "",
      flashMessage: "",
      flashMessageType: "",
      isLoading: false
    }
  },
  methods: {
    sendForm() {
      if (this.sectionName) {

        axios.post(this.sendFormRoute, {
          name: this.sectionName
        })
            .then(response => this.checkAjaxResponse(response))
            .catch(error => console.log(error))
            .finally(() => {
              this.loading = false
            });
      } else {

        this.flashMessage = "Section name is required";
        this.flashMessageType = "danger";
        this.clearFlashMessage();
      }
    },

    clearFlashMessage() {
      setTimeout(() => this.flashMessage = "", 5000);
    },

    checkAjaxResponse(response) {
      this.flashMessage = response.status === 200 ? "Yuhuuu you did it" : "";
      this.flashMessageType = response.status === 200 ? "success" : "";
      this.clearFlashMessage();
      this.sectionName = "";
    }
  }
}
</script>

<style scoped>

</style>