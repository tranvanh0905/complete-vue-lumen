<template>
    <div id="home-page">
        <div class="container site-content">
            <div class="row">
                <div class="col-md-12 newspaper-x-content newspaper-x-with-sidebar">
                    <div id="newspaper_x_widget_posts_a-4" class="widget newspaper_x_widgets">
                        <div id="newspaper_x_widget_posts_c-2" class="widget newspaper_x_widgets">
                            <h3 class="widget-title">
                                <span>Latest News</span></h3>
                            <div class="row newspaper-x-layout-c-row">

                                <div class="col-md-4 col-sm-6 col-xs-12" v-for="(item, index) in items">
                                    <div class="newspaper-x-blog-post-layout-c">
                                        <div class="newspaper-x-title">
                                            <h4>
                                                <a href="2017/05/10/maecenas-tincidunt-posuere-quam-eu-consectetur-justo-5/index.html">{{ item.title }}</a>
                                            </h4>
                                        </div>
                                        <span class="newspaper-x-category">
                                            <a href="category/news/index.html">News</a>
                                        </span>
                                        <span class="newspaper-x-date">{{ item.created_at }}</span>
                                        <div class="newspaper-x-content">
                                            {{ item.content }}
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';

export default {

    name   : "home-page",
    data() {
        return {
            items: [],
        }
    },
    created() {
        this.getData();
    },
    methods: {
        getData() {
            axios.get('./front-end/list-data-news').then((response) => {
                this.items = response.data.items;
            })
        },

    }
}
</script>
<style></style>
