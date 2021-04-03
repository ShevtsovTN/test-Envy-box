<template>
  <div class="d-flex align-items-center justify-content-center flex-column">
      <messages />
      <form-feedback />
  </div>
</template>

<script>
  import Messages from './Messages'
  import FormFeedback from './FormFeedback'
  
  export default {
    name: 'App',
    components: {Messages, FormFeedback}
  }
</script>

<style scoped>

</style>
