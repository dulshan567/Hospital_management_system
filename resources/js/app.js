/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

                   
                    
const messageElement =document.getElementById('messages');
const username_input =document.getElementById('username');

const message_input =document.getElementById('message_input');

const message_form =document.getElementById('messageform');

let url =window.location;
let urlNew =new URL(url);
let username =urlNew.searchParams.get('name');

messageform.addEventListener('submit',function(e){
    e.preventDefault();
    

    if (message_input.value !='') {
        axios({
            method:'post',
            url:'/send_message',
            data:{
                username:username,
                message:message_input.value
            }
        })
       
    }
    window.Echo.Channel('laravelchat')
    .listen('.chatting', (res)=>{
        messageElement.innerHTML += '<div class="username"><strong>'+ res.username + ':</strong>'+ res.message + '</div>';
});
message_input.value='';
  
})



//window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
/*
const apps = new Vue({
    el: '#app',
});

import axios from 'axios';
import { has } from 'lodash';
import { createApp } from 'vue';
import chat from './components/Chat.vue';
const app =createApp({});
app.component('chat',chat);
app.mount("#app");*/
