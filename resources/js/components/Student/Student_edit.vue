<template>
    <div>
        <div>
            <h1>Edit Student From</h1>

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
            <input type="name" name="name" v-model="model.student.name" class="form-control" id="name" placeholder="Write your name">
          </div><br>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name="email" v-model="model.student.email" class="form-control" id="email" placeholder="Write your email">
          </div><br>
          <div class="form-group">
            <label for="address">Address</label>
            <select v-model="model.student.address" name="address" class="form-control" id="address">
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
            <input v-model="model.student.gender" type="radio" id="gender" name="gender" value="man">
            <label for="gender">Male</label><br>
            <input  v-model="model.student.gender" type="radio" id="gender" name="gender" value="woman">
            <label for="gender">Female</label><br>

        </div> <br>
        <div>
            <label for="birthday">Birthday:</label>
          <input type="date" v-model="model.student.dob" id="dob" name="dob">
        </div><br>
          <div>
         <label for="phone">Enter your phone number:</label>
          <input type="tel" v-model="model.student.phone" id="phone" name="phone" >
          </div><br>
          <div>
           <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
export default {
   data() {
    return {
        model: {
            student: {
                    name: '',
                    email: '',
                    address: '',
                    gender: '',
                    dob: '',
                    phone: '',
                    image: '',
            }
        }
    };
    },
    mounted() {
        console.log(this.$route.params);
    
    },
   methods: {
       saveStudent() {
           var mythis = this;
           axios.post('VueLara/public/student-save', this.model.student).then(res => {
                console.log(res);
            });
    }
   },
}
</script>

<style >

</style>