<template>
  <ion-page>
    <ion-header>
      <ion-toolbar>
          <div class="mt">
            <ion-title>UVLight</ion-title>
          </div>
          <div class="mr mb txt-right">
            <ion-button href="/tabs/tab1" color="danger"><ion-icon :icon="power"></ion-icon></ion-button>
          </div>
      </ion-toolbar>
    </ion-header>
    <ion-content :fullscreen="true">
      <ion-header collapse="condense">
      </ion-header><br><br>
        <div id="commandes" class="container center">
        <h2 class="txt-center mb"><strong>Mes commandes</strong></h2>
          <div class="mr mb txt-right">
            <ion-button href="/tabs/commentaire" color="primary">Ajouter un commentaire</ion-button>
          </div>
          <table id="crud">
            <thead>
              <tr>
                <th>Nom de la commande</th>
                <th>Quantité commandée</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="commande in commandes" :key="commande.id" class="weather-data">
                <td>{{commande.libelle_commande}}</td>
                <td>{{commande.quantite_commande}}</td>
                <td><ion-button href="http://localhost:8100/tabs/tab4" color="success"><ion-icon :icon="chatbubbles"></ion-icon></ion-button></td>
              </tr>
            </tbody>
          </table>
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
  name: 'Tab3Page',
  components: { IonHeader, IonIcon, IonToolbar, IonContent, IonPage },
  data() {
    return {
      commandes: []
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
  .container1 {
    margin-top: 3%;
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

  table#crud {
    text-align:center; 
    margin-left:auto; 
    margin-right:auto; 
  }

  .mt {
    margin-top: 25px;
  }
  .mb {
    margin-bottom: 50px;
  }
  .ml {
    margin-left: 25px;
  }
  .mr {
    margin-right: 25px;
  }


#commandes {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#commandes td, #commandes th {
  border: 1px solid #ddd;
  padding: 8px;
}

#commandes tr:nth-child(even){background-color: #f2f2f2;}

#commandes tr:hover {background-color: #ddd;}

#commandes th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: grey;
  color: white;
}
</style>