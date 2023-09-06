const optionMenu2 = document.querySelector(".Slected-menu");
let selectBtn2 = optionMenu2.querySelector(".sele-btn");
const moreMenu2 = document.querySelector(".more-menu");
const sleectInner = document.querySelector(".language_selected");

let = morebtn2 = moreMenu2.querySelector(".moresele-btn");
let plusIcon = document.querySelector(".fa-plus");
selectBtn2.addEventListener("click", (e) => {
  e.preventDefault();
  optionMenu2.classList.toggle("active");
  moreMenu2.classList.remove("active");
  sleectInner.classList.remove("active");
  plusIcon.classList.replace("fa-minus", "fa-plus");
});

morebtn2.addEventListener("click", (e) => {
  e.preventDefault();
  if (plusIcon.classList.contains("fa-plus")) {
    plusIcon.classList.replace("fa-plus", "fa-minus");
  } else {
    plusIcon.classList.replace("fa-minus", "fa-plus");
  }

  optionMenu2.classList.remove("active");
  moreMenu2.classList.toggle("active");
  sleectInner.classList.remove("active");
});

//   ============  Language Selected option  ===========

const languageBtn = document.querySelector(".language_selected_btn");
const languageOptions = document.querySelectorAll(".language_option");
const setLangageElement = document.querySelector(".select_language span");

languageBtn.addEventListener("click", (e) => {
  e.preventDefault();
  sleectInner.classList.toggle("active");
  optionMenu2.classList.remove("active");
  moreMenu2.classList.remove("active");
  plusIcon.classList.replace("fa-minus", "fa-plus");
});

languageOptions.forEach((option) => {
  option.addEventListener("click", (e) => {
    e.preventDefault();
    let selectedOption = option.innerText;
    setLangageElement.innerText = selectedOption;

    sleectInner.classList.remove("active");
    optionMenu2.classList.remove("active");
  });
});
