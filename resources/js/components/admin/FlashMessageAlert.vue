<template>
  <div v-if="isVisible"
       :class="'alert alert-'+ type +' alert-dismissible show fade'">
    wasd
    <button
        @click="hideAlert"
        type="button"
        class="btn-close"
        data-bs-dismiss="alert"
        aria-label="Close">
    </button>
  </div>
</template>

<script>
export default {
  name: "FlashMessageAlert",
  props: {
    message: {
      type: String,
      default: ""
    },
    type: {
      type: String,
      default: "primary"
    }
  },
  data() {
    return {
      isVisible: true
    }
  },
  methods: {
    showAlert() {
      this.isVisible = true;
    },

    hideAlert() {
      this.isVisible = false;

      setTimeout(() => this.hideAlert(), 5000);
    },
  }

}
</script>

<style scoped>

</style>