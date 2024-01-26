<script>
import { ref } from 'vue';
import axios from 'axios';
export default {
  name: "AppMain", 
}


</script>

<template>
      <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</template>

<style scoped>

</style>
