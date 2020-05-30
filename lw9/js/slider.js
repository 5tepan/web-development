function slide(e) 
{
	const slider = document.getElementsByClassName('content_films_info')[0];
	let transition_elem;
	if(e.target.id === 'leftbtn') 
	{
		transition_elem = slider.removeChild(slider.firstElementChild);
		slider.append(transition_elem);
	} else if (e.target.id === 'rightbtn') 
	{
		transition_elem = slider.removeChild(slider.lastElementChild);
		slider.prepend(transition_elem);
	}
}
const leftbtn = document.getElementById	("leftbtn");
const rightbtn = document.getElementById('rightbtn');
leftbtn.addEventListener('click', slide);
rightbtn.addEventListener('click', slide);