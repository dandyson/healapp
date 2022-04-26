<template>
  
</template>

<script>
import axios from "axios";
import cheerio from "cheerio";

export default {

    mounted() {
        axios
        .get("https://www.positive.news/", {
            headers: {
                "Access-Control-Allow-Origin": "*"
            }
        })
        .then(res => {

          const $ = cheerio.load(res.data);
          const span = $(".card__title");
          console.log(span);
        }).catch((err) => {
            console.log(err);
        });
    },

}
</script>

<style>

</style>