<template>
  <div>
    <table width="100%" border="1">
      <tr v-for="record in records" :key="record.id">
        <td>
          {{ record.cloth_size }}
        </td>
      </tr>
    </table>
  </div>
</template>
<script>
import Vue from 'vue'
import axios from 'axios'

export default Vue.extend({
  name: 'Size',
  data () {
    return {
      records: []
    }
  },
  created () {
    axios.get('http://larabuild.local/api/get-sizes').then(response => {
      if (response.status === 200) {
        this.records = response.data
      }
    }).catch(error => {
      console.log(error)
    })
  }
})
</script>
