<template>
    <div>
        <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          
        </tr>
      </thead>
      <tbody>
        <tr v-for="internlist in abc" :key="id">
         <td>{{ internlist.id }}</td>
          <td>{{ internlist.name }}</td>  
          <td>{{ internlist.mail  }}</td>  
        </tr>
      </tbody>
    </table>
    </div>
</template>

<script>


export default {
  name: "List",
  props: ["abc"],
};
</script>