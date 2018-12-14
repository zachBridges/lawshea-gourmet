<template>
  <section class="section-menu">
    <div class="menu-hero" :style="{backgroundImage: 'url('+menuHero+')'}">
      <h1 class="menu-hero-title text-shadow position-center-xy">From Our Menu</h1>
    </div>

    <div class="menu-fundamentals text-center">
      <h3>Mindfully Crafted Atop 4 Fundamentals:</h3>
      <div class="grid-x small-up-2 medium-up-4">
        <div 
        class="cell menu-fundamental"
        v-for="fundamental in fundamentals"
        :key="fundamental.image"
        :style="{backgroundImage: 'url(' + require(`@/assets/menu/fundamentals/${fundamental.image}`) + ')' }">
          <span class="position-center-xy">{{fundamental.name}}</span>
        </div>
      </div>
    </div>

    <p class="text-center">Contact us about a complimentary tasting to ensure our flavors perfectly match your venue.</p>

    <carousel 
      :autoplay="true"
      :autoplayTimeout="7000"
      :loop="true"
      :dots="true"
      :items="1"
      :nav="false"
      :autoHeight="true"
      id="menu-slider">
      <div v-for="categoryGroup in menu" :key="categoryGroup.category" class="menu-container">
        <h2 class="text-center menu-category">{{categoryGroup.category}}</h2>
        <table class="">
          <tbody>
            <tr v-for="menuItem in categoryGroup.items" :key="menuItem.name">
              <td><strong>{{menuItem.name}}</strong></td>
              <td>{{menuItem.description}}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </carousel>
  

  </section>
</template>

<script>
import carousel from 'vue-owl-carousel';
import Content from '@/content/menu';

export default {
  name: "Menu",
  data: function(){
    return{
      menu: Content.menu,
      menuHero: require('@/assets/menu-hero.jpg'),
      fundamentals: Content.fundamentals,
    }
  },
  components: { carousel }
};
</script>
