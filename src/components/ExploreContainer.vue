<template>
  <div id="container">
    <strong>{{ name }}</strong>
    <ion-title class="txt-center" size="large"><strong>UVLight - Connexion</strong></ion-title><br><br>
    
    <ion-item>
      <ion-label position="floating">Identifiant</ion-label>
      <ion-input></ion-input>
    </ion-item><br><br>
    <ion-item>
      <ion-label position="floating">Mot de passe</ion-label>
      <ion-input type="password"></ion-input>
    </ion-item><br><br><br>
    
    <section>
      <ion-button expand="block">Connexion</ion-button>
    </section>
  </div>
</template>

<script lang="ts">
import { defineComponent } from 'vue';

export default defineComponent({
  name: 'ExploreContainer',
  props: {
    name: String
  }
});
</script>

<style scoped>
#container {
  margin: 10%;
}

.txt-center {
  text-align: center;
}

#container strong {
  font-size: 20px;
  line-height: 26px;
}

#container p {
  font-size: 16px;
  line-height: 22px;
  color: #8c8c8c;
  margin: 0;
}

#container a {
  text-decoration: none;
}

</style>
