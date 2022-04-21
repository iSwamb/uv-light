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
      </ion-header><br>
        <div id="commandes" class="container">
            <h2 class="txt-center"><strong>Mettre un commentaire pour l'article : </strong></h2>
            <br><br>
              <ion-item>
                <ion-label>Commandes à commenter</ion-label>
                  <ion-select>
                    <ion-select-option value="">Sélectionner une commande</ion-select-option>
                    <div v-for="commande in commandes" :key="commande.id">
                      <ion-select-option value={{commande.id}}>{{commande.libelle_commande}}</ion-select-option>
                    </div>
                  </ion-select>
              </ion-item>
              <br>
              <ion-item>
                  <ion-label position="stacked">Commentaire</ion-label>
                  <ion-textarea placeholder="Mettre un commentaire"></ion-textarea>
              </ion-item><br>
              <ion-button expand="block" href="/tabs/tab3" color="primary">Poster le commentaire</ion-button>
            <br><br><ion-button expand="block" href="/tabs/tab3" color="secondary">Retour aux commandes</ion-button>
        </div>
    </ion-content>
  </ion-page>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import { IonPage, IonHeader, IonIcon, IonToolbar, IonContent, IonLabel, IonItem } from '@ionic/vue';
import ExploreContainer from '@/components/ExploreContainer.vue';
import { power } from 'ionicons/icons';

// importation de la dépendance axios
import axios from 'axios';

export default defineComponent({
  name: 'Tab3Page',
  components: { IonHeader, IonIcon, IonToolbar, IonContent, IonPage, IonLabel, IonItem },
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

    .container {
        margin: 10%;
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
    width:100px;
  }

  .mt {
    margin-top: 25px;
  }
  .mb {
    margin-bottom: 25px;
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