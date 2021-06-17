<template>
	<div class="container">
    <div class="row justify-content-center mt-4">
      <div id="searcher" class="col-sm-8 mb-4 mt-4">
        <input v-model="query" type="text" name="q" class="form-control" placeholder="Buscador"/>
      </div>
      <div v-for="article in articles" class="col-sm-8">
          <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title" v-html="highlight(article.title, query)" ></h5>
                <p v-html="highlight(article.tags, query)"></p>
            </div>
          </div>
      </div>
    </div>
  </div>
</template>

<script>
	export default {
    data() {
      return {
        query: "",
        articles: {}
      }
    },
    watch: {
      query: function(val){
        if(val.length > 2){
          fetch('/search?q='+ this.query)
          .then(response => response.json())
          .then(data => {
            this.articles = [];
            this.articles = data;
          });
        }

				if(val == ''){
					fetch('/search')
          .then(response => response.json())
          .then(data => {
            this.articles = [];
            this.articles = data;
          });
				}
      }
    },
    methods: {
      highlight: function(text, query){
				return text.replace(query.trim(), '<span class="highlight">' + query + '</span>');
      }
    },
		mounted() {
				fetch('/search')
				.then(response => response.json())
				.then(data => {
					this.articles = [];
					this.articles = data;
				});
		}
	}

</script>

<style>
.highlight {
    background-color : yellow;
}

</style>
