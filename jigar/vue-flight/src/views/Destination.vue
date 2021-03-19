<template>
  <div>
    <table width="100%" border="1">
      <tr v-for="record in records" :key="record.id">
        <td>{{ record.cloth_color }}</td>
      </tr>
    </table>
  </div>
</template>
<script>
import Vue from 'vue'
import axios from 'axios'

export default Vue.extend({
  name: 'Destination',
  data () {
    return {
      message: 'destination list',
      records: []
    }
  },
  created () {
    console.log('xyz')
    axios.get('http://larabuild.local/api/get-colors').then(resp => {
      if (resp.status === 200) {
        this.records = resp.data
      }
    }).catch(function (error) {
      console.log(error)
    })
  }
})
</script>
