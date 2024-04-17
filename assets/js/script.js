const { createApp } = Vue

createApp
({
    data()
    {
        return{
            url:"api.php",
            error:"",
            discs:[],
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
