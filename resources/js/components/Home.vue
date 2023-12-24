<template>
  <List :abc="intern" id="1"> </List>
  
</template>

<script>
import List from '../table/List.vue';

export default {
  name: 'Home',
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
    }
  }

   
}
</script>