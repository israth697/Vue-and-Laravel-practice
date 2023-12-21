<template>
    <List :abc="intern" id="1"> </List>

      <h1>
        <router-link to="/hello">Hello</router-link>
        <br>
        <router-link to="/hell">Hey</router-link>
        <br>
        <router-link to="/profile">profile</router-link>
        <br>
        <router-link to="/instagram">Instagram profile</router-link>
      </h1>
      
   <router-view></router-view>
</template>

<style scoped>
 h1{
  color:purple
 }
</style>


<script>

import List from './components/List.vue';

export default {
  name: 'App',
  components: {
    List

  },

  data() {
    return {
      intern: [
        {
          name: "Shehub",
          id: "2018",
          mail: "shehub@gmail.com"
        },
        {
          name: "Mehedi",
          id: "2016",
          mail: "mehedi@gmail.com"
        },
        {
          name: "Rimi",
          id: "2015",
          mail: "rimi@gmail.com"
        }
      ]
    };
  },
}
</script>

