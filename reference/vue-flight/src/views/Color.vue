<template>
  <div>
    <b-table
      striped
      hover
      :items="records"
      :fields="fields"
      :per-page="perPage"
      :current-page="currentPage"
    >
    </b-table>
    <b-row>
      <b-col lg="6" class="my-1">
        <b-form-group
          label="Filter"
          label-for="filter-input"
          label-cols-sm="3"
          label-align-sm="right"
          label-size="sm"
          class="mb-0"
        >
          <b-input-group size="sm">
            <b-form-input
              id="filter-input"
              v-model="filter"
              type="search"
              placeholder="Type to Search"
            ></b-form-input>

            <b-input-group-append>
              <b-button :disabled="!filter" @click="filter = ''">Clear</b-button>
            </b-input-group-append>
          </b-input-group>
        </b-form-group>
      </b-col>
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
  name: 'Destination',
  data () {
    return {
      message: 'destination list',
      perPage: 3,
      currentPage: 2,
      records: [],
      // fields: ['id', 'cloth_color'],
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
