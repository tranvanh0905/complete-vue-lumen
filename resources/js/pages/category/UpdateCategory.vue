<template>
    <div id="form-category">
        <form @submit.prevent="updateData">
            <div class="form-group">
                <label>Name Category</label>
                <input type="text" class="form-control" v-model="data_form.name" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" class="form-control" v-model="data_form.description" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</template>
<script>
import axios from 'axios';

export default {
    name   : "UpdateCategory",
    data() {
        return {
            data_form: {
                name       : "",
                description: "",
            }
        }
    },
    created() {
        this.getFirstData();
    },
    methods: {
        getFirstData() {
            let id_category = this.$route.params.id;
            axios.get('../api/category/update/' + id_category, {
                headers: {Authorization: `Bearer ${localStorage.getItem('token')}`},
            }).then((response) => {
                console.log(response)
                this.data_form.name        = response.data.items.title;
                this.data_form.description = response.data.items.description
            })
        },
        updateData() {
            let id_category = this.$route.params.id;
            axios.put('../api/category/update/' + id_category, {
                    title      : this.data_form.name,
                    description: this.data_form.description,
                },
                {
                    headers: {Authorization: `Bearer ${localStorage.getItem('token')}`},
                }).then((response) => {
                alert("Updated complete");
                this.$router.push('/category')
            })
        }
    }
}
</script>
<style></style>
