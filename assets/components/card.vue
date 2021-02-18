<template>
  <div class="base">
    <div class="headerInfo">
      <div class="cloud">{{ cloud }}</div>
      <div class="humidity">{{ humidity }}</div>
      <div class="wind">{{ wind }}</div>
    </div>
    <div class="bodyInfo">
      <div class="temperature">{{ temperature }}</div>
      <div class="state">{{ state }}</div>
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
  font-size: 2rem;
  margin-top: 10px;
  margin-bottom: 20px;
}

.cloud::before {
  content: "🌞";
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
  data() {
    return {
      cloud: "ensoleillé",
      humidity: " 17%",
      wind: " 18%",
      temperature: "7°C",
      state: "⛅",
    };
  },
};
</script>