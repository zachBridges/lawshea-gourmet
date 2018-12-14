<template>
  <section class="section-contact" id="contact">
    <form 
      id="myForm" 
      method="POST" 
      role="form"
      action="https://formspree.io/chris31.3rd@gmail.com" 
      @submit="validateBeforeSubmit">
    
      <h2>Contact Us</h2>
      <p>...and let's talk about your next event!</p>

      <label for="name">What's your name?</label>
            <i v-show="errors.has('name')" class="fas fa-exclamation-triangle"></i>
      <span 
        v-show="errors.has('name')"
        class="form-error">
        Please let us know what you call you by</span>
      <input 
        v-model="name"
        v-validate="'required|min:2'"
        type="text" 
        name="name" 
        placeholder="Your name"/>

      <p class="text-center">Please provide either an email address <strong>or</strong> phone number</p>

      <label for="email">What's your email address?</label>
      <i v-show="errors.has('email')" class="fas fa-exclamation-triangle"></i>
      <span 
        v-show="errors.has('email')"
        class="form-error">
        Please provide a valid email address</span>
      <input 
        v-model="email"
        v-validate="'email'"
        type="text" 
        name="email"  
        placeholder="Your email address"/>

      <label for="phone">What's your phone number?</label>
      <i v-show="errors.has('phone')" class="fas fa-exclamation-triangle"></i>
      <span 
        v-show="errors.has('phone')"
        class="form-error">
        Please provide a valid phone number</span>
      <input 
        v-model="phone"
        v-validate="'min:10'"
        type="tel" 
        name="phone"  
        placeholder="Your phone number"/>

      <label>Send us a message if you'd like:</label>
      <textarea placeholder="Enter your message here" name="message"></textarea>
        
      <span 
        v-show="isNotContactable"
        class="form-error">
        Please provide either an email address <strong>or</strong> phone number</span><br/>
      <span 
        v-show="isNotNamed"
        class="form-error">
      Please provide your name</span><br/>
      
      <button type="submit" class="button">Contact Lawshea Gourmet</button>
      
    </form>
  </section>
</template>

<script>

export default {
  name: "Contact",
  data: function(){
    return {
      email: null,
      name: null,
      phone: null,
      isNotContactable: null,
      isNotNamed: null
    }
  },
  methods: {
    validateBeforeSubmit: function(event){
      this.isNotContactable = !this.email && !this.phone;     
      this.isNotNamed = !this.name;
      const isValidated = this.errors.items.length === 0;

      if(!this.isNotContactable && !this.isNotNamed && isValidated){
        return;
      } else{
        event.preventDefault();
      }
    },
  },
};
</script>

<style scoped lang="scss">
</style>
