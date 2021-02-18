<template>
  <div id="Form" class="form">
    <input v-model="message" placeholder="Renseigner une ville" />
    <p>Message is: {{ message }}</p>
    </div>
</template>

<style>
.demo {
  font-family: sans-serif;
  border: 1px solid #eee;
  border-radius: 2px;
  padding: 20px 30px;
  margin-top: 1em;
  margin-bottom: 40px;
  user-select: none;
  overflow-x: auto;
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
}
</script>