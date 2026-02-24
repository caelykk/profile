// навайбкодил

export function calendar () {
  // ===== КОНСТАНТЫ =====
  const MIN_YEAR = 1900;
  const CURRENT_YEAR = new Date().getFullYear();

  // ===== КАЛЕНДАРЬ =====
  const calendar = {
    months: [
      "Январь","Февраль","Март","Апрель","Май","Июнь",
      "Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь"
    ],
    daysInMonth(year, month) {
      return new Date(year, month + 1, 0).getDate();
    }
  };

  // ===== ЭЛЕМЕНТЫ =====
  const s = {
    day: document.getElementById('birthDay'),
    month: document.getElementById('birthMonth'),
    year: document.getElementById('birthYear')
  };
  const errorBox = document.getElementById('birthdateError');
  const form = document.querySelector('form');

  // ===== УТИЛИТЫ =====
  const parseValue = (el) => {
    const v = parseInt(el.value);
    return isNaN(v) ? null : v;
  };

  const renderOptions = (el, values, placeholder, selected = null) => {
    el.innerHTML = `<option value="">${placeholder}</option>` +
      values.map(v => `<option value="${v.value}" ${v.value === selected ? 'selected' : ''}>${v.text}</option>`).join('');
  };

  // ===== ИНИЦИАЛИЗАЦИЯ =====
  renderOptions(
    s.month,
    calendar.months.map((name, i) => ({ value: i, text: name })),
    "Месяц"
  );

  renderOptions(
    s.year,
    Array.from({ length: CURRENT_YEAR - MIN_YEAR + 1 }, (_, i) => ({ value: CURRENT_YEAR - i, text: CURRENT_YEAR - i })),
    "Год"
  );

  renderOptions(
    s.day,
    Array.from({ length: 31 }, (_, i) => ({ value: i + 1, text: i + 1 })),
    "День"
  );

  // ===== ФУНКЦИЯ ОБНОВЛЕНИЯ ДНЕЙ =====
  const updateDays = () => {
    const y = parseValue(s.year);
    const m = parseValue(s.month);
    let selectedDay = parseValue(s.day);

    // Если месяц не выбран — показываем 31 день
    const maxDays = m !== null ? (y !== null ? calendar.daysInMonth(y, m) : calendar.daysInMonth(2001, m)) : 31;

    // Если день выбран и превышает максимум — корректируем
    if (selectedDay && selectedDay > maxDays) selectedDay = maxDays;

    // Если день не выбран, оставляем пустым
    renderOptions(
      s.day,
      Array.from({ length: maxDays }, (_, i) => ({ value: i + 1, text: i + 1 })),
      "День",
      selectedDay || null
    );
  };

  // ===== СОБЫТИЯ =====
  s.month.addEventListener('change', updateDays);
  s.year.addEventListener('change', () => {
    if (parseValue(s.month) === 1) updateDays(); // февраль
  });

  // ===== ВАЛИДАЦИЯ =====
  form.addEventListener('submit', (e) => {
    const values = [s.day.value, s.month.value, s.year.value];
    const filled = values.filter(v => v !== "").length;

    if (filled !== 0 && filled !== 3) {
      // e.preventDefault();
      errorBox.textContent = "Выберите дату полностью или оставьте поле пустым.";
    } else {
      errorBox.textContent = "";
    }
  });

};

// Пытался сам

// const yearSelect = document.getElementById('birthdateYear');

// function isLeapYear(year) {
//     return year % 4 === 0 && (year % 100 !== 0 || year % 400 === 0);
// };

// console.log(calendar.getDay("Февраль"));
// console.log(calendar.getMonth("Февраль"));

// console.log(Object.entries(calendar));


// (function createCalendar() {

    // let populateMonth = () => {

    //     for (let month in calendar) {
    //         for (let day = 1; day <= calendar[month]; day++) {

    //             const option = document.createElement('option');
    //             option.textContent = day;
    //             console.log(day);
    //             // daySelect.appendChild('option');
    //         };
    //     };
    // };
    // populateMonth();
// })();

// const calendar = {
//     '': 31,
//     "Январь": 31,
//     "Февраль": isLeapYear(yearSelect) ? 29 : 28,
//     "Март": 31,
//     "Апрель": 30,
//     "Май": 31,
//     "Июнь": 30,
//     "Июль": 31,
//     "Август": 31,
//     "Сенябрь": 30,
//     "Октябрь": 31,
//     "Ноябрь": 30,
//     "Декабрь": 31,

    // getDay: function (month) {
    //     return this[month];
    // },

    // getMonth: function (month) {
    //     return Object.keys(this);
    // }
// };


// function createMonth() {
//     for (const month in calendar) {

//     }
// }

// function fillMonth () {
//     for (let month in calendar) {
//         createOption(month, monthSelect);
//     }
// };
// const monthSelect = document.getElementById('birthdateMonth');

// const cal = {
//     months: [
//         "Январь",
//         "Февраль",
//         "Март",
//         "Апрель",
//         "Май",
//         "Июнь",
//         "Июль",
//         "Август",
//         "Сентябрь",
//         "Октябрь",
//         "Ноябрь",
//         "Декабрь",
//     ],
//     days: [31, isLeapYear(yearSelect) ? 29 : 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31],

//     fill: function (prop, select) {
//         for(let el of Array.from(prop)) {
//             createOption(el, select);
//         };
//     },

// };

// const daySelect = document.getElementById('birthdateDay');
// cal.fill(cal.months, monthSelect);
// cal.fill(cal.days, daySelect);

// const populateMonth = () => {
//     for(let month in calendar) {
//         if(month) { createOption(month, monthSelect) };
//     }
// };

// const daysOfMonth = () => {
//     for (let day = 1; day <= calendar[monthSelect]; day++) {
//         createOption(day, daySelect)
//     }
// };
// daysOfMonth();
// populateMonth();

// function createOption(text, select) {
//     const option = document.createElement('option');
//     option.textContent = text;
//     select.appendChild(option);
// }

// (function populateDays(){
//     for(let month in monthsDays) {

//     }
// })();