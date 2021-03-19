<template>
  <div>
    <b-row align-h="start">
      <b-col lg="1">
        <b-button variant="primary" :to="{ name: 'colors.insert'}">Add Records</b-button>
      </b-col>
    </b-row>
    <b-row>
      <b-col lg="12">
        <b-table striped hover :items="records" :fields="fields">
          <template #cell(actions)="row">
            <b-button size="sm" @click="row.toggleDetails" :to="{ path: '/color/edit/:id'}">
              {{ row.detailsShowing ? 'Hide' : 'Show' }} Edit
            </b-button>
          </template>
        </b-table>
      </b-col>
    </b-row>
    <b-row>
      <b-col lg="6" class="my-1">
        <b-pagination
          v-model="currentPage"
          :total-rows="totalRecords"
          :per-page="perPage"
          aria-controls="my-table"
        ></b-pagination>
      </b-col>
    </b-row>
  </div>
</template>
<script>
import Vue from 'vue'
import axios from 'axios'

export default Vue.extend({
  name: 'Color',
  data () {
    return {
      message: 'destination list',
      perPage: 3,
      currentPage: 1,
      records: [],
      fields: [
        {
          key: 'id',
          label: 'ID',
          sortable: true
        },
        {
          key: 'cloth_color',
          label: 'Color',
          sortable: true
        },
        {
          key: 'actions',
          label: 'Actions'
        }
      ]
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
  },
  computed: {
    totalRecords () {
      return this.records.length
    }
  }
})
</script>
