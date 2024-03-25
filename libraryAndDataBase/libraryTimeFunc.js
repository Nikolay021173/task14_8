'use strict'
    timeUntilEndDiscProm('h4', 2024, 3, 10, 0, 0, 0);


    function timeUntilEndDiscProm(select, year, month, day, hour, min, sec) {
	let sel = document.querySelector(select);
	setInterval(function() {
    let now  = new Date();
    let date = new Date(year, month, day, hour, min, sec);
    let diff = date.getTime() - now.getTime();
    if (diff >= 0) {
    let days = Math.floor(diff / (1000 * 60 * 60 * 24));
        let hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let mins = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
        let secs = Math.floor((diff % (1000 * 60)) / 1000);    


        sel.innerHTML = 'До конца акции осталось: ' + addZero(days) + ' дн. ' + addZero(hours) + 
        ' ч. : ' + addZero(mins) + ' мин. : ' + addZero(secs) + ' сек.';
    } else {
        sel.innerHTML = 'Акция, скидки 10% на мвсе услуги завершена, следите за объявлениями.'        
    }
		}, 1000);
            } 

	function addZero(num) {
				if (num >= 0 && num <= 9) return '0' + num;
					else return num;
		}