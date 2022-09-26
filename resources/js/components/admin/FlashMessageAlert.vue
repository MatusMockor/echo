<template>
  <Transition>
    <div v-if="isVisible"
         :class="'alert alert-'+ flashMessageType +' alert-dismissible show mb-5'"
         role="alert">
      {{ flashMessage }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  </Transition>
</template>

<script>
export default {
  name: "FlashMessageAlert",
  props: {
    message: {
      type: String,
    },
    type: {
      type: String,
      default: "primary"
    }
  },
  data() {
    return {
      isVisible: false,
      flashMessageType: this.type,
      flashMessage: this.message
    }
  },
  methods: {
    showAlert() {
      this.isVisible = true;
      setTimeout(() => this.hideAlert(), 5000);
    },

    hideAlert() {
      this.isVisible = false;
    },
  },

  created() {
    window.eventBus.on("create-error-flash-message", (event) => {
      this.flashMessage = event;
      this.flashMessageType = "danger";
      this.showAlert();
    });

    window.eventBus.on("create-success-flash-message", (event) => {
      this.flashMessage = event;
      this.flashMessageType = "success";
      this.showAlert();
    });

    if (this.message) {
      this.showAlert();
    }
  }

}
</script>

<style scoped>
/* we will explain what these classes do next! */
.v-enter-active,
.v-leave-active {
  transition: opacity 0.5s ease;
}

.v-enter-from,
.v-leave-to {
  opacity: 0;
}
</style>