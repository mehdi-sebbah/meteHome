<!--<template>
  <div id="Form" class="form">
    <input v-model="message" placeholder="Renseigner une ville" />
      <p>Message is: {{ message }}</p> 
    <button type="submit" class="button">Soumettre</button>
  </div>
</template> -->

<template>
  <div class="main">
    <div class="form">
      <form method="post" v-on:submit.prevent="callApi">
        <h1>MÉTÉHOME</h1>
        <label for="city">Entrer une ville</label>
        <input class="input_form" type="text" name="city" v-model="city" />
        <input type="submit" class="button" value="Valider" />
      </form>
      <div v-if="Object.keys(infoCity).length !== 0">
        <card v-bind:meteo="infoCity.data"></card>
      </div>
    </div>
  </div>
</template>

<style>
.form {
  margin-top: 30px;
  font-family: "Spartan", sans-serif;
  display: flex;
  flex-direction: column;
  height: 100%;

}

h1 {
  text-align: center;
  color: white;
  font-size: 2rem;
}
form {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
   width: 350px;
  height: auto;
  margin: auto;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 2px 10px 15px #3333;
  background-color: #8dd2d9;
}

form label {
  color: white;
  font-size: 2rem;
}

.input_form {
  font-size: 1.5rem;
  margin: 15px 0;
  border: 2px solid white;
  border-radius: 20px;
  background-color: transparent;
  color: white;
  outline: none;
}

.button {
  padding: 10px 25px;
  font-size: 1.5rem;
  border: none;
  border-radius: 15px;
  background-color: white;
  color: #8dd2d9;
  cursor: pointer;
  outline: none;
  transition: 0.2s;
}

.button:hover {
  opacity: 0.5;
  transition: 0.2s;
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
