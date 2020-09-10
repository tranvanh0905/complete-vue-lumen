<template>
    <div id="user-page">
        <div class="m-2">
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(item, index) in users">
                <th scope="row">{{ item.id }}</th>
                <td>{{ item.username }}</td>
                <td>{{ item.email }}</td>
                <th>
                    <button class="btn btn-danger" v-on:click="deleteData(item.id,index)">Delete</button>
                </th>
            </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
import axios from 'axios';

export default {
    name   : "UserPage",
    data() {
        return {
            users: [],
        };
    },
    created() {
        this.getData();
    },
    methods: {
        getData() {
            axios.get('../api/users', {headers: {Authorization: `Bearer ${localStorage.getItem('token')}`}}).then((response) => {
                this.users = response.data.users;
            });
        },
        deleteData(id, index) {
            if(confirm('Are you sure?')) {
                axios.delete('../api/user/' + id, {headers: {Authorization: `Bearer ${localStorage.getItem('token')}`}}).then((response) => {
                    this.users.splice(index, 1)
                }).catch((error) => {
                    console.log(error)
                })
            }
        }
    }
}
</script>
<style>

</style>
