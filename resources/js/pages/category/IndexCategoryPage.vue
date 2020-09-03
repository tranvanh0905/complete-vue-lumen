<template>
    <div id="category-page">
        <table class="table">
            <caption>List of users</caption>
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td></td>
                <td><input v-on:keyup="getFilterData" v-model="search_title" class="form-control" type="text"></td>
                <td><input v-on:keyup="getFilterData" v-model="search_description" class="form-control" type="text">
                </td>
            </tr>
            <tr v-for="item in data">
                <th scope="row">{{ item.id }}</th>
                <td>{{ item.title }}</td>
                <td>{{ item.description }}</td>
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
    watch  : {
        data(after, before) {
            this.getFilterData();
        }
    },
    methods: {
        getFirstData() {
            axios.get('./api/category', {headers: {Authorization: `Bearer ${localStorage.getItem('token')}`}}).then((response) => {
                this.pagination['page-count'] = response.data.data.per_page
                this.data                     = response.data.data.data
            })
        },
        getFilterData() {
            axios.get('./api/category/' + this.search_title + '/' + this.search_description, {
                headers: {Authorization: `Bearer ${localStorage.getItem('token')}`}
            }).then((response) => {
                this.data = response.data.data.data;
            })
        }
    }
}
</script>
<style>

</style>
