<template>
    <!-- <List :abc="intern" id="1"> </List> -->
      <h1>
        <!-- <router-link to="/hello">Hello</router-link>
        <br>
        <router-link to="/hell">Hey</router-link>
        <br>
        <router-link to="/profile">profile</router-link>
        <br>
        <router-link to="/instagram">Instagram profile</router-link>
        <br>
        <router-link to="/componenta">Details</router-link>
        <br>
        <router-link to="/watcher">Watcher</router-link>
        <br>
        <router-link to="/page">Page</router-link> -->
        
        <router-link to="/details">Student</router-link>
        <br>
        <router-link to="/teacher">Teacher</router-link>
        </h1>
      
   <router-view></router-view>
</template>

<style scoped>
 h1{
  color:purple
 }
</style>


<script>



export default {
  name: 'App',

   data() {
    return {
      name: "Mouly",
      web: "www.intagram.com",
      address: "Chittagong"
    }
  },

  provide() {
    return {
      name: this.name,
      web: this.web,
      address: this.address
    }
  }
  
}
</script>

