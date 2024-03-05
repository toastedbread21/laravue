<template>
    <div class="register" style="text-align:center">
    <h1>Register</h1>
    <form @submit.prevent="submitForm">
        <input type="text" v-model="form.name" placeholder="Name"><br>
        <input type="text" v-model="form.email" placeholder="Email"><br>
        <input type="password" v-model="form.password" placeholder="password"><br><br>
        <button type="submit">Register</button>
        <a href="/login">Already have an account?</a>
    </form>
</div>
</template>
<script>
    export default{
        data(){
            return{
                form:{
                    name:'',
                    email:'',
                    password:'',
                }
            };
        },
        methods:{
            submitForm(){
                axios.post('/store',this.form)
                .then(response=>{
                    console.log(response.data)
                    window.location.href = '/login';
                })
                .catch(error=>{
                    console.error(error)
                });
            }
        }
    };
</script>
