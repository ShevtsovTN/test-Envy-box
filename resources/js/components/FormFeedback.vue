<template>
    <form
        id="createOrder"
        class="p-4 m-4 rounded"
        name="createOrder"
        @submit.prevent="submitForm">
        <div class="form-group">
            <label for="name">Your Name</label>
            <input
                v-model="name"
                type="text"
                id="name"
                class="form-control"
                aria-describedby="nameHelp"
            >
            <small id="nameHelp" class="form-text text-muted">Required</small>
        </div>
        <div class="form-group">
            <label for="phone">Your Phone</label>
            <input
                v-model="phone"
                type="tel"
                id="phone"
                class="form-control"
                aria-describedby="phoneHelp"
            >
            <small id="phoneHelp" class="form-text text-muted">Required, format: +34-999-999-999</small>
        </div>
        <div class="form-group">
            <label for="message">Textarea</label>
            <textarea
                v-model="message"
                id="message"
                class="form-control"
                name="message"
                aria-describedby="messageHelp"
                placeholder="Message ..."
            ></textarea>
            <small id="messageHelp" class="form-text text-muted">Required</small>
        </div>
        <button
            type="submit"
            form="createOrder"
            class="btn btn-primary"
        >Submit</button>
    </form>
</template>

<script>
  export default {
    name: 'FormFeedback',
    data: function() {
      return {
        name: '',
        phone: '',
        message: ''
      }
    },
    methods: {
      submitForm: function () {
        this.$store.dispatch('setOrder', {
          name: this.name,
          phone: this.phone,
          message: this.message
        });
      }
    }
  }
</script>

<style scoped>

</style>
