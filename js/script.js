"use strict";

let x = prompt("Введите число: "),
    y = prompt("Введите степень: ");

function pow(x,y) {
    // 1й способ
    let result = x ** y;

    // 2й способ
    result = Math.pow(x, y);

    console.log(result);
};

pow(x,y);