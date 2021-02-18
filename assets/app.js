/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

// start the Stimulus application
import './bootstrap';

import Vue from 'vue'


import Form from "./components/Form"

new Vue ({
    el: "#Form",
    components:{
        Form
    },
    template:"<Form/>"
})
import Card from "./components/Card"

new Vue({
    render(h) {
      return h(Card, {
        props: {
          meteo: this.$el.getAttribute('meteo'),
        },
      })
    },
    template:"<Card/>"
  }).$mount('#Card')

/*
new Vue ({
    el: "#Card",
    components:{
        Card
    },
    template:"<Card/>"
})*/