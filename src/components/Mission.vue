<template>
  <section 
    class="section-mission" 
    :style="{'background-image':'url('+missionBackground+')'}">
    <div class="mission-body">
      <h1 class="text-shadow">Our catering solutions</h1>
      <p class="text-shadow"> 
        provide events in Metro Detroit 
        with quality food at affordable prices.
      </p>
    </div>


  </section>
</template>

<script>
export default {
  name: "Mission",
  data: function() {
    return {
      missionBackground: require('@/assets/mission-bg.jpg'),
    }
  }
};
</script>
