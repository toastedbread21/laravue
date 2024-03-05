<template>
    <h1>Users</h1>
    <table>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
      </tr>
      <tr v-for="user in users" :key="user.id">
        <td>{{ user.id }}</td>
        <td>{{ user.name }}</td>
        <td>{{ user.email }}</td>
        <td>
            <button @click="userEdit">Edit</button> | 
            <button @click="userDelete">Delete</button>
        </td>
      </tr>
    </table>
</template>
<script>
import axios from 'axios';
    export default{
        data(){
            return{
                users:[]
            };
        },
        mounted(){
            axios.get('/fetch')
                .then(response=>{
                    this.users = response.data
                })
                .catch(error=>{
                    console.error(error)
                });
            
        }
    }
</script>