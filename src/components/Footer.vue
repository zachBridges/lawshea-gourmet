<template>
  <footer :style="{'background-image': 'url('+footerBackground+')' }">
    <img src="@/assets/logo-lg.png" class="footer-logo"/>
    <h2>Lawshea Gourmet Catering Services</h2>
    <p>Servicing Metro Detroit and Southeast Michigan</p>
    <p class="contact-link">
      <i class="fas fa-phone-square"></i> 
      <a href="tel:+12485646003">(248) 564-6003</a> 
    </p>
    <p class="contact-link">
      <i class="fas fa-envelope"></i> 
      <a href="mailto:chris@lawsheagourmet.com">chris@lawsheagourmet.com</a>
    </p>
  </footer>
</template>

<script>
export default {
  name: "Footer",
  data: function() {
    return {
      footerBackground: require('@/assets/cheers-footer.jpg'),
    };
  },
};
</script>

<style scoped lang="scss">
</style>
