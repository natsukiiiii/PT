// Vue.use(window['MavonEditor'])

// new Vue({
//    el: '#app',
// })

// import Vue from 'vue'
// import mavonEditor from 'mavon-editor'
// import 'mavon-editor/dist/css/index.css'
// // use
// Vue.use(mavonEditor)
// new Vue({
//     'el': '#main',
//     data() {
//         return { value: '' }
//     }
// })

import mavonEditor from 'mavon-editor'
import 'mavon-editor/dist/css/index.css'
Vue.use(window['mavon-editor'])
var app = new Vue({
    el: '#app'
})