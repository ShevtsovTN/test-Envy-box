<template>
  <div
      :class="{
        'text-success': message.status === 'success',
        'text-danger': message.status === 'error'
      }"
  >{{message.text}}</div>
</template>

<script>
  export default {
    name: 'Messages',
    computed: {
      message () {
        return this.$store.getters.getMessage
      }
    }
  }
</script>

<style scoped>

</style>
