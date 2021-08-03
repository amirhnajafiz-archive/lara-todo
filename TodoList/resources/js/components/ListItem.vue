<template>
  <div class="item">
    <input type="checkbox" v-model="item.completed" />
    <span :class="['itemText', item.completed ? 'completed' : '']">
      {{ item.todo }}
    </span>
    <button class="edit">
      <font-awesome-icon icon="edit" />
    </button>
    <button class="delete">
      <font-awesome-icon icon="trash" />
    </button>
  </div>
</template>

<script>
export default {
    props: ['item']
}
</script>

<style>
.item {
  display: flex;
  justify-content: center;
  align-items: center;
}

.itemText {
  width: 100%;
  margin-left: 20px;
}

.completed {
  text-decoration: line-through;
  color: #999999;
}

.edit {
  color: blue;
  border-radius: 5px;
  border: none;
  outline: none;
  margin-right: 5px;
  background-color: white;
  font-size: 17px;
}

.delete {
  color: red;
  border-radius: 5px;
  border: none;
  outline: none;
  background-color: white;
  font-size: 17px;
}
</style>