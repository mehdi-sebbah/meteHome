<template>
  <div class="base">
    <div class="headerInfo">
      <img class="cloud" :src="url" alt="" />
      <div class="humidity">{{ meteo.main.humidity }}%</div>
      <div class="wind">{{ meteo.wind.speed }}</div>
    </div>
    <div class="bodyInfo">
      <div class="temperature">{{ meteo.main.temp }}</div>
      <div class="state">{{ meteo.name }}</div>
    </div>
  </div>
</template>

<style>
@import url("https://fonts.googleapis.com/css2?family=Spartan:wght@600;700&display=swap");

.base {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  display: flex;
  flex-direction: column;
  width: 650px;
  height: 500px;
  border: 3px solid black;
  padding: 20px 20px;
  border-radius: 15px;
  margin: auto auto;
}

.headerInfo {
  font-family: "Spartan", sans-serif;
  display: flex;
  justify-content: space-around;
  /*font-size: 2rem;*/
  margin-top: 10px;
  margin-bottom: 20px;
}

.cloud::before {
  content: "";
  background-image: "../img/nuage.svg";
}
.humidity::before {
  content: "💧";
}
.wind::before {
  content: "💨";
}

.bodyInfo {
  font-family: "Spartan", sans-serif;
  text-align: center;
  margin: auto auto;
}

.temperature {
  font-size: 6rem;
  padding: 20px 20px;
}

.state {
  font-size: 6rem;
}
</style>

<script>
export default {
  name: "Card",

  props: ["meteo"],

  data() {
    return {
      url: "",
    };
  },

  methods: {
    logoWeather() {
      console.log("tet");
      switch (this.meteo.weather[0].description) {
        case "couvert":
          this.url = "/icons/cloud.png";
          break;
        case "ciel dégagé":
          console.log("ciel clair");
          break;
        case "légère pluie":
          console.log("quelques nuages");
          break;
        case "chutes de neige":
          console.log("nuages dispersés");
          break;
        case "peu nuageux":
          console.log("solei");
          break;
        case "pluie modérée":
          console.log("pluie pluie");
          break;
        case "brume":
          console.log("pluie");
          break;
        case "couvert":
          console.log("orage");
          break;
        case "brouillard":
          console.log("neiger");
          break;
        case "partiellement nuageux":
          console.log("pluie");
          break;
        case "poussière":
          console.log("orage");
          break;
        case "légères chutes de neige":
          console.log("neiger");
          break;
      }
    },
  },

  watch: {
    meteo: {
      immediate: true,
      handler(newValue, oldValue) {
        console.log(newValue);
        console.log(newValue);
        console.log(this.meteo.name);
        this.logoWeather();
      },
    },
  },
};
</script>