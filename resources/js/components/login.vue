<template>
    <div class="login" style="text-align:center">
        <h1>Login</h1>
        <form @submit.prevent="submitForm">
            <input type="text" v-model="form.email" placeholder="email"><br>
            <input type="password" v-model="form.password" placeholder="password"><br><br>
            <button type="submit" >Login</button>
            <a href="/register">Register</a>
        </form>
    </div>
</template>
<script>

    export default{
        data(){
            return{
                form:{
                    email:'',
                    password:'',
                }
            };
        },
        methods:{
            submitForm(){
                axios.post('/auth', this.form)
                .then(response=>{
                    console.log(response.data)
                    window.location.href = '/';
                    this.form.email='';
                    this.form.password='';
                })
                .catch(error=>{
                    console.error(error);
                });
            }
        }


    };

</script>   