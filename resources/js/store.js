window.Vue = require('vue').default;
import Vuex from "vuex"

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        message: {
            status: '',
            text: []
        },
        error: false
    },
    getters: {
        getMessage (state) {
            return state.message
        },
        getError (state) {
            return state.error
        }
    },
    mutations: {
        setMessage (state, payload) {
            state.message.status = payload.status
            state.message.text = payload.message
        },
        changeError (state, payload) {
            state.error = payload
        }
    },
    actions: {
        async setOrder ({commit}, payload) {
            await axios.post('/api/createOrder', payload)
                .then((response) => {
                    commit('changeError', false)
                    commit('setMessage', response.data)
                })
                .catch((error) => {
                    const e = {
                        status: 'error',
                        message: error.response.data.errors
                    }
                    commit('setMessage', e)
                    commit('changeError', true)
                })
        }
    }
})
