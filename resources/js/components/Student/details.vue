<template>
    <div>
        <h1>Student From</h1>
     
       <router-link to="/student_list">View List</router-link>

        <form  id="form" method="post" @submit.prevent="submition" enctype="multipart/part-data">  
      <div class="form-group">
        <br>
        <label for="image">Student Image</label>
        <br>
        <input name="image" type="file"  class="form-control-file" id="image">
      </div>
   <br>
      <div class="form-group">
        <label for="name">Name</label>
        <input type="name" name="name" v-model="students.name" class="form-control" id="name" placeholder="Write your name">
      </div><br>
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" name="email" v-model="students.email" class="form-control" id="email" placeholder="Write your email">
      </div><br>
      <div class="form-group">
        <label for="address">Address</label>
        <select v-model="students.address" name="address" class="form-control" id="address">
          <option>choose your address</option>
          <option>Dhaka</option>
          <option>Rangpur</option>
          <option>Sylet</option>
          <option>Rajshahi</option>
          <option>Chittagong</option>
          <option>Narshindi</option>
          <option>Sajek</option>
          <option>Sonargao</option>
        </select><br>
      </div>
   
      <div data-mdb-input-init class="form-group" >
        <label for="gender">Gender</label>
            <br>
        <input v-model="students.gender" type="radio" id="gender" name="gender" value="man">
        <label for="gender">Male</label><br>
        <input  v-model="students.gender" type="radio" id="gender" name="gender" value="woman">
        <label for="gender">Female</label><br>

    </div> <br>
    <div>
        <label for="birthday">Birthday:</label>
      <input type="date" v-model="students.dob" id="dob" name="dob">
    </div><br>
      <div>
     <label for="phone">Enter your phone number:</label>
      <input type="tel" v-model="students.phone" id="phone" name="phone" >
      </div><br>
      <div>
       <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    </div>
</template>

<script>
import axios from 'axios';
import Student_list from './Student_list.vue';
export default {
  name: 'Details',
  component: {
      Student_list
    },

        data() {
            return {
                students: {
                    name: '',
                    email: '',
                    address: '',
                    gender: '',
                    dob: '',
                    phone: '',
                    image:'',  
                },
        };
    },  
    methods: {
      submition() {
        var form = document.getElementById('form');
        var formData = new FormData(form);

        axios.post('VueLara/public/student-save', formData).then(res => {
          console.log(res);
        });
        // console.log(this.students); 

      }
    },

    



    }
</script>

<style lang="scss" scoped>

</style>