<template>
  <ion-page>
    <ion-header class="bg-app">
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
      </ion-header><br><br>
      <div class="container center">
        <section>
          <h3>Aller voir mes commandes :</h3><br><br>
          <ion-button color="medium" href="tabs/tab3">Mes commandes</ion-button><br><br>
        </section>
      </div>
    </ion-content>
  </ion-page>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import { IonPage, IonHeader, IonToolbar, IonTitle, IonContent, IonIcon } from '@ionic/vue';
import ExploreContainer from '@/components/ExploreContainer.vue';
import { power } from 'ionicons/icons';

export default defineComponent({
  name: 'Tab2Page',
  components: { IonHeader, IonToolbar, IonTitle, IonContent, IonPage, IonIcon },
  setup () {
    return {
      power,
    }
  }
});
</script>


<style>

  .bg-app {
    background-color: #3F3D56;
  }

  .txt-right {
    text-align: right;
  }
  .center {
    text-align: center;
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
</style>
