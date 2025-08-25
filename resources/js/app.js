import * as Popper from '@popperjs/core'
window.Popper = Popper
import 'bootstrap'

import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';
import Clipboard from '@ryangjchandler/alpine-clipboard'

Alpine.plugin(Clipboard)

Livewire.start()

import '../../vendor/power-components/livewire-powergrid/dist/powergrid'


import Swiper from 'swiper'
import { EffectFade, Pagination, Navigation, Autoplay, Thumbs } from 'swiper/modules'

import 'swiper/css'
import 'swiper/css/navigation'
import 'swiper/css/pagination'



import './front/productDesc'
import './front/productPage'
import './front/slider'
