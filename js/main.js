window.addEventListener('DOMContentLoaded', pageLoader)
import { calendar } from './calendar.js ';
import { myValidation } from './profile.js ';

async function pageLoader() {

    calendar();
    myValidation();
};