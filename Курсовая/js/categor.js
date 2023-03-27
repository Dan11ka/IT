let products = {
  data: [
    {
      productName: 'Основы HTML',
      category: "html",
	  btn: "курсы/html/Основы HTML.pdf" ,
    },
	{
      productName: 'Основы CSS',
      category: "css",
	  btn: "курсы/css/Основы CSS.pdf",
     
    },
    {
      productName: 'Основы JavaScript',
      category: "js",
	  btn: "курсы/js/Основы js.pdf",
    },
    {
      productName: 'Основы PHP',
      category: "php",
	  btn: "курсы/php/Основы php.pdf",
    },
    {
      productName: 'Теги HTML',
      category: "html",
	  btn: "курсы/html/Теги HTML.pdf" ,
    },
	{
      productName: 'Селекторы CSS',
      category: "css",
	  btn: "курсы/css/Селекторы CSS.pdf",
     
    },
    {
      productName: 'Синтаксис JavaScript',
      category: "js",
	  btn: "курсы/js/Синтаксис js.pdf",
    },
    {
      productName: 'Переменные PHP',
      category: "php",
	  btn: "курсы/php/Переменные.pdf",
    },
    {
      productName: 'Текст HTML',
      category: "html",
	  btn: "курсы/html/Текст.pdf" ,
    },
	{
      productName: 'Шрифты CSS',
      category: "css",
	  btn: "курсы/css/Базовый синтаксис.pdf",
     
    },
    {
      productName: 'Переменные JavaScript',
      category: "js",
	  btn: "курсы/js/Введение.pdf",
    },
    {
      productName: 'Условия PHP',
      category: "php",
	  btn: "курсы/php/Введение.pdf",
    },
    {
      productName: 'Списки HTML',
      category: "html",
	  btn: "курсы/html/Базовые теги.pdf" ,
    },
	{
      productName: 'Текст CSS',
      category: "css",
	  btn: "курсы/css/Базовый синтаксис.pdf",
     
    },
    {
      productName: 'Функции вывода JavaScript',
      category: "js",
	  btn: "курсы/js/Введение.pdf",
    },
    {
      productName: 'Циклы PHP',
      category: "php",
	  btn: "курсы/php/Введение.pdf",
    },
    {
      productName: 'Изображения HTML',
      category: "html",
	  btn: "курсы/html/Базовые теги.pdf" ,
    },
	{
      productName: 'Списки CSS',
      category: "css",
	  btn: "курсы/css/Базовый синтаксис.pdf",
     
    },
    {
      productName: 'Функции вывода JavaScript',
      category: "js",
	  btn: "курсы/js/Введение.pdf",
    },
    {
      productName: 'Массивы PHP',
      category: "php",
	  btn: "курсы/php/Введение.pdf",
    },
    {
      productName: 'Путь к файлу HTML',
      category: "html",
	  btn: "курсы/html/Базовые теги.pdf" ,
    },
    {
      productName: 'Таблицы HTML',
      category: "html",
	  btn: "курсы/html/Базовые теги.pdf" ,
    },
    {
      productName: 'Формы HTML',
      category: "html",
	  btn: "курсы/html/Базовые теги.pdf" ,
    },
    {
      productName: 'Картинка в блоке CSS',
      category: "css",
	  btn: "курсы/css/Базовый синтаксис.pdf",
     
    },
    {
      productName: 'Таблица CSS',
      category: "css",
	  btn: "курсы/css/Базовый синтаксис.pdf",
     
    },
    {
      productName: 'Оператор присваивания JavaScript',
      category: "js",
	  btn: "курсы/js/Введение.pdf",
    },
    {
      productName: 'Арифметические операторы JavaScript',
      category: "js",
	  btn: "курсы/js/Введение.pdf",
    },
    {
      productName: 'Сравнение JavaScript',
      category: "js",
	  btn: "курсы/js/Введение.pdf",
    },
    {
      productName: 'Функции PHP',
      category: "php",
	  btn: "курсы/php/Основы php.pdf",
    },
    {
      productName: 'Объекты PHP',
      category: "php",
	  btn: "курсы/php/Основы php.pdf",
    },
  ],
};

for (let i of products.data) {
 
  let card = document.createElement("div");
  
  card.classList.add("card", i.category, "hide");

  let container = document.createElement("div");
  container.classList.add("container");
 
  let name = document.createElement("p");
  name.classList.add("product-name");
  name.innerText = i.productName.toUpperCase();
  container.appendChild(name);
 
   let btn = document.createElement("button");
  btn.innerHTML = "Открыть курс";
  btn.classList.add("btn-click");
  btn.type = "submit";
  btn.name = "formBtn";
  btn.onclick = function () {
  location.href = (i.btn);  
  };
  container.appendChild(btn);
	
  
  card.appendChild(container);
  document.getElementById("products").appendChild(card);
}


function filterProduct(value) {

  let buttons = document.querySelectorAll(".button-value");
  buttons.forEach((button) => {
   
    if (value.toUpperCase() == button.innerText.toUpperCase()) {
      button.classList.add("active");
    } else {
      button.classList.remove("active");
    }
  });

 
  let elements = document.querySelectorAll(".card");

  elements.forEach((element) => {
  
    if (value == "all") {
      element.classList.remove("hide");
    } else {
   
      if (element.classList.contains(value)) {
       
        element.classList.remove("hide");
      } else {
       
        element.classList.add("hide");
      }
    }
  });
}


document.getElementById("search").addEventListener("click", () => {

  let searchInput = document.getElementById("search-input").value;
  let elements = document.querySelectorAll(".product-name");
  let cards = document.querySelectorAll(".card");

  elements.forEach((element, index) => {

    if (element.innerText.includes(searchInput.toUpperCase())) {

      cards[index].classList.remove("hide");
    } else {

      cards[index].classList.add("hide");
    }
  });
});


window.onload = () => {
  filterProduct("all");
};
