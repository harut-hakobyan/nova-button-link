Nova.booting((Vue, router, store) => {
  Vue.component('index-button-link', require('./components/IndexField'))
  Vue.component('detail-button-link', require('./components/DetailField'))
  Vue.component('form-button-link', require('./components/FormField'))
})
