<template>
  <div class="container">
    <div class="music-cds-container">
      <music-cd @pippo="removeCd" v-for="(cd, index) in cds" :key="index" :cd="cd"></music-cd>
    </div>
  </div>
</template>

<script>
import MusicCd from "./MusicCd";

export default {
  components: {
    MusicCd
  },
  data() {
    return {
      cds: []
    };
  },
  mounted() {
    let self = this;

    axios.get("/api/cds").then(function(response) {
      self.cds = response.data;
    });
  },
  methods: {
    removeCd(cd) {
      console.log("rimuovo cd", cd);
    }
  }
};
</script>

<style lang="scss">
.music-cds-container {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
}
</style>