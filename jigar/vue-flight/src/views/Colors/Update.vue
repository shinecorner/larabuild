<template>
  <div>
    <b-form inline @submit.prevent="OmSubmitForm">
      <label class="sr-only" for="inline-form-input-name">Color Name</label>
      <b-form-input
        id="inline-form-input-name"
        class="mb-2 mr-sm-2 mb-sm-0"
        placeholder="Enter Your Color Name"
        v-model="form.cloth_color"
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
  name: 'Color',
  data () {
    return {
      form: {
        id: this.$router.currentRoute.params.id,
        cloth_color: ''
      }
    }
  },
  methods: {
    OmSubmitForm () {
      // console.log(this.color);
      axios.post('http://larabuild.local/api/save-color', this.form).then(resp => {
        console.log(resp.data)
      }).catch(function (error) {
        console.log(error)
      }).then(() => {
        this.form.cloth_color = ''
        router.push({ name: 'colors.list' })
      })
    }
  },
  created () {
    console.log(this.form.id)
    axios.get('http://larabuild.local/api/fetch-color/' + this.form.id).then(resp => {
      if (resp.status === 200) {
        this.form.cloth_color = resp.data.cloth_color
      }
    }).catch(function (error) {
      console.log(error)
    })
  }
})
</script>
