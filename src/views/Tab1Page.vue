<template>
  <div id="bg-app">
    <ion-page>
      <ion-content :fullscreen="true">
        <ion-header collapse="condense">
        </ion-header>
        <ExploreContainer />
      </ion-content>
    </ion-page>
  </div>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import { IonPage, IonContent } from '@ionic/vue';
import ExploreContainer from '@/components/ExploreContainer.vue';

export default  defineComponent({
  name: 'Tab1Page',
  components: { ExploreContainer, IonContent, IonPage }
});
</script>


<style>
  #bg-app {
    background-color: #3F3D56;
  }
</style>