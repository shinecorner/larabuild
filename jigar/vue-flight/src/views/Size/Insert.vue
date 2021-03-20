<template>
  <div>
    <b-form inline @submit.prevent="OmSubmitForm">
      <label class="sr-only" for="inline-form-input-name">Size</label>
      <b-form-input
        id="inline-form-input-name"
        class="mb-2 mr-sm-2 mb-sm-0"
        placeholder="Enter Your Size"
        v-model="form.cloth_size"
      ></b-form-input>
      <b-button type="submit" variant="primary">Submit</b-button>
    </b-form>
  </div>
</template>
<script>
import Vue from 'vue'
import axios from 'axios'
import router from '../../router'

export default Vue.extend({
  name: 'Size',
  data () {
    return {
      form: {
        cloth_size: ''
      }
    }
  },
  methods: {
    OmSubmitForm () {
      // console.log(this.color);
      axios.post('http://larabuild.local/api/sizes', this.form).then(resp => {
        console.log(resp.data)
      }).catch(function (error) {
        console.log(error)
      }).then(() => {
        this.form.cloth_size = ''
        router.push({ name: 'size.list' })
      })
    }
  }
})
</script>
