import Axios from "axios";
import Vue from "vue";
import Components from "./components";
import {stringify} from 'qs';
import "./app.scss";

// Axios setup --------------------------------------------
Axios.defaults.headers.common['Accept'] = 'application/json';
Axios.defaults.headers.common['X-CSRF-Token'] = Craft.csrfToken;
Axios.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded';

const AxiosInstance = Axios.create({
  transformRequest: [
    function(data) {
      return stringify(data)
    }
  ]
});

// Vue setup ----------------------------------------------
Vue.config.productionTip = false;
Vue.prototype.$axios = AxiosInstance;

new Vue({
  el: "#app",
  delimiters: ["${", "}"]
});
