<template>
    <div id="form-category">
        <form @submit.prevent="addData">
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
    name   : "FormCategory",
    data() {
        return {
            data_form: {
                name       : "",
                description: "",
            }
        }
    },
    methods: {
        addData() {
            axios.post('../api/category', {
                title      : this.data_form.name,
                description: this.data_form.description,
            }, {
                headers: {Authorization: `Bearer ${localStorage.getItem('token')}`},
            }).then((response) => {
                alert('Add complete')
                this.$router.push('/category');
            })
        }
    }
}
</script>
<style></style>
