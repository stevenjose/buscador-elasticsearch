require('./bootstrap');
import { createApp } from 'vue'

import SearchComponent from  './components/SearchComponent'

createApp({
	components: {
		SearchComponent,
	}
}).mount('#app');
