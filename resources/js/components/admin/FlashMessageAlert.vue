<template>
  <Transition>
    <div v-if="isVisible"
         :class="'alert alert-'+ type +' alert-dismissible show mb-5'"
         role="alert">
      {{ message }}
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
      isVisible: false
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