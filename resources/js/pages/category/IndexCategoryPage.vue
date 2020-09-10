<template>
    <div id="category-page">
        <div class="m-2">
            <router-link to="/category/add">
                <button class="btn btn-success">Add Category</button>
            </router-link>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col"><a href=""></a>ID</th>
                <th scope="col"><a href=""></a>Title</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td></td>
                <td><input v-on:keyup="getFilterData" v-model="search_title" class="form-control" type="text"></td>
                <td></td>
                <td></td>
            </tr>
            <tr v-for="(item, index) in data">
                <th scope="row">{{ item.id }}</th>
                <td>{{ item.title }}</td>
                <td>{{ item.description }}</td>
                <td>
                    <router-link :to="{name:'update-category', params: {id: item.id}}">
                        <button class="btn btn-primary">Edit</button>
                    </router-link>
                    <button v-on:click="deleteData(item.id,index)" class="btn btn-danger">Delete</button>
                </td>
            </tr>
            </tbody>
        </table>

    </div>
</template>
<script>
import axios from 'axios';

export default {
    name   : "CategoryPage",
    data() {
        return {
            data              : [],
            pagination        : [],
            search_title      : "",
            search_description: "",
        }
    },
    created() {
        this.getFirstData()
    },
    methods: {
        getFirstData() {
            axios.get('../api/category', {headers: {Authorization: `Bearer ${localStorage.getItem('token')}`}}).then((response) => {
                this.data = response.data.items
            })
        },
        getFilterData() {
            axios.get('../api/category/' + this.search_title, {
                headers: {Authorization: `Bearer ${localStorage.getItem('token')}`}
            }).then((response) => {
                this.data = response.data.items
            })
        },
        deleteData(id, index) {
            if(confirm('Are you sure?')) {
                axios.delete('../api/category/' + id, {headers: {Authorization: `Bearer ${localStorage.getItem('token')}`}}).then((response) => {
                    this.data.splice(index, 1)
                }).catch((error) => {
                    console.log(error)
                })
            }
        },
        sortData(attribute, sort) {
            axios.get('../api/category/')
        }
    }
}
</script>
<style>

</style>
