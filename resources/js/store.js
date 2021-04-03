window.Vue = require('vue').default;
import Vuex from "vuex"

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        message: {
            status: '',
            text: ''
        },
        order: null
    },
    getters: {
        getMessage (state) {
            return state.message
        }
    },
    mutations: {
        setMessage (state, payload) {
            state.message.status = payload.status
            state.message.text = payload.message
        }
    },
    actions: {
        async setOrder ({commit}, payload) {
            await axios.post('/api/createOrder', payload).then((response) => {
                commit('setMessage', response.data)
            })
        }
    }
})
