const daySelect = document.getElementById('birthdateDay');
const monthSelect = document.getElementById('birthdateMonth');
const yearSelect = document.getElementById('birthdateYear');

function isLeapYear(year) {
    return year % 4 === 0 && (year % 100 !== 0 || year % 400 === 0);
};


const calendar = {
    "Январь": 31,
    "Февраль": isLeapYear(yearSelect) ? 29 : 28,
    "Март": 31,
    "Апрель": 30,
    "Май": 31,
    "Июнь": 30,
    "Июль": 31,
    "Август": 31,
    "Сенябрь": 30,
    "Октябрь": 31,
    "Ноябрь": 30,
    "Декабрь": 31,

    getDay: function (month) {
        return this[month];
    },

    getMonth: function (month) {
        return Object.keys(this);
    }
};

// console.log(calendar.getDay("Февраль"));
console.log(calendar.getMonth("Февраль"));

// console.log(Object.entries(calendar));

// for (let month in calendar) {
//     console.log(month, calendar[month]);
// }

// (function populateMonth(){
//     for(let month in monthsDays) {
//         const option = document.createElement('option');
//         option.textContent = month;
//         monthSelect.appendChild(option);
//     }
// })();
// (function populateDays(){
//     for(let month in monthsDays) {

//     }
// })();