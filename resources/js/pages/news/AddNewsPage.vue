<template>
    <div id="form-category">
        <form @submit.prevent="addData">
            <div class="form-group">
                <label>Category</label>
                <select class="form-control" v-model="data_form.category_id">
                    <option value="">Please choose your category</option>
                    <option v-for="category in categories" v-bind:value="category.id">
                        {{ category.title }}
                    </option>
                </select>
            </div>
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" v-model="data_form.title">
            </div>
            <div class="form-group">
                <label>Content</label>
                <textarea class="form-control" v-model="data_form.content"></textarea>
            </div>
            <div class="form-group">
                <label>Image</label>
                <input v-on:change="onImageChange" type="file">
            </div>
            <div class="form-group">
                <label>Url</label>
                <input type="text" class="form-control" v-model="data_form.url">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</template>
<script>
import axios from 'axios';

export default {
    name   : "AddNewsPage",
    data() {
        return {
            data_form : {
                title      : "",
                content    : "",
                image      : "",
                url        : "",
                category_id: "",
            },
            categories: [],
        }
    },
    created() {
        this.getCategory()
    },
    methods: {
        getCategory() {
            axios.get('./api/category', {
                headers: {Authorization: `Bearer ${localStorage.getItem('token')}`},
            }).then((response) => {
                this.categories = response.data.items;
            })
        },
        onImageChange(e) {
            let files = e.target.files || e.dataTransfer.files;
            if(!files.length) {
                return;
            }
            this.createImage(files[0]);
        },
        createImage(file) {
            let reader    = new FileReader();
            let vm        = this;
            reader.onload = (e) => {
                vm.data_form.image = e.target.result;
            };
            reader.readAsDataURL(file);
        },
        addData() {
            axios.post('./api/news', {
                title      : this.data_form.title,
                content    : this.data_form.content,
                category_id: this.data_form.category_id,
                url        : this.data_form.url,
            }, {
                headers: {Authorization: `Bearer ${localStorage.getItem('token')}`},
            }).then((response) => {
                console.log(response)
                // alert('Add complete')
                // this.$router.push('/category');
            })
        },
    }
}
</script>
<style></style>
