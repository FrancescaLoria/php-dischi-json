const { createApp } = Vue;

createApp({
  data() {
    const dischi = [];
    return { dischi };
  },
  mounted() {
    axios
      .get("http://localhost/boolean/php-dischi-json/server.php")
      .then((resp) => {
        console.log(resp);
        this.dischi = resp.data.results;
      });
  },
}).mount("#app");
