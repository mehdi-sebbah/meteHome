<template>
<div class="base">
    <div class="headerInfo">
        <div class="cloud">{{cloud}}</div>
       <div class="humidity">{{humidity}}</div>
       <div class="wind">{{wind}}</div>
    </div>
    <div class="bodyInfo">
        <div class="temperature">{{temperature}}</div>
        <div class="state">{{state}}</div>
    </div>
</div>


</template>

<style>

</style>

<script>
export default {
    data() {
        return {
            cloud: "nuageux",
            humidity:"40%",
            wind:"70%",
            temperature:"7°C",
            state:"state"
        }
    }
}
</script>