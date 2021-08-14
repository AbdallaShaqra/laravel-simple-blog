<template>
  <div>
    <div v-for="article in articles" :key="article.id" class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{{ article.title }}</h5>
            <p class="card-text">{{ article.body }}</p>
        </div>
    </div>
   </div> 
</template>
<script>
export default {
    data(){
        return{
            articles:[]
        }
    },
    created(){
        axios
        .get('http://localhost:8000/api/posts')
        .then(response => (this.articles = response.data))
    }
}
</script>
