<template>
  <div class="container">
    <h1>APP VUE</h1>

    <div class="post_container">

      <h2>Lista Post</h2>
      <ul>
        <li v-for="post in posts" :key="post.id"> 
          <h4>{{post.title}}</h4>
          <h5>Contenuto:</h5>
          <p>{{post.content}}</p>
          <h5>Categoria:</h5>
          <p>{{post.category.name}}</p>
        </li>
      </ul>

    </div>

  </div>
</template>

<script>
export default {
  name: 'app',
  data() {
    return {
      apiUrl: "http://127.0.0.1:8000/api/posts",
      posts: ""
    }
  },
  mounted() {
    this.callPostsAPI()
  },
  methods: {
    callPostsAPI(){
      axios.get(this.apiUrl)
      .then(r => {
        this.posts = r.data.posts;
        console.log('Risposta API Post---->',this.posts);
      })
    },
  },

}
</script>

<style>

</style>