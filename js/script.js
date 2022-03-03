console.log('vue ok', Vue);

Vue.config.devtools = true;

const app = new Vue({
    el: '#root',
    data: {
        discs: [],
        baseUri: 'http://localhost/php-ajax-dischi/api/discs'
    },
    mounted() {
        axios.get(this.baseUri).then(res => {
            this.discs = res.data;
        }).catch(err => { console.error(err) });
    }
})