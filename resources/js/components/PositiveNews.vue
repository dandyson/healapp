<template>
<div>
    <h1>Positive.News</h1>
    <!-- row opened-->
    <div class="row">
        <div class="row row-sm">
            <div class="d-flex justify-content-center" v-if="positiveNewsLoading === true">
                <div class="spinner-border text-primary m-1" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <div v-for="(item, index) in positiveNewsData" :key="index" class="col-md-4 col-lg-4">
                <div class="card">
                    <a target="_blank" :href="item['link']">
                        <img alt="Image" class="img-fluid card-img-top" :src=" item['image'] ">
                    </a>
                    <div class="card-body ">
                        <a target="_blank" :href="item['link']">
                            <h3 class="card-title news-headline">{{ item['title'] }}</h3>
                        </a>
                        <p class="card-text">{{ item['description'] }}</p>
                    </div>
                </div>
            </div><!-- col-4 -->

        </div>
    </div>
    <!-- row closed -->
</div>
</template>

<script>
import axios from "axios";
import cheerio from "cheerio";

export default {
    props: {
        routes: Object,
    },

    data() {
        return {
            positiveNewsData: '',
            positiveNewsLoading: true,
        }
    },

    mounted() {
        axios.get(this.routes.newsFetch)
            .then((res) => {
                this.positiveNewsData = res.data.data["positive-news"];
                this.positiveNewsLoading = false;
            })
            .catch(error => console.error(error));
    },

}
</script>

<style>

</style>
