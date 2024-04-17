const { createApp } = Vue

createApp
    ({
        data() {
            return {
                url: "api.php",
                error: "",
                discs: [],
                showModal: false,
                discModal:[],
            }
        },
        methods:
        {
            changeShowModal(index) {
                this.showModal = !this.showModal
                //console.log(this.showModal);
                this.discModal = this.discs[index]
                //console.log(this.discModal);
            },
            closeModal()
            {
                this.showModal = !this.showModal
                this.discModal = []
            }
        },
        mounted() {
            axios.get(this.url)
                .then(response => {
                    //console.log(response);
                    this.discs = response.data
                })
                .catch((err) => {
                    console.log(err.message);
                    this.error = err.message
                })
        }
    }).mount('#app')
