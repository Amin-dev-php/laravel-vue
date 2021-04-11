<template>
  <div class="card w-100">
    <div class="card-body">
      <div class="card-title">
        <router-link :to="{ name: 'bookable', params: { id } }">
          <h1>{{ title }}</h1>
        </router-link>
      </div>
      <div class="card-text">
        <p>{{ description }}</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: { title: String, description: String, id: Number }
};
</script>
