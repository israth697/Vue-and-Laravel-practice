<template>
    <div>
        <h1>Teacher Information From</h1>
       <router-link to="/teacher_list">Teacher List View</router-link>
        <form  id="form" method="post" @submit.prevent="submission">  
   <br>
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="name" name="name" v-model="teacher.name" class="form-control" id="name" placeholder="Write Teacher Name">
      </div><br>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" v-model="teacher.email" class="form-control" id="email" placeholder="Write Teacher Email">
      </div><br>
      <div data-mdb-input-init class="form-group" >
        <label for="gender">Gender:</label>
        <br>
        <input v-model="teacher.gender" type="radio" id="gender" name="gender" value="man">
        <label for="gender">Male</label><br>
        <input v-model="teacher.gender" type="radio" id="gender" name="gender" value="woman">
        <label for="gender">Female</label><br>
    </div> <br>
    <div class="row">
                     <label>Skills:</label>
                    <div class="form-group">
                        <label for="laravel">
                            <input v-model="teacher.skill" type="checkbox" id="laravel" value="laravel">Laravel
                        </label>
                        <label for="codeigniter">
                            <input v-model="teacher.skill" type="checkbox" id="codeigniter" value="codeigniter" name="skill[]">Codeigniter
                        </label>
                        <br>
                        <label for="ajax">
                            <input v-model="teacher.skill" type="checkbox" id="ajax" value="ajax" name="skill[]">Ajax
                        </label>
                        <label for="vuejs">
                            <input v-model="teacher.skill" type="checkbox" id="vuejs" value="vuejs" name="skill[]">VUE JS
                        </label>
                        <br>
                        <label for="mysql">
                            <input v-model="teacher.skill" type="checkbox" id="mysql" value="mysql" name="skill[]">MySQL
                        </label>
                        <label for="api">
                            <input v-model="teacher.skill" type="checkbox" id="api" value="api" name="skill[]">API
                        </label>
                    </div>
                </div> 
                <br>
      <div>
       <button type="submit" class="btn btn-primary">SUBMIT</button>
      </div>
    </form>
    </div>
</template> 

<script>
import axios from 'axios';
export default {
    name: 'Teacher',
    data() {
        return {
            teacher: {
                name: '',
                email: '',
                gender: '',
                skill:[],
            },
        };
    },
    methods: {
        submission() {
            var form = document.getElementById('form');
            var formData = new FormData(form);
            axios.post('VueLara/public/teacher_save', formData).then(res => {
                console.log(res);
                alert('Store Successfully');

                // retrive to one page to one page
                this.$router.push({ path: "/teacher_list" });
            });
        }
    },
}
</script>

<style >

</style>