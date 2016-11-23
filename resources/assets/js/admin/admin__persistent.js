// --------------------------------------------------------------------------------
// Testing
// --------------------------------------------------------------------------------
var $ = jQuery = require('jquery');

import '../libs/foundation/foundation.core';

import '../libs/foundation/foundation.util.box';
import '../libs/foundation/foundation.util.keyboard';
import '../libs/foundation/foundation.util.triggers';
import '../libs/foundation/foundation.util.mediaQuery';
import '../libs/foundation/foundation.util.motion';
import '../libs/foundation/foundation.util.timerAndImageLoader';
import '../libs/foundation/foundation.util.nest';
import '../libs/foundation/foundation.util.touch';

// import '../libs/foundation/foundation.dropdown';
// import '../libs/foundation/foundation.reveal';
// import '../libs/foundation/foundation.tabs';


// import '../libs/foundation/foundation.abide';
// import '../libs/foundation/foundation.accordion';
// import '../libs/foundation/foundation.accordionMenu';
// import '../libs/foundation/foundation.core';
import '../libs/foundation/foundation.drilldown';
import '../libs/foundation/foundation.dropdown';
import '../libs/foundation/foundation.dropdownMenu';
import '../libs/foundation/foundation.equalizer';
// import '../libs/foundation/foundation.interchange';
// import '../libs/foundation/foundation';
// import '../libs/foundation/foundation.magellan';
// import '../libs/foundation/foundation.offcanvas';
// import '../libs/foundation/foundation.orbit';
import '../libs/foundation/foundation.responsiveMenu';
import '../libs/foundation/foundation.responsiveToggle';
import '../libs/foundation/foundation.reveal';
// import '../libs/foundation/foundation.slider';
import '../libs/foundation/foundation.sticky';
import '../libs/foundation/foundation.tabs';
import '../libs/foundation/foundation.toggler';
import '../libs/foundation/foundation.tooltip';

import $ from 'jquery';

// --------------------------------------------------------------------------------
// Document Ready
// --------------------------------------------------------------------------------
$(document).foundation();

var element = $('#example-menu');
var dims = Foundation.Box.GetDimensions(element);

console.log('|-- admin/admin__persistent.js... loaded');
console.log(dims);
