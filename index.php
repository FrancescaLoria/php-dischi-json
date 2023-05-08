<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP-DISCHI-JSON</title>
    <!-- bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <!-- Vue js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- axios -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"
      integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <!-- css -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div id="app">
      <header class="ms_header">
        <div class="container-fluid h-100">
          <div class="row h-100">
            <div class="col-3 logo h-100">
              <img src="./logo/logo.png" alt="logo" />
            </div>
          </div>
        </div>
      </header>
      <main>
        <div class="ms_container">
          <div class="row">
            <div class="ms_card" v-for="(disco, index) in dischi" :key="index">
              <div class="img-container">
                <img :src="disco.poster" :alt="disco.title" />
              </div>
              <div class="info-container">
                <div class="title">{{ disco.title }}</div>
                <div class="author">{{ disco.author }}</div>
                <div class="year">{{ disco.year }}</div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>

    <script src="js/script.js"></script>
  </body>
</html>
