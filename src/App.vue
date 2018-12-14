<template>
  <div id="app">
    <div class="wrapper">
      <div class="content">
        <ContactThanks/>
        <Hero/>
        <div class="hero-mission-spacer"></div>
        <Mission/>
        <div class="hero-mission-spacer"></div>
        <Services/>
        <Menu/>
        <About/>
        <Contact/>
        <Footer/>
      </div>
    </div>
  </div>
</template>

<script>
import {
  About,
  Contact,
  ContactThanks,
  Footer,
  Header,
  Hero,
  Menu,
  Mission,
  Services
} from "./components"; 

export default {
  name: "app",
  components: {
    About,
    Contact,
    ContactThanks,
    Footer,
    Header,
    Hero,
    Menu,
    Mission,
    Services
  },
};
</script>
