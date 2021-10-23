<template>
  <div>
      <bitch />
      <vue-highcharts :options="chartOptions" ref="pieChart"></vue-highcharts>
    <div v-for="article in articles" :key="article.id" class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{{ article.title }}</h5>
            <p class="card-text">{{ article.body }}</p>
        </div>
    </div>
   </div> 
</template>
<script>
import bitch from './Bitch.vue';

import VueHighcharts from 'vue2-highcharts'
import * as data from "../../assets/data.js";

export default {
    data(){
        return{
            articles:[],
            chartOptions:data.PieData
        }
    },
    created(){
        axios
        .get('http://localhost:8000/api/posts')
        .then(response => (this.articles = response.data))
    },
    components: {
       VueHighcharts,
       bitch
  }
}
</script>
