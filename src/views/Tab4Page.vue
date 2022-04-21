<template>
  <ion-page>
    <ion-header>
      <ion-toolbar>
          <div class="mt">
            <ion-title>UVLight</ion-title>
          </div>
          <div class="mb mr txt-right">
            <ion-button href="/tabs/tab1" color="danger"><ion-icon :icon="power"></ion-icon></ion-button>
          </div>
      </ion-toolbar>
    </ion-header>
    <ion-content :fullscreen="true">
      <ion-header collapse="condense">
      </ion-header>
        <div class="container">
          <div v-for="commande in commandes" :key="commande.id">
            <h2 class="txt-center mb"><strong>Détails de la commande :</strong> {{commande.libelle_commande}}</h2>
            <p class="mb"><strong>N° de la commande :</strong> {{commande.id}} </p>
            <p><strong>Les commentaires :</strong> {{commande.message}}<br></p>
          </div>
            <br><br><ion-button expand="block" href="/tabs/tab3" color="secondary">Retour aux commandes</ion-button>
        </div>
    </ion-content>
  </ion-page>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import { IonPage, IonHeader, IonIcon, IonToolbar, IonContent } from '@ionic/vue';
import ExploreContainer from '@/components/ExploreContainer.vue';
import { power } from 'ionicons/icons';

// importation de la dépendance axios
import axios from 'axios';

export default defineComponent({
  name: 'Tab4Page',
  components: { IonHeader, IonIcon, IonToolbar, IonContent, IonPage },
  data() {
    return {
      commandes: [],
    };
  },

  created() {
    axios
      .get("http://localhost/apirest/commande.php")
      .then(response => (this.commandes = response.data));
  },

  setup () {
    return {
      power,
    }
  }
});


</script>


<style>

  .container {
    margin: 5%;
  }
  .bg-app {
    background-color: #3F3D56;
  }

  .txt-right {
    text-align: right;
  }
  .txt-center {
    text-align: center;
  }

  .mt {
    margin-top: 25px;
  }
  .mb {
    margin-bottom: 40px;
  }
  .ml {
    margin-left: 25px;
  }
  .mr {
    margin-right: 25px;
  }
</style>