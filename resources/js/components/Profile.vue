<template>
    <div>
      <h1>
          Good Morning
          </h1>
    </div>
    

    <instagram>
        <template v-slot:mou>
            <h1>Hell</h1>
        </template>
    </instagram>
    
</template>

<script>
import Instagram from './Instagram.vue';
export default {
    name: 'profile',
    components: {
        Instagram
    },
}
</script>