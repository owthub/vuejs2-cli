// importing components
import Home from './views/Home.vue'
import Contact from './views/Contact.vue'
import About from './views/About.vue'
import Services from './views/Services.vue'
import ShowBlog from './views/ShowBlog.vue'
import SingleBlog from './views/SingleBlog.vue'

// routes
export default [
  { path:"/",component: Home },
  { path:"/about",component: About },
  { path:"/contact",component: Contact },
  { path:"/services",component: Services },
  { path:"/blogs",component: ShowBlog },
  { path:"/blog/:id",component: SingleBlog },
];
