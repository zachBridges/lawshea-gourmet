<template>
  <section class="section-about">
    <div class="text-center">
      <hr class="flare mod-wide"/>
      
      <div class="about-hero show-for-large" :style="{backgroundImage: 'url('+aboutHeroImage+')'}">
        <div class="about-hero-copy large-up">
          <h2 class="about-hero-headline text-shadow" >Crafted with Passion</h2>
          <h4 class="about-hero-subheadline text-shadow">
            <i class="fas fa-quote-left"></i>
              {{aboutChef.headline}}
            <i class="fas fa-quote-right"></i>
          </h4>
          <div v-html="aboutChef.body"></div>

        </div>
      </div>

      <div class="show-for-small-only">
        <h1 class="">Crafted with Passion</h1>
        <h4 class="about-hero-subheadline">
          <i class="fas fa-quote-left"></i>
          {{aboutChef.headline}}
          <i class="fas fa-quote-right"></i>
        </h4>
      </div>

      <div class="grid-x grid-padding-x hide-for-large">
        <div class="cell large-7 medium-6 small-12">
          <img src="@/assets/chef1-narrow.jpg" style="margin-bottom:3rem;"/>
        </div>
        <div class="cell large-5 medium-6 small-12">
          <div class="show-for-medium-only">
            <h2 class="about-hero-headline">Crafted with Passion</h2>
            <h4 class="about-hero-subheadline">
              <i class="fas fa-quote-left"></i>
              {{aboutChef.headline}}
              <i class="fas fa-quote-right"></i>
            </h4>
          </div>
          <div v-html="aboutChef.body"></div>

        </div>      
      </div>

      <hr class="flare mod-wide"/>
    </div>
  </section>
</template>

<script>
export default {
  name: "About",
  data: function() {
    return {
      aboutHeroImage: require('@/assets/chef1.jpg'),
      aboutChef: {
        headline: `A true dining experience should uplift our spirits and help bring folks closer together.`,
        body: 
        `
        <p class="about-hero-body">
          <span class="first-letter">F</span>rom a young age, <strong>Chef Chris Lawshea</strong> has personified the age-old passion for preparing fine food and nourishing the people around him. Even before he could properly see over the counter, his mother was putting him to work as her sous chef to deliver meals for their family and for their church's congregation. Working his way through the ranks of the kitchen - from a young dishwasher to a seasoned executive chef - Chef Lawshea has honed all of the skills a rising young star in the restaurant industry.
        </p>
        <p class="about-hero-body">
          Always looking for a chance to dish out a fine meal, don't miss your opportunity to <a class="contact-chef" href="#contact">connect with Chef Lawshea</a> so that he and his team can bring fine dining to your table.
        </p>
        `,
      }
    }
  }
};
</script>

<style scoped lang="scss">
</style>
