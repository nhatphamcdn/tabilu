import axios from 'axios';
import * as type from '@client/store/mutation-type';

// state
export const state = {
  products: [],
}

// getters
export const getters = {
  products: state => state.products,
}

// mutations
export const mutations = {
  [type.FETCH_PRODUCTS_SUCCESS] (state, { products }) {
    state.products = products.data;
  },

  [type.FETCH_PRODUCTS_FAILURE] (state) {
    state.products = [];
  },
}

// actions
export const actions = {
  async fetchProducts ({ commit }) {
    try {
      const { data } = await axios.get('/api/products');

      commit(type.FETCH_PRODUCTS_SUCCESS, { products: data })
    } catch (e) {
      commit(type.FETCH_PRODUCTS_FAILURE)
    }
  },
}