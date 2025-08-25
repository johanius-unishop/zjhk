import * as Popper from '@popperjs/core'
window.Popper = Popper
import 'bootstrap'

import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';
import Clipboard from '@ryangjchandler/alpine-clipboard'

Alpine.plugin(Clipboard)

Livewire.start()

import '../../vendor/power-components/livewire-powergrid/dist/powergrid'


// app.js
import Swiper from 'swiper';
import { Navigation, Pagination, EffectFade, Scrollbar, A11y, Keyboard, Mousewheel, Controller, Autoplay, Lazy, Thumbs, Virtual, HashNavigation, History, Zoom } from 'swiper/modules';

// Подключение стилей Swiper
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';

Swiper.use([EffectFade, Pagination]);

window.Swiper = Swiper;
window.EffectFade = EffectFade;
window.Pagination = Pagination;
window.Navigation = Navigation;
window.Autoplay = Autoplay;
window.Thumbs = Thumbs;





