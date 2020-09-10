<template>
    <div id="login-page">
        <b-form @submit.prevent="login">
            <b-form-group
                id="input-group-1"
                label="Email address:"
                label-for="input-1"
                description="We'll never share your email with anyone else."
            >
                <b-form-input
                    id="input-1"
                    type="email"
                    v-model="form.email"
                    placeholder="Enter email"
                ></b-form-input>
            </b-form-group>

            <b-form-group label="Password">
                <b-input
                    type="password"
                    v-model="form.password"
                    placeholder="Enter password"
                ></b-input>
            </b-form-group>

            <b-button type="submit" variant="primary">Login</b-button>
        </b-form>

    </div>
</template>
<script>
import axios from 'axios';

export default {
    name   : "LoginPage",
    data() {
        return {
            form: {
                email   : null,
                password: null,
                error   : false,
            }
        }
    },
    methods: {
        login() {
            axios.post('../api/login', {
                email   : this.form.email,
                password: this.form.password,
            }).then((response) => {
                localStorage.setItem('token', response.data.token)
                this.$router.push('/dashboard')
            })
        }
    }
}
</script>
<style>

</style>
