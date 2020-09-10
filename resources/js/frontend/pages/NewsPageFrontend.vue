<template>
    <div id="news-page-frontend">
        <div id="content" class="site-content container">
            <div class="row">
                <header class="col-xs-12">
                    <h3 class="page-title"><span>News</span></h3></header>
            </div>
            <div class="row">
                <div class="col-xs-12 newspaper-x-archive-first-posts">
                    <div class="row">
                        <div class="col-md-6" v-for="(item, index) in items">
                            <article id="post-76" class="post-76 post type-post status-publish format-standard has-post-thumbnail hentry category-news">
                                <header class="entry-header">
                                    <div class="newspaper-x-image">
                                        <a href="https://colorlib.com/newspaper-x/2017/05/10/maecenas-tincidunt-posuere-quam-eu-consectetur-justo-5/" rel="bookmark"><img width="550" height="360" src="https://colorlib.com/newspaper-x/wp-content/uploads/sites/15/2017/05/01_latestnews_article_01-550x360.jpg" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt=""/></a>
                                    </div>
                                    <h4 class="entry-title">
                                        <a href="https://colorlib.com/newspaper-x/2017/05/10/maecenas-tincidunt-posuere-quam-eu-consectetur-justo-5/" rel="bookmark">{{ item.title }}</a>
                                    </h4>
                                    <div class="newspaper-x-post-meta">
                                        <div>
                                            <span class="newspaper-x-category"> <a href="https://colorlib.com/newspaper-x/category/news/">News</a></span><span class="newspaper-x-date">{{ item.created_at }}</span>
                                        </div>
                                    </div>
                                </header>
                                <div class="entry-content">
                                    <p>{{ item.content }}</p>
                                </div>
                                <footer class="entry-footer">
                                </footer>
                            </article>
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
    name   : 'news-page-frontend',
    data() {
        return {
            items: [],
        };
    },
    created() {
        this.getData();
    },
    methods: {
        getData() {
            axios.get('./front-end/list-data-news-detail').then((response) => {
                this.items = response.data.items;
            })
        }
    }
}
</script>
<style></style>
