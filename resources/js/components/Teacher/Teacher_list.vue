<template>
    <div> 
        <!--4000+3000+  -->
        <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">E-mail</th>
          <th scope="col">Image</th>
          <th scope="col">Gender</th>
          <th scope="col">Skill</th>
          <th scope="col">Action</th>
         </tr>
      </thead>
      <tbody>
        <tr v-for="information in informations" :key="id">
        <td>{{ information.id }}</td>
        <td>{{ information.name }}</td>
        <td>{{ information.email }}</td>
        <td>
            <img :src="'http://localhost/VueLara/public/storage/uploads/'+ information.image" width="100" >
        </td>
        <td>{{ information.gender }}</td>
        <br>
        <div v-for="(item,index) in JSON.parse(information.skill)" :key="index">
            {{item}}

        </div>
        <td>
            <div @click.prevent="edit">
            <router-link :to='{path:"teacher_edit/"+ information.id}'>Edit</router-link>
            </div>
        </td>

        <td><button @click="deleteteacher(information.id)" >Delete</button></td>

        </tr>
      </tbody>
    </table>
    </div>
</template>

<script>
import axios from 'axios';
// import Teacher_edit from './Teacher_edit.vue';
export default {
    name: 'Teacher_list',
    // component:[Teacher_edit],
    data() {
        return {
            informations: [],
            teacher_id:"",
        };
    },
     mounted() {
        this.getinformation();
    },

    methods: {
        getinformation() {
            axios.get('VueLara/public/teacher_list').then(res => {
                this.informations = res.data;
                console.log(this.informations);
            
            });
        },
        edit() {
            this.teacher_id = this.$route.params.id;
            axios.get("VueLara/public/teacher-edit" + this.teacher_id)
                .then((res) => { });
        },
         deleteteacher(teacherId) {
            if (confirm('do you want delete?')) {
                axios.get(`VueLara/public/teacher_delete/${teacherId}`).then(res => {
                    alert(res.data.message);
                    this.getinformation();
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