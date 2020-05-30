const leftBtn = document.getElementById	("leftbtn");
const rightBtn = document.getElementById("rightbtn");
const leftBtnId = leftBtn.id;
const rightBtnId = rightBtn.id;

function slide(event) 
{
	const slider = document.getElementsByClassName("content_films_info")[0];
	let transitionElem;
	if(this.id === leftBtnId) 
	{
		transitionElem = slider.removeChild(slider.firstElementChild);
		slider.append(transitionElem);
	} else if (this.id === rightBtnId) 
	{
		transitionElem = slider.removeChild(slider.lastElementChild);
		slider.prepend(transitionElem);
	}
}

leftBtn.addEventListener('click', slide);
rightBtn.addEventListener('click', slide);