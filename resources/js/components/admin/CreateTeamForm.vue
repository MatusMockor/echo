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
    <div class="form-group">
      <textarea class="form-control"
                placeholder="Some awesome text of this amazing section please"
                name="sectionBody"
                v-model="sectionBody"
      > </textarea>
    </div>
    <button
        v-show="!isLoading"
        @click.prevent="sendForm"
        class="btn btn-primary mr-2">
      Submit
    </button>
    <button
        v-show="isLoading"
        @click.prevent
        class="btn btn-primary mr-2"
        disabled
    >
      <i class="fas fa-spinner fa-spin"></i>
    </button>
    <a :href="routeBack" class="btn btn-light">Cancel</a>
  </form>
</template>

<script>

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
      isLoading: false,
      sectionBody: "",
    }
  },
  methods: {
    sendForm() {
      if (this.sectionName) {

        axios.post(this.sendFormRoute, {
          name: this.sectionName,
          body: this.sectionBody
        })
            .then(response => this.createFlashMessage(response))
            .catch(error => {
              console.log(error);
              this.createErrFlashMessage(error.response.data.message);
              this.isLoading = false;
            })
            .finally(() => {
              this.loading = false;
              this.sectionName = "";
              this.sectionBody = "";
              this.isLoading = false;
            });
      }
    },

    createErrFlashMessage(message) {
      window.eventBus.emit("create-error-flash-message", message);
    },

    createFlashMessage(response) {
      if (response.status === 200) {
        window.eventBus.emit("create-success-flash-message", "Yupiii you did it");
      }
    }
  }
}
</script>