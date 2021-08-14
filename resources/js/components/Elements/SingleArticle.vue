<template>
    <div class="py-5">
        <form>
            <div class="form-group">
                <label>Tite</label>
                <input type="text" class="form-control" v-model="form.title">
            </div>
            <div class="form-group">
                <label>Body</label>
                <textarea type="text" rows="10" class=" form-control"  v-model="form.body"></textarea>
            </div>
            <button v-on:click="addPost()" class="btn btn-primary">Add</button>
        </form>   
    </div>
</template>
<script>
export default {
    data () {
        return {
            form: {
            title: '',
            body: ''
            }
        }
    },
    methods: {
           addPost() {
            axios.post('http://localhost:8000/api/add', this.form)
            .then(function(response){
                console.log(response);
            })
        },
    }
}
</script>

<style scoped>
 textarea{
     resize:none
 }
</style>