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
            data      : [],
            pagination: [],
        }
    },
    created() {
        this.getFirstData()
    },
    methods: {
        getFirstData() {
            axios.get('./api/category', {headers: {Authorization: `Bearer ${localStorage.getItem('token')}`}}).then((response) => {
                this.pagination['page-count'] = response.data.data.per_page
                console.log(response)
                this.data = response.data.data.data
            })
        }
    }
}
</script>
<style>

</style>
