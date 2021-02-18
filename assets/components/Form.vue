<template>
  <div id="Form" class="form">
    <input v-model="message" placeholder="Renseigner une ville" />
      <p>Message is: {{ message }}</p> 
    <button type="submit" class="button">Soumettre</button>
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
export default {
  name: "Form",
  data() {
    return {
      message: "",
    };
  },
};
</script>