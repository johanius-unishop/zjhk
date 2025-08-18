import * as Popper from '@popperjs/core'
window.Popper = Popper
import 'bootstrap'
import 'bootstrap/dist/js/bootstrap.bundle';
import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';
import Clipboard from '@ryangjchandler/alpine-clipboard'

Alpine.plugin(Clipboard)

Livewire.start()

import '../../vendor/power-components/livewire-powergrid/dist/powergrid'

import '../js/front'
