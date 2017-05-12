<head>
    <!-- vue.js 套件 -->
    <script src="https://vuejs.org/js/vue.js"></script>
    <!-- vue-resource.min.js 套件 -->
    <script src="https://cdn.jsdelivr.net/vue.resource/1.3.1/vue-resource.min.js"></script>

    <style type="text/css">
    #app {
        padding: 20px;
        height: 300px;
    }
    </style>
</head>
<div id="app" >
    <div  v-repeat="you">
        <p>message :</p>
        <h1>{{you}}</h1>
    </div>
    <div   v-repeat="my">
        <h1>{{my}}<h1>
    </div>
</div>
<script>
window.app = new Vue({
    el: '#app',
    data: {
        currentBranch: 'master',
        you:null,
        my:null,
        urlinfo: 'json.php',
    },
    created: function() {
        this.getdata()
    },
    methods: {
        getdata : function () {
            var resource = this.$resource(this.urlinfo)

            resource.get().then((response) => {
                this.you = response.data[0].a,
                this.my = response.data[1].a
            })
            .catch(function(response) {
                this.you = 'error:'+response
            })
        }
    }
});
</script>
