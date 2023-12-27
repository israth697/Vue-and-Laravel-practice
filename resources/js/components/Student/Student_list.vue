<template>
    <div>
        <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
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
        <tr v-for="lists in list" :key="id">

        <td>{{ lists.id }}</td>
        <td>{{ lists.name }}</td>
        <td>{{ lists.email }}</td>
        <td>{{ lists.address }}</td>
        <td>{{ lists.gender }}</td>
        <td>{{ lists.dob }}</td>
        <td>{{ lists.phone }}</td>
        <td><router-link :to='{path:"/student_edit/"+ lists.id}'>Edit</router-link></td>

        <td><button @click="deletestudent(lists.id)" >Delete</button></td>
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
        },

        deletestudent(studentId) {
            if (confirm('do you want delete?')) {
                axios.get(`VueLara/public/student-delete/${studentId}`).then(res => {
                    alert(res.data.message);
                    this.getlist();
                })
                    .catch(function (error) {
                        if (error.response) {
                            if (error.response.status == 404) {
                                alert(error.response.data.message);
                            }
                        }

                    });
           }
        },
    },
}
</script>

<style >

</style>