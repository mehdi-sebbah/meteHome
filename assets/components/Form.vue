<!--<template>
  <div id="Form" class="form">
    <input v-model="message" placeholder="Renseigner une ville" />
      <p>Message is: {{ message }}</p> 
    <button type="submit" class="button">Soumettre</button>
  </div>
</template> -->

<template>
  <div class="main">
    <form method="post" v-on:submit.prevent="callApi">
      <h1>MÉTÉHOME</h1>
      <div class="main_form">
        <label for="city">Entrer une ville</label>
        <input class="input_form" type="text" name="city" v-model="city" />
        <input type="submit" class="button" value="Valider" />
      </div>
    </form>
    <div class="main_card" v-if="Object.keys(infoCity).length !== 0">
      <card v-bind:meteo="infoCity.data"></card>
    </div>
  </div>
</template>

<style>
.main {
  display: flex;
  align-items: center;
  height: 100%;
}

h1 {
  text-align: center;
  color: #8dd2d9;
  font-size: 3rem;
  font-weight: 300;
}
form {
  display: flex;
  flex-direction: column;
  justify-content: space-evenly;
  align-items: center;
  text-align: center;
  width: 300px;
  height: 100%;
  padding: 0 20px;
  box-shadow: 2px 10px 15px #3333;
  background-color: #fff;
}

form label {
  color: #8dd2d9;
  font-size: 2rem;
}

.input_form {
  font-size: 1.5rem;
  margin: 30px 0;
  border: 2px solid #8dd2d9;
  border-radius: 20px;
  background-color: transparent;
  color: #8dd2d9;
  outline: none;
}

.button {
  padding: 10px 25px;
  font-size: 1.5rem;
  border: none;
  border-radius: 15px;
  background-color: #8dd2d9;
  color: #fff;
  cursor: pointer;
  outline: none;
  transition: 0.2s;
}

.button:hover {
  opacity: 0.5;
  transition: 0.2s;
}

.main_card{
  display: flex;
  align-items: center;
  height: 100%;
  width: 100%;
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
