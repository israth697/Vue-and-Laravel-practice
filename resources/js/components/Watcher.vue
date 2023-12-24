<template>
    <h1>Mouly</h1>
    <input type="text" v-model="mobile" placeholder="Enter your phone number">
</template>

<script>
    export default {
    name: 'Watcher',
    data() {
        return {
            mobile:'',
        }  
    },
    watch: {
        mobile(newmobile,oldmobile){
            console.log(newmobile);
            if (isNaN(newmobile)) {
                alert("Enter new Valid Number");
                this.mobile = oldmobile;
            }
            if (newmobile.length == 11) {
                alert("An Otp has been send");
            }
        },
    },
   
        
    }
</script>

<style scoped>
    h1{
        color: blueviolet
    }
</style>