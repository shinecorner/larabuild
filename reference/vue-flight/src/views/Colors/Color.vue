<template>
  <div>
    <b-row align-h="start">
      <b-col lg="2">
        <b-button variant="primary" :to="{ name: 'colors.insert'}">Add Records</b-button>
      </b-col>
      <b-col lg="6">
        <input type="text" v-model="params.search_text" />
      </b-col>
    </b-row>
    <b-row>
      <b-col lg="12">
        <b-table ref="table" striped hover :items="recordProvider" :fields="fields" :sort-by.sync="params.sort_column"
                 :sort-desc.sync="params.sort_direction">
          <template #cell(actions)="row">
            <b-dropdown variant="primary" text="Actions">
              <b-dropdown-item :to="{ name: 'colors.edit', params: {id: row.item.id }}">Edit</b-dropdown-item>
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
          v-model="params.page"
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
      params: {
        page: 1,
        sort_column: '',
        sort_direction: true,
        search_text: ''
      },
      totalRecords: 0,
      filterText: '',
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
          // console.log(id)
          if (value) {
            axios.delete('http://larabuild.local/api/colors/' + id).then(resp => {
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
    //
    //   axios.delete('http://larabuild.local/api/colors/' + id).then(resp => {
    //     console.log(resp.data)
    //     this.$refs.table.refresh()
    //   }).catch(function (error) {
    //     console.log(error)
    //   })
    // },
    async recordProvider () {
      try {
        const response = await axios.get('http://larabuild.local/api/colors', {
          params: this.params
        })
        this.totalRecords = response.data.total
        this.params.page = response.data.current_page
        const lastPage = response.data.last_page
        if (this.params.page > lastPage) {
          this.params.page = lastPage
          this.$refs.table.refresh()
        }
        return response.data.data
      } catch (error) {
        return []
      }
    }
  },
  watch: {
    // filterText: function (val) {
    //   console.log(val)
    //   this.$refs.table.refresh()
    // },
    // sortBy: function (val) {
    //   this.params.sort_column = val
    // },
    // sortDesc: function (val) {
    //   this.params.sort_direction = (val) ? 'desc' : 'asc'
    // }
    params: {
      handler: (val) => {
        console.log(val)
        this.$refs.table.refresh()
      },
      deep: true
    }
  }
})
</script>
