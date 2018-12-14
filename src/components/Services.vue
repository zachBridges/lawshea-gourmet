<template>
  <section class="section-services">
    <carousel 
    :autoplay="true"
    :autoplayTimeout="10000"
    :loop="true"
    :dots="true"
    :items="1"
    :nav="false">
      <div   
        v-for="slider in content.slider"
        :key="slider.name">
        <div class="grid-x">
          <div class="cell large-6 medium-12 small-12">
            <img :src="require(`@/assets/${slider.image}`)" class="services-hero"/>
          </div>
          <div class="cell large-6 medium-12 small-12 text-center">
            <div class="services-body">
              <h2 class="services-top-title">Catering</h2>
              <p class="services-title">{{slider.name}}</p>
              <hr class="flare"/>
              <ul class="services-list">
                <li v-for="(eventExample, index) in slider.eventExamples" :key="eventExample.index">
                  <i :class="`list-disc ${index}`"></i>
                  {{eventExample}}
                </li>
              </ul>
              <p class="services-description" v-html="slider.description">
              
              </p>
              <contact-button></contact-button>
            </div>
          </div>        
        </div>
      </div>
    </carousel>

    <hr class="flare mod-wide"/>

    <div class="text-center">
      <h2>In any event</h2>
      <p><strong class="color-red">Lawshea Gourmet</strong> can provide the style of service that fits you best:</p>
      <div class="grid-x justify-center">
        <div class="cell large-5 medium-5 small-12">
          <ul class="service-types">
            <li
              v-for="(service) in content.serviceTypes"
              :key="service">
              <i class="fas fa-adjust"></i>
              {{service}}
            </li>
          </ul>
        </div>
      </div>
    </div>
    
    <hr class="flare mod-wide"/>
    
  </section>
</template>

<script>
import carousel from 'vue-owl-carousel';
import ContactButton from '@/reusable-components/contact-button';

import Content from '@/content/services';

export default {
  name: "Services",
  data: function(){
    return{
      content: Content
    }
  },
  components: { carousel, ContactButton },
};
</script>

