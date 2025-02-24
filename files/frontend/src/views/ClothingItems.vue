<template>
  <div class="clothing-items">
    <h1>Clothing Items</h1>
    <button @click="fetchItems">Fetch Items</button>
    <ul>
      <li v-for="item in items" :key="item.id">{{ item.name }} - {{ item.category }}</li>
    </ul>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'ClothingItems',
  data() {
    return {
      items: []
    };
  },
  methods: {
    async fetchItems() {
      try {
        const response = await axios.get('http://localhost:8000/items', {
          headers: {
            Authorization: `Bearer ${localStorage.getItem('token')}`
          }
        });
        this.items = response.data;
      } catch (error) {
        console.error(error);
      }
    }
  }
};
</script>

<style scoped>
.clothing-items {
  display: flex;
  flex-direction: column;
  align-items: center;
}
</style>