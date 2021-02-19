<!--<template>
  <div id="Form" class="form">
    <input v-model="message" placeholder="Renseigner une ville" />
      <p>Message is: {{ message }}</p> 
    <button type="submit" class="button">Soumettre</button>
  </div>
</template> -->

<template>
  <div>
    <div class="form">
      <form method="post" v-on:submit.prevent="callApi">
        <label for="city">Ville</label>
        <input type="text" name="city" v-model="city" />
        <input type="submit" class="button" value="Valider" />
      </form>
      <div v-if="Object.keys(infoCity).length !== 0">
        <p>{{ infoCity.data }}</p>
        <card v-bind:meteo="infoCity.data"></card>
      </div>
    </div>
  </div>
</template>

<style>
.form {
  display: flex;
  flex-direction: row-reverse;
  height: 50px;
}
.button2 {
  width: 250px;
  height: 200px;
  border: 3px solid black;
  padding: 20px 20px;
  border-radius: 15px;
}
</style>

<script>
import Card from "./Card";
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
          //console.log(this.infoCity);
          this.city = "";
        });

      /* axios.post("/call_city", { city: "paris" })
     .then((reponse) => reponse.json())
     .then(data => console.log(data));*/
    },
  },

  name: "Form",

  components: {
    Card: Card,
  },
};
</script>
