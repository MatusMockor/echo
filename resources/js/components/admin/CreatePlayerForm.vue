<template>
  <form class="forms-sample" method="post">
    <div class="form-group">
      <div class="row">
        <div class="col-md-6">
          <label for="ourName">Our Name</label>
          <input type="text" class="form-control" id="ourName" v-model="ourName">
        </div>
        <div class="col-md-6">
          <label for="ourScore">Our Score</label>
          <input type="number" class="form-control" id="ourScore" v-model="ourScore">
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="row">
        <div class="col-md-6">
          <label for="enemyName">Enemy Name</label>
          <input type="text" class="form-control" id="enemyName" v-model="enemyName">
        </div>
        <div class="col-md-6">
          <label for="enemyScore">Enemy Score</label>
          <input type="number" class="form-control" id="enemyScore" v-model="enemyScore">
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="row">
        <div class="col-md-6">
          <label for="enemyName">MVP Player</label>
          <input type="text" class="form-control" id="MvpPlayer" v-model="MvpPlayer">
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="teams">Our team section</label>
      <select class="form-control" id="teams" v-model="selectedTeam">
        <option
            v-for="(team, index) in teams" :key="index"
            :value="team.id"
        >{{ team.name }}
        </option>
      </select>
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
  name: "GameResultForm",

  props: {
    routeBack: {
      type: String,
      default: "/"
    },
    routeSendForm: {
      type: String,
      default: ""
    },
    teams: {
      type: Object,
      default: {}
    }
  },
  data() {
    return {
      isLoading: false,
      name: "ECHO GG",
      age: 2,
      description: "plebs",
      selectedTeam: ''
    }
  },
  methods: {
    sendForm() {

      this.isLoading = true;
      axios.post(this.routeSendForm, {
        team_id: this.selectedTeam,
        our_name: this.ourName,
        our_score: this.ourScore,
        enemy_name: this.enemyName,
        enemy_score: this.enemyScore,
        mvp_player: this.MvpPlayer
      })
          .then(response => this.createFlashMessage(response))
          .catch(error => {
            console.log(error);
            this.createErrFlashMessage(error.response.data.message);
            this.isLoading = false;
          })
          .finally(() => {
            this.isLoading = false;
          });
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