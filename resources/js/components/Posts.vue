<template>
  <div class="container">
    <h2>Lista dei post</h2>
    <div class="posts_container">
      <div v-for="post in posts" :key="post.id" class="col">
        <div class="post_card">
          <h3 class="post_title">
            {{ post.title }}
          </h3>
          <div class="post_content">
            {{ troncateText(post.content, 50) }}
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Posts",
  data() {
    return {
      posts: [],
    };
  },
  created() {
    this.getPosts();
  },
  methods: {
    getPosts() {
      axios.get("http://127.0.0.1:8000/api/posts").then((resp) => {
        this.posts = resp.data.results;
      });
    },
    troncateText(text, maxCharNumber) {
      if (text.length > maxCharNumber) {
        return text.substr(0, maxCharNumber) + "...";
      }
      return text;
    },
  },
};
</script>


<style>
div.posts_container {
  width: 90%;
  margin: 0 auto;
  display: flex;
  flex-wrap: wrap;
  flex-direction: row;
}

div.post_card {
  width: 260px;
  height: 230px;
  padding: 10px;
  margin: 10px 10px 0 0;
  border: 1px solid black;
}

</style>