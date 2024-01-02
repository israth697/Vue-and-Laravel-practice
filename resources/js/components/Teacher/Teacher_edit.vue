<template>
    <div>
        <h1>Edit Teacher Information</h1>

        <form id="teachUpdate">
            <br>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="name" name="name" v-model="teacher_data.name" class="form-control" id="name"
                    placeholder="Write Teacher Name">
            </div><br>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" v-model="teacher_data.email" class="form-control" id="email"
                    placeholder="Write Teacher Email">
            </div><br>
            <div class="form-group">
                <label for="image">Image:</label>
                <img :src="'http://localhost/VueLara/public/storage/uploads/' + teacher_data.image" width="200">
                <input type="file" name="image" class="form-control" id="image" placeholder="Write Teacher Image">
            </div><br>
            <div data-mdb-input-init class="form-group">
                <label for="gender">Gender:</label>
                <br>
                <input v-model="teacher_data.gender" type="radio" id="gender" name="gender" value="man">
                <label for="gender">Male</label><br>
                <input v-model="teacher_data.gender" type="radio" id="gender" name="gender" value="woman">
                <label for="gender">Female</label><br>
            </div> <br>
            <strong>Skills:</strong>
                    <!-- {{ skills }} -->
                    <div v-for="(item, index) in skills" :key="index">
                        <div class="form-check form-check-inline">
                            <span v-if="teacher_data.skill.includes(item)">
                                <input class="form-check-input" type="checkbox" name="skill[]" id="inlineCheckbox1"
                                    :value="item" :checked="true" />
                                <label class="form-check-label" for="inlineCheckbox1">{{ item }}</label>
                            </span>
                            <span v-else>
                                <input class="form-check-input" type="checkbox" name="skill[]" id="inlineCheckbox1"
                                    :value="item" :checked="false" />
                                <label class="form-check-label" for="inlineCheckbox1">{{ item }}</label>
                            </span>

                        </div>
          </div>
           

                   
            
            <div>
                <button type="submit" @click.prevent="teachUpdate" class="btn btn-primary">UPDATE</button>
            </div>
            <br>
            <br>
            <router-link to="/teacher_list">Back On Teacher List</router-link>
        </form>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    name: 'Teacher_edit',

    data() {
        return {
           
            teacher_data: {
                 name: '',
                email: '',
                image: '',
                gender: '',
                skill: [],
            },
            teacher_id: '',
            
            skills: ['laravel', 'codeigniter', 'ajax', 'vuejs', 'mysql', 'api'],
        };

        
    },

    mounted() {
        // console.log('hgvj')
        this.teacher_id = this.$route.params.id;
        // this.saveTeacher(this.$route.params.id);
        // console.log('ok',this.teacher_id)

    },
    methods: {
        saveTeacher(teacherid) {
console.log("get teacher");
            axios.get("http://localhost/VueLara/public/teacher-edit/" + teacherid).then((res) => {
                this.teacher_data = res.data;
                this.teacher_data.name = res.data.name;
                this.teacher_data.email = res.data.email;
                // this.teacher_data.image = res.data.image;
                this.teacher_data.gender = res.data.gender;
                this.teacher_data.skill=JSON.parse(res.data.skill)
                console.log(this.teacher_data);
                
            });
        },

        teachUpdate() {


            const teacher_update = document.getElementById('teachUpdate');
            let update = new FormData(teacher_update);
            // console.log(update);
            axios.post('http://localhost/VueLara/public/teacher-update/' + this.teacher_data.id, update).then((res) => {
                console.log('res');
                alert('Update Successfully');
                this.$router.push({ path: "/teacher" });
            });
        },  
    },

     created() {
        this.saveTeacher(this.$route.params.id);
     },
}
</script>

<style lang="scss" scoped></style>