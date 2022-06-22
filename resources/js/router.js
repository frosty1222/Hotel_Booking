import MainView from './components/Main'
import AboutView from './components/About'
import * as VueRouter from 'vue-router';
import ReservationView from './components/Reservation'
import EventView from './components/Event'
import RoomView from './components/Room'
import ContactView from './components/Contact'
import EventDetailView from './components/EventDetail'
const routes =[
    {
        path:"/",
        component: MainView,
        name:"main",
     },
    {
       path:"/about",
       component: AboutView,
       name:"about",
    },
    {
        path:"/reservation/:id",
        component: ReservationView,
        name:"reservation",
     },
     {
        path:"/room",
        component: RoomView,
        name:"room",
     },
     {
        path:"/event",
        component: EventView,
        name:"event",
     },
     {
        path:"/contact",
        component:ContactView,
        name:"contact",
     },
     {
        path:"/eventdetail/:id",
        component:EventDetailView,
        name:"eventdetail",
     },
]
const router = VueRouter.createRouter({
    routes,
    history: VueRouter.createWebHashHistory(),
});
export default router;
