<template>
  <div class="container">
    <h1>Ceci est notre composant de démo !</h1>
    <form method="post" v-on:submit.prevent="callApi">
      <label for="city">Ville</label>
      <input type="text" name="city" v-model="city" />
      <input type="submit" value="Valider" />
    </form>
    <div v-if="Object.keys(infoCity).length !== 0">
      <p>{{ infoCity.data }}</p>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      infoCity: {},
      city: "",
    };
  },
  methods: {
    callApi() {
      fetch("/call_city", {
        method: "post",
        body: new FormData(document.querySelector("form")),
      })
        .then((reponse) => reponse.json())
        .then((data) => {
          this.infoCity = data;
          this.city = "";
        });
      /* axios.post("/call_city", { city: "paris" })
     .then((reponse) => reponse.json())
     .then(data => console.log(data));*/
    },
  },
  name: "DemoComponent",
};
</script>