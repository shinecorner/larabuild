<template>
  <div>
    <b-row align-h="start">
      <b-col lg="1">
        <b-button variant="primary" :to="{ name: 'sizes.insert'}">Add Records</b-button>
      </b-col>
    </b-row>
    <b-row>
      <b-col lg="12">
        <b-table ref="table" striped hover :items="recordProvider" :fields="fields">
          <template #cell(actions)="row">
            <b-dropdown variant="primary" text="Actions">
              <b-dropdown-item :to="{ name: 'sizes.edit', params: {id: row.item.id }}">Edit</b-dropdown-item>
              <b-dropdown-divider></b-dropdown-divider>
              <b-dropdown-item @click="onDelete(row.item.id)">Delete</b-dropdown-item>
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
          @change="handlePageChange"
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
      totalRecords: 0,
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
  methods: {
    onDelete (id) {
      // console.log(id)
      this.boxTwo = ''
      this.$bvModal.msgBoxConfirm('Please confirm that you want to delete this record.', {
        title: 'Please Confirm',
        size: 'sm',
        buttonSize: 'sm',
        okVariant: 'danger',
        okTitle: 'YES',
        cancelTitle: 'NO',
        footerClass: 'p-2',
        hideHeaderClose: false,
        centered: true
      })
        .then(value => {
          console.log(id)
          if (value) {
            axios.delete('http://larabuild.local/api/sizes/' + id).then(resp => {
              console.log(resp.data)
              this.$refs.table.refresh()
            }).catch(function (error) {
              console.log(error)
            })
          }
          this.boxTwo = value
        })
        .catch(err => {
          console.log(err)
        })
    },
    // onDelete (id) {
    //   axios.delete('http://larabuild.local/api/sizes/' + id).then(resp => {
    //     console.log(resp.data)
    //     this.$refs.table.refresh()
    //   }).catch(function (error) {
    //     console.log(error)
    //   })
    // },
    async recordProvider () {
      try {
        const response = await axios.get('http://larabuild.local/api/sizes?page=' + this.currentPage)
        this.totalRecords = response.data.total
        this.currentPage = response.data.current_page
        const lastPage = response.data.last_page
        if (this.currentPage > lastPage) {
          this.currentPage = lastPage
          this.$refs.table.refresh()
        }
        return response.data.data
      } catch (error) {
        return []
      }
    },
    handlePageChange (value) {
      this.currentPage = value
      this.$refs.table.refresh()
    }
  }
})
</script>
