import Vue from 'vue'
import VueRouter, { RouteConfig } from 'vue-router'
import Home from '../views/Home.vue'
import Color from '../views/Colors/Color.vue'
import ColorInsert from '../views/Colors/Insert.vue'
import ColorEdit from '../views/Colors/Update.vue'
import Size from '../views/Size/Size.vue'
import SizeInsert from '../views/Size/Insert.vue'
import SizeEdit from '../views/Size/Update.vue'
Vue.use(VueRouter)

const routes: Array<RouteConfig> = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/color',
    name: 'colors.list',
    component: Color
  },
  {
    path: '/color/insert',
    name: 'colors.insert',
    component: ColorInsert
  },
  {
    path: '/color/edit/:id',
    name: 'colors.edit',
    component: ColorEdit
  },
  {
    path: '/size',
    name: 'size.list',
    component: Size
  },
  {
    path: '/size/insert',
    name: 'sizes.insert',
    component: SizeInsert
  },
  {
    path: '/size/edit/:id',
    name: 'sizes.edit',
    component: SizeEdit
  },
  {
    path: '/about',
    name: 'About',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/About.vue')
  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
