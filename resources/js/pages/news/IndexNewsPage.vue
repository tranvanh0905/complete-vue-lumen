<template>
    <div id="category-page">
        <div class="m-2">
            <router-link to="/news/add">
                <button class="btn btn-success">Add News</button>
            </router-link>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Category</th>
                <th scope="col">Title</th>
                <th scope="col">Url</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(item, index) in data">
                <th scope="row">{{ item.id }}</th>
                <td>{{ item.category_id }}</td>
                <td>{{ item.title }}</td>
                <td>{{ item.url }}</td>
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
    name   : "NewsPage",
    data() {
        return {
            data      : [],
            pagination: [],
        }
    },
    created() {
        this.getFirstData()
    },
    methods: {
        getFirstData() {
            axios.get('./api/news', {headers: {Authorization: `Bearer ${localStorage.getItem('token')}`}}).then((response) => {
                this.data = response.data.items
            })
        },
        getCategoryName(id) {
            axios.get('./api/category/update/' + id, {headers: {Authorization: `Bearer ${localStorage.getItem('token')}`}}).then((response) => {
                return response.data.items.title
            })
        },
        deleteData(id, index) {
            if(confirm('Are you sure?')) {
                axios.delete('./api/news/' + id, {headers: {Authorization: `Bearer ${localStorage.getItem('token')}`}}).then((response) => {
                    this.data.splice(index, 1)
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
