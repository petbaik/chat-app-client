import * as types from './mutation-types';
export default {
    [types.MESSAGE_ADD](state,payload) {
        state.messages = [ ...state.messages, payload ];
    },
    [types.MESSAGES_ADD](state,payload) {
        state.messages = payload;
    }
}