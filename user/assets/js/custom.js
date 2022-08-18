const slidePage = document.querySelector(".slidpage");
const firstNextBtn = document.querySelector(".nextBtn");
//second
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
//therd 
const prevBtnThird = document.querySelector(".prev-2");
const nextBtnThird = document.querySelector(".next-2");
// last btn
const prevBtnFourth = document.querySelector(".prev-3");
const submitBtn = document.querySelector(".submit");

const progressText = document.querySelectorAll(".step p");
const progressCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step .bullet");

let max = 4;
let current = 1;

firstNextBtn.addEventListener("click", function(){
	slidePage.style.marginLeft = "-25%";
	bullet[current - 1].classList.add("active");
	progressText[current - 1].classList.add("active");
	progressCheck[current - 1].classList.add("active");
	current += 1;
});
nextBtnSec.addEventListener("click", function(){
	slidePage.style.marginLeft = "-50%";
	bullet[current - 1].classList.add("active");
	progressText[current - 1].classList.add("active");
	progressCheck[current - 1].classList.add("active");
	current += 1;
});
nextBtnThird.addEventListener("click", function(){
	slidePage.style.marginLeft = "-75%";
	bullet[current - 1].classList.add("active");
	progressText[current - 1].classList.add("active");
	progressCheck[current - 1].classList.add("active");
	current += 1;
});

//submition btn

submitBtn.addEventListener("click", function(){
	bullet[current - 1].classList.add("active");
	progressText[current - 1].classList.add("active");
	progressCheck[current - 1].classList.add("active");
	current += 1;
	setTimeout(function(){
		alert("You'are successfully Singned up");
		location.reload();
	},800);
});

//prev button

prevBtnSec.addEventListener("click", function(){
	slidePage.style.marginLeft = "0%";
	slidePage.style.marginLeft = "-0%";
	bullet[current - 2].classList.remove("active");
	progressText[current - 2].classList.remove("active");
	progressCheck[current - 2].classList.remove("active");
	current -= 1;
});
prevBtnThird.addEventListener("click", function(){
	slidePage.style.marginLeft = "-25%";
	slidePage.style.marginLeft = "-25%";
	bullet[current - 2].classList.remove("active");
	progressText[current - 2].classList.remove("active");
	progressCheck[current - 2].classList.remove("active");
	current -= 1;
});
prevBtnFourth.addEventListener("click", function(){
	slidePage.style.marginLeft = "-50%";
	slidePage.style.marginLeft = "-25%";
	bullet[current - 2].classList.remove("active");
	progressText[current - 2].classList.remove("active");
	progressCheck[current - 2].classList.remove("active");
	current -= 1;
});