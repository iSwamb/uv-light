<template>
  <ion-page>
    <ion-tabs>
      <ion-router-outlet></ion-router-outlet>
      <ion-tab-bar slot="bottom">
        <ion-tab-button tab="tab2" href="/tabs/tab2">
          <ion-icon :icon="home" />
        </ion-tab-button>
          
        <ion-tab-button tab="tab3" href="/tabs/tab3">
          <ion-icon :icon="bag" />
        </ion-tab-button>
        
        <ion-tab-button tab="" href="">
          <ion-icon :icon="person" />
        </ion-tab-button>
      </ion-tab-bar>
    </ion-tabs>
  </ion-page>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import { IonTabBar, IonTabButton, IonTabs, IonIcon, IonPage, IonRouterOutlet } from '@ionic/vue';
import { bag, person, home } from 'ionicons/icons';

export default defineComponent({
  name: 'TabsPage',
  components: { IonTabs, IonTabBar, IonTabButton, IonIcon, IonPage, IonRouterOutlet },
  setup() {
    return {
      bag, 
      person, 
      home,
    }
  }
});
</script>
