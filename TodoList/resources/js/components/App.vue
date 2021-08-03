<template>
  <div>
    <h1 style="margin-top: 200px; text-align: center">Todo List</h1>
    <div class="todoListContainer">
        <add-item-form v-on:reloadTodos="updateTodos()" />
        <list-view ref="todoView" />
    </div>
  </div>
</template>

<script>
import AddItemForm from "./AddItemForm.vue"
import ListView from "./ListView.vue"

export default {
  components: {
      AddItemForm,
      ListView
  },
  methods: {
    updateTodos() {
      this.$refs.todoView.getTodos();
    }
  }
};
</script>

<style scoped>
.todoListContainer {
    width: 400px;
    margin: auto;
    margin-top: 50px;
}
</style>