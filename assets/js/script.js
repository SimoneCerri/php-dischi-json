const { createApp } = Vue

createApp
({
    data()
    {
        return{
            url:"api.php",
            error:"",
            discs:[],
            showModal: false,
        }
    },
    methods:
    {
        changeShowModal()
        {
            this.showModal = !this.showModal
            //console.log(this.showModal);
        }
    },
    mounted()
    {
        axios.get(this.url)
        .then(response => 
        {
            //console.log(response);
            this.discs = response.data
        })
    }
}).mount('#app')
