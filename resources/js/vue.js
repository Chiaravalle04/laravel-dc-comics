const { createApp } = Vue

  createApp({

    data() {

      return {

        verify: false,
        id: null,

      }

    },

    methods: {

        openModal(productId) {

            this.verify = true;
            this.id = productId;

        },

        closeModal() {
            
            this.verify = false;
            this.id = null;

        }

    }

}).mount('#app');