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
    <button @click.prevent="sendForm"
            class="btn btn-primary mr-2">
      Submit
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
    team: {}
  },
  data() {
    return {
      isLoading: false,
      sectionName: this.team.name,
      sectionBody: this.team.body
    }
  },
  methods: {
    sendForm() {
      if (this.sectionName) {

        axios.patch(this.sendFormRoute, {
          name: this.sectionName,
          body: this.sectionBody
        })
            .catch(error => {
              console.log(error);
              this.createErrFlashMessage(error.response.data.message)
            })
            .then(response => this.createFlashMessage(response))
            .finally(() => {
              this.loading = false;
            });
      }
    },

    createErrFlashMessage(message) {
      window.eventBus.emit("create-error-flash-message", message);
    },

    createFlashMessage(response) {
      if (response.status === 200) {
        window.eventBus.emit("create-success-flash-message", "Yupiii you edit stuff");
      }
    }
  }
}
</script>
