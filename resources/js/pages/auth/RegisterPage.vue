<template>
    <div id="register-page">
        <b-form>

            <b-form-group label="Username:">
                <b-form-input required placeholder="Enter username">
                </b-form-input>
            </b-form-group>
            <b-form-group label="Password">
                <b-input type="password" placeholder="Enter password"></b-input>
            </b-form-group>
            <b-form-group label="Re Password">
                <b-input type="password" placeholder="Enter password"></b-input>
            </b-form-group>
            <b-form-group
                label="Email address:"
                description="We'll never share your email with anyone else."
            >
                <b-form-input
                    type="email"
                    required
                    placeholder="Enter email"
                ></b-form-input>
            </b-form-group>

            <b-button type="submit" variant="primary">Register</b-button>
            <b-button type="reset" variant="danger">Reset</b-button>
        </b-form>

    </div>
</template>
<script>
import axios from 'axios';

export default {
    name   : "RegisterPage",
    data   : {
        form: {
            username: '',
            password: '',
        },
    },
    methods: {
        register() {
            axios.post('./api/register').then((response) => {

            });
        }
    }
}
</script>
<style></style>
