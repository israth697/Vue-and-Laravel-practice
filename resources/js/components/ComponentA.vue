<template>
    <div>
        <h1>Component Details</h1>
        <p> <strong>Name:</strong>{{ name }}</p>
        <p> <strong>Web:</strong>{{ web }}</p>
        <p> <strong>Address:</strong>{{ address }}</p>

        
       
    </div>
</template>

<script>


export default {
    name: "ComponentA",
    inject: ["name","web","address"]
    }
</script>

<style>

</style>