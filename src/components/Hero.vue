<template>
  <div class="hero-container">
    <div 
      class="hero-content" 
      :style="{'background-image': 'url('+heroBackground+')' }">

      <img src="@/assets/logo-hero.png" class="hero-logo"/>

      <video 
        @loadeddata="videoPlaying" 
        class="hero-video" 
        playsinline autoplay muted loop>
        <source :src="videoSource" type="video/mp4">
      </video>
    </div>
    <!-- <div class="grid-container">
      <div class="grid-x grid-margin-x justify-center">
        <div class="cell large-8">
          <div class="text-center">
            <h1 class="hero-subtitle">Custom catering solutions</h1>
          </div>
        </div>
      </div>
    </div>
 -->
  </div>
</template>

<script>
export default {
  name: "Hero",
  data: function() {
    return {
      heroBackground: require('@/assets/cheers-800.jpg'),
      videoSource: '',
      isVideoPlaying: false,
    };
  },
  beforeMount: function() {
    const windowWidth = document.documentElement.clientWidth;
    this.getVideoSource(windowWidth);
  },
  methods: {
    getVideoSource(windowWidth){
      let dimension;
      if(windowWidth > 1000) {
        dimension = 1280
      } else if (windowWidth <= 480) {
        dimension = 480;
      } else {
        dimension = 640;
      }
      this.videoSource = require(`@/assets/video/various-food-${dimension}.mp4`);
    },
    videoPlaying(){
      this.heroBackground = '';
    }
  }
};
</script>
