<template>
<center>
        <div>
            <h1>Teacher Information From</h1>
           <router-link to="/teacher_list">Teacher List </router-link>
            <form  id="form" method="post" @submit.prevent="submission">  
       <br>
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="name" name="name" v-model="teacher.name" class="form-control" id="name" placeholder="Write Teacher Name">
            <small v-if="errors.name" class="text-danger">{{ errors.name }}</small>
          </div><br>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" v-model="teacher.email" class="form-control" id="email" placeholder="Write Teacher Email">
            <small v-if="errors.email" class="text-danger">{{ errors.email }}</small>
          </div><br>
          <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" name="image" v-bind="teacher.image" class="form-control" id="image" placeholder="Write Teacher Image">
            <!-- <small v-if="errors.image" class="text-danger">{{ errors.image }}</small> -->
          </div><br>
          <div data-mdb-input-init clas
          s="form-group" >
            <label for="gender">Gender:</label>
            <br>
            <input v-model="teacher.gender" type="radio" id="gender" name="gender" value="man">
            <label for="gender">Male</label><br>
            <input v-model="teacher.gender" type="radio" id="gender" name="gender" value="woman">
            <label for="gender">Female</label><br>
            <br>
            <small v-if="errors.gender" class="text-danger">{{ errors.gender }}</small>
        </div> <br>
        <div class="row">
                         <label>Skills:</label>
                        <div class="form-group">
                            <label for="laravel">
                                <input v-model="teacher.skill" type="checkbox" id="laravel" value="laravel" >Laravel
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
                            <br>
                            <small v-if="errors.skill" class="text-danger">{{ errors.skill }}</small>
                        </div>
                    </div> 
                    <br>
          <div>
           <button type="submit" class="btn btn-primary">SUBMIT</button>
          </div>
        </form>
        <Teacher_list/>
        </div>
</center>
</template> 

<script>
import axios from 'axios';
import Teacher_list from './Teacher_list.vue';

export default {
    name: 'Teacher',
    components: {
        Teacher_list
    },
    data() {
        return {
            teacher: {
                name: '',
                email: '',
                image: '',
                gender: '',
                skill:[],
            },
            errors:{},
        };
    },
    methods: {

        submission() {
            if (this.validate()==false) {
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

        validate() {
            var errcount = 0;
            if (this.teacher.name == '' || null) {
                errcount += 1
                this.errors.name = 'Name is required'
            }
            if (this.teacher.email == '' || null) {
                errcount += 1
                this.errors.email = 'Email is required'
            }
            if (this.teacher.image == '' || null) {
                errcount += 1
                this.errors.image = 'image is required'
            }
            if (this.teacher.gender == '' || null) {
                errcount += 1
                this.errors.gender = 'gender is required'
            }
            if (this.teacher.skill == false) {
                errcount += 1
                this.errors.skill = 'skill is required'
            }

            if (errcount > 0) {
                return false;
            }

            return true;
        }
    },
}
</script>

<style >

</style>