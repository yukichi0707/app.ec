<template>
  <div>
    <h3>{{ greet2 }}</h3>
    <Tutorial/>
  </div>
</template>

<script lang="ts">
import Vue from 'vue'

export default Vue.extend({
  async asyncData({ app }): Promise<object> {
    const greet2: string = await app.$axios.$get(`/hello?cb=${new Date().getTime()}`).catch((err) => err)
    return { greet2 }
  }
})
</script>

