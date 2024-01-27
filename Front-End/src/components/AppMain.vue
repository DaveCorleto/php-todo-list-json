<script>
import { ref } from 'vue';
import axios from 'axios';


export default {
  data() {
    return {
      todolist: [],
      newTask: "",
    };
  },
  name: "AppMain",
  methods: {
    pushTask() {
      const t = this;
      const params = {
        params: {
          newTask: this.newTask
        }
      };

      axios.get('http://localhost/php-todo-list-json/Back-End/array.php', params)
        .then(res => {
          console.log(res.data);
        })
        .catch(err => console.log(err));
    }
  },
  mounted() {
    const t = this;
    axios.get('http://localhost/php-todo-list-json/Back-End/array.php')
      .then(res => {
        t.todolist = res.data;
      })
      .catch(err => console.log(err));
  },
};


</script>

<template>
   <!-- Nel tag form inserisco @submit per collegare all'invio dei dati il metodo pushTask che andrà a inserire all'interno di array.php la nuova task  -->
   <!-- .prevent serve a prevenire il comportamento di default di submit che sarebbe quello di ricaricare la pagina...  -->
      <form @submit.prevent = "pushTask">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Inserisci Nuova Task</label>
          <input type="text" class="form-control" id="newtext" aria-describedby="newtext" v-model="newTask">
        </div>
        <button type="submit" class="btn btn-primary">Inserisci</button>
        <button type="submit" class="btn btn-danger">Delete Task</button>
      </form>
      <ul v-for="task in todolist">
        <li>{{ task.text }}</li>
        <li>{{ task.done }}</li>
        
      </ul>
</template>

<style scoped>
  button {
    margin-right: 20px;
  }
</style>
