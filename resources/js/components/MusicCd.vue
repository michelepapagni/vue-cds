<template>
  <div class="music-cd">
    {{ cd.title }} - {{ cd.author }}
    <strong>{{ cd.year }}</strong>
    <img :src="cd.poster" />

    <button @click="chiamiamoPapa">Clicca</button>
  </div>
</template>

<script>
export default {
  props: ["cd"],
  methods: {
    chiamiamoPapa() {
      this.$emit("pippo", this.cd);
    }
  }
};
</script>

<style lang="scss">
.music-cd {
  background: lighten(#1d2d3b, 5%);
  width: 200px;
  padding: 20px;
  border-radius: 10px;
  margin: 20px;
  color: white;
  img {
    margin: 20px 0;
    border-radius: 10px;
    width: 100%;
  }
}
</style>