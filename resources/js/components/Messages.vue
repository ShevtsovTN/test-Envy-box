<template>
  <div
      v-if="message.status !== ''"
      class="message m-4 p-4 rounded bg-white"
  >
      <div
          v-if="error"
          class="p-0 d-flex align-items-center justify-content-center flex-column"
      >
          <div
              v-for="(text, index) in message.text"
              :key="index"
              class="p-0 d-flex align-items-center justify-content-center"
              :class="{
                'text-success': message.status === 'success',
                'text-danger': message.status === 'error'
              }"
          >{{text[0]}}</div>
      </div>
      <div
          :class="{
            'text-success': message.status === 'success',
            'text-danger': message.status === 'error'
          }"
      >{{message.text[0]}}
      </div>
  </div>
</template>

<script>
  export default {
    name: 'Messages',
    computed: {
      message () {
        return this.$store.getters.getMessage
      },
      error () {
        return this.$store.getters.getError
      }
    }
  }
</script>

<style scoped>

</style>
