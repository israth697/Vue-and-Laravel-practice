<template>
        <div>
            <h1>Edit Teacher Information From</h1>
           <!-- <router-link to="/teacher_list">Teacher List View</router-link> -->
            <form id="teachUpdate">  
       <br>
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="name" name="name" v-model="teacher_data.name" class="form-control" id="name"  placeholder="Write Teacher Name" >
          </div><br>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" v-model="teacher_data.email" class="form-control" id="email" placeholder="Write Teacher Email">
          </div><br>
          <div data-mdb-input-init class="form-group" >
            <label for="gender">Gender:</label>
            <br>
            <input v-model="teacher_data.gender" type="radio" id="gender" name="gender" value="man">
            <label for="gender">Male</label><br>
            <input v-model="teacher_data.gender" type="radio" id="gender" name="gender" value="woman">
            <label for="gender">Female</label><br>
        </div> <br>
        <!-- <div class="row">
                     <label>Skills:</label>
                    <div class="form-group">
                        <label for="laravel">
                            <input v-model="teacher.skill" type="checkbox" id="laravel" value="laravel">Laravel
                        </label>
                        <label for="codeigniter">
                            <input v-model="teacher.skill" type="checkbox" id="codeigniter" value="codeigniter">Codeigniter
                        </label>
                        <br>
                        <label for="ajax">
                            <input v-model="teacher.skill" type="checkbox" id="ajax" value="ajax">Ajax
                        </label>
                        <label for="vuejs">
                            <input v-model="teacher.skill" type="checkbox" id="vuejs" value="vuejs">VUE JS
                        </label>
                        <br>
                        <label for="mysql">
                            <input v-model="teacher.skill" type="checkbox" id="mysql" value="mysql">MySQL
                        </label>
                        <label for="api">
                            <input v-model="teacher.skill" type="checkbox" id="api" value="api">API
                        </label>
                    </div>
                </div> -->
                    <br>
          <div>
           <button type="submit" @click.prevent="teachUpdate" class="btn btn-primary">UPDATE</button>
          </div>
        </form>
        </div>
</template>

<script>
import axios from 'axios';
export default {
    name: 'Teacher_edit',

        data() {
            return {
            
                teacher_data: [],
                teacher_id:'',
            };
        },
    mounted() {
        console.log('hgvj')
        this.teacher_id = this.$route.params.id;
            this.saveTeacher(this.$route.params.id);
            // console.log('ok',this.teacher_id)

        },
        methods: {
            saveTeacher(teacherid) {
                axios.get("http://localhost/VueLara/public/teacher-edit/"+teacherid).then((res) => {
                    this.teacher_data = res.data;
                    console.log(this.teacher_data);
                });
            },

            teachUpdate() {
                
            console.log('ok');
            const teacher_update = document.getElementById('teachUpdate');
            let update = new FormData(teachUpdate);
            console.log(update);
            axios.post('http://localhost/VueLara/public/teacher-update/'+ this.teacher_data.id, update).then((res) => {
                // console.log(res);
                alert('Update Successfully');
            });
           
                
            },
        },
    
    
}
</script>

<style lang="scss" scoped>

</style>