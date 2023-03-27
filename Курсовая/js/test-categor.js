let products = {
  data: [
    {
      productName: 'Тест по теме: Основы HTML',
      category: "html",
	  btn: "test/Основы HTML.html" ,
    },
	{
      productName: 'Тест по теме: Основы CSS',
      category: "css",
	  btn: "test/Основы CSS.html",
     
    },
    {
      productName: 'Тест по теме: Основы JavaScript',
      category: "js",
	  btn: "test/Основы JS.html",
    },
    {
      productName: 'Тест по теме: Основы PHP',
      category: "php",
	  btn: "test/Основы PHP.html",
    },
  ],
};

for (let i of products.data) {
  //Create Card
  let card = document.createElement("div");
  //Card should have category and should stay hidden initially
  card.classList.add("card", i.category, "hide");
  //container
  let container = document.createElement("div");
  container.classList.add("container");
  //product name
  let name = document.createElement("p");
  name.classList.add("product-name");
  name.innerText = i.productName.toUpperCase();
  container.appendChild(name);

  let btn = document.createElement("button");
  btn.innerHTML = "Пройти тест";
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

//parameter passed from button (Parameter same as category)
  function filterProduct(value) {
  //Button class code
  let buttons = document.querySelectorAll(".button-value");
  buttons.forEach((button) => {
    //check if value equals innerText
  if (value.toUpperCase() == button.innerText.toUpperCase()) {
      button.classList.add("active");
    } else {
      button.classList.remove("active");
    }
  });
  

  //select all cards
  let elements = document.querySelectorAll(".card");
  //loop through all cards
  elements.forEach((element) => {
    //display all cards on 'all' button click
   if (value == "all") {
      element.classList.remove("hide");
   } else {
      //Check if element contains category class
      if (element.classList.contains(value)) {
        //display element based on category
        element.classList.remove("hide");
      } else {
        //hide other elements
        element.classList.add("hide");
      }
    }
  });
}

//Search button click
document.getElementById("search").addEventListener("click", () => {
  //initializations
  let searchInput = document.getElementById("search-input").value;
  let elements = document.querySelectorAll(".product-name");
  let cards = document.querySelectorAll(".card");

  //loop through all elements
  elements.forEach((element, index) => {
    //check if text includes the search value
    if (element.innerText.includes(searchInput.toUpperCase())) {
      //display matching card
      cards[index].classList.remove("hide");
    } else {
      //hide others
      cards[index].classList.add("hide");
    }
  });
});

//Initially display all products
window.onload = () => {
  filterProduct("all");
};
