// import then needed Font Awesome functionality
import { library, dom } from '@fortawesome/fontawesome-svg-core';
// import the Facebook and Twitter icons
import { faFacebook, faInstagram } from '@fortawesome/free-brands-svg-icons';

// add the imported icons to the library
library.add(faFacebook, faInstagram);

// tell FontAwesome to watch the DOM and add the SVGs when it detects icon markup
dom.watch();