<template>
    <div id="register-page">
        <b-form @submit.prevent="register">
            <b-form-group label="Username:">
                <b-form-input
                    placeholder="Enter username"
                    v-model="form.username"
                >
                </b-form-input>
                <p show v-if="status_error" variant="danger">
                    {{ error.username }}
                </p>
            </b-form-group>
            <b-form-group label="Password">
                <b-input
                    type="password"
                    placeholder="Enter password"
                    v-model="form.password"
                ></b-input>
            </b-form-group>
            <b-form-group
                label="Email address:"
                description="We'll never share your email with anyone else."
            >
                <b-form-input
                    v-model="form.email"
                    type="email"
                    placeholder="Enter email"
                ></b-form-input>
                <p show v-if="status_error" variant="danger">
                    {{ error.email }}
                </p>
            </b-form-group>
            <b-form-group label="Your name:">
                <b-form-input
                    placeholder="Enter your name"
                    v-model="form.full_name"
                >
                </b-form-input>
            </b-form-group>
            <b-button type="submit" variant="primary">Register</b-button>
        </b-form>

    </div>
</template>
<script>
import axios from 'axios';

export default {
    name   : "RegisterPage",
    data() {
        return {
            status_error: false,
            form        : {
                username : '',
                email    : '',
                password : '',
                full_name: '',
            },
            error       : {
                username : '',
                email    : '',
                password : '',
                full_name: '',
            }
        }
    },
    methods: {
        register(event) {
            event.preventDefault();
            if(this.form.username == "") {
                this.status_error   = true;
                this.error.username = "Username can not blank";
            } else if(this.form.email == "") {
                this.status_error = true;
                this.error.email  = "Email can not blank";
            }
            axios.post('../api/register', {
                username : this.form.username,
                email    : this.form.email,
                password : this.form.password,
                full_name: this.form.full_name,
            }).then((response) => {
                this.$swal('Register complete');
                this.$router.push('/login')
            });
        }
    }
}
</script>
<style></style>
