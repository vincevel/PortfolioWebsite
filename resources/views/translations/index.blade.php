<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Deepl Loader</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<style>
	body {
	  height: 100%;
	}

	textarea {
	  width: 100%;
	  height: 100vh;
	}

</style>

</head>

<body>


	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


	<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

	<div id="app">

		<h1>Translate</h1>
 
		<section class="translationarea">
			<div class="container">
				<div class="row">
					<div class="col-md-6 width"><textarea v-model="omessage" ></textarea></div>
					<div class="col-md-6"><textarea v-model="tmessage"></textarea></div>
				</div>
				<div class="row">
					<button @click="getData">Translate </button>
				</div>
			</div>
		</section>
	
		
	</div>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<script>
	  const { createApp } = Vue

	  createApp({
	    data() {
	      return {
	        message: 'Hello Vue!',
	        omessage: 'Paste Text Here',
	        tmessage: 'Translated Text Here'
	      }
	    },
	    methods: {
		    getData() {


		      axios.post("https://www.vmvcore.com/api/translate",{
		      	text: this.omessage,
		      	target_lang: "fr"
		      }, {
		      	Authorization: "DeepL-Auth-Key dc3fc9d3-9a8a-dc59-b8dc-b658bb8f5a23:fx"
		      })
		      .then (response => {
		        //console.log(response.data)
		        this.tmessage = response.data.translations[0].text;
		      })
		      .catch (e => {
		        this.errors.push(e)
		      })
		    },
		}
	  }).mount('#app')
	</script>
</body>
</html>
