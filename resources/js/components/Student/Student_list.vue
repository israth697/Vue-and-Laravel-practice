<template>
    <div>
        <table class="table">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">E-mail</th>
          <th scope="col">Address</th>
          <th scope="col">Gender</th>
          <th scope="col">Birth Day</th>
          <th scope="col">Phone Number</th>
          <th scope="col">Action</th>
         </tr>
      </thead>
      <tbody>
        <tr v-for="lists in list">
        <td>{{ lists.name }}</td>
        <td>{{ lists.email }}</td>
        <td>{{ lists.address }}</td>
        <td>{{ lists.gender }}</td>
        <td>{{ lists.dob }}</td>
        <td>{{ lists.phone }}</td>
        <td><router-link to="/student_list">Edit</router-link></td>
        <td><router-link to="/student_list">Delete</router-link></td>
        </tr>
      </tbody>
    </table>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    

    name: 'Student_list',
    data() {
        return {
            list: [],
        };
    },
    mounted() {
        this.getlist();
    },

    methods: {
        
        getlist() {
            axios.get('VueLara/public/student-list').then(res => {
                this.list = res.data;
                    console.log(this.list);
            });
            }
    },
}
</script>

<style >

</style>