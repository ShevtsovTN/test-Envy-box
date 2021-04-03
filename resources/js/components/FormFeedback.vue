<template>
    <form>
        <div class="form-group">
            <label for="name">Your Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="nameHelp">
            <small id="nameHelp" class="form-text text-muted">Required</small>
        </div>
        <div class="form-group">
            <label for="phone">Password</label>
            <input type="text" class="form-control" id="phone" aria-describedby="phoneHelp">
            <small id="phoneHelp" class="form-text text-muted">+34 999 999 999</small>
        </div>
        <div class="form-group">
            <label for="message">Textarea</label>
            <textarea class="form-control" name="message" aria-describedby="messageHelp" id="message"
                      placeholder="Message ..." required></textarea>
            <small id="messageHelp" class="form-text text-muted">Required</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</template>

<script>
  export default {
    name: 'FormFeedback'
  }
</script>

<style scoped>

</style>
