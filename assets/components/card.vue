<template>
  <div class="base">
    <div class="headerInfo">
      <div class="cloud">
        <img class="cloud" :src="cloud" alt="" />
        <p>{{ meteo.clouds.all }}%</p>
      </div>

      <div class="wind">
        <img :src="wind" alt="" />
        <p>{{ meteo.wind.speed }} m/s</p>
      </div>

      <div class="humidity">
        <img :src="humidity" alt="" />
        <p>{{ meteo.main.humidity }}%</p>
      </div>
    </div>
    <div class="bodyInfo">
      <p class="temperature">{{Math.trunc(meteo.main.temp) }}°C</p>
      <div class="state">
        <p class="city">
          {{ meteo.name }},<span>{{ meteo.sys.country }}</span>
        </p>
        <p class="description">{{ meteo.weather[0].description }}</p>
      </div>
      <img :src="url" alt="" />
    </div>
  </div>
</template>

<style>
@import url("https://fonts.googleapis.com/css2?family=Spartan:wght@600;700&display=swap");

.base {
  display: flex;
  flex-direction: column;
  width: 350px;
  height: auto;
  box-shadow: 2px 10px 15px #3333;
  border-radius: 10px;
  padding: 30px 30px;
  margin: 20px auto 50px auto;
  background-color: #8dd2d9;
}

.headerInfo {
  font-family: "Spartan", sans-serif;
  display: flex;
  justify-content: space-between;
}

.cloud {
  display: flex;
  align-items: center;
}

.cloud p {
  margin-left: 10px;
  margin-right: 10px;
  color: white;
}

.humidity {
  display: flex;
  align-items: end;
}

.humidity p {
  margin-left: 10px;
  color: white;
}

.wind {
  display: flex;
  align-items: end;
}

.wind p {
  color: white;
  margin-right: 10px;
  margin-left: 10px;
}

.bodyInfo {
  font-family: "Spartan", sans-serif;
  text-align: center;
  margin: auto auto;
}

.temperature {
  font-size: 3rem;
  color: white;
  padding: 30px 20px 10px 20px;
  margin-bottom: 0;
}

.city {
  color: white;
  font-size: 1rem;
  text-transform: uppercase;
}

.bodyInfo img{
  margin: 50px 0;
}

.description {
  color: white;
  opacity: 0.8;
}
</style>

<script>
export default {
  name: "Card",

  props: ["meteo"],

  data() {
    return {
      url: "",
      cloud: "/icons/cloud.png",
      wind: "/icons/wind.png",
      humidity: "/icons/humidity.png",
    };
  },

  methods: {
    logoWeather() {
      console.log("tet");
      switch (this.meteo.weather[0].description) {
        case "nuageux":
          this.url = "/icons/icons_desc/nuageux.png";
          break;
        case "ciel dégagé":
          this.url = "/icons/icons_desc/sun.png";
          break;
        case "légère pluie":
          this.url = "/icons/icons_desc/rain.png";
          break;
        case "chutes de neige":
          this.url = "/icons/icons_desc/snow.png";
          break;
        case "peu nuageux":
          this.url = "/icons/icons_desc/cloudy.png";
          break;
        case "pluie modérée":
          this.url = "/icons/icons_desc/storm.png";
          break;
        case "brume":
          this.url = "/icons/icons_desc/foggy.png";
          break;
        case "couvert":
          this.url = "/icons/icons_desc/heavy-rain.png";
          break;
        case "brouillard":
          this.url = "/icons/icons_desc/foggy.png";
          break;
        case "partiellement nuageux":
          this.url = "/icons/icons_desc/cloudy.png";
          break;
        case "poussière":
          this.url = "/icons/icons_desc/sandstorm.png";
          break;
        case "légères chutes de neige":
          this.url = "/icons/icons_desc/snow.png";
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