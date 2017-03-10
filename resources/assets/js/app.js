import './bootstrap';
import router from './routes';

new Vue({
    el: '#app',
    router,
    
    data: {
        guest: true,
        user: {
            username: '',
            id: 0
        },
        open_login: false,
        open_register: false
    },
    
    methods: {
        openLoginModal() {
            this.guest = false;
            this.user.username = 'TestUser';
            this.user.id = 1;
        },
        openRegisterModal() {
            
        },
        logoutUser() {
            this.guest = true;
            this.user.username = '';
            this.user.id = 0;   
        }
    }
});
