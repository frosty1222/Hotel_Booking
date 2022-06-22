require('./bootstrap');
import { createApp } from 'vue'
import VueCarousel from 'vue-carousel';
import AboutView from './components/About'
import HomeView from './components/Home'
import Header from './components/Header'
import ReservationView from './components/Reservation'
import EventView from './components/Event'
import RoomView from './components/Room'
import MainView from './components/Main'
import FooterView from './components/Footer'
import ContactView from './components/Contact'
import EventDetailView from './components/EventDetail'
import VueSweetalert2 from 'vue-sweetalert2';
import router from './router';
import axios from 'axios';
const app = createApp({})
app.component('main-view', MainView);
app.component('header-view', Header);
app.component('home-view', HomeView);
app.component('about-view', AboutView);
app.component('footer-view', FooterView);
app.component('contact-view', ContactView);
app.component('reservation-view', ReservationView);
app.component('room-view', RoomView);
app.component('event-view', EventView);
app.component('event-detail-view', EventDetailView);
app.use(router,VueCarousel,axios,VueSweetalert2)
app.mount('#app')
