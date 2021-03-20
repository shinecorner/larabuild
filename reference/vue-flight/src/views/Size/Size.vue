<template>
  <div>
    <b-row align-h="start">
      <b-col lg="1">
        <b-button variant="primary" :to="{ name: 'sizes.insert'}">Add Records</b-button>
      </b-col>
    </b-row>
    <b-row>
      <b-col lg="12">
        <b-table striped hover :items="records" :fields="fields">
          <template #cell(actions)="row">
            <b-dropdown variant="primary" text="Actions">
              <b-dropdown-item :to="{ name: 'sizes.edit', params: {id: row.item.id }}">Edit</b-dropdown-item>
              <b-dropdown-divider></b-dropdown-divider>
              <b-dropdown-item>Delete</b-dropdown-item>
            </b-dropdown>
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
  name: 'Size',
  data () {
    return {
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
          key: 'cloth_size',
          label: 'Size',
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
    axios.get('http://larabuild.local/api/get-sizes').then(response => {
      if (response.status === 200) {
        this.records = response.data
      }
    }).catch(error => {
      console.log(error)
    })
  },
  methods: {
    onEdit (id) {
      this.edit = this.edit !== id ? id : null
    }
    // onDelete (id) {
    //   axios.delete('/api/products/' + id)
    //     .then(response => {
    //       const index = this.size.findIndex(size => post.id === id) // find the post index
    //       if (~index) // if the post exists in array
    //       {
    //         this.posts.splice(index, 1)
    //       } //delete the post
    //     })
    //
    // }
  },
  computed: {
    totalRecords () {
      return this.records.length
    }
  }
})
</script>
