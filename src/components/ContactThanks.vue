<template>
  <div id="thanksModal" :class="{active: isThanksModalActive, reveal: true}">
    <div class="reveal-body">
      <h1>Thank you</h1>
      <p class="lead">We'll talk soon</p>
      <p>An Lawshea Gourmet team member will respond to your request during business hours, 9am - 5pm, Monday through Friday.</p>
      <button class="button" @click="closeModal">Okay</button>

      <button class="close-button" aria-label="Close modal" type="button" @click="closeModal">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  </div>
</template>

<script>
export default {
  name: "ContactThanks",
  data: function(){
    return {
      isThanksModalActive: false,
    }
  },
  methods: {
    checkForContactThanks(){
        const querystring = this.getQuerystring();
        console.log(querystring)
        if (querystring.contactThanks == 'yes') {
          this.showContactThanks();
        }
    },
    closeModal(){
      this.isThanksModalActive = false;
    },
    getQuerystring() {
      const url = location.href;
      const qs = url.substring(url.indexOf('?') + 1).split('&');
      let result = {};
      for (let i = 0; i < qs.length; i++) {
        qs[i] = qs[i].split('=');
        result[qs[i][0]] = decodeURIComponent(qs[i][1]);
      }
      return result;
    },
    showContactThanks(){
      this.isThanksModalActive = true;
    }
  },
  mounted: function(){
    console.log('checkin')
    this.checkForContactThanks();
  }, 
};
</script>

<style lang="scss" scoped>
  .reveal {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
  }
    .reveal-body{
      position: relative;
    }
      .close-button{
        position: absolute;
        top: 0;
        right: 0.333rem;
      }
  .reveal.active{
    display: block;
  }
</style>

